<!DOCTYPE html>
<html lang="en">
<head>
<title>viewerquest</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<style type="text/css">

    /* CLIENT-SPECIFIC STYLES */
    #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
    .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
    body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
    table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
    img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

    /* RESET STYLES */
    body{margin:0; padding:0;}
    img{border:0;  line-height:100%; outline:none; text-decoration:none;}
    table{border-collapse:collapse !important;}
    body{height:100% !important; margin:0; padding:0; width:100% !important;}

    /* iOS BLUE LINKS */
    .appleBody a {color:#68440a; text-decoration: none;}
    .appleFooter a {color:#999999; text-decoration: none;}

    /* MOBILE STYLES */
    @media screen and (max-width: 525px) {

        /* ALLOWS FOR FLUID TABLES */
        table[class="wrapper"]{
          width:100% !important;
        }

        /* ADJUSTS LAYOUT OF LOGO IMAGE */
        td[class="logo"]{
          text-align: left;
          padding: 20px 0 20px 0 !important;
        }

        td[class="logo"] img{
          margin:0 auto!important;
        }

        /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
        td[class="mobile-hide"]{
          display:none;}

        img[class="mobile-hide"]{
          display: none !important;
        }

        img[class="img-max"]{
          max-width: 100% !important;
          height:auto !important;
        }

        /* FULL-WIDTH TABLES */
        table[class="responsive-table"]{
          width:100%!important;
        }

        /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
        td[class="padding"]{
          padding: 10px 5% 15px 5% !important;
        }

        td[class="padding-copy"]{
          padding: 10px 5% 10px 5% !important;
          text-align: center;
        }

        td[class="padding-meta"]{
          padding: 30px 5% 0px 5% !important;
          text-align: center;
        }

        td[class="no-pad"]{
          padding: 0 0 20px 0 !important;
        }

        td[class="no-padding"]{
          padding: 0 !important;
        }

        td[class="section-padding"]{
          padding: 50px 15px 50px 15px !important;
        }

        td[class="section-padding-bottom-image"]{
          padding: 50px 15px 0 15px !important;
        }

        /* ADJUST BUTTONS ON MOBILE */
        td[class="mobile-wrapper"]{
            padding: 10px 5% 15px 5% !important;
        }

        table[class="mobile-button-container"]{
            margin:0 auto;
            width:100% !important;
        }

        a[class="mobile-button"]{
            width:80% !important;
            padding: 15px !important;
            border: 0 !important;
            font-size: 16px !important;
        }

    }
</style>
</head>
<body style="margin: 0; padding: 0;">

<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 0px 15px 0px 15px;" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    
                            <tr>
                                <td>
                                    <!-- COPY -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" style="font-size: 17px;font-family: Arial, sans-serif;color: #666666;padding-top: 30px;font-weight: 900;" class="padding-copy">Congratulations !! You have a new Booking. Below are the details </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
        <td bgcolor="#ffffff">
            <div align="center" style="padding: 0px 15px 0px 15px;">
                <table border="0" cellpadding="0" cellspacing="0" width="500" class="wrapper">
                    <!-- LOGO/PREHEADER TEXT -->
                    <tr>
                        <td style="padding: 20px 0px 30px 0px;" class="logo">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                
                              @foreach($orderdetails as $item)
                              <tr>
                                    <td bgcolor="#ffffff" width="140" align="left" style="margin-top: 15px;display: block;">
                                        <span style="font-size: 17px;font-family: Arial, sans-serif;color: #666666;padding-top: 30px;font-weight: 900;">C{{ $loop -> index + 1}} : </span>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td bgcolor="#ffffff" width="100" align="left" style="margin-top: 15px;display: block;">
                                        <span style="color: #666666; text-decoration: none;">Invoice No : </span>
                                    </td>
                                    <td bgcolor="#ffffff" width="400" align="right" class="mobile-hide">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="right" style="padding: 0 0 5px 0; font-size: 15px; font-family: Arial, sans-serif; color: #666666; text-decoration: none;text-transform: capitalize;font-weight: bold;"><span style="color: #666666; text-decoration: none;">{{$item->invoice-> invoice_no}} </span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                              
                                <tr>
                                    <td bgcolor="#ffffff" width="100" align="left" style="margin-top: 15px;display: block;">
                                        <span style="color: #666666; text-decoration: none;">Payment For : </span>
                                    </td>
                                    <td bgcolor="#ffffff" width="400" align="right" class="mobile-hide">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="right" style="padding: 0 0 5px 0; font-size: 15px; font-family: Arial, sans-serif; color: #666666; text-decoration: none;text-transform: capitalize;font-weight: bold;"><span style="color: #666666; text-decoration: none;">{{$item->invoice->payment_for}} </span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td bgcolor="#ffffff" width="100" align="left" style="margin-top: 15px;display: block;">
                                        <span style="color: #666666; text-decoration: none;">Parents name : </span>
                                    </td>
                                    <td bgcolor="#ffffff" width="400" align="right" class="mobile-hide">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="right" style="padding: 0 0 5px 0; font-size: 15px; font-family: Arial, sans-serif; color: #666666; text-decoration: none;text-transform: capitalize;font-weight: bold;"><span style="color: #666666; text-decoration: none;">{{$item->parents_name}} </span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td bgcolor="#ffffff" width="100" align="left" style="margin-top: 15px;display: block;">
                                        <span style="color: #666666; text-decoration: none;">Email : </span>
                                    </td>
                                    <td bgcolor="#ffffff" width="400" align="right" class="mobile-hide">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="right" style="padding: 0 0 5px 0; font-size: 15px; font-family: Arial, sans-serif; color: #666666; text-decoration: none;text-transform: capitalize;font-weight: bold;"><span style="color: #666666; text-decoration: none;">{{$item->email}} </span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td bgcolor="#ffffff" width="140" align="left" style="margin-top: 15px;display: block;">
                                        <span style="color: #666666; text-decoration: none;">Phone : </span>
                                    </td>
                                    <td bgcolor="#ffffff" width="400" align="right" class="mobile-hide">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="right" style="padding: 0 0 5px 0; font-size: 15px; font-family: Arial, sans-serif; color: #666666; text-decoration: none;text-transform: capitalize;font-weight: bold;"><span style="color: #666666; text-decoration: none;">{{$item->phone}} </span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- <tr>
                                    <td bgcolor="#ffffff" width="140" align="left" style="margin-top: 15px;display: block;">
                                        <span style="color: #666666; text-decoration: none;">Quantity: </span>
                                    </td>
                                    <td bgcolor="#ffffff" width="400" align="right" class="mobile-hide">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="right" style="padding: 0 0 5px 0; font-size: 15px; font-family: Arial, sans-serif; color: #666666; text-decoration: none;text-transform: capitalize;font-weight: bold;"><span style="color: #666666; text-decoration: none;">{{$item->invoice->quantity}} </span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr> -->

                               

                        

                                @endforeach

                                <tr>
                                    <td bgcolor="#ffffff" width="100" align="left" style="margin-top: 15px;display: block;">
                                        <span style="color: #666666; text-decoration: none;">Total Paid Amount : </span>
                                    </td>
                                    <td bgcolor="#ffffff" width="400" align="right" class="mobile-hide">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="right" style="padding: 0 0 5px 0; font-size: 15px; font-family: Arial, sans-serif; color: #666666; text-decoration: none;text-transform: capitalize;font-weight: bold;"><span style="color: #666666; text-decoration: none;">${{number_format($item->invoice->amount,2)}} </span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                             
                                
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>


</body>
</html>