@php

$invoice = Session::get('invoice_mail');

$all_details = Illuminate\Support\Facades\DB::table('trainingenquiries')->where('invoice_id', $invoice)->first();
$training= Illuminate\Support\Facades\DB::table('trainings')->whereId($all_details->training_id)->first();
$availability = Illuminate\Support\Facades\DB::table('trainingavailables')->whereId($all_details->trainingavailable_id)->first();
$location = Illuminate\Support\Facades\DB::table('traininglocations')->whereId($all_details->traininglocation_id)->first();
@endphp

<div>
    <h2>Training Enquiry Details</h2>

    <p>Training type: {{ $training->trainning_name}}</p>
    <p>Available For: {{ $availability->time }}</p>
    <p>Tournament Location: {{ $location->location }} </p>
    <p>Available Training : {{ $all_details->avaliable_trainning }}</p>
    <p>Player name: {{ $all_details->player_name }} </p>
    <p>Dob: {{ $all_details->dof }} </p>
    <p>Gender: {{ $all_details->gender }} </p>
    <p>Parent Name: {{ $all_details->parents_name }} </p>
    <p>Email: {{ $all_details->email }} </p>
    <p>Phone: {{ $all_details->phone }} </p>
    <p>Address: {{ $all_details->address }} </p>
    <p>City: {{ $all_details->city }} </p>
    <p>State: {{ $all_details->state }} </p>
    <p>Zipcode: {{ $all_details->zipcode }} </p>
    <p>Amount : {{ $all_details->amt }} </p>


</div>