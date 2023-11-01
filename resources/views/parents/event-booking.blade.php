<x-parentsheader/>
<x-parentsnavbar/>
<div class="wave -three"></div>
<div class="app-content">
					<section class="section">
						<div class="page-header">
							<h4 class="page-title">Add {{ $title }}</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('author/league/type')}}" class="text-light-color">Category</a></li>
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
										<form class="form-horizontal"  action="{{ route('league.avalible.add.success') }}" method='POST' onsubmit="return valid();" autocomplete="off" >
                                        @csrf
											<div class="form-group row">
												<label for="inputName" class="col-md-2 col-form-label">Organigation List</label>
												<div class="col-md-4">
													<select type="text" class="form-control" id="organization_id" name="organization_id"  >
														<option value="">Select a Organization</option>
														@foreach($organization as $item)
															<option value="{{$item->id }}"  {{$item->id==old('organization_id')?"Selected":'' }}>{{ $item->name }}</option>
														@endforeach
													</select>
													@if ($errors->has('organization_id'))
                                                                <span class="text-danger">{{ $errors->first('organization_id') }}</span>
                                            		@endif
												</div>

												

												<label for="inputName" class="col-md-2 col-form-label">Player List</label>
												<div class="col-md-4">
													<select type="text" class="form-control" id="player_id" name="player_id" placeholder="League type"  >
														<option value="">Select a player</option>
														@foreach($organization as $item)
															<option value="{{$item->id }}"  {{$item->id==old('player_id')?"Selected":'' }}>{{ $item->name }}</option>
														@endforeach
													</select>
													@if ($errors->has('player_id'))
                                                                <span class="text-danger">{{ $errors->first('player_id') }}</span>
                                            		@endif
												</div>
											</div>

									 
										<div class="align-items-center justify-content-center mt-4 row ">
											<div class="col-md-2">
												<label>
													<input type="radio"  name="toggler" value="camp" onclick="showEventinformation('camp')" /> Camp
												</label>
											</div>
											<div class="col-md-2">
												<label>
													<input type="radio" name="toggler" value="league" onclick="showEventinformation('league')" /> League
												</label>
											</div>
											<div class="col-md-2">
												<label>
													<input type="radio" name="toggler" value="tournament" onclick="showEventinformation('tournament')" /> Tournament
												</label>
											</div>
											<div class="col-md-2">
												<label>
													<input type="radio" name="toggler" value="training" onclick="showEventinformation('training')" /> Training
												</label>
											</div>
										</div>
										
										<div class="row campadd" style="text-align: center;">
                                            <div class="col-lg-12">
												<h5>Camp Information</h5>
											</div>
											<div class="col-lg-4">
												<label>Camp type</label>
											     <select class="form-control" name="camp_type" id="camp_type" required onchange="showavaliblecamp()" >
														<option value="">—Please choose an option—</option>
														@foreach($organization as $item)
															<option value="{{$item->id }}">{{$item->name }}</option>
														@endforeach
												</select>	
											</div>
											<div class="col-lg-4">
												<label>Available for</label>
												<select class="form-control" type="text"  name="camp_available_time" id="camp_available_time" required  onchange="showcamplocation()">
														<option value="">—Please choose an option—</option>
												</select>						
											</div>
											<div class="col-lg-4">
												<label>Available Location</label>
													<select class="form-control" type="text"  name="availble_location" id="availble_location" required onchange="getcampamount()" >
														<option value="">—Please choose an option—</option>
												    </select>	
											</div>
										</div>


										<div class="row showleague" style="text-align: center;">
                                            <div class="col-lg-12">
												<h5>League Information</h5>
											</div>
											<div class="col-lg-4">
												<label>League type<span style="color:red;">*</span></label>
											    <select class="form-control" id="league_type" name="league_type" required onchange="showavalibleleague()" >
														<option value="">—Please choose an option—</option>
														@foreach($organization as $item)
															<option value="{{ $item->id }}">{{ $item->league_name  }}</option>
														@endforeach
												</select>	
											</div>
											<div class="col-lg-4">
												<label>Available for<span style="color:red;">*</span></label>
												<select class="form-control" id="leagueavailable_id" name="leagueavailable_id" required onchange="getavalibleleaguelocation()"  >
														<option value="">—Please choose an option—</option>
												</select>							
											</div>
											<div class="col-lg-4">
												<label>Available Location</label>
													<select class="form-control" id="leaguelocation_id" name="leaguelocation_id" required onchange="getamountforleague(this)"  >
														<option value="">—Please choose an option—</option>			
 													</select>	
											</div>
										</div>


										
										<div class="row showtournament" style="text-align: center;">
                                            <div class="col-lg-12">
												<h5>Tournament Information</h5>
											</div>
											<div class="col-lg-4">
												<label>Tournament type<span style="color:red;">*</span></label>
											   <select class="form-control" name="tournament_type" id="tournament_type" required onchange="tournamentclickevent()">
														<option value="">—Please choose an option—</option>
														@foreach($organization as $item)
														<option value="{{ $item->id }}">{{ $item->tournament }}</option>
														@endforeach
												</select>	
											</div>
											<div class="col-lg-4">
												<label>Available for<span style="color:red;">*</span></label>
												<select class="form-control" id="tournamentavailable_id" name="tournamentavailable_id" required onchange="getavalibletournamentlocation()"  >
														<option value="">—Please choose an option—</option>
												</select>						
											</div>
											<div class="col-lg-4">
												<label>Available Location</label>
													<select class="form-control" id="tournamentlocation_id" name="tournamentlocation_id" required onchange="getamountfortournament(this)"  >
														<option value="">—Please choose an option—</option>
                                                    </select>		
											</div>
										</div>


										<div class="row showtraining" style="text-align: center;">
                                            <div class="col-lg-12">
												<h5>Training Information</h5>
											</div>
											<div class="col-lg-4">
												<label>Training type<span style="color:red;">*</span></label>
											  <select class="form-control" name="training_type" id="training_type" required onchange="trainningspringclickevent()" >
														<option value="">—Please choose an option—</option>
														@foreach($organization as $item)
														<option value="{{ $item->id }}">{{ $item->name }}</option>
														@endforeach
												</select>	
											</div>
											<div class="col-lg-4">
												<label>Available for<span style="color:red;">*</span></label>
												<select class="form-control" type="number"  name="trainingavailable_id" id="trainingavailable_id" required  onchange="showtraininglocation()">
														<option value="">—Please choose an option—</option>		
												</select>						
											</div>
											<div class="col-lg-4">
												<label>Available Location</label>
													<select class="form-control" type="number"  name="traininglocation_id" id="traininglocation_id" required onchange="gettrainingamount()" >
														<option value="">—Please choose an option—</option>
												    </select>		
											</div>
										</div>

										<div class="row mt-5">
											<div class="col-lg-6">
												<label>Amount</label>
											   	<input type="hidden" id="camplocationamt" name="camplocationamt" >
													<input class="form-control"  type="number" id="camp_amt" name="camp_amt" readonly  value="" required>
											</div>
											<div class="col-lg-6">
												<label> Payment Options</label>
												<select name="payment_method" class="form-control" required>
															 <option value="Pay_by_cheque">Pay By Cheque</option>
															 <option value="Pay_by_card">Pay By Credit Card</option>
													</select>					
											</div>
										</div>

										<div class="row mt-5">
											<div class="col-md-12 text-center">
												<input type="submit" value="Submit" class="btn btn-primary btn-lg">
											</div>
										</div>
								</div>
								

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

	$( document ).ready(function() {
//   $(".ava_camp").hide();
//   $(".ava_training").hide();
//   $(".ava_league").hide();
//   $(".avl_tournament").hide();
  $(".campadd").hide();
  $(".showleague").hide();
  $(".showtournament").hide();
  $(".showtraining").hide();
});


function showEventinformation(name){
	if(name == "camp"){
		 $(".campadd").show();
	}
}

</script>