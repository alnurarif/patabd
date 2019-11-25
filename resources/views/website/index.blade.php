@extends('layouts.website')
@section('content')

 <!-- seach Section Start --->
 <section id="searh_section">
     <div class="search_bg">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="search_content text-center pt-50 pb-50">
                         <h2>World's fastest growing hotel chain</h2>
                       <form action="{{url('/result')}}" method="get">
                             <input type="text" name="location" placeholder="Search by city or hotel" style="padding-left: 13px;">

                             <input type="text" name="movein" style="padding: 7px 4px;text-align: center;" id="datepicker" placeholder="Move in">

                             <input type="text" name="moveout" style="padding: 7px 4px;text-align: center;" id="datepicke" placeholder="Move out">
                             <a href="#" style="        background: #c00;


                                 color: #fff;
                                    padding: 14px 76px 11px 10px;
                                 border: 1px solid #fff;" onclick="myFunction()">1 Room . 1 Guest</a>
                             <button type="submit" style="  margin-left: -5px;">Search</button>

                         <div class="search_btn">
                             <span>Continue your search</span>
                             <a href="#">Kolkata·10 Oct - 11 Oct | 1 Guest</a>
                             <a href="#">Kolkata·10 Oct - 11 Oct | 1 Guest</a>

                         </div>

                     </div>

                     <div class="shopping-cart" id="panel">
                         <!-- Title -->

                         <!-- Product #1 -->
                         <div class="item">

                             <div class="description">
                                 <span>Room 1</span>
                             </div>

                             <div class="quantity">
                                 <button class="plus-btn" type="button" name="button">
                                     <img src="{{asset('contents/website')}}/plus.svg" alt="" />
                                 </button>
                                 <input type="text" name="room" value="1"></input>
                                 <button class="minus-btn" type="button" name="button">
                                     <img src="{{asset('contents/website')}}/minus.svg" alt="" />
                                 </button>
                             </div>

                         </div>

                         <!-- Product #1 -->
                         <div class="item" style="margin-top: -39px;">

                             <div class="description">
                                 <span>Guest</span>
                             </div>

                             <div class="quantity">

                                 <button class="plus-btn" type="button" name="button">
                                     <img src="{{asset('contents/website')}}/plus.svg" alt="" />
                                 </button>

                                 <input type="text" name="gast" value="1">

                                 <button class="minus-btn" type="button" name="button">
                                     <img src="{{asset('contents/website')}}/minus.svg" alt="" />
                                 </button>

                             </div>

                         </div>
                     </div>
                      </form>
                 </div>
             </div>
         </div>
     </div>
 </section>
<!-- seach Section end  --->


<!-- extra img start  -->
<section id="extra_img">
  <div class="container">
    <div class="row">
      @foreach($upadvertisement as $data)
      <div class="col-md-6">
        <a href="{{$data->link}}" target="_blank"><img src="{{asset('uploads/advertisement/'.$data->image)}}" style="height:190px"></a>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- extra img end -->


<section id="recomanded">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="recomanded_content">
          <h2>Recommended PataBDs for you</h2>
          <section class="regular home_one_slick">


            <div>
              <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>
                <p class="price">1756 <del>4017</del> <span>56 Off</span></p>
              </div>
            </div>


            <div>
            <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>
                <p class="price">1756 <del>4017</del> <span>56 Off</span></p>
              </div>
            </div>
            <div>
                            <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>
                <p class="price">1756 <del>4017</del> <span>56 Off</span></p>
              </div>
            </div>
            <div>
                            <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>
                <p class="price">1756 <del>4017</del> <span>56 Off</span></p>
              </div>
            </div>
            <div>
                           <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>
                <p class="price">1756 <del>4017</del> <span>56 Off</span></p>
              </div>
            </div>
            <div>
                           <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>
                <p class="price">1756 <del>4017</del> <span>56 Off</span></p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <h2 style="    font-size: 24px;
    font-weight: bold;
    padding-top: 60px;
    padding-bottom: 14px;color: green">Save big. Travel better.</h2>
      </div>
      @foreach($advertisement as $data)
      <div class="col-md-3">
        <div class="big_content">
          <a href="{{$data->link}}" target="_blank"><img src="{{asset('uploads/advertisement/'.$data->image)}}" style="width: 255px;height: 132px;"></a>
        </div>
      </div>
      @endforeach
    </div>

 <div class="row" style="margin-top: 100px">
      <div class="col-md-12">
        <div class="recomanded_content">
          <h2>Recommended PataBDs Places for you</h2>
          <section class="regular slider home_two_slick">
            <div>
              <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>

              </div>
            </div>
            <div>
                           <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                               <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>

              </div>
            </div>
            <div>
                            <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>

              </div>
            </div>
            <div>
                            <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>

              </div>
            </div>
            <div>
                           <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>

              </div>
            </div>
            <div>
       <div class="regular_img">
                <img src="{{asset('contents/website')}}/img/hotel/Screenshot_1.png">
              </div>
              <div class="regular_content">
                                <h3>Capital O 1487</h3>
                <p class="near">Near Laxminarayan Temple  </p>
                <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>Excellent</span></p>

              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- recomanded end here -->

<!-- hotel chain section start here -->
<section id="hotel_chain">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="hotel_chain_left">
          <h2>Bangladesh's fastest growing hotel booking system</h2>
          <p class="hotel_sub">More Hotels, Easy to find. More Comfortable</p>

          <div class="count">
            <h3>50+</h3>
            <p>Cities</p>
          </div>

          <div class="count">
            <h3>2000+</h3>
            <p>Exclusive appartments</p>
          </div>

         <div class="count">
            <h3>1000+</h3>
            <p>Exclusive Hotels</p>
          </div>


          <div class="count">
            <h3>20000+</h3>
            <p>Exclusive Rooms</p>
          </div>




        </div>
      </div>
      <div class="col-md-6">
        <div class="hotel_chain_right"></div>
      </div>
    </div>
  </div>
</section>



<!--  about section start  -->
<section id="about_section" class="mt-100">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about_content">
          <h2 style="color: green">About Us</h2>
          @foreach($allabout as $data)
          <p>{{$data->aboutus}}</p>
          @endforeach
          <a href="{{url('/about')}}">Our Story</a>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
