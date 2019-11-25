@extends('layouts.website')
@section('content')

           <section id="contact_section">
             <div  class="container">
               <div class="row">
                 <div class="col-md-6">
                   <div class="contact_left">
                     <h3>Contact Customer Support</h3>

                     <p>Depending on the topic you choose, we will assign it to a specialised Uniplaces agent.After carefully analysing your case, we will contact you via email or phone call.</p>

                     @if(session()->has('success'))
                      <script>
                       swal({
                          title: "Done",
                          text: "Massage sent successfully",
                          icon: "success",
                          button: "OK",
                        });
                      </script>
                     @endif

                     <form method="post" action="{{url('/contact/submit')}}">
                          @csrf
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">*Tenant / Customer or Landlord</label>
                            <select class="form-control" name="tenant" id="exampleFormControlSelect1" required>
                              <option value="None">None</option>
                              <option value="Tenant">Tenant / Customer</option>
                              <option value="Landlord">Landlord</option>
                            </select>
                          </div>




                          <div class="form-group">
                            <label for="exampleFormControlSelect1">*With</label>
                            <select class="form-control" name="withh" id="exampleFormControlSelect1" required>
                              <option value="None">None</option>
                              <option value="Booking">Booking - (For Tenant/Customer)</option>
                              <option value="Not Booking yet">Not Booking yet - (For Tenant/Customer)</option>

                              <option value="Published Listing">Published Listing  - (for landlord)</option>
                              <option value="No Listing Yet">No Listing Yet - (for landlord) </option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlSelect1">*Topic</label>

                            <input type="text" name="topic" class="form-control" placeholder="Write your topic here" required>
                          </div>

                         <div class="form-group">
                            <label for="exampleFormControlSelect1">*Subtopic</label>
                            <input type="text" name="subtopic" class="form-control" placeholder="Write your subtopic here" required>
                          </div>


                        <div class="form-group">
                            <label for="exampleFormControlSelect1">*Country (Destination or Listing Location)</label>

                            <select class="form-control" name="country" id="exampleFormControlSelect1" required>
                              <option value="None">None</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="India">India</option>
                              <option value="Pakistan">Pakistan</option>
                              <option value="Vutan">Vutan</option>
                            </select>
                          </div>


                        <div class="form-group">
                          <label for="exampleInputEmail1">*Email (Preferably the email with which you registered on our platform)</label>

                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" required>
                        </div>

                       <div class="form-group">
                          <label for="exampleInputEmail1">*Phone</label>

                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" placeholder="Write your phone number with country code" required>
                        </div>


                        <div class="form-group">
                          <label for="exampleInputEmail1">*Subject</label>

                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="subject" placeholder="Enter your subject" required>
                        </div>


                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">*Description (Please add any necessary reference numbers such as Booking and/or Listing ID)</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
                      </div>

                        <button type="submit" class="contact_button">Submit</button>
                      </form>


                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="maps">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6033981150067!2d90.37097591514603!3d23.797133292905954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cd6d3bc82d%3A0x386b98707aa038c!2sInitux%20Software%20Limited!5e0!3m2!1sen!2sbd!4v1572109435792!5m2!1sen!2sbd" width="600" height="450" frameborder="0" allowfullscreen="">
                     </iframe>
                   </div>
                   <div class="address">
                    <h3>Find Us</h3>
                     <ul>
                       <li>
                          <i class="fa fa-map-marker" aria-hidden="true"> </i>
                          <span>East Shewrapra,Mirpur,Dhaka 1216</span>
                        </li>

                        <li>
                          <i class="fa fa-phone" aria-hidden="true"></i>
                          <span>+8801679-464940</span>
                        </li>

                        <li>
                         <i class="fa fa-envelope" aria-hidden="true"></i>
                         <span> contact@patabd.com</span>
                        

                        </li>


                     </ul>
                   </div>
                 </div>
               </div>
             </div>
           </section>

@endsection