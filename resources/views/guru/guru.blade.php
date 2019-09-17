@extends('template')

@section('main')
<div id="guru">
      <h2>Guru</h2>

     @if (!empty($guru_list))
     <table class="table table-striped">
    <tr>
        
        <th>NIP</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis kelamin</th>
        <th>Action</th>
    </tr>

        <tbody>
            @foreach($guru_list as $guru)
                <tr>
                
                <td>{{$guru->id}}</td>
                <td>{{$guru->nama_guru}}</td>
                <td>{{$guru->tanggal_lahir}}</td>
                <td>{{$guru->jenis_kelamin}}</td>
                <td><a class="btn btn-success btn-sm" href="{{url('guru/' . $guru->id)}}">Detail</a></td>
                <td><a class="btn btn-warning btn-sm" href="{{url('guru/' . $guru->id . '/edit')}}">Edit</a></td>
                <td><a class="btn btn-danger btn-sm" href="{{url('guru/' . $guru->id . '/delete')}}">Delete</a></td>

                </tr>
            @endforeach 
        
    @else
        <p>Tidak ada data guru.</p>
    @endif

</div>
  </tbody>
</table>
    <a href="{{url('guru/create')}}" class="btn btn-primary">Tambah</a>
<br>
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