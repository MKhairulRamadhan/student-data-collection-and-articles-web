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
					<img src="" class="img-circle" alt="Avatar" style="max-width: 100px; height: 100px; width: 100px;">
					<h3 class="name">{{$guru->nama}}</h3>
					<span class="online-status status-available">Available</span>
				</div>
			</div>
		
		</div>
		<!-- END LEFT COLUMN -->
		<!-- RIGHT COLUMN -->
		<div class="profile-right">
			
			<!-- END AWARDS -->
			<!-- TABBED CONTENT -->
			<div class="custom-tabs-line tabs-line-bottom left-aligned">
				<ul class="nav" role="tablist">
					<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">MataPelajaran Yang Dajarkan</a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tab-bottom-left1">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Semester</th>
						</thead>
						<tbody>
							@foreach($guru->mapel as $mapel)
							<tr>
								<td>{{$mapel->nama}}</td>
								<td>{{$mapel->semester}}</td>
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


@endsection

