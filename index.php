<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Testapplication MVC">
  <meta name="author" content="D.B.">
  <!-- <link rel="icon" href="./favicon.ico">-->

  <title>Testapp</title>

  <!-- Bootstrap core CSS -->
  <link href="./custom/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./custom/custom.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <main role="main" class="container">
    <div class="content">
      <div class="row">
        <div class="col-md-3 col-offset-md-3">
<?php
$path = './inc/';
require_once($path.'Controller.php');
$c = new Controller();
$c->handleCmd();
unset($c);
?>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="./custom/jquery.min.js"></script>
  <!-- <script type="text/javascript">window.jQuery || document.write('<script src="./jquery.min.js"><\/script>')</script> -->
  <script type="text/javascript" src="./custom/popper.min.js"></script>
  <script type="text/javascript" src="./custom/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./custom/custom.js"></script>
</body>
</html>
