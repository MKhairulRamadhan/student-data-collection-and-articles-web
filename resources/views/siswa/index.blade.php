@extends('layout.master')

@section('content')
<div class="container mt-5">

	@if(session('sukses'))
	<div class="alert alert-primary" role="alert">
		{{session('sukses')}}
	</div>
	@endif

	<div class="row">

		<div class="col-6">
			<h1>hello</h1>

		</div>

		<div class="col-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary mt-2 btn-sm" data-toggle="modal" data-target="#exampleModal" style="float: right; margin-top: -40px;">
				Tambah Siswa
			</button>
		</div>


		<table class="table table-hover">
			<tr>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Alamat</th>
				<th>Rata2</th>
				<th>Aksi</th>
			</tr>

			@foreach($data_siswa as $siswa)

			<tr>
				<td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_depan}}</a></td>
				<td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_belakang}}</a></td>
				<td>{{$siswa->jenis_kelamin}}</td>
				<td>{{$siswa->agama}}</td>
				<td>{{$siswa->alamat}}</td>
				<td>{{$siswa->ratarata()}}</td>
				<td>
					<a href="{{route('siswa_edit', $siswa->id)}}" class="btn btn-warning btn-sm">Edit</a>
					<a href="{{route('siswa_delete', $siswa->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('yaking Ingin Mennghapus..?')">Delete</a>
				</td>
			</tr>

			@endforeach
		</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/siswa/create" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group {{$errors->has('nama_depan') ? 'has-error' : ''}}">
						<label for="exampleInputEmail1">Nama Depan</label>
						<input type="text" class="form-control" name="nama_depan" value="{{old('nama_depan')}}">
						@if($errors->has('nama_depan'))
						<span class="help-block">{{$errors->first('nama_depan')}}</span>
						@endif
					</div>

					<div class="form-group {{$errors->has('nama_belakang') ? 'has-error' : ''}}">
						<label for="exampleInputEmail1">Nama Belakang</label>
						<input type="text" class="form-control" name="nama_belakang" value="{{old('nama_belakang')}}">
						@if($errors->has('nama_belakang'))
						<span class="help-block">{{$errors->first('nama_belakang')}}</span>
						@endif
					</div>

					<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
						<label for="">Email</label>
						<input type="email" class="form-control" name="email" value="{{old('email')}}">
						@if($errors->has('email'))
						<span class="help-block">{{$errors->first('email')}}</span>
						@endif
					</div>

					<div class="form-group">
						<label for="exampleFormControlSelect1">Jenis Kelamin</label>
						<select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
							<option>Pilih :</option>
							<option value="P" 
							<?php if (old('jenis_kelamin') == 'P') {
								echo "selected";
							} ?> 
							>P</option>

							<option value="L"
							<?php if (old('jenis_kelamin') == 'L') {
								echo "selected";
							} ?> 
							>L</option>
						</select>
					</div>

					<div class="form-group {{$errors->has('agama') ? 'has-error' : ''}}">
						<label for="exampleInputEmail1">Agama</label>
						<input type="text" class="form-control" name="agama" value="{{old('agama')}}">
						@if($errors->has('agama'))
						<span class="help-block">{{$errors->first('agama')}}</span>
						@endif
					</div>

					<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
						<label for="exampleFormControlTextarea1">Alamat</label>
						<textarea class="form-control"  rows="3" name="alamat">{{old('nama_depan')}}</textarea>
						@if($errors->has('alamat'))
						<span class="help-block">{{$errors->first('alamat')}}</span>
						@endif
					</div>

					<div class="form-group {{$errors->has('avatar') ? 'has-error' : ''}}">
						<label for="exampleInputEmail1">Avatar</label>
						<input type="file" class="form-control" name="avatar" class="form-control">
						@if($errors->has('avatar'))
						<span class="help-block">{{$errors->first('avatar')}}</span>
						@endif
					</div>

					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>	



@endsection