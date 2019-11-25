@extends('layouts.website')
@section('content')

           <!-- blog section start from herer -->
           <section id="blog_section">
             <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 style="color: #238E0E;
    font-weight: 600;"> <span style="color: #c00">Pata</span>BD's Official Blog</h2>
                </div>
              </div>
               <div class="row">
                    <div class="col-md-8">
                      <div class="blog_left">
                        @foreach($blog as $data)
                        <div class="blog_content">
                          <div class="blog_content_left">
                            <img src="{{asset('uploads/blog/'.  $data->image)}}">
                          </div>

                          <div class="blog_content_right">
                            <h3>{{$data->title}}</h3>
                            <p>{{$data->subtitle}}</p>
                            <div class="ss">
                                <img src="{{asset('contents/website')}}/img/facebook.png">
                                <img src="{{asset('contents/website')}}/img/pinterest.png">
                                <img src="{{asset('contents/website')}}/img/tumblr.png">
                                <img src="{{asset('contents/website')}}/img/twitter.png">
                            </div>
                          </div>
                        </div>
                        @endforeach


                      </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                      <div class="blog_right">
                        <div class="letest_news">
                          <h4>Letest News</h4>
                          @foreach($blog as $data)
                          <div class="letest_news_content mt-20">
                            <a href="#">
                            <img src="{{asset('uploads/blog/'.  $data->image)}}">
                            <h5>{{$data->title}}</h5>
                            </a>
                          </div>

                          @endforeach

                        </div>

                       <div class="letest_news mt-30">
                          <h4>Popular News</h4>

                          @foreach($blog as $data)
                          <div class="letest_news_content mt-20">
                            <a href="#">
                            <img src="{{asset('uploads/blog/'.  $data->image)}}">
                            <h5>{{$data->title}}</h5>
                            </a>
                          </div>

                          @endforeach


                        </div>
                      </div>
                    </div>
               </div>
             </div>
           </section>
           <!-- blog section start from here -->

@endsection
