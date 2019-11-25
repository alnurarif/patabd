<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
    	$contact=Contact:: where('status',1)->orderBy('id','desc')->get();
    	return view('admin.contact.all',compact('contact'));
    }
    public function con_view($id){
      $data=Contact:: where('status',1)->where('id',$id)->first();
      return view('admin.contact.view',compact('data'));
    }

    public function con_del($id){
    	$delete=Contact:: where('id',$id)->delete();
    	if ($delete) {
    		session()->flash('success','value');
    		return back();
    	}else{
    		session()->flash('success','value');
    		return back();
    	}
    }
}
