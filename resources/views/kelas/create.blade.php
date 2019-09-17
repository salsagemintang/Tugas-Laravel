@extends('template')

@section('main')
    <div id="kelas">
        <h2>Tambah Kelas</h2>

        <form action="{{ url('kelas') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="id" class="control-label">ID</label>
                <input name="id" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_kelas" class="control-label">Kelas</label>
                <input name="nama_kelas" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop