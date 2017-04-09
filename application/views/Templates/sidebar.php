<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
                <form role="search" action="<?php echo base_url(); ?>index.php/Shows/Search" method="get">
			<div class="form-group">
                            <input type="text" class="form-control" placeholder="Search Catagory" name="catagory">
			</div>
		</form>
		<ul class="nav menu">
			
                        <li><a href="<?php echo base_url(); ?>index.php/Shows/Recent"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Recently Added Shows</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/Shows/MostFamous"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Top Shows</a></li>
			<?php 
                        if($this->session->userdata('logged_in'))
                        {
                        ?>
                        <li><a href="<?php echo base_url() ?>index.php/User/ViewBookings"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> My Bookings </a></li>
			<?php 
                        }
                        ?>
                        <li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->
	