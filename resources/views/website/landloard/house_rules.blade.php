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
								<li class="active"><i class="fas fa-check"></i><a href="{{url('amenities/'.$roomid->id)}}">Amenities</a></li>
							<li class="active"><i class="fas fa-check"></i><a href="{{url('address/'.$roomid->id)}}">Address</a></li>
								<li><a href="{{url('house_rules/'.$roomid->id)}}">House rules</a></li>
								<li><a href="#">Restrictions</a></li>
								<li><a href="#">Rent</a></li>
								<li><a href="#">Availability</a></li>
								<li><a href="#">Title</a></li>
								<li><a href="#">Photos</a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-6">
						<div class="lur_right">
							<div class="house_rules">
								<p>House rules</p>
								<form action="{{url('rules/update')}}" method="post">
									@csrf
								<div class="house_option">
									<span>Is smoking allowed?</span>
								    <br>
										<input type="hidden" name="id" value="{{$roomid->id}}">

									<input type="radio" name="smoking_allowed" value="yes"> Yes<br>
									<input type="radio" name="no" value="no"> No<br>



								</div>

								<div class="house_option">
									<span>Are pets allowed?</span>
								    <br>
									<input type="radio" name="pets_allowed" value="Yes"> Yes<br>
									<input type="radio" name="pets_allowed_no" value="No"> No<br>
								</div>


								<div class="house_option">
									<span>Can tenants have overnight guests?</span>
								    <br>
									<input type="radio" name="guests" value="Yes"> Yes<br>
									<input type="radio" name="no_guests" value="No"> No<br>
								</div>

								<a href="{{url('/address/'.$roomid->id)}}" class="login" style="position: absolute !important;bottom: 0 !important;
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
