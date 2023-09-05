<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'asc')->get();
        return view('admin.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $add = new Artikel();
        return view('admin.artikel.formAdd', compact('add'));
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
            'name' => 'required|string|min:2|unique:artikel',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required',
            'status' => 'required|in:aktif,non-aktif,delete'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $name = 'Artikel_' . time();
            $filename = $name . '.' . $image->getClientOriginalExtension();
    
            $folder = '/uploads/images'; // Perubahan direktori
            $filePath = $image->storeAs($folder, $filename, 'public');
    
            $artikel = new Artikel();
            $artikel->name = $request->input('name');
            $slug = Str::slug($artikel->name);
            $artikel->slug = $slug;
            $artikel->deskripsi = $request->input('deskripsi');
            $artikel->status = $request->input('status');
            $artikel->image = $filePath;
            $artikel->save();
    
            return redirect('/admin/artikel')->with('success', 'Data berhasil ditambahkan');
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $edit = Artikel::findOrFail($id);
        return view('admin.artikel.formEdit', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
    
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|unique:artikel,name,' . $id . ',id',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048', // Tetap validasi gambar, tetapi tidak wajib
            'deskripsi' => 'required',
            'status' => 'required|in:aktif,non-aktif,delete',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $name = 'Artikel_' . time();
            $filename = $name . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/images';
            $filePath = $image->storeAs($folder, $filename, 'public');
    
            // Hapus image lama 
            Storage::disk('public')->delete($artikel->image);
    
            $artikel->update([
                'name' => $request->name,
                'image' => $filePath,
                'deskripsi' => $request->deskripsi,
                'status' => $request->input('status'),
                'slug' => Str::slug($request->name),
            ]);
    
            return redirect('/admin/artikel')->with('success', 'Data berhasil diupdate dengan gambar baru');
        } else {
            // Jika tidak ada gambar baru yang diunggah atau gambar tidak valid
            $artikel->update([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
                'status' => $request->input('status'),
                'slug' => Str::slug($request->name),
            ]);
    
            return redirect('/admin/artikel')->with('success', 'Data berhasil diupdate (tanpa perubahan gambar)');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
