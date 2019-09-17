<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;
use App\Kelas;
use PDF;

class siswacontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function siswa(){
            $halaman = 'siswa';
            $siswa_list= Siswa::all();
            return view('siswa.index', compact('halaman' , 'siswa_list'));
        }

    // public function index(){
        // $siswa = Siswa::all();
        // return view('siswa' ,['siswa' =>$siswa]);
    // }

    public function siswa_pdf(){
        $siswa_list = Siswa::all();
        $halaman = 'Laporan Siswa';
        $pdf = PDF::loadview('siswa.siswa_pdf',['siswa'=>$siswa]);
        return $pdf->download('laporan-siswa-pdf');
        // return view ('siswa.cetak_pdf', compact ('siswa_list', 'halaman'));
    }

    public function create(){
            $halaman = 'siswa';
            return view('siswa.create', compact('halaman'));
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        return redirect('siswa');
    }

    public function store(Request $request){
        Siswa::create($request->all());
        return redirect('siswa');
    }

    public function show($id)
    {
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show' , compact('halaman' , 'siswa'));
    }

    public function edit($id)
    {
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('siswa.edit' , compact('halaman' , 'siswa' ,'kelas'));
    }

    public function update($id, Request $request)
    {
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        $siswa->nisn = $request->nisn;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->id_kelas = $request->id_kelas;
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
         }
        $siswa->save();
        return redirect('siswa');
    }

    public function delete($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }

    public function profile($id)
    {
        $halaman = "siswa";
        $siswa = Siswa::findOrFail($id);
        return view('siswa.profile',  compact('halaman' , 'siswa'));
    }

}