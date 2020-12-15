 @extends('base')
 @section('content')
 <form action="{{route('p.i.ps.update', ['id' => $data->id])}}" method="POST">
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
			<label class="small mb-1" for="tgl_panen">Tanggal Panen</label>
		<input class="form-control py-4" id="tgl_panen" type="date" name="tgl_panen" value="{{$data->tgl_panen}}"/>
		</div>
		@error('tgl_panen')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>

		<div class="form-group">
			<label class="small mb-1" for="k">Kondisi Gabah</label>
		<input class="form-control py-4" id="k" type="text" placeholder="Kondisi Gabar" name="kondisi_gabah" value="{{$data->kondisi_gabah}}"/>
		</div>
		@error('kondisi_gabah')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>


		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
 @endsection