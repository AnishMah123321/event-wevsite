@extends('layouts.app')
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
@section('content')
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2>Events in Nepal</h2>
              <p> we are experts in both event design and execution, ensuring your event is going to be everything you envisioned and more. We will coordinate all of the vital aspects of your event planning, from the perfect sound to the detailed décor enhancements, and everything in between..</p>
              <a href="#service" class="read_more2">Read more</a> </div>
          </div>
          <div class="col-lg-5 col-sm-5">
			<img src="images/event.jpg" class="zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
  <section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>
    <div class="welcome">
    <img src="images/wedding.jpeg" alt="..." class="img-thumbnail">
    <img src="images/parties.jfif" alt="..." class="img-thumbnail">
    <img src="images/meetings.jpg" alt="..." class="img-thumbnail">
    </div>
   
    <!--/Title --> 
    
  </div>
  
</section>
</section>
 <style type="text/css">
    
 .welcome img{
  border: 1px solid #ddd;
  border-radius: 20px;
  padding-left: 0%;
  width: 250px;
  margin: 5%;
}
    </style>
@endsection