<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::orderBy('name', 'asc')->get();
        return view('admin.event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.formAdd');
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
            'name' => 'required|string|min:2|unique:events',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
            'status' => 'required|in:aktif,non-aktif,delete',
            'tgl_mulai' => 'required|date|after_or_equal:today',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $name = 'event_' . time();
            $filename = $name . '.' . $image->getClientOriginalExtension();
    
            $folder = '/uploads/images';
            $filePath = $image->storeAs($folder, $filename, 'public');
    
            $event = new Event();
            $event->name = $request->input('name');
            $slug = Str::slug($event->name);
            $event->slug = $slug;
            $event->deskripsi = $request->input('deskripsi');
            $event->tgl_mulai = $request->input('tgl_mulai');
            $event->status = $request->input('status');
            $event->image = $filePath;
            $event->save();
            return redirect('/admin/event')->with('success', 'Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.formEdit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|unique:events,name,' . $id . ',id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
            'status' => 'required|in:aktif,non-aktif,delete',
            'tgl_mulai' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $name = 'event_' . time();
            $filename = $name . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/images';
            $filePath = $image->storeAs($folder, $filename, 'public');

            // Hapus image lama 
            Storage::disk('public')->delete($event->image);

            // $artikel->image = $filePath;
            $event->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'deskripsi' => $request->deskripsi,
                'image' => $filePath,
                'tgl_mulai' => $request->input('tgl_mulai'),
                'status' => $request->input('status')
            ]);
    
            return redirect('/admin/event')->with('success','Data berhasil diupdate');
        } else {
            // Jika tidak ada gambar baru yang diunggah atau gambar tidak valid
            $event->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'deskripsi' => $request->deskripsi,
                'tgl_mulai' => $request->input('tgl_mulai'),
                'status' => $request->input('status'),
            ]);
    
            return redirect('/admin/event')->with('success', 'Data berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function detailEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.detailEvent', compact('event'));
    }
}
