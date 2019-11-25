@extends('layouts.website')
@section('content')



		<section id="lur-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
					  <div class="lur_left">
					    <ul class="nav-tabs">
					        <li class="active"><a href="{{url('room/'.$roomid->id)}}">Rooms</a></li>
					        <li><a href="">Bed</a></li>
					        <li><a href="">Amenities</a></li>
					        <li><a href="">Address</a></li>
					        <li><a href="">House rules</a></li>
					        <li><a href="">Restrictions</a></li>
					        <li><a href="">Rent</a></li>
					        <li><a href="">Availability</a></li>
					        <li><a href="">Title</a></li>
									<li><a href="#">Photos</a></li>
					    </ul>
					  </div>
					</div>

					<div class="col-md-9">
						<div class="lur_right text-center">

								<h3>Select Option</h3>
								<select id="select_option">
									<option>Select the rent type</option>
									<option value="entire_house">Entire house</option>
									<option value="private_bedroom">Private bedroom</option>
									<option value="share_bedroom">Shared bedroom</option>
									<option value="hote_room">Hotel rooms</option>
									<option value="entire_appartment">Entire apartments</option>
									<option value="msr">Male student residences</option>
									<option value="fsr">Female student residences</option>
								</select>

								<form method="post" action="{{url('/room/update')}}">
									@csrf
								<input type="hidden" name="id" value="{{$roomid->id}}">
								<div class="list_ur_room_two_right text-left aprtment" id="entire_house">
									<p>Select from below ? </p>
								 	<ul>
								 		<li>
								 			<div id="input_div">
								 				<label>Bedroom</label>
								 						<input type="button" value="-" id="moins">
										        <input type="text" name="bedroom" value="1" id="count">
										        <input type="button" value="+" id="plus">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Bathroom</label>
								 				<input type="button" value="-" id="moins_two">
										        <input type="text" name="bathroom" value="1" id="count_two">
										        <input type="button" value="+" id="plus_two">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Kitchen</label>
								 				<input type="button" value="-" id="moins_three">
										        <input type="text" name="kitchen" name="1" id="count_three">
										        <input type="button" value="+" id="plus_three">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Living Room</label>
								 				<input type="button" value="-" id="moins_four">
										        <input type="text" name="living_room" name="1" id="count_four">
										        <input type="button" value="+" id="plus_four">
										    </div>
										</li>

								 	</ul>
								</div>
								<button class="login" type="submit"  style="position: absolute !important;  bottom: 0 !important;right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
							</form>

								<form method="post" action="{{url('/room/update')}}">
									@csrf
								<input type="hidden" name="id" value="{{$roomid->id}}">
								<div class="list_ur_room_two_right text-left aprtment" id="private_bedroom">
									<p>Select from below</p>
								 	<ul>
								 		<li>
								 			<div id="input_div">
								 				<label>Bedroom</label>
												<input type="button" value="-" id="moins">
												<input type="text" name="bedroom" value="1" id="count">
												<input type="button" value="+" id="plus">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Bathroom</label>
								 				<input type="button" value="-" id="moins_two">
										        <input type="text" name="bathroom" value="1" id="count_two">
										        <input type="button" value="+" id="plus_two">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Kitchen</label>
								 				<input type="button" value="-" id="moins_three">
										        <input type="text" name="kitchen" value="1" id="count_three">
										        <input type="button" value="+" id="plus_three">
										    </div>
										</li>

								 	</ul>
								</div>
								<button class="login" type="submit"  style="position: absolute !important;  bottom: 0 !important;right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
							</form>

								<form method="post" action="{{url('/room/update')}}">
									@csrf
								<input type="hidden" name="id" value="{{$roomid->id}}">
								<div class="list_ur_room_two_right text-left aprtment" id="share_bedroom">
									<p>Select from below</p>
								 	<ul>
								 		<li>
								 			<div id="input_div">
								 				<label>Bedroom</label>
												<input type="button" value="-" id="moins">
												<input type="text" name="bedroom" value="1" id="count">
												<input type="button" value="+" id="plus">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Persons</label>
								 				<input type="button" value="-" id="moins">
										        <input type="text" name="persons" value="1" id="count">
										        <input type="button" value="+" id="plus">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Bathroom</label>
								 				<input type="button" value="-" id="moins_two">
										        <input type="text" name="bathroom" value="1" id="count_two">
										        <input type="button" value="+" id="plus_two">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Kitchen</label>
								 				<input type="button" value="-" id="moins_three">
										        <input type="text" name="kitchen" value="1" id="count_three">
										        <input type="button" value="+" id="plus_three">
										    </div>
										</li>

								 	</ul>
								</div>
								<button class="login" type="submit"  style="position: absolute !important;  bottom: 0 !important;right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
							</form>

								<form method="post" action="{{url('/room/update')}}">
									@csrf
								<input type="hidden" name="id" value="{{$roomid->id}}">
								<div class="list_ur_room_two_right text-left aprtment" id="hote_room">
									<p>Select from below</p>
								 	<ul>
								 		<li>
								 			<div id="input_div">
								 				<label>Bedroom</label>
												<input type="button" value="-" id="moins">
												<input type="text" name="bedroom" value="1" id="count">
												<input type="button" value="+" id="plus">
										    </div>
										</li>

								 	</ul>
								</div>
								<button class="login" type="submit"  style="position: absolute !important;  bottom: 0 !important;right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
							</form>

								<form method="post" action="{{url('/room/update')}}">
									@csrf
								<input type="hidden" name="id" value="{{$roomid->id}}">
								<div class="list_ur_room_two_right text-left aprtment" id="entire_appartment">
									<p>Select from below ? </p>
								 	<ul>
								 		<li>
								 			<div id="input_div">
								 				<label>Bedroom</label>
												<input type="button" value="-" id="moins">
												<input type="text" name="bedroom" value="1" id="count">
												<input type="button" value="+" id="plus">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Bathroom</label>
								 				<input type="button" value="-" id="moins_two">
										        <input type="text" name="bathroom" value="1" id="count_two">
										        <input type="button" value="+" id="plus_two">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Kitchen</label>
								 				<input type="button" value="-" id="moins_three">
										        <input type="text" name="kitchen" value="1" id="count_three">
										        <input type="button" value="+" id="plus_three">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Living Room</label>
								 				<input type="button" value="-" id="moins_four">
										        <input type="text" name="living_room" value="1" id="count_four">
										        <input type="button" value="+" id="plus_four">
										    </div>
										</li>


										<li>
								 			<div id="input_div">
								 				<label>Dining Room</label>
								 				<input type="button" value="-" id="moins_four">
										        <input type="text" name="dining_room" value="1" id="count_four">
										        <input type="button" value="+" id="plus_four">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Study Room</label>
								 				<input type="button" value="-" id="moins_four">
										        <input type="text" name="study_room" value="1" id="count_four">
										        <input type="button" value="+" id="plus_four">
										    </div>
										</li>

								 	</ul>
								</div>
								<button class="login" type="submit"  style="position: absolute !important;  bottom: 0 !important;right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
							</form>

								<form method="post" action="{{url('/room/update')}}">
									@csrf
								<input type="hidden" name="id" value="{{$roomid->id}}">
								<div class="list_ur_room_two_right text-left aprtment" id="msr">
									<p>Select from below ? </p>
								 	<ul>
								 		<li>
								 			<div id="input_div">
								 				<label>Bedroom</label>
												<input type="button" value="-" id="moins">
												<input type="text" name="bedroom" value="1" id="count">
												<input type="button" value="+" id="plus">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Bathroom</label>
								 				<input type="button" value="-" id="moins_two">
										        <input type="text" name="bathroom" value="1" id="count_two">
										        <input type="button" value="+" id="plus_two">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Kitchen</label>
								 				<input type="button" value="-" id="moins_three">
										        <input type="text" name="kitchen" value="1" id="count_three">
										        <input type="button" value="+" id="plus_three">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Study Room</label>
								 				<input type="button" value="-" id="moins_four">
										        <input type="text" name="study_room" value="1" id="count_four">
										        <input type="button" value="+" id="plus_four">
										    </div>
										</li>

								 	</ul>
								</div>
								<button class="login" type="submit"  style="position: absolute !important;  bottom: 0 !important;right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
							</form>

								<form method="post" action="{{url('/room/update')}}">
									@csrf
								<input type="hidden" name="id" value="{{$roomid->id}}">
								<div class="list_ur_room_two_right text-left aprtment" id="fsr">
									<p>Select from below ? </p>
								 	<ul>
								 		<li>
								 			<div id="input_div">
								 				<label>Bedroom</label>
												<input type="button" value="-" id="moins">
												<input type="text" name="bedroom" value="1" id="count">
												<input type="button" value="+" id="plus">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Bathroom</label>
								 				<input type="button" value="-" id="moins_two">
										        <input type="text" name="bathroom" value="1" id="count_two">
										        <input type="button" value="+" id="plus_two">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Kitchen</label>
								 				<input type="button" value="-" id="moins_three">
										        <input type="text" name="kitchen" value="1" id="count_three">
										        <input type="button" value="+" id="plus_three">
										    </div>
										</li>

										<li>
								 			<div id="input_div">
								 				<label>Study Room</label>
								 				<input type="button" value="-" id="moins_four">
										        <input type="text" name="study_room" value="1" id="count_four">
										        <input type="button" value="+" id="plus_four">
										    </div>
										</li>

								 	</ul>
								</div>
							</div>
							<button class="login" type="submit"  style="position: absolute !important;  bottom: 0 !important;right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</form>




							</div>
						</div>

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
	<script>
	$(function(){
		$('#entire_house').hide();
		$('#private_bedroom').hide();
		$('#share_bedroom').hide();
		$('#hote_room').hide();
		$('#entire_appartment').hide();
		$('#msr').hide();
		$('#fsr').hide();

		$('#select_option').on('change',function(){
			var select=$('#select_option').val();

			if(select=='entire_house'){
				$('#entire_house').show();
				$('#private_bedroom').hide();
				$('#share_bedroom').hide();
				$('#hote_room').hide();
				$('#entire_appartment').hide();
				$('#msr').hide();
				$('#fsr').hide();
			}else if (select=='private_bedroom') {
				$('#entire_house').hide();
				$('#private_bedroom').show();
				$('#share_bedroom').hide();
				$('#hote_room').hide();
				$('#entire_appartment').hide();
				$('#msr').hide();
				$('#fsr').hide();
			}else if (select=='share_bedroom') {
				$('#entire_house').hide();
				$('#private_bedroom').hide();
				$('#share_bedroom').show();
				$('#hote_room').hide();
				$('#entire_appartment').hide();
				$('#msr').hide();
				$('#fsr').hide();
			}else if (select=='hote_room') {
				$('#entire_house').hide();
				$('#private_bedroom').hide();
				$('#share_bedroom').hide();
				$('#hote_room').show();
				$('#entire_appartment').hide();
				$('#msr').hide();
				$('#fsr').hide();
			}else if (select=='entire_appartment') {
				$('#entire_house').hide();
				$('#private_bedroom').hide();
				$('#share_bedroom').hide();
				$('#hote_room').hide();
				$('#entire_appartment').show();
				$('#msr').hide();
				$('#fsr').hide();
			}else if (select=='msr') {
				$('#entire_house').hide();
				$('#private_bedroom').hide();
				$('#share_bedroom').hide();
				$('#hote_room').hide();
				$('#entire_appartment').hide();
				$('#msr').show();
				$('#fsr').hide();
			}else if (select=='fsr') {
				$('#entire_house').hide();
				$('#private_bedroom').hide();
				$('#share_bedroom').hide();
				$('#hote_room').hide();
				$('#entire_appartment').hide();
				$('#msr').hide();
				$('#fsr').show();
			}else{
				$('#entire_house').hide();
				$('#private_bedroom').hide();
				$('#share_bedroom').hide();
				$('#hote_room').hide();
				$('#entire_appartment').hide();
				$('#msr').hide();
				$('#fsr').hide();
			}

		});
	});
	</script>


@endsection
