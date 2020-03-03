@extends('layout.master')

@section('content')

<div class="container">
	<h2>Edit Siswa</h2>

	<form enctype="multipart/form-data" action="{{ route('update_siswa', $siswa->id)}}" method="post" >
		{{csrf_field()}}
		<div class="form-group">
			<label for="exampleInputEmail1">Nama Depan</label>
			<input type="text" class="form-control" name="nama_depan" value="{{$siswa->nama_depan}}">

		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">Nama Belakang</label>
			<input type="text" class="form-control" name="nama_belakang" value="{{$siswa->nama_belakang}}">
		</div>

		<div class="form-group">
			<label for="exampleFormControlSelect1">Jenis Kelamin</label>
			<select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin" >
				<option>Pilih :</option>
				<option value="P"  
				<?php if ($siswa->jenis_kelamin == "P"): ?>
					selected
		@		<?php endif ?>
				>P</option>

				<option value="L" 
				<?php if ($siswa->jenis_kelamin == "L"): ?>
					selected
				<?php endif ?>
				>L</option>
			</select>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">Agama</label>
			<input type="text" class="form-control" name="agama" value="{{$siswa->agama}}">
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">Avatar</label>
			<input type="file" class="form-control" name="avatar" class="form-control">
		</div>


		<div class="form-group">
			<label for="exampleFormControlTextarea1">Alamat</label>
			<textarea class="form-control"  rows="3" name="alamat" >{{$siswa->alamat}}</textarea>
		</div>


		<button type="submit" class="btn btn-warning">Update</button>

	</form>
</div>

@endsection
