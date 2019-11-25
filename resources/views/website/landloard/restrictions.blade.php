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
								<li class="active"><i class="fas fa-check"></i><a href="{{url('house_rules/'.$roomid->id)}}">House rules</a></li>
								<li><a href="{{url('restrictions/'.$roomid->id)}}">Restrictions</a></li>
								<li><a href="#">Rent</a></li>
								<li><a href="#">Availability</a></li>
								<li><a href="#">Title</a></li>
								<li><a href="#">Photos</a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-6">
						<div class="lur_right">
							<div class="restrictions">

								<div class="list_ur_room_two_right text-left ">
									<p>What is the maximum number of tenants you will accept ? </p>
									<form method="post" action="{{url('/restrictions/update')}}">
										@csrf

								 	<ul>
										<input type="hidden" name="id" value="{{$roomid->id}}">
								 		<li>
								 			<div id="input_div">
								 				<label>tenant</label>
								 				<input type="button" value="-" id="moins">
										        <input type="text" name="tenant" value="1" id="count">
										        <input type="button" value="+" id="plus">
										    </div>
										</li>

								 	</ul>
									<a href="{{url('/house_rules/'.$roomid->id)}}" class="login" style="position: absolute !important;bottom: 0 !important;
						left: 109px !important;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>


									<button class="login" type="submit"  style="position: absolute !important;
						bottom: 0 !important;
						right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>

								</form>
								</div>
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
@endsection
