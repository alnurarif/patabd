<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Carbon\Carbon;
use Image;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blog=Blog:: where('status',1)->get();
        return view('admin.blog.all',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[];
        $data['title']=$request->title;
        $data['subtitle']=$request->subtitle;
        $data['details']=$request->details;
        $data['created_at']=Carbon:: now()->toDateTimeString();

        $blog=Blog:: insertGetId($data);
        if ($request->hasFile('pic')) {
          $image=$request->file('pic');
          $imageName='blog_'.$blog.time().'.'.$image->getclientoriginalextension();
          Image::make($image)->save('uploads/blog/'.$imageName);

          Blog::where('id',$blog)->update([
            'image'=>$imageName,
          ]);

          if ($blog) {
            return redirect('admin/blog');
          }else {
            return redirect('admin/blog');
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
