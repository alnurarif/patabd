@extends('layouts.website')
@section('content')


		<section id="lur-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<div class="lur_left">
						  <ul class="nav-tabs">
								<li class="active"><i class="fas fa-check"></i><a href="{{url('room/'.$roomid->id)}}">Rooms</a></li>
								<li class="active"><i class="fas fa-check"></i><a href="{{url('bed/'.$roomid->id)}}">Bed</a></li>
								<li><a href="{{url('amenities/'.$roomid->id)}}">Amenities</a></li>
								<li><a href="">Address</a></li>
								<li><a href="">House rules</a></li>
								<li><a href="">Resident Landlord/Owner</a></li>
								<li><a href="">Restrictions</a></li>
								<li><a href="">Rent</a></li>
								<li><a href="">Availability</a></li>
								<li><a href="">Title</a></li>
								<li><a href="">Photos</a></li>
								<li><a href="">Main Photo</a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-6">
						<div class="lur_right text-center">
					<div class="output" style="margin-top: -39px;">
						<div class="amenities">
							<p>Which amenities does your property have?</p>
							<form class="" action="{{url('/amenities/update')}}" method="post">
								@csrf
							<ul>
								<input type="hidden" name="id" value="{{$roomid->id}}">
								<li>
									<label class="chck">
									  <input type="checkbox" name="wi_fi" value="1" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-wifi"></i>
									<label class="ex_label">Wi-Fi</label>
								</li>

								<li>
									<label class="chck">
									  <input type="checkbox" name="cable_tv" value="1" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-tv"></i>
									<label class="ex_label">Cable TV</label>
								</li>

								<li>
									<label class="chck">
									  <input type="checkbox" name="central_heating" value="1" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-thermometer-three-quarters" style="    font-size: 34px;"></i>
									<label class="ex_label">Central heating</label>
								</li>

								<li>
									<label class="chck">
									  <input type="checkbox" name="washing_machine" value="1" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-recycle"></i>
									<label class="ex_label">Washing Machine</label>
								</li>

								<li>
									<label class="chck">
									  <input type="checkbox" name="outdoor_area" value="1" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fab fa-pagelines"></i>
									<label class="ex_label">Outdoor Area (terrace, belcony)</label>
								</li>


								<li>
									<label class="chck">
									  <input type="checkbox" name="bed_linen" value="1" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-window-minimize"></i>
									<label class="ex_label">Bed linen and towels</label>
								</li>







								<li>
									<label class="chck">
									  <input type="checkbox" name="accessibility" value="1" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-wheelchair"></i>
									<label class="ex_label">Accessibility</label>
								</li>




								<li>
									<label class="chck">
									  <input type="checkbox" name="elevator" value="1" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-arrows-alt"></i>
									<label class="ex_label">Elevator</label>
								</li>

								<li>
									<label class="chck">
									  <input type="checkbox" name="air_conditioning" value="1" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-snowflake"></i>
									<label class="ex_label">Air conditioning</label>
								</li>







							</ul>
							<a href="{{url('/bed/'.$roomid->id)}}" class="login" style="position: absolute !important;bottom: 0 !important;
				left: 109px !important;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>

				<button class="login" type="submit"  style="position: absolute !important;
	bottom: 0 !important;
	right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
							</form>
						</div>
					</div>

					</div>
					</div>
					<div class="col-md-3"></div>
					</div>

				</div>

			</div>







		</section>



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

@endsection
