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
                <h2>Terms & Conditions</h2>
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



     <section id="contract_content">
     	<div class="container">
     		<div class="row">
     			<div class="col-md-12">
	     				<div class="contract-type">
	     					  <ul class="nav nav-tabs">
					 		    <li class="active"><a data-toggle="tab" href="#fortnighty">Terms of Service</a></li>
							    <li><a data-toggle="tab" href="#monthly">Refund Policy</a></li>
							    <li><a data-toggle="tab" href="#q_monthly">Privacy Policy</a></li>
							    <li><a data-toggle="tab" href="#half_yearly">Data Policy</a></li>
							    <li><a data-toggle="tab" href="#yearly">Cookies</a></li>
							    <li><a data-toggle="tab" href="#guest">Guest Policy</a></li>
							    <li><a data-toggle="tab" href="#partner">Partners</a></li>
							  </ul>

						  <div class="tab-content">
						    <div id="fortnighty" class="tab-pane fade in active">
						      <h3>Terms of Service</h3>
						      <span style="    font-size: 11px;
    color: #666;">Last updated: {{$data->updated_at}}</span>

						      <p style="    font-size: 14px;  margin-top: 48px;">{{$data->terms}}</p>

						    </div>
						    <div id="monthly" class="tab-pane fade">
 <h3>Refund Policy</h3>


						      <p style="    font-size: 14px;
    margin-top: 48px;">{{$data->refund}}</p>
						</p>

						    </div>

    <div id="q_monthly" class="tab-pane fade">
       <h3>Privacy Policy</h3>


						      <p style="    font-size: 14px;
    margin-top: 48px;
">{{$data->privacy}}</p>
    </div>


    <div id="half_yearly" class="tab-pane fade">
 <h3>Data Policy</h3>


						      <p style="    font-size: 14px;
    margin-top: 48px;
">{{$data->data}}</p>
						</p>
    </div>

    <div id="yearly" class="tab-pane fade">
 <h3>Cookies</h3>


						      <p style="    font-size: 14px;
    margin-top: 48px;
">{{$data->cookies}}</p>
						</p>
    </div>

        <div id="partner" class="tab-pane fade">
 <h3>Partners</h3>


						      <p style="    font-size: 14px;
    margin-top: 48px;
">{{$data->partners}}</p>
						</p>
    </div>

    <div id="fixed" class="tab-pane fade">
      <h3>Fixed</h3>
      <p>The type of contract applicable to each offer is selected by the landlord.</p>

      <p>Fixed contract refers to a contract type with fixed start and end dates, defined by the landlord. In this case, you will always be charged with a full fixed period, despite the date you decide to move in. Regardless of the contract type, at the moment of booking, the prices displayed to the student refer to the first rent's payment.
</p>

    </div>

	    <div id="daily" class="tab-pane fade">
	      <h3>Daily</h3>
	      <p>The type of contract applicable to each offer is selected by the Accommodation Provider.</p>

	      <p>{{$data->guest}}</p>
	    </div>


	    	    <div id="guest" class="tab-pane fade">
	      <h3>Guest Policy</h3>
	      <p>The type of contract applicable to each offer is selected by the Accommodation Provider.</p>

	      <p>{{$data->guest}}</p>
	    </div>


  </div>
						</div>
     				</div>
     			</div>
     		</div>
     	</div>
     </section>

	@endsection
