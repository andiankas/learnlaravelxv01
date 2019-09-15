@extends('layout.main')
<!-- title -->
@section('title','Learn Laravel v01 | Add New Student')
<!-- end title -->
@section('container')
<!-- content -->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1 class="mt-2">Add New Student</h1>

			<form method="post" action="/student">
				@csrf
				<div class="form-group">
					<label for="exampleInputEmail1">Nama</label>
					<input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama anda">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">NIP</label>
					<input type="text" class="form-control" name="nip" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIP">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="emailkamu@mail.com">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Jurusan</label>
					<input type="text" class="form-control" name="jurusan" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan jurusan anda">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
	</div>
</div>
<!-- end content -->
@endsection