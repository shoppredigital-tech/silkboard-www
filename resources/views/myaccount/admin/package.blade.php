@extends('myaccount.admin.layout')

@section('css_style')
<style type="text/css">
    .btn-floating i{font-size:10px;line-height:0}.btn-floating.halfway-fab{right:-10px;bottom:-20px;width:25px;height:25px;line-height:24px}
</style>
@endsection

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Package Order</h1>
                <span>Update Package Order</span>
            </div>
            <a href="{{route('admin.package.unread', [$package->id])}}" class="unread_btn">Mark Unread</a>
            <ul class="admin-breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('admin.packages')}}">Packages</a></li>
            </ul>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="">
                    <div class="col s8">
                        @if (session('message'))
                            <div class="alert alert-success text-center">

                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger text-center">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if($package->review)
                            <div class="alert alert-info text-center">{{$package->review}}</div>
                        @endif
                        <div class="widget z-depth-1">
                            <form method="post" action="{{route('admin.package.update')}}">
                                {{ csrf_field() }}
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="seller" value="{{$package->seller}}" required>
                                    <label class="active">Seller Name</label>
                                    @if ($errors->has('seller'))
                                        <span class="error">{{ $errors->first('seller') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="reference" value="{{$package->reference}}" required>
                                    <label class="active">Reference/Package No.</label>
                                    @if ($errors->has('reference'))
                                        <span class="error">{{ $errors->first('reference') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <select name="type">
                                        <option {{$package->type === 'doc' ? "selected" : ""}} value="doc">Document</option>
                                        <option {{$package->type === 'nondoc' ? "selected" : ""}} value="nondoc">Non Document</option>
                                    </select>
                                    <label>Type</label>
                                    @if ($errors->has('type'))
                                        <span class="error">{{ $errors->first('type') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="locker" value="{{$package->locker}}" required>
                                    <label class="active">Locker ID</label>
                                    @if ($errors->has('locker'))
                                        <span class="error">{{ $errors->first('locker') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="number_of_items" value="{{$package->number_of_items}}" required>
                                    <label class="active">Total Items</label>
                                    @if ($errors->has('number_of_items'))
                                        <span class="error">{{ $errors->first('number_of_items') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="price" value="{{$package->price}}" required>
                                    <label class="active">Price</label>
                                    @if ($errors->has('price'))
                                        <span class="error">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="weight" value="{{$package->weight}}" required>
                                    <label class="active">Weight</label>
                                    @if ($errors->has('weight'))
                                        <span class="error">{{ $errors->first('weight') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <div class="switch">
                                        <label>
                                          No
                                          @if($package->liquid == "1")
                                          <input type="checkbox" name="liquid" value="1" checked>
                                          @else
                                          <input type="checkbox" name="liquid" value="1">
                                          @endif
                                          <span class="lever"></span>
                                          Yes
                                        </label>
                                    </div>
                                    <label class="active">Liquid / Semi-Liquid</label>
                                    <br>
                                    <br>
                                </div>
                                <div class="input-field col s6">
                                    <div class="switch">
                                        <label>
                                          No
                                          @if($package->is_featured_seller == "1")
                                          <input type="checkbox" name="is_featured_seller" value="1" checked>
                                          @else
                                          <input type="checkbox" name="is_featured_seller" value="1">
                                          @endif
                                          <span class="lever"></span>
                                          Yes
                                        </label>
                                    </div>
                                    <label class="active">From a featured seller?</label>
                                    <br>
                                    <br>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate datetimepicker" name="received" value="{{$package->received}}" required>
                                    <label class="active">Date Received</label>
                                    @if ($errors->has('received'))
                                        <span class="error">{{ $errors->first('received') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    @if($package->status == 'processing')
                                        <select disabled="disabled">
                                            <option>In Shipment Process</option>
                                        </select>
                                    @elseif($package->status == 'delivered')
                                        <select disabled="disabled">
                                            <option>Delivered</option>
                                        </select>
                                    @else
                                        <select name="status">
                                            <option {{$package->status === 'values' ? "selected" : ""}} value="values">Customer Action</option>
                                            <option {{$package->status === 'invoice' ? "selected" : ""}} value="invoice">Upload Invoice</option>
                                            <option {{$package->status === 'review' ? "selected" : ""}} value="review">Under Review</option>
                                            <option {{$package->status === 'ship' ? "selected" : ""}} value="ship">Ready To Ship</option>
                                            <option {{$package->status === 'pickup' ? "selected" : ""}} value="ship">Pickup</option>
                                            <option {{$package->status === 'return' ? "selected" : ""}} value="return">Return to Sender</option>
                                            <option {{$package->status === 'split' ? "selected" : ""}} value="split">Split Package</option>
                                        </select>
                                    @endif

                                    <label>Status</label>
                                    @if ($errors->has('status'))
                                        <span class="error">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s12">
                                    <input type="hidden" name="id" value="{{$package->id}}">
                                    <button type="submit" class="btn waves-effect waves-light red lighten-2">Submit</button>
                                </div>
                            </form>
                        </div>
                        @if(!empty($package->return_send))
                        <div class="card-panel" style="clear: both;">
                            <h5>Return to Sender - Message</h5>
                            <span>{{$package->return_send}}</span>
                        </div>
                        @endif

                        @if(!empty($package->split_pack))
                        <div class="card-panel" style="clear: both;">
                            <h5>Split Package - Message</h5>
                            <span>{{$package->split_pack}}</span>
                        </div>
                        @endif

                    </div>
                    <div class="col s4">
                        <div class="widget z-depth-1">
                            <div class="my-profile-widget" style="margin-top: -20px;">
                                <div class="profile-widget-head">
                                    <h3>{{$customer->name}}</h3>
                                    <i>{{$customer->email}}</i>
                                    <span>
                                        <img src="{{asset('img/profile.png')}}">
                                    </span>
                                </div>
                                <h4>{{$customer->locker}}</h4>
                                @if(!empty($customer->phone))
                                    <span class="red"><i class="ti-mobile"></i> +{{$customer->code}} {{$customer->phone}}</span>
                                @endif

                                <p><strong>Shoppre Wallet : </strong>{{number_format($customer->balance->amount, 2, ".", "")}}</p>
                                <p><strong>Loyalty Points : </strong>{{$customer->loyalty->points}}</p>

                                <div class="col s12">
                                    <a href="{{route('admin.customer.access', [$customer->id])}}" class="btn waves-effect waves-light amber darken-4" target="_blank">Access Customer Account</a>
                                </div>

                                <div class="col s12">
                                    <form method="post" action="{{route('admin.package.mail')}}">
                                    {{csrf_field()}}
                                    <select name="condition">
                                        @if(in_array('arrived', $packmails))
                                        <option value="" disabled>Package Arrived</option>
                                        @else
                                        <option value="arrived">Package Arrived</option>
                                        @endif

                                        @if(in_array('action_req', $packmails))
                                        <option value="" disabled>Action Required</option>
                                        @else
                                        <option value="action_req">Action Required</option>
                                        @endif
                                    </select>
                                    <input type="hidden" name="package_id" value="{{$package->id}}">
                                    <button type="submit" class="btn waves-effect waves-light green">Send Notification</button>
                                    </form>

                                    @if(!$package->mails->isEmpty())
                                    <ul class="collapsible" data-collapsible="accordion">
                                      <li>
                                        <div class="collapsible-header" style="font-size: 14px;">Mail History</div>
                                        <div class="collapsible-body" style="padding: 0;">
                                            @foreach($package->mails as $mail)
                                            <p style="margin: 10px;text-align: left;font-size: 13px;">
                                                @php
                                                    switch($mail->condition){
                                                        case 'arrived':
                                                            echo 'Package Arived';
                                                        break;

                                                        case 'action_req':
                                                            echo 'Action Required';
                                                        break;
                                                    }
                                                @endphp

                                                <i style="float: right;">
                                                    {{date("M j, Y, g:i a", strtotime($mail->created_at))}}
                                                </i>
                                            </p>
                                            @endforeach
                                        </div>
                                      </li>
                                    </ul>
                                    @endif
                                </div>
                                <div style="clear: both;"></div>
                                <p><a href="{{route('admin.customer.edit', [$customer->id])}}" target="_blank"><i class="ti-user"></i> View Profile</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="widget z-depth-2">
                            <div class="widget-title">
                                <h3>Package Items</h3>
                                <p>Add items comes under this package.</p>
                                @if(!empty($invoice))
                                <p><br>
                                <a class="btn waves-effect waves-light blue lighten-2" href="{{asset('uploads/invoice')}}/{{$package->id}}/{{$invoice->invoice}}" target="_blank">Download Invoice</a>
                                </p>
                                @endif
                            </div>
                            <form method="post" action="{{route('admin.item.submit')}}">
                                {{csrf_field()}}
                                <div class="input-field col s4">
                                    <input type="text" name="item" class="validate">
                                    <label class="">Item Name</label>
                                    @if ($errors->has('item'))
                                        <span class="error">{{ $errors->first('item') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <select name="item_category_id">
                                        <option value="" disabled selected hidden>Please Choose...</option>
                                        @foreach($item_categories as $item_category)
                                            <option value="{{$item_category->id}}" >{{$item_category->name}}</option>
                                        @endforeach
                                    </select>
                                    <label>category</label>
                                    @if ($errors->has('item_category_id'))
                                        <span class="error">{{ $errors->first('item_category_id') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s1">
                                    <input type="text" name="quantity" class="validate">
                                    <label class="">Quantity</label>
                                    @if ($errors->has('quantity'))
                                        <span class="error">{{ $errors->first('quantity') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s2">
                                    <input type="text" name="price" class="validate">
                                    <label class="">Price</label>
                                    @if ($errors->has('price'))
                                        <span class="error">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s1">
                                    <input type="hidden" name="package_id" value="{{$package->id}}">
                                    <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Submit</button>
                                </div>
                            </form>
                            <div class="projects-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:50px">#</th>
                                            <th>Item</th>
                                            <th>Category</th>
                                            <th>Qty</th>
                                            <th>Unit Price</th>
                                            <th>Total Value</th>
                                            <th style="width:50px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i=0)
                                        @foreach($items as $item)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$item->item}}</td>
                                            <td>{{$item->item_name}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->total}}</td>
                                            <td class="red"><a href="{{route('admin.item.delete', ['id'=>$item->id])}}"><i class="ti-trash white-text"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    @if(!empty($package->scanRequest))
                    <div class="col s12">
                        <div class="widget z-depth-2">
                            <div class="uploadbox">
                                <div class="section">
                                    <h5 style="margin: 15px 0 0;">Scan Documents</h5>
                                        @if($package->scanRequest->status == "pending")
                                            <form method="post" action="{{route('admin.scan.doc.request')}}">
                                                {{csrf_field()}}
                                                <div class="input-field col s5">
                                                    <select name="status">
                                                        <option {{$package->scanRequest->status === 'pending' ? "selected" : ""}} value="pending">Pending</option>
                                                        <option {{$package->scanRequest->status === 'completed' ? "selected" : ""}} value="completed">Completed</option>
                                                    </select>
                                                </div>
                                                <div class="input-field col s1">
                                                    <input type="hidden" name="reqid" value="{{$package->scanRequest->id}}">
                                                    <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Update Request</button>
                                                </div>
                                                <div style="clear: both"></div>
                                            </form>
                                        @endif

                                    <div style="margin-top: 15px;padding: 15px;border: 1px solid #4cc3ad;">
                                        @if(!empty($package->scanRequest->message))
                                        <p style="margin: 0;"><strong>Description:</strong> {{$package->scanRequest->message}}</p>
                                        @endif

                                        @if($package->scanRequest->type == 'limited')
                                            <p style="margin: 0;"><strong>Page From:</strong> {{$package->scanRequest->page_from}}</p>
                                            <p style="margin: 0;"><strong>Page To:</strong> {{$package->scanRequest->page_to}}</p>
                                        @endif
                                    </div>

                                    <form method="post" action="{{route('admin.scan.doc.submit')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="file-field input-field col s10">
                                            <div class="btn">
                                                <span>Uploads</span>
                                                <input type="file" name="photos[]" multiple="multiple"  accept="image/*" capture="camera">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                        <div class="input-field col s2">
                                            <input type="hidden" name="package_id" value="{{$package->id}}">
                                            <input type="hidden" name="type" value="advanced">
                                            <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="divider"></div>
                                <div class="section">
                                    @foreach($package->scans as $scan)
                                        @php
                                            $photourl = "/uploads/scandocs/$scan->package_id/$scan->name";
                                        @endphp
                                        <div class="col s3">
                                          <div class="card">
                                            <div class="card-image">
                                              <img class="materialboxed" src="{{asset($photourl)}}">
                                              <a href="{{route('admin.scan.doc.delete', [$scan->id])}}" class="btn-floating btn-small halfway-fab waves-effect waves-light red" title="Delete Document"><i class="ti-close"></i></a>
                                            </div>
                                          </div>
                                        </div>
                                    @endforeach
                                    <div style="clear: both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif


                    <div class="col s12">
                        <div class="widget z-depth-2">
                            <div class="widget-title">
                                <h3>Upload Photos</h3>
                                <p>Add standard or high resolution photos below.</p>
                            </div>
                            <div class="uploadbox">
                                <div class="section">
                                    <h5 style="margin: 15px 0 0;">Standard Photos</h5>
                                    @foreach($package->photoRequests as $photoReq)
                                    @if($photoReq->type == "standard" && $photoReq->status == "pending")
                                        <form method="post" action="{{route('admin.photo.request')}}">
                                            {{csrf_field()}}
                                            <div class="input-field col s5">
                                                <select name="status">
                                                    <option {{$photoReq->status === 'pending' ? "selected" : ""}} value="pending">Pending</option>
                                                    <option {{$photoReq->status === 'completed' ? "selected" : ""}} value="completed">Completed</option>
                                                </select>
                                            </div>
                                            <div class="input-field col s1">
                                                <input type="hidden" name="reqid" value="{{$photoReq->id}}">
                                                <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Update Request</button>
                                            </div>
                                            <div style="clear: both"></div>
                                        </form>
                                    @endif
                                    @endforeach
                                    <form method="post" action="{{route('admin.photo.submit')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="file-field input-field col s10">
                                            <div class="btn">
                                                <span>Uploads</span>
                                                <input type="file" name="photos[]" multiple="multiple" accept="image/*" capture="camera">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                        <div class="input-field col s2">
                                            <input type="hidden" name="package_id" value="{{$package->id}}">
                                            <input type="hidden" name="type" value="standard">
                                            <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="divider"></div>
                                <div class="section">
                                    @foreach($package->photos as $photo)
                                        @if($photo->type == "standard")
                                            @php
                                                $photourl = "/uploads/packages/standard/$photo->package_id/$photo->name";
                                            @endphp
                                            <div class="col s3">
                                              <div class="card">
                                                <div class="card-image">
                                                  <img class="materialboxed" src="{{asset($photourl)}}">
                                                  <a href="{{route('admin.photo.delete', [$photo->id])}}" class="btn-floating btn-small halfway-fab waves-effect waves-light red" title="Delete Photo"><i class="ti-close"></i></a>
                                                </div>
                                              </div>
                                            </div>
                                            @endif
                                    @endforeach
                                    <div style="clear: both;"></div>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                            <div class="uploadbox">
                                <div class="section">
                                    <h5 style="margin: 15px 0 0;">High Resolution Photos</h5>
                                    @foreach($package->photoRequests as $photoReq)
                                    @if($photoReq->type == "advanced" && $photoReq->status == "pending")
                                        <form method="post" action="{{route('admin.photo.request')}}">
                                            {{csrf_field()}}
                                            <div class="input-field col s5">
                                                <select name="status">
                                                    <option {{$photoReq->status === 'pending' ? "selected" : ""}} value="pending">Pending</option>
                                                    <option {{$photoReq->status === 'completed' ? "selected" : ""}} value="completed">Completed</option>
                                                </select>
                                            </div>
                                            <div class="input-field col s1">
                                                <input type="hidden" name="reqid" value="{{$photoReq->id}}">
                                                <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Update Request</button>
                                            </div>
                                            <div style="clear: both"></div>
                                        </form>
                                        <p style="margin-top: 15px;padding: 15px;font-size: 13px;border: 1px solid #4cc3ad;"><strong>Description:</strong> {{$photoReq->description}}</p>
                                    @endif
                                    @endforeach
                                    <form method="post" action="{{route('admin.photo.submit')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="file-field input-field col s10">
                                            <div class="btn">
                                                <span>Uploads</span>
                                                <input type="file" name="photos[]" multiple="multiple"  accept="image/*" capture="camera">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                        <div class="input-field col s2">
                                            <input type="hidden" name="package_id" value="{{$package->id}}">
                                            <input type="hidden" name="type" value="advanced">
                                            <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="divider"></div>
                                <div class="section">
                                    @foreach($package->photos as $photo)
                                        @if($photo->type == "advanced")
                                            @php
                                                $photourl = "/uploads/packages/advanced/$photo->package_id/$photo->name";
                                            @endphp
                                            <div class="col s3">
                                              <div class="card">
                                                <div class="card-image">
                                                  <img class="materialboxed" src="{{asset($photourl)}}">
                                                  <a href="{{route('admin.photo.delete', [$photo->id])}}" class="btn-floating btn-small halfway-fab waves-effect waves-light red" title="Delete Photo"><i class="ti-close"></i></a>
                                                </div>
                                              </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div style="clear: both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12">
                        <div class="widget z-depth-2">
                            <div class="widget-title">
                                <h3>Package Charges</h3>
                                <p>Edit/Update package level charges</p>
                            </div>
                            <form method="post" action="{{route('admin.package.charges')}}">
                                {{ csrf_field() }}
                                @php
                                    $charges = $package->charges;
                                @endphp
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="storage" value="{{$charges->storage}}">
                                    <label class="active">Additional Storage</label>
                                    @if ($errors->has('storage'))
                                        <span class="error">{{ $errors->first('storage') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="address" value="{{$charges->address}}">
                                    <label class="active">Wrong Address</label>
                                    @if ($errors->has('address'))
                                        <span class="error">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="handling" value="{{$charges->handling}}">
                                    <label class="active">Special Handling</label>
                                    @if ($errors->has('handling'))
                                        <span class="error">{{ $errors->first('handling') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="pickup" value="{{$charges->pickup}}">
                                    <label class="active">Package Pick-up</label>
                                    @if ($errors->has('pickup'))
                                        <span class="error">{{ $errors->first('pickup') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="doc" value="{{$charges->doc}}">
                                    <label class="active">Receive Mail</label>
                                    @if ($errors->has('doc'))
                                        <span class="error">{{ $errors->first('doc') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="basic_photo" value="{{$charges->basic_photo}}">
                                    <label class="active">Basic Photos</label>
                                    @if ($errors->has('basic_photo'))
                                        <span class="error">{{ $errors->first('basic_photo') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="advance_photo" value="{{$charges->advance_photo}}">
                                    <label class="active">Advanced Photos</label>
                                    @if ($errors->has('advance_photo'))
                                        <span class="error">{{ $errors->first('advance_photo') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="split" value="{{$charges->split}}">
                                    <label class="active">Split Package</label>
                                    @if ($errors->has('split'))
                                        <span class="error">{{ $errors->first('split') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="validate" name="scan_doc" value="{{$charges->scan_doc}}">
                                    <label class="active">Scan Document</label>
                                    @if ($errors->has('scan_doc'))
                                        <span class="error">{{ $errors->first('scan_doc') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s12">
                                    <input type="hidden" name="chargeid" value="{{$charges->id}}">
                                    <button type="submit" class="btn waves-effect waves-light red lighten-2">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Content Area -->

@endsection

@section('js_script')
<script type="text/javascript">
    jQuery(".datetimepicker").datetimepicker({timepicker:!1,scrollMonth:!1,scrollInput:!1,format:"Y-m-d"}),$(document).ready(function(){$(".materialboxed").materialbox()});
</script>
@endsection
