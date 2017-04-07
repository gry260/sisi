<!DOCTYPE html>
<html>
<head>
  <title>Title of the document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="style.css"/>
  <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="nav nav-pills navbar-inverse  navbar-toggleable-sm justify-content-around">
  <div class="navbar-nav">
    <a class="nav-item nav-link">Help</a>
    <a class="nav-item nav-link">Contact</a>
    <a class="nav-item nav-link">Delivery Information</a>
  </div>
  <div class="navbar-nav">
    <a class="nav-item nav-link">Call us : 032 2352 782 </a>
  </div>
</nav>
<div class="container" style="border: black solid 1px;">
  <br />
  <div class="row">
    <div class="col-md-3">
      <img src="images/logo.png"/>
    </div>
    <div class="col-md-6 offset-3">
      <div class="d-flex">
        <a id="loginButton">Login</a>
        <a class="ml-1" href="register.html" id="register">REGISTER</a>
        <div class="cart box_1 ml-2">
          <a>
           <strong>$0.00 (0 items)&nbsp; <img src="images/bag.png" alt=""></strong>
          </a>
          <p><a href="javascript:;" class="simpleCart_empty"></a></p>
          <div class="clearfix"> </div>
        </div>
        <button id="checkout" class="btn btn-primary btn-sm">Checkout</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>