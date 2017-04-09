	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">All Your Bookings </div>
					
                                        <div class="panel-body">
                                            
                                            <table class="table table-hover">
                                                <thead>
                                                  <tr>
                                                    <th>Booking ID</th>
                                                    <th>Show Name</th>
                                                    <th>Cost</th>
                                                    <th>Action</th>
                                                    
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                foreach($Bookings as $Booking)
                                                {
                                                ?>    
                                                    
                                                  <tr>
                                                    <td><?php echo $Booking['ID']; ?></td>
                                                    <td><?php $Show=$this->shows_model->GetShowInformation($Booking['ShowID']); echo $Show['Name'] ?></td>
                                                    <td><?php echo $Show['Price']*$Booking['Number'] ?></td>
                                                    <td><a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/Operations/CancelBooking/<?php echo $Booking['ID']; ?>">Cancel</a>
                                                        <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/User/ViewBookings/<?php echo $Booking['ID']; ?>">Show Ticket</a>
                                                    </td>
                                                  </tr>
                                                <?php 
                                                }
                                                ?>  
                                                  
                                                </tbody>
                                              </table>
                                            
                                            <div class="cleafix"></div>
                                        </div>
				</div>
			</div>
		</div><!--/.row-->
                
                
					
		
	</div>	<!--/.main-->
