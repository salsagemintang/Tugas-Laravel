@extends('template')

@section('main')
<div id="guru">
      <h2>Detail Guru</h2>

      <table class="table table-striped">
       <tr>
        <center>
            <img class="rounded" src="{{asset('foto/'.$guru->fotoGuru) }}" width="300px" height="auto">
        </center>
        </tr>
        <br>
        <tr>
            <th>NIP</th>
            <td>{{$guru->id}}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{$guru->nama_guru}}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{$guru->tanggal_lahir}}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{$guru->jenis_kelamin}}</td>
        </tr>
    </table>
</div>
@stop