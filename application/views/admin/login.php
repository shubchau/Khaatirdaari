  <html>
     <head>
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		   <style>
		       .panel-custom-color-grey {
                 margin-top: 120px;  
                }
              
			    body {
                background-image: url("<?php echo base_url("white.jpg"); ?>");
                }
		   </style>
     </head>
	   <body>
             <div class="container">
                <div class="container-fluid"> 
				   <div class="row">
				      <div class="col-sm-4 col-md-offset-4">
                        <div class="panel-custom-color-grey">
						 <div class="panel panel-default color-grey">
                             <div class="panel-body">
                                   <h2 align="center">Log In</h2>
                                        <form action="<?php echo base_url("services/read_data"); ?>"method="post">
                                             
                                                <div class="input-group">
                                                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                     <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                                </div>
                                                <br>
                                                 <div class="input-group">
                                                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                 <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                                 </div>
                                                      <div class="checkbox">
                                                           <label><input type="checkbox" name="remember"> Remember me</label>
                                                      </div>
                                                           <button type="submit" class="btn btn-default">Submit</button>
														   <a href="<?php echo base_url("services/signup"); ?>" class="btn btn-info" role="button"> Sign Up</a>
														   <a href="<?php echo base_url("services/passreset"); ?>"class="pull-right">Forgot Password</a>
                                        </form>                     
						     </div>
					      </div>
					      </div>
                         </div>
					 </div>
			      </div>
                </div>
            <!-- Footer -->
           <footer class="container-fluid bg-4 text-center">
           <p>Guide can login Here <a href="<?php echo base_url("services/guidelogin"); ?>">Login</a></p> 
		   <p>&copy Rajasthan Tourism 2018 </p>
           </footer>

       </body>
</html>