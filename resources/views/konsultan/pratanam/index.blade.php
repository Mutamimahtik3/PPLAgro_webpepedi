@extends('base')
@section('content')
<h3>Indikator Pratanam</h3>
<center>
	<table width="70%" class="table table-bordered table-stripped">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Varietas</th>
			<th>Tanggal Persemaian</th>
			<th>Banyak Benih</th>
			<th>Jenis Tanah</th>
			<th>#</th>
		</thead>
		<tbody>
			@foreach($data as $index => $data)
			<tr>
				<td>{{($index + 1)}}</td>
				<td>{{$data->padi->jenis_padi}}</td>
				<td>{{$data->padi->varietas}}</td>
				<td>{{$data->tgl_persemaian}}</td>
				<td>{{$data->banyak_benih}}</td>
				<td>{{$data->jenis_tanah}}</td>
				<td>
					<a href="{{route('k.i.pr.show', ['id' => $data->id])}}">Detail</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</center>
@stop