<x-adminheader/>
<x-navbar/>
<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Admin Dashboard</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard </li>
							</ol>
						</div>
						<!--page-header closed-->

         <div class="row">
            <!--row open-->

            <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
                <div class="card bg-danger">
                    <div class="card-body">
                        <div class="card-order">
                            <h6 class="mb-2">Songs</h6>
                            <h2 class="text-right"><i class="fa fa-sitemap  mt-2 float-left"></i>
                                    <a href="">
									   <span class="text-white"> 0</span>
                                    </a>
                            </h2>
                            <p class="mb-0"><span class="float-right"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card ">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <h4 class="mb-0">Recent Order</h4>
                        </div>
                    </div>
                    <div class="">
                        <div class="table-responsive table-responsive">
                            <table class="table card-table text-nowrap">
                                <tbody>
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

                                      @foreach($order as $item)
                                <tr>
                                    <td style="color: black;">{{ $loop -> index + 1 }}</td>
                                     <td style="color: black;">{{ $item ->invoice-> invoice_no }}</span></td>
                                    <td style="color: black;">{{ $item ->invoice-> order_no }}</span></td>
                                    <td style="color: black;">{{ $item -> product->album->title }}</span></td>
                                     <td style="color: black;">{{ $item -> product->type }}</span></td>
                                      <td style="color: black;">${{number_format($item -> price,2) }}</span></td>
                                       <td style="color: black;">{{ $item -> product->type == "CD"?$item -> quantatity:"-" }}</span></td>
                                       <td style="color: black;">{{ $item -> product->type }}</span></td>
                                    
                                     <td style="color: black;">{{ $item -> address1 }}</span></td>
                                     <td style="color: black;"><span
                                            class="badge {{ $item ->invoice-> payment_status == '1'?'badge-success':'badge-danger' }} m-b-5">{{ $item ->invoice-> payment_status == "1"?'Paid':'Unpaid' }}</span></td>
                                            <td style="color: black;">{{ $item -> invoice->payment_option }}</span></td>
                                </tr>
                                @endforeach

                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</div>
<x-adminfooter/>