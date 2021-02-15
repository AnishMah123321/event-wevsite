@extends('layouts.app')
@section('content')
<h1 style="text-align: center;"> Edit Event </h1>

<form method="POST" action="/projects/{{ $project->id}}" style="margin-bottom: 1em" enctype="multipart/form-data">
{{ method_field('PATCH') }}
{{ csrf_field() }}
<div class="form-group" >
    <label for="exampleInputEmail1">Name Of Event </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name Of Event" name="name" value="{{$project->name}}">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Event Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description Of Event" name="description" value="{{$project->description}}" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Event Venue</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Location of Event Venue" name="venue" value="{{$project->venue}}">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">No of seats</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Number Of Seats In Venune" name="seats" value="{{$project->seats}}">
    
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Choose your File</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <button type="submit" class="button">Update Event</button>
</form>

@if ($errors->any())
<div class="notification is-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
  </div>

<form method="POST" action="/projects/{{ $project->id}}">
{{ method_field('DELETE') }}
{{csrf_field() }}

	<div class="field">
	<div clas="control">
	<button type="submit" class="button">Delete Project</button>
	</div>
	</div>
</form>

@endsection