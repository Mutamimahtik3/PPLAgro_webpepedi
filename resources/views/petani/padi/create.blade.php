 @extends('base')

 @section('content')
 <form action="{{route('p.padi.store')}}" method="POST">
	@csrf
		<div class="form-group">
			<label class="small mb-1" for="padi">Jenis Padi</label>
		<input class="form-control py-4" id="padi" type="text" placeholder="Jenis Padi" name="jenis_padi" value="{{old('jenis_padi')}}"/>
		</div>
		@error('jenis_padi')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		

		<div class="form-group">
			<label for="exampleFormControlSelect1">Varietas</label>
			<select class="form-control" id="exampleFormControlSelect1" name="varietas">
				<option disabled selected>Pilih Varietas</option>
				<option value="hibrida">Hibrida</option>
				<option value="unggul">Unggul</option>
				<option value="padi lokal">Padi Lokal</option>
			</select>
			@error('varietas')
			<label class="small mb-1 text-danger">
				{{ucwords($message)}}
			</label>
			@enderror
		</div>

		<div class="form-group">
			<label for="tipe_padi">Tipe Padi</label>
			<select class="form-control" id="tipe_padi" name="tipe_padi">
				<option disabled selected>Pilih Tipe Padi</option>
				<option value="padi wangi">Padi Wangi</option>
				<option value="padi pera">Padi Pera</option>
				<option value="padi pulen">Padi Pulen</option>			
			</select>
			@error('tipe_padi')
			<label class="small mb-1 text-danger">
				{{ucwords($message)}}
			</label>
			@enderror
		</div>
	
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
 @endsection