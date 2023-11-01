<x-adminheader/>
<x-navbar/>

<div class="wave -three"></div>
<div class="app-content">
					<section class="section">
						<div class="page-header">
							<h4 class="page-title">Update Password </h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('author/update/pass/page')}}" class="text-light-color">Update Password</a></li>
								<li class="breadcrumb-item active" aria-current="page"> </li>
							</ol>
						</div>
						
						<div class="row justify-content-center" >
						
							<div class="col-12">
								<div class="card" style="style">
									<div class="card-header">
										<h4>Update Password </h4>
					
                                        @if(Session::has('change_pass'))
                                        <div class="alert alert-success">
                                            {{ Session::get('change_pass') }}
                                            @php
                                            Session::forget('change_pass');
                                            @endphp
                                        </div>
                                        @endif

									</div>
									<div class="card-body">
									<span id="errmsg" style="color:red"></span>
										<form class="form-horizontal"  action="{{ URL::to('author/update/pass', $details->id) }}" method='POST' >
                                        @csrf
											<div class="form-group row">
												<label for="inputName" class="col-md-2 col-form-label">New Password</label>
												<div class="col-md">
													<input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="Enter New Password" required >
													@if ($errors->has('new_pass'))
                                                                <span class="text-danger">{{ $errors->first('new_pass') }}</span>
                                            		@endif
												</div>
											</div>

                                            <div class="form-group row">
												<label for="inputName" class="col-md-2 col-form-label">Confirm Password</label>
												<div class="col-md">
													<input type="password" class="form-control" id="conf_pass" name="conf_pass" placeholder="Enter Confirm Password" required >
													@if ($errors->has('conf_pass'))
                                                                <span class="text-danger">{{ $errors->first('conf_pass') }}</span>
                                            		@endif
												</div>
											</div>


											<div class="form-group mb-0 mt-2 row justify-content-end">
												<div class="col-md-8">
													<button type="submit" class="btn btn-info">Save</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>


					</section>
				</div>

<x-adminfooter/>