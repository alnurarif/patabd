@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
              <div class="col-md-10">
                <i class="fas fa-users"></i>
              Cancel Room List
              </div>
              <div class="col-md-2 align-right">
                <!-- <i class="fas fa-plus"></i>
                <a href="{{url('/admin/blog')}}">Add Post</a> -->
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered dataTable"  width="100%">
                  <thead>
                      <tr role="row">
                          <th class="sorting_asc" style="width: 173px;"> room type</th>
                          <th class="sorting_asc" style="width: 173px;"> city</th>
                          <th class="sorting_asc" style="width: 60px;"> address</th>
                          <th class="sorting_asc" style="width: 60px;"> house number</th>
                          <th class="sorting_asc" style="width: 60px;"> price</th>
                          <th class="sorting_asc" style="width: 60px;"> photo</th>
                          <th class="sorting" style="width: 54px;">status</th>
                          <th class="sorting" style="width: 250px;">Manage</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($cancel as $data)
                      <tr role="row" class="even">
                          <td>{{$data->room_type}}</td>
                          <td>{{$data->city}}</td>
                          <td>{{$data->address}}</td>
                          <td>{{$data->house_number}}</td>
                          <td>{{$data->price}}</td>
                          <td>
                            <img src="{{asset('uploads/room/'.$data->image)}}" style="width: 53px;">
                          </td>
                          <td>
                            <button class="btn btn-danger">Cancel</button>
                          </td>
                          <td style="text-align: center;">
                            <a href="{{url('/admin/room/view/'.$data->id)}}" title="view" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <!-- <a href="{{url('admin/terms/1/edit')}}" title="Edit" class="btn btn-success"><i class="fas fa-edit"></i></a> -->
                            <a href="{{url('/admin/room/approve/'.$data->id)}}" title="approve" class="btn btn-primary"><i class="fa fa-check-circle"></i></a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection
