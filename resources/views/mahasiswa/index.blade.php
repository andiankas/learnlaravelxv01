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
					<tr>
						<th scope="row">1</th>
						<td>Andi Rustianto</td>
						<td>1620192070</td>
						<td>Teknik Informatika</td>
						<td>andiankas@gmail.com</td>
						<td>
							<a href="" class="badge badge-success">Edit</a>
							<a href="" class="badge badge-danger">Delete</a>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
</div>
<!-- end content -->
@endsection