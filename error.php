<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Access Denied</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home.php"><img src="\TelekungSystem\img\logoheader.png" width="100" height="60">Record System</a>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Sorry, you don't have the permission to access the page!</h1>
        </div>
		<div class="col"></div>
		<div class="col-6">
		<form name="newcust"  method="post" action="checklogin.php" >
  <div class="form-group">
    <label for="name">Username</label>
    <input type="text" name="uid" class="form-control" autofocus required>
  </div>
<div class="form-group">
    <label for="add1">Password</label>
    <input type="password" name="pw" class="form-control" required>
  </div>
  <center><button type="submit" class="btn btn-warning btn-lg">Login</button></center>
</form></div>
<div class="col"></div>
      </div>
	  <div class="row">
        <div class="col-lg-12 text-center">
		<p><br><br></p>
		<p class="lead"><b>If you think this is a mistake, please contact <a href="mailto:aliya.genius@gmail.com">the developer</a> for assistance. </b></p>
		<p><br><br><br><br></p>
		</div>
	  </div>
    </div>
	
<div class="footer">
            <center>© 2018 developed by <a href="https://aliya-hudi.blogspot.com/">Aliya Hudi</a> (UiTM Melaka Kampus Jasin)</center>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
