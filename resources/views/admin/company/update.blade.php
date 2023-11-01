<x-adminheader/>
<x-navbar/>

<div class="wave -three"></div>
<div class="app-content">
					<section class="section">


                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Edit Company</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Edit</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Customer Details</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						
						<!--row closed-->

                        <!--row open-->
						<div class="row justify-content-center" >
						
							<div class="col-12">

								<div class="card" style="style">

                                @if(Session::has('comp_updatemsg'))
                                <div style="color:green; padding-left:50px ">{{ Session::get('comp_updatemsg') }}</div>
                                @endif

									<div class="card-header">
										<h4>Edit Company Details</h4>
									</div>

									<div class="card-body">
									<span id="errmsg" style="color:red"></span>

										<form class="form-horizontal"  action="{{ url('/author/company/update') }}" method='POST' enctype="multipart/form-data" >
                                        @csrf

											<div class="form-group row">
												<label for="inputName" class="col-md-3 col-form-label">Company Name</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="name" name="name" placeholder="Customer Name" value="{{ $details->name }}" required>
													<input type="hidden" name="id" id="id" class="form-control" value="{{ $details->id }}" />

													@if ($errors->has('name'))
                                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            		@endif
												</div>
											</div>

                                            <div class="form-group row">
												<label for="inputName" class="col-md-3 col-form-label">Mobile Number</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ $details->mobile_no }}" required>
													
													@if ($errors->has('mobile_no'))
                                                                <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                            		@endif
												</div>
											</div>

                                            <div class="form-group row">
												<label for="inputName" class="col-md-3 col-form-label">Company Email</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="email_id" name="email_id" value="{{ $details->email_id }}" required>
													
													@if ($errors->has('email_id'))
                                                                <span class="text-danger">{{ $errors->first('email_id') }}</span>
                                            		@endif
												</div>
											</div>    
											
											<div class="form-group row">
												<label for="inputName" class="col-md-3 col-form-label">Company Address</label>
												<div class="col-md-9">
													<!--<input type="text" class="form-control" id="address" name="address" value="{!! strip_tags($details->address) !!}" required>-->
													<textarea class="form-control" id="address" name="address" row="5" required>{!! strip_tags($details->address) !!}</textarea>
													
													@if ($errors->has('address'))
                                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                            		@endif
												</div>
											</div>     
                                            

           <!--                                 <div class="form-group row">-->
											<!--	<label for="inputName" class="col-md-3 col-form-label">Company Logo</label>-->
											<!--	<div class="col-md-9">-->
											<!--		<input type="file" class="form-control" id="logo" name="logo"  >-->
													
											<!--		@if ($errors->has('logo'))-->
           <!--                                                     <span class="text-danger">{{ $errors->first('logo') }}</span>-->
           <!--                                 		@endif-->
											<!--	</div>-->
											<!--</div>-->


           <!--                                 <div class="form-group row">-->
											<!--	<label for="inputName" class="col-md-3 col-form-label">Facebook Link</label>-->
											<!--	<div class="col-md-9">-->
											<!--		<input type="text" class="form-control" id="facebook_link" name="facebook_link"  value="{{ $details->facebook_link }}" required>-->
													
											<!--		@if ($errors->has('facebook_link'))-->
           <!--                                                     <span class="text-danger">{{ $errors->first('facebook_link') }}</span>-->
           <!--                                 		@endif-->
											<!--	</div>-->
											<!--</div>-->

           <!--                                 <div class="form-group row">-->
											<!--	<label for="inputName" class="col-md-3 col-form-label">Twitter Link</label>-->
											<!--	<div class="col-md-9">-->
											<!--		<input type="text" class="form-control" id="twitter_link" name="twitter_link"  value="{{ $details->twitter_link }}" required>-->
													
											<!--		@if ($errors->has('twitter_link'))-->
           <!--                                                     <span class="text-danger">{{ $errors->first('twitter_link') }}</span>-->
           <!--                                 		@endif-->
											<!--	</div>-->
											<!--</div>-->

           <!--                                 <div class="form-group row">-->
											<!--	<label for="inputName" class="col-md-3 col-form-label">Instagram Link</label>-->
											<!--	<div class="col-md-9">-->
											<!--		<input type="text" class="form-control" id="instagram_link" name="instagram_link"  value="{{ $details->instagram_link }}" required>-->
													
											<!--		@if ($errors->has('instagram_link'))-->
           <!--                                                     <span class="text-danger">{{ $errors->first('instagram_link') }}</span>-->
           <!--                                 		@endif-->
											<!--	</div>-->
											<!--</div>-->

           <!--                                 <div class="form-group row">-->
											<!--	<label for="inputName" class="col-md-3 col-form-label">Fax</label>-->
											<!--	<div class="col-md-9">-->
											<!--		<input type="text" class="form-control" id="fax" name="fax"  value="{{ $details->fax }}" required>-->
													
											<!--		@if ($errors->has('fax'))-->
           <!--                                                     <span class="text-danger">{{ $errors->first('fax') }}</span>-->
           <!--                                 		@endif-->
											<!--	</div>-->
											<!--</div>-->

											<div class="form-group mb-0 mt-2 row justify-content-end">
												<div class="col-md-9">
													<button type="submit" class="btn btn-info">Edit</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-12 ">
								
							</div>
						</div>
						<!--row close-->

                        <!--row open-->
						
						<!--row close-->

                        <!--row open-->
						<div class="row">
							<div class="col-lg-12">
								
							</div>
						</div>
						<!--row close-->

					</section>
				</div>

<x-adminfooter/>
