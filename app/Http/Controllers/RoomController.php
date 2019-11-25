<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Roomphoto;
use Carbon\Carbon;
use Image;
use Session;

class RoomController extends Controller
{
  public function select_room(){
    return view('website.landloard.list_ur_room');
  }


  public function room_details(Request $request){

    $data=[];
    $data['landloard_id'] = Session:: get('id');
    $data['room_type'] = $request->type;
    $data['city'] = $request->city;
    $data['created_at']=Carbon:: now()->toDateTimeString();

   $listroom=Room:: insertGetId($data);
   if ($listroom) {
     return redirect('/room/'.$listroom);
   }else{
     return redirect('/room');
   }
  }

  public function room($id){
    $roomid=Room:: where('status',1)->where('id',$id)->first();
    return view('website.landloard.room',compact('roomid'));
  }

  public function room_update(Request $request){

    $bedroom = $request->bedroom;
    $bathroom = $request->bathroom;

    $data=[];
    $data['bedroom'] = $bedroom;
    $data['bathroom'] = $bathroom;
    $data['kitchen'] = $request->kitchen;
    $data['living_room'] = $request->living_room;
    $data['persons'] = $request->persons;
    $data['dining_room'] = $request->dining_room;
    $data['study_room'] = $request->study_room;
    $data['updated_at'] = Carbon:: now()->toDatetimeString();

    $id = $request->id;

    $room_update=Room:: where('id',$id)->update($data);
    if ($room_update) {
      return redirect('/bed/'.$id);
    }else {
      return redirect('/bed/'.$id);
    }
  }


  public function bed($id){
    $roomid=Room:: where('status',1)->where('id',$id)->first();
    return view('website.landloard.bed',compact('roomid'));
  }

  public function bed_update(Request $request){

    $id=$request->id;

    $data['single_bed']=$request->single_bed;
    $data['double_bed']=$request->double_bed;
    $data['updated_at'] = Carbon:: now()->toDatetimeString();

    $bed_update=Room:: where('id',$id)->update($data);

    if ($bed_update) {
      return redirect('/amenities/'.$id);
    }else {
      return redirect('/amenities/'.$id);
    }
  }

  public function amenities($id){
    $roomid=Room:: where('status',1)->where('id',$id)->first();
    return view('website.landloard.amenities',compact('roomid'));
  }

  public function amenities_update(Request $request){
    $id=$request->id;
    $data = [];
    if (isset($request->wi_fi)) {
      $data['wifii'] = 1;
    }else{
      $data['wifii'] = 0;
    }

    if (isset($request->cable_tv)) {
  $data['cable_tv']= 1;
}else{
  $data['cable_tv']= 0;
}

if (isset($request->central_heating)) {
  $data['central_heating']= 1;
}else{
  $data['central_heating']= 0;
}
if (isset($request->washing_machine)) {
  $data['washing_machine']= 1;
}else{
  $data['washing_machine']= 0;
}
if (isset($request->outdoor_area)) {
  $data['outdoor_area']= 1;
}else{
  $data['outdoor_area']= 0;
}
if (isset($request->bed_linen)) {
  $data['bed_linen']= 1;
}else{
  $data['bed_linen']= 0;
}
if (isset($request->accessibility)) {
  $data['accessibility']= 1;
}else{
  $data['accessibility']= 0;
}
if (isset($request->elevator)) {
  $data['elevator']= 1;
}else{
  $data['elevator']= 0;
}
if (isset($request->air_conditioning)) {
  $data['air_conditioning']= 1;
}else{
  $data['air_conditioning']= 0;
}
    $amenities_update = Room::where('id',$id)->update($data);

    if($amenities_update) {
      return redirect('/address/'.$id);
    }else {
      return redirect('/address/'.$id);
    }
    // return $id;
  }

  public function address($id){
    $roomid=Room:: where('status',1)->where('id',$id)->first();
    return view('website.landloard.address',compact('roomid'));
  }

  public function address_update(Request $request){

    $id=$request->id;
    $data=[];
    
    $data['address']=$request->address;
    $data['house_number']=$request->code;
    $data['extra_info']=$request->extra;
    $data['posta_code']=$request->postal_code;
    $data['google_location']=$request->google_location;
    $data['lat']=$request->lat;
    $data['lng']=$request->lng;

    $address_update=Room:: where('id',$id)->update($data);

    if($address_update){
      return redirect('/house_rules/'.$id);
    }else {
      return redirect('/house_rules/'.$id);
    }
  }

  public function house_rules($id){
    $roomid=Room:: where('status',1)->where('id',$id)->first();
    return view('website.landloard.house_rules',compact('roomid'));
  }

  public function rules_update(Request $request){

    $id=$request->id;

    $data=[];
    if ($request->smoking_allowed) {
      $data['smoking_allowed']='yes';
    }else{
      $data['smoking_allowed']='no';
    }

    if ($request->pets_allowed) {
      $data['pets_allowed']='yes';
    }else{
      $data['pets_allowed']='no';
    }

    if ($request->guests) {
      $data['guests']='yes';
    }else{
      $data['guests']='no';
    }

    $rules_update=Room:: where('id',$id)->update($data);
    if ($rules_update) {
      return redirect('/restrictions/'.$id);
    }else{
      return redirect('/restrictions/'.$id);
    }

  }


  public function restrictions($id){
    $roomid=Room:: where('status',1)->where('id',$id)->first();
    return view('website.landloard.restrictions',compact('roomid'));
  }

  public function restrictions_update(Request $request){
    $id=$request->id;
    $tenant=$request->tenant;

    $data=[];
    $data['tenant']=$tenant;

    $restrictions=Room:: where('id',$id)->update($data);
    if ($restrictions) {
      return redirect('/rent/'.$id);
    }else{
        return redirect('/rent/'.$id);
    }
  }

  public function rent($id){
    $roomid=Room:: where('status',1)->where('id',$id)->first();
    return view('website.landloard.rent',compact('roomid'));
  }

  public function rent_update(Request $request){
    $id=$request->id;

    $data=[];
    $data['room_type'] = $request->type;
    $data['price'] = $request->price;
    $data['created_at']=Carbon:: now()->toDateTimeString();

   $rent_update=Room:: where('id',$id)->update($data);
   if ($rent_update) {
     return redirect('/availability/'.$id);
   }else{
     return redirect('/availability/'.$id);
   }
  }






  public function availability($id){
    $roomid=Room:: where('status',1)->where('id',$id)->first();
    return view('website.landloard.availability',compact('roomid'));
  }

  public function availability_update(Request $request){
    $id=$request->id;
    $data=[];
    $data['available']=$request->available;

    $availability=Room:: where('id',$id)->update($data);
    if($availability){
  return redirect('/title/'.$id);
  }else {
    return redirect('/title/'.$id);
  }
  }


  public function title($id){
    $roomid=Room:: where('status',1)->where('id',$id)->first();
    return view('website.landloard.title',compact('roomid'));
  }

public function title_update(Request $request){
  $id=$request->id;
  $data=[];
  $data['title']=$request->title;

  $title=Room:: where('id',$id)->update($data);
  if ($title) {
    return redirect('/photos/'.$id);
  }else {
    return redirect('/photos/'.$id);
  }
}

public function photos($id){
  $roomid=Room:: where('status',1)->where('id',$id)->first();
  return view('website.landloard.photo',compact('roomid'));
}

public function photos_insert(Request $request){

  $id=$request->id;

   $images=array();
   if($files=$request->file('photo')){
       foreach($files as $file){
           $imageName='room_'.$id.rand().'.'.$file->getClientOriginalExtension();
           $file->move('uploads/rooms',$imageName);
           $images[]=$imageName;
       }
   }

   Room::where('id',$id)->update([
       'photos'=>  implode("|",$images),
   ]);




}



}
