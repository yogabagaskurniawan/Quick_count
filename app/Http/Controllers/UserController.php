<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = User::orderBy('name', 'asc')->get();
        return view('admin.mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahasiswa.formAdd');
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
            'name' => 'required|string|min:2',
            'nim' => 'required|integer|unique:users|min:8',
            'role' => Rule::in(['admin', null]),
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['name', 'nim', 'role']);
        $data['password'] = Hash::make($request->input('password'));

        User::create($data);

        return redirect('/admin/mahasiswa')->with('success', 'Data berhasil disimpan!');
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
        $mahasiswa = User::findOrFail($id);
        return view('admin.mahasiswa.formEdit', compact('mahasiswa'));
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
        $this->validate($request, [
            'name' => 'string|required|min:2',
            'nim' => 'required|unique:users,nim,' . $id, 
            'role' => Rule::in(['admin', null]),
            'password' => 'required|min:6',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->nim = $request->input('nim');
        $user->role = $request->input('role');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/admin/mahasiswa')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        // return back()->with('success','Data berhasil dihapus');
        return redirect('/admin/mahasiswa')->with('success', 'Data berhasil dihapus');
    }
}
