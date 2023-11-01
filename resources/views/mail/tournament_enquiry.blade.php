@php

$invoice = Session::get('invoice_mail');

$all_details = Illuminate\Support\Facades\DB::table('tournamentenquiries')->where('invoice_id', $invoice)->first();
$tournament= Illuminate\Support\Facades\DB::table('tournaments')->whereId($all_details->tournament_id)->first();
$availability = Illuminate\Support\Facades\DB::table('tournamentavailables')->whereId($all_details->tournamentavailable_id)->first();
$location = Illuminate\Support\Facades\DB::table('tournamentlocations')->whereId($all_details->tournamentlocation_id)->first();
@endphp

<div>
    <h2>Tournament Enquiry Details</h2>

    <p>Tournament type: {{ $tournament->tournament_name}}</p>
    <p>Available Tournament : {{ $all_details->avaliable_tournament }}</p>
    <p>Available For: {{ $availability->time }}</p>
    <p>Tournament Location: {{ $location->location }} </p>
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