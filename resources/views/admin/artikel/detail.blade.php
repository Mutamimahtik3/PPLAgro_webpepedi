@extends('base')

@section('content')
    <div class="starter-template">
        <img src="{{asset(Storage::url('public/artikel/'.$data->gambar))}}" alt="Thumbnail [100%x225]" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" class="card-img-top" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
        
        <h1 class="mt-2">{{$data->judul}}</h1>
        <small>Date Published : {{$data->created_id}}</small>
        <p class="lead mt-3">
            {!! $data->isi !!}
        </p>
    </div>
@endsection