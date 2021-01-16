@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<div class="container">
<section id="showcase">
   <div class="contianer">
      <div class="row center-xs center-sm center-lg middle-xs middle-sm middle-lg">
         <div class="col-xs-12 col-ms-12 col-lg-12">
            <img src="/images/slider-2.jpg" class="img-fluid slider-image" alt="Slider Image">
            <div class="slider-text">
               <h1 class="display-1">welcom to our <span class="primery-text">touring company</span></h1>
            </div>
         </div>
      </div>
   </div> 
</section>

      <section id="features">
         <div class="contianer">
            <div class="row center-xs center-sm center-md">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                  <h1>Core Features <small class="text-muted"> what's included</small></h1>
               </div>
            </div>

            <div class="row center-xs center-sm center-md" align="center">
               <div class="col-4 ">
                  <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/trns.jpg" alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title">transportation department</h5>
                           <p class="card-text">lorem ipsum dolor sit amet, consectetur adipisicng elit.</p>
                           <a href="services" class="card-link">Lern More</a>
                     </div>
                  </div>
               </div>
               <div class="col-4">
               <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/mark.jpg" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">marketing department</h5>
                        <p class="card-text">lorem ipsum dolor sit amet, consectetur adipisicng elit.</p>
                           <a href="services" class="card-link">Lern More</a>
                  </div>
               </div>
               </div>
               <div class="col-4">
               <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/orig.jpg" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">aviation department</h5>
                        <p class="card-text">lorem ipsum dolor sit amet, consectetur adipisicng elit.</p>
                           <a href="services" class="card-link">Lern More</a>
                  </div>
               </div>
               </div>
            </div>
            <div class="row center-xs center-sm center-md" align="center">
               <div class="col-4">
               <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/toris.jpg" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">tourism department</h5>
                        <p class="card-text">lorem ipsum dolor sit amet, consectetur adipisicng elit.</p>
                           <a href="services" class="card-link">Lern More</a>
                  </div>
               </div>
               </div>
               <div class="col-4">
               <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/resv.jpg" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">hotel reservation</h5>
                        <p class="card-text">lorem ipsum dolor sit amet, consectetur adipisicng elit.</p>
                           <a href="services" class="card-link">Lern More</a>
                  </div>
               </div>
               </div>
               <div class="col-4">
               <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/fli.jpg" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">booked a flight</h5>
                        <p class="card-text">lorem ipsum dolor sit amet, consectetur adipisicng elit.</p>
                           <a href="services" class="card-link">Lern More</a>
                  </div>
               </div>
               </div>
               
            </div>

      </section>

   </div>
   
@endsection
