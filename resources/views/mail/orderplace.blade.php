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
        <div class="h4" style="color:#333; font-family:'Source Sans Pro',Arial,sans-serif, 'SSP'; font-size:20px; line-height:24px; text-align:left;font-weight: 600;margin-top:25px; margin-bottom: 20px;">
          Dear {{ $userNmae }},
        </div>
        <div class="p" style="font-size: 22px; line-height: 1.5; text-align: left; ">
         <p> Congratulations on your purchase of {{$order->album->title }}. Your order delivery soon. </p>
             <p>  If you have any questions about your order or need assistance, feel free to reply to this email or contact our customer support team .</p>

              <p>We hope you enjoy your purchase! Thank you for choosing us. </p>
        </div>
        <!-- <div class="text-price" style="color:#4a4a44; font-family:Arial,sans-serif, 'SSP'; font-size:17px; line-height:5px; text-align:center;margin-top:22px;">
           <a href="{{asset($order->file) }}" style="display: inline-block;text-decoration: none;width: 100px;margin: 0 auto;background: #2e43ac;padding: 15px;color:#fff;    height:12px;line-height: 12px;border-radius: 5px;font-weight: 500;">Download</a>
         </div> -->
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
