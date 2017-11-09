<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
         <td valign="middle">
         <p><strong>Dear Member,</strong></p>
         <p><strong>Thank you for submitting your ship request. We look forward to preparing your shipment to the highest standards.</strong></p>
         <br>
         <p>Package(s) included:</p>
         @if(!empty($packages))
         <table border="1" style="border-collapse: collapse;font-size: 14px;width: 100%;max-width: 650px;text-align: left;">
            <thead>
                <tr>
                    <th style="padding: 10px;">Arrived</th>
                    <th style="padding: 10px;">From</th>
                    <th style="padding: 10px;">Weight(Kg)</th>
                    <th style="padding: 10px;">Tracking#</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packages as $package)
                <tr>
                    <td style="padding: 5px;">{{date("j F Y", strtotime($package->received))}}</td>
                    <td style="padding: 5px;">{{$package->seller}}</td>
                    <td style="padding: 5px;">{{$package->weight}}</td>
                    <td style="padding: 5px;">{{$package->refference}}</td>
                </tr>
                @endforeach
            </tbody>    
         </table>
         <br>
         @endif
            <br>
            <p><strong>Ship-to address:</strong></p>
            <p>
                <strong>{{$address->name}}</strong><br>
                {{$address->line1}},<br>
                @if(!empty($address->line2))
                    {{$address->line2}},<br>
                @endif
                {{$address->city}}, {{$address->state}},<br>
                {{$address->country}} - {{$address->pin}}<br>
                +{{$address->code}} {{$address->phone}}
            </p>

            <p><i>Kindly verify the address once again as wrong address can attract a very high penalty.</i></p>
            <p>For more information about your shipment, sign in to your Shoppre account and view your <a href="#" target="_blank">Queue</a>. We will update the payment details in the <a href="#" target="_blank">Queue</a> once the we have packed the item.</p>

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