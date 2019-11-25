@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Room list
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered dataTable"  width="100%">
                <tr>
                  <th>landloard_id</th>
                  <td>:</td>
                  <td>{{$data->landloard_id}}</td>
                </tr>
                <tr>
                  <th>room_type</th>
                  <td>:</td>
                  <td>{{$data->room_type}}</td>
                </tr>
                <tr>
                  <th>city us</th>
                  <td>:</td>
                  <td>{{$data->city}}</td>
                </tr>
                <tr>
                  <th>bedroom</th>
                  <td>:</td>
                  <td>{{$data->bedroom}}</td>
                </tr>
                <tr>
                  <th>bathroom </th>
                  <td>:</td>
                  <td>{{$data->bathroom}}</td>
                </tr>
                <tr>
                  <th>kitchen </th>
                  <td>:</td>
                  <td>{{$data->kitchen}}</td>
                </tr>
                <tr>
                  <th>living_room </th>
                  <td>:</td>
                  <td>{{$data->living_room}}</td>
                </tr>
                <tr>
                  <th>persons </th>
                  <td>:</td>
                  <td>{{$data->persons}}</td>
                </tr>
                <tr>
                  <th>dining_room </th>
                  <td>:</td>
                  <td>{{$data->dining_room}}</td>
                </tr>
                <tr>
                  <th>study_room </th>
                  <td>:</td>
                  <td>{{$data->study_room}}</td>
                </tr>
                <tr>
                  <th>single_bed </th>
                  <td>:</td>
                  <td>{{$data->single_bed}}</td>
                </tr>
                <tr>
                  <th>double_bed </th>
                  <td>:</td>
                  <td>{{$data->double_bed}}</td>
                </tr>
                <tr>
                  <th>wi_fi </th>
                  <td>:</td>
                  <td>{{$data->wi_fi}}</td>
                </tr>
                <tr>
                  <th>cable_tv </th>
                  <td>:</td>
                  <td>{{$data->cable_tv}}</td>
                </tr>
                <tr>
                  <th>central_heating </th>
                  <td>:</td>
                  <td>{{$data->central_heating}}</td>
                </tr>
                <tr>
                  <th>washing_machine </th>
                  <td>:</td>
                  <td>{{$data->washing_machine}}</td>
                </tr>
                <tr>
                  <th>outdoor_area </th>
                  <td>:</td>
                  <td>{{$data->outdoor_area}}</td>
                </tr>
                <tr>
                  <th>bed_linen </th>
                  <td>:</td>
                  <td>{{$data->bed_linen}}</td>
                </tr>
                <tr>
                  <th>accessibility</th>
                  <td>:</td>
                  <td>{{$data->accessibility}}</td>
                </tr>
                <tr>
                  <th>elevator us</th>
                  <td>:</td>
                  <td>{{$data->elevator}}</td>
                </tr>
                <tr>
                  <th>air_conditioning</th>
                  <td>:</td>
                  <td>{{$data->air_conditioning}}</td>
                </tr>
                <tr>
                  <th>address</th>
                  <td>:</td>
                  <td>{{$data->address}}</td>
                </tr>
                <tr>
                  <th>house_number</th>
                  <td>:</td>
                  <td>{{$data->house_number}}</td>
                </tr>
                <tr>
                  <th>extra_info</th>
                  <td>:</td>
                  <td>{{$data->extra_info}}</td>
                </tr>

                <tr>
                  <th>posta_code</th>
                  <td>:</td>
                  <td>{{$data->posta_code}}</td>
                </tr>
                <tr>
                  <th>smoking_allowed</th>
                  <td>:</td>
                  <td>{{$data->smoking_allowed}}</td>
                </tr>
                <tr>
                  <th>pets_allowed</th>
                  <td>:</td>
                  <td>{{$data->pets_allowed}}</td>
                </tr>
                <tr>
                  <th>guests</th>
                  <td>:</td>
                  <td>{{$data->guests}}</td>
                </tr>
                <tr>
                  <th>tenant</th>
                  <td>:</td>
                  <td>{{$data->tenant}}</td>
                </tr>
                <tr>
                  <th>price</th>
                  <td>:</td>
                  <td>{{$data->price}}</td>
                </tr>
                <tr>
                  <th>available</th>
                  <td>:</td>
                  <td>{{$data->available}}</td>
                </tr>
                <tr>
                  <th>title</th>
                  <td>:</td>
                  <td>{{$data->title}}</td>
                </tr>
                <tr>
                  <th>photo</th>
                  <td>:</td>
                  <td>
                    <img src="{{asset('uploads/room/'.$data->image)}}">
                  </td>
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
