<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
         <td valign="middle">
         <p><strong>Dear Customer,</strong></p>
         <p><strong>We are excited to inform you that your shipment from India has been prepared:</strong></p>
         @php
            $tracking = $shipment->tracking;
         @endphp
         @if(!empty($tracking))
             <table border="1" style="border-collapse: collapse;font-size: 14px;width: 100%;max-width: 650px;text-align: left;">
                <tbody>
                    <tr>
                        <td style="padding: 5px;">Carrier:</td>
                        <td style="padding: 5px;">{{$tracking->carrier}}</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;">Ship Date:</td>
                        <td style="padding: 5px;">{{date("j F Y", strtotime($tracking->ship_request_date))}}</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;">Number of Boxes:</td>
                        <td style="padding: 5px;">{{$tracking->box_nos}}</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;">Package Weight:</td>
                        <td style="padding: 5px;">{{$tracking->package_weight}}</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;">Declared Value:</td>
                        <td style="padding: 5px;">INR {{$tracking->package_value}} (for customs purposes)</td>
                    </tr>
                </tbody>
             </table>
         @endif
            <p>You have rightfully earned Shoppre Loyalty Points simply by making a shipment! To know more about Loyalty Points <a href="{{route('customer.loyalty.points')}}"  target="_blank">Click Here</a>.</p>
            <p><strong>Ship-to address:</strong></p>
            <p>
                <strong>{{$shipment->full_name}}</strong><br>
                {{$shipment->address}}<br>
                {{$shipment->phone}}
            </p>
            <p>You can now view your Shipment under <a href="{{route('shipping.history')}}"  target="_blank">Shipment History</a></p>
            <p>The airway bill number is <strong>{{$tracking->tracking_id}}</strong>. You can use this <a href="{{$tracking->tracking_url}}" target="_blank">link</a> to track the package. <strong><i>Please note that tracking might be available only within the next 24 hours.</i></strong></p>
            <p>Thank you for shipping your purchases with Shoppre! We will keep you posted about the tracking details of the shipment. For additional questions about your shipment, you may reply to this mail.</p>
            Best regards,
            <br>
            Your Team at Shoppre
            <br><br>
            Note:This is a system alert message. Please do not reply to this email
            <br>
            <p>
            <a href="tel:+91 80 4049 4077">+91 80 4049 4077</a> | <a href="mailto:support@shoppre.com">support@shoppre.com</a> | <a href="https://www.google.co.in/maps/place/Shoppre.com+-+Your+Global+Shipping+Partner/@12.925805,77.6332563,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae146191401f95:0x1cf2770c1532d7d1!8m2!3d12.9257998!4d77.635445"> #181, 1st Floor, 2nd Cross Rd, 1st Block Koramangala, Bengaluru, Karnataka 560034</a>
            </p>
         </p>
         </td>
      </tr>
      <tr>
        <td valign="top">
         <table cellpadding="0" border="0" width="100%" style="margin-top: 15px;background-color:#1f2533;" cellspacing="0">
            <tbody>
               <tr>
                 <td valign="top" width="100">
                   <a target="_blank" href="{{route('home')}}" style="text-decoration:none;color:#1f2533;font-weight:bold">
                     <img src="http://www.shoppre.com/img/logo.png" style="display:block;background-color:#1f2533;color:#010101;padding:10px;padding-left:30px;width: 100px;" alt="" border="0" class="CToWUd">
                   </a>
                 </td>
                 <td valign="top" width="300" style="color:#fff;font-size:12px;text-align:right;padding: 30px 30px 0 0;line-height: 0px;">All Rights Reserved. Copyright © <a target="_blank" href="{{route('home')}}" style="text-decoration:none;color:#fff;font-weight:bold">Shoppre.com</a>
                 </td>
               </tr>
            </tbody>
         </table>
        </td>
      </tr>
   </tbody>
</table>
