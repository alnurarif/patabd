@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
          <div class="breadcrumb">
              <div class="col-sm-4">
                  <div class="page-header float-left" style="margin-top: 5px;">
                      <div class="page-title">
                          <a href="{{url('admin/adduser')}}" class="btn btn-primary"><i class="fa fa-plus"></i>  Add User</a>
                      </div>
                  </div>
              </div>
          </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            All User Information
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                      <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 163px;">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Email</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 118px;">Role</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 100px;">Time</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 54px;">Maage</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($alluser as $data)
                      <tr role="row" class="even">
                          <td>{{$data->name}}</td>
                          <td>{{$data->email}}</td>
                          <td>----------</td>
                          <td>{{$data->created_at}}</td>
                          <td style="text-align: center;">
                            <a href="#" title="View"><i class="fa fa-plus"></i></a>
                            <a href="#" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="#" title="Delete"><i class="fa fa-trash"></i></a>
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
