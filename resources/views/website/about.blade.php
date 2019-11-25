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
            <div class="col-md-12">
              <div class="about_top">
                <h2>About us</h2>
								@foreach($allabout as $data)
                <p>{{$data->aboutus}}</p>
								@endforeach
						  </div>
            </div>
          </div>
			 </div>
		 </section>


     <section id="about_page">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="about_contents">
								
                </div>
              </div>
            </div>
          </div>
     </section>
@endsection
