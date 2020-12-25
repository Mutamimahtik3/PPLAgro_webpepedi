@extends('base')

@section('content')
    <div class="starter-template">
        <img src="{{asset('artikel/'.$data->gambar)}}">        
        <h1 class="mt-2">{{$data->judul}}</h1>
        <small>Date Published : {{$data->created_id}}</small>
        <p class="lead mt-3">
            {!! $data->isi !!}
        </p>
    </div>
@endsection
