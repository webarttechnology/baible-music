<x-adminheader/>
<x-navbar/>
<div class="wave -three"></div>
<div class="app-content">
					<section class="section">
						<div class="page-header">
							<h4 class="page-title">Add Categary</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('author/category')}}" class="text-light-color">Category</a></li>
								<li class="breadcrumb-item active" aria-current="page"> {{ $title }}</li>
							</ol>
						</div>
						
						<div class="row justify-content-center" >
						
							<div class="col-12">
								<div class="card" style="style">
									<div class="card-header">
										<h4>Add Categary</h4>
					
									</div>
									<div class="card-body">
									<span id="errmsg" style="color:red"></span>
										<form class="form-horizontal"  action="{{ url('/author/category/add') }}" method='POST' onsubmit="return valid();" autocomplete="off" >
                                        @csrf
											<div class="form-group row">
												<label for="inputName" class="col-md-2 col-form-label">Categary Name</label>
												<div class="col-md-4">
													<input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{ old('name') }}" >
													@if ($errors->has('name'))
                                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            		@endif
												</div>
											</div>

											<div class="form-group row">
												<label for="inputName" class="col-md-2 col-form-label">Details</label>
												<div class="col-md-4">
													<textarea type="text" class="form-control" id="details" name="details" placeholder="Category Details">{{ old('details') }}</textarea>

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

<script>
    function valid() {
            if ($("#name").val() == '') {
                $("#errmsg").html("Please enter category name.");
                $("#name").css("border-color", "red");
                return false;
            }
        }
</script>