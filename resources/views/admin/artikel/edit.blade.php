@extends('base')

@section('content')
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
<div class="card-body">
    <div class="table-responsive">
        <form action="{{route('a.artikel.update', ['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
            <label class="small mb-1" for="judul">Judul</label>
            <input class="form-control py-4" id="judul" type="text" placeholder="Judul Artikel" name="judul" value="{{$data->judul}}"/>
            </div>
            @error('judul')
            <span>
                {{ ucwords($message) }}
            </span>
            @enderror

            <div class="form-group">
            <label class="small mb-1" for="gambar">Gambar</label>
            <input class="form-control" id="gambar" type="file" name="gambar"/>
            <img src="{{asset('artikel/'.$data->gambar)}}" height="200px">
            </div>
            @error('gambar')
            <span>
                {{ ucwords($message) }}
            </span>
            @enderror

            <div class="form-group">
            <label class="small mb-1" for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-control">
            	<option value="artikel" {{$data->kategori=='artikel' ? 'selected' :''}}>{{ucwords('artikel')}}</option>
            	<option value="berita" {{$data->kategori=='berita' ? 'selected' :''}}>{{ucwords('berita')}}</option>
            </select>
            </div>
            @error('kategori')
            <span>
                {{ ucwords($message) }}
            </span>
            @enderror
            <div class="form-group">
            <label class="small mb-1" for="summernote">Konten</label>
            <textarea id="summernote" name="konten" cols="30">{!! $data->isi !!}</textarea>
            </div>
            @error('konten')
            <span>
                {{ ucwords($message) }}
            </span>
            @enderror
            
			<button type="submit" class="btn btn-primary">
				Submit
			</button>


       </form>
   </div>
</div> 
@endsection