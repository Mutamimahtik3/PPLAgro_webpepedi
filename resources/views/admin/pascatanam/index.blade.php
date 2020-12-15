

@extends('base')
@section('content')
<h3>Indikator Pascatanam</h3>
<center>
	<table width="70%" class="table table-bordered table-stripped">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Varietas</th>
			<th>Tanggal Panen</th>
			<th>Kondisi Gabah</th>
			<th>#</th>
		</thead>
		<tbody>
			@foreach($data as $index => $data)
			<tr>
				<td>{{($index + 1)}}</td>
				<td>{{$data->padi->jenis_padi}}</td>
				<td>{{$data->padi->varietas}}</td>
				<td>{{$data->tgl_panen}}</td>
				<td>{{$data->kondisi_gabah}}</td>
				<td>
					@if(Auth::user()->role=='konsultan')
					<a href="{{route('k.i.ps.show', ['id' => $data->id])}}">Detail</a>
					@elseif(Auth::user()->role=='admin')
					<a href="{{route('a.i.ps.show', ['id' => $data->id])}}">Detail</a>
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</center>
@stop