<x-parentsheader/>
<x-parentsnavbar/>
<div class="wave -three"></div>
<div class="app-content">
					<section class="section">
						<div class="page-header">
							<h4 class="page-title">Update {{ $title }}</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('parent.dashboard') }}" class="text-light-color">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"> {{ $title }}</li>
							</ol>
						</div>
						
						<div class="row justify-content-center" >
						
							<div class="col-12">
								<div class="card" style="style">
									<div class="card-header">
										<h4>Add {{ $title }}</h4>
									<span id="errmsg" style="color:red">{{ Session::get('errmsg') }}</span>
									</div>
									<div class="card-body">
										<form class="form-horizontal"  action="{{ route('parent.players.update.success') }}" method='POST' onsubmit="return valid();" autocomplete="off" >
                                        @csrf
											<div class="form-group row mt-3 m-2">
												
												<div class="col-md-6">
                                                    <label for="inputName" class=" col-form-label">Players first Name</label>
													<input type="text" class="form-control" id="player_fname" name="player_fname" placeholder="Player first name" value="{{$players_name[0]}}"  >
                                                    <input name="id" type="hidden" value="{{$players->id }}" >
													@if ($errors->has('player_fname'))
                                                                <span class="text-danger">{{ $errors->first('player_fname') }}</span>
                                            		@endif
												</div>

                                                <div class="col-md-6">
                                                    <label for="inputName" class=" col-form-label">Players last Name</label>
													<input type="text" class="form-control" id="player_lname" name="player_lname" placeholder="Players last name"  value="{{ $players_name[1]}}" >
													@if ($errors->has('player_lname'))
                                                                <span class="text-danger">{{ $errors->first('player_lname') }}</span>
                                            		@endif
												</div>
                                               
											</div>

                                            <div class="form-group row mt-3 m-2">
												
												<div class="col-md-4">
                                                    <label for="inputName" class=" col-form-label">Date of birth</label>
													<input type="date" class="form-control" id="dob" name="dob" value="{{date('Y-m-d', strtotime($players -> dob)) }}"  >
													@if ($errors->has('dob'))
                                                                <span class="text-danger">{{ $errors->first('dob') }}</span>
                                            		@endif
												</div>

                                                <div class="col-md-4">
                                                    <label for="inputName" class=" col-form-label">Gender</label>
													<select type="text" class="form-control" id="gender" name="gender"   >
														    <option value="">— Please gender —</option>
															<option value="Male" {{ $players->gender == 'Male'?"selected":'' }}>Male</option>
                                                            <option value="Female" {{ $players->gender == 'Female'?"selected":'' }}>Female</option>
                                                            <option value="Other" {{ $players->gender == 'Other'?"selected":'' }}>Other</option>
													</select>
													@if ($errors->has('gender'))
                                                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                            		@endif
												</div>

                                                <div class="col-md-4">
                                                    <label for="inputName" class=" col-form-label">Status</label>
													<select type="text" class="form-control" id="isactive" name="isactive"   >
															<option value="1" {{ $players->isactive == 1?"selected":'' }}>Active</option>
                                                            <option value="0" {{ $players->isactive == 0?"selected":'' }}>Inactive</option>
													</select>
													@if ($errors->has('gender'))
                                                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                            		@endif
												</div>
                                               
											</div>


											<div class="form-group mb-0 mt-2 row justify-content-end">
												<div class="col-md-8">
													<button type="submit" class="btn btn-info">Update</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>


					</section>
				</div>





<x-parentsfooter/>

<script>

    function valid(){
        if($("#player_fname").val() == ''){
            $("#errmsg").html("Player First name is require!");
            $("#player_fname").focus();
            return false;
       }else if($("#player_lname").val() == ''){
            $("#errmsg").html("Player Last name is require!");
            $("#player_lname").focus();
            return false;
       }else if($("#dob").val() == ''){
            $("#errmsg").html("Date of birth is require!");
            $("#dob").focus();
            return false;
       }else if($("#gender").val() == ''){
            $("#errmsg").html("Gender is require!");
            $("#gender").focus();
            return false;
       }
    }

</script>