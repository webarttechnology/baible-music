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
                            <a href="{{ url('author/category/add') }}" class="btn btn-primary m-b-5 m-t-5 pull-right"><i class="fa fa-plus"
                                    aria-hidden="true"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div style="color:green; padding-left:50px ">{{ Session::get('successmsg') }}</div>
                        <div style="color:red; padding-left:50px ">{{ Session::get('errmsg') }}</div>
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="15%">Name</th>    
                                    <th>Slug Name</th>
                                    <th>Details</th>                            
                                    <th width="20%">Status</th>
                                    <th width="5%">Action</th>
                                </tr>
                                <tbody>
                                @foreach($category as $item)
                                <tr>
                                    <td style="color: black;">{{ $loop -> index + 1 }}</td>
                                    <td style="color: black;">{{ $item -> name }}</span></td>
                                    <td style="color: black;">{{ $item -> slug_name }}</span></td>
                                    <td style="color: black;">{{ $item -> details }}</span></td>
                                    <td> <span
                                            class="badge {{ $item -> isActive?'badge-success':'badge-danger' }} m-b-5">{{ $item -> isActive?'Active':'Inactive' }}</span>
                                    </td>

                                    <td style="color: black;"><a
                                            href="{{ URL('/author/category/update/'.$item -> id) }}"><i
                                                class="fa fa-pencil-square" aria-hidden="true"></i></a> | <a
                                            href="{{ URL('/author/category/delete/'.$item -> id) }}"
                                            onclick="return confirm('Do you really want to delete this data?')"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
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