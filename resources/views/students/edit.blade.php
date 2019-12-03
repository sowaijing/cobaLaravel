@extends('layout/main')	
@section('title', 'Edit Student Form')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-8">
			<h3 class="mt-4">Edit Student Form</h3>
				<form method="post" action="/students/{{$student->id}}">
					@method('patch')
					@csrf
					<div class="form-group row">
					    <label for="name" class="col-sm-2 col-form-label">Name</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Name" name="name" value="{{$student->name}}">
					      @error('name')
					      <div class="invalid-feedback">
					        {{$message}}
					      </div>
					      @enderror
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Enter NRP" name="nrp" value="{{$student->nrp}}">
					      @error('nrp')
					      <div class="invalid-feedback">
					        {{$message}}
					      </div>
					      @enderror
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="email" class="col-sm-2 col-form-label">Email</label>
					    <div class="col-sm-8">
					      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{$student->email}}">
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="course" class="col-sm-2 col-form-label">Course</label>
					    <div class="col-sm-8">
					      <input type="course" class="form-control" id="course" placeholder="Enter Course" name="course" value="{{$student->course}}">
					    </div>
					  </div>
						
				  		
				  		<button type="submit" class="btn btn-outline-primary">Edit</button>
				</form>
				
			
		</div>
	</div>
</div>
@endsection
