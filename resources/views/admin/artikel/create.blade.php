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
        <form action="{{route('a.artikel.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label class="small mb-1" for="judul">Judul</label>
            <input class="form-control py-4" id="judul" type="text" placeholder="Judul Artikel" name="judul" value="{{old('judul')}}"/>
            </div>
            @error('judul')
            <span>
                {{ ucwords($message) }}
            </span>
            @enderror

            <div class="form-group">
            <label class="small mb-1" for="gambar">Gambar</label>
            <input class="form-control" id="gambar" type="file" name="gambar" value="{{old('gambar')}}"/>
            </div>
            @error('gambar')
            <span>
                {{ ucwords($message) }}
            </span>
            @enderror

            <div class="form-group">
            <label class="small mb-1" for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-control">
            	<option disabled selected>Pilih Kategori</option>
            	<option value="artikel">{{ucwords('artikel')}}</option>
            	<option value="berita">{{ucwords('berita')}}</option>
            </select>
            </div>
            @error('kategori')
            <span>
                {{ ucwords($message) }}
            </span>
            @enderror
            <div class="form-group">
            <label class="small mb-1" for="summernote">Konten</label>
            <textarea id="summernote" name="konten" cols="30"></textarea>
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