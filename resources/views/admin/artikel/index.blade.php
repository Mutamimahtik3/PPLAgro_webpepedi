@extends('base')

@section('content')
    {{-- <div class="jumbotron text-center"> --}}
        @if (Auth::user()->role == 'admin')
            <a class="btn btn-primary mb-3" href="{{route('a.artikel.create')}}">Tambah Artikel</a>
        @endif
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($data as $data)
                    <div class="col-md-4">
                        <div class="car box-shadow">
                            <img src="{{asset('artikel/'.$data->gambar)}}" alt="Thumbnail [100%x225]" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" class="card-img-top" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text">
                                    {{$data->judul}}
                                </p>
                                <small>
                                    Kategori {{ucwords($data->kategori)}}
                                </small>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        @if(Auth::user()->role=='admin')
                                        <a class="btn btn-outline-secondary" href="{{route('a.artikel.show', ['id' => $data->id])}}">
                                            View
                                        </a>
                                        <a class="ml-1 btn btn-outline-secondary" href="{{route('a.artikel.edit', ['id' => $data->id])}}">
                                            Edit
                                        </a>
                                        <form action="{{route('a.artikel.delete', ['id' => $data->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="ml-1 btn btn-outline-secondary" type="submit">
                                            Delete
                                        </button>
                                        </form>
                                        @else
                                        <a class="btn btn-outline-secondary" href="{{route('p.artikel.show', ['id' => $data->id])}}">
                                            View
                                        </a>
                                        @endif
                                    </div>
                                <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    {{-- </div> --}}
@endsection