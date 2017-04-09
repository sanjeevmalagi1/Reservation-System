	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<!--div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-12 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-12 widget-right">
							<div class="large">120</div>
							<div class="text-muted">New Orders</div>
						</div>
					</div>
				</div>
			</div-->
                        <?php
                        if($Shows)
                        {    
                        foreach ($Shows as $Show) {
                            $ShowCard['Name']=$Show['Name'];
                            $ShowCard['ImageLink']=$Show['ImageLink'];
                            $ShowCard['ID']=$Show['ID'];
                            
                            $this->load->view('Templates/ShowCard',$ShowCard);
                        }
                        }
                        else 
                        {
                        ?>
                            <div class="alert bg-danger" role="alert">
					<svg class="glyph stroked cancel"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-cancel"></use></svg> Sorry!! No Such Category Found. <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            </div>
                        <?php
                        }
                        ?>
			
                        
			
			
		</div><!--/.row-->
		
	</div>	<!--/.main-->
