	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo $Show['Name']; ?></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
                                                    <img src="<?php echo base_url(); ?>images/<?php echo $Show['ImageLink']; ?>" class="img-responsive">
                                                </div>
					</div>
                                        <hr/>
                                        <div class="panel-body">
                                            <?php echo $Show['Description']; ?>
                                            
                                            <table class="table table-hover">
                                                <thead>
                                                  <tr>
                                                    <th>Seat</th>
                                                    <th>Price</th>
                                                    <th>Available</th>
                                                    
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>First Class</td>
                                                    <td>250</td>
                                                    <td>10</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Normal</td>
                                                    <td>150</td>
                                                    <td>25</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Economy</td>
                                                    <td>75</td>
                                                    <td>20</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            
                                            <div class="cleafix"></div>
                                            <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>index.php/Operations/Book/<?php echo $Show['ID']; ?>">Book Now!!</a>
					</div>
				</div>
			</div>
		</div><!--/.row-->
                
                
					
		
	</div>	<!--/.main-->
