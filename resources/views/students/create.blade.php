@extends('layout/main')	
@section('title', 'Add Student Form')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-8">
			<h3 class="mt-4">Add Student Form</h3>
				<form method="post" action="{{url('/students')}}">
					@csrf
					<div class="form-group row">
					    <label for="name" class="col-sm-2 col-form-label">Name</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Name" name="name" value="{{old('name')}}">
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
					      <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Enter NRP" name="nrp" value="{{old('nrp')}}">
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
					      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{old('email')}}">
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="course" class="col-sm-2 col-form-label">Course</label>
					    <div class="col-sm-8">
					      <input type="course" class="form-control" id="course" placeholder="Enter Course" name="course" value="{{old('course')}}">
					    </div>
					  </div>
						
				  		
				  		<button type="submit" class="btn btn-outline-primary">Add</button>
				</form>
				
			
		</div>
	</div>
</div>
@endsection
