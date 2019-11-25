@extends('layouts.website')
@section('content')

		<!-- list ur place setion -->
		<section id="list_place">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="list_place_left">
							<img src="{{asset('contents/website')}}/img/List1.png" alt="list place left image" class="img-responsive">
						</div>
					</div>
					@php
						$id = Session:: get('id');
						$landloard= App\Landloard:: where('id',$id)->first();
					@endphp
					<div class="col-md-6">
											<div class="list_place_title">
							<h2><span class="rr">Hello</span>, {{$landloard->f_name}} {{$landloard->l_name}} !</h2>
							<p>Before publishing your listing, we're going to ask you a few questions about your renting place. Let's get started!.</p>
								<div class="login_right list_form">
									 <form method="post" action="{{url('/listUrRoom/insert')}}">
										 @csrf
											<div class="form-group">
												<label for="exampleInputEmail1">First, what type of place are you renting ?</label>
												<select name="type">
													<option value="0">Select the rent type</option>
													<option value="1">Entire house</option>
													<option value="2">Private bedroom</option>
													<option value="3">Shared bedroom</option>
													<option value="4">Hotel rooms</option>
													<option value="5">Entire apartments</option>
													<option value="6">Male student residences</option>
													<option value="7">Female student residences</option>
												</select>
											</div>
											<div class="form-group">
												<label>And in which city ?</label>
												<input type="text" name="city" class="form-control" id="exampleInputPassword1" placeholder="eg . Dhaka">
											</div>

											<button class="login" type="submit"  style="position: absolute !important;
								bottom: 0 !important;
								left: 109px !important;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button>






											<button class="login" type="submit"  style="position: absolute !important;
								bottom: 0 !important;
								right: 109px !important;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>



									</form>

								 </div>
					</div>
				</div>
				</div>
			</div>
		</section>


@endsection
