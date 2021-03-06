@extends('layout')

@section('title', 'Country Guides | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('css_style')
  <!-- Select2 -->
  <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
@endsection

@section('content')

  @if(!empty($guide->banner_img))
    <section class="cguide_head" style="background-image: url({{asset('/uploads/country/guide/banner')}}/{{$guide->banner_img}});">
  @else
    <section class="cguide_head">
  @endif

    <div class="left_head">
      <h2>SHOP FROM INDIA, SHIP TO <br><span class="text-orange">{{$country->name}}</span> THROUGH SHOPPRE</h2>
      <h3>Here is everything you need to know.</h3>
      <div class="row">
        <div class="col-md-5">
          <p>Not Shipping to {{strtoupper($country->name)}}?</p>
        </div>
        <div class="col-md-6">
          <select class="form-control select2" id="select_iso">
            <option value="">Select Country</option>
            @foreach($countries as $select)
              <option value="{{$select->iso}}">{{$select->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>

  <section class="cguide_icos">
    <div class="container">
      <ul>
        <li>
          <img src="{{env('AWS_CLOUD_FRONT')}}/img/cguide_ico1.png">
          <strong>Shipping Costs</strong>
        </li>
        <li>
          <img src="{{env('AWS_CLOUD_FRONT')}}/img/cguide_ico2.png">
          <strong>Duties & Taxes</strong>
        </li>
        <li>
          <img src="{{env('AWS_CLOUD_FRONT')}}/img/cguide_ico3.png'">
          <strong>Prohibited Items</strong>
        </li>
        <li>
          <img src="{{env('AWS_CLOUD_FRONT')}}/img/cguide_ico4.png">
          <strong>Transit Times</strong>
        </li>
      </ul>
    </div>
  </section>

  @if(!$reviews->isEmpty())
  <section class="testimonails cguide_reviews">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2>What our members in {{strtoupper($country->name)}} are saying?</h2>
          <div class="testimons owl-carousel">
            @foreach($reviews as $review)
            <div class="item">
              <div class="col-sm-3 text-center">
                @if($review->country->flag)
                <img src="{{asset('uploads/country')}}/{{$review->country->flag}}" class="img-circle">
                @endif
              </div>
              <div class="col-sm-9">
                <p>{{$review->review}}</p>
                <span class="name">{{$review->person}}</span>
                <span>{{$review->country->name}}</span>
              </div>
              <div class="clearfix"></div>
            </div>
            @endforeach
          </div>
          <div class="text-center">
            <a href="{{route('reviews')}}" class="btn">View All Shoppre Reviews</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif

  <section class="shipping-calculator">
      <div class="container">
        <div class="col-md-7">
          <div class="calculator block">
            <h3 class="text-red">INTERNATIONAL SHIPPING CALCULATOR</h3>
            <h4>(From your Shoppre Locker in Bengaluru to your doorstep Abroad)</h4>
            <span id="calc_error">Sorry! No delivery options available in requested country. Please contact our support team for assistance.</span>
            <form class="calc-form" id="shipping">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="col-sm-12">Where  do you want to send your package?</label>
                <div class="col-sm-12">
                  <select class="form-control select2" name="country">
                    <option value="">Select Country</option>
                      @foreach($countries as $calc_country)
                        <option value="{{$calc_country->iso}}" {{$calc_country->id == $country->id ? 'selected' : ""}}>{{$calc_country->name}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label" style="top: 8px;">Package Type:</label>
                <div class="col-sm-7">
                  <div class="radio">
                    <label class="checkbox-inline">
                      <input type="radio" name="type" value="nondoc" checked>Non Document
                    </label>
                  </div>
                  <div class="radio">
                    <label class="checkbox-inline">
                      <input type="radio" name="type" value="doc" >Document
                    </label>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group">
                <label class="col-sm-12 control-label">How much does your package weigh?</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="weight" placeholder="Enter Weight">
                </div>
                <div class="col-sm-6">
                  <div class="radio">
                    <label class="checkbox-inline">
                      <input type="radio" name="unit" value="kg" checked>Kilograms
                    </label>
                  </div>
                  <div class="radio">
                    <label class="checkbox-inline">
                      <input type="radio" name="unit" value="lbs" >Pounds
                    </label>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label" style="top: 8px;">What are the dimensions of your package? (Optional)</label>
                <div class="col-sm-4">
                  <div class="radio">
                    <label class="checkbox-inline">
                      <input type="radio" name="scale" value="cm" checked>cm
                    </label>
                  </div>
                  <div class="radio">
                    <label class="checkbox-inline">
                      <input type="radio" name="scale" value="in" >in
                    </label>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group smallboxs">
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="length"> <strong>Length</strong>
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="width"> <strong>Width</strong>
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="height"> <strong>Height</strong>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="clearfix"></div>
              <div class="col-sm-12">
                <button type="submit" class="btn btn-block btn-shoppre">GET UPFRONT SHIPPING RATES</button>
              </div>
              <div class="clearfix"></div>
            </form>
            <div id="ship_result" class="calc-result" style="position: relative;box-shadow: none;">
              <h4 class="text-red">ESTIMATED SHIPPING COST*</h4>
              <p class="info">Best carrier will be automatically chosen according to your country and weight of shipment. We use trusted courier services like DHL, FedEx and DTDC.</p>
              <div class="result table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <td class="bg-white"><span id="ship_time"></span> Business Days <span class="text-red">**</span></td>
                    <td><i class="fa fa-rupee"></i> <span id="ship_cost"></span></td>
                    <td><span class="striked"><i class="fa fa-rupee"></i> <span id="ship_oldcost"></span></span></td>
                    <td class="discount"><span id="ship_disc"></span>% OFF</td>
                  </tr>
                </table>
              </div>
              <ul class="points">
                <li><span class="text-red">*</span> The chargeable weight is always the greater of the two: Volumetric or the Actual weight.</li>
                <li><span class="text-red">*</span> The rates displayed are INCLUSIVE of the fuel surcharge and taxes within India.</li>
                <li><span class="text-red">*</span> You may need to pay duties or tax when your shipment arrives, as per the import law of the receiving country.</li>
                <li><span class="text-red">*</span> Excludes oversized and palletized shipments, and special products (liquids, homemade food, etc.)</li>
                <li><span class="text-red">**</span> After dispatch from Shoppre facility. Does not apply to ship requests made after 3pm IST on Saturdays, or on holidays. Shipments that may require additional time include those containing items under review or hazardous materials, oversized packages or where additional export documentation is required.</li>
              </ul>
            </div>
            <div id="calc_load"></div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="xchange_rate block">
            <h3>Exchange Rate Calculator</h3>
            <span id="calc_error"></span>
            <form id="xchange_calc">
              <div class="form-group">
                <p id="xchange_display">1 INR = X
                  {{$xchange_rate}}
                  {{$country->currency}}</p>
              </div>
              <div class="form-group">
                <div class="col-md-2">
                  <input type="text" class="form-control ratebox" id="rate_from" value="1" />
                </div>
                <div class="col-md-10">
                  <select class="form-control select2" id="country_from">
                    <option value="">Select Country</option>
                      @foreach($countries as $xchange_from)
                        <option value="{{$xchange_from->id}}" {{$xchange_from->id == '99' ? 'selected' : ''}}>{{$xchange_from->name}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group">
                <div class="col-md-2">
                  <input type="text" class="form-control ratebox" id="rate_to" value="{{$xchange_rate}}" />
                </div>
                <div class="col-md-10">
                  <select class="form-control select2" id="country_to">
                    <option value="">Select Country</option>
                      @foreach($countries as $xchange_to)
                        <option value="{{$xchange_to->id}}" {{$xchange_to->id == $country->id ? 'selected' : ''}}>{{$xchange_to->name}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="clearfix"></div>
              </div>
            </form>
            <strong>Country Name : {{$country->name}}</strong>
            <strong>Capital : {{$country->capital}}</strong>
            <input type="hidden" id="rate_input" value="{{$xchange_rate}}">
            <div id="calc_load"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>

  @if(isset($guide) && !empty($guide))
  <section class="cguide_blocks">
    <div class="container">

      @if(!empty($guide->dutytax))
      <article>
        <h2><img src="{{env('AWS_CLOUD_FRONT')}}/img/cguide_box1.png"> Duties and Taxes</h2>
        <div class="col-md-8">
          {!! $guide->dutytax !!}
        </div>
        @if(!empty($guide->dutytax_meta))
        <div class="col-md-4">
          <aside>
            <h3>The Shoppre Advantage</h3>
            <p>{{$guide->dutytax_meta}}</p>
          </aside>
        </div>
        @endif
        <div class="clearfix"></div>
      </article>
      @endif

      @if(!empty($guide->transits))
      <article>
        <h2><img src="{{env('AWS_CLOUD_FRONT')}}/img/cguide_box2.png"> PACKAGE TRANSIT TIMES</h2>
        <div class="col-md-8">
          {!! $guide->transits !!}
        </div>
        @if(!empty($guide->transits_meta))
        <div class="col-md-4">
          <aside>
            <h3>The Shoppre Advantage</h3>
            <p>{{$guide->transits_meta}}</p>
          </aside>
        </div>
        @endif
        <div class="clearfix"></div>
      </article>
      @endif

      @if(!empty($guide->forbidden))
      <article>
        <h2><img src="{{env('AWS_CLOUD_FRONT')}}/img/cguide_box3.png"> PRODUCTS YOU CAN'T SHIP INTERNATIONALY TO {{strtoupper($country->name)}}</h2>
        <div class="col-md-8">
          {!! $guide->forbidden !!}
        </div>
        @if(!empty($guide->forbidden_meta))
        <div class="col-md-4">
          <aside>
            <h3>The Shoppre Advantage</h3>
            <p>{{$guide->forbidden_meta}}</p>
          </aside>
        </div>
        @endif
        <div class="clearfix"></div>
      </article>
      @endif

    </div>
  </section>
  @endif

  <section class="cguide_video violet-grade">
    <aside>
      @if(isset($guide) && !empty($guide->video_url))
      <a href="{{$guide->video_url}}" class="popup-youtube">Watch Video</a>
      @else
      <a href="https://www.youtube.com/watch?v=Zf77ljCx9Ik" class="popup-youtube">Watch Video</a>
      @endif

    </aside>
    <article>
      @if(isset($guide) && !empty($guide->video_head))
      <h3>{{$guide->video_head}}</h3>
      @else
      <h3>Partner up with Shoppre to make your Shopping and Shipping Experience SEAMLESS!</h3>
      @endif

      @if(isset($guide) && !empty($guide->video_desc))
      <p>{{$guide->video_desc}}</p>
      @else
      <p>Shopping at any  Indian online store is easy with help from Shoppre. Become a member, receive a Shoppre address with a Personal Locker and ship items from Indian sellers to our distribution center. Once we receive your purchase, we will help you export everything right to your doorstep.</p>
      @endif

    </article>
    <div class="clearfix"></div>
  </section>

  <section class="cguide_stores">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2>Which Indian Stores can I buy from?</h2>
        <p>As a Shoppre member, you can shop ANY Indian Online Store (Websites or even Social Media Business Pages) to find great sales on your favorite products -- makeup, designer clothes, ethnic wear, children's clothing, baby goods, home goods, electronics, men’s kurtas, shoes and more. With Shoppre, you can buy almost anything you desire.</p>
        <a href="{{route('stores')}}" class="btn btn-shoppre">Brands You Love</a>
        <p>Shoppre also offers a Personal Shopping Service where <a
                  href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/personal-shopper"
          >we can buy items on your behalf</a>. This comes in handy if an Indian website is not accepting your International credit card.</p>
      </div>
    </div>
  </section>
        <div class="modal fade" id="moreWeight" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                {{--<h4 class="modal-title">Shipping Rates: <span id="shippingCountry"></span></h4>--}}
              </div>
              <div class="modal-body">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h4 class="modal-title f-w-8"> For more than 70 Kg we will be providing spot rates which are extremely competitive</h4>
                  </div>
                  <div class="panel-body">
                    <form action="" method="post" id="form-weight">
                      <div class="col-md-12 col-xs-12 pad-r-10 pad-b-20"><br>
                        Name:<input type="text" class="txt-f-w txt-shadow txt-pad" autocomplete="off" name="MName" placeholder="Enter your name" required>
                        Phone Number: <input id="phone" name="MContactNumber" type="tel" class="txt-f-w txt-shadow txt-pad" autocomplete="off" required>
                        Email:<input type="Email" name="Memail" class="txt-f-w txt-shadow txt-pad" autocomplete="off"   placeholder="jhon@email.com" required>
                        Country :
                        <select class="form-control select-control b-r" name="Mcountry" required>
                          <option value="">Select Country</option>
                          @foreach($countries as $country)
                            <option value="{{$country->iso}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>
                          @endforeach
                        </select>
                        Weight<input type="number" class="txt-f-w txt-shadow txt-pad" autocomplete="off" name="Mweight" placeholder="Enter your Weight" required>
                        <div class="col-xs-12 col-md-12 pad-t-20">
                          <button type='submit' class="btn btn-s-r btn-b-r btn-l">Get a quote</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

  <section class="cguide_warning">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <h2>Items that Cannot be Exported From India</h2>
        <p>India has laws on what may not leave its borders. The following is a partial list of items Shoppre is legally unable to ship from its Bengaluru facility:</p>

        <ul>
          <li>Medical items</li>
          <li>Products made in Iran</li>
          <li>Military equipment</li>
          <li>Mobile telephones</li>
          <li>Knives</li>
          <li>Jewelry</li>
          <li>Infectious substances</li>
          <li>Magnetized material</li>
        </ul>

        <ul>
          <li>Checks, blank stock</li>
          <li>Blank money orders</li>
          <li>Nuclear material</li>
          <li>Political material</li>
          <li>Tobacco</li>
          <li>Devices for smoking opium, hash</li>
          <li>Pornography</li>
        </ul>
        <div class="clearfix"></div>
        <p><a href="{{route('contact')}}">CONTACT US</a> if you have any doubts regarding what you can ship to your country. Our team of Logistics experts will get back to you as soon as possible</p>
      </div>
    </div>
  </section>

  <section class="signup_free violet-grade">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h3>So what are you waiting for? Shopp <span class="text-orange">re</span>! Open your big box of happiness today!</h3>
        <p>Simply login to get your Personal Indian Shipping Address immediately!</p>
        <a href="{{route('customer.register')}}" class="btn btn-shoppre">sign up for free</a>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('js_script')
  <!-- Owl Carousel -->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/validate.min.js')}}"></script>
  <script src="{{asset('js/select2.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $( "#shipping" ).validate({
        rules:
            {
                country:{required: true},
                weight: {required: true},
                unit: {required: true},
            },
            messages:
            {
                country: { required: "Please select country"},
                weight: { required: "Please enter weight to calculate."},
                unit: { required: "Please select unit of weight."},
            },
            submitHandler: function(form) {
                var country = $("select[name='country']").val();
                var weight = $("input[name='weight']").val();
                var unit = $("input[name='unit']:checked").val();
                var type = $("input[name='type']:checked").val();
                var box_scale = $("input[name='scale']:checked").val();
                var length = $("input[name='length']").val();
                var width = $("input[name='width']").val();
                var height = $("input[name='height']").val();
                var token = $('input[name=_token]').val();
                $("#calc_load").show();
                $('#calc_error').hide();
                $('#ship_result').hide();
                if (weight<=70) {
                    var queryParams = 'all=true&country=' + country + '&type=' + type + '&weight=' + weight;
                    queryParams += '&length=' + length + '&width=' + width + '&height=' + height;
                    queryParams += '&scale=' + box_scale + '&unit=' + unit;
                    jQuery.ajax({
                        url: 'https://courier.shoppre.com/api/pricing?' + queryParams,
                        type: 'get',
                        success: function ({prices}) {
                            $("#calc_load").hide();
                            console.log(prices[0].customerRate);
                            let customer_price = prices[0].customerRate;
                            console.log('customer_price', customer_price);
                            $('#ship_cost').text(Math.round(customer_price));
                            $('#ship_time').text('3-5 Days');
                            $('#ship_disc').text('50');
                            $('#ship_result').slideDown();
                        }
                    });
                    return false;
                } else {
                    $("#calc_load").hide();
                    $('#moreWeight').modal('show')
                }
            }
      });

        $('.testimons').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            navText: '',
            autoplay: true,
            autoplayTimeout: 8500,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:true
                },
                1000:{
                    items:1,
                    nav:true,
                    loop:true
                }
            }
        });

        $(".select2").select2();

        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });

        // End of the document ready
    });

    $("#select_iso").change(function(){
        if ($(this).val().length != 0) {
            window.location = "/country/"+$(this).val();
        }
    });

    $("#xchange_calc select").change(function(){
        var country_from = $("#country_from").val();
        var country_to = $("#country_to").val();
        var token = $('input[name=_token]').val();

        $(".xchange_rate #calc_load").show();
        jQuery.ajax({
            url: '/calculate/exchange-rate',
            type : "POST",
            data:{ _token:token, country_from:country_from, country_to:country_to},
            success: function(data) {
                $(".xchange_rate #calc_load").hide();
                if (data.error) {
                    $('.xchange_rate #calc_error').css('display', 'block').text('We can not process this request! Try again later.');
                }else{
                    $(".xchange_rate #xchange_display").html("1 "+data.from_curr+" = "+data.rate+" "+data.to_curr);
                    $(".xchange_rate #rate_input").val(data.rate);
                    $(".xchange_rate #rate_from").val(1);
                    $(".xchange_rate #rate_to").val(data.rate);
                }
            }
        });
    });

    $(document).on('keyup', '.xchange_rate #rate_from', function() {
        var rate_from = $(".xchange_rate #rate_from").val();
        var rate_input = $(".xchange_rate #rate_input").val();

        var rate_to = parseFloat(rate_from) * parseFloat(rate_input);
        $(".xchange_rate #rate_to").val(rate_to.toFixed(3));
    });

    $(document).on('keyup', '.xchange_rate #rate_to', function() {
        var rate_to = $(".xchange_rate #rate_to").val();
        var rate_input = $(".xchange_rate #rate_input").val();

        var rate_from = parseFloat(rate_to) / parseFloat(rate_input);
        $(".xchange_rate #rate_from").val(rate_from.toFixed(3));
    });

    $("#form-weight").validate({
        rules:
            {
                email: {required: true}
            },
        messages:
            {
                // email: {required: 'Please enter your email id'}
            },
        submitHandler: function (form) {
            var country = $("select[name='Mcountry']").val();
            var email = $("input[name='Memail']").val();
            var name = $("input[name='MName']").val();
            var contact_no = $("input[name='MContactNumber']").val();
            var weight = $("input[name='Mweight']").val();
            var token = $('input[name=_token]').val();
            jQuery.ajax({
                url: '/api-pricing-calculator',
                type: "POST",
                data: {
                    _token: token,
                    name: name,
                    weight: weight,
                    email: email,
                    country: country,
                    contact_no: contact_no,

                },
                success: function (data) {
                    $('#moreWeight').modal('hide')
                }
            })
        }
    });

  </script>
@endsection
