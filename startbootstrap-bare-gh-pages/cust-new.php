<!DOCTYPE html>
<html lang="en">

  <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

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
	tr:hover td {background:#eee}
	.footer {
		background:#000;
		padding: 20px 20px 20px 20px;
		color: #fff;
      }
    </style>
	
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="#">Customer Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">New Customer</h1>
          <p class="lead" align="left"><a href="TelekungSystem/cust-record.php" class="btn btn-danger" >Go Back</a></p>
        </div>
		 <div class="col"></div>
		<div class="col-6">
		<form>
  <div class="form-group">
    <label for="custid">Customer ID</label>
    <input type="text" class="form-control"  id="custid" placeholder="3 digits unique ID" required>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" required>
  </div>
<div class="form-group">
    <label for="add1">Address 1</label>
    <input type="text" class="form-control" id="add1" required>
  </div>
<div class="form-group">
    <label for="add2">Address 2</label>
    <input type="text" class="form-control" id="add2">
  </div>
<div class="form-group">
    <label for="postcode">Postcode</label>
    <input type="text" class="form-control" id="postcode"  required>
  </div>
 <div class="form-group">
    <label for="state">State</label>
    <select id="state" class="custom-select"  required>
      <option>Select...</option>
      <option value="JOHOR">JOHOR</option>
      <option value="KEDAH">KEDAH</option>
      <option value="KELANTAN">KELANTAN</option>
      <option value="MELAKA">MELAKA</option>
      <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
      <option value="PAHANG">PAHANG</option>
      <option value="PERAK">PERAK</option>
      <option value="PERLIS">PERLIS</option>
      <option value="PULAU PINANG">PULAU PINANG</option>
      <option value="SELANGOR">SELANGOR</option>
      <option value="TERENGGANU">TERENGGANU</option>
      <option value="KUALA LUMPUR">KUALA LUMPUR</option>
      <option value="PUTRAJAYA">PUTRAJAYA</option>
      <option value="SARAWAK">SARAWAK</option>
      <option value="SABAH">SABAH</option>
      <option value="LABUAN">LABUAN</option>
    </select>
  </div>
    <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" id="contact" required>
  </div>
  <center><button type="submit" class="btn btn-warning btn-lg">Submit</button></center>
</form></div>

	<div class="col"></div>
      </div>
    </div>
<br><br><br><div class="footer">
            <center>© 2018 developed by <a href="https://aliya-hudi.blogspot.com/">Aliya Hudi</a> (UiTM Melaka Kampus Jasin)</center>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>
