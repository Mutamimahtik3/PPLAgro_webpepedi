@extends('base')

@section('content')
<script type="text/javascript">
    $.ajax({
        method : "GET",
        url : 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=3512',
        success : function(e){
            $.each(e.kecamatan, function (i, a) {
                $('#lokasiField').append(`<option value=`+a.nama+`>`+a.nama+`</option>`);
            });
        }
    });
</script>
<h3>Jenis Padi : {{ucwords($jenis_padi)}}</h3>
<h3>Varietas : {{ucwords($varietas)}}</h3>
<h3>Tipe Padi : {{ucwords($tipe_padi)}}</h3>
<h3>Proses : {{ucwords($proses)}}</h3>
<br>

<form action="{{route('p.i.tanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi,'tipe_padi' => $tipe_padi])}}" method="POST">
	@csrf
	@method('put')
	<div class="form-group">
		<label class="small mb-1" for="lokasi">Lokasi</label>
		<select required name="kecamatan" class="form-control" id="lokasiField">
			<option disabled selected>Pilih Lokasi</option>

		</select>
	</div>
	<div class="form-group">
		<label for="lokasi">Detail Lokasi</label>
		<textarea required class="form-control" id="lokasi" rows="3" name="lokasi" cols="30" rows="10">{{old('lokasi')}}</textarea>
	</div>
	@error('lokasi')
		<label>{{ucwords($message)}}</label>
	@enderror
	
	<div class="form-group">
		<label class="small mb-1" for="luas_lahan">Luas Lahan (per meter persegi)</label>
	<input required class="form-control py-4" id="luas_lahan" type="number" placeholder="luas lahan" name="luas_lahan" value="{{old('luas_lahan')}}"/>
	</div>
	@error('luas_lahan')
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

	<div class="form-group">
		<label for="jenis_pupuk">Jenis Pupuk</label>
		<select required class="form-control" id="jenis_pupuk" name="jenis_pupuk">
			<option disabled selected>Pilih Jenis Pupuk</option>
			<option value="urea">Urea</option>
			<option value="sp36">SP 36</option>
			<option value="KCL">KCL</option>			
		</select>
		@error('ph_tanah')
		<label class="small mb-1 text-danger">
			{{ucwords($message)}}
		</label>
		@enderror
	</div>

	<div class="form-group">
		<label for="jenis_tanah">Ph Tanah</label>
		<select required class="form-control" id="jenis_tanah" name="ph_tanah">
			<option disabled selected>Pilih Kadar Ph</option>
			<option value="3-3.5">3 - 3.5</option>
			<option value="3.5-4">3.5 - 4</option>
			<option value="4-4.5">4 - 4.5</option>
			<option value="4.5-5">4.5 - 5</option>
			<option value="5-5.5">5 - 5.5</option>
			<option value="5.5-6">5.5 - 6</option>
			<option value="6-6.5">6 - 6.5</option>
			<option value="6.5-7">6.5 - 7</option>
		</select>
		@error('ph_tanah')
		<label class="small mb-1 text-danger">
			{{ucwords($message)}}
		</label>
		@enderror
	</div>

	<div class="form-group">
		<label class="small mb-1" for="kondisi_tanaman">Kondisi Tanaman</label>
	<input required class="form-control py-4" id="kondisi_tanaman" type="text" placeholder="kondisi tanaman" name="kondisi_tanaman" value="{{old('kondisi_tanaman')}}"/>
	</div>
	@error('kondisi_tanaman')
		<label>{{ucwords($message)}}</label>
	@enderror

	<button class="btn btn-primary" type="submit">Submit</button>
</form>

@endsection