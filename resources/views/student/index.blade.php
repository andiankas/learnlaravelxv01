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
			
			<a href="/student/create" class="btn btn-primary my-3">Add Data</a>

			<!-- flash message -->
			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif

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
					@foreach($data as $val)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $val->nama }}</td>
						<td>{{ $val->nip }}</td>
						<td>{{ ucfirst($val->jurusan) }}</td>
						<td>{{ $val->email }}</td>
						<td>
							<a href="/student/{{ $val->id }}" class="badge badge-success">Detail</a>
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