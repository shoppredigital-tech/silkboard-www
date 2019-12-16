<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style media="all" type="text/css">
        @media only screen and (max-device-width:480px){table[class=body] .content,table[class=body] .wrapper{padding:0!important}table[class=body] .container{padding:0!important;width:100%!important}}@media only screen and (max-width:620px){table[class=body] h1,table[class=body] h2,table[class=body] h3,table[class=body] h4{font-weight:600!important}table[class=body] h1{font-size:22px!important}table[class=body] h2{font-size:18px!important}table[class=body] h3{font-size:16px!important}table[class=body] .content,table[class=body] .wrapper{padding:10px!important}table[class=body] .container{padding:10px!important;width:100%!important}table[class=body] .btn a,table[class=body] .btn table{width:100%!important}}
    </style>
</head>

<body style="margin: 0; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; height: 100% !important; line-height: 1.6em; -webkit-font-smoothing: antialiased; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; width: 100% !important; background-color: #f6f6f6;">

<table class="body"
       style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;"
       width="100%" bgcolor="#f6f6f6">
    <tr>
        <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top;"
            valign="top"></td>
        <td class="container"
            style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto !important; max-width: 900px; padding: 10px; width: 900px;"
            valign="top">
            <div class="content"
                 style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 900px; padding: 0px; font-family: 'Source Sans Pro', Helvetica, Arial, 'Lucida Grande', sans-serif !important;">
                <span class="preheader"
                      style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>
                <div class="action-header bg-primary padder-sm"
                     style="box-sizing: border-box; width: 100%; padding: 10px !important; background-color: #4173A9;">
                    <table style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
                           width="100%">
                        <tr>
                            <td class="align-center"
                                style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top; text-align: center;"
                                valign="top" align="center">
                                <a href="https://www.shopprecouriers.com"
                                   style="box-sizing: border-box; color: #4173A9; text-decoration: none;"><img
                                            src="{{env('AWS_CLOUD_FRONT')}}/img/logo.png" height="50" alt="Shoppre"
                                            style="-ms-interpolation-mode: bicubic; max-width: 100%;"></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <table class="main"
                       style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #f2f2f2; border: 1px solid #e9e9e9; border-radius: 3px;"
                       width="100%">
                    <tr>
                        <td class="wrapper"
                            style="box-sizing: border-box; font-size: 14px; vertical-align: top; font-family: 'Source Sans Pro', Helvetica, Arial, 'Lucida Grande', sans-serif; padding: 0;"
                            valign="top">
                            <table style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"
                                   width="100%">
                                <tr>
                                    <td valign="top">
                                        {{--<p style="color: #1f2533;"><font size="5"> Dear {{$data->first_name}} {{$data->last_name}},</font></p>--}}
                                        <p style="color: #1f2533;"><font size="5"> Dear {{$data->first_name}} {{$data->last_name}},</font></p>

                                        <p style="font-size: 16px;color: #1f2533;">
                                            Thank you for reaching out to ShoppRe Couriers!
                                            <br><br>We have received your pick up request. Please note that our team
                                            is working on the same and will connect with you shortly.
                                            <br><br>
                                            Our working hours are from 9:00 AM to 7:00 PM Indian Standard Time,
                                            Monday through Saturday.If you have any queries write to us at
                                            support@shopprecouriers.com.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <table cellpadding="0" cellspacing="0" border="2" align="center"
                                               style="width: 100%">
                                            <thead>
                                            <tr>
                                                <th>Pickup Address</th>
                                                <th>Destination Address</th>
                                                <th>Mobile Number</th>
                                                <th>Package Dimentions</th>
                                                <th>Package Items</th>
                                                <th>Special Items</th>
                                                <th>Package Weight</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    {{$data->pc_fname}} {{$data->pc_lname}}<br>
                                                    {{$data->pc_street}},{{$data->pc_city}},<br>
                                                    {{$data->pc_state}}-{{$data->pc_pincode}}
                                                </td>
                                                <td>
                                                    {{$data->dc_fname}} {{$data->dc_lname}}<br>
                                                    {{$data->dc_street}},{{$data->dc_city}},<br>
                                                    {{$data->dc_state}}-{{$data->dc_pincode}}
                                                </td>
                                                <td>{{$data->mobile}}</td>
                                                <td>{{$data->size_of_package}}</td>
                                                <td><p>{{$data->package_items}}</p></td>
                                                <td><p>{{$data->special_items}}</p></td>
                                                <td>{{$data->package_weight}} kg.</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                            style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top; padding:0px 10px 10px 10px;"
                                            valign="top">
                                        <br>
                                        <p style="font-size: 16px;color: #1f2533;">
                                            Thank you and have a great day ahead! <br>
                                            <br>
                                            Best Regards,<br>
                                            Team ShoppReCouriers <br><br>
                                            Note: This is a system alert message. Please do not reply to this email <br>
                                            +91 8277-919191 | <span style="color: dodgerblue">support@shopprecouriers.com</span> | #181, 1st
                                            Floor, 2nd Cross Rd, 1st Block Koramangala, Bengaluru, Karnataka 560034
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                            style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top; padding:0px 10px 10px 10px;"
                                            valign="top">
                                        <br>
                                        <p style="font-size: 16px;color: #1f2533;">
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="padder-md"
                                        style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top; padding: 20px; "
                                        valign="top">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="footer" style="box-sizing: border-box; clear: both; width: 100%;">
                    <table style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; color: #999999; font-size: 12px;"
                           width="100%">
                        <tr style="color: #999999; font-size: 12px;">
                            <td class="align-center"
                                style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; vertical-align: top; font-size: 12px; color: #999999; text-align: center; padding: 20px 0;"
                                valign="top" align="center">
                                <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: normal; margin: 0; margin-bottom: 15px; color: #999999; font-size: 12px;">
                                    <a href="https://www.shopprecouriers.com/?src=email-SchedulePickup-form" target="_blank"
                                       style="box-sizing: border-box; text-decoration: none; color: #999999; font-size: 12px;">Visit
                                        shoppreCouriers.com</a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </td>
        <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top;"
            valign="top"></td>
    </tr>
</table>

</body>
</html>
