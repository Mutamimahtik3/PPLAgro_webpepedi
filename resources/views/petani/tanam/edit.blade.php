 @extends('base')
 @section('content')
 <form action="{{route('p.i.in.update', ['id' => $data->id])}}" method="POST">
	@csrf
	@method('put')
		<div class="form-group">
		
		<div class="form-group">
			<label class="small mb-1" for="lokasi">Lokasi</label>
			<select name="kecamatan" class="form-control" id="lokasiField">
			</select>
		</div>
		<div class="form-group">
		<label class="small mb-1" for="a">Detail Lokasi</label>
		<textarea class="form-control" name="lokasi" cols="30" rows="10">{{$data->lokasi}}</textarea>	
		</div>
		@error('lokasi')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>
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
			<label for="exampleFormControlSelect1">Varietas</label>
			<select class="form-control" id="exampleFormControlSelect1" name="varietas">
				<option value="hibrida" {{$data->padi->varietas=='hibrida' ? 'selected' : ''}}>Hibrida</option>
				<option value="unggul" {{$data->padi->varietas=='unggul' ? 'selected' : ''}}>Unggul</option>
				<option value="padi lokal"  {{$data->padi->varietas=='padi lokal' ? 'selected' : ''}}>Padi Lokal</option>
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
				<option value="padi wangi" {{$data->padi->tipe_padi=='padi wangi' ? 'selected' : ''}}>Padi Wangi</option>
				<option value="padi pera" {{$data->padi->tipe_padi=='padi pera' ? 'selected' : ''}}>Padi Pera</option>
				<option value="padi pulen" {{$data->padi->tipe_padi=='padi pulen' ? 'selected' : ''}}>Padi Pulen</option>			
			</select>
			@error('tipe_padi')
			<label class="small mb-1 text-danger">
				{{ucwords($message)}}
			</label>
			@enderror
		</div>
		

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
		<label for="jenis_tanah">Jenis Tanah</label>
		<select required class="form-control" id="jenis_tanah" name="jenis_tanah">
			<option disabled selected>Pilih Jenis Tanah</option>
			<option value="sawah" {{$data->jenis_tanah=='sawah' ? 'selected' : ''}}>Sawah</option>
			<option value="gogorancah" {{$data->jenis_tanah=='gogorancah' ? 'selected' : ''}}>Gogorancah</option>
			<option value="sistem surjan" {{$data->jenis_tanah=='sistem surjan' ? 'selected' : ''}}>Sistem Surjan</option>
			<option value="lebak" {{$data->jenis_tanah=='lebak' ? 'selected' : ''}}>Lebak</option>
			<option value="pasang surut" {{$data->jenis_tanah=='pasang surut' ? 'selected' : ''}}>Pasang Surut</option>
		</select>
		@error('jenis_tanah')
		<label class="small mb-1 text-danger">
			{{ucwords($message)}}
		</label>
		@enderror
		<div class="form-group">
			<label for="jenis_pupuk">Jenis Pupuk</label>
			<select required class="form-control" id="jenis_pupuk" name="jenis_pupuk">
				<option disabled selected>Pilih Jenis Pupuk</option>
				<option value="urea" {{$data->jenis_pupuk=='urea' ? 'selected':''}}>Urea</option>
				<option value="sp36" {{$data->jenis_pupuk=='sp36' ? 'selected':''}}>SP 36</option>
				<option value="KCL" {{$data->jenis_pupuk=='KCL' ? 'selected':''}}>KCL</option>			
			</select>
			@error('jenis_pupuk')
			<label class="small mb-1 text-danger">
				{{ucwords($message)}}
			</label>
			@enderror
		</div>

		<div class="form-group">
			<label for="jenis_tanah">Ph Tanah</label>
			<select required class="form-control" id="jenis_tanah" name="ph_tanah">
				<option disabled selected>Pilih Kadar Ph</option>
				<option value="3-3.5" {{$data->ph_tanah=='3-3.5'?'selected':''}}>3 - 3.5</option>
				<option value="3.5-4" {{$data->ph_tanah=='3.5-4'?'selected':''}}>3.5 - 4</option>
				<option value="4-4.5" {{$data->ph_tanah=='4-4.5'?'selected':''}}>4 - 4.5</option>
				<option value="4.5-5" {{$data->ph_tanah=='4.5-5'?'selected':''}}>4.5 - 5</option>
				<option value="5-5.5" {{$data->ph_tanah=='5-5.5'?'selected':''}}>5 - 5.5</option>
				<option value="5.5-6" {{$data->ph_tanah=='5.5-6'?'selected':''}}>5.5 - 6</option>
				<option value="6-6.5" {{$data->ph_tanah=='6-6.5'?'selected':''}}>6 - 6.5</option>
				<option value="6.5-7" {{$data->ph_tanah=='6.5-7'?'selected':''}}>6.5 - 7</option>
			</select>
			@error('ph_tanah')
			<label class="small mb-1 text-danger">
				{{ucwords($message)}}
			</label>
			@enderror
		</div>

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

<script type="text/javascript">
    $.ajax({
        method : "GET",
        url : 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=3512',
        success : function(e){
            $.each(e.kecamatan, function (i, a) {
            	if(a.nama == '{{$data->kecamatan}}'){
	                $('#lokasiField').append(`<option selected value=`+a.nama+`>`+a.nama+`</option>`);
            	}else{
	                $('#lokasiField').append(`<option value=`+a.nama+`>`+a.nama+`</option>`);
            	}
            });
        }
    });
</script>
 @endsection