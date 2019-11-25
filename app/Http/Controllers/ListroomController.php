<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listroom;
use App\Room;
use Carbon\Carbon;
use Session;

class ListroomController extends Controller
{
    public function room_list(){
      $room=Room:: where('is_approve',0)->get();
      return view('admin.listroom.all',compact('room'));
    }

    public function approve_room($id){
      $approve=Room:: where('is_approve',0)->where('id',$id)->update([
        'is_approve'=>1,
      ]);
      if ($approve) {
        return back();
      }else {
        return back();
      }
    }

    public function cancen_room($id){
      $cancel=Room:: where('is_approve',0)->where('id',$id)->update([
        'is_approve'=>2,
      ]);
      if ($cancel) {
        return back();
      }else {
        return back();
      }
    }

    public function approve_list(){
      $approve=Room:: where('is_approve',1)->get();
      return view('admin.listroom.approve',compact('approve'));
    }

    public function cancel_list(){
      $cancel=Room:: where('is_approve',2)->get();
      return view('admin.listroom.cancel',compact('cancel'));
    }

    public function room_view($id){
      $data=Room:: where('status',1)->where('id',$id)->first();
      return view('admin.listroom.view',compact('data'));
    }

}
