<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;
use Carbon\Carbon;
use Session;

class VisitorController extends Controller
{
  public function register(){
    return view('website.visitor.register');
  }

  public function create(Request $request){
    $this->validate($request,[
      'f_name'=>'required',
      'l_name'=>'required',
      'email'=>'required',
      'password'=>'required|string|min:6|confirmed',
    ],[
      'f_name.required'=> 'Please enter your first name',
      'l_name.required'=> 'Please enter your last name',
      'email.required'=> 'Please enter your email',
      'password.confirmed'=> 'Password did not match',
    ]);

    $data=[];
    $data['l_name'] = $request->l_name;
    $data['f_name'] = $request->f_name;
    $data['email'] = $request->email;
    $data['password'] = md5($_POST['password']);
    $data['image'] = 'default.jpg';
    $data['created_at'] = Carbon::now()->toDateTimeString();

   $insert=Visitor:: insert($data);
    if ($insert) {
      return redirect('/');
    }else {
      return redirect('/');
    }
  }

  public function login_form(){
    return view('website.visitor.login');
  }

  public function login(Request $request){

    $this->validate($request,[
          'email'=> ['required','string','email','max:255'],
          'password'=> ['required','string','min:6'],
      ]);

    $email=$request->email;
    $password= md5($request->password);
    $visitor=Visitor:: where('email',$email)->where('password',$password)->first();

    if ($visitor) {
      Session::put('id',$visitor->id);
      return redirect('/');
    }else{
      return redirect('/');
    }
  }

  public function logout(){
    Session:: flush('id');
    return redirect('/visitor/login_form');
  }


}
