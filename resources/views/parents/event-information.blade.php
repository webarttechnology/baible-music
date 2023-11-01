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
            <h4 class="page-title">{{ucfirst($title)}} Information</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ucfirst($title)}}</li>
            </ol>
        </div>
        <!--page-header closed-->
        <!--row open-->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ucfirst($title)}} </h4>
                    </div>
                    <div class="card-body">
                        <div style="color:green; padding-left:50px ">{{ Session::get('successmsg') }}</div>
                        <div style="color:red; padding-left:50px ">{{ Session::get('errmsg') }}</div>


                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="15%">Organization Name</th>
                                    <th width="15%">Location</th>
                                    <th width="15%">Time</th>
                                    <th width="20%">Status</th>
                                </tr>
                            <tbody>
                                @foreach($event as $key => $item)
                                <tr>
                                    <td style="color: black;">{{ $key + 1 }}</td>
                                    <td style="color: black;">{{ $item->organization->name }}</span></td>
                                    <td style="color: black;">{{ $item->location }}</span></td>
                                    @if($title == "camp" )
                                    <td style="color: black;">{{ $item->campavailable->time }}</span></td>
                                   @endif
                                      @if($title == "league" )
                                    <td style="color: black;">{{ $item->leagueavailable->time }}</span></td>
                                   @endif
                                      @if($title == "tournament" )
                                    <td style="color: black;">{{ $item->tournamentavailable->time }}</span></td>
                                   @endif
                                      @if($title == "training" )
                                    <td style="color: black;">{{ $item->trainingavailable->time }}</span></td>
                                   @endif
                                    <td>
                                        @if($item->isactive == 1)
                                            <span class="font-weight-bold btn btn-success" style="border-radius: 25px;">Active</span>
                                        @else
                                            <span class="font-weight-bold btn btn-danger" style="border-radius: 25px;">Inactive</span>
                                        @endif
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