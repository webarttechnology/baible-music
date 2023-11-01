<x-parentsheader/>
<x-parentsnavbar/>

<style>
    #status_btn{
        border-radius: 20px;
        width: 45%;
        text-align: center;
    }
</style>

<div class="app-content">
    <div class="section">
        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title">{{$title}}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
            </ol>
        </div>
        <!--page-header closed-->
        <!--row open-->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{$title}}</h4>
                    </div>
                    <div class="card-body">
                        <div style="color:green; padding-left:50px ">{{ Session::get('successmsg') }}</div>
                        <div style="color:red; padding-left:50px ">{{ Session::get('errmsg') }}</div>

                        <a href="{{ route('event.list', 'camp') }}" class="btn btn-primary">Camp ({{ count($camp) }})</a>
                        <a href="{{ route('event.list', 'league') }}" class="btn btn-info">League ({{ count($league) }})</a>
                        <a href="{{ route('event.list', 'tournament') }}" class="btn btn-success">Tournament ({{ count($tournament) }})</a>
                        <a href="{{ route('event.list', 'training') }}" class="btn btn-danger">Trainning ({{ count($training) }})</a>

                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="15%">Organization Name</th>
                                    <th width="15%">Event name</th>
                                    <!-- <th width="15%">Avalible For</th> -->
                                    <th width="20%">Status</th>
                                    <th width="20%">Event information</th>
                                </tr>
                            <tbody>
                                @foreach($event as $key => $item)
                                <tr>
                                    <td style="color: black;">{{ $key + 1 }}</td>
                                    <td style="color: black;">{{ $item->organization->name }}</span></td>
                                    <td style="color: black;">{{ $item->name }}</span></td>
                                    
                                  
                                   
                                    <td>
                                        @if($item->isactive == 1)
                                            <span class="font-weight-bold btn btn-success" style="border-radius: 25px;">Active</span>
                                        @else
                                            <span class="font-weight-bold btn btn-danger" style="border-radius: 25px;">Inactive</span>
                                        @endif
                                    </td>
                                    <td style="color: black;"><a
                                            href="{{ URL('/event/information/'.$event_type.'/'.$item -> id.'/'.$item->name) }}"><i
                                                class="fa fa-eye" aria-hidden="true"></i></a> 
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
<x-parentsfooter/>

<script>
$("[name='app_status']").on("change", function(e) {
    let status = $(this).val();

    if(status != "999"){
       window.location.href = window.location.origin + '/author/organization/application/status/' + status;
    }
});

$("[name='app_status1']").on("change", function(e) {
    let status = $(this).val();
    window.location.href = window.location.origin + '/author/organization/application/status/' + status;
});

$("[name='app_status2']").on("change", function(e) {
    let status = $(this).val();
    window.location.href = window.location.origin + '/author/organization/application/status/' + status;
});
</script>