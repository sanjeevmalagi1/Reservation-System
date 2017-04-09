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
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add A new Show</div>
					<div class="panel-body">
                                            <form method="POST">
						<div class="col-md-8 col-md-offset-2 form-group">
                                                    <label>Name Of the Show :</label>
                                                    <input type="text" class="form-control" name="ShowName">
                                                </div>
                                                <div class="col-md-8 col-md-offset-2 form-group">
                                                    <label>Description Of the Show :</label>
                                                    <textarea class="form-control" name="Desription"></textarea>
                                                </div>
                                                <div class="row col-md-8 col-md-offset-2 form-group">
                                                <div class="col-md-6">
                                                    <label>Number Of Seats :</label>
                                                    <input type="number" class="form-control" name="NumberOfSeats">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Price Per Seat :</label>
                                                    <input class="form-control" type="number" name="Price">
                                                </div>
                                                </div>
                                                <div class="row col-md-8 col-md-offset-2 form-group">
                                                <div class="col-md-6">
                                                    <label>Catagory :</label>
                                                    <select class="form-control" name="NumberOfSeats">
                                                        <option>Drama</option>
                                                        <option>Opera</option>
                                                        <option>Add new</option>
                                                        
                                                    </select>
                                                </div>
                                                     
                                                <div class="col-md-6">
                                                    <label> Add new </label>
                                                    <input class="form-control disabled" disabled="true" type="text" name="Price">
                                                </div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2 form-group">
                                                    <label>Address :</label>
                                                    <input id="searchTextField" class="form-control" type="text" name="Address">
                                                </div>
                                                <script>
                                                    function initialize() {

                                                    var input = document.getElementById('searchTextField');
                                                    var autocomplete = new google.maps.places.Autocomplete(input);
                                                    }

                                                    google.maps.event.addDomListener(window, 'load', initialize);
                                                    //AIzaSyC3rCPMfWF3HeorWnMnu6fgU1h0Z8De22A
                                                </script>
                                                
                                                <div class="col-md-8 col-md-offset-2">
                                                    <label>Location :</label>
                                                    <input type="button" value="Drop Pin" onclick="dropPin()"> Drop a marker on the center of your map<br>

                                                    <div id="map"></div>
                                                    <style>
                                                    #map {
                                                      height: 400px;
                                                    }
                                                    </style>
                                                    <script src="https://maps.googleapis.com/maps/api/js"></script>
                                                    <script>
                                                    var directionsDisplay;
                                                    var directionsService = new google.maps.DirectionsService();
                                                    var map;
                                                    var endMarker;

                                                    function initialize() {
                                                      directionsDisplay = new google.maps.DirectionsRenderer();
                                                      var paris = new google.maps.LatLng(48.86100157399595,2.335891842842086);
                                                      var mapOptions = {
                                                        zoom: 7,
                                                        center: paris
                                                      }
                                                      map = new google.maps.Map(document.getElementById("map"), mapOptions);
                                                      directionsDisplay.setMap(map);
                                                    }

                                                    function dropPin() {
                                                      // if any previous marker exists, let's first remove it from the map
                                                      if (endMarker) {
                                                        endMarker.setMap(null);
                                                      }
                                                      // create the marker
                                                      endMarker = new google.maps.Marker({
                                                        position: map.getCenter(),
                                                        map: map,
                                                        draggable: true,
                                                      });
                                                      copyMarkerpositionToInput();
                                                      // add an event "onDrag"
                                                      google.maps.event.addListener(endMarker, 'dragend', function() {
                                                        copyMarkerpositionToInput();
                                                      });
                                                    }

                                                    function copyMarkerpositionToInput() {
                                                      // get the position of the marker, and set it as the value of input
                                                      document.getElementById("lat").value = endMarker.getPosition().lat();
                                                      document.getElementById("lng").value = endMarker.getPosition().lng();
                                                    }

                                                    function calcRoute() {
                                                      var start = document.getElementById("start").value;
                                                      var end = document.getElementById("end").value;
                                                      var request = {
                                                        origin:start,
                                                        destination:end,
                                                        travelMode: google.maps.TravelMode.DRIVING
                                                      };
                                                      directionsService.route(request, function(result, status) {
                                                        if (status == google.maps.DirectionsStatus.OK) {
                                                          directionsDisplay.setDirections(result);
                                                        }
                                                      });
                                                    }
                                                    google.maps.event.addDomListener(window, 'load', initialize);
                                                    </script>
                                                    <input name="latitude" id="lat" type="hidden"> 
                                                    <input name="longitude" id="lng" type="hidden"> 
                                                </div>
                                                
						<div class="col-md-8 col-md-offset-2">
                                                    <label>Image :</label>
                                                    <input class="form-control" type="text" name="Address">
                                                </div>
                                                
                                                <div class="col-md-8 col-md-offset-2">
                                                    <label>Banner :</label>
                                                    <input class="form-control" type="text" name="Address">
                                                </div>
                                            </form>    
						
					</div>
				</div>
			</div><!-- /.col-->
		</div>
		
	</div>	<!--/.main-->
