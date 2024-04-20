<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{

    public function index()
    {
        return view('mahasiswa', [
            'mahasiswas' => Mahasiswa::all()
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIM' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'jurusan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $request->nama . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename); 
            $validatedData['foto'] = $filename;
        }        
        
        

        Mahasiswa::create($validatedData);
        return redirect('/mahasiswa');
    }

    public function show($nim)
    {
        $Mahasiswa = Mahasiswa::find($nim);
        return view('detail', [
            'mahasiswa' => $Mahasiswa
        ]);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('edit', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'NIM' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'jurusan' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $request->nama . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename); 
            $validatedData['foto'] = $filename;
        }   

        $mahasiswa->update($validatedData);
        return redirect('/mahasiswa');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        Storage::delete('public/images/' . $mahasiswa->foto);
        Mahasiswa::destroy($mahasiswa->id);

        return redirect('/mahasiswa');
    }
}
