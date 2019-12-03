@extends('layout/main')	
@section('title', 'Daftar Mahasiswa')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h3 class="mt-4 " >Student Registration</h3>


				<a href="{{url('/students/create')}}" class="btn btn-outline-primary my-3">Add Student</a>

				@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif

				<ul class="list-group mt-2">
					@foreach($students as $student)
				  <li class="list-group-item d-flex justify-content-between align-items-center text-primary">
				    {{$student->name}}
					<a href="/students/{{$student->id}}" class="btn btn-outline-info btn-sm">details</a>
				  </li>
				  @endforeach
				  
				</ul>

			
		</div>
	</div>
</div>
@endsection
