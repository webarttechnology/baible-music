@php

$invoice = Session::get('invoice_mail');

$all_details = Illuminate\Support\Facades\DB::table('leagueenquiries')->where('invoice_id', $invoice)->first();
$league= Illuminate\Support\Facades\DB::table('leagues')->whereId($all_details->league_id)->first();
$availability = Illuminate\Support\Facades\DB::table('leagueavailables')->whereId($all_details->leagueavailable_id)->first();
$location = Illuminate\Support\Facades\DB::table('leaguelocations')->whereId($all_details->leaguelocation_id)->first();
@endphp

<div>
    <h2>League Enquiry Details</h2>

    <p>League type: {{ $league->league_name}}</p>
    <p>Available League : {{ $all_details->avaliable_league }}</p>
    <p>Available For: {{ $availability->time }}</p>
    <p>League Location: {{ $location->location }} </p>
    <p>Club name: {{ $all_details->club_name }} </p>
    <p>Team Name: {{ $all_details->team_name }} </p>
    <p>Age Group: {{ $all_details->age_group }} </p>
    <p>Birth Year: {{ $all_details->birth_year }} </p>
    <p>Gender: {{ $all_details->gender }} </p>
    <p>Parent Name: {{ $all_details->parents_name }} </p>
    <p>Email: {{ $all_details->email }} </p>
    <p>Phone: {{ $all_details->phone }} </p>
    <p>Address: {{ $all_details->address }} </p>
    <p>City: {{ $all_details->city }} </p>
    <p>State: {{ $all_details->state }} </p>
    <p>Zipcode: {{ $all_details->zipcode }} </p>

</div>