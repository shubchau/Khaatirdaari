<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Guide | Register</title>
  <style>
  .guide register margin {
   margin-top: 120px;  
  }
  </style>
  
  <!-- Bootstrap core CSS-->
  <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
 <div class="guide register margin">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="<?php echo base_url("services/insert_data_guide"); ?>"method="post">
			 <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="fullname" type="text" class="form-control" name="fullname" placeholder="Enter Full Name">
             </div>
				<br>
											
				<div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>
			    <br>
											
				<div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input id="number" type="number" class="form-control" name="number" placeholder="Enter Phone Number">
                </div>
				<br>
											 
				<div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
				<br>
				<div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input id="password" type="password" class="form-control" name="password" placeholder="Re-Enter Password">
                </div>
				<br>							  
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="lat" type="text" class="form-control" name="lat" placeholder="Enter Latitute">
                </div>
				<br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="lng" type="text" class="form-control" name="lng" placeholder="Enter Longitute">
                </div>
				<br>
				<div class="form-group">
                     <label class="control-label">ServiceType:</label>
                     <select name="Service_type" class="form-control" id="service_id">
                            <option value="0" selected>Individual in City</option>
                            <option value="1">Service One</option>
                            <option value="2">Service Two</option>
                     </select>
                </div>
                
                <button type="submit" class="btn btn-default">Sign Up</button>
      </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="guidelogin">Login Page</a>
          <a class="d-block small" href="guidereset">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
 </div>
  <!-- Bootstrap core JavaScript-->
  <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/jquery/jquery.min.js"></script>
  <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
