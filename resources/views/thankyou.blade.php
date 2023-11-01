<x-header page="contact" active="thankyou"/>
    <!-- Header Section End -->

<section class="thankyousec py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-md-8">
               <div class="thnkbx text-center">
                   <div class="thnkimg">
                       <img src="images/email.png" alt="">
                   </div>
                  <h1>Thank You for Your Purchase!</h1>
                  <p>Your payment was successfully processed through {{$invoice_no->payment_option }}.</p>
                  <p>To download your purchased item, please check your mail</p>
                  <p>Please note that you must unzip the downloaded file to access its contents.</p>
                  <p>Thank you for choosing our products/services!</p>
                   <div class="btnprt">
                       <a href="{{ url('/') }}" class="cmnbtn">Back to Site</a>
                   </div>
               </div>
           </div>   
        </div>
    </div>
</section>


<x-footer page="contact" />