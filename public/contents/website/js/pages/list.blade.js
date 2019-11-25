var base_url = $('base').attr('data-base');
$(document).ready(function () {
    $('.switch .slider').on('click',function(){
        // console.log($('#view_map').prop('checked'));
        if ($('#view_map').prop('checked')) {
            // $("#view_map").prop("checked", false);
            $('#room_map_all').css('height','0px');
        }else{
            // $("#view_map").prop("checked", true);
            $('#room_map_all').css('height','300px');
        }
    });
    // $('#view_map').on('change',function(){
    //     $('#room_map_all').css('height','300px');
    // });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#location').on('keyup',function(){
        filterRoom();
    });
    $('.accomodation_type').on('change',function(){
        filterRoom();
    });
    $('.hotel_facilities').on('change',function(){
        filterRoom();
    });
    $(document).on('click','.room_title',function(){
        var room_id = $(this).attr('id').substr(11);
        showMap(room_id);
    });
    $(document).on('click','.room_para',function(){
        var room_id = $(this).attr('id').substr(10);
        showMap(room_id);
    });
});

function showMap(room_id) {
    var room_lat = ($("#room_lat_"+room_id).html() == "") ? 0 : $("#room_lat_"+room_id).html();
    var room_lng = ($("#room_lng_"+room_id).html() == "") ? 0 : $("#room_lng_"+room_id).html();
    var room_google_location = $("#room_google_location_"+room_id).html();

    var latlng = new google.maps.LatLng(room_lat, room_lng);
    map = new google.maps.Map(document.getElementById('room_map_'+room_id), {
        center: latlng,
        zoom: 16
    });

    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: room_google_location
    });
    $('.room_map').css('height','0px');
    $('#room_map_'+room_id).css('height','300px');
    setTimeout(function(){ 
        $('html, body').animate({
            scrollTop: $('#room_map_'+room_id).offset().top - 20 //#DIV_ID is an example. Use the id of your destination on the page
        }, 'slow');
    }, 900);
}
function filterRoom() {
    var location = $('#location').val();
    var room_price_from = $('#room_price_from').html();
    var room_price_to = $('#room_price_to').html();
    var accomodation_type = '';

    var wifi = ($('#hotel_facilities_wifi').prop('checked')) ? 1 : '';
    var cable_tv = ($('#hotel_facilities_cable_tv').prop('checked')) ? 1 : '';
    var central_heating = ($('#hotel_facilities_central_heating').prop('checked')) ? 1 : '';
    var washing_machine = ($('#hotel_facilities_washing_machine').prop('checked')) ? 1 : '';
    var outdoor_area = ($('#hotel_facilities_outdoor_area').prop('checked')) ? 1 : '';
    var bed_linen = ($('#hotel_facilities_bed_linen').prop('checked')) ? 1 : '';
    var accessibility = ($('#hotel_facilities_accessibility').prop('checked')) ? 1 : '';
    var elevator = ($('#hotel_facilities_elevator').prop('checked')) ? 1 : '';
    var air_conditioning = ($('#hotel_facilities_air_conditioning').prop('checked')) ? 1 : '';
    
    //get accomodation data
    var accomodation_length = $(".accomodation_type:checked").length;
    var i = 1;
    $(".accomodation_type:checked").each(function() {
        if(accomodation_length == i){
            accomodation_type += $(this).val();
        }else{
            accomodation_type += $(this).val()+',';
        }
        i++;
    });
    //end accomodation date processing


    $.ajax({
        url:"/search_filter",
        method:"POST",
        data:{
            location : location,
            room_price_from : room_price_from,
            room_price_to : room_price_to,
            wifi : wifi,
            cable_tv : cable_tv,
            central_heating : central_heating,
            washing_machine : washing_machine,
            outdoor_area : outdoor_area,
            bed_linen : bed_linen,
            accessibility : accessibility,
            elevator : elevator,
            air_conditioning : air_conditioning,
            accomodation_type : accomodation_type
        },
        success:function(response) {
            var rooms = response;
            console.log(rooms.length);
            if(rooms.length==0){
                $('#all_rooms').html('<h2 style="text-align:center;">No room was found!!<h2>');    
                return false;
            }
            
            var rooms_to_show = '';
            rooms.forEach(function(room){
                rooms_to_show += '<div class="item_content">';
                    rooms_to_show += '<div class="item_content_right">';
                        rooms_to_show += '<div class="item_content_text">';
                            rooms_to_show += '<span id="room_lat_'+room.id+'" style="display:none">'+room.lat+'</span>';
                            rooms_to_show += '<span id="room_lng_'+room.id+'" style="display:none">'+room.lng+'</span>';
                            rooms_to_show += '<span id="room_google_location_'+room.id+'" style="display:none">'+room.google_location+'</span>';
                            rooms_to_show += '<h3 class="room_title" id="room_title_'+room.id+'">'+room.title+'</h3>';
                            rooms_to_show += '<p class="room_para" id="room_para_'+room.id+'">'+room.address+' , '+room.house_number+' , '+room.extra_info+', '+room.posta_code+'</p>';
                            rooms_to_show += '<p class="ratting"><i class="fa fa-star" aria-hidden="true"></i><span>80(Ratting)Excellent</span></p>';
                            rooms_to_show += '<div class="item_facility">';
                                rooms_to_show += '<span>Parking Facility</span>';
                                rooms_to_show += '<span>First Aid</span>';
                                rooms_to_show += '<span>Attached Bathroom</span>';
                                rooms_to_show += '<span>+9 More</span>';
                            rooms_to_show += '</div>';
                            rooms_to_show += '<p class="price price_extra">'+room.price+' <del>0</del> <span>56% Off</span></p>';
                            rooms_to_show += '<div class="item_content_button">';
                                rooms_to_show += '<a href="/result/view/'+room.id+'" class="view">View Details</a>';
                                rooms_to_show += '<a href="/hotel/booking/'+room.id+'" class="book_now">Book Now</a>';
                            rooms_to_show += '</div>';
                        rooms_to_show += '</div>';
                    rooms_to_show += '</div>';
                    rooms_to_show += '<div class="item_content_left">';
                        rooms_to_show += '<section class="item_slider">';
                        console.log(room.photos);
                        var images = room.photos.split('|');
                        images.forEach(function(image){
                            rooms_to_show += '<div>';
                                rooms_to_show += '<img src="'+base_url+'/uploads/rooms/'+image+'">';
                            rooms_to_show += '</div>';
                        });
                            // alert( result[2] );

                            // @php
                            // $images = explode('|',room.photos);
                            // @endphp
                            // @foreach($images as $image)
                            // rooms_to_show += '<div>';
                            //     rooms_to_show += '<img src="'+asset('uploads/rooms/'.$image)+'">';
                            // rooms_to_show += '</div>';
                            // @endforeach
                        rooms_to_show += '</section>';
                    rooms_to_show += '</div>';
                rooms_to_show += '</div>';
                rooms_to_show += '<div class="room_map" id="room_map_'+room.id+'"></div>';
                $('#all_rooms').html(rooms_to_show);    
                
                
            });

            

            
        },
        error:function(){
            alert("Something went wrong");
        }
    });
}