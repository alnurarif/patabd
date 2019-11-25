@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">


        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            About Us
              <a href="{{url('admin/terms')}}"> All Terms</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered dataTable"  width="100%">
                <tr>
                  <th>terms</th>
                  <td>:</td>
                  <td>{{$data->terms}}</td>
                </tr>
                <tr>
                  <th>refund</th>
                  <td>:</td>
                  <td>{{$data->refund}}</td>
                </tr>
                <tr>
                  <th>privacy</th>
                  <td>:</td>
                  <td>{{$data->privacy}}</td>
                </tr>
                <tr>
                  <th>data</th>
                  <td>:</td>
                  <td>{{$data->data}}</td>
                </tr>
                <tr>
                  <th>cookies</th>
                  <td>:</td>
                  <td>{{$data->cookies}}</td>
                </tr>
                <tr>
                  <th>guest</th>
                  <td>:</td>
                  <td>{{$data->guest}}</td>
                </tr>
                <tr>
                  <th>partners</th>
                  <td>:</td>
                  <td>{{$data->partners}}</td>
                </tr>
                <tr>
                  <th>Updated</th>
                  <td>:</td>
                  <td>{{$data->updated_at}}</td>
                </tr>
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
