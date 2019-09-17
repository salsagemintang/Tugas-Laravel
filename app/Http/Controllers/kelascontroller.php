<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;

class kelascontroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function kelas(){
        $halaman = 'kelas';
        $kelas_list = Kelas::all();
        return view('kelas.kelas', compact('halaman', 'kelas_list'));
    }
    public function create(){
        $halaman = 'kelas';
        return view('kelas.create', compact('halaman'));
    }
    public function edit(){
        $halaman = 'kelas';
        $kelas = Kelas::findOrFail();
        return view('kelas.edit', compact('halaman','kelas'));
    }
    public function delete(){
        $kelas = Kelas::findOrFail();
        $kelas->delete();
        return redirect('kelas');
    }
    public function store(Request $request){
        Kelas::create($request->all());
        return redirect('kelas');
    }
}
