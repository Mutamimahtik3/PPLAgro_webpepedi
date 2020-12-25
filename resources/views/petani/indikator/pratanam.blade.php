@extends('base')

@section('content')
<h3>Jenis Padi : {{ucwords($jenis_padi)}}</h3>
<h3>Varietas : {{ucwords($varietas)}}</h3>
<h3>Tipe Padi : {{ucwords($tipe_padi)}}</h3>
<h3>Proses : {{ucwords($proses)}}</h3>
<br>

<form action="{{route('p.i.pratanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi,'tipe_padi' => $tipe_padi])}}" method="POST">
	@csrf
	@method('put')
	<div class="form-group">
		<label class="small mb-1" for="tgl_persemaian">Tanggal Persemaian</label>
	<input required class="form-control py-4" id="tgl_persemaian" type="date" placeholder="tanggal" name="tgl_persemaian" value="{{old('tgl_persemaian')}}"/>
	</div>
	@error('tgl_persemaian')
		<label>{{ucwords($message)}}</label>
	@enderror
	
	<div class="form-group">
		<label class="small mb-1" for="banyak_benih">Banyak Benih (gr)</label>
	<input required class="form-control py-4" id="banyak_benih" type="number" placeholder="banyak benih" name="banyak_benih" value="{{old('banyak_benih')}}"/>
	</div>
	@error('banyak_benih')
		<label>{{ucwords($message)}}</label>
	@enderror
	
	<div class="form-group">
		<label for="jenis_tanah">Jenis Tanah</label>
		<select required class="form-control" id="jenis_tanah" name="jenis_tanah">
			<option disabled selected>Pilih Jenis Tanah</option>
			<option value="sawah">Sawah</option>
			<option value="gogorancah">Gogorancah</option>
			<option value="sistem surjan">Sistem Surjan</option>
			<option value="lebak">Lebak</option>
			<option value="pasang surut">Pasang Surut</option>
		</select>
		@error('jenis_tanah')
		<label class="small mb-1 text-danger">
			{{ucwords($message)}}
		</label>
		@enderror
	</div>

	<button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection