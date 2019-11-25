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
								<li><a href="{{url('rent/'.$roomid->id)}}">Rent</a></li>
								<li><a href="#">Availability</a></li>
								<li><a href="#">Title</a></li>
								<li><a href="#">Photos</a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-6">
						<div class="lur_right">
							<form method="post" action="{{url('/rent/update')}}">
								@csrf
								<h3>Select Option for rental price</h3>
								<select id="select_option">
									<option value="0">Select the rent type</option>
									<option value="rent">Entire house</option>
									<option value="rent">Private bedroom</option>
									<option value="rent">Shared bedroom</option>
									<option value="rent">Hotel rooms</option>
									<option value="rent">Entire apartments</option>
									<option value="rent">Male student residences</option>
									<option value="rent">Female student residences</option>
								</select>


							<div class="price_content aprtment" style="margin-top: 30px" id="rent">
							<div class="form">
								<div class="form_content" style="width: 60%">
									<label style=" font-size: 21px;color: #000;font-weight: 600">What is the monthly rent price?</label>
									<input name="price" type="text" name="" class="form-control" placeholder="0">
								</div>
							</div>

							<div class="price_tex">
								<p>Which bills are included in the rent?</p>
								<span>Most of our tenants specifically search for listings with bills included, so they tend to appear more frequently on our search results</span>
							</div>
						<div class="amenities" style="margin-top: 30px">

							<input type="hidden" name="id" value="{{$roomid->id}}">

							<ul>
								<li>
									<label class="chck">
									  <input type="checkbox" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-tint"></i>
									<label class="ex_label">Water</label>
								</li>

								<li>
									<label class="chck">
									  <input type="checkbox" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-bolt"></i>
									<label class="ex_label">Electricity</label>
								</li>

								<li>
									<label class="chck">
									  <input type="checkbox" checked="checked">
									  <span class="checkmark"></span></label>

									<i class="fas fa-wifi" ></i>
									<label class="ex_label">Internet</label>
								</li>

								<li>
									<label class="chck">
									  <input type="checkbox" checked="checked">
									  <span class="checkmark"></span></label>
									<i class="fas fa-quidditch"></i>
									<label class="ex_label">Cleaning Service</label>
								</li>
							</ul>
						</div>
					</div>
							<br><br>

							<div class="hotel_room aprtment" id="hotel_rooms">
							<div class="form">
								<div class="form_content" style="width: 60%">
									<label style=" font-size: 21px;color: #000;font-weight: 600">What is the daily rent price?</label>
									<input type="text" name="" class="form-control" placeholder="0">
								</div>
							</div>
							</div>
							<a href="{{url('/restrictions/'.$roomid->id)}}" class="login" style="position: absolute !important;bottom: 0 !important;
				left: 109px !important;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>


							<button class="login" type="submit"  style="position: absolute !important;
				bottom: 0 !important;
				right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>

							</form>
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
