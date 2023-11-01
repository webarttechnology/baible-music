<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 0;
    text-align: left;
    padding: 8px;
}

table {
border-collapse: collapse;
width: 100%;
}

.list th, td {
    text-align: left;
    padding: 8px;
    font-size: 15px;
    border-bottom: 1px solid #ccc;
        line-height: 25px;
}

</style>
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eee2ff" style="width:600px;margin:30px auto;box-shadow: 2px 2px 10px 3px #ccc;">
  <tbody>
    <tr>
     <td style="padding:0 !important;">
       <div class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:center;padding:45px;position:relative;overflow:hidden;">
        <div class="crcl1" style="position:absolute;width: 175px;height: 175px;border-radius: 50%;    background: #bbbbbb;top: -77px;right: -60px;"></div>
        <img src="https://biblemusic.com/frontend/img/scripture-songs-logo.jpg" border="0" width="200" height="auto" alt="" style="border-radius: 5px;">
         <div class="h4" style="color:#333; font-family:'Source Sans Pro',Arial,sans-serif, 'SSP'; font-size:20px; line-height:24px; text-align:left;font-weight: 600;margin-top:25px;     margin-bottom: 5px;
            padding-left: 82px;">
          congratulations, you have received {{ count($order)}} new order
        </div>
 @foreach($order as $item)
        
        <div class="h4" style="color:#333; font-family:'Source Sans Pro',Arial,sans-serif, 'SSP'; font-size:20px; line-height:24px; text-align:left;font-weight: 600;margin-top:25px;     margin-bottom: 5px;
            padding-left: 82px;">
           Order {{ $loop -> index + 1 }}
        </div>
    
         <table style="margin-left: 5rem;width: 75%;" class="list">
              <tr>
                  <td>Invoice No</td>
                  <td>{{$item->invoice->invoice_no }}</td>
                  
              </tr>
              <tr>
                  <td>Order No</td>
                  <td>{{$item->invoice->order_no }}</td>
                  
              </tr>
              <tr>
                  <td>Album Name</td>
                  <td>{{$item->product->album->title}}</td>
                
              </tr>
              <tr>
                  <td>Type</td>
                  <td>{{$item->product->type}}</td>
                
              </tr>
              @if($item->product->type == "CD")
               <tr>
                  <td>Country</td>
                  <td>{{$item->country}}</td>
                
              </tr>
               <tr>
                  <td>City</td>
                  <td>{{$item->city}}</td>
                
              </tr>
               <tr>
                  <td>State</td>
                  <td>{{$item->state}}</td>
                
              </tr>
               <tr>
                  <td>Pincode	</td>
                  <td>{{$item->pincode	}}</td>
                
              </tr>
                <tr>
                  <td>Deliver as soon as possible</td>
                  <td></td>
                
              </tr>
             
            
              @endif
             
          </table>

          @endforeach

         <!-- <div class="h2" style="color:#4a4a44; font-family:'Source Sans Pro',Arial,sans-serif, 'SSP'; font-size:35px; line-height:24px; text-align:center;font-weight: 600;margin:25px auto;background:#fff; padding:20px;width:145px;">
             110001
        </div> -->
          <!-- <div class="text-price" style="color:#f30; font-family:Arial,sans-serif, 'SSP'; font-size:17px; line-height:5px; text-align:center;margin-top:25px;">
           Valid for 10 minutes only
         </div> -->
         <div class="crcl2" style="position:absolute;width: 175px;height: 175px;border-radius: 50%;    background: #bbbbbb;bottom: -77px;left: -60px;"></div>
       </div>
     </td>
    </tr>
   </tbody>
 </table>      

</body>
</html>
