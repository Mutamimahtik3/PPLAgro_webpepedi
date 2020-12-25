@extends('base')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<h3>Jenis Padi : {{ucwords($jenis_padi)}}</h3>
<h3>Varietas : {{ucwords($varietas)}}</h3>
<h3>Tipe Padi : {{ucwords($tipe_padi)}}</h3>
<h3>Proses : {{ucwords($proses)}}</h3>
<br>

<form action="{{route('p.i.pascatanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi,'tipe_padi' => $tipe_padi])}}" method="POST">
	@csrf
	@method('put')
	

	<div class="form-group">
		<label class="small mb-1" for="tgl_panen">Tanggal Panen</label>
		<input required class="form-control py-4" id="tgl_panen" type="date" placeholder="tgl_panen" name="tgl_panen" value="{{old('tgl_panen')}}"/>
	</div>
	@error('tgl_panen')
		<label>{{ucwords($message)}}</label>
	@enderror

	<div class="form-group">
		<label for="kondisi_gabah">Kondisi Gabah</label>
		<select required class="form-control" id="kondisi_gabah" name="kondisi_gabah">
			<option disabled selected>Pilih Kondisi Gabah</option>
			<option value="kadar air tinggi">Kadar Air Tinggi</option>
			<option value="kadar air rendah">Kadar Air Rendah</option>
		</select>
		@error('kondisi_gabah')
		<label class="small mb-1 text-danger">
			{{ucwords($message)}}
		</label>
		@enderror
	</div>
	<button class="btn btn-primary" type="submit">Submit</button>
</form>

@endsection