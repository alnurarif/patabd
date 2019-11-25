@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-body">
            <div class="animated fadeIn">
                  <div class="card">
                  <div class="card-header">
                      <strong>Add News</strong>
                  </div>
                  <div class="card-body card-block">
                    <form action="{{url('/admin/news')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Title</label>
                        <input type="text" id="nf-email" name="title" placeholder="Enter category title.." class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Subtitle</label>
                        <input type="text" id="nf-email" name="subtitle" placeholder="Enter category title.." class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nf-email" class=" form-control-label">details</label>
                        <textarea class="form-control" name="details"></textarea>
                        <textarea class="summernote" name="discription" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Image</label>
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
