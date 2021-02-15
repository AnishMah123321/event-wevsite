@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





<!------ Include the above in your HEAD tag ---------->
 <h1 style="text-align: center;">
	Events
</h1>
<section class="why-edit">

    <div class="container">
   
    @foreach ($projects as $project)
        <div class="column">
            <div class="col-md-8">
                <div class="why-edit-box">
                   <a href="/projects/{{$project->id}}/check"> <h3>{{ $project->name }}</h3></a>
                    <p>{{$project->description}}</p>
                    <img src="https://www.researchedit.org/public/images/book-icon.png" alt="Book Icon">
                </div>
            </div>
           
        </div>
        @endforeach

    </div>
</section>
	

</ul>


<style type="text/css">
	.why-edit {
 margin:0px;
 
 height:auto;
 background-attachment:fixed;
 background-position:top;
 background-repeat:no-repeat;
 background-size:cover;
 padding:0px 0;
 background:#aed8f0;
}
.why-edit-box {
 background:#fff;
 padding:37px;
 box-shadow:0 0 10px 0 #ddd;
 margin-bottom:30px;
 height:100%
}
.why-edit-box img {
 position:absolute;
 bottom:0;
 right:37px;
 width:137px;
 opacity:.1
}
.why-edit-box h3 {
 margin:0;
 padding-top:10px;
 line-height: 1.1em;
color: #14365C;
font-family: 'Open Sans',Arial,sans-serif;
font-weight: 600;
}
.why-edit-box h3::after {
 position:absolute;
 content:'';
 height:10px;
 margin:0 auto;
 left:0;
 top:9%;
 width:50%;
 background:#f79418
}
.why-edit-box p {
    margin: 0;
    margin-top: 0px;
    font-size: 15px;
    line-height: 26px;
    margin-top: 20px;

}
.why-edit .row .col-md-4 {
    margin-bottom: 30px;
}
</style>
@endsection
