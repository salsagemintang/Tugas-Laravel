<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class gurucontroller extends Controller
{
    public function guru()
    {
        $halaman='guru';
        $guru_list = Guru::orderBy('nama_guru', 'asc')->paginate(5);
        $jumlah_guru = Guru::count();
        return view('guru.guru', compact('halaman' , 'guru_list', 'jumlah_guru'));

    }
public function create(){
            $halaman = 'guru';
            return view('guru.create', compact('halaman'));
            if($request->hasFile('fotoGuru')){
            $request->file('fotoGuru')->move('foto/',$request->file('fotoGuru')->getClientOriginalName());
            $guru->fotoGuru = $request->file('fotoGuru')->getClientOriginalName();
            }
            $guru->save();
        return redirect('guru');
    }

public function store(Request $request){
        Guru::create($request->all());
        return redirect('guru');
    }

    public function show($id)
    {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        return view('guru.show' , compact('halaman' , 'guru'));
    }

    public function edit($id)
    {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        return view('guru.edit' , compact('halaman' , 'guru'));
    }

    public function update($id, Request $request)
    {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        $guru->id = $request->id;
        $guru->nama_guru = $request->nama_guru;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        
        if($request->hasFile('fotoGuru')){
            $request->file('fotoGuru')->move('foto/',$request->file('fotoGuru')->getClientOriginalName());
            $guru->fotoGuru = $request->file('fotoGuru')->getClientOriginalName();
         }
        $guru->save();
        return redirect('guru');
    }

    public function delete($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect('guru');
    }

    public function profile($id)
    {
        $halaman = "guru";
        $guru = Guru::findOrFail($id);
        return view('guru.profile',  compact('halaman' , 'guru'));
    }

}