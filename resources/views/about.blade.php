@extends('layout/main')	
@section('title', 'About')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
			<h3 class="mt-3">Hello, {{$name}}!</h3>
		</div>
	</div>
</div>
@endsection
