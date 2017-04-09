<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    
			<div class="login-panel panel panel-default">
				<div class="panel-heading">New User
                                
                                </div>
                                
				<div class="panel-body text-center">
                                    
                                    <form role="form" method="POST">
						<fieldset>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="First Name" name="FirstName" type="text" autofocus="" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="Last Name" name="LastName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="Choose A UserName" name="UserName" type="text" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="Password" name="Password" type="Password" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="Your Email ID" name="Email" type="email" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="Your Phone" name="Phone" type="number" autofocus="" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
							
							
                                                    <button type="submit" class="btn btn-primary">Register</button>
						</fieldset>
					</form>
                                    Already Registered ? <a href="<?php echo base_url(); ?>index.php/User/LogIn" class="btn ">Log In</a>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->