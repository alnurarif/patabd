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
								<li class="active"><i class="fas fa-check"></i><a href="{{url('restrictions/'.$roomid->id)}}">Restrictions</a></li>
							 <li class="active"><i class="fas fa-check"></i><a href="{{url('rent/'.$roomid->id)}}">Rent</a></li>
							 <li><a href="{{url('availability/'.$roomid->id)}}">Availability</a></li>
							 <li><a href="#">Title</a></li>
							 <li><a href="#">Photos</a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-6">
						<div class="lur_right">


							<br><br>

							<div class="hotel_room" id="hotel_rooms">
								<form method="post" action="{{url('/availability/update')}}">
									@csrf
								<div class="form">
								<div class="form_content" style="width: 60%">
									<label style=" font-size: 21px;  color: #000;font-weight: 600">When is it available?</label>
    							<p>Set the day when your listing is available to be booked</p>
									<input type="hidden" name="id" value="{{$roomid->id}}">
									<input type="date" name="available" class="form-control" placeholder="0">
									<div class="alert alert-success mt-20" role="alert" style="    font-size: 13px;font-weight: bold;">
									  <i class="far fa-check-circle"></i> Your listing will be ready to book from Oct 26, 2019!
									</div>
								</div>
							</div>

							<a href="{{url('/rent/'.$roomid->id)}}" class="login" style="position: absolute !important;bottom: 0 !important;
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
