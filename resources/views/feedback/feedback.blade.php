@extends('layout')

@section('title', 'Feedback')
@section('description', 'Learn more how Our personal Shoppre service manages and ship your packages from multiple Indian stores and delivered to your country in just 2 to 4 days!')
@section('keywords', 'learn more, our personal shoppre service, manages, ship your packages, multiple indian stores, delivered to your country')
@section('css_style')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/star-rating.min.css')}}" rel="stylesheet"/>
@endsection
@section('content')
    <section class="timeline">
    <br class="container ">
       <div class="col-md-4 col-sm-offset-4">
            <h1>Feedback Form</h1>
        </div>
   <br></br>
        <form class="form-horizontal" method="post" action="{{route('feedback.submit')}}">
            {{ csrf_field() }}
        <div class="feedback-container">
             <div class="row">
                 <div class="col-md-4 col-sm-offset-4">
                     <div class="form-group">
                <label>Name *</label>
                <input type="text" class="form-control" name="person" placeholder="Enter Your Name">
                @if ($errors->has('person'))
                    <span class="error">{{ $errors->first('person') }}</span>
                @endif
                         <div class="clearfix"></div>
                     </div>
                 </div>
             </div>
            <div class="row">
                <div class="col-md-4 col-sm-offset-4">
                    <div class="form-group">
                        <label>Email ID *</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Your Name">
                        @if ($errors->has('email'))
                            <span class="error">{{ $errors->first('email') }}</span>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-offset-4">
                     <div class="form-group">
                         <label>Customer service team was very helpful *</label>
                         <div class="rating-star">
                             <input id="input-rate" type="text" class="rated" name="customer_service">
                         </div>
                         @if ($errors->has('customer_service'))
                             <span class="error">{{ $errors->first('customer_service') }}</span>
                         @endif
                         <div class="clearfix"></div>
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-offset-4">
                    <div class="form-group">
                        <label>The amount of time it took my shipment to arrive met my expectations *</label>
                        <div class="rating-star">
                            <input id="input-rate" type="text" class="rated" name="arrive_expectation">
                        </div>
                        <div class="clearfix"></div>
                        @if ($errors->has('arrive_expectation'))
                            <span class="error">{{ $errors->first('arrive_expectation') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-offset-4">
                    <div class="form-group">
                        <label>The packing and shipping materials adequately protected my items during shipment *</label>
                        <div class="rating-star">
                            <input id="input-rate" type="text" class="rated" name="protected_shipment">
                        </div>
                        @if ($errors->has('protected_shipment'))
                            <span class="error">{{ $errors->first('protected_shipment') }}</span>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-offset-4">
                    <div class="form-group">
                        <label>I was satisfied with the appearance and condition of the package *</label>
                        <div class="rating-star">
                            <input id="input-rate" type="text" class="rated" name="package_condition">
                        </div>
                        @if ($errors->has('package_condition'))
                            <span class="error">{{ $errors->first('package_condition') }}</span>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-offset-4">
                    <div class="form-group">
                        <label>It was easy to use Shoppre.com services *</label>
                        <div class="rating-star">
                            <input id="input-rate" type="text" class="rated" name="easy_service">
                        </div>
                        @if ($errors->has('easy_service'))
                            <span class="error">{{ $errors->first('easy_service') }}</span>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-offset-4">
                    <div class="form-group">
                        <label>How would you rate your overall level of satisfaction with us? *</label>
                        <div class="rating-star">
                            <input id="input-rate" type="text" class="rated" name="overall_level_of_satisfaction">
                        </div>
                        @if ($errors->has('overall_level_of_satisfaction'))
                            <span class="error">{{ $errors->first('overall_level_of_satisfaction') }}</span>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-offset-4">
                    <div class="form-group">
                        <label>Do you have any suggestions for improvement? </label>
                        <input type="text" class="form-control" name="suggestions" placeholder="Enter Your Name">
                        @if ($errors->has('suggestions'))
                            <span class="error">{{ $errors->first('suggestions') }}</span>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-offset-4">
                    <button type="submit" class="btn btn-block btn-shoppre">Submit Your Feedback</button>
                </div>
            </div>
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
    <!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2").select2();
        });
    </script>
@endsection