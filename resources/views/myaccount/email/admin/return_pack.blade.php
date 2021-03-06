<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
        <td valign="middle">
          <p><strong>Dear Team,</strong></p>
          <p>Customer requested for package return to sender.</p>

          <p>Package included in request:</p>
          @if(!empty($package))
          <table border="1" style="border-collapse: collapse;font-size: 14px;width: 100%;max-width: 650px;text-align: left;">
              <thead>
                  <tr>
                      <th style="padding: 10px;">Arrived</th>
                      <th style="padding: 10px;">From</th>
                      <th style="padding: 10px;">Weight(Kg)</th>
                      <th style="padding: 10px;">Tracking#</th>
                      <th style="padding: 10px;"></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td style="padding: 5px;">{{date("j F Y", strtotime($package->received))}}</td>
                      <td style="padding: 5px;">{{$package->seller}}</td>
                      <td style="padding: 5px;">{{$package->weight}}</td>
                      <td style="padding: 5px;">{{$package->order_id}}</td>
                      <td style="padding: 5px;"><a href="{{route('admin.package.edit', [$package->id])}}">View Package</a></td>
                  </tr>
              </tbody>
          </table>
          @endif
          <br>
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
