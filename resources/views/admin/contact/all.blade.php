@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
              <div class="col-md-10">
                <i class="fas fa-users"></i>
                Landlord
              </div>
              <div class="col-md-2 align-right">
                <!-- <i class="fas fa-plus"></i>
                <a href="{{url('/admin/blog')}}">Add Post</a> -->
              </div>
            </div>
          </div>
           @if(session()->has('success'))
                      <script>
                       swal({
                          title: "Good job!",
                          text: "You Contact Message Delete!",
                          icon: "success",
                          button: "Aww yiss!",
                        });
                      </script>
                     @endif
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered dataTable"  width="100%">
                  <thead>
                      <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"> landlord</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"> with</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"> subtopic</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"> country</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"> email</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"> subject</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"> phone</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"> message</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 54px;">Time</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 40px;text-align:center;">Manage</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($contact as $data)
                      <tr role="row" class="even">
                          <td>{{$data->landlord}}</td>
                          <td>{{$data->withh}}</td>
                          <td>{{$data->subtopic}}</td>
                          <td>{{$data->country}}</td>
                          <td>{{$data->email}}</td>
                          <td>{{$data->subject}}</td>
                          <td>{{$data->phone}}</td>
                          <td>{{$data->message}}</td>
                          <td>{{$data->created_at}}</td>
                          <td style="text-align: center;">
                            <a href="{{url('/admin/view/contact/'.$data->id)}}" title="View"><i class="fa fa-plus"></i></a>
                            <a href="{{url('/admin/delete/contact/'.$data->id)}}" title="delete"><i class="fas fa-trash"></i></a>
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
