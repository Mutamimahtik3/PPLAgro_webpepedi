@extends('base')

@section('content')
@if (Auth::user()->role == 'admin')
    <a class="btn btn-primary mb-3" href="{{route('a.artikel.create')}}">Tambah Artikel</a>
@endif
<div class="card mb-4">
    <div class="card-body">
    

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Waktu Post</th>
                        <th>Isi</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $index => $data)
                    <tr>
                        <td>{{($index +1)}}</td>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>{{\Illuminate\Support\Str::limit($data->isi, 10, $end='...') }}</td>
                        <td>{{$data->kategori}}</td>
                        <td>
                            <a class="btn btn-primary" href="">Detail</a>
                            <a class="btn btn-warning" href="">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection