@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-body">
            <div class="animated fadeIn">
                  <div class="card">
                  <div class="card-header">
                      <strong>Aboutus Updated</strong>
                  </div>
                  <div class="card-body card-block">
                    <form action="{{url('/admin/updated/about')}}" method="post" enctype="multipart/form-data">
                      @csrf
                          <div class="form-group">
                            <textarea class="form-control" name="aboutus">{{$data->aboutus}}</textarea>
                          </div>

                          <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Submit
                          </button>
                      </form>
                  </div>
                  </div>
            </div><!-- .animated -->
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
