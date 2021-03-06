<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
         <td valign="middle">
         <p><strong>Dear Member,</strong></p>
         <p>Good news! A package has arrived in your locker:</p>
         <p><strong>Package ID:</strong> <a href="{{route('customer.login')}}">{{$order_id}}</a></p>
         <p><strong>From:</strong> {{$seller}}</p>
         <p><strong>Weight:</strong> {{$weight}} Kg.</p>
         <p><strong>Sent to:</strong> {{$name}}</p>
         <br>

         @if(!empty($items))
         <table border="1" style="border-collapse: collapse;font-size: 14px;width: 100%;max-width: 650px;text-align: left;">
            <thead>
                <tr>
                    <th style="padding: 10px;">Quantity</th>
                    <th style="padding: 10px;">Description</th>
                    <th style="padding: 10px;">Unit Price</th>
                    <th style="padding: 10px;">Total Value</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $i = 0;
                  $totalvalue = 0;
                @endphp
                @foreach($items as $item)
                <tr>
                    <td style="padding: 5px;">{{$item->quantity}}</td>
                    <td style="padding: 5px;">{{$item->item}}</td>
                    <td style="padding: 5px;">{{$item->price}}</td>
                    <td style="padding: 5px;">{{$item->total}}</td>
                </tr>
                @php
                  $totalvalue += $item->total;
                @endphp
                @endforeach
                <tr style="font-size: 16px;font-weight: bold;">
                    <td colspan="2" style="padding:20px;"></td>
                    <td style="padding: 5px;">Totals</td>
                    <td style="padding: 5px;">{{$totalvalue}}</td>
                </tr>
            </tbody>
         </table>
         <br>
         @endif

         <p><a href="{{route('customer.login')}}" target="_blank">Sign in</a> to your Shoppre account to review or edit your item values, or update your <a href="{{route('customer.ship.prefer')}}" target="_blank">shipping preferences</a> before creating a ship request. </p>
         <p>Questions? <a href="{{route('faq')}}" target="_blank">Visit our FAQ page</a> for expert advice and answers to your questions. </p>
         <p>
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
