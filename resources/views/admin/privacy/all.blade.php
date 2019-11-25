@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Privacy
          </div>
          <div class="card-body">
            <div class="table-responsive">
              @if(session()->has('success'))
                         <script>
                          swal({
                             title: "Good job!",
                             text: "You privacy updated",
                             icon: "success",
                             button: "Aww yiss!",
                           });
                         </script>
                        @endif
              <table class="table table-bordered dataTable"  width="100%">
                  <thead>
                      <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173px;">Privacy </th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 54px;">Time</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 40px;text-align:center;">Manage</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($allprivacy as $data)
                      <tr role="row" class="even">
                          <td>{{str_limit($data->privacy,100)}}</td>
                          <td>{{$data->updated_at}}</td>
                          <td style="text-align: center;">
                            <a href="{{url('/admin/view/privacy/'.$data->id)}}" title="View"><i class="fa fa-plus"></i></a>
                            <a href="{{url('/admin/edit/privacy/'.$data->id)}}" title="Edit"><i class="fas fa-edit"></i></a>
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
