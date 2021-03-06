<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
    <tbody>
        <tr>
            <td valign="middle">
                <p><strong>Dear Customer,</strong></p>
                @php
                    switch ($shipment->payment_gateway_name) {
                        case 'wire':
                            $payment_gateway_name = 'Wire Transfer / Money Order';
                        break;
                         case 'cash':
                            $payment_gateway_name = 'Paper Cash';
                        break;
                        case 'paypal':
                            $payment_gateway_name = 'PAYPAL';
                        break;
                        case 'paytm':
                            $payment_gateway_name = 'PAYTM';
                        break;
                        case 'card':
                            $payment_gateway_name = 'Credit/Debit Card';
                        break;
                        case 'pending':
                            $payment_gateway_name = 'Pending';
                        break;
                        default:
                            $payment_gateway_name = '';
                        break;
                    }
                @endphp

                <p>This is to inform you that we have received the payment from your end via {{$payment_gateway_name}}.</p>
                <p>The shipment will be dispatched within the next 24 hours. Will keep you posted on the same.</p>
                <p>Any questions? <a href="{{route('contact')}}">Contact Us</a>.</p>
                <br>
                Best regards,
                <br>
                Your Team at Shoppre
                <br><br>
                Note:This is a system alert message. Please do not reply to this email
                <br>
                <p><a href="tel:+91 80 4049 4077">+91 80 4049 4077</a> | <a href="mailto:support@shoppre.com">support@shoppre.com</a> | <a href="https://www.google.co.in/maps/place/Shoppre.com+-+Your+Global+Shipping+Partner/@12.925805,77.6332563,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae146191401f95:0x1cf2770c1532d7d1!8m2!3d12.9257998!4d77.635445"> #181, 1st Floor, 2nd Cross Rd, 1st Block Koramangala, Bengaluru, Karnataka 560034</a></p>
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
