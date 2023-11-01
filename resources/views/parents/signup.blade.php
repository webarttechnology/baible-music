<x-headercomponent title="Klicsports | Parents Registration" />

<div class="rgb-content-wrap">
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 paynow">

                    <div>
                        <div class="wrapper wrapper2 rgb-white-style pb-5">
                            <form id="campformData" class="card-body" tabindex="500" method="post"
                                action="{{ route('parent.signup.action') }}" class="form-horizontal" onsubmit="return valid();">
                                @csrf

                                <h3 class="featured-title text-center fa-2x mb-5">Parent Registration</h3>
                                  <span style="color:green" id="successmsg">{{ Session::get('successmsg') }}</span>
                                <h6 class="featured-title mt-5 mb-4">Parents/Guardians information</h6>
                                <div class="px-2 turnamentContant">
                                  
                                    <span style="color:red" id="errmsg">{{ Session::get('errmsg') }}</span>
                                </div>

                                <div class="row justify-content-center">
                                   	<div class="row mt-3">
												<div class="col-md-6">
													<label> Parents first Name<span style="color:red">*</span> </label>
													<input class="form-control" placeholder="First Name"  type="text" name="parents_fname" id="parents_fname"  value="{{ old('parents_fname') }}"  >
                                                    @if ($errors->has('parents_fname'))
                                                        <span class="text-danger">{{ $errors->first('parents_fname') }}</span>
                                                    @endif
												</div>
												<div class="col-md-6">
													<label> Parents Last Name<span style="color:red">*</span> </label>
														<input class="form-control" placeholder="Last Name"  type="text" name="parents_lname" id="parents_lname"  value="{{ old('parents_lname') }}" >
                                                          @if ($errors->has('parents_lname'))
                                                            <span class="text-danger">{{ $errors->first('parents_lname') }}</span>
                                                         @endif
												</div>
												
												<div class="col-md-4 mt-3">
													<label>City<span style="color:red">*</span> </label>
													<input class="form-control" placeholder="City"  type="text" name="city" id="city"  value="{{ old('city') }}" >
                                                      @if ($errors->has('city'))
                                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                                         @endif
												</div>
												<div class="col-md-4 mt-3">
													<label>State<span style="color:red">*</span> </label>
													<input class="form-control" placeholder="State"  type="text" name="state" id="state"   value="{{ old('state') }}">
                                                      @if ($errors->has('state'))
                                                            <span class="text-danger">{{ $errors->first('state') }}</span>
                                                      @endif
												</div>
												<div class="col-md-4 mt-3">
													<label> Zip<span style="color:red">*</span> </label>
													<input class="form-control" placeholder="Zip"  type="number" maxlength="5" minlength="5" name="zipcode" id="zipcode"  value="{{ old('zipcode') }}" >
                                                      @if ($errors->has('zipcode'))
                                                            <span class="text-danger">{{ $errors->first('zipcode') }}</span>
                                                      @endif
												</div>
												<div class="col-md-6 mt-3">
													<label> Address1<span style="color:red">*</span> </label>
													<textarea class="form-control" placeholder="Address"  type="text" name="address" id="address"  >{{ old('address') }}</textarea>
                                                      @if ($errors->has('address'))
                                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                                    @endif
												</div>
												<div class="col-md-6 mt-3">
													<label> Email<span style="color:red">*</span> </label>
													<input class="form-control" placeholder="Email"  type="email" name="email" id="email"  value="{{ old('email') }}" >
                                                      @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                      @endif
												</div>
                                                <div class="col-md-6 mt-3">
													<label> Password<span style="color:red">*</span> </label>
													<input class="form-control" placeholder="Password"  type="password" name="password" id="password"  value="{{ old('password') }}" >
                                                      @if ($errors->has('password'))
                                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                                      @endif
												</div>
                                                <div class="col-md-6 mt-3">
													<label> Confirm Password<span style="color:red">*</span> </label>
													<input class="form-control" placeholder="Confirm Password"  type="password" name="con_password" id="con_password"  value="{{ old('con_password') }}" >
                                                      @if ($errors->has('con_password'))
                                                            <span class="text-danger">{{ $errors->first('con_password') }}</span>
                                                         @endif
												</div>
												<div class="col-md-6 mt-3">
													<label> Phone<span style="color:red">*</span> </label>
													<input class="form-control" placeholder="Phone"  type="number" name="phone" id="phone"  value="{{ old('phone') }}" >
                                                      @if ($errors->has('phone'))
                                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                         @endif
												</div>
                                                <div class="col-md-6 mt-3">
													<label>Relationship to participant<span style="color:red">*</span> </label>
													<input class="form-control" placeholder="Relationship to participant"  type="text" name="relationship" id="relationship"  value="{{ old('relationship') }}" >
                                                      @if ($errors->has('relationship'))
                                                            <span class="text-danger">{{ $errors->first('relationship') }}</span>
                                                         @endif
												</div>
												<!--<div class="col-md-6 mt-3">-->
												<!--	<label>Apt/Bldg. # </label>-->
												<!--	<input class="form-control" placeholder="Apt/Bldg. #" value="" type="text" name="apt_bldg"  >-->
												<!--</div>-->

												
											</div>
                                            <h6 class="featured-title mt-5 mb-4 campadd">Players information</h6>
                                             <span style="color:red" id="perrmsg">{{ Session::get('errmsg') }}</span>
										  	<div class="row mt-3 campadd">
												<div class="col-md-6">
													<label> Players first Name<span style="color:red">*</span> </label>
													<input class="form-control" placeholder="First Name"  type="text" name="player_fname"   id="player_fname" value="{{ old('player_fname') }}">
                                                      @if ($errors->has('player_fname'))
                                                            <span class="text-danger">{{ $errors->first('player_fname') }}</span>
                                                      @endif
												</div>
												<div class="col-md-6">
													<label> Players Last Name<span style="color:red">*</span> </label>
														<input class="form-control" placeholder="Last Name"  type="text" name="player_lname"   id="player_lname" value="{{ old('player_lname') }}">
                                                        @if ($errors->has('player_lname'))
                                                            <span class="text-danger">{{ $errors->first('player_lname') }}</span>
                                                        @endif
												</div>
												<div class="col-md-6 mt-3">
													<label> Date of birth<span style="color:red">*</span> </label>
													<input class="form-control"   type="date" name="dob"   id="dob" value="{{ old('dob') }}">
                                                    @if ($errors->has('dob'))
                                                        <span class="text-danger">{{ $errors->first('dob') }}</span>
                                                    @endif
												</div>
												<div class="col-md-6 mt-3">
													<label> Gender<span style="color:red">*</span> </label>
														<select class="form-control" id="gender"  name="gender"  values="{{ old('gender') }}">
															<option value="">— Please gender —</option>
															<option value="Male" {{old('gender') == "Male"?"Selected":'' }}>Male</option>
															<option value="Female" {{old('gender') == "Female"?"Selected":'' }}>Female</option>
															<option value="Other" {{old('gender') == "Other"?"Selected":'' }}>Other</option>
														</select>
                                                        @if ($errors->has('gender'))
                                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                                        @endif
												</div>

                                                    <!-- <div class="col-md-2 tn-buttons mt-4 p-0 ">
                                                    <button type="button" class="mb-xs mr-xs btn text-light btn-info addmore" onclick="addmorecamp();"><i class="fa fa-plus"></i></button>
                                                    </div> -->
										     	<div class="row">
												
											</div>
                                    <!-- -->
                                    <p class="mb-3 mt-3 text-left">Already have account? <a
                                            href="{{ route('parent.login') }}" style="color:#222;">Signin</a></p>
                                    <!-- <p class="mb-3 text-right"><a href="{{ URL::to('author/forgot')  }}">Forgot Password</a></p> -->
                                    <!-- -->

                                    <div class="submit text-center">
                                        <input class="btn btn-primary btn-lg" type="submit" name="login"
                                            value="Sign Up" />

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="login-footer">
                        <br>
                        <div class="text-center">
                            &copy; {{ config('app.name') }} {{ date('Y') }}
                        </div>
                    </div>
                </div>
                <!--single-page closed-->

            </div>
        </div>
    </section>
    <x-footer />

 <script>

    function valid(){
       if($("#parents_fname").val() == ''){
            $("#errmsg").html("Parents First name is require!");
            $("#parents_fname").focus();
            return false;
       }else if($("#parents_lname").val() == ''){
            $("#errmsg").html("Parents Last name is require!");
            $("#parents_lname").focus();
            return false;
       }else if($("#city").val() == ''){
            $("#errmsg").html("City is require!");
            $("#city").focus();
            return false;
       }else if($("#state").val() == ''){
            $("#errmsg").html("State is require!");
            $("#state").focus();
            return false;
       }else if($("#zipcode").val() == ''){
            $("#errmsg").html("Zipcode is require!");
            $("#zipcode").focus();
            return false;
       }else if($("#address").val() == ''){
            $("#errmsg").html("Address is require!");
            $("#address").focus();
            return false;
       }else if($("#email").val() == ''){
            $("#errmsg").html("email is require!");
            $("#email").focus();
            return false;
       }else if($("#password").val() == ''){
            $("#errmsg").html("Password is require!");
            $("#password").focus();
            return false;
       }else if($("#con_password").val() == ''){
            $("#errmsg").html("Confirm Password is require!");
            $("#con_password").focus();
            return false;
       }else if($("#phone").val() == ''){
            $("#errmsg").html("Phone no is require!");
            $("#phone").focus();
            return false;
       }else if($("#player_fname").val() == ''){
            $("#perrmsg").html("Player First name is require!");
            $("#player_fname").focus();
            return false;
       }else if($("#player_lname").val() == ''){
            $("#perrmsg").html("Player Last name is require!");
            $("#player_lname").focus();
            return false;
       }else if($("#dob").val() == ''){
            $("#perrmsg").html("Date of birth is require!");
            $("#dob").focus();
            return false;
       }else if($("#gender").val() == ''){
            $("#perrmsg").html("Gender is require!");
            $("#gender").focus();
            return false;
       }
    }

</script>
