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
			<a href=""> tambah post</a>
		</div>


		<table class="table table-hover">
			<tr>
				<th>id</th>
				<th>Title</th>
				<th>User</th>
                <th>Actions</th>
			</tr>

			@foreach($posts as $post)

			<tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>
                <td>
                    <a href="{{ route('site.single.post', $post->slug ) }}" target="_blank" class="btn btn-info btn-sm">View</a>
                    <a href="/" class="btn btn-warning btn-sm">Edit</a>
					<a href="/" class="btn btn-danger btn-sm" onclick="return confirm('yaking Ingin Mennghapus..?')">Delete</a>
				</td>
			</tr>

			@endforeach
		</table>
	</div>
</div>
@endsection