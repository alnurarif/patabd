@extends('layouts.website')
@section('content')
<style type="text/css">
.modal {
    display: none; 
    position: fixed; 
    z-index: 99; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
}
/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 0px;
    /*border: 1px solid #888;*/
    width: 620px;
    border-radius:0px;
    overflow:hidden;
    position:relative;
}
.modal-content .header{
    background: #000;
    padding: 5px 0px 5px 17px;
}
.modal-content .closeModalCross{
	position: absolute;
    color: #fff;
    right: 0px;
    top: 0px;
}
.modal-content .header h1{
    padding: 0px;
    margin: 0px;
    color: #fff;
    font-size: 20px;
}
.modal-content .body{
	padding:10px;
}
.modal-content .body .modalText{
	font-size: 14px;
    line-height: 28px;
    margin: 0px;
    font-weight: bold;
}
.modal-content .body input,.modal-content .body textarea{
	width: 100%;
    border: 1px solid #cfcfcf;
    border-radius: 2px;
    margin: 0px;
    padding: 0px;
}
.modal-content .body input{
	height:30px;
}
.modal-content .body textarea{
	height:100px;
}
.modal-content .body button{
	padding:5px 10px;
	border:none;
	background: #cfcfcf;
	width:100%;
	margin: 5px 0px;
	cursor:pointer;

}	


</style>

		<section id="lur-section">
			<div class="container-fluid">
				<div class="row">


					<div class="col-md-3">
						<div class="lur_left">
						  <ul class="nav-tabs">
								<li class="active"><i class="fas fa-check"></i><a href="{{url('room/'.$roomid->id)}}">Rooms</a></li>
								<li class="active"><i class="fas fa-check"></i><a href="{{url('bed/'.$roomid->id)}}">Bed</a></li>
								<li class="active"><i class="fas fa-check"></i><a href="{{url('amenities/'.$roomid->id)}}">Amenities</a></li>
								<li><a href="{{url('address/'.$roomid->id)}}">Address</a></li>
								<li><a href="#">House rules</a></li>
								<li><a href="#">Resident Landlord/Owner</a></li>
								<li><a href="#">Restrictions</a></li>
								<li><a href="#">Rent</a></li>
								<li><a href="#">Availability</a></li>
								<li><a href="#">Title</a></li>
								<li><a href="#">Photos</a></li>
								<li><a href="#">Main Photo</a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-6">
						<form method="post" action="{{url('/address/update')}}">
							@csrf
						<div class="lur_right">
						<div class="address">
							<p>Where is your property located in?</p>
							<br>

							<input type="hidden" value="{{$roomid->id}}" name="id">
							<input type="hidden" name="lat" id="lat_main">
                			<input type="hidden" name="lng" id="lng_main">
							<div class="form">
								<div class="form_content">
									<labe>Google Location</label>
									<input type="text" name="google_location" id="google_location" class="form-control" placeholder="Google Location" required>
								</div>
							</div>
							<div class="form">
								<div class="form_content">
									<labe>Address</label>
									<input type="text" name="address" class="form-control" placeholder="i.e Fleet Street" required>
								</div>
							</div>


							<div class="form">
								<div class="form_content" style="width: 30%">
									<labe>House number / code</label>
									<input type="text" name="code" class="form-control" required>
								</div>
							</div>



							<div class="form">
								<div class="form_content">
									<labe>Optional extra info (i.e. details on door number)</label>
									<input type="text" name="extra" class="form-control">
								</div>
							</div>


							<div class="form" style="width: 30%">
								<div class="form_content">
									<labe>Postal code</label>
									<input type="text" name="postal_code" class="form-control" required>
								</div>
							</div>
						</div>
					</div>

					<div class="next">
						<a href="{{url('/amenities/'.$roomid->id)}}" class="login" style="position: absolute !important;bottom: 0 !important;
			left: 109px !important;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>


						<button class="login" type="submit"  style="position: absolute !important;
			bottom: 0 !important;
			right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>

					</div>
				</form>
					</div>
					<div class="col-md-3"></div>
					</div>

				</div>

			</div>







		</section>
<!-- The Modal -->
<div id="showMapModal" class="modal" style="padding-top:20px;">
    <!-- Modal content -->
    <div class="modal-content" id="showMapModalContent">
    	<div class="header">
    		<h1>Select Location</h1>
    	</div>
    	<div class="body">
            <form class="form-horizontal" id="map_form">
                <input type="hidden" name="lat" id="lat">
                <input type="hidden" name="lng" id="lng">
                <input type="hidden" name="name" id="location">

                <input id="pac-input" class="controls" type="text"
                       placeholder="Enter a location" style="left: 300px;top: 0px;width: 350px;">
                
                <div id="map" style="height: 400px;width: 600px"></div>
            </form>
    	</div>
    </div>
</div>
<!-- end modal -->


	<!-- + - js -->
	<script type="text/javascript">
			function CountPlusMinus() {
			    let count = 1;
			    let inputValue = document.getElementById('count');

			    document.getElementById('plus').addEventListener('click', function() {

			        function plus() {

			            count++;
			            inputValue.value = count;
			        }
			        plus();
			    })

			    document.getElementById('moins').addEventListener('click', function() {
			        function minus() {
			            document.getElementById('moins')
			            if (count > 1) {
			                count--;
			                inputValue.value = count;
			            }
			        }
			        minus();
			    })
			}

			CountPlusMinus();
	</script>




		<!-- + - js -->
	<script type="text/javascript">
			function CountPlusMinus() {
			    let count = 1;
			    let inputValue = document.getElementById('count_two');

			    document.getElementById('plus_two').addEventListener('click', function() {

			        function plus() {

			            count++;
			            inputValue.value = count;
			        }
			        plus();
			    })

			    document.getElementById('moins_two').addEventListener('click', function() {
			        function minus() {
			            document.getElementById('moins_two')
			            if (count > 1) {
			                count--;
			                inputValue.value = count;
			            }
			        }
			        minus();
			    })
			}

			CountPlusMinus();
	</script>


	<!-- + - js -->
	<script type="text/javascript">
			function CountPlusMinus() {
			    let count = 1;
			    let inputValue = document.getElementById('count_three');

			    document.getElementById('plus_three').addEventListener('click', function() {

			        function plus() {

			            count++;
			            inputValue.value = count;
			        }
			        plus();
			    })

			    document.getElementById('moins_three').addEventListener('click', function() {
			        function minus() {
			            document.getElementById('moins_three')
			            if (count > 1) {
			                count--;
			                inputValue.value = count;
			            }
			        }
			        minus();
			    })
			}

			CountPlusMinus();
	</script>


		<!-- + - js -->
	<script type="text/javascript">
			function CountPlusMinus() {
			    let count = 1;
			    let inputValue = document.getElementById('count_four');

			    document.getElementById('plus_four').addEventListener('click', function() {

			        function plus() {

			            count++;
			            inputValue.value = count;
			        }
			        plus();
			    })

			    document.getElementById('moins_four').addEventListener('click', function() {
			        function minus() {
			            document.getElementById('moins_four')
			            if (count > 1) {
			                count--;
			                inputValue.value = count;
			            }
			        }
			        minus();
			    })
			}

			CountPlusMinus();
	</script>



	<!-- js for select option -->
	<script type="text/javascript">
		$(function() {
			  $('#select_option').change(function(){
			    $('.colors').hide();
			    $('#' + $(this).val()).show();
			  });
			});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#map_form').on('submit',function(e){
				e.preventDefault();
			});
			$('#google_location').on('focus',function(){
				$('#showMapModal').fadeIn();
			});
		});
		var pacContainerInitialized = false;
		$('#pac-input').keypress(function() {
			if (!pacContainerInitialized) {
				$('.pac-container').css('z-index', '9999');
			pacContainerInitialized = true;
			}
		});

		function initMap() {
	        var map = new google.maps.Map(document.getElementById('map'), {
	            center: {lat: -33.8688, lng: 151.2195},
	            zoom: 13
	        });
	        var input = (document.getElementById('pac-input'));

	        var types = document.getElementById('type-selector');
	        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
	        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

	        var autocomplete = new google.maps.places.Autocomplete(input);
	        autocomplete.bindTo('bounds', map);

	        var infowindow = new google.maps.InfoWindow();
	        var marker = new google.maps.Marker({
	            map: map,
	            anchorPoint: new google.maps.Point(0, -29)
	        });

	        autocomplete.addListener('place_changed', function() {
	            infowindow.close();
	            marker.setVisible(false);
	            var place = autocomplete.getPlace();
	            if (!place.geometry) {
	                // User entered the name of a Place that was not suggested and
	                // pressed the Enter key, or the Place Details request failed.
	                window.alert("No details available for input: '" + place.name + "'");
	                return;
	            }

	            // If the place has a geometry, then present it on a map.
	            if (place.geometry.viewport) {
	                map.fitBounds(place.geometry.viewport);
	            } else {
	                map.setCenter(place.geometry.location);
	                map.setZoom(17);  // Why 17? Because it looks good.
	            }
	            marker.setIcon(/** @type {google.maps.Icon} */({
	                url: place.icon,
	                size: new google.maps.Size(71, 71),
	                origin: new google.maps.Point(0, 0),
	                anchor: new google.maps.Point(17, 34),
	                scaledSize: new google.maps.Size(35, 35)
	            }));
	            marker.setPosition(place.geometry.location);
	            marker.setVisible(true);
	            var item_Lat =place.geometry.location.lat();
	            var item_Lng= place.geometry.location.lng();
	            var item_Location = place.formatted_address;
				//alert("Lat= "+item_Lat+"_____Lang="+item_Lng+"_____Location="+item_Location);
	            $("#lat").val(item_Lat);
	            $("#lng").val(item_Lng);
	            $("#location").val(item_Location);

	            $('#showMapModal').fadeOut();
				$('#google_location').val($('#pac-input').val());	            
				$('#lat_main').val($('#lat').val());
				$('#lng_main').val($('#lng').val());
	            var address = '';
	            if (place.address_components) {
	                address = [
	                    (place.address_components[0] && place.address_components[0].short_name || ''),
	                    (place.address_components[1] && place.address_components[1].short_name || ''),
	                    (place.address_components[2] && place.address_components[2].short_name || '')
	                ].join(' ');
	            }

	            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
	            infowindow.open(map, marker);
	        });

	        // Sets a listener on a radio button to change the filter type on Places
	        // Autocomplete.
	        function setupClickListener(id, types) {
	            var radioButton = document.getElementById(id);
	            radioButton.addEventListener('click', function() {
	                autocomplete.setTypes(types);
	            });
	        }

	        setupClickListener('changetype-all', []);
	        setupClickListener('changetype-address', ['address']);
	        setupClickListener('changetype-establishment', ['establishment']);
	        setupClickListener('changetype-geocode', ['geocode']);
	    }
	    function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
	        var R = 6371; // Radius of the earth in km
	        var dLat = deg2rad(lat2-lat1);  // deg2rad below
	        var dLon = deg2rad(lon2-lon1);
	        var a =
	            Math.sin(dLat/2) * Math.sin(dLat/2) +
	            Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
	            Math.sin(dLon/2) * Math.sin(dLon/2)
	        ;
	        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
	        var d = R * c; // Distance in km
	        return d;
	    }

	    function deg2rad(deg) {
	        return deg * (Math.PI/180)
	    }
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCR5PFyvraK8Cqbu-vQu7UAR-NkcABHNuw&libraries=places&callback=initMap"
        async defer></script>
@endsection
