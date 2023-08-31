<?php

namespace App\Http\Controllers;

use App\Kandidat;
use App\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kandidat = Kandidat::orderBy('name', 'asc')->get();
        return view('admin.kandidat.index', compact('kandidat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::get();
        return view('admin.kandidat.formAdd', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|unique:kandidats',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
            'status' => 'required|in:aktif,non-aktif,delete',
            'event_id' => [
                'required',
                'exists:events,id', // validasi bahwa event_id harus ada di dalam tabel events dengan kolom id
            ],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $name = 'kandidat_' . time();
            $filename = $name . '.' . $image->getClientOriginalExtension();
    
            $folder = '/uploads/images';
            $filePath = $image->storeAs($folder, $filename, 'public');
    
            $kandidat = new Kandidat();
            $kandidat->name = $request->input('name');
            $slug = Str::slug($kandidat->name);
            $kandidat->slug = $slug;
            $kandidat->deskripsi = $request->input('deskripsi');
            $kandidat->status = $request->input('status');
            $kandidat->event_id = $request->input('event_id');
            $kandidat->image = $filePath;
            $kandidat->save();
            return redirect('/admin/kandidat')->with('success', 'Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function show(Kandidat $kandidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kandidat = Kandidat::findOrFail($id);
        $events = Event::get();
        return view('admin.kandidat.formEdit', compact('kandidat','events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kandidat = Kandidat::findOrFail($id);
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|unique:kandidats,name,' . $id . ',id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
            'status' => 'required|in:aktif,non-aktif,delete',
            'event_id' => [
                'required',
                'exists:events,id', // validasi bahwa event_id harus ada di dalam tabel events dengan kolom id
            ],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $name = 'kandidats_' . time();
            $filename = $name . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/images';
            $filePath = $image->storeAs($folder, $filename, 'public');

            // Hapus image lama 
            Storage::disk('public')->delete($kandidat->image);

            // $kandidat->image = $filePath;
            
            $kandidat->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'deskripsi' => $request->deskripsi,
                'image' => $filePath,
                'event_id' => $request->input('event_id'),
                'status' => $request->input('status')
            ]);
    
            return redirect('/admin/kandidat')->with('success','Data berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kandidat $kandidat)
    {
        //
    }

    public function detailKandidat($id)
    {
        $kandidat = Kandidat::findOrFail($id);
        return view('admin.kandidat.detailKandidat', compact('kandidat'));
    }
}
