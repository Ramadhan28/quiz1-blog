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
	<div class="container">
	<h2 class="text-center">Data Kategori</h2>

	<table class="table">
		<thead class="bg-light">
		<tr style="background-color: 	deepskyblue">
			<th scope="col">ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color: 	#E0FFFF">
			<td>{{ $row->cat_id }}</td>
			<td>{{ $row->cat_name }}</td>
			<td>{{ $row->cat_text }}</td>
			<td>
				<a href="{{ url('category/' . $row->cat_id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('category/' . $row->cat_id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('category/create') }}" 
	<div>
	<button type="submit" class="btn" style="background-color: 	skyblue">Tambah Data</button> </div>
</div>
</body>
</html>


@endsection