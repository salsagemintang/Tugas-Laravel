 @extends('template')

@section('main')
<div id="kelas">
<h2>Kelas</h2>

@if (!empty($kelas_list))
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><h3>ID</h3></th>
      <th scope="col"><h3>Nama Kelas</h3></th>
      <th scope="col"><h3>Aksi</h3></th>

    </tr>
  </thead>
  <tbody>
      @foreach($kelas_list as $kelas)
      <tr>
        <td>{{ $kelas->id }}</td>
        <td>{{ $kelas->nama_kelas }}</td>
        <td>
        <a class="btn btn-success btn-sm" href="{{ url('kelas' . $kelas->id) }}">Detail</a>
        <a class="btn btn-warning btn-sm" href="{{ url('kelas/' . $kelas->id. '/edit' )}}">Edit</a>
        <a class="btn btn-danger btn-sm" href="{{ url('kelas/' . $kelas->id . '/delete') }}">Delete</a>
        </td>


      </tr>
      @endforeach
      </tbody>
    </table>
    <a href="{{ url('kelas/create') }}" class="btn btn-primary">Tambah Kelas</a>

      @else
          <p>Tidak ada data kelas</p>
      @endif

    </div>
  @stop


@section('footer')
    <div id="footer">
        <p>&copy; 2019 Belajar_Laravel</p>
    </div>
@stop