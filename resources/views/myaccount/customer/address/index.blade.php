@extends('myaccount.layout')

@section('title', ' - Address Book')
@include('myaccount.customer.shipping.modal')

@section('content')

    <section class="dash-preference">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('partials._sidebar')
                </div>
                <div class="col-sm-9">

                    <div class="address_book">
                      <h2>Address Book</h2>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            <hr>
                        @endif
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            <hr>
                        @endif
                      <div class="content">
                        <header>
                          <div class="col-sm-8">
                            <div class="row"><p>You can store up to 5 addresses for free that you prefer to ship to. Your default shipping address is the one you registered with. You can change this at any time.</p></div>
                          </div>
                          <div class="col-sm-4">
                            <a href="{{route('customer.address.add')}}" class="btn">+Add New Shipping Address</a>
                          </div>
                          <div class="clearfix"></div>
                        </header>
                        <div class="items">
                          <div id="outer_div">
                            @foreach($address as $view)
                              <div class="col-sm-6">
                                <div class="blox">
                                  @if($view->default == 'no')
                                  <a href="{{route('customer.address.delete', ['id'=>$view->id])}}" class="ico delete"><i class="fa fa-trash"></i></a>
                                  @endif
                                  <a href="javascript:void(0)" class="ico edit" id="btn_edit_address" data-address_id="{{$view->id}}"><i class="fa fa-edit"></i></a>

                                  <h4><span class="text-up">{{$view->city}}</span> Address</h4>
                                  <p>{{$view->salutation}}. {{$view->first_name}} {{$view->last_name}}</p>
                                  <p>{{$view->line1}}</p>
                                  <p>{{$view->line2}}</p>
                                  <p>{{$view->city}}, {{$view->state}},</p>
                                  <p>{{$view->country->name}} - {{$view->pincode}}</p>
                                  <p>PH : +{{$view->country_code}} {{$view->phone}}</p>
                                  @if($view->is_default)
                                      <span class="default active"><a href="javascript:void(0)" class="btn"><i class="fa fa-star"></i> Default Shipping Address</a></span>
                                      @else
                                      <span class="default"><a href="{{route('customer.address.default', [$view->id])}}" class="btn">Make this Default Shipping Address</a></span>
                                  @endif
                                </div>
                              </div>
                            @endforeach
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
