@extends('layout.master')

@section('css')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@endsection

@section('content')
<div class="panel panel-profile">
	<div class="clearfix">
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif

		@if(session('error'))
		<div class="alert alert-danger" role="alert">
			{{session('error')}}
		</div>
		@endif

		<!-- LEFT COLUMN -->
		<div class="profile-left">
			<!-- PROFILE HEADER -->
			<div class="profile-header">
				<div class="overlay"></div>
				<div class="profile-main">
					<img src="{{$siswa->getAvatar()}}" class="img-circle" alt="Avatar" style="max-width: 100px; height: 100px; width: 100px;">
					<h3 class="name">{{$siswa->nama_depan}}</h3>
					<span class="online-status status-available">Available</span>
				</div>
				<div class="profile-stat">
					<div class="row">
						<div class="col-md-4 stat-item">
							{{$siswa->mapel->count()}} <span>MataPelajaran</span>
						</div>
						<div class="col-md-4 stat-item">
							{{ $siswa->ratarata() }} <span>Rata-Rata Nilai</span>
						</div>
						<div class="col-md-4 stat-item">
							2174 <span>Points</span>
						</div>
					</div>
				</div>
			</div>
			<!-- END PROFILE HEADER -->
			<!-- PROFILE DETAIL -->
			<div class="profile-detail">
				<div class="profile-info">
					<h4 class="heading">Data Diri</h4>
					<ul class="list-unstyled list-justify">
						<li>Jenis Kelamin <span>{{$siswa->jenis_kelamin}}</span></li>
						<li>Agama <span>{{$siswa->agama}}</span></li>
						<li>Alamat <span>{{$siswa->alamat}}</span></li>
					</ul>
				</div>

				<div class="text-center"><a href="{{route('siswa_edit', $siswa->id)}}" class="btn btn-primary">Edit Profile</a></div>
			</div>
			<!-- END PROFILE DETAIL -->
		</div>
		<!-- END LEFT COLUMN -->
		<!-- RIGHT COLUMN -->
		<div class="profile-right">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Nilai</button>

			<!-- END AWARDS -->
			<!-- TABBED CONTENT -->
			<div class="custom-tabs-line tabs-line-bottom left-aligned">
				<ul class="nav" role="tablist">
					<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">MataPelajaran</a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tab-bottom-left1">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>KODE</th>
								<th>NAMA</th>
								<th>SEMESTER</th>
								<th>NILAI</th>
								<th>GURU</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							@foreach($siswa->mapel as $mapel)
							<tr>
								<td>{{$mapel->kode}}</td>
								<td>{{$mapel->nama}}</td>
								<td>{{$mapel->semester}}</td>
								<td>{{$mapel->pivot->nilai}}</td>
								<td><a href="/guru/{{$mapel->guru->id}}/profile">{{$mapel->guru->nama}}</a></td>
								<td><a href="{{route('delete_nilai',[ $siswa->id, $mapel->id])}}" class="btn btn-danger btn-sm" type="submit">Delete</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<!-- END TABBED CONTENT -->

			<div class="panel">
				<div id="chartNilai">
					
				</div>
			</div>
		</div>
		<!-- END RIGHT COLUMN -->
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form action="/siswa/{{$siswa->id}}/addnilai" method="post" enctype="multipart/form-data">
					{{csrf_field()}}

					<div class="form-group">
						<label for="exampleFormControlSelect1">Mata Pelajaran</label>
						<select class="form-control" id="exampleFormControlSelect1" name="mapel">
							@foreach($mataPel as $a)
							<option value="{{$a->id}}">{{$a->nama}}</option>
							@endforeach
						</select>
					</div>
					
					<div class="form-group {{$errors->has('nilai') ? 'has-error' : ''}}">
						<label for="exampleInputEmail1">Nilai</label>
						<input type="text" class="form-control" name="nilai" value="{{old('nilai')}}" placeholder="Nilai">
						@if($errors->has('nilai'))
						<span class="help-block">{{$errors->first('nilai')}}</span>
						@endif
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection

@section('script')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script>
	Highcharts.chart('chartNilai', {
		chart: {
			type: 'column'
		},
		title: {
			text: 'Laporan Nilai Siswa'
		},
		xAxis: {
        categories: {!!json_encode($categories)!!},		//mk bentuk json
        crosshair: true
    	},
	    yAxis: {
	    	min: 0,
	    	title: {
	    		text: 'Nilai'
	    	}
	    },
	    tooltip: {
	    	headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
	    	footerFormat: '</table>',
	    	shared: true,
	    	useHTML: true
	    },
	    plotOptions: {
	    	column: {
	    		pointPadding: 0.2,
	    		borderWidth: 0
	    	}
	    },
	    series: [{
	    	name: 'Nilai',
	    	data: {!!json_encode($data)!!}
	    }]
	});


</script>
@endsection