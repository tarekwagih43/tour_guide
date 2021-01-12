@extends('layouts.app')

@section('title', 'Page Title')


@section('content')

<div class="container">
<section id="showcase">
   <div class="contianer">
      <div class="row center-xs center-sm center-lg middle-xs middle-sm middle-lg">
         <div class="col-xs-10 col-ms-10 col-lg-10">
            <div class="slider-text">
               <img src="/images/88.jpg" class="img-fluid" alt="Responsive image">
               <h1 class="display-1">welcom to our <span class="primery-text">touring company</span></h1>
               <p>Pharaon</p>
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
                        <li><i class="fa fa-check">transportation department</i></li>
                         <li><i class="fa fa-check">marketing department</i></li> 
                         <li><i class="fa fa-check">aviation department</i></li>
                          <li><i class="fa fa-check">tourism department</i></li>
                         <li><i class="fa fa-check">hotel reservation</i></li> 
                          <li><i class="fa fa-check">booked a flight</i></li>
                     </ul>
                     </div>
                  </div>
               </div>
            </div>
      </section>
   </div>
@endsection
