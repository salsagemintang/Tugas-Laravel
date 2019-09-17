@extends('temppdf')

@section('main')
<div id="siswa">
<h2>Siswa</h2>

@if (!empty($siswa_list))
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><h3>NISN</h3></th>
      <th scope="col"><h3>Nama</h3></th>
      <th scope="col"><h3>Tgl Lahir</h3></th>
      <th scope="col"><h3>JK</h3></th>
      <th scope="col"><h3>Kelas</h3></th>

    </tr>
  </thead>
  <tbody>
      @foreach($siswa_list as $siswa)
      <tr>
        <td>{{ $siswa->nisn }}</td>
        <td>{{ $siswa->nama_siswa }}</a></td>
        <td>{{ $siswa->tanggal_lahir }}</td>
        <td>{{ $siswa->jenis_kelamin }}</td>
        <td>{{ ! empty($siswa->kelas->nama_kelas) ?
              $siswa->kelas->nama_kelas : '-'
            }}</td>



      </tr>
      @endforeach
      </tbody>
    </table>
      @else
          <p>Tidak ada data siswa</p>
      @endif

    </div>
  @stop


@section('footer')
    <div id="footer">
        <p>&copy; 2019 Belajar_Laravel</p>
    </div>
@stop