@extends('layout.master')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="custom-tabs-line tabs-line-bottom left-aligned">
			<ul class="nav" role="tablist">
				<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Rangking 5 Besar</a></li>
			</ul>
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>RANGKING</th>
					<th>NAMA</th>
					<th>NILAI</th>
				</tr>
			</thead>
			<tbody>
				@foreach(Rangking5Besar() as $s)
				<tr>
					<td>{{($loop->index)+1}}</td>
					<td>{{$s->nama_lengkap()}}</td>
					<td>{{$s->ratarataNilai}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-md-6">
		<div class="col-md-6">
			<div class="metric">
				<span class="icon"><i class="fa fa-user"></i></span>
				<p>
					<span class="number">{{totalSiswa()}}</span>
					<span class="title">Total Murid</span>
				</p>
			</div>
		</div>

		<div class="col-md-6">
			<div class="metric">
				<span class="icon"><i class="fa fa-user"></i></span>
				<p>
					<span class="number">{{totalGuru()}}</span>
					<span class="title">Total Guru</span>
				</p>
			</div>
		</div>
		
	</div>
</div>

@endsection