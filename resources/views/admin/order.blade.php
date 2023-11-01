<x-adminheader/>
<x-navbar/>
<div class="app-content">
    <div class="section">
        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title">Order List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order List</li>
            </ol>
        </div>
        <!--page-header closed-->
        <!--row open-->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order List
                            <!-- <a href="{{ url('author/category/add') }}" class="btn btn-primary m-b-5 m-t-5 pull-right"><i class="fa fa-plus"
                                    aria-hidden="true"></i></a> -->
                        </h4>
                    </div>
                    <div class="card-body">
                        <div style="color:green; padding-left:50px ">{{ Session::get('successmsg') }}</div>
                        <div style="color:red; padding-left:50px ">{{ Session::get('errmsg') }}</div>
                        <table id="customers2" class="table datatable table-responsive" >
                            <thead>
                                <tr class="border-bottom">
                                         <th width="5%">ID</th>
                                         <th width="10%">Invoice No</th> 
                                        <th width="10%">Order No</th> 
                                        <th width="10%">Album Name</th>   
                                        <th width="10%">Type</th> 
                                        <th width="10%">Amount</th>  
                                         <th width="10%">Quantatity</th>    
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Payment Status</th> 
                                        <th>Payment Type</th> 
                                    </tr>

                              <tbody>
                                  
                                      @foreach($order as $item)
                                <tr>
                                    <td style="color: black;">{{ $loop -> index + 1 }}</td>
                                     <td style="color: black;">{{ $item ->invoice-> invoice_no }}</span></td>
                                    <td style="color: black;">{{ $item ->invoice-> order_no }}</span></td>
                                    <td style="color: black;">{{ $item -> product->album->title }}</span></td>
                                     <td style="color: black;">{{ $item -> product->type }}</span></td>
                                      <td style="color: black;">${{number_format($item -> price,2) }}</span></td>
                                      <td style="color: black;">{{ $item -> product->type == "CD"?$item -> quantatity:"-" }}</span></td>
                                       <td style="color: black;">{{ $item -> email_id }}</span></td>
                                    
                                     <td style="color: black;">{{ $item -> address1 }}</span></td>
                                     <td style="color: black;"><span
                                            class="badge {{ $item ->invoice-> payment_status == '1'?'badge-success':'badge-danger' }} m-b-5">{{ $item ->invoice-> payment_status == "1"?'Paid':'Unpaid' }}</span></td>
                                            <td style="color: black;">{{ $item -> invoice->payment_option }}</span></td>
                                </tr>
                                @endforeach

                                 
                                </tbody>
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