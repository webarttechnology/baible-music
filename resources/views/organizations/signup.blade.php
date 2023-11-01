<x-headercomponent title="Klicsports | Organization Registration"/>

<div class="rgb-content-wrap">
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 paynow">

                    <div>
                        <div class="wrapper wrapper2 rgb-white-style pb-5">
                            <form id="campformData" class="card-body" tabindex="500" method="post"
                                action="{{ route('organization.signup.action') }}" class="form-horizontal">
                                @csrf

                                <h3 class="featured-title text-center fa-2x mb-5">Create A New Account</h3>
                                <div class="px-2 turnamentContant">
                                    <span style="color:green" id="successmsg">{{ Session::get('successmsg') }}</span>
                                    <span style="color:red" id="errmsg">{{ Session::get('errmsg') }}</span>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Organization Name *" autocomplete="off"
                                            value="{{old('name')}}" />
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Email ID *" autocomplete="off" value="{{old('email')}}" />
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-4">
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Phone No *" autocomplete="off" value="{{old('phone')}}" />
                                        @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-4">
                                        <input type="text" name="address" id="address" class="form-control"
                                            placeholder="Address *" autocomplete="off" value="{{old('address')}}" />
                                        @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-4">
                                       
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Password *">
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                             
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-4">
                                        <input type="password" name="conf_password" class="form-control"
                                            id="conf_password" placeholder="Confirm Password *">
                                        @if ($errors->has('conf_password'))
                                        <span class="text-danger">{{ $errors->first('conf_password') }}</span>
                                        @endif
                                        </div>
                                    </div>

                                    <!-- -->
                                    <p class="mb-3 text-left">Already have account? <a
                                            href="{{ route('organization.login') }}" style="color:#222;">Signin</a></p>
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