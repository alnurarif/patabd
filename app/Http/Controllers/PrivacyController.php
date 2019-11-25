<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privacy;
use Carbon\Carbon;
use Image;

class PrivacyController extends Controller
{
  public function __construct(){
    return $this->middleware('auth');
  }

  public function all_privacy(){
    $allprivacy=Privacy:: where('status',1)->orderBy('id','desc')->get();
    return view('admin.privacy.all',compact('allprivacy'));
  }

  public function privacy_view($id){
    $data=Privacy:: where('status',1)->where('id',$id)->first();
    return view('admin.privacy.view',compact('data'));
  }

  public function privacy_edit($id){
    $data=Privacy:: where('status',1)->where('id',$id)->first();
    return view('admin.privacy.edit',compact('data'));
  }

  public function privacy_up(Request $request){

    $data=[];
    $data['privacy']=$request->privacy;
    $data['updated_at']=Carbon:: now()->toDateTimeString();

    $privacy=Privacy:: where('id',1)->update($data);

    if ($privacy) {
      session()->flash('success','value');
      return redirect('admin/all/privacy');
    }else {
      return redirect('admin/all/privacy');
    }
  }
}
