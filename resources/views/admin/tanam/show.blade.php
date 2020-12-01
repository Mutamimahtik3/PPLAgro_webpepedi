@extends('base')
@section('content')
<center>
	<table class="table table-bordered table-stripped col-md-7" align="center">
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

	
	<a href="{{route('a.i.tn.edit', ['id' => $data->id])}}" class="btn btn-primary">Tambah Rekomendasi</a>
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
			<th>#</th>
		</thead>
		<tbody>
			@forelse($data->penjadwalan as $index => $jadwal)
			<tr>
				<td>{{($index +1)}}</td>
				<td>{{$jadwal->nama_proses}}</td>
				<td>{{$jadwal->tanggal}}</td>
				<td>{{$jadwal->waktu}}</td>
				<td>{{$jadwal->tips_dan_trik}}</td>
				<td>
					<a href="{{route('a.i.tn.ubah.jadwal', ['id' => $data->id, 'idjadwal' => $jadwal->id])}}">Ubah</a>
				</td>
			</tr>
			@empty
				<h3>Belum ada rekomendasi penjadwalan</h3>
			@endforelse
		</tbody>
	</table>
</center>
@stop