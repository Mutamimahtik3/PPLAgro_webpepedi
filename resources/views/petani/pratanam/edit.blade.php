 @extends('base')
 @section('content')
 <form action="{{route('p.i.pra.update', ['id' => $data->id])}}" method="POST">
	@csrf
	@method('put')
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
			<label class="small mb-1" for="a">Tanggal Semai</label>
		<input class="form-control py-4" id="a" type="date" name="tgl_persemaian" value="{{$data->tgl_persemaian}}"/>
		</div>
		@error('tgl_persemaian')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>

		<div class="form-group">
			<label class="small mb-1" for="k">Banyak Benih</label>
		<input class="form-control py-4" id="k" type="number" placeholder="Kondisi Gabar" name="banyak_benih" value="{{$data->banyak_benih}}"/>
		</div>
		@error('banyak_benih')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>

		<div class="form-group">
			<label class="small mb-1" for="2">Jenis Tanah</label>
		<input class="form-control py-4" id="2" type="text" placeholder="Kondisi Gabar" name="jenis_tanah" value="{{$data->jenis_tanah}}"/>
		</div>
		@error('jenis_tanah')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>




		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
 @endsection