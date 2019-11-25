@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
          <div class="breadcrumb">
          </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Contact Message
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered dataTable"  width="100%">
                <tr>
                  <th>landlord</th>
                  <td>:</td>
                  <td>{{$data->landlord}}</td>
                </tr>
                <tr>
                  <th>with</th>
                  <td>:</td>
                  <td>{{$data->withh}}</td>
                </tr>
                <tr>
                  <th>topic</th>
                  <td>:</td>
                  <td>{{$data->topic}}</td>
                </tr>
                <tr>
                  <th>subtopic</th>
                  <td>:</td>
                  <td>{{$data->subtopic}}</td>
                </tr>
                <tr>
                  <th>country</th>
                  <td>:</td>
                  <td>{{$data->country}}</td>
                </tr>
                <tr>
                  <th>email</th>
                  <td>:</td>
                  <td>{{$data->email}}</td>
                </tr>
                <tr>
                  <th>subject</th>
                  <td>:</td>
                  <td>{{$data->subject}}</td>
                </tr>
                <tr>
                  <th>phone</th>
                  <td>:</td>
                  <td>{{$data->phone}}</td>
                </tr>
                <tr>
                  <th>message</th>
                  <td>:</td>
                  <td>{{$data->message}}</td>
                </tr>
                <tr>
                  <th>Time</th>
                  <td>:</td>
                  <td>{{$data->created_at}}</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Time {{$data->updated_at}}</div>
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
