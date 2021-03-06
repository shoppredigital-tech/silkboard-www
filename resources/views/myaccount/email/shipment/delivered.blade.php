<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
    <tbody>
        <tr>
            <td valign="middle">
                <p><strong>Dear Customer,</strong></p>
                <p><strong>We are happy to know that your shipment was delivered on {{date("j F Y", strtotime($shipment->updated_at))}}.</strong></p>
                <p>You can view your invoice <a href="{{route('shipping.invoice', [$shipment->order_id])}}" target="_blank">Here</a></p>
                <p>Shoppre is dedicated to providing an enjoyable, affordable and personalized shipping experience to consumers who love to shop from India. We rely on customers like you to give us feedback on what we are doing right, and what we could do better.</p>
                <p><strong>Please click the link below to complete a short, one-minute confidential survey about this shipment</strong>. Your opinions will help shape our future decisions, and allow us to maintain our position as the industry leader.</p>
                <p>Earn 50 loyalty points by answering this quick 3 question survey!</p>
                <p><strong><a href="https://www.shoppre.com/feedback" target="_blank">Start Survey</a></strong></p>
                <p>Earn another 100 loyalty points by giving a quick review on both Google and Facebook each.</p>
                <p><a href="https://goo.gl/Hfqj8r" target="_blank">Google Review Here</a> / <a href="https://www.facebook.com/pg/goshoppre/reviews/?ref=page_internal" target="_blank">Facebook Review Here</a></p>

                Thank You,
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
