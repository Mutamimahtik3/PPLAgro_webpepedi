


@extends('base')
@section('content')
<h3>Indikator Tanam</h3>
<center>
	<table width="70%" class="table table-bordered table-stripped">
		<thead>
			<th>No</th>
			<th>Jenis Padi</th>
			<th>Tipe Padi</th>
			<th>Varietas</th>
			<th>lokasi</th>
			<th>luas_lahan</th>
			<th>jenis_tanah</th>
			<th>jenis_pupuk</th>
			<th>ph_tanah</th>
			<th>kondisi_tanaman</th>
			<th>#</th>
		</thead>
		<tbody>
			@foreach($data as $index => $data)
			<tr>
				<td>{{($index + 1)}}</td>
				<td>{{$data->padi->jenis_padi}}</td>
				<td>{{$data->padi->tipe_padi}}</td>
				<td>{{$data->padi->varietas}}</td>
				<td>{{$data->lokasi}}</td>
				<td>{{$data->luas_lahan}}</td>
				<td>{{$data->jenis_tanah}}</td>
				<td>{{$data->jenis_pupuk}}</td>
				<td>{{$data->ph_tanah}}</td>
				<td>{{$data->kondisi_tanaman}}</td>
				<td>
					<a href="{{route('k.i.tn.show', ['id' => $data->id])}}">Detail</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</center>
@stop