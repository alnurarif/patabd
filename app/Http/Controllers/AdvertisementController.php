<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use Carbon\Carbon;
use Image;


class AdvertisementController extends Controller
{
  public function index()
  {
    $advertisement=Advertisement:: where('status',1)->get();
    return view('admin.advertisement.all',compact('advertisement'));
  }

  public function edit($id)
  {
        $data=Advertisement:: where('status',1)->where('id',$id)->first();
        return view('admin.advertisement.add',compact('data'));
  }

  public function store(Request $request)
  {
    $id=$request->id;
    $data=[];
    $data['link']=$request->link;

    $advertisement=Advertisement:: where('id',$id)->update($data);
    if ($request->hasFile('pic')) {
      $image=$request->file('pic');
      $imageName='Advertisement_'.$id.time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->save('uploads/advertisement/'.$imageName);
      Advertisement:: where('id',$id)->update([
        'image'=>$imageName,
      ]);
      if ($advertisement) {
          return redirect('admin/advertisement');
      }else {
        return redirect('admin/advertisement');
      }
    }
  }

  public function destroy($id)
  {
      $delete=Advertisement:: where('status',1)->where('id',$id)->delete();
      if ($delete) {
        session()->flash('success','value');
        return back();
      }else {
          session()->flash('error','value');
          return back();
      }
  }

}
