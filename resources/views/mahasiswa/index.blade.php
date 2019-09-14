@extends('layout.main')
<!-- title -->
@section('title','Learn Laravel v01 | '. $pagetitle)
<!-- end title -->
@section('container')
<!-- content -->
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1 class="mt-2">Daftar {{ $pagetitle }}</h1>

			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama</th>
						<th scope="col">NIM</th>
						<th scope="col">Fakultas</th>
						<th scope="col">Email</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($datamahasiswa as $datamhs)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $datamhs->nama }}</td>
						<td>{{ $datamhs->nim }}</td>
						<td>{{ ucfirst($datamhs->fakultas) }}</td>
						<td>{{ $datamhs->email }}</td>
						<td>
							<a href="" class="badge badge-success">Edit</a>
							<a href="" class="badge badge-danger">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

		</div>
	</div>
</div>
<!-- end content -->
@endsection