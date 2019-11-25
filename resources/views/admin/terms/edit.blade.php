@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-body">
            <div class="animated fadeIn">
                  <div class="card">
                  <div class="card-header">
                      <strong>Terms Updated</strong>
                  </div>
                  <div class="card-body card-block">
                    <form action="{{url('/admin/terms/1')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @put
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">terms</label>
                            <textarea class="form-control" name="terms">{{$data->terms}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">refund</label>
                            <textarea class="form-control" name="refund">{{$data->refund}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">privacy</label>
                            <textarea class="form-control" name="privacy">{{$data->privacy}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">data</label>
                            <textarea class="form-control" name="data">{{$data->data}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">cookies</label>
                            <textarea class="form-control" name="cookies">{{$data->cookies}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">guest</label>
                            <textarea class="form-control" name="guest">{{$data->guest}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">partners</label>
                            <textarea class="form-control" name="partners">{{$data->partners}}</textarea>
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
