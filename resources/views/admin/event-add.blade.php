<x-adminheader/>
<x-navbar/>

<div class="wave -three"></div>
<div class="app-content">
					<section class="section">
						<div class="page-header">
							<h4 class="page-title">Add {{ $title }}</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('organizations/camp/type')}}" class="text-light-color">Category</a></li>
								<li class="breadcrumb-item active" aria-current="page"> {{ $title }}</li>
							</ol>
						</div>
						
						<div class="row justify-content-center" >
						
							<div class="col-12">
								<div class="card" style="style">
									<div class="card-header">
										<h4>Add {{ $title }}</h4>
									</div>
								    <div class="card-body">
									    <span id="errmsg" style="color:red">{{ Session::get('errmsg') }}</span>
										<form class="form-horizontal"  action="{{ route('event.add.success') }}" method='POST' onsubmit="return valid();" autocomplete="off" >
                                        @csrf
                                        <div class="row mt-5">
											<div class="col-lg-6">
												<label>Name</label>
											   	<input class="form-control" type="text" id="name" name="name" placeholder="Event name" value="{{ old('name') }}" >
                                                	@if ($errors->has('name'))
                                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            		@endif
											</div>
											<div class="col-lg-6">
												<label>Type</label>
												<select type="text" name="category_id" id="category_id" class="form-control" onchange="paidOrnotCheck()" >
                                                    <option value="">Select a type</option>
                                                    @foreach($category as $item)
															 <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
												</select>	
                                                    @if ($errors->has('category_id'))
                                                                <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                            		@endif				
											</div>
                                          
										</div>

                                        <div class="row mt-4">
                                              <div class="col-lg-6">
												<label>Description</label>
												<textarea name="description" id="description" class="form-control" >{{ old('description') }}</textarea>
                                                    	@if ($errors->has('description'))
                                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            		@endif				
											</div>
                                            <div class="col-lg-6">
												<label>Max person</label>
												<input type="number" name="max_person" id="max_person" class="form-control" placeholder="Maximum persons" value="{{ old('max_person') }}">
                                                    	@if ($errors->has('max_person'))
                                                                <span class="text-danger">{{ $errors->first('max_person') }}</span>
                                            		@endif				
											</div>
                                        </div>


                                          <div class="row mt-4">
                                              <div class="col-lg-6">
												<label>Start Date</label>
												<input type="date" name="start_date" id="start_date" class="form-control" value="old('start_date')">
                                                    	@if ($errors->has('start_date'))
                                                                <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                            		@endif				
											</div>
                                            <div class="col-lg-6">
												<label>End Date</label>
												<input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date') }}">
                                                    	@if ($errors->has('end_date'))
                                                                <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                            		@endif				
											</div>
                                        </div>

                                          <div class="row mt-4">
                                              <div class="col-lg-6">
												<label>Event Time</label>
												<input type="time" name="event_time" id="event_time" class="form-control" value="old('event_time')">
                                                    	@if ($errors->has('event_time'))
                                                                <span class="text-danger">{{ $errors->first('event_time') }}</span>
                                            		@endif				
											</div>
                                            <div class="col-lg-6">
												<label>Entry fees(per person)</label>
												<input type="number" name="entry_fees" id="entry_fees" placeholder="$99" class="form-control" value="{{ old('entry_fees') }}">
                                                    	@if ($errors->has('entry_fees'))
                                                                <span class="text-danger">{{ $errors->first('entry_fees') }}</span>
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


<script>

    function paidOrnotCheck(){
        category_id = $("#category_id").val();
        if(category_id == "1"){
            $("#entry_fees").attr("readonly",false); 
              $("#entry_fees").val("");
        }else{
             $("#entry_fees").attr("readonly",true); 
             $("#entry_fees").val(0.00);
        }
    }


    function valid(){
        if($("#name").val() == ""){
             $("#errmsg").html("Event name required!!");
            $("#name").focus();
            return false;
        }else if($("#category_id").val() == ""){
             $("#errmsg").html("Event type required!!");
            $("#category_id").focus();
             return false;
        }else if($("#description").val() == ""){
             $("#errmsg").html("Event description required!!");
            $("#description").focus();
             return false;
        }else if($("#max_person").val() == ""){
             $("#errmsg").html("Max person required!!");
            $("#max_person").focus();
             return false;
        }else if($("#start_date").val() == ""){
             $("#errmsg").html("Event start date required!!");
            $("#start_date").focus();
             return false;
        }else if($("#end_date").val() == ""){
             $("#errmsg").html("Event end date required!!");
            $("#end_date").focus();
             return false;
        }else if($("#event_time").val() == ""){
             $("#errmsg").html("Event time required!!");
            $("#event_time").focus();
             return false;
        }else if($("#category_id").val() == "1" && $("#entry_fees").val() == ""){
             $("#errmsg").html("Event time required!!");
            $("#entry_fees").focus();
             return false;
        }
    }

</script>