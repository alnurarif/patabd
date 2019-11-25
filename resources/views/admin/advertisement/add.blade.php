@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-body">
            <div class="animated fadeIn">
                  <div class="card">
                  <div class="card-header">
                      <strong>Advertisement Post</strong>
                  </div>
                  <div class="card-body card-block">
                    <form action="{{url('admin/advertisement/store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Link</label>
                        <input type="text" id="nf-email" name="link" value="{{$data->link}}" class="form-control">
                        <input type="hidden" id="nf-email" name="id" value="{{$data->id}}" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Image</label></br>
                        <img src="{{asset('uploads/advertisement/'.$data->image)}}" style="width:150px">
                        @if($data->id ==1)
                        <p>size:570,190px</p>
                        @else
                        <p>size:255,132</p>
                        @endif
                        <input type="file" name="pic"class="form-control">
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
