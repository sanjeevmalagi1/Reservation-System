<?php 

$ShowInformation=$this->shows_model->GetShowInformation($Ticket['ShowID']);

?>

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
					<div class="panel-heading"><?php echo $ShowInformation['Name']; ?></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
                                                    <img src="<?php echo base_url(); ?>images/<?php echo $ShowInformation['ImageLink']; ?>" class="img-responsive">
                                                </div>
					</div>
                                        <hr/>
                                        <div class="panel-body">
                                           
                                            <table class="table table-hover">
                                                <thead>
                                                  <tr>
                                                    <th>Name Of the Show</th>
                                                    <th>No Of Seats</th>
                                                    <th>Cost</th>
                                                    
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td><?php echo $ShowInformation['Name']; ?></td>
                                                    <td><?php echo $Ticket['Number']; ?></td>
                                                    <td><?php echo $Ticket['Number']*$ShowInformation['Price']; ?></td>
                                                  </tr>
                                   
                                                </tbody>
                                              </table>
                                            
                                            <div class="cleafix"></div>
                                            <hr/>
                                            <a onclick="window.print();" class="btn btn-primary col-lg-12"> <span class="glyphicon glyphicon-print"></span>  Print Ticket</a>
                                        </div>
				</div>
			</div>
		</div><!--/.row-->
                
                
					
		
	</div>	<!--/.main-->
