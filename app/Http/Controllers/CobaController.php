<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;

class CobaController extends Controller
{
    public function index()
    {
        $friends = Friends::orderBy('id', 'desc')->paginate(3);

        return view('friends.index', compact('friends'));
    }

    public function create()
    {
        return view('friends.create');
    }

    public function store(Request $request)
    {
        //Validate the Request...
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_telp' => 'required|numeric',
            'alamat' => 'required',
            'pendidikan' => 'required',

        ]);
        
        $friends = new Friends;

        $friends->nama = $request->nama;
        $friends->no_telp = $request->no_telp;
        $friends->alamat = $request->alamat;
        $friends->pendidikan = $request->pendidikan;

        $friends->save();

        return redirect('/');
    }

    public function show($id)
    {
        $friend = Friends::where('id', $id)->first();
        return view('friends.show', ['friend' => $friend]);
    }

    public function edit($id)
    {
        $friend = Friends::where('id', $id)->first();
        return view('friends.edit', ['friend' => $friend]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_telp' => 'required|numeric',
            'alamat' => 'required',
            'pendidikan' => 'required',

        ]);

        Friends::find($id)->update([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'pendidikan' => $request->pendidikan
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Friends::find($id)->delete();

        return redirect('/');
    }
}