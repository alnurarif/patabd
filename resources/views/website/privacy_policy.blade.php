@extends('layouts.website')
@section('content')

           <section id="privacy_section" style="padding-top: 100px">
             <div class="container">
               <div class="row">
                 <div class="col-md-12">
                   <div class="privacy_content" style="width: 70%">
                     <h2 style="    font-weight: bold;
    padding-bottom: 48px;color: green">Privacy Policy</h2>
                      @foreach($allprivacy as $data)
                     <p style="text-align: justify;">{{$data->privacy}}</p>
                      @endforeach
                   </div>
                 </div>
               </div>
             </div>
           </section>




@endsection
