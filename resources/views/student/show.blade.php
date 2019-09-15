@extends('layout.main')
<!-- title -->
@section('title','Learn Laravel v01 | Detail Student')
<!-- end title -->
@section('container')
<!-- content -->
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1 class="mt-2"></h1>

			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">{{ $student->nama }}</h5>
					<h6 class="card-subtitle mb-2 text-muted">{{ $student->jurusan }}</h6>
					<p class="card-text">NIP : {{ $student->nip }}</p>

					<br>
					<a href="{{ $student->id }}/edit" class="btn btn-warning">Edit</a>
					<form action="/student/{{ $student->id }}" method="post" class="d-inline">
						@method('delete')
						@csrf
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
					<a href="/student" class="card-link">Kembali</a>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- end content -->
@endsection