@extends('layout.main')
<!-- title -->
@section('title','Learn Laravel v01 | Edit Student')
<!-- end title -->
@section('container')
<!-- content -->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1 class="mt-2">Edit Student</h1>

			<form method="post" action="/student/{{ $student->id }}">
				@method('patch')
				@csrf
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Masukkan nama anda" value="{{ $student->nama }}" >
					@error('nama')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" aria-describedby="emailHelp" placeholder="NIP" value="{{ $student->nip }}">
					@error('nip')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="emailkamu@mail.com" value="{{ $student->email }}">
					@error('email')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan" aria-describedby="emailHelp" placeholder="Masukkan jurusan anda" value="{{ $student->jurusan }}">
					@error('jurusan')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
	</div>
</div>
<!-- end content -->
@endsection