<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Touring. CO | @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <link rel="stylesheet" type="text/css" href="/css/style.css">

</head> 
<body>
<div class="container">    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Touring. CO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pull-right ustify-content-center">
            <li class="nav-item active current">
                <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/about">about</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/services">services</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/contact">contact </a>
            </li>      
            <li class="nav-item active">
                <a class="nav-link" href="/admin">Admin</a>
            </li>

            </ul>

        </div>
    </nav>

</div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <a class="btn btn-primary mb-2 pull-right">logout</a>

      <form class="form-inline pull-right">
      <div class="form-group mx-sm-3 mb-2">
        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
      </div>
    </form>
    

    </div>
  </div>
</div>
<div class="container">
<main role="main" >

    @yield('content')
    


  <div class="container marketing">
      <section id="company">

          <div class="row">
              <div class="col-lg-4">
                  <div class="fo-contact">
                      <h4>contact Us</h4>
                      <ul>
                          <li><i class="fa fa-phone"> (617) 555-5555</i></li>
                          <li><i class="fa fa-envelope"> hiaderkhalid94.hk@gmial.com</i></li>
                          <li><i class="fa fa-map"> 400 mian st, Bosten Ma</i></li>
                      </ul>
                      
                  </div>
              </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                      <h4>About Us</h4>
                      <p>lorem ipsem dolor sit amet, consectetur adipisicing elit .</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                      <h4>Newsletter</h4>
                      <p>lorem ipsem dolor sit amet, consectetur adipisicing elit .</p>
                      <form>
                          <input type="text" name="emial" placeholder="enter your emial">
                          <button type="submit" name="button">submit</button>
                      </form>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
      </section>
          <section id="mian-footer" align="center">
          <div class="container">
              <div class="row center-xs center-sm center-md center-lg">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <h5>copyright &copy; 2020 | Touring. CO </h5>
                  </div>
              </div>
          </div>
      </section>
  </div>
    </main>
</div>
<!-- Bootstrap core JavaScript ================================================= -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
