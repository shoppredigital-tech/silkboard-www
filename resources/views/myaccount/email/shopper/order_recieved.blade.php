<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
        <td valign="middle">

            <p><strong>Dear Member,</strong></p>

            @if($order->payment_gateway_name == 'wire')

            <p>We have received your Personal Shopper (PS) order. Your Order Number is: <a href="{{route('personal.shopper.history')}}"><b>{{$order->reference_number}}</b></a>. You have chosen Wire Transfer as the mode of payment. Upon confirmation of your payment, we shall contact you via email once we have completed the order or if we have any questions.
            <br><font color="#ff0000"><b>Gentle Reminder: We shall not be able to process your orders unless the amount that you have submitted has reflected into our account.</b></font></p>

            @else

            <p>We have received your Personal Shopper (PS) order. Your Order Number is: <a href="{{route('personal.shopper.history')}}"><b>{{$order->reference_number}}</b></a>.</p>

            @endif

            <p>Here is a summary of your order as we received it:</p>

            <table width="100%">
              <tbody>
                  <tr>
                      <td width="auto">
                          <table width="100%">
                              <tbody>
                                  <tr>
                                      <td style="vertical-align:top" width="70%">
                                          <table width="100%" style="font-size:10pt">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                      Payment type to merchant:
                                                      @php
                                                        switch ($order->payment_gateway_name) {
                                                            case 'wire':
                                                                echo 'Wire Transfer / Money Order';
                                                            break;
                                                            case 'paypal':
                                                                echo 'PAYPAL';
                                                            break;
                                                            case 'paytm':
                                                                echo 'PAYTM';
                                                            break;
                                                            case 'card':
                                                                echo 'Credit/Debit Card';
                                                            break;
                                                        }
                                                    @endphp
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                          <br>
                          <table width="100%" style="text-align:center;">
                              <thead>
                                  <tr>
                                      <th>Locker</th>
                                      <th>Order #</th>
                                      <th>Date Ordered</th>
                                      <th>Order Total</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>{{$customer->locker}}</td>
                                      <td>{{$order->reference_number}}</td>
                                      <td>{{date("D, F j, Y", strtotime($order->created_at))}}</td>
                                      <td>INR {{number_format($order->sub_total, 2, ".", "")}}</td>
                                  </tr>
                              </tbody>
                          </table>
                          <br>
                          <br>
                          <div>
                              <div>
                                  <table width="100%" border="1" style="border-collapse:collapse;border: 0;width:100%;">
                                    <tr>
                                      <th style="padding: 10px 0;">Item Description</th>
                                      <th>Qty</th>
                                      <th width="170px">Each</th>
                                      <th width="120px">Price</th>
                                    </tr>
                                    @php
                                      $requests = $order->requests;
                                    @endphp
                                    @foreach($requests as $request)
                                    <tr>
                                      <td>
                                      <a href="{{$request->url}}" style="text-decoration: none;color: #000; font-weight: 700;">{{$request->item_name}} @if(!empty($request->item_code))
                                          ({{$request->item_code}})
                                        @endif
                                        @if(!empty($request->item_size))
                                          - Size: {{$request->item_size}}
                                        @endif
                                      </a><br>
                                      @if(!empty($request->item_color))
                                      <span>Color: {{$request->item_color}}</span>
                                      @endif
                                      <small>(If this item is not available:
                                        @php
                                          switch($request->if_item_unavailable){
                                            case 'cancel':
                                              echo 'Cancel this item, purchase all other available items';
                                            break;
                                            case 'cancel_all':
                                              echo 'Cancel all items from this site';
                                            break;
                                          }
                                        @endphp
                                       )</small><br>
                                        @if(!empty($request->note))
                                        <small>Note: {{$request->note}}</small>
                                        @endif
                                    </td>
                                      <td>
                                        <span class="quantity">{{$request->quantity}}</span>
                                      </td>
                                      <td>INR {{number_format($request->price, 2, ".", "")}}</td>
                                      <td>INR {{number_format($request->total_price, 2, ".", "")}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                      <td colspan="2">
                                        @if(!empty($order->promo_code))
                                          <small>Promotional Code : {{$order->promo_code}}
                                            (If this promotion is not available:
                                              {{$order->if_promo_unavailable === 'proceed_without' ? "Proceed without promotional code" : ""}}
                                              {{$order->if_promo_unavailable === 'dont_buy' ? "Do not buy any items from this website" : ""}}
                                            )
                                          </small><br>
                                          @if(!empty($order->promo_info))
                                          <small>Promotional Description: {{$order->promo_info}}</small>
                                          @endif
                                        @endif
                                      </td>
                                      <td style="padding: 10px 0;">Sales Tax :</td>
                                      <td>INR {{number_format($order->sales_tax, 2, ".", "")}}</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2">
                                        @if(!empty($order->instruction))
                                        <small>
                                          Ordering instructions:
                                          {{$order->instruction}}
                                        </small>
                                        @endif
                                      </td>
                                      <td style="padding: 10px 0;">Shipping to Bengaluru :</td>
                                      <td>INR {{number_format($order->delivery_charge, 2, ".", "")}}</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"></td>
                                      <td style="padding: 10px 0;">Personal Shopper Cost <span style="color:Red">*</span> :</td>
                                      <td>INR {{number_format($order->personal_shopper_cost, 2, ".", "")}}</td>
                                    </tr>
                                    @if($order->payment_gateway_fee > 0)
                                    <tr>
                                      <td colspan="2"></td>
                                      <td style="padding: 10px 0;">Payment Gateway Fee :</td>
                                      <td>INR {{number_format($order->payment_gateway_fee, 2, ".", "")}}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                      <td colspan="2"></td>
                                      <td style="padding: 10px 0;"><b>Merchant Total </b><span style="color:Red">*</span> :</td>
                                      <td><b>INR {{number_format($order->sub_total, 2, ".", "")}}</b></td>
                                    </tr>
                                  </table>
                              </div>

                              <br>
                              <div>
                                @if($order->payment_gateway_name == 'wire')
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
                                    <p>Please send Shoppre a notification email to <a href="mailto:support@shoppre.com">support@shoppre.com</a> as soon as the amount has been transferred.</p>
                                  </li>
                                  <li>
                                    <p>It might take between 1-7 days for the amount to be reflected in the Shoppre account. We shall notify you via email as soon as we receive the payment.</p> </li>
                                </ol>
                                <p><b>If you cannot make a Wire Transfer,</b> don’t worry, you can pay via Debit/Credit Card, PayPal or PayTm. Simply <a href='{{url("/personal-shopper/order/redirect/payment/{$order->reference_number}")}}'>change your payment method!</a></p>
                                @endif
                              </div>

                          </div>
                      </td>
                  </tr>

              </tbody>
            </table>
            <p><span style="font-size:8pt;color:Red">* Based on information provided</span></p>
            <br>
            <p>Questions? Please Refer our <a href="{{url('/faq')}}">FAQ</a> to know more!</p>
            <p>Thank you for using our Personal Shopper service!</p>
            <p>Best regards, </p>
            <p>Your Team at Shoppre</p>
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
