@extends('layout')

@section('title', 'International Medicine Courier | Ayurveda Herbs Shipping')
@section('description', 'Send Medicines & Ayurvedic Herbs from India. Offering Door to door Pickup & Packing. Hassle Free Shipping Worldwide, 3-6 days delivery. Cheapest & Reliable‎.')
@section('keywords', 'medicine courier, fast shipping services, herbs, homeopathy, pills, capsules, ayurvedic courier to usa')

@section('css_style')

    <link rel="canonical" href="https://www.shopprecouriers.com/medicine-international-courier-from-india" />
    <style>
        .bg-ics-landing-page .container>div{padding:20px;margin-bottom:3em}.d-header-text{font-size:40px;font-weight:900}.d-header-text1{font-family:Montserrat -Italic;font-style:italic;line-height:26px;margin-top:25px}.box-steps p{line-height:1}.box-steps p span{font-size:22px;font-weight:900}#packing:hover{display:none}.bg-ics-l-p{background-image:url(../../img/images/overlay1.png);height:580px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;background-color:#fafafb;padding-top:80px}@media only screen and (max-width:600px){.bg-ics-l-p{height:680px}}
    </style>

@endsection
@section('content')
    <section class="bg-ics-l-p">
        <div class="container">
{{--            <div class="col-md-12">--}}
{{--                <a href="tel:+91-8277919191" class="pull-right d-contact-img-desktop">--}}
{{--                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img1.png" alt="">--}}
{{--                </a>--}}
{{--                <a href="tel:+91-8277919191" class="d-contact-img pull-right">--}}
{{--                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img2.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}

            <div class="col-sm-7 col-xs-12 no-pad">

                <div class="col-md-12 col-xs-12 no-pad">
                    <h1 class="p-color-white header-spacing d-header-text">Courier Medicines from India to ANY part of the World
                        </h1>
                    <h1 class="header1 p-color-white header-spacing">Starting @₹695/-</h1>

                    <p class="p-color-white header5 d-header-text1">Want
                        to courier medicine abroad from India?<br>
                        We ship to 220+ countries & our trusted courier partners FedEx,<br> DTDC & more help us sail smooth
                        all the way to your<br> destination, wherever it is</p>
                    <br>
                    <br>
                </div>
                <div class="col-md-12 col-xs-12 no-pad">
                    <a href="{{route('schedulePickup.Index')}}" class="btn btn-s-r btn-b-r btn-a-l">Schedule Pickup</a>
                    <a href="{{route('pricing')}}" class="btn btn-l btn-s-b btn-b-b btn-a-l">Estimate</a>
                </div>

            </div>

            <div class="col-sm-5 col-xs-12" style="padding-top: 25px">
                <form action="" method="post" id="ics_lp">
                    {{csrf_field()}}
                    <div class="formFrame div-form-get-quote" id="diwali-couponcode1">
                        <h1 class="header2 p-color-blue" style="margin-bottom: 30px">Request a Callback</h1>
                        <div class="form-group">
                            <center> <a href="https://www.surveymonkey.com/r/CJB6PLL" target="_blank" class="btn btn-s-r btn-a-l btn-b-g" style="background-color: #4285f4">
                                    GET A FREE QUOTE TODAY</a></center>
{{--                            <label>Full Name <span class="p-color-red">*</span></label>--}}
{{--                            <input type="text" name="Name" class="form-control"--}}
{{--                                   placeholder="Enter Your Full Name Here" required>--}}
                        </div>
                        <br>
{{--                        <div class="form-group">--}}
{{--                            <label>Contact Number<span class="p-color-red">*</span></label>--}}
{{--                            <input type="text" name="ContactNumber" class="form-control"--}}
{{--                                   placeholder="Enter a Valid Phone number" required>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>E-Mail ID<span class="p-color-red">*</span></label>--}}
{{--                            <input type="email" name="email" class="form-control"--}}
{{--                                   placeholder="Enter a valid E-mail ID" required>--}}
{{--                        </div>--}}
                        <div class="form-group text-center">
                            {{--<button type="submit" name="btnActivate" class="btn btn-d-activate-coupon"> GET A FREE QUOTE--}}
                            {{--</button>--}}
                            <a href="http://bit.ly/shpr-relocation" target="_blank" class="btn btn-s-b btn-a-l btn-b-g">Message us on WhatsApp</a>

                        </div>
                    </div>

{{--                    <div class="formFrame  div-form-get-quote" id="diwali-couponcode2">--}}
{{--                        <h1 class="header2 p-color-blue">Get a Quote</h1>--}}
{{--                        <div class="row">--}}
{{--                            <center>--}}
{{--                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/request-sent.svg" alt="">--}}
{{--                                <h6 class="header5 p-color-blue">Request Sent!</h6>--}}
{{--                                <h5 class="header5 p-color-cement">Just One More Step To start <br>scheduling your--}}
{{--                                    courier</h5>--}}
{{--                            </center>--}}

{{--                        </div>--}}
{{--                        <div class="text-center">--}}
{{--                            <a href="{{route('customer.register')}}" class="btn btn-s-r btn-a-l btn-b-r">Sign Up</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </form>
            </div>
        </div>
    </section>


    <section class="product-courier ">
        <div class="container no-padding div-ics-border-btm">

            <center>
                <h1 class="f-c-d-greay f-s-30 f-w-8" >
                    Send Medicines & Ayurvedic Herbs from India To the USA, UAE, UK, Europe, Australia, New Zealand, Canada, Middle East & 220+
                    countries.
                </h1>
            </center>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-box-packing.png" alt="" id="packing">
                <img class="img-responsive" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-box-packed.png" alt="" id="packed" style="display: none">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 " style="padding-top: 50px">
                <div class="row no-padding">
                    <center>
                        <h2 class="f-c-d-greay f-s-22 f-w-8 ">Can we send medicine via courier from India?</h2>
                        <p class="f-c-l-gray f-s-18 f-w-8">Yes, we do ship medicines and ayurveda products offering special courier services
                            to NRIs & International Indian Medicine users. All you need is a Doctor's prescription and the commercial bill.
                            These are some of the goods that we frequently ship for our customers </p>
                    </center>
                </div>
                <br>
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <div class="col-md-6 col-xs-6 no-padding">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Pills</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Herbs</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Liquid/Syrups</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Ointments</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Inhalers</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Homeopathy</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-6 no-padding">
                        <ul style="text-decoration: none; list-style: none">
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Capsules</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Injections</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Tablets</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Eye/Ear Drops</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Lozenges</li>
                            <li>& Many More Products</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="container div-ics-border-btm">
            <div class="col-md-12 col-xs-12 no-pad">
                <center>
                    <h1 class="f-s-30 f-c-d-greay">Features & Benefits of Our Services</h1>
                    <p class="f-s-20 f-c-gray">Get a FREE estimate for your International Medicine Courier, and schedule a pickup with us. We’ll come to your doorsteps to pick it up within 48 hours.
                        Reach your destination in 3-6 days, wherever in the world!</p>
                    </br>
                </center>
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <div class="col-md-6 col-xs-12 no-padding">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Door to Door Pickup Services</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Customs Clearance And Paperwork</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Hassle Free Shipment Process</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Low Cost for higher Kgs</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Package Return Services</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Multiple Payment Options Available</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-12 no-padding">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Consolidation & Repackaging</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >FREE Virtual Indian Address</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >20-day FREE, safe storage</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Doorstep delivery in 3–6 business days</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Wallet Cashback</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Real time online tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-12">
                    <div class="panel "><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" style="height: 70px" alt="">
                        <h1 class="header5 p-color-cement">Door-to-Door Delivery</h1>
                        <br/>

                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="panel ">
                        <br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">Country-specific Discount</h1>
                        <br>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-12">
                    <div class="panel">
                        <br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/support24.svg" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">24/7 Support</h1>
                        <br>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-12">
                    <div class="panel">
                        <br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/ics-time.svg" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">24-hour Dispatch</h1>
                        <br>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>

        <div class="container">
            <center>
                <h1 class="header1  p-color-cement-dark">ShoppRe International Medicine Courier Process</h1>
                <p class="header3 p-color-cement">Schedule a Pickup from any part of India. We’ll come to your doorsteps,
                    get your package & ship it off to the destination in 24 hours.</p>
            </center>
        </div>

        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box1">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement"><span id="number1">1</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-responsive img-process" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pic_up.svg">
                            <h2 class="header3 p-color-cement-dark">Pickup Package</h2>
                            <p class="header5 p-color-cement">
                                After getting your FREE estimate, fill in the order form accordingly and submit it to schedule your pickup.
                            </p>
                        </center>
                    </div>

                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box2">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement"><span id="number2">2</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-responsive  img-process" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shipments.svg">
                            <h2 class="header3 p-color-cement-dark">We’ll Pick It Up</h2>
                            <p class="header5 p-color-cement">
                                Within 48 hours of you making the request, we’ll come to your doorsteps to pickup your package(s).
                            </p>
                        </center>

                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box3">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement"><span id="number3">3</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-process" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/deliver_package.svg">
                            <h2 class="header3 p-color-cement-dark">Dispatch in 24 Hours</h2>
                            <p class="header5 p-color-cement">
                                We’ll complete the documentation & dispatch your package(s) to one of our courier partners as soon as possible.
                            </p>
                        </center>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <br>
                <center>
                    <a href="{{route('schedulePickup.Index')}}" class="btn btn-s-r btn-b-r btn-a-l">Request Pickup</a>
                </center>
                <br>
                <br>
            </div>
            <p class="header1 p-color-cement-dark">
                Shipping from India Now Made Easy by ShoppRe.com
            </p>
            <p class="header4 p-color-cement">
                Save up to 60–80% of the total cost compare to any other shipping services. Now worry less, because we have partnered with high value courier companies such as DHL, DTDC
                and more to choose shipping that arrives quickly or the cost effective one. We not only help you
                in buying goods online but also send business consignment, personal packages, documents or gifts to your dear ones tracking door-to-door shipment process.
            </p>

            <br>
        </div>
    </section>

    <section style="margin-bottom: 50px">
        <div class="container" style="margin-top: 62px;">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive img-shipments" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-tailor.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="header1  p-color-cement-dark">Are you a Seller? <br>
                    Save more on shipping.</h1>
                <p class="header2 p-color-cement"><span
                        class="header2 p-color-blue"> Start your FREE 30 Day Trial</span>
                    to know how much you can save monthly on regular shipping</p>
                <div class="col-md-12">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdL11DQD_pOS2tBNXWaI0d8ryZ4DD0foA-Z7ZR0f0hUG3qpSg/viewform"
                           class="btn btn-request-cal-back">Request Callback</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <a href="" class="btn btn-courier-know">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-contact-details-section">
        <div class="container " id="contact-support">
            <div class="col-md-12">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Didn't find the answer you need? Contact us!</p>
                        </center>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-8277919191" class="header2 p-color-white">+91 8277 919191</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div
                    class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    {{--<a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#"--}}
                       {{--class="header2 p-color-white">Chat Now</a>--}}
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>

    <section class="d-contact-section-desktop">
        <div class="container " id="contact-support">
            <div class="row" id="d-contcat">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 " style="display: none">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Contact Our <br>Support Team </p>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="d-contact-div">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                        <p class="header6 p-color-white " style="margin-left: 51px;margin-top: -36px;">Contact Our <br>Support
                            Team </p>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align" style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-8277919191" class="header2 p-color-white">+91 8277 919191</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js_script')

    <script>
        (function (t, e, s, o) {
            var n, a, c;
            t.SMCX = t.SMCX || [], e.getElementById(o) || (n = e.getElementsByTagName(s), a = n[n.length - 1], c = e.createElement(s), c.type = "text/javascript", c.async = !0, c.id = o, c.src = ["https:" === location.protocol ? "https://" : "http://", "widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgd5lqUcpAZtddD7j_2B2IRQwllXfc1Z9E523rP88f0VFNBv.js"].join(""), a.parentNode.insertBefore(c, a))
        })(window, document, "script", "smcx-sdk");
    </script>

    <script>
        $(document).ready(function(){$("#ics_lp").validate({rules:{email:{required:!0}},messages:{},submitHandler:function(o){var c=$("input[name='email']").val(),n=$("input[name='Name']").val(),s=$("input[name='ContactNumber']").val(),f=$("input[name=_token]").val();jQuery.ajax({url:"medicine",type:"POST",data:{_token:f,email:c,name:n,contact_no:s,mailtrain_type:"medicine"},success:function(o){console.log(o),$("#diwali-couponcode1").hide(),$("#diwali-couponcode2").slideDown()}})}}),$("#ics-box2").hover(function(){$("#ics-box2").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box1").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number2").css({color:"red"}),$("#number1").css({color:"#677582"})},function(){$("#ics-box1").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box2").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number1").css({color:"red"}),$("#number2").css({color:"#677582"})}),$("#ics-box3").hover(function(){$("#ics-box3").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box1").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number3").css({color:"red"}),$("#number1").css({color:"#677582"})},function(){$("#ics-box1").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box3").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number1").css({color:"red"}),$("#number3").css({color:"#677582"})})});
    </script>
@endsection



