@extends('layout/main')	
@section('title', 'Student details')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h3 class="mt-4">Student details</h3>
				<div class="card border-primary mb-3 mt-3">
				  <div class="card-header text-primary bg-transparent"><h3>{{$student->name}}</h3></div>
				  <div class="card-body text-primary">
				    <h5 class="card-title">{{$student->nrp}}</h5>
				    <p class="card-text">{{$student->email}}
				    	<br>
				    	{{$student->course}}
				 	</p>
				 	<a href="{{$student->id}}/edit" class="btn btn-outline-success btn-sm">edit</a>
				 	<form action = "{{$student->id}}" method="post" class="d-inline"> 
				 		@method('delete')
				 		@csrf
				 	<button type="submit" class="btn btn-outline-danger btn-sm">delete</button>
				 	</form>
				  </div>
				</div>
				
				<button type="button" class="btn btn-link" ><a href="{{url('/students')}}">Back</a></button>

			
		</div>
	</div>
</div>
@endsection
