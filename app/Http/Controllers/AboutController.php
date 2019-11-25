<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Carbon\Carbon;

class AboutController extends Controller
{
  public function __construct(){
    return $this->middleware('auth');
  }

  public function all_about(){
    $allabout=About:: where('status',1)->orderBy('id','desc')->get();
    return view('admin.about.all',compact('allabout'));
  }

  public function about_view($id){
    $data=About:: where('status',1)->where('id',$id)->first();
    return view('admin.about.view',compact('data'));
  }

  public function about_edit($id){
    $data=About:: where('status',1)->where('id',$id)->first();
    return view('admin.about.edit',compact('data'));
  }

  public function about_up(Request $request){

    $data=[];
    $data['aboutus']=$request->aboutus;
    $data['updated_at']=Carbon:: now()->toDateTimeString();

    $about=About:: where('id',1)->update($data);

    if ($about) {
      return redirect('admin/all/about');
    }else {
      return redirect('admin/all/about');
    }
  }
}
