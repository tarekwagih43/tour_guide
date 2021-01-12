@extends('layouts.app')

@section('title', 'Page Title')


@section('content')
      <section id="subheader">
         <div class="contianer">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h1>contact</h1>
               </div>
            </div>
         </div>
      </section>
      <section id="Page" class="contact">
         <div class="contianer">
            <div class="row center-xs center-sm center-md center-lg">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h2><spam class="primery-text">Get</spam> In Touch</h2>
                  <p>Please use this form to contact us !</p>
                  <form>
                     <div>
                        <label for="name">name</label><br>
                        <input type="text" name="name">
                     </div>
                     <div>
                        <label for="emial">emial</label><br>
                        <input type="text" name="emial">
                     </div>
                     <div>
                        <label for="message">message</label><br>
                        <textarea name="message"></textarea>
                     </div>
                     <button type="submit"name="button">submit</button>
                  </form>
                  
                     
               </div>
            </div>
         </div>
      </section>
@endsection
