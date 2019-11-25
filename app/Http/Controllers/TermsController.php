<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Terms;
class TermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $terms=Terms:: where('status',1)->get();
        return view('admin.terms.all',compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data=Terms:: where('status',1)->where('id',$id)->first();
      return view('admin.terms.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data=Terms:: where('status',1)->where('id',$id)->first();
      return view('admin.terms.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=[];
        $data['terms']=$request->terms;
        $data['refund']=$request->refund;
        $data['privacy']=$request->privacy;
        $data['data']=$request->data;
        $data['cookies']=$request->cookies;
        $data['guest']=$request->guest;
        $data['partners']=$request->partners;

        $terms=Terms:: where('id',$id)->update();
        if ($terms) {
          return redirect('/admin/terms');
        }else {
          return redirect('/admin/terms');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
