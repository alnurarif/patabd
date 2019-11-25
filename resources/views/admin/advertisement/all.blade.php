@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
              <div class="col-md-10">
                <i class="fas fa-users"></i>
                Advertisement
              </div>

            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              @if(session()->has('success'))
               <script>
                swal({
                   title: "Done",
                   text: "Advertisement Delete",
                   icon: "success",
                   button: "OK",
                 });
               </script>
              @endif
              <table class="table table-bordered dataTable"  width="100%">
                  <thead>
                      <tr role="row">
                          <th style="width: 20px;"> id</th>
                          <th style="width: 173px;"> Link</th>
                          <th style="width: 173px;"> Image</th>
                          <th style="width: 173px;"> Time</th>
                          <th style="width: 50px;"> Manage</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($advertisement as $data)
                      <tr role="row" class="even">
                          <td>{{$data->id}}</td>
                          <td>{{$data->link}}</td>
                          <td>
                            <img src="{{asset('uploads/advertisement/'.$data->image)}}" style="width: 200px;">
                          </td>
                          <td>{{$data->updated_at}}</td>
                            <td>
                              <a href="{{url('admin/advertisement/edit/'.$data->id)}}" title="Edit"><i class="fas fa-edit"></i></a>
                              <a href="{{url('admin/advertisement/destroy/'.$data->id)}}" title="Delete"><i class="fa fa-trash"></i></a>
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
