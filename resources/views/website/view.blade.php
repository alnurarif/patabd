@extends('layouts.website')
@section('content')

		<!-- details slide start -->
		<section id="details_slide">
			<div class="container">
				<div class="row" >
					<div class="col-md-12">
					  <div class="search_content text-center pt-50 pb-50">
                               <form>
                                   <input type="text" name="" placeholder="Place" style="padding: 8px 84px;
">
                                   <input type="date" name="" style="padding: 7px 30px;">
                                   <a href="#" style="background: #c00;
    color: #fff;
    padding: 14px 76px 11px 91px;
    border: 1px solid #fff;" onclick="myFunction()">1 Room . 1 Guest</a>
                                   <button type="submit" style="    margin-left: -5px;">Search</button>
                               </form>
                               <div class="search_btn">
                                   <span>Continue your search</span>
                                   <a href="#">Kolkata·10 Oct - 11 Oct | 1 Guest</a>
                                   <a href="#">Kolkata·10 Oct - 11 Oct | 1 Guest</a>

                               </div>
                           </div>
                       </div>
				</div>
				<div class="row" style="    margin-top: -66px;">
					<div class="col-md-8">
						<div class="details_slide_left">
							<section class="list_details">
								@php
									$images = explode('|',$view->photos);
								@endphp
								@foreach($images as $image)
											<div>
					              <div class="regular_img">
					                <img src="{{asset('uploads/rooms/'.$image)}}">
					              </div>
					            </div>
												@endforeach




							</section>
						</div>
					</div>
					<div class="col-md-4">
						<div class="details_slide_right">
							<div class="item_content_right" style="width: 100%;">
		                        <div class="item_content_text">
		                           <h3>{{$view->title}}</h3>
		                        <p>{{$view->address}} , {{$view->house_number}} , {{$view->extra_info}}, {{$view->posta_code}}</p>
		                        <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>80(Ratting)Excellent</span></p>
		                        <div class="item_facility">
		                          <span>Parking Facility</span>
		                          <span>First Aid</span>
		                          <span>Attached Bathroom</span>
		                          <span>+9 More</span>
		                        </div>
		                        <p class="price price_extra">{{$view->price}} <del>0</del> <span>56% Off</span></p>

		                        <div class="item_content_button">
		                          <a href="{{url('/result/view/'.$view->id)}}" class="view">View Details</a>
		                          <a href="{{url('/hotel/booking/'.$view->id)}}" class="book_now">Book Now</a>
		                        </div>

		                        </div>
                   		  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- details slide end -->


		<!-- room details inline start -->
		<section id="room_details_inline">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="room_details_inline_content">
							<ul>
								<li><i class="fa fa-bed" aria-hidden="true"></i>Single bedroom</li>
								<li><i class="fa fa-user" aria-hidden="true"></i>1 person</li>
								<li><i class="fa fa-home" aria-hidden="true"></i>7-bedroom house</li>
								<li><i class="fa fa-bath" aria-hidden="true"></i>2 bathrooms</li>
								<li style="color: green"><i class="fa fa-map" aria-hidden="true"></i>View on map</li>
								<li style="color: green"><i class="fa fa-flag" aria-hidden="true"></i>Report listing</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- room details inline end -->


		<!-- house Rules Start  -->
		<section id="house_rules">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="room_details_inline_content house_rules_content">
							<h3>House rules</h3>
							<ul>
								<li><i class="fa fa-paw" aria-hidden="true"></i>Pets : {{$view->smoking_allowed}}</li>
								<li><i class="fa fa-times" aria-hidden="true"></i>Smoking  : {{$view->pets_allowed}}</li>
								<li><i class="fa fa-times" aria-hidden="true"></i>Overnight guests  : {{$view->guests}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- house rule end -->


		<!-- Bed room Details Section Start From Here -->
		<section id="house_rules" class="mt-50">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="room_details_inline_content house_rules_content">
							<h3>Bedroom details</h3>
							<ul>
								<li><i class="fa fa-bed" aria-hidden="true"></i>1 Single Bed : {{$view->aaa}}</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Sofa : {{$view->aaa}}</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Sofa bed : {{$view->aaa}}</li>

								<li><i class="fa fa-check" aria-hidden="true"></i>Window : {{$view->aaa}}</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Lock : {{$view->aaa}}</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Tv : {{$view->aaa}}</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Tv : {{$view->aaa}}</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Tv : {{$view->aaa}}</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Tv : {{$view->aaa}}</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Tv : {{$view->aaa}}</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Bed Room Section end here -->


		<!-- Rental conditions Start From Here -->
			<!-- Rental conditions Start From Here -->
		 <section id="house_rules" class="mt-50">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="room_details_inline_content house_rules_content">
							<h3>Rental Condition</h3>
							<ul>
								<li><a data-toggle="collapse" href="#contract"><i class="fa fa-bed" aria-hidden="true"></i>Contract - <span class="rr">Daily</span></a></li>


								<li><a data-toggle="collapse" href="#bills"><i class="fa fa-bed" aria-hidden="true"></i>Biils - <span class="rr">Some Included</span></a></li>

								<li><a data-toggle="collapse" href="#cancellation"><i class="fa fa-bed" aria-hidden="true"></i>Cancellation Policy - <span class="rr">Moderate</span></a></li>




								<li><a data-toggle="collapse" href="#diposit"><i class="fa fa-bed" aria-hidden="true"></i>Security deposit - <span class="rr">€2380</span></a></li>


								<br>
								<div class="collapse" id="contract">
									  <div class="card card-body">
									   <h3>Daily</h3>
									   <p>The type of contract applicable to each listing is selected by the landlord.
										A daily contract refers to a type of contract where your rent is calculated according to the days of your stay. What this means is, you pay the monthly rent for every full month that you stay, and on your first and last months you only pay for the days you’re staying at your place. Regardless of the contract type, the prices displayed while you’re completing your booking refer to the 1st rent’s payment, which corresponds to the first 30 days of the contract.
										</p>
									  </div>
								</div>

								<div class="collapse" id="bills">
									  <div class="card card-body">
									   <h3>Bills</h3>
									  	<ul>
									  		<li><i class="fa fa-times" aria-hidden="true"></i>Electricity Not included</li>

									  		<li><i class="fa fa-wifi" aria-hidden="true"></i>Internet</li>

									  		<li><i class="fa fa-times" aria-hidden="true"></i>Water Not included</li>

									  		<li><i class="fa fa-times" aria-hidden="true"></i>Gas Not included
										</li>
									  	</ul>
									  </div>
								</div>


								<div class="collapse" id="cancellation">
									  <div class="card card-body">
									   <h3>Cancellation policy</h3>
									   <ul>
									   		<li>1 . The cancellation policy applicable to each listing is selected by the landlord.</li>

									   		<li>2 . The Uniplaces One-time Service Fee is non-refundable. The cancellation policy is only applied to the 1st rental payment.</li>

									   		<li>3 . Uniplaces is not liable for any refund of the holding deposit. In the case of a cancellation, the landlord has the final decision regarding the refund of the holding deposit.</li>

									   		<li>4 . To cancel your booking, please contact us.</li>
									   </ul>
									  </div>
								</div>

								<div class="collapse" id="diposit">
									  <div class="card card-body">
									   <h3>Security Deposit</h3>

									   <p>The type of deposit applicable is selected by the landlord.
											A Security Deposit refers to the amount you have to pay directly to your landlord on the day of your move-in to cover for any potential damages that may occur during your stay. The landlord may also keep the Security Deposit if you leave earlier than agreed. If no damages occur and you leave on the agreed move-out date, your deposit will be refunded.

										</p>
									  </div>
								</div>



								<li><a data-toggle="collapse" href="#admin_fee"><i class="fa fa-bed" aria-hidden="true"></i>Admin Fee - <span class="rr">BDT 1190/one-time fee</span></a></li>


								<li><a data-toggle="collapse" href="#cleaning"><i class="fa fa-bed" aria-hidden="true"></i>Cleaning Frequency - <span class="rr">Not specified</span></a></li>


								<li><a data-toggle="collapse" href="#minimum_stay"><i class="fa fa-bed" aria-hidden="true"></i>Minimum Stay - <span class="rr">32 Nights</span></a></li>

								<br>


								<div class="collapse" id="admin_fee">
									  <div class="card card-body">
									   <h3>Daily</h3>
									   <p>The type of contract applicable to each listing is selected by the landlord.
										A daily contract refers to a type of contract where your rent is calculated according to the days of your stay. What this means is, you pay the monthly rent for every full month that you stay, and on your first and last months you only pay for the days you’re staying at your place. Regardless of the contract type, the prices displayed while you’re completing your booking refer to the 1st rent’s payment, which corresponds to the first 30 days of the contract.
										</p>
									  </div>
								</div>

								<div class="collapse" id="cleaning">
									  <div class="card card-body">
									   <h3>Cleaning</h3>
									   <p>This listing has cleaning included.
										</p>
									  </div>
								</div>


								<div class="collapse" id="minimum_stay">
									  <div class="card card-body">
									   <h3>Minimum stay</h3>
									   <p>This landlord requires all tenants to stay a minimum of 32 nights. This means that, depending on your move-in date, you should book your move-out at least 32 nights later to get accepted.</p>
									  </div>
								</div>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Rental Condition end -->
		<!-- Rental Condition end -->



		<!-- place details section start  -->
		<section id="house_rules" class="mt-50">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="room_details_inline_content house_rules_content">
							<h3>Place details</h3>
							<ul>
								<p>Note that the bills for these offers require a mandatory payment of a monthly fee directly to the landlord. If your move-in is from the 16th onwards you will need to pay the conditions mentioned in our website, plus the rent of the second month and the
bills. We would also like to mention that the landlord will charge upon your a</p>
								<div class="room_select">
									<select id="place_details">
										  <option value="aprtment">Aprtment</option>
										  <option value="living_room">Living Room</option>
										  <option value="opel">Kitchen</option>
										  <option value="audi">Bathroom</option>
									</select>
								</div>

								<div class="aprtment" id="aprtment">
									<li><i class="fa fa-bed" aria-hidden="true"></i>1 Single Bed</li>
									<li><i class="fa fa-check" aria-hidden="true"></i>Sofa</li>
									<li><i class="fa fa-check" aria-hidden="true"></i>Sofa bed</li>

									<li><i class="fa fa-check" aria-hidden="true"></i>Window</li>
									<li><i class="fa fa-check" aria-hidden="true"></i>Lock</li>
									<li><i class="fa fa-check" aria-hidden="true"></i>Tv</li>
									<li><i class="fa fa-check" aria-hidden="true"></i>Tv</li>
									<li><i class="fa fa-check" aria-hidden="true"></i>Tv</li>
									<li><i class="fa fa-check" aria-hidden="true"></i>Tv</li>
									<li><i class="fa fa-check" aria-hidden="true"></i>Tv</li>
								</div>


								<div class="aprtment" id="living_room">
									<li><i class="fa fa-bed" aria-hidden="true"></i>1 Single Bed</li>
									<li><i class="fa fa-check" aria-hidden="true"></i>Sofa</li>
									<li><i class="fa fa-check" aria-hidden="true"></i>Sofa bed</li>
								</div>





							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- place details section end here -->


		<!--  Start  -->
		<section id="house_rules">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="room_details_inline_content house_rules_content">
							<h3>Review</h3>
							<ul>
								<li> <p>The Place</p>
									  <form>
									    <!-- Change starability-basic to different class to see animations. -->
									    <fieldset class="starability-basic">

									      <input type="radio" id="no-rate" class="input-no-rate" name="rating" value="0" checked aria-label="No rating." />

									      <input type="radio" id="rate1" name="rating" value="1" />
									      <label for="rate1">1 star.</label>

									      <input type="radio" id="rate2" name="rating" value="2" />
									      <label for="rate2">2 stars.</label>

									      <input type="radio" id="rate3" name="rating" value="3" />
									      <label for="rate3">3 stars.</label>

									      <input type="radio" id="rate4" name="rating" value="4" />
									      <label for="rate4">4 stars.</label>

									      <input type="radio" id="rate5" name="rating" value="5" />
									      <label for="rate5">5 stars.</label>

									      <span class="starability-focus-ring"></span>
									    </fieldset>
									  </form>
								</li>
								<li>

								</li>
								<li>
									<p>Rooms</p>
									  <form>
									    <!-- Change starability-basic to different class to see animations. -->
									    <fieldset class="starability-basic">

									      <input type="radio" id="no-rate" class="input-no-rate" name="rating" value="0" checked aria-label="No rating." />

									      <input type="radio" id="rate6" name="rating" value="1" />
									      <label for="rate6">1 star.</label>

									      <input type="radio" id="rate7" name="rating" value="2" />
									      <label for="rate7">2 stars.</label>

									      <input type="radio" id="rate8" name="rating" value="3" />
									      <label for="rate8">3 stars.</label>

									      <input type="radio" id="rate9" name="rating" value="4" />
									      <label for="rate9">4 stars.</label>

									      <input type="radio" id="rate10" name="rating" value="5" />
									      <label for="rate10">5 stars.</label>

									      <span class="starability-focus-ring"></span>
									    </fieldset>
									  </form>
								</li>

								<li>
									<p>Landlord</p>
									  <form>
									    <!-- Change starability-basic to different class to see animations. -->
									    <fieldset class="starability-basic">

									      <input type="radio" id="no-rate" class="input-no-rate" name="rating" value="0" checked aria-label="No rating." />

									      <input type="radio" id="rate11" name="rating" value="1" />
									      <label for="rate11">1 star.</label>

									      <input type="radio" id="rate12" name="rating" value="2" />
									      <label for="rate12">2 stars.</label>

									      <input type="radio" id="rate13" name="rating" value="3" />
									      <label for="rate13">3 stars.</label>

									      <input type="radio" id="rate14" name="rating" value="4" />
									      <label for="rate14">4 stars.</label>

									      <input type="radio" id="rate15" name="rating" value="5" />
									      <label for="rate15">5 stars.</label>

									      <span class="starability-focus-ring"></span>
									    </fieldset>
									  </form>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- house rule end -->

@endsection
