@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<section id="about" style="height: 100%">


   <div class="container" >
      <section class="jumbotron text-center">
            <div class="container">
               <h1 class="jumbotron-heading">About Us</h1>
               <p class="lead text-muted">Just some About,<span class="primery-text"> Touring Group. </span></p>
            </div>
      </section>
      <div class="row">
         <div class="col-6">
            <h1 class="about-heading"><span class="primery-text">who</span> we are</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
         </div>
         <div class="col-6">
            <h1 class="about-heading"><span class="primery-text">whate</span> we do</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
         </div>
      </div>
      <div class="row">
         <div class="col-12" align="center">
            <p>
               <a href="contact" class="btn btn-primary my-2">Call Us</a>
               <a href="services" class="btn btn-secondary my-2">Our Services</a>
            </p>
         </div>
      </div>
         <section id="info">
            <div class="contianer">
               <div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg ">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <img class="info-imge" src="images/images.jpg">
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div id="co-fu">
                        <h2>core features</h2>
                        <ul>
                           <li><i class="fa fa-check"> transportation department</i></li>
                           <li><i class="fa fa-check"> marketing department</i></li> 
                           <li><i class="fa fa-check"> aviation department</i></li>
                           <li><i class="fa fa-check"> tourism department</i></li>
                           <li><i class="fa fa-check"> hotel reservation</i></li> 
                           <li><i class="fa fa-check"> booked a flight</i></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
      </section>
   </div>
</section>
    
@endsection
