<x-header page="contact"/>


<section class="reg-page-sec pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-50 pb-50 pr-0 ">
               <div class="regimg"> 
                <img src="{{ asset('frontend/img/abtimg.jpg') }}" alt="">
              </div> 
            </div>
            <div class="col-md-6 col-div pl-0">
                
                <div class="reg-form-block login-form-block">
                    <form action="{{ URL::to('/registration') }}" method='POST' onsubmit="return valid();">
                    @csrf
                    <h2>Registration</h2>
                      <span id="errmsg" style="color:red;">{{ Session::get('errmsg') }}</span>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="">Full Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Full name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="email"  name="email_id" id="email_id" value="{{ old('email_id') }}" class="form-control" id="" placeholder="Email">
                                     @if ($errors->has('email_id'))
                                        <span class="text-danger">{{ $errors->first('email_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                     @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="form-control" name="con_password" id="con_password" placeholder="Confirm Password">
                                     @if ($errors->has('con_password'))
                                        <span class="text-danger">{{ $errors->first('con_password') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-4 frgt">
                                    <a href="{{ url('login') }}" class="link">Already Registered? Login</a>
                                </div>
                            </div>
                            
                            <div class="col-md-12 ">
                                <div class="btn-box mt-1">
                                    <button type="submit" class="btn btn-login site-btn">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<x-footer page="contact" />


<script>
    function valid() {

		    password = $("#password").val();
			confirm_password = $("#con_password").val();
            if ($("#name").val() == '') {
                $("#errmsg").html("Please enter your name!!");
                $("#name").focus();
                return false;
            }else if ($("#email_id").val() == '') {
                $("#errmsg").html("Please enter Email ID!!");
                $("#email_id").focus();
                return false;
            }else if ($("#password").val() == '') {
                $("#errmsg").html("Please enter password!!");
                $("#password").focus();
                return false;
            }else if (password.length < 8) {
                $("#errmsg").html("password must be 8 charactor!!");
                $("#password").focus();
                return false;
            }else if ($("#con_password").val() == '') {
                $("#errmsg").html("Please enter confirm password!!");
                $("#con_password").focus();
                return false;
            }else if (confirm_password.length < 8) {
                $("#errmsg").html("Please enter confirm password!!");
                $("#con_password").focus();
                return false;
            }else if (password != confirm_password) {
                $("#errmsg").html("Password and confirm password must be same!!");
                $("#con_password").focus();
                return false;
            }
        }
</script>