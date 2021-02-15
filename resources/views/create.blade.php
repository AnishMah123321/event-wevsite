@extends('layouts.app')
@section('content')
<h1 style="text-align: center;"> Create A New Event </h1>

<form method="POST" action="/projects" enctype="multipart/form-data">
{{csrf_field()}}
<div class="form-group" >
    <label for="exampleInputEmail1">Name Of Event </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name Of Event" name="name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Event Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description Of Event" name="description">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Event Venue</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Location of Event Venue" name="venue">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">No of seats</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Number Of Seats In Venune" name="seats">
    
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Choose your File</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <button type="submit" class="button">Add Event</button>
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

@endsection
