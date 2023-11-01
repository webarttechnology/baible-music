<x-headercomponent title="Klicsports | Organization Login" />

<div id="app" class="page">
    <section class="section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 paynow">
                    <div class="px-2 turnamentContant">
                        <div class="wrapper wrapper2">
                            <form id="login" class="card-body" tabindex="500" method="post"
                                action="{{ route('organization.login.action') }}" class="form-horizontal"
                                onsubmit="return valid();">
                                @csrf

                                <div class="rgb-white-style pb-5">
                                    <h3 class="featured-title text-center fa-2x mb-5">Organization Login</h3>
                                    <div class="pull-left">
                                    @foreach($errors -> all() as $errvalue)
                                    <span style="color:red;">{{ $errvalue }}</span>
                                    <br />
                                    @endforeach
                                    <span style="color:green" id="successmsg">{{ Session::get('successmsg') }}</span>
                                    <span style="color:red" id="errmsg">{{ Session::get('errmsg') }}</span>
                                    </div>
                                    
                                    <div class="mail mb-4">
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Email ID" autocomplete="off" value="{{old('email')}}" />
                                    </div>
                                    <div class="passwd">
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Password">
                                    </div>

                                    <!-- -->
                                    <p class="mb-3 text-left">Don't have account? 
                                        <a
                                            href="{{ route('organization.signup') }}" style="color:#222;">Signup</a></p>
                                    <!-- <p class="mb-3 text-right"><a href="{{ URL::to('author/forgot')  }}">Forgot Password</a></p> -->
                                    <!-- -->

                                    <div class="submit">
                                     <div class="btn-prt text-center pb-3">
                                     <input class="btn btn-primary btn-lg" type="submit" name="login"
                                            value="Sign In" />
                                     </div> 
                                        

                                        <!-- -->
                                        <!--<a href="{{ url('author/') }}">Login as Admin ? </a> |-->
                                        <!--<a href="{{ route('organization.login') }}">Login as Organization ? </a>-->
                                        <!-- -->


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