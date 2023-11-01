@php

$invoice = Session::get('invoice_mail');

$all_details = Illuminate\Support\Facades\DB::table('campenquiries')->where('invoice_id', $invoice)->first();
$camp = Illuminate\Support\Facades\DB::table('camps')->whereId($all_details->camp_id)->first();
$availability = Illuminate\Support\Facades\DB::table('campavailables')->whereId($all_details->campavailable_id)->first();
$location = Illuminate\Support\Facades\DB::table('camplocations')->whereId($all_details->camplocation_id)->first();
@endphp

<div>
    <h2>Campen Enquiry Details</h2>

    <p>Camp Type: {{ $camp->camp_name}}</p>
    <p>Available Camp : {{ $all_details->avaliable_camp }}</p>
    <p>Available For: {{ $availability->time }}</p>
    <p>Camp Location: {{ $location->location }} </p>
    <p>Player Name : {{ $all_details->player_name }}</p>
    <p>DOB : {{ $all_details->dof }}</p>
    <p>Gender : {{ $all_details->gender }}</p>
    <p>Parent Name : {{ $all_details->parents_name }}</p>
    <p>Email : {{ $all_details->email }}</p>
    <p>Phone : {{ $all_details->phone }}</p>
    <p>Address : {{ $all_details->address }}</p>
    <p>City : {{ $all_details->city }}</p>
    <p>State : {{ $all_details->state }}</p>
    <p>Zip Code : {{ $all_details->zipcode }}</p>
    <p>Amount : {{ $all_details->amt }} </p>


</div>