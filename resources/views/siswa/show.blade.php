@extends('template')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
 integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"  textColor="white">

@section('main')
<div id="siswa">
      <h2>Detail Siswa</h2>

      <table class="table table-striped">
        <tr>
        <center>
            <img class="rounded" src="{{asset('images/'.$siswa->avatar) }}" width="300px" height="auto">
        </center>
        </tr>
        <br>
        <tr>
            <th>NISN</th>
            <td>{{$siswa->nisn}}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{$siswa->nama_siswa}}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{$siswa->tanggal_lahir}}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>{{ !empty($siswa->kelas->nama_kelas) ?
                        $siswa->kelas->nama_kelas : '-' }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{$siswa->jenis_kelamin}}</td>
        </tr>
    </table>
</div>
@stop