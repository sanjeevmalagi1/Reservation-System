<link href="<?php echo base_url() ?>css/jquery.seat-charts.css" rel="stylesheet" type="text/css"/>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Book Ticket For <?php echo $Show['Name']; ?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked email"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-email"></use></svg>Select Seats and Book</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Number Of Tickets</label>
									<div class="col-md-9">
                                                                            <input id="name" name="NumberOfSeats" type="number" value="1" class="form-control">
									</div>
								</div>
                                                                <!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
                                                                            <button type="submit" value="book" name="submit" class="btn btn-default btn-md pull-right">Confirm Book</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				
			</div>
		</div><!--/.row-->
                
                

		
		
	</div>	<!--/.main-->
        <script src="<?php echo base_url(); ?>js/jquery.seat-charts.js" type="text/javascript"></script>
        