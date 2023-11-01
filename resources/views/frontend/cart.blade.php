<x-header page="contact" active="cart"/>
@if(count($addtocart) !== 0)
<section class="cartsec py-5">
	<div class="container">
        <div class="row">
            <div class="col-lg-8  mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                             <th>Type</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach($addtocart as $item)
                        <tr>
                            <td class="align-middle"><img src="{{ asset($item['extra_info']['image']['img']) }}" alt="" style="width: 50px;">{{ $item['title'] }}</td>
                             <td class="align-middle">{{ $item['option']['size']['value'] }}</td>
                            <td class="align-middle">{{ number_format($item['price'],2) }}</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-block btn-minus" type="button" id="{{ "minus_".$item['hash'] }}" onclick="minus('{{ $item['hash'] }}')" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center" id="{{ "quantity_".$item['hash'] }}" value="{{ $item['quantatity'] }}">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-block btn-plus" type="button" id="{{ "add_".$item['hash'] }}" onclick="add('{{ $item['hash'] }}')">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><a href="{{ url('remove-cart/'.$item['hash']) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="arrowprt mt-3">
                             <a href="{{ url('bible-music-free') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> CONTINUE TO SHOPPING</a>
                </div>
            </div>
            <div class="col-lg-4">
            <div class="paymentprt" id="order">
                <!-- <form class="mb-30" action="{{ url('checkout')}}" method="post">
                    <h5 class="mt-3 mb-4"><span class="pr-3">Cart Summary</span></h5>
                    <div class="sub-part mb-5">
                        <div class="border-bottom pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Subtotal</h6>
                                <h6>$150</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">$10</h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Total</h5>
                                <h5>$160</h5>
                            </div>
                            <button class="btn btn-block font-weight-bold my-3 py-3">Proceed To Checkout</button>
                        </div>
                    </div>
                </form> -->
            </div>
           </div>
        </div>
      </div>
    </section>
    @else

    <section class="addcartst py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
             <div class="carticon">
                  <img src="{{ asset('frontend/img/cart.png') }}" alt="">
             </div>            
             <h3>Your cart is empty</h3>
             <div class="btnprt mt-5 text-center">
                  <a href="{{ url('bible-music-free') }}" class="primary-btn">Shop Now</a>
             </div>
            </div>
        </div>
    </div>
</section>

@endif
    <x-footer page="contact"/>

<script>
        $(document).ready(function(){	
            //alert("Ok");	
		$.ajax({
               type:'GET',
               url:'/order-summery',
               success:function(data) {
					$("#order").html(data);
               }
            });
	})

    function add(productid){
		const id = "minus_"+productid;
		const qtid = "quantity_"+productid;
		const latestQnt = parseInt($("#"+qtid).val())+1;
        //alert(latestQnt);
		$("#"+qtid).val(latestQnt);
		if(latestQnt == 1){
			$("#"+id).css("visibility", "hidden")
		}else{
			$("#"+id).css("visibility", "visible")
		} 


		$.ajax({
               type:'GET',
               url:'/order-update-quantities',
			   data: {
					hashCode: productid,
					latestQnt: latestQnt
			   },
			   cache: false,
               success:function(data) {
				$("#order").html(data);
               }
         });
		
	}

	function minus(productid){
		const id = "minus_"+productid
		const qtid = "quantity_"+productid
		const latestQnt = parseInt($("#"+qtid).val())-1;
		if(latestQnt >=1){
			$("#"+qtid).val(latestQnt);
		}
		if(latestQnt <= 1){
			$("#"+id).css("visibility", "hidden")
		}else{
			$("#"+id).css("visibility", "visible")
		} 
		$.ajax({
               type:'GET',
               url:'/order-update-quantities',
			   data: {
					hashCode: productid,
					latestQnt: latestQnt
			   },
			   cache: false,
               success:function(data) {
				$("#order").html(data);
               }
         });
	}

  
</script>