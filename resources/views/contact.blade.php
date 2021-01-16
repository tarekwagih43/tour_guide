@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<div class="container" >
      <section class="jumbotron text-center">
            <div class="container">
               <h1 class="jumbotron-heading">Contact Us</h1>
               <p class="lead text-muted">Feel Free To Call,<span class="primery-text"> Any Time. </span></p>
            </div>
      </section>
      <section>
         <form>
            <div class="row">
               <div class="col-12">
                  <div class="form-group">
                     <label for="name">Your Name</label>
                     <input type="text" class="form-control" id="name" placeholder="your name">
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-group">
                     <label for="email">Email address</label>
                     <input type="email" class="form-control" id="email" placeholder="name@example.com">
                  </div>

                  <div class="form-group">
                     <label for="phone">Phone Number</label>
                     <input type="tel" class="form-control" id="phone" placeholder="+00 000 0000 000">
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-group">
                     <label for="message">Your Message</label>
                     <textarea class="form-control" id="message" rows="5"></textarea>
                  </div>
               </div>
               <div class="col-12">
                    <button type="submit" class="btn btn-primary mb-2 pull-right">Send Your Message</button>
               </div>
            </div>
         </form>
      </section>

</div>


@endsection
