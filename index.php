<html>
<head>
<title>Login</title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="\TelekungSystem\img\logoheader.png" width="100" height="60">Record System</a>
      </div>
    </nav>
  <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Login</h1>
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
    </div>
<br><br><br><div class="footer">
            <center>© 2018 developed by <a href="https://aliya-hudi.blogspot.com/">Aliya Hudi</a> (UiTM Melaka Kampus Jasin)</center>
    </div>
</body>
</html>