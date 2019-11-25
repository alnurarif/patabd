@extends('layouts.website')
@section('content')

		<section id="lur-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<div class="lur_left">
						  <ul class="nav-tabs">
									<li class="active"><i class="fas fa-check"></i><a href="{{url('room/'.$roomid->id)}}">Rooms</a></li>
							    <li><a href="{{url('bed/'.$roomid->id)}}">Bed</a></li>
									<li><a href="">Amenities</a></li>
					        <li><a href="">Address</a></li>
					        <li><a href="">House rules</a></li>
					        <li><a href="">Restrictions</a></li>
					        <li><a href="">Rent</a></li>
					        <li><a href="">Availability</a></li>
					        <li><a href="">Title</a></li>
					        <li><a href="">Photos</a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-6">
						<div class="lur_right text-center">
					<div class="output" style="margin-top: -39px;">
						<div class="list_ur_room_two_right text-left" id="private_bedroom">
							<p>Bedroom 1: How many beds?</p>
							<span style="    color: #9b9494;
    font-size: 12px;
    padding-bottom: 24px;
    margin-top: -15px;
    margin-left: 11px;
    position: absolute;
    padding-bottom: 26px;">Tell us the number of beds and types in this bedroom.</span>
							<form class="" action="{{url('/bed/update')}}" method="post">
								@csrf
						 	<ul style="margin-top: 33px;">
								<input type="hidden" name="id" value="{{$roomid->id}}">
						 		<li>
						 			<div id="input_div">
						 				<label>Single bed</label>
						 				<input type="button" value="-" id="moins">
								        <input type="text" name="single_bed" value="1" id="count">
								        <input type="button" value="+" id="plus">
								    </div>
								</li>

								<li>
						 			<div id="input_div">
						 				<label>Double bed</label>
						 				<input type="button" value="-" id="moins_two">
								        <input type="text" name="double_bed" value="1" id="count_two">
								        <input type="button" value="+" id="plus_two">
								    </div>
								</li>

								<span style="float:right;">Total : 1 bed</span>



						 	</ul>
						</div>




							</div>

							</div>


							<a href="{{url('/room/'.$roomid->id)}}" class="login" style="position: absolute !important;bottom: 0 !important;
				left: 109px !important;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>


							<button class="login" type="submit"  style="position: absolute !important;
		    bottom: 0 !important;
		    right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>

								</form>
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
