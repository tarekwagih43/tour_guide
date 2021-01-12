<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/flexboxgrid.min.css">
      <link rel="stylesheet" type="text/css" href="css/all.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>
      <header id="mian-header">
         <div class="contianer">
            <div class="row center-xs end-sm end-md end-lg">
               <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                  <h1><span class="primery-text" style="font-size: 1.5rem; ">html - css</span></h1>
               </div>
               <div class="col-x-12 col-sm-10 col-sm-10 col-lg-10">
                  <nav id="navbar">
                     <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="services.html">services</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li class="current"><a href="admin.html">Admin</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </header>