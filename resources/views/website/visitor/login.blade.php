@extends('layouts.website')
@section('content')
<section id="login_section">
					 <div class="container">
					 	<div class="row">
					 		<div class="col-md-12">
					 			<div class="top_logo">
					 				<a href="index.html"><img src="{{asset('contents/website')}}/img/logo.png"><span>We are here to make your life more comfortable
</span></a>

					 			</div>
					 		</div>
					 	</div>
						 <div class="row">
							 <div class="col-md-6">
								 <div class="login_left">
									 <h2>The smartest way to find your life more easier with PataBD</h2>

									 <p>Sign up with your Email ID and get exclusive access to discounts and savings on PataBD stays and with our many travel partners.</p>
								 </div>
							 </div>
							 <div class="col-md-6">
								 <div class="tt">
									 <ul  class="nav nav-pills">
										 <li class="active">
											 <a  href="#visit" data-toggle="tab">Visitor</a>
										 </li>
										 <li><a href="#land" data-toggle="tab">Landlord</a>
										 </li>

									 </ul>
								 </div>

<div class="login_right">
	<div class="tab-content clearfix">

									<div class="tab-pane active" id="visit">
										<h3>Please sign in</h3>
		<form method="get" action="{{url('/visitor/login')}}">
			@csrf
			 <div class="form-group">
				 <label for="exampleInputEmail1">Email address</label>
				 <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			 </div>
			 <div class="form-group">
				 <label for="exampleInputPassword1">Password</label>
				 <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			 </div>
			 <div class="form-group form-check">
				 <input type="checkbox" class="form-check-input" id="exampleCheck1">
				 <label class="form-check-label" for="exampleCheck1">Remember Me</label>
				 <label style="float: right;"><a href="#" style="color: green">Forgot password?</a></label>
			 </div>

			<button class="login" type="submit">Login</button>
			<button class="sign_up"><a href="register.html" style="    color: green;">SignUp</a></button>


			<button class="facebook"><i class="fab fa-facebook-square"></i>Continue With Facebook</button>


	 </form>
								 </div>
								 <div class="tab-pane" id="land">
 									<h3>Please sign in for landlord</h3>
 	<form method="get" action="{{url('/landloard/login')}}">
 		@csrf
 		 <div class="form-group">
 			 <label for="exampleInputEmail1">Email address</label>
 			 <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
 		 </div>
 		 <div class="form-group">
 			 <label for="exampleInputPassword1">Password</label>
 			 <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
 		 </div>
 		 <div class="form-group form-check">
 			 <input type="checkbox" class="form-check-input" id="exampleCheck1">
 			 <label class="form-check-label" for="exampleCheck1">Remember Me</label>
 			 <label style="float: right;"><a href="#" style="color: green">Forgot password?</a></label>
 		 </div>

 		<button class="login" type="submit">Login</button>
 		<button class="sign_up"><a href="register.html" style="    color: green;">SignUp</a></button>


 		<button class="facebook"><i class="fab fa-facebook-square"></i>Continue With Facebook</button>


  </form>
 							 </div>

								 </div>



							 </div>
						 </div>
					 </div>
				 </section>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
