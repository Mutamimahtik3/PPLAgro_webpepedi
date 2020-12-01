


@extends('base')
@section('content')
<center>
	<table class="table table-bordered table-stripped col-md-7" align="center">
		<tr>
			<td>Nama Petani</td>
			<td>{{$data->padi->user->name}}</td>
		</tr>
		<tr>
			<td>Alamat Petani</td>
			<td>{{$data->padi->user->alamat}}</td>
		</tr>
		<tr>
			<td>Jenis Padi</td>
			<td>{{$data->padi->jenis_padi}}</td>
		</tr>
		<tr>
			<td>Varietas</td>
			<td>{{$data->padi->varietas}}</td>
		</tr>
		<tr>
			<td>Tanggal Semai</td>
			<td>{{$data->tgl_persemaian}}</td>
		</tr>
		<tr>
			<td>Banyak Benih</td>
			<td>{{$data->banyak_benih}}</td>
		</tr>
		<tr>
			<td>Jenis Tanah</td>
			<td>{{$data->jenis_tanah}}</td>
		</tr>
	</table>

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
		</thead>
		<tbody>
			@forelse($data->penjadwalan as $index => $jadwal)
			<tr>
				<td>{{($index +1)}}</td>
				<td>{{$jadwal->nama_proses}}</td>
				<td>{{$jadwal->tanggal}}</td>
				<td>{{$jadwal->waktu}}</td>
				<td>{{$jadwal->tips_dan_trik}}</td>
			</tr>
			@empty
				<h3>Belum ada rekomendasi penjadwalan</h3>
			@endforelse
		</tbody>
	</table>
	</center>
@stop