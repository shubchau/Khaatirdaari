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
						     
                                   <h2 align="center">Sign Up</h2>
                                        <form action="/action_page.php">
										     <div class="input-group">
                                                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                     <input id="name" type="text" class="form-control" name="name" placeholder="Enter Name">
                                              </div>
											  <br>
                                             <div class="input-group">
                                                 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                 <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email">
                                             </div>
											 <br>
                                                 <div class="input-group">
                                                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                 <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password">
                                                 </div>
												 <br>
												 <div class="input-group">
                                                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                 <input id="password" type="password" class="form-control" name="password" placeholder="Re-Enter Password">
                                                 </div>
                                                      <div class="checkbox">
                                                           <label><input type="checkbox" name="remember"> Remember me</label>
                                                      </div>
                                                           <button type="submit" class="btn btn-default">Sign Up</button>
														   <a href="login" class="btn btn-info" role="button">Sign In</a>
                                        </form>                     
						     </div>
					      </div>
					      </div>
                         </div>
					 </div>
			      </div>
                </div>
            </div>
       </body>
</html>