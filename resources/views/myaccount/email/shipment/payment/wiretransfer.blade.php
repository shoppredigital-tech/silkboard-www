<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
    <tbody>
        <tr>
            <td valign="middle">
                <p><strong>Dear Customer,</strong></p>
                <p>This mail is to inform you that we have not yet received your payment of INR {{$shipment->final_amount}} for your Shipment Order ID <a href="{{url('/shipping/queue')}}">{{$shipment->order_id}}</a>.</p>

                <p><strong>Please note: If you have not already done your payment yet, kindly do it as soon as possible, as YOUR PAYMENT HAS TO BE SUBMITTED WITHIN 7 DAYS of creating your final ship request.</strong> From the 8th day, your parcel will start accumulating Storage fees of INR 100/day which you can view in your Shoppre wallet.</p>

                <p>If you have already confirmed the payment from your end, do not worry; it may take upto 3 Business Days for us to receive the amount in Shoppre’s account. We shall update you as soon as we receive your payment.</p>

                <p>If you haven’t paid yet, you could either <a href='{{url("/shipping/request/payment/retry/{$shipment->order_id}")}}'>retry another payment method,</a> or else you could do a wire transfer.</p>
                <br>

                <p><strong>How to send a wire transfer:</strong></p>
                <ol>
                  <li><p>Please reference your LOCKER NUMBER and/or NAME.</p></li>
                  <li>
                    <p>Make your amount payable to Shoppre.com, and mail to the address below:</p>
                    <p>
                      Account Name: INDIANSHOPPRE LLP<br>
                      Account Number: 918020022874771<br>
                      Branch: Bangalore<br>
                      IFSC Code: UTIB0000009<br>
                      MICR Code: 560211002<br>
                      E-mail ID: finance@shoppre.com<br>
                      Address: NO. 9, M.G. ROAD, BLOCK 'A'<br>
                      Swift Code: AXISINBB009
                    </p>
                  </li>
                  <li>
                    <p>Please send Shoppre a notification email as soon as the amount has been transferred.</p>
                  </li>
                  <li>
                    <p>It might take upto 24 hours for Shoppre to confirm the payment. Upon confirmation, we will dispatch your items within a maximum period of 48 hours.</p>
                  </li>
                </ol>

                <p>Please contact us in case you have any doubts to prevent any interruption of your service.</p>

                <br>
                Thanking You,
                <br>
                Team Shoppre
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
                       <a target="_blank" href="{{url('/')}}" style="text-decoration:none;color:#1f2533;font-weight:bold">
                         <img src="http://www.shoppre.com/img/logo.png" style="display:block;background-color:#1f2533;color:#010101;padding:10px;padding-left:30px;width: 100px;" alt="" border="0" class="CToWUd">
                       </a>
                     </td>
                     <td valign="top" width="300" style="color:#fff;font-size:12px;text-align:right;padding: 30px 30px 0 0;line-height: 0px;">All Rights Reserved. Copyright © <a target="_blank" href="{{url('/')}}" style="text-decoration:none;color:#fff;font-weight:bold">Shoppre.com</a>
                     </td>
                   </tr>
                </tbody>
             </table>
            </td>
          </tr>
    </tbody>
</table>
