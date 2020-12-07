@extends('base')

@section('content')
<div class="">
  <a href="{{route('profile.edit')}}" class="btn btn-primary mb-3">
    Ubah Data Diri
  </a>
  <br>
    <div class="table table-responsive table-stripped table-bordered">
        <table style="width:100%">
            <tr>
              <th>Nama</th>
              <td>{{$data->name}}</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>{{$data->email}}</td>
            </tr>
            <tr>
              <th>Nomor HP</th>
              <td>{{$data->nohp}}</td>
            </tr>
            <tr>
              <th>Jenis Kelamin</th>
              <td>{{$data->jenis_kelamin}}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{$data->alamat}}</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>{{$data->pekerjaan}}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{$data->role}}</td>
              </tr>
          </table>
    </div>
</div>
@endsection