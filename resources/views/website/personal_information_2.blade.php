@extends('layouts.website')
@section('content')

          <!-- book now section start -->
           <section id="book_now">
             <div class="container">
               <div class="row">
                 <div class="col-md-6">
                   <div class="book_left information_2">
                      <h3>2. Personal Informations</h3>

                      <form>

                       <div class="form-group">
                          <label for="exampleInputEmail1">First Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Last Name</label>
                          <input type="text" class="form-control" placeholder="First Name">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Email Address</label>
                          <input type="email" class="form-control" placeholder="Email Address">
                        </div>

                        <div class="form-group">
                           <label>Phone Number</label>
                            <input id="phone" name="phone" type="tel" class="form-control" style="width: 107%;w">
                        </div>


                        <div class="form-group">
                          <button class="contact_button">Go to Payment</button>
                        </div>
                      </form>
                   </div>
                 </div>
                 <div class="col-md-1"></div>
                 <div class="col-md-5">
                   <div class="book_right">
                     <img src="img/aaa.png">
                     <h3>Gorgeos 1 Bedroom Apartment near Ragina giovanna</h3>

                     <table>
                       <tr>
                         <td>Entire Place</td>
                         <td>1 Person</td>
                       </tr>

                        <tr>
                         <td>Contact Type Forthnight</td>
                         <td>Ref . 61221</td>
                       </tr>
                     </table>
                     <table>
                       <tr>
                         <td>Move in</td>
                         <td>Move Out</td>
                       </tr>
                      <tr>
                         <td>OCT 31, 2019</td>
                         <td>N 31, 2019</td>
                       </tr>
                     </table>

                    <table>
                       <tr>
                         <td>First Rental Price</td>
                         <td>2900</td>
                       </tr>
                      <tr>
                         <td>One time Service fee</td>
                         <td>500</td>
                       </tr>
                       <tr>
                         <td class="promo">
                           <form>
                             <input type="text" name="" placeholder="Promo Code"><button>Apply</button>
                           </form>
                         </td>
                       </tr>
                     </table>

                     <table>
                       <tr>
                         <td>Total</td>
                         <td>3400</td>
                       </tr>
                     </table>

                   </div>
                   <p>You will only be charged once the landlord accepts your request.</p>

                   <div class="reamaning">
                       <h4>Remaining Payments</h4>
                       <p>These remaining payments are made directly to the landlord.</p>
                     </div>



                     <div class="remaining_bg">
                       <table>
                         <tr>
                           <td>Nov 2019</td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td>1450</td>
                         </tr>

                         <tr>
                           <td style="font-weight: bold">Total</td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td style="font-weight: bold;">1450</td>
                         </tr>

                       </table>
                     </div>

                 </div>

               </div>
               </div>
             </div>
           </section>





      @endsection
