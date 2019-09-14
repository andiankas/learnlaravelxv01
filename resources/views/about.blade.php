@extends('layout.main')

@section('title','Learn Laravel v01 | '. $pagetitle)
@section('container')
<!-- content -->
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1 class="mt-2">This is {{ $pagetitle }}</h1>
		</div>
	</div>
</div>
<!-- end content -->
@endsection	