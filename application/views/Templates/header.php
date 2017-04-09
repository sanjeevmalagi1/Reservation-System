<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $this->session->FirstName; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
                                                        <?php 
                                                        if($this->session->userdata('logged_in'))
                                                        {
                                                        ?>
                                                        <li><a href="<?php echo base_url(); ?>index.php/User/LogOut"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> LogOut</a></li>
                                                        <?php
                                                        }
                                                        else
                                                        {
                                                        ?>
                                                        <li><a data-toggle="modal" data-target=".bs-example-modal-lg"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>Log In</a></li>
                                                        <?php 
                                                        
                                                        }?>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Log In</h4>
                      </div>
                      <div class="modal-body">
                      <div class="login-panel panel panel-default">
				
				<div class="panel-body text-center">
                                    
                                    <form role="form" method="POST" action="<?php echo base_url(); ?>index.php/User/LogIn">
						<fieldset>
                                                    <div class="form-group" >
                                                            <input class="form-control" placeholder="Your UserName" name="UserName" type="text" autofocus="" required="required">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="Password" type="password" value="" required="required">
							</div>
							
                                                    
						</fieldset>
					
                                    New to BMS ? <a href="<?php echo base_url(); ?>index.php/User/Register" class="btn ">Sign Up</a>
				</div>
			</div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                      </div>
                        </form>
                    </div>
                  </div>
                </div>