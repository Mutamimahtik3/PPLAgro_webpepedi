@extends('base')

@section('content')
<div class="card mb-4">
    <div class="card-body">
    <a class="btn btn-primary mb-3" href="{{route('a.konsultan.create')}}">Tambah Konsultan</a>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pekerjaan</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $index => $data)
                    <tr>
                        <td>{{($index +1)}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->pekerjaan}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('a.konsultan.show',['id' => $data->id])}}">Detail</a>
                            <a class="btn btn-warning" href="{{route('a.konsultan.edit',['id' => $data->id])}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection