<x-header page="contact"/>


<section class="login-page-sec py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pr-0">
              <div class="loginimg">  
                <img src="{{ asset('frontend/img/abtimg.jpg') }}" alt="">
             </div> 
            </div>
            <div class="col-md-6 col-div pl-0">
                <div class="login-form-block">
                    <span id="errmsg" style="color:red;">{{ Session::get('errmsg') }}</span>
                     <span  style="color:green;">{{ Session::get('successmsg') }}</span>
                    <form action="{{ URL::to('/login') }}" method='POST' onsubmit="return valid();">
                    @csrf
                        <h2>Login</h2>
                        
                        <div class="row">
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
                                <div class="mb-3 frgt">
                                    <!-- <a href="#">Forgot your password?</a> -->
                                    <a href="{{ url('registration') }}" class="link">New Registration</a>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="btn-box mt-2">
                                    <button type="submit" class="btn btn-login mr-4 site-btn">Login</button>
                                    <!-- <a href="agent-login.php" class="btn btn-login">Login as Agent</a> -->
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

		 
           if ($("#email_id").val() == '') {
                $("#errmsg").html("Please enter Email ID!!");
                $("#email_id").focus();
                return false;
            }else if ($("#password").val() == '') {
                $("#errmsg").html("Please enter password!!");
                $("#password").focus();
                return false;
            }
        }
</script>