@extends('template')

@section('main')
<div id="siswa">
      <h2>Nama Siswa</h2>

     @if (!empty($siswa_list))
     <table class="table table-striped">
    <tr>
        <th>NISN</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis kelamin</th>
        <th>Kelas</th>
        <th>Action</th>
    </tr>

        <tbody>
            @foreach($siswa_list as $siswa)
                <tr>
                <td>{{$siswa->nisn}}</td>
                <td><a href="{{url('siswa/' . $siswa->id . '/profile')}}">{{$siswa->nama_siswa}}</a></td>
                <td>{{$siswa->tanggal_lahir}}</td>
                <td>{{$siswa->jenis_kelamin}}</td>
                <td>{{ ! empty($siswa->kelas->nama_kelas)?
                        $siswa->kelas->nama_kelas : '-'}}</td>
                <td><a class="btn btn-success btn-sm" href="{{url('siswa/' . $siswa->id)}}">Detail</a></td>
                <td><a class="btn btn-warning btn-sm" href="{{url('siswa/' . $siswa->id . '/edit')}}">Edit</a></td>
                <td><a class="btn btn-danger btn-sm" href="{{url('siswa/' . $siswa->id . '/delete')}}">Delete</a></td>

                </tr>
            @endforeach 
        
    @else
        <p>Tidak ada data siswa.</p>
    @endif

</div>
  </tbody>
</table>
    <a href="{{url('siswa/create')}}" class="btn btn-primary">Tambah</a>
    <a href="../public/siswa/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
    <table class='table table-bordered'>
<br>
<br>
<br>
<br>
<br>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 Belajar_Laravel</p>
    </div>
@stop