@extends('template')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
 integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"  textColor="white">

@section('main')
    <div id="guru">
        <h2>Tambah Guru</h2>

        <form action="{{url('guru')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="id" class="control-label">NIP</label>
        <input name="id" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="nama_guru" class="control-label">Nama</label>
        <input name="nama_guru" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
        <input name="tanggal_lahir" type="date" class="form-control">
    </div>

    <div class="form-group">
        <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked>
            <label class="form-check-label" for="jenis_kelamin">
            Perempuan
        </label>
    </div>

    <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
            <label class="form-check-label" for="jenis_kelamin">
            Laki-Laki
        </label>
    </div>
    <div class="form-group">
            <label for="fotoGuru">Foto Guru</label>
            <input type="file" name="fotoGuru" class="form-control">
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@stop