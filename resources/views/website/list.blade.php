@extends('layouts.website')
@section('content')
<style type="text/css">
  .room_title{
    cursor:pointer;
  }
  .room_para{
    cursor:pointer;
  }
  .room_map{
    height:0px;
    transition: height .8s ease;
  }
  #room_map_all{
    height:0px;
    transition:height .8s ease;
  }
</style>
<span style="display:none;" id="room_price_from">0</span>
<span style="display:none;" id="room_price_to">0</span>
        <section id="list_section" class="mt-50">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="list_left">

                  <div class="list_search">
                    <h3>Filters</h3>
                    <p>Popular locations in Goa</p>
                    <form>
                      <input type="text" name="location" id="location" placeholder="Search">
                    </form>
                      <button>Baga Beach North Goa</button>
                      <button>Panjim</button>
                      <button>Calangute</button>
                      <button>Vasco Da Gama</button>
                      <button>Dabolim Airport</button>
                      <a href="#"> <i class="fa fa-plus" aria-hidden="true"></i>View More</a>
                  </div>

                  <div class="price_range">
                      <div class="range-slider">
                          <h3>Price</h3>
                          <input type="text" class="js-range-slider" value="" />
                      </div>
                  </div>


                  <div class="type_content">
                    <h3>Accomodation Type</h3>
                    <form>
                        <div class="checkbox">
                          <label><input type="checkbox" value="1" class="accomodation_type">Entire place</label>
                        </div>


                        <div class="checkbox">
                          <label><input type="checkbox" value="2" class="accomodation_type">Private bedroom</label>
                        </div>

                        <div class="checkbox">
                          <label><input type="checkbox" value="3" class="accomodation_type">Shared bedroom</label>
                        </div>


                       <div class="checkbox">
                          <label><input type="checkbox" value="4" class="accomodation_type">Hotel rooms
</label>
                        </div>


                       <div class="checkbox">
                          <label><input type="checkbox" value="5" class="accomodation_type">Apartments</label>
                        </div>



                       <div class="checkbox">
                          <label><input type="checkbox" value="6" class="accomodation_type">Male Student residences</label>
                        </div>


                      <div class="checkbox">
                          <label><input type="checkbox" value="7" class="accomodation_type">Female Student residences</label>
                        </div>

                    </form>
                  </div>



                  <div class="type_content">
                    <h3>Collections</h3>
                    <form>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Luxury</label>
                        </div>

                        <div class="checkbox">
                          <label><input type="checkbox" value="">Family</label>
                        </div>

                        <div class="checkbox">
                          <label><input type="checkbox" value="">Beach</label>
                        </div>

                        <div class="checkbox">
                          <label><input type="checkbox" value="">For Group Travallers</label>
                        </div>
                    </form>
                  </div>


              <div class="type_content">
                  <h3>Hotel Facilities</h3>
                  <form>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" class="hotel_facilities" id="hotel_facilities_wifi" name="wifi">Wi-Fi</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" class="hotel_facilities" id="hotel_facilities_cable_tv" name="cable_tv">Cable TV</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" class="hotel_facilities" id="hotel_facilities_central_heating" name="central_heating">Central heating</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" class="hotel_facilities" id="hotel_facilities_washing_machine" name="washing_machine">Washing Machine</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" class="hotel_facilities" id="hotel_facilities_outdoor_area" name="outdoor_area">Outdoor Area (terrace, belcony)</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" class="hotel_facilities" id="hotel_facilities_bed_linen" name="bed_linen">Bed linen and towels</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" class="hotel_facilities" id="hotel_facilities_accessibility" name="accessibility">Accessibility</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" class="hotel_facilities" id="hotel_facilities_elevator" name="elevator">Elevator</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" class="hotel_facilities" id="hotel_facilities_air_conditioning" name="air_conditioning">Air conditioning</label>
                      </div>
                  </form>
                </div>

                </div>
              </div>
              <div class="col-md-9">
                <div class="list_right">

                  <div class="list_right_top">
                    <div class="list_right_top_left">
                      <h3>Hotels in Dhaka</h3>
                    </div>
                    <div class="list_right_top_right">
                      <span>
                        <label>Map View</label>
                        <label class="switch">

                          <input type="checkbox" id="view_map">
                          <span class="slider round"></span>
                        </label>
                      </span>

                      <span style="float: right;">
                        <label>Sort By</label>
                        <select>
                          <option value="volvo">Volvo</option>
                          <option value="saab">Saab</option>
                          <option value="mercedes">Mercedes</option>
                          <option value="audi">Audi</option>
                        </select>
                      </span>
                    </div>
                  </div>

                  <div class="item_section" id="all_rooms">
                    @if (count($search) >0 )
                      <div class="room_map_all" id="room_map_all"></div>
                    @endif
                    
                    @foreach($search as $data)
                      <div class="item_content">
                        <div class="item_content_right">
                          <div class="item_content_text">
                            <span id="room_lat_{{$data->id}}" style="display:none">{{$data->lat}}</span>
                            <span id="room_lng_{{$data->id}}" style="display:none">{{$data->lng}}</span>
                            <span id="room_google_location_{{$data->id}}" style="display:none">{{$data->google_location}}</span>
                            <h3 class="room_title" id="room_title_{{$data->id}}">{{$data->title}}</h3>
                            <p class="room_para" id="room_para_{{$data->id}}">{{$data->address}} , {{$data->house_number}} , {{$data->extra_info}}, {{$data->posta_code}}</p>
                            <p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>80(Ratting)Excellent</span></p>
                            <div class="item_facility">
                              <span>Parking Facility</span>
                              <span>First Aid</span>
                              <span>Attached Bathroom</span>
                              <span>+9 More</span>
                            </div>
                            <p class="price price_extra">{{$data->price}} <del>0</del> <span>56% Off</span></p>
                            <div class="item_content_button">
                              <a href="{{url('/result/view/'.$data->id)}}" class="view">View Details</a>
                              <a href="{{url('/hotel/booking/'.$data->id)}}" class="book_now">Book Now</a>
                            </div>
                          </div>
                        </div>
                        <div class="item_content_left">
                          <section class="item_slider">
                            @php
                              $images = explode('|',$data->photos);
                            @endphp
                            @foreach($images as $image)
                            <div>
                              <img src="{{asset('uploads/rooms/'.$image)}}">
                            </div>
                            @endforeach
                          </section>
                        </div>
                    </div>
                    <div class="room_map" id="room_map_{{$data->id}}"></div>
                    @endforeach


                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

@endsection

@section('additional_footer_script')
<script src="{{asset('contents/website')}}/js/pages/list.blade.js"></script>

<script type="text/javascript">
  // var room_lat = ($("#room_lat_"+room_id).html() == "") ? 0 : $("#room_lat_"+room_id).html();
  // var room_lng = ($("#room_lng_"+room_id).html() == "") ? 0 : $("#room_lng_"+room_id).html();
  // var room_google_location = $("#room_google_location_"+room_id).html();
  
  
  
  
  function initMap() {  
    var rooms = @json($search);

    var latlng = new google.maps.LatLng(rooms[0].lat, rooms[0].lng);
    
    var map = new google.maps.Map(document.getElementById('room_map_all'), {
        center: latlng,
        zoom: 16
    });
    rooms.forEach(function(room){
      var lat = (room.lat=="")?0:room.lat;
      var lng = (room.lng=="")?0:room.lng;
      var google_location = room.google_location;
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, lng),
        map: map
      });

    });
    $('#room_map_all').css('height','0px');

  }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCR5PFyvraK8Cqbu-vQu7UAR-NkcABHNuw&callback=initMap"></script>
@endsection