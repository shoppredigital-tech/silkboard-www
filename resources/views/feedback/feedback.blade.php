@extends('layout')

@section('title', 'Member Feedback Form | Submit Your Feedback | ShoppRe.com™')
@section('description', 'How we are doing? Regarding your most recent shipment received through Shoppre.com, please leave your feedback, suggestion and provide us more information.')
@section('keywords', 'shipment, suggestion, feedback form, parcel delivery')
@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/feedback" />
    <link href="{{asset('css/star-rating.min.css')}}" rel="stylesheet"/>
@endsection
@section('content')
    <section class="timeline">
    <br/>
        <br/>
       <div class="col-md-4 col-sm-offset-5">
           <br/>
           <font color="#663399">
            <h1 class="f-s-25 font-weight-900">Feedback Form</h1>
           </font>
        </div>
        <br/>
        <div class="container" style="background-color: whitesmoke">
            <form class="form-horizontal" method="post" action="{{route('feedback.submit')}}">
                {{ csrf_field() }}
                <div class="feedback-container">
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <span class="f-s-15 font-weight-900 f-c-d-greay">Use the form below to rate your shipment and suggestions on the ShoppRe.com™ Shipping Services.
                                Your feedback goes directly to the people responsible for the Shipment.
                                And for every shipment you will be credited with <span class="f-c-red f-s-16">₹100 Cashback</span> to your ShoppRe Wallet for giving valuable feedback.</span>
                            </p>
                            <br>
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" name="person" placeholder="Enter Your Name" required/>
                                @if ($errors->has('person'))
                                    <span class="error">{{ $errors->first('person') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Email ID *</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Your Email" required/>
                                @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Customer service team was very helpful *</label>
                                <div class="rating-star">
                                    <input id="input-rate" type="text" class="rating" name="customer_service" required/>
                                </div>
                                <div class="clearfix"></div>
                                @if ($errors->has('customer_service'))
                                    <span class="error">{{ $errors->first('customer_service') }}</span>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>The amount of time it took my shipment to arrive met my expectations *</label>
                                <div class="rating-star">
                                    <input id="input-rate" type="text" class="rating" name="arrive_expectation" required/>
                                </div>
                                <div class="clearfix"></div>
                                @if ($errors->has('arrive_expectation'))
                                    <span class="error">{{ $errors->first('arrive_expectation') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>The packing and shipping materials adequately protected my items during shipment *</label>
                                <div class="rating-star">
                                    <input id="input-rate" type="text" class="rating" name="protected_shipment" required/>
                                </div>
                                @if ($errors->has('protected_shipment'))
                                    <span class="error">{{ $errors->first('protected_shipment') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>I was satisfied with the appearance and condition of the package *</label>
                                <div class="rating-star">
                                    <input id="input-rate" type="text" class="rating" name="package_condition" required/>
                                </div>
                                @if ($errors->has('package_condition'))
                                    <span class="error">{{ $errors->first('package_condition') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>It was easy to use Shoppre.com services *</label>
                                <div class="rating-star">
                                    <input id="input-rate" type="text" class="rating" name="easy_service" required/>
                                </div>
                                @if ($errors->has('easy_service'))
                                    <span class="error">{{ $errors->first('easy_service') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>How would you rate your overall level of satisfaction with us? *</label>
                                <div class="rating-star">
                                    <input id="input-rate" type="text" class="rating" name="overall_level_of_satisfaction" required/>
                                </div>
                                @if ($errors->has('overall_level_of_satisfaction'))
                                    <span class="error">{{ $errors->first('overall_level_of_satisfaction') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Did you have to pay any customs duty at the time of receiving the shipment?</label><br>
                                <div class="col-md-2">
                                    <input type="radio" name="customs" value="no">&nbsp;No
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" name="customs" value="yes">&nbsp;Yes
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Do you have any suggestions for improvement? </label>
                                <input type="text" class="form-control" name="suggestions" placeholder="suggestions">
                                @if ($errors->has('suggestions'))
                                    <span class="error">{{ $errors->first('suggestions') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-4 col-sm-offset-4">
                            <button type="submit" class="btn btn-block btn-shoppre">Submit Your Feedback</button>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>


    </section>
@endsection
@section('js_script')
    <script src="{{asset('js/star-rating.min.js')}}" type="text/javascript"></script>
    <script>
        $(".rated").rating({
            'size':'md',
            'min' : 0,
            'max' : 5,
            'step' : 2,
            'showClear' : false,
            'showCaption' : false
        });

        $("#input-rate").rating({
            'size':'md',
            'min' : 0,
            'max' : 5,
            'step' : 2,
            'showClear' : false,
            'showCaption' : false
        });
    </script>
@endsection
