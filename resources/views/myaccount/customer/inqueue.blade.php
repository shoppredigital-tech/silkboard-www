@extends('myaccount.layout')

@section('title', '- Shipment InQueue')

@section('content')

    <section class="dash-history">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <h3>Shipments in Queue</h3>
              <div class="table-responsive">
                @if(!$shipments->isEmpty())
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Weight</th>
                        <th>Est. Cost</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th>Shipment Status</th>
                    </tr>
                    @php ($i = 0)
                    @foreach ($shipments as $shipment)
                        <tr>
                            <td>{{$shipment->order_id}}</td>
                            <td>
                              @if($shipment->shipping_status == 'inreview')
                                In Review
                              @else
                                {{number_format($shipment->weight, 2)}} Kg
                              @endif
                            </td>
                            <td>
                              @if($shipment->shipping_status == 'inreview')
                                In Review
                              @else
                                <i class="fa fa-rupee"></i>

                                @php
                                  if($shipment->final_amount == 0 || empty($shipment->final_amount)){
                                    echo number_format($shipment->estimated, 2);
                                  }else{
                                    echo number_format($shipment->final_amount, 2);
                                  }
                                @endphp

                              @endif
                            </td>
                            <td>
                              @php
                                switch($shipment->payment_gateway_name){
                                  case 'wire':
                                    echo 'Wire transfer/Money order';
                                  break;
                                  case 'card':
                                    echo 'Credit Card/Debit Card';
                                  break;
                                  case 'netbank':
                                    echo 'Net Banking';
                                  break;
                                  case 'paypal':
                                    echo 'PayPal';
                                  break;

                                  default:
                                    echo 'Pending';
                                  break;
                                }
                              @endphp
                            </td>
                            <td>
                              @php
                                switch($shipment->payment_status){
                                  case 'pending':
                                    echo 'Pending';
                                  break;
                                  case 'success':
                                    echo 'Success';
                                  break;
                                  case 'canceled':
                                    echo 'Canceled';
                                  break;
                                  case 'error':
                                    echo 'Error';
                                  break;
                                }
                              @endphp
                            </td>
                            <td>
                              @php
                                switch($shipment->shipping_status){
                                  case 'inqueue':
                                    echo 'Processing';
                                  break;
                                  case 'inreview':
                                    echo 'In Review';
                                  break;
                                  case 'confirmation':
                                    echo '<a href="'.route('shipping.request.confirm', [$shipment->order_id]).'" class="btn btn-block btn-success">Confirm Order</a>';
                                  break;
                                }
                              @endphp
                            </td>
                        </tr>
                    @endforeach
                </table>
                @else
                <div class="well">
                    <p class="alert alert-danger text-center" role="alert">You currently have no shipments under process.</p>
                </div>
                @endif
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
