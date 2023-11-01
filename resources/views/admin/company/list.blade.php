<x-adminheader/>
<x-navbar/>

<div class="app-content">
    <div class="section">
        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title">{{$title}} List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$title}} List</li>
            </ol>
        </div>
        <!--page-header closed-->
        <!--row open-->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{$title}} List
                            <!-- <a href="javascript:void(0)" data-toggle="modal" data-target="#addmodel"
                                class="btn btn-primary m-b-5 m-t-5 pull-right"><i class="fa fa-plus"
                                    aria-hidden="true"></i></a> -->
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- @foreach($errors -> all() as $errvalue)
                        <span style="color:red">{{ $errvalue }}</span>
                        @endforeach -->

                        @if(Session::has('comp_updatemsg'))
                        <div style="color:green; padding-left:50px ">{{ Session::get('comp_updatemsg') }}</div>
                        @endif

                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th width="2%">ID</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Mobile</th>
                                    <th width="10%">Email</th>
                                    <th width="15%">Category Logo</th>                                
                                    <!-- <th width="20%">Status</th> -->
                                    <th width="5%">Action</th>
                                </tr>
                                <tbody>
                               
                                <tr>
                                    <td style="color: black;">1</td>
                                    <td style="color: black;">{{ $details -> name }}</span></td>
                                    <td style="color: black;">{{ $details -> mobile_no }}</span></td>
                                    <td style="color: black;">{{ $details -> email_id }}</span></td>

                                    <td style="color: black;"><div class="img">
                                        <img src="{{ asset($details->logo) }}" alt="" height="60px" weidth="40px">
                                    </div></span></td>
                                    <!-- <td> <span
                                            class="badge {{ $details -> is_active?'badge-success':'badge-danger' }} m-b-5">{{ $details -> is_active?'Active':'Inactive' }}</span>
                                    </td> -->

                                    <td style="color: black;"><a
                                            href="{{ URL('/author/company/update', $details -> id) }}"><i
                                                class="fa fa-pencil-square" aria-hidden="true"></i></a>

                                                <!-- | 
                                                <a
                                            href="{{ URL('/author/category/delete/'.$details -> id) }}"
                                            onclick="return confirm('Do you really want to delete this data?')"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></a> -->
                                    </td>
                                </tr>
                            
                            </tbody>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--row closed-->
    </div>
</div>

<x-adminfooter/>