 @extends('base')
 @section('content')
 <form action="{{route('p.i.in.update', ['id' => $data->id])}}" method="POST">
	@csrf
	@method('put')
		<div class="form-group">
		<label class="small mb-1" for="padi">Status</label>
		<select name="status" class="form-control">
			<option value="{{strtolower('Belum Terjadi')}}" {{$data->status=='belum terjadi' ? 'selected' : ''}}>
				Belum Terjadi
			</option>
			<option value="{{strtolower('Sudah Terjadi')}}" {{$data->status=='sudah terjadi' ? 'selected' : ''}}>
				Sudah Terjadi
			</option>
			<option value="{{strtolower('Catatan Salah')}}" {{$data->status=='catatan salah' ? 'selected' : ''}}>
				Catatan Salah
			</option>
		</select>
		@error('status')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		</div>
		<div class="form-group">
			<label class="small mb-1" for="padi">Jenis Padi</label>
		<input class="form-control py-4" id="padi" type="text" placeholder="Jenis Padi" name="jenis_padi" value="{{$data->padi->jenis_padi}}"/>
		</div>
		@error('jenis_padi')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		
		<div class="form-group">
			<label class="small mb-1" for="varietas">Varietas</label>
		<input class="form-control py-4" id="varietas" type="text" placeholder="Varietas" name="varietas" value="{{$data->padi->varietas}}"/>
		</div>
		@error('varietas')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror

		<div class="form-group">
			<label class="small mb-1" for="a">Lokasi</label>
		<input class="form-control py-4" id="a" type="text" name="lokasi" value="{{$data->lokasi}}"/>
		</div>
		@error('lokasi')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>

		<div class="form-group">
			<label class="small mb-1" for="s">Luas Lahan</label>
		<input class="form-control py-4" id="s" type="text" name="luas_lahan" value="{{$data->luas_lahan}}"/>
		</div>
		@error('luas_lahan')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>

		<div class="form-group">
			<label class="small mb-1" for="d">Jenis Tanah</label>
		<input class="form-control py-4" id="d" type="text" name="jenis_tanah" value="{{$data->jenis_tanah}}"/>
		</div>
		@error('jenis_tanah')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>

		<div class="form-group">
			<label class="small mb-1" for="f">Jenis Pupuk</label>
		<input class="form-control py-4" id="f" type="text" name="jenis_pupuk" value="{{$data->jenis_pupuk}}"/>
		</div>
		@error('jenis_pupuk')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>

		<div class="form-group">
			<label class="small mb-1" for="g">PH Tanah</label>
		<input class="form-control py-4" id="g" type="text" name="ph_tanah" value="{{$data->ph_tanah}}"/>
		</div>
		@error('ph_tanah')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>

		<div class="form-group">
			<label class="small mb-1" for="a">Kondisi Tanaman</label>
		<input class="form-control py-4" id="a" type="text" name="kondisi_tanaman" value="{{$data->kondisi_tanaman}}"/>
		</div>
		@error('kondisi_tanaman')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>





		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
 @endsection