@extends('base')
@section('content')
<center>
		<form action="{{route('k.i.ps.update', ['id' => $data->id])}}" method="POST">
		@csrf
		@method('put')	
			<div class="form-group">
				<label class="mb-1" for="nama_proses">Nama Proses</label>
				<input class="form-control py-4" id="nama_proses" type="text" value="{{old('nama_proses')}}" name="nama_proses"/>
			</div>
			@error('nama_proses')
				<label>{{ucwords($message)}}</label>
			@enderror
			
			<div class="form-group">
				<label class="mb-1" for="tanggal">Tanggal</label>
				<input class="form-control py-4" id="tanggal" type="date" name="tanggal" value="{{old('tanggal')}}"/>
			</div>
			@error('tanggal')
				<label>{{ucwords($message)}}</label>
			@enderror
			
			<div class="form-group">
				<label class="mb-1" for="tanggal">Waktu</label>
				<input class="form-control py-4" id="waktu" type="time" name="waktu" value="{{old('waktu')}}"/>
			</div>
			@error('waktu')
				<label>{{ucwords($message)}}</label>
			@enderror
			
			<div class="form-group">
				<label class="mb-1" for="tanggal">Tips dan Trik</label>
				<textarea class="form-control" name="tips_dan_trik" cols="30" rows="10">{{old('tips_dan_trik')}}</textarea>
			</div>
			@error('tips_dan_trik')
				<label>{{ucwords($message)}}</label>
			@enderror
			<br>
			<button class="btn btn-primary" type="submit">
				Submit
			</button>
		</form>
	</center>
@stop