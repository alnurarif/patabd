@extends('layouts.website')
@section('content')

<!-- book now section start -->
           <section id="book_now">
             <div class="container">
               <div class="row">
                 <div class="col-md-7">
                   <div class="book_left">

                     <h2>Complete your Booking Request</h2>

                       <h3>1 . Important Information</h3>
                       <p>Please check all the rules and conditions before proceeding to check-out</p>


                        <section class="regular tr">
                          <div>
                            <div class="book_left_slide">
                              <img src="{{asset('contents/website')}}/img/home.png">
                               <h4>House Rules</h4>
                               <p>About this place </p>
                               <ul>
                                 <li>
                                   @if($room_type->pets_allowed ==1)
                                   <i class="fa fa-check" aria-hidden="true"></i><span> Pets are allowed</span>
                                   @else
                                   <i class="fa fa-times" aria-hidden="true"></i><span> Pets are not allowed</span>
                                   @endif
                                 </li>

                                 <li>
                                   @if($room_type->smoking_allowed ==1)
                                   <i class="fa fa-check" aria-hidden="true"></i><span> Smoking is allowed</span>
                                   @else
                                   <i class="fa fa-times" aria-hidden="true"></i><span>Smoking is not allowed</span>
                                   @endif
                                 </li>

                                 <li>
                                   @if($room_type->guests ==1)
                                   <i class="fa fa-check" aria-hidden="true"></i><span> Overnight guest allowed</span>
                                   @else
                                   <i class="fa fa-times" aria-hidden="true"></i><span>Overnight guest not allowed</span>
                                   @endif
                                 </li>



                               </ul>
                             </div>
                          </div>

                          <div>
                            <div class="book_left_slide">
                              <img src="{{asset('contents/website')}}/img/watch-605-1163813.png">
                               <h4>After resqust is send</h4>
                               <p>What's next </p>
                               <ul>
                                 <li><span>The landlord will answer within 24 hours.</span></li>

                                  <li><span>We will only charge your credit card, debit card or PayPal account after your request is accepted</li>

                                   <li><span style="font-weight: 600;font-size: 15px">Once your request is accedted, the place is yours!</span></li>

                               </ul>
                             </div>
                          </div>

                          <div>
                            <div class="book_left_slide">
                              <img src="{{asset('contents/website')}}/img/security-shield-icon-7.jpg">
                               <h4>When you move in</h4>
                               <p>October 31st 2019</p>
                               <ul>
                                 <li><span>You will only be charged once the landlord accepts your request</span></li>

                                   <li>
                                     <table>
                                       <tr>
                                         <td>Security Deposit</td>
                                         <td>1000</td>
                                       </tr>
                                     </table>
                                   </li>

                               </ul>
                             </div>
                          </div>


                          <div>
                            <div class="book_left_slide">

                              <div class=""></div>

                              <img src="{{asset('contents/website')}}/img/hhhh.png" style="width: 304px;">


                               <h4>When you move out</h4>
                               <p>November 28th, 2019</p>
                               <ul>
                                 <li><span>If you keep the place in perfect condition and move out on the agreed date, your landlord should give you your deposit back.</span></li>

                                 <li><span>If you leave earlier than expected, the landlord may be entitled to keep it.</span></li>

                                   <li>
                                     <table>
                                       <tr>
                                         <td>Security Deposit</td>
                                         <td>1000</td>
                                       </tr>
                                     </table>
                                   </li>

                               </ul>
                             </div>
                          </div>


                        </section>



                  <div class="proceed">
                    <div class="text-center">
                      <button class="contact_button text-center"><a href="personal_information.html" style="    color: #fff;">Proceed To Check out</a></button>
                    </div>
                    <p>2 . Personal Details</p>
                    <p>3 . Payment Details</p>
                  </div>




                   </div>
                 </div>
                 <div class="col-md-1"></div>
                 <div class="col-md-4">
                   <div class="book_right">
                     <img src="{{asset('contents/website')}}/img/aaa.png">
                     <h3>Gorgeos 1 Bedroom Apartment near Ragina giovanna</h3>

                     <table>
                       <tr>
                         <td>Entire Place</td>
                         <td>1 Person</td>
                       </tr>

                        <tr>
                         <td>Contact Type <a href="contract_type.html">Forthnight</a></td>
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
           </section>






  <script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value > 1) {
          value = value - 1;
        } else {
          value = 0;
        }

        $input.val(value);

      });

      $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
          value = value + 1;
        } else {
          value =100;
        }

        $input.val(value);
      });

      $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });
  </script>


    <script>
    function myFunction() {
      document.getElementById("panel").style.display = "block";
    }
    </script>
		<!-- JS here -->


      <script type="text/javascript">
        $(document).on('ready', function() {

          $(".regular").slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1

          });

        });
      </script>

@endsection
