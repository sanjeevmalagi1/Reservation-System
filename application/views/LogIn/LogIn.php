<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in
                                
                                </div>
                                <?php if($this->input->get('msg'))
                                {
                                ?>
                                <div class="alert bg-warning" role="alert">
					 <?php echo $this->input->get('msg'); ?> 
				</div>
                            
                                <?php  
                                }
                                ?>
                                
				<div class="panel-body text-center">
                                    
                                    <form role="form" method="POST">
						<fieldset>
							<div class="form-group">
                                                            <input class="form-control" placeholder="Your UserName" name="UserName" type="text" autofocus="" required="required">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="Password" type="password" value="" required="required">
							</div>
							
                                                    <button type="submit" class="btn btn-primary">Login</button>
						</fieldset>
					</form>
                                    New to BMS ? <a href="<?php echo base_url(); ?>index.php/User/Register" class="btn ">Sign Up</a>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->