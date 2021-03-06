<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
         <td valign="middle">
         <p><strong>Dear Customer,</strong></p>
         <p><strong>Please see the final shipment details of the order placed.</strong></p>
         @if(!empty($shipment))
         <table border="1" style="border-collapse: collapse;font-size: 14px;width: 100%;max-width: 650px;text-align: left;">
            <thead>
                <tr>
                    <th style="padding: 10px;">Shipment Order #</th>
                    <th style="padding: 10px;">Weight(Kg)</th>
                    <th style="padding: 10px;">Est.cost</th>
                    <th style="padding: 10px;">Shipment status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 5px;"><a href="{{route('shipping.queue')}}">{{$shipment->order_id}}</a></td>
                    <td style="padding: 5px;">{{$shipment->weight}} Kg</td>
                    <td style="padding: 5px;">INR {{$shipment->estimated}}</td>
                    <td style="padding: 5px;"><a href="{{route('shipping.queue')}}">Submit Payment</a></td>
                </tr>
            </tbody>
         </table>
         @endif

            <p><a href="{{route('customer.login')}}">Sign in</a> to your Shoppre account and view your <a href="{{route('shipping.queue')}}">Queue</a> and confirm your order at the earliest</p>
            <p>We request you to submit your payment within 7 days of receiving this email.  <br>
                Your parcel will start incurring storage cost of Rs. 100/day from the 8th day onwards, which you can view in your Shoppre wallet.</p>
             <p>Kindly note that if you choose Wire Transfer as your payment method, it may take up to 7 business days for the amount to reflect in our account since it’s an International Wire Transfer. In such a case, we advise you to opt for an alternative payment method if your shipment is urgent or if you don’t want to be charged with storage cost. Also, we currently do not accept Western Union Money Transfers.</p>

             Best regards,
            <br>
            Your Team at Shoppre
            <br><br>
            Note:This is a system alert message. Please do not reply to this email
             <br>
             @if($shipment->is_axis_banned_item)
                 <p style="color: red">Note: {{$pay_method}}</p>
             @endif
             <p>Please click this link to make the payment</p>
             <a href="{{$payment_url}}" target="_blank">
                 <p>{{$payment_url}}</p>
             </a>
             <br>
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

