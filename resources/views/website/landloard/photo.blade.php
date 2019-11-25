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
							 <li class="active"><i class="fas fa-check"></i><a href="{{url('availability/'.$roomid->id)}}">Availability</a></li>
							<li class="active"><i class="fas fa-check"></i><a href="{{url('title/'.$roomid->id)}}">Title</a></li>
							 <li><a href="{{url('photos/'.$roomid->id)}}">Photos</a></li>

							</ul>
						</div>
					</div>


					<div class="col-md-6">
						<div class="lur_right">


							<br><br>


							<div class="title_input">
								<p>Show your place</p>
								<label>Upload photos of your entire place. Make sure you include at least one photo of the kitchen and bathroom</label>


								<div>
									<label><strong>Add photos of your entire place.Include at least:</strong></label>

								</div>

								<ul>
									<li> -  One photo of each bedroom</li>
									<li> - One photo of a bathroom</li>
									<li> - One photo of the kitchen</li>

								</ul>

							<form method="post" action="{{url('photos/insert')}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group" style="margin-top: 79px;">
										<input type="hidden" name="id" value="{{$roomid->id}}">
								    <label for="exampleInputPassword1">Upload Photo</label>
								    <input type="file" name="photo[]" class="form-control"  multiple>
								  </div>


									<a href="{{url('/title/'.$roomid->id)}}" class="login" style="position: absolute !important;bottom: -50px !important;
						left: 109px !important;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>






									<button class="login" type="submit"  style="position: absolute !important;
						bottom: -50px !important;
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

@endsection
