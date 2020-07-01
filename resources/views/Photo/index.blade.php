@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h2	{
			margin-bottom: 30px;
		}

	</style>
</head>
<body>

</body>
</html>

<div class="container">
		<h2 class="text-center">Data Photo</h2>

	<table class="table">
		<thead class="bg-light">
		<tr style="background-color: 	deepskyblue">
			<th scope="col">ID</th>
			<th scope="col">Photo</th>
			<th scope="col">POST</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color: 	#E0FFFF">
			<td>{{ $row->id }}</td>
			<td><img width="150px" class="img-thumbnail" src="{{ url('public/uploads/images/'. $row->gambar) }}"></td>
			<td>{{ $row->post->post_tittle }}</td>
			<td>{{ $row->pho_date }}</td>
			<td>{{ $row->pho_tittle }}</td>
			<td>{{ $row->pho_text }}</td>
			<td>
				<a href="{{ url('photo/' . $row->id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('photo/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('photo/create') }}" 
	<div>
	<button type="submit" class="btn" style="background-color: 	skyblue">Tambah Data</button> </div>
</div>

@endsection