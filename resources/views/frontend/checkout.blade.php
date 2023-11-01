<x-header page="contact" active="cart"/>


  <section class="checkoutsec py-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                <div class="cform">
                  <h5 class="mb-3"><span class="pr-3">Billing Address</span></h5>
                  <div class="mb-0 mb-md-5">
                    <form action="{{ url('checkout') }}" method="POST" enctype="multipart/form-data" onsubmit="return valid()">
                    @csrf
                     <div class="row">
                        <div class="col-md-6 form-group">
                           <label>First Name</label>
                           <input class="form-control" type="text" placeholder="First Name" name="fname" id="fname"  value="{{ old('fname') }}" >
                           @if ($errors->has('fname'))
										<span class="text-danger">{{ $errors->first('fname') }}</span>
							      @endif
                        </div>
                        <div class="col-md-6 form-group">
                           <label>Last Name</label>
                           <input class="form-control" type="text" placeholder="Last Name" name="lname" id="lname"  value="{{ old('lname') }}">
                           @if ($errors->has('lname'))
										<span class="text-danger">{{ $errors->first('lname') }}</span>
							      @endif
                        </div>
                        <div class="col-md-6 form-group">
                           <label>E-mail</label>
                           <input class="form-control" type="email" placeholder="E-mail" name="email_id" id="email_id"  value="{{ old('email_id') }}">
                             @if ($errors->has('email_id'))
										<span class="text-danger">{{ $errors->first('email_id') }}</span>
							      @endif
                        </div>
                        <div class="col-md-6 form-group">
                           <label>Mobile No</label>
                           <input class="form-control" type="number" placeholder="Mobile No" name="mobile_no" id="mobile_no"  value="{{ old('mobile_no') }}">
                           @if ($errors->has('mobile_no'))
										<span class="text-danger">{{ $errors->first('mobile_no') }}</span>
							      @endif
                        </div>
                        <div class="col-md-6 form-group">
                           <label>Address Line 1</label>
                           <input class="form-control" type="text" placeholder="Address Line 1" name="address1" id="address1"  value="{{ old('address1') }}">
                            @if ($errors->has('address1'))
										<span class="text-danger">{{ $errors->first('address1') }}</span>
							      @endif
                        </div>
                        <div class="col-md-6 form-group">
                           <label>Address Line 2</label>
                           <input class="form-control" type="text" placeholder="Address Line 2" name="address2" id="address2"  value="{{ old('address2') }}">
                            @if ($errors->has('address2'))
										<span class="text-danger">{{ $errors->first('address2') }}</span>
							      @endif
                        </div>
                           <div class="col-md-6 form-group">
                           <label>City</label>
                           <input class="form-control" type="text" placeholder="City" name="city" id="city"  value="{{ old('city') }}">
                            @if ($errors->has('city'))
										<span class="text-danger">{{ $errors->first('city') }}</span>
							      @endif
                        </div>
                        <div class="col-md-6 form-group">
                           <label>Country</label>
                           <select type="text" class="form-control" name="country" id="country"  value="{{ old('country') }}">
                               <option value="" selected>Select a country</option>
                            
                           </select>
                            @if ($errors->has('country'))
										<span class="text-danger">{{ $errors->first('country') }}</span>
							      @endif
                        </div>
                     
                        <div class="col-md-6 form-group">
                           <label>State</label>
                           <input class="form-control" type="text" placeholder="State" name="state" id="state"  value="{{ old('state') }}">
                            @if ($errors->has('state'))
										<span class="text-danger">{{ $errors->first('state') }}</span>
							      @endif
                        </div>
                        <div class="col-md-6 form-group">
                           <label>ZIP Code</label>
                           <input class="form-control" type="text" placeholder="ZIP Code" name="pincode" id="pincode"  value="{{ old('pincode') }}">
                            @if ($errors->has('pincode'))
										<span class="text-danger">{{ $errors->first('pincode') }}</span>
							      @endif
                        </div>
                        <div class="col-md-6">
                            <div class="arrowprt">
                              <a href="{{ url('christian-music-free') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> CONTINUE TO SHOPPING</a>
                            </div>
                        </div>
                        <!--<div class="col-md-6 text-right">-->
                        <!--    <div class="arrowprt">-->
                        <!--     <a href="{{ url('cart') }}">RETURN TO CART <i class="fa fa-arrow-right" aria-hidden="true"></i></a>-->
                        <!--    </div> -->
                        <!--</div>-->
                     </div>
                   
                  </div>
                 </div> 
               </div>
               <div class="col-lg-4">
                 <div class="cform mt-3 mt-md-0">
                  <h5 class="mb-3"><span class="pr-3">Order Total</span></h5>
                  <div class="mb-4" id="order">
                     <!-- <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        <div class="d-flex justify-content-between">
                           <p>Product Name 1</p>
                           <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                           <p>Product Name 2</p>
                           <p>$150</p>
                        </div>
                     </div>
                     <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                           <h6>Subtotal</h6>
                           <h6>$300</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                           <h6 class="font-weight-medium">Shipping</h6>
                           <h6 class="font-weight-medium">$10</h6>
                        </div>
                     </div>
                     <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                           <h5>Total</h5>
                           <h5>$310</h5>
                        </div>
                     </div> -->
                  </div>
                  <div class="mb-5">
                     <h5 class="mb-3"><span class="pr-3">Payment</span></h5>
                     <div class="p-30">
                        <div class="form-group">
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="payment_option" id="paypal" value="Paypal">
                              <label class="custom-control-label" for="paypal">Paypal</label>
                           </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="payment_option" id="stripe" value="Stripe">
                              <label class="custom-control-label" for="stripe"> Credit/Debit Cards</label>
                             <!--  <div class="card-details mt-4">-->
                             <!--   <div class="row">-->
                             <!--       <div class="col-md-12">-->
                             <!--       <div class="mb-3">-->
                             <!--           <label>Card Number</label>-->
                             <!--           <input class="form-control" type="text" placeholder="Card Number">    -->
                             <!--       </div>-->
                             <!--       </div>-->
                             <!--       <div class="col-md-6">-->
                             <!--       <div class="mb-3">-->
                             <!--           <label>Expire Date</label>-->
                             <!--           <input class="form-control" type="text" placeholder="Expire Date">    -->
                             <!--       </div>-->
                             <!--       </div>-->
                             <!--       <div class="col-md-6">-->
                             <!--       <div class="mb-3">-->
                             <!--           <label>CVV</label>-->
                             <!--           <input class="form-control" type="text" placeholder="CVV">    -->
                             <!--       </div>-->
                             <!--       </div>-->
                             <!--   </div> -->
                             <!--</div> -->
                           </div>
                        </div><!-- 
                        <div class="form-group">
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                              <label class="custom-control-label" for="directcheck">Direct Check</label>
                           </div>
                        </div>
                        <div class="form-group mb-4">
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                              <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                           </div>
                        </div> -->
                        <button class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                     </div>
                      </form> 
                  </div>
                 </div> 
               </div>
            </div>
         </div>
      </section>




<x-footer page="contact"/>
<script>

$(document).ready(function(){		
		$.ajax({
               type:'GET',
               url:'/order-summery-checkout',
               success:function(data) {
				  $('#order').html(data);
                 // console.log(data);
				  var	spl_discount = $('#spl_discount').val();
				  var totalamt =$('#total_amt').val();
				  var payamt = $('#pay_amt').val();
    
				  $('#sspl_discount').val(spl_discount);
				  $('#ttotal_amt').val(totalamt);
				  $('#ppay_amt').val(payamt);
				  if(totalamt == 0){
					$('#processtopay').css("visibility", "hidden");
				  }else{
					$('#processtopay').css("visibility", "visible");
				  }
               }
            });



            const myArray = [
                {name: "United States", code: "US"},
                 {name: "Canada", code: "CA"},
				      {name: "Afghanistan", code: "AF"},
                  {name: "land Islands", code: "AX"},
                  {name: "Albania", code: "AL"},
                  {name: "Algeria", code: "DZ"},
                  {name: "American Samoa", code: "AS"},
                  {name: "AndorrA", code: "AD"},
                  {name: "Angola", code: "AO"},
                  {name: "Anguilla", code: "AI"},
                  {name: "Antarctica", code: "AQ"},
                  {name: "Antigua and Barbuda", code: "AG"},
                  {name: "Argentina", code: "AR"},
                  {name: "Armenia", code: "AM"},
                  {name: "Aruba", code: "AW"},
                  {name: "Australia", code: "AU"},
                  {name: "Austria", code: "AT"},
                  {name: "Azerbaijan", code: "AZ"},
                  {name: "Bahamas", code: "BS"},
                  {name: "Bahrain", code: "BH"},
                  {name: "Bangladesh", code: "BD"},
                  {name: "Barbados", code: "BB"},
                  {name: "Belarus", code: "BY"},
                  {name: "Belgium", code: "BE"},
                  {name: "Belize", code: "BZ"},
                  {name: "Benin", code: "BJ"},
                  {name: "Bermuda", code: "BM"},
                  {name: "Bhutan", code: "BT"},
                  {name: "Bolivia", code: "BO"},
                  {name: "Bosnia and Herzegovina", code: "BA"},
                  {name: "Botswana", code: "BW"},
                  {name: "Bouvet Island", code: "BV"},
                  {name: "Brazil", code: "BR"},
                  {name: "British Indian Ocean Territory", code: "IO"},
                  {name: "Brunei Darussalam", code: "BN"},
                  {name: "Bulgaria", code: "BG"},
                  {name: "Burkina Faso", code: "BF"},
                  {name: "Burundi", code: "BI"},
                  {name: "Cambodia", code: "KH"},
                  {name: "Cameroon", code: "CM"},
                 
                  {name: "Cape Verde", code: "CV"},
                  {name: "Cayman Islands", code: "KY"},
                  {name: "Central African Republic", code: "CF"},
                  {name: "Chad", code: "TD"},
                  {name: "Chile", code: "CL"},
                  {name: "China", code: "CN"},
                  {name: "Christmas Island", code: "CX"},
                  {name: "Cocos (Keeling) Islands", code: "CC"},
                  {name: "Colombia", code: "CO"},
                  {name: "Comoros", code: "KM"},
                  {name: "Congo", code: "CG"},
                  {name: "Congo, The Democratic Republic of the", code: "CD"},
                  {name: "Cook Islands", code: "CK"},
                  {name: "Costa Rica", code: "CR"},
                  {name: "Cote D\"Ivoire", code: "CI"},
                  {name: "Croatia", code: "HR"},
                  {name: "Cuba", code: "CU"},
                  {name: "Cyprus", code: "CY"},
                  {name: "Czech Republic", code: "CZ"},
                  {name: "Denmark", code: "DK"},
                  {name: "Djibouti", code: "DJ"},
                  {name: "Dominica", code: "DM"},
                  {name: "Dominican Republic", code: "DO"},
                  {name: "Ecuador", code: "EC"},
                  {name: "Egypt", code: "EG"},
                  {name: "El Salvador", code: "SV"},
                  {name: "Equatorial Guinea", code: "GQ"},
                  {name: "Eritrea", code: "ER"},
                  {name: "Estonia", code: "EE"},
                  {name: "Ethiopia", code: "ET"},
                  {name: "Falkland Islands (Malvinas)", code: "FK"},
                  {name: "Faroe Islands", code: "FO"},
                  {name: "Fiji", code: "FJ"},
                  {name: "Finland", code: "FI"},
                  {name: "France", code: "FR"},
                  {name: "French Guiana", code: "GF"},
                  {name: "French Polynesia", code: "PF"},
                  {name: "French Southern Territories", code: "TF"},
                  {name: "Gabon", code: "GA"},
                  {name: "Gambia", code: "GM"},
                  {name: "Georgia", code: "GE"},
                  {name: "Germany", code: "DE"},
                  {name: "Ghana", code: "GH"},
                  {name: "Gibraltar", code: "GI"},
                  {name: "Greece", code: "GR"},
                  {name: "Greenland", code: "GL"},
                  {name: "Grenada", code: "GD"},
                  {name: "Guadeloupe", code: "GP"},
                  {name: "Guam", code: "GU"},
                  {name: "Guatemala", code: "GT"},
                  {name: "Guernsey", code: "GG"},
                  {name: "Guinea", code: "GN"},
                  {name: "Guinea-Bissau", code: "GW"},
                  {name: "Guyana", code: "GY"},
                  {name: "Haiti", code: "HT"},
                  {name: "Heard Island and Mcdonald Islands", code: "HM"},
                  {name: "Holy See (Vatican City State)", code: "VA"},
                  {name: "Honduras", code: "HN"},
                  {name: "Hong Kong", code: "HK"},
                  {name: "Hungary", code: "HU"},
                  {name: "Iceland", code: "IS"},
                  {name: "India", code: "IN"},
                  {name: "Indonesia", code: "ID"},
                  {name: "Iran, Islamic Republic Of", code: "IR"},
                  {name: "Iraq", code: "IQ"},
                  {name: "Ireland", code: "IE"},
                  {name: "Isle of Man", code: "IM"},
                  {name: "Israel", code: "IL"},
                  {name: "Italy", code: "IT"},
                  {name: "Jamaica", code: "JM"},
                  {name: "Japan", code: "JP"},
                  {name: "Jersey", code: "JE"},
                  {name: "Jordan", code: "JO"},
                  {name: "Kazakhstan", code: "KZ"},
                  {name: "Kenya", code: "KE"},
                  {name: "Kiribati", code: "KI"},
                  {name: "Korea, Democratic People\"S Republic of", code: "KP"},
                  {name: "Korea, Republic of", code: "KR"},
                  {name: "Kuwait", code: "KW"},
                  {name: "Kyrgyzstan", code: "KG"},
                  {name: "Lao People\"S Democratic Republic", code: "LA"},
                  {name: "Latvia", code: "LV"},
                  {name: "Lebanon", code: "LB"},
                  {name: "Lesotho", code: "LS"},
                  {name: "Liberia", code: "LR"},
                  {name: "Libyan Arab Jamahiriya", code: "LY"},
                  {name: "Liechtenstein", code: "LI"},
                  {name: "Lithuania", code: "LT"},
                  {name: "Luxembourg", code: "LU"},
                  {name: "Macao", code: "MO"},
                  {name: "Macedonia, The Former Yugoslav Republic of", code: "MK"},
                  {name: "Madagascar", code: "MG"},
                  {name: "Malawi", code: "MW"},
                  {name: "Malaysia", code: "MY"},
                  {name: "Maldives", code: "MV"},
                  {name: "Mali", code: "ML"},
                  {name: "Malta", code: "MT"},
                  {name: "Marshall Islands", code: "MH"},
                  {name: "Martinique", code: "MQ"},
                  {name: "Mauritania", code: "MR"},
                  {name: "Mauritius", code: "MU"},
                  {name: "Mayotte", code: "YT"},
                  {name: "Mexico", code: "MX"},
                  {name: "Micronesia, Federated States of", code: "FM"},
                  {name: "Moldova, Republic of", code: "MD"},
                  {name: "Monaco", code: "MC"},
                  {name: "Mongolia", code: "MN"},
                  {name: "Montenegro", code: "ME"},
                  {name: "Montserrat", code: "MS"},
                  {name: "Morocco", code: "MA"},
                  {name: "Mozambique", code: "MZ"},
                  {name: "Myanmar", code: "MM"},
                  {name: "Namibia", code: "NA"},
                  {name: "Nauru", code: "NR"},
                  {name: "Nepal", code: "NP"},
                  {name: "Netherlands", code: "NL"},
                  {nam: "Netherlands Antilles", code: "AN"},
                  {name: "New Caledonia", code: "NC"},
                  {name: "New Zealand", code: "NZ"},
                  {name: "Nicaragua",code: "NI"},
                  {name: "Niger", code: "NE"},
                  {name: "Nigeria", code: "NG"},
                  {name: "Niue", code: "NU"},
                  {name: "Norfolk Island", code: "NF"},
                  {name: "Northern Mariana Islands", code: "MP"},
                  {name: "Norway", code: "NO"},
                  {name: "Oman", code: "OM"},
                  {name: "Pakistan", code: "PK"},
                  {name: "Palau", code: "PW"},
                  {name: "Palestinian Territory, Occupied", code: "PS"},
                  {name: "Panama", code: "PA"},
                  {name: "Papua New Guinea", code: "PG"},
                  {name: "Paraguay", code: "PY"},
                  {name: "Peru", code: "PE"},
                  {name: "Philippines", code: "PH"},
                  {name: "Pitcairn", code: "PN"},
                  {name: "Poland", code: "PL"},
                  {name: "Portugal", code: "PT"},
                  {name: "Puerto Rico", code: "PR"},
                  {name: "Qatar", code: "QA"},
                  {name: "Reunion", code: "RE"},
                  {name: "Romania", code: "RO"},
                  {name: "Russian Federation", code: "RU"},
                  {name: "RWANDA", code: "RW"},
                  {name: "Saint Helena", code: "SH"},
                  {name: "Saint Kitts and Nevis", code: "KN"},
                  {name: "Saint Lucia", code: "LC"},
                  {name: "Saint Pierre and Miquelon", code: "PM"},
                  {name: "Saint Vincent and the Grenadines", code: "VC"},
                  {name: "Samoa", code: "WS"},
                  {name: "San Marino", code: "SM"},
                  {name: "Sao Tome and Principe", code: "ST"},
                  {name: "Saudi Arabia", code: "SA"},
                  {name: "Senegal", code: "SN"},
                  {name: "Serbia", code: "RS"},
                  {name: "Seychelles", code: "SC"},
                  {name: "Sierra Leone", code: "SL"},
                  {name: "Singapore", code: "SG"},
                  {name: "Slovakia", code: "SK"},
                  {name: "Slovenia", code: "SI"},
                  {name: "Solomon Islands", code: "SB"},
                  {name: "Somalia", code: "SO"},
                  {name: "South Africa", code: "ZA"},
                  {name: "South Georgia and the South Sandwich Islands", code: "GS"},
                  {name: "Spain", code: "ES"},
                  {name: "Sri Lanka", code: "LK"},
                  {name: "Sudan", code: "SD"},
                  {name: "Suriname", code: "SR"},
                  {name: "Svalbard and Jan Mayen", code: "SJ"},
                  {name: "Swaziland", code: "SZ"},
                  {name: "Sweden", code: "SE"},
                  {name: "Switzerland", code: "CH"},
                  {name: "Syrian Arab Republic", code: "SY"},
                  {name: "Taiwan, Province of China", code: "TW"},
                  {name: "Tajikistan", code: "TJ"},
                  {name: "Tanzania, United Republic of", code: "TZ"},
                  {name: "Thailand", code: "TH"},
                  {name: "Timor-Leste", code: "TL"},
                  {name: "Togo", code: "TG"},
                  {name: "Tokelau", code: "TK"},
                  {name: "Tonga", code: "TO"},
                  {name: "Trinidad and Tobago", code: "TT"},
                  {name: "Tunisia", code: "TN"},
                  {name: "Turkey", code: "TR"},
                  {name: "Turkmenistan", code: "TM"},
                  {name: "Turks and Caicos Islands", code: "TC"},
                  {name: "Tuvalu", code: "TV"},
                  {name: "Uganda", code: "UG"},
                  {name: "Ukraine", code: "UA"},
                  {name: "United Arab Emirates", "code": "AE"},
                  {name: "United Kingdom", code: "GB"},
                  
                  {name: "United States Minor Outlying Islands", code: "UM"},
                  {name: "Uruguay", code: "UY"},
                  {name: "Uzbekistan", code: "UZ"},
                  {name: "Vanuatu", code: "VU"},
                  {name: "Venezuela", code: "VE"},
                  {name: "Viet Nam", code: "VN"},
                  {name: "Virgin Islands, British", code: "VG"},
                  {name: "Virgin Islands, U.S.", code: "VI"},
                  {name: "Wallis and Futuna", code: "WF"},
                  {name: "Western Sahara", code: "EH"},
                  {name: "Yemen", code: "YE"},
                  {name: "Zambia", code: "ZM"},
                  {name: "Zimbabwe", code: "ZW"},
			];
					 //console.log(myArray);
						var input = "" ;
					$(myArray).each(function(i,v ) {
						  input = input + "<option  value="+v.code+" >"+v.name+"</option>";
						});
                   console.log(input);
						$("#country").html(input);
		
	});



    function valid() {
		
		    if ($("#fname").val() == '') {
                 toastr.error('Please Enter First name!!');
                $("#fname").focus();
                return false;
            }else if ($("#lname").val() == '') {
                 toastr.error('Please Enter Name!!');
                $("#lname").focus();
                return false;
            }else if ($("#email_id").val() == '') {
                 toastr.error('Please Enter Email ID!!');
                $("#email_id").focus();
                return false;
            }
            // else if ($("#mobile_no").val() == '') {
            //      toastr.error('Please Enter Mobile no!!');
            //     $("#mobile_no").focus();
            //     return false;
            // }
            else if ($("#address1").val() == '') {
                 toastr.error('Please Enter Address1!!');
                $("#address1").focus();
                return false;
            }else if ($("#country").val() == '') {
                 toastr.error('Please select a Country!!');
                $("#country").focus();
                return false;
            }else if ($("#city").val() == '') {
                 toastr.error('Please Enter City!!');
                $("#city").focus();
                return false;
            }else if ($("#state").val() == '') {
                 toastr.error('Please Enter State!!');
                $("#state").focus();
                return false;
            }else if ($("#pincode").val() == '') {
                 toastr.error('Please Enter Zipcode!!');
                $("#pincode").focus();
                return false;
            }else if ($("input[name=payment_option]").is(':checked') == false) {
                toastr.error('Please select a payment option!!');
                $("input[name=payment_option]").focus();
                return false;
            }
        }


</script>