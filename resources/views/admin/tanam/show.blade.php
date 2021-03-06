@extends('base')
@section('content')
<center>
	<table class="table table-bordered table-stripped col-md-7" align="center">
		<!-- <tr>
			<td>Status</td>
			<td>{{ucwords($data->status)}}</td>
		</tr> -->
		<tr>
			<td>Jenis Padi</td>
			<td>{{$data->padi->jenis_padi}}</td>
		</tr>
		<tr>
			<td>Varietas</td>
			<td>{{$data->padi->varietas}}</td>
		</tr>
		<tr>
			<td>lokasi</td>
			<td>{{$data->lokasi}}</td>
		</tr>
		<tr>
			<td>luas lahan</td>
			<td>{{$data->luas_lahan}}</td>
		</tr>
		<tr>
			<td>jenis tanah</td>
			<td>{{$data->jenis_tanah}}</td>
		</tr>
		<tr>
			<td>jenis pupuk</td>
			<td>{{$data->jenis_pupuk}}</td>
		</tr>
		<tr>
			<td>ph tanah</td>
			<td>{{$data->ph_tanah}}</td>
		</tr>
		<tr>
			<td>kondisi tanaman</td>
			<td>{{$data->kondisi_tanaman}}</td>
		</tr>
	</table>

	@if(Auth::user()->role=='konsultan')
	<a href="{{route('k.i.tn.edit', ['id' => $data->id])}}" class="btn btn-primary">Tambah Rekomendasi</a>
	@endif
	<br>
	<hr>
	<h2>Rekomendasi Penjadwalan</h2>
	<table class="table table-bordered table-stripped" width="70%" align="center">
		<thead>
			<th>No</th>
			<th>Nama Proses</th>
			<th>Tanggal</th>
			<th>Waktu</th>
			<th>Tips dan Trik</th>
			<th>Catatan</th>
			<th>Status</th>
			@if(Auth::user()->role=='konsultan')
			<th>#</th>
			@endif
		</thead>
		<tbody>
			@forelse($data->penjadwalan as $index => $jadwal)
			<tr>
				<td>{{($index +1)}}</td>
				<td>{{$jadwal->nama_proses}}</td>
				<td>{{$jadwal->tanggal}}</td>
				<td>{{$jadwal->waktu}}</td>
				<td>{{$jadwal->tips_dan_trik}}</td>
				<td>{{$jadwal->catatan}}</td>
				<td>{{$jadwal->status}}</td>
				@if(Auth::user()->role=='konsultan')
				<td>
					<a href="{{route('k.i.tn.ubah.jadwal', ['id' => $data->id, 'idjadwal' => $jadwal->id])}}">Ubah</a>
				</td>
				@endif
			</tr>
			@empty
				<h3>Belum ada rekomendasi penjadwalan</h3>
			@endforelse
		</tbody>
	</table>
</center>
@stop
