<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\About;
use App\Blog;
use App\Terms;
use App\Room;
use App\Booking;
use App\Contact;
use App\Privacy;
use App\Advertisement;
use Carbon\Carbon;
use Session;



class WebsiteController extends Controller
{
    public function index(){
      $advertisement=Advertisement:: where('status',1)->orderBy('id','desc')->limit(4)->get();
      $upadvertisement=Advertisement:: where('status',1)->orderBy('id','ASC')->limit(2)->get();
      $allabout=About:: where('status',1)->orderBy('id','desc')->get();
      return view('website.index',compact('advertisement','upadvertisement','allabout'));
    }

    public function about(){
      $allabout=About:: where('status',1)->orderBy('id','desc')->get();
      return view('website.about',compact('allabout'));
    }
    public function terms(){
      $data=Terms:: where('status',1)->where('id',1)->first();
      return view('website.terms',compact('data'));
    }

    public function blog(){
      $blog=Blog:: where('status',1)->orderBy('id','desc')->get();
      return view('website.blog',compact('blog'));
    }

    public function privacy_policy(){
      $allprivacy=Privacy:: where('status',1)->orderBy('id','desc')->get();
      return view('website.privacy_policy',compact('allprivacy'));
    }

    public function contact(){
      return view('website.contact');
    }

    public function contact_insert(Request $request){
      $data=[];
      $data['landlord']=$request->tenant;
      $data['withh']=$request->withh;
      $data['topic']=$request->topic;
      $data['subtopic']=$request->subtopic;
      $data['country']=$request->country;
      $data['email']=$request->email;
      $data['phone']=$request->phone;
      $data['subject']=$request->subject;
      $data['message']=$request->description;
      $data['created_at']=Carbon:: now()->toDateTimeString();


     $contact=Contact:: insert($data);

     if ($contact) {
      session()->flash('success','value');
       return back();
     }else{
      session()->flash('error','value');
       return back();

     }
    }


    public function serch(Request $request){
      
      // $location =  Session::put('location', $request->input('location'));
      // $movein = Session::put('movein', $request->input('movein'));
      // $moveout = Session::put('moveout', $request->input('moveout')) ;
      // $gast =  Session::put('gast', $request->input('gast'));
      // $room =  Session::put('room', $request->input('room'));

      $location = $request->input('location');
      $movein = $request->input('movein');
      $moveout = $request->input('moveout');
      $gast = $request->input('gast');
      $room = $request->input('room');

      $search = Room::where('status',1)
      ->where(function ($query) use ($location){
        $query->WhereRaw("city like '%".$location."%'")
        ->orWhereRaw("address like '%".$location."%'")
        ->orWhereRaw("google_location like '%".$location."%'");
      })
      ->get();


      return view('website.list',compact('search'));
    }
    public function search_filter(Request $request){
      $location = $request->input('location');
      $room_price_from = $request->input('room_price_from');
      $room_price_to = $request->input('room_price_to');
      $wifi = $request->input('wifi');
      $cable_tv = $request->input('cable_tv');
      $central_heating = $request->input('central_heating');
      $washing_machine = $request->input('washing_machine');
      $outdoor_area = $request->input('outdoor_area');
      $bed_linen = $request->input('bed_linen');
      $accessibility = $request->input('accessibility');
      $elevator = $request->input('elevator');
      $air_conditioning = $request->input('air_conditioning');
      $accomodation_type = array('1','2','3','4','5','6','7');
      $accomodation_type = ($request->input('accomodation_type')!="")?explode(',',$request->input('accomodation_type')):$accomodation_type;

      $search = Room::where('status',1)
      ->where(function ($query) use ($location){
        $query->WhereRaw("city like '%".$location."%'")
        ->orWhereRaw("address like '%".$location."%'")
        ->orWhereRaw("google_location like '%".$location."%'");
      })
      ->WhereIn('room_type', $accomodation_type)
      ->whereBetween('price', [$room_price_from, $room_price_to]);
      $search->when($wifi == 1, function ($q) use ($wifi) {
          return $q->where('wifii',$wifi);
      });
      $search->when($cable_tv == 1, function ($q) use ($cable_tv) {
          return $q->where('cable_tv',$cable_tv);
      });
      $search->when($central_heating == 1, function ($q)  use ($central_heating){
          return $q->where('central_heating',$central_heating);
      });
      $search->when($washing_machine == 1, function ($q)  use ($washing_machine){
          return $q->where('washing_machine',$washing_machine);
      });
      $search->when($outdoor_area == 1, function ($q)  use ($outdoor_area){
          return $q->where('outdoor_area',$outdoor_area);
      });
      $search->when($bed_linen == 1, function ($q)  use ($bed_linen){
          return $q->where('bed_linen',$bed_linen);
      });
      $search->when($accessibility == 1, function ($q)  use ($accessibility){
          return $q->where('accessibility',$accessibility);
      });
      $search->when($elevator == 1, function ($q)  use ($elevator){
          return $q->where('elevator',$elevator);
      });
      $search->when($air_conditioning == 1, function ($q) use ($air_conditioning){
          return $q->where('air_conditioning',$air_conditioning);
      });
      
      return $search->get();;
    }
    public function search_deails($id){
      $view=Room::where('id',$id)->first();
      return view('website.view',compact('view'));
    }



    public function booking(Request $request, $id){
      $post_id = Session:: put('post_id',$id);
      $room_type = Room::where('status',1)->where('id',$id)->first();

      $visitor= Session:: get('id');
      $post = Session:: get('post_id');
      $movein = Session::get('movein');
      $moveout = Session::get('moveout') ;

      if ($room_type->room_type == 4) {
        return view('website.personal_information_2');
      }else{
        return view('website.booknow',compact('room_type'));
      }

    }

    public function payment()
    {
        return view('website.payment_details');
    }












}
