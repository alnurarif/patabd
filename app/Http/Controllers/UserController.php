<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Landloard;

class UserController extends Controller
{
  public function __construct(){
    return $this->middleware('auth');
  }

  public function alluser(){
    $alluser = User:: all();
    return view('admin.user.all',compact('alluser'));
  }


  public function landlord(){
    $landlord=Landloard:: where('status',1)->orderBy('id','desc')->get();
    return view('admin.landlord.all',compact('landlord'));
  }

  public function landlord_delete($id){
    $delete=Landloard:: where('id',$id)->delete();
    if ($delete) {
      return back();
    }else {
      return back();
    }
  }

}
