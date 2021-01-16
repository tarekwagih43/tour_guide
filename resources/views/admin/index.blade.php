@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<h2>Admin Area</h2>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Message</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td scope="row">Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				    </tr>
				    <tr scope="row">
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <td scope="row">Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<br>
<br>

<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'about')">About</button>
  <button class="tablinks" onclick="openTab(event, 'SERVICES')">Services</button>
</div>

<div id="home" class="tabcontent">
	
</div>

<div id="about" class="tabcontent" style="display: block;">
  <h3>About Editing</h3>
  <form>
     <div>
        <label for="name">who we are?</label><br>
     </div>
     <div>
        <textarea name="message" rows="5" cols="100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </textarea>
     </div>
<br>
<hr>
	     <div>
        <label for="name">What We Do?</label><br>
     </div>
     <div>
        <textarea name="message" rows="5" cols="100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </textarea>
     </div>


     <button type="submit"name="button">submit</button>
  </form>
</div>

<div id="SERVICES" class="tabcontent">
  <h3>SERVICES</h3>
  <form>
  	<div>
        <input type="text" name="title" value="web design & Development">
     </div>
     <div>
     <textarea name="description" rows="5" cols="100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
     </div>
      <br>
     <hr>

     	<div>
        <input type="text" name="title" value="softwere Development & Programing">
     </div>
     <div>
     <textarea name="description" rows="5" cols="100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
     </div>
     <br>
     <hr>
     	<div>
        <input type="text" name="title" value="Graphic Design">
     </div>
     <div>
     <textarea name="description" rows="5" cols="100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
     </div>

  </form> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>


@endsection
