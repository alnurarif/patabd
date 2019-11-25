@extends('layouts.website')
@section('content')
<section id="login_section" >
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
        <div class="login_right">
          <h3>Please SignUp Here</h3>
          <form method="post" action="{{url('/landloard/create')}}">
            @csrf

             <div class="form-group{{ $errors->has('f_name') ? ' is-invalid' : '' }}" style="width: 48%;float: left;    margin-right: 14px;">
               <label for="exampleInputEmail1">First Name</label>
               <input type="text" name="f_name" class="form-control" value="{{old('f_name')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
               @if ($errors->has('f_name'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('f_name') }}</strong>
                   </span>
               @endif
             </div>

             <div class="form-group{{ $errors->has('l_name') ? ' is-invalid' : '' }}" style="width: 48%;float: left;">
               <label for="exampleInputEmail1">Last Name</label>
               <input type="text"  name="l_name" class="form-control" value="{{old('l_name')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
               @if ($errors->has('l_name'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('l_name') }}</strong>
                   </span>
               @endif
             </div>

             <div class="form-group{{ $errors->has('email') ? ' is-invalid' : '' }}">
               <label for="exampleInputEmail1">Email address</label>
               <input type="email" name="email" class="form-control" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               @if ($errors->has('email'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('email') }}</strong>
                   </span>
               @endif
             </div>


             <div class="form-group{{ $errors->has('password') ? ' is-invalid' : '' }}">
               <label for="exampleInputPassword1">Password</label>
               <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
               @if ($errors->has('password'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('password') }}</strong>
                   </span>
               @endif
             </div>

             <div class="form-group">
               <label for="exampleInputPassword1">Confirm Password</label>
               <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
             </div>


             <div class="form-group form-check">
               <input type="checkbox" class="form-check-input" id="exampleCheck1">
               <label class="form-check-label" for="exampleCheck1">I agree to patabd.com's Terms and Conditions</label>
             </div>

            <button class="login" style="color: #fff !important;">SignUp</button>
            <button class="sign_up">Login</button>


            <button class="facebook"><i class="fab fa-facebook-square"></i>Continue With Facebook
</button>


         </form>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection
