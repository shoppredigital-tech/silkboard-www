@extends('layout')

@section('title', 'ShoppRe - Shop Indian Stores & Ship Internationally | Courier Service')
@section('description', 'Signup for Indian Address. Shop your favorite Indian store and Ship Internationally. India&#039;s #1 international courier, shipping and consolidation company.')
@section('keywords', 'shop and ship, courier service, shoppre, consolidation company, indian store, ship internationally')



@section('css_style')
    <style>

    </style>
@endsection

@section('content')
    <section class="header">
        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <center>
                    <p style="margin-top:170px;">
                        <a class="bla-1" href="https://www.youtube.com/watch?v=Zf77ljCx9Ik&t=5s">
                            <img class="btn-vid-img" src="img/svg_image/btn.svg">
                        </a>

                    </p>
                    <h1 class="header1 p-color-white">What is Shop & Ship?</h1>
                    <p class="header2 p-color-cement" style="margin-bottom: 115px;">We receive your order at our
                        branch
                        and
                        can provide Storage,<br> Repackaging and Consolidation Service to send at your abroad
                        address
                    </p>
                </center>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div style="margin: 77px 0 13px  0 ;">
                <center>
                    <h2 class="header1 p-color-cement-dark">How it Works?</h2>
                    <p class="header4 p-color-cement">We receive your order at our
                        branch and can provide Storage,<br>
                        Repackaging and Consolidation Service to send at your abroad address</p>
                </center>
            </div>
        </div>

        <div class="container" id="div-container"
             style="background-color: #fafafb;padding-left: 0px;padding-right: 0px">
            <div class="col-md-4 col-lg-4  div-step1">
                <div class="box-ifs" id="step1">
                    <center>
                        <p class="header4 p-color-cement"><span id="number1">1</span> <br> STEP </p>
                    </center>
                </div>
                <div class="" id="image1" style="margin-top: -94px;">
                    <center>
                        <h3 class=" p-color-cement-dark header4" style="margin-top: 36px;">Get
                            a Free Virtual
                            Address</h3>
                    </center>
                    <img class="img-responsive img-ifs-v_addres " style="margin-top:50px;"
                         src="img/svg_image/step1.svg">
                </div>
                <div class="" style="padding: 0;display: none;" id="text1">
                    <h3 class="header4 p-color-cement-dark p-ifs-margin-h"
                        style="text-align: center " id="step-register">Register</h3>
                    <p class="header6 p-color-cement p-ifs-margin-d"
                       style="text-align: center" id="step-register">
                        Registre with us and get free virtual address, free 20 days locker storage service per order
                    </p>
                </div>
            </div>


            <div class="col-md-4 col-lg-4  div-step2">
                <div class="box-ifs" id="step2" style="margin-left: 70px">
                    <center>
                        <p class="header4 p-color-cement"><span id="number2">2</span> <br> STEP </p>
                    </center>
                </div>

                <div class="" id="image2" style="display: none ;margin-top: -94px;">
                    <center>
                        <h3 class=" p-color-cement-dark header4" style="margin-top: 36px;">
                            Purchase Products
                        </h3>
                    </center>
                    <img class="img-responsive img-ifs-v_addres " style="margin-top: 20px;"
                         src="img/svg_image/step_2.svg">
                </div>

                <div class="" style="padding: 0" id="text2">
                    <h3 class="header4 p-color-cement-dark p-ifs-margin-h"
                        style="text-align: center " id="step-register">Purchase</h3>
                    <p class="header6 p-color-cement p-ifs-margin-d"
                       style="text-align: center" id="step-register">
                        Purchase any product from your favourite indian online store and use your
                        locker address for item delivery.
                    </p>
                </div>
            </div>


            <div class="col-md-4 col-lg-4  div-step3">
                <div class="box-ifs" id="step3" style="margin-left: 70px">
                    <center>
                        <p class="header4 p-color-cement"><span id="number3">3</span><br> STEP </p>
                    </center>
                </div>

                <div class="" id="image3" style="display: none ;margin-top: -94px;">
                    <center>
                        <h3 class=" p-color-cement-dark" style="font-size: 18px;font-weight: 700; margin-top: 36px;">
                            Receive your package </h3>
                    </center>
                    <img class="img-responsive img-ifs-v_addres " style="margin-top: 20px;"
                         src="img/svg_image/step3.svg">
                </div>

                <div class="" style="padding: 0" id="text3">
                    <h3 class="header4 p-color-cement-dark p-ifs-margin-h"
                        style="text-align: center " id="step-register">Receive</h3>
                    <p class="header6 p-color-cement p-ifs-margin-d"
                       style="text-align: center" id="step-register">
                        We will ship your product to your abroad address with upto 80% less delivery
                        cost. Enjoy!
                    </p>
                </div>
            </div>
        </div>


        {{--mobile view--}}

        <div class="container mobile-view" id="mobile-view">
            <div class="col-sm-4 col-xs-4">
                <center>
                    <div class="box-ifs" style="border-color: red !important;" id="mobile-step1">
                        <center>
                            <p class="header4 p-color-cement"><span style=" color: red" id="m-number1">1</span> <br>
                                STEP </p>
                        </center>
                    </div>
                </center>
            </div>
            <div class="col-sm-4 col-xs-4">
                <center>
                    <div class="box-ifs" id="mobile-step2">
                        <center>
                            <p class="header4 p-color-cement"><span id="m-number2">2</span> <br> STEP </p>
                        </center>
                    </div>
                </center>
            </div>
            <div class="col-sm-4 col-xs-4">
                <center>
                    <div class="box-ifs" id="mobile-step3">
                        <center>
                            <p class="header4 p-color-cement"><span id="m-number3">3</span><br> STEP </p>
                        </center>
                    </div>
                </center>
            </div>
            <div class="col-xs-12 col-sm-12 mobile-images">
                <center>
                    <img class="img-responsive " id="mobile-image1" src="img/svg_image/step1.svg">
                    <img class="img-responsive " id="mobile-image2" style="width: 80%;display: none;"
                         src="img/svg_image/step_2.svg">
                    <img class="img-responsive " id="mobile-image3" style="width: 80%;display: none;"
                         src="img/svg_image/step3.svg">
                </center>
            </div>
        </div>


        {{--mobile view--}}

        <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register">
            <div class="container">
                <center>
                    <button class="btn h4 p-color-white btn-ifs-free-v-a">Get Free Virtual Address</button>
                </center>
            </div>
        </a>

    </section>



    <section style="background-color: #fafafb;">
        <div class="container" style="padding-top: 60px">
            <center>
                <h1 class="header1 p-color-cement-dark">Personal Shopper</h1>
                <h3 class="header2 p-color-cement">Don't know how to purchase? Hire an expart and allow him to <br>
                    purchase
                    on behalf of you </h3>
            </center>
        </div>

        <div class="container">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card ">
                    <img class="img " src="img/svg_image/4-layers.svg">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card">
                    <h4 class="header4 p-color-cement-dark">Store does't accept your <br> International Credit cards?
                    </h4>
                </div>


                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card ">
                    <img class="img" src="img/svg_image/4-layers1.svg">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card">
                    <h4 class="header4 p-color-cement-dark">Store does't accept your <br> International Credit cards?
                    </h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card ">
                    <img class="img" src="img/svg_image/4-layers2.svg">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card">
                    <h4 class="header4 p-color-cement-dark">Store does't accept your <br> International Credit cards?
                    </h4>
                </div>
                <div class="col-sm-12 col-xs-12" id="img-shopping-mobile">
                    <img class="img-priyamani-shopping" src="img/images/priyamani_shopping.png">
                </div>
                <a href="https://myaccount.shoppre.com/personal-shopper">
                    <div class="btn btn-get-assisted h4 p-color-white">
                        Get Assisted
                    </div>
                </a>

            </div>
            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 " id="img-shopping">
                <img class="img-priyamani-shopping" src="img/images/priyamani_shopping.png">
            </div>

        </div>
    </section>



    <section>
        <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
            <img class="img-responsive " src="img/images/ifs_reviews.png">
        </div>
    </section>

    {{--<section>--}}
    {{--<div class="container" style="margin-top: 63px; margin-bottom: 30px;">--}}
    {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
    {{--<div class="col-md-3 col-lg-3 col-sm-2 col-xs-2 div-review1">--}}
    {{--<center>4.7 </center>--}}

    {{--</div>--}}
    {{--<div class="col-md-9 col-lg-9 col-sm-10 col-xs-10" style="padding-top: 20px; margin-left: -16px;">--}}
    {{--<input class="rating rated" style="margin:10px 0 0 0 !important;" value="5" id="courier_rating">--}}
    {{--<p class="header6" style="color: green; margin:-8px 0 0 12px;">4565 reviews </p>--}}
    {{--<center>--}}
    {{--<img class="img-responsive " src="img/images/reviews_shoppre.svg">--}}
    {{--</center>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">--}}
    {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">--}}
    {{--<img class="img-responsive img-courier-review-g" src="img/svg_image/ic_google.svg">--}}
    {{--<p class="header6" style="color: #e85151;">Reviews</p>--}}
    {{--</div>--}}

    {{--<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">--}}
    {{--<img class="img-responsive " src="img/images/rating_google.png">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-lg-5 col-md-5  col-sm-12 col-xs-12">--}}
    {{--<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-xs-4">--}}
    {{--<img class="img-responsive img-courier-review-f" src="img/images/Facebook_Logo@2x.png">--}}
    {{--<p class="header6" style="color: #507dbc; line-height: 30px">Reviews</p>--}}
    {{--</div>--}}

    {{--<div class="col-lg-7 col-md-7 col-sm-8 col-xs-8">--}}
    {{--<img class="img-responsive img-facebook-r" style="margin-top: -15px;"--}}
    {{--src="img/images/rating_facebook.png">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</section>--}}


    <section style="background-color: #fafafb; ">
        <div class="container">
            <center>
                <h1 class="header1 p-color-cement-dark">Benefits</h1>
                <h2 class="header2 p-color-cement"> We will recived your order at our branch and can provide Storage,
                    <br>
                    Repackaging and Consolidation service to send at your abroad address.</h2>
            </center>
        </div>


        <div class="container">
            {{--<div class="row">--}}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bhoechie-tab-menu">
                    <div class="list-group">
                        <a href="#" class="list-group-item active text-center">
                            <h5 class="header5 ">Personal Shopper</h5>
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <h5 class="header5">20-Day Free Storage</h5>
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <h5 class="header5">Consolidation</h5>
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <h5 class="header5">Repackaging</h5>
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <h5 class="header5 ">Affordable Rates</h5>
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <h5 class="header5">24/7 Customer Support</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab"
                     style="padding-left: 0px;padding-right: 0px;">
                    <div class="bhoechie-tab-content active">
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12" style="margin-bottom: 113px;">
                            <center>
                                <h4 class="header4 p-color-cement-dark" style="font-weight: 900 !important;"> An expert
                                    will assigned to purchase for you</h4>
                            </center>
                        </div>


                        <div class="col-md-6 col-lg-6 col-sm-4 col-xs-4">
                            <center>
                                <img class="img-responsive " style="height: 200px;margin-top: -41px;"
                                     src="img/svg_image/image_benefit_001.svg">
                            </center>

                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-sm-offset-2 col-xs-6 col-xs-offset-2">
                            <ul id="ifs-li">
                                <li><p class="header7 p-color-cement" style="margin: -35px 0 11px -20px;">Order for
                                        you</p></li>
                                <li><p class="header7 p-color-cement" style="margin: -35px 0 11px -20px;">Pay for
                                        you</p></li>
                                <li><p class="header7 p-color-cement" style="margin: -35px 0 11px -20px;">Recieved your
                                        Order</p></li>
                                <li><p class="header7 p-color-cement" style="margin: -35px 0 11px -20px;">
                                        Repack/Consolidate and send it to your</p></li>
                                <li><p class="header7 p-color-cement" style="margin: -35px 0 11px -20px;">Abroad
                                        Address</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="bhoechie-tab-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <center>
                                <h3 class="header4 p-color-cement-dark"
                                    style="text-align: center;font-weight: 900!important;">20-Day Free Storage</h3>
                            </center>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9">
                            <center>
                                <img class="img-responsive " style="height: 350px;"
                                     src="img/svg_image/image_benefit_003.svg">
                            </center>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
                            <p class="header7 p-color-cement" style="text-align: left;margin-top:50%; ">
                                All your order will be store 20 days. You need ship all items from your locker within
                                days.
                            </p>
                        </div>
                    </div>

                    <div class="bhoechie-tab-content">
                        <div class="col-md-6 col-lg-6 col-sm-5 col-xs-5">
                            <center>
                                <h4 class="header4 p-color-cement-dark" style="font-weight: 900 !important;">Before
                                    Consolidation</h4>
                                <img class="img-responsive " style="height: 330px;"
                                     src="img/svg_image/image_benefit_002A.svg">
                            </center>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-1 col-xs-1">
                            <p class="header8" style="color: #507dbc; font-weight: 900; margin-top: 167%">Save upto <br>
                                <span class="header1"
                                      style="color: #507dbc;line-height:23px  ;font-weight:900">80%</span>
                            </p>
                            <p class="header8 p-color-cement">
                                on international <br> Shipping
                            </p>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-2 col-xs-2">
                            <center>
                                <h4 class="header4 p-color-cement-dark" style="font-weight: 900 !important;">After
                                    Consolidation</h4>
                                <img class="img-responsive " style="height: 330px;"
                                     src="img/svg_image/image_benefit_002B.svg">
                            </center>
                        </div>
                    </div>


                    <div class="bhoechie-tab-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 50px;">
                            <center>
                                <h3 class="header4 p-color-cement-dark"
                                    style="text-align: center;font-weight: 900!important;">Re-packaging</h3>
                            </center>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
                            <img class="img-responsive "
                                 src="img/svg_image/image_benefit_004.svg">
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                            <p class="header7 p-color-cement" style="text-align: left;margin-top:10%; ">
                                Package from a store was shipped to the warehouse in a box 25x11x11 inches, representing
                                a volumetric weight of 10kg.
                                <br>
                                <br>
                                After repackaging, the receipt dimensions were reduced to ((21x10x10 inches),
                                representing a volumetric weight of 7kg.
                                <br>
                                <br>
                                <span style="color: #507dbc;">Saving to the customer was 3kg. in shipping volumetric weight.</span>
                            </p>
                        </div>
                    </div>
                    <div class="bhoechie-tab-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 50px;">
                            <center>
                                <h3 class="header4 p-color-cement-dark"
                                    style="text-align: center;font-weight: 900!important;">Affordable Rates</h3>
                            </center>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <img class="img-responsive "
                                 src="img/svg_image/image_benefit_005.svg">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <p class="header7 p-color-cement" style="text-align: left;margin-top:22%; ">
                                Did you know that the first 0.5 KG costs the most to ship? <br><br>
                                With our 20-day FREE storage and consolidation services,
                                you can shop around all you want and ship it to your ShoppRe address.
                                We'll consolidate all of them and repackage them into one,
                                saving you up to 80% in shipping costs!
                            </p>
                        </div>
                    </div>
                    <div class="bhoechie-tab-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                            <center>
                                <h3 class="header4 p-color-cement-dark"
                                    style="text-align: center;font-weight: 900!important;">24/7 Customer Support</h3>
                            </center>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <center>
                                <img class="img-responsive " style=" height: 200px;margin-top: 17%;"
                                     src="img/svg_image/image_benefit_006.svg">
                            </center>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <p class="header7 p-color-cement" style="text-align: left;margin-top:38%; ">
                                Have any queries? Our FAQs don't cover it? But our 24/7 support will! <br>
                                If you need any assistance with making a shipment or sending a courier, our professionals will help you along every step of the way.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{--</div>--}}
        </div>


        {{--<div class="container">--}}
        {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
        {{--<div class="row row-ifs-m">--}}
        {{--<div class="col-md-1 col-lg-1 col-sm-2 col-xs-2">--}}
        {{--<center>--}}
        {{--<img class="img-star-m" src="img/svg_image/btn_option.svg">--}}
        {{--</center>--}}

        {{--</div>--}}
        {{--<div class="col-md-10 col-lg-10 col-sm-10 col-xs-10">--}}
        {{--<h4 class="header4 p-color-red"> Shopping Assistance</h4>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row row-ifs-m">--}}
        {{--<div class="col-md-1 col-lg-1 col-sm-2 col-xs-2">--}}
        {{--<center>--}}
        {{--<img class="img-star-m" src="img/svg_image/star.svg">--}}
        {{--</center>--}}

        {{--</div>--}}
        {{--<div class="col-md-10 col-lg-10 col-sm-10 col-xs-10">--}}
        {{--<h4 class="header4 p-color-cement"> Shopping Assistance</h4>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row row-ifs-m">--}}
        {{--<div class="col-md-1 col-lg-1 col-sm-2 col-xs-2">--}}
        {{--<center>--}}
        {{--<img class="img-star-m" src="img/svg_image/star.svg">--}}
        {{--</center>--}}

        {{--</div>--}}
        {{--<div class="col-md-10 col-lg-10 col-sm-10 col-xs-10">--}}
        {{--<h4 class="header4 p-color-cement"> Shopping Assistance</h4>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row row-ifs-m">--}}
        {{--<div class="col-md-1 col-lg-1 col-sm-2 col-xs-2">--}}
        {{--<center>--}}
        {{--<img class="img-star-m" src="img/svg_image/star.svg">--}}
        {{--</center>--}}

        {{--</div>--}}
        {{--<div class="col-md-10 col-lg-10 col-sm-10 col-xs-10">--}}
        {{--<h4 class="header4 p-color-cement"> Shopping Assistance</h4>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row row-ifs-m">--}}
        {{--<div class="col-md-1 col-lg-1 col-sm-2 col-xs-2">--}}
        {{--<center>--}}
        {{--<img class="img-star-m" src="img/svg_image/star.svg">--}}
        {{--</center>--}}

        {{--</div>--}}
        {{--<div class="col-md-10 col-lg-10 col-sm-10 col-xs-10">--}}
        {{--<h4 class="header4 p-color-cement"> Shopping Assistance</h4>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--</div>--}}
        {{--<div class="col-md-9 col-lg-9" style="height: 400px;background-color: #ffffff; margin-bottom:100px">--}}
        {{--<center>--}}
        {{--<p class="header4" style="color: green"> We will purchase product for you</p>--}}
        {{--</center>--}}
        {{--</div>--}}

        {{--</div>--}}
    </section>


    {{--<section>--}}
    {{--<div class="container">--}}
    {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
    {{--<img class="img-responsive img-shipments" src="img/images/back.png">--}}
    {{--</div>--}}
    {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
    {{--<h1 class="header1 p-color-cement-dark p-seller">Are you a Seller? <br>--}}
    {{--Save more on shipping.</h1>--}}
    {{--<p class="header2 p-color-cement"><span class="header2"--}}
    {{--style="color: #507dbc;"> Start your FREE 30 Day Trial</span> to--}}
    {{--know how much you can save monthly on regular shipping</p>--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
    {{--<button class="btn h4 btn-request-cal-back">Request Callback</button>--}}
    {{--</div>--}}
    {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
    {{--<button class="btn h4 btn-courier-know">Know more</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}


    {{--<section style="background-color: #e85151;">--}}
    {{--<div class="container">--}}
    {{--<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 div-ifs-cal">--}}
    {{--<div class="tab" role="tabpanel">--}}
    {{--<!-- Nav tabs -->--}}
    {{--<ul class="nav nav-tabs ul-margin" role="tablist">--}}
    {{--<li role="presentation" class="active">--}}
    {{--<a href="#International" aria-controls="home" role="tab" data-toggle="tab">International</a>--}}
    {{--</li>--}}
    {{--<li role="presentation">--}}
    {{--<a href="#Domestic" aria-controls="profile" role="tab" data-toggle="tab">Domestic</a>--}}
    {{--</li>--}}

    {{--</ul>--}}
    {{--<!-- Tab panes -->--}}
    {{--<div class="tab-content tabs">--}}
    {{--<div role="tabpanel" class="tab-pane fade in active" id="International">--}}
    {{--<div class="col-lg-12 col-md-12 ">--}}
    {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
    {{--<input class="text-box-margin" type="text" name="" placeholder="From India">--}}
    {{--</div>--}}
    {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
    {{--<input class="text-box-margin" type="text" name=""--}}
    {{--placeholder="    To  United States">--}}
    {{--</div>--}}
    {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
    {{--<input class="text-box-margin" type="text" name="" placeholder="Weight(kg)">--}}

    {{--</div>--}}
    {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-courier-cal-margin">--}}
    {{--<button class="btn-ifs-estimate" type="button" id="International">Get An Estiamate--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<div role="tabpanel" class="tab-pane fade" id="Domestic">--}}
    {{--<div class="col-lg-12 col-md-12 ">--}}
    {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
    {{--<input class="text-box-margin" type="text" name="" placeholder="From City">--}}
    {{--</div>--}}
    {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
    {{--<input class="text-box-margin" type="text" name="" placeholder="To  City">--}}
    {{--</div>--}}
    {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
    {{--<input class="text-box-margin" type="text" name="" placeholder=" Weight(kg)">--}}

    {{--</div>--}}
    {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-courier-cal-margin">--}}
    {{--<button class="btn-ifs-estimate" type="button" id="International">Get An Estiamate--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
@endsection

@section('js_script')

    <script type="text/javascript">
        jQuery(function () {
            jQuery("a.bla-1").YouTubePopUp();
            jQuery("a.bla-2").YouTubePopUp({autoplay: 0}); // Disable autoplay
        });
    </script>

    <script>
        (function ($) {

            $.fn.YouTubePopUp = function (options) {

                var YouTubePopUpOptions = $.extend({
                    autoplay: 1
                }, options);

                $(this).on('click', function (e) {

                    var youtubeLink = $(this).attr("href");

                    if (youtubeLink.match(/(youtube.com)/)) {
                        var split_c = "v=";
                        var split_n = 1;
                    }

                    if (youtubeLink.match(/(youtu.be)/) || youtubeLink.match(/(vimeo.com\/)+[0-9]/)) {
                        var split_c = "/";
                        var split_n = 3;
                    }

                    if (youtubeLink.match(/(vimeo.com\/)+[a-zA-Z]/)) {
                        var split_c = "/";
                        var split_n = 5;
                    }

                    var getYouTubeVideoID = youtubeLink.split(split_c)[split_n];

                    var cleanVideoID = getYouTubeVideoID.replace(/(&)+(.*)/, "");

                    if (youtubeLink.match(/(youtu.be)/) || youtubeLink.match(/(youtube.com)/)) {
                        var videoEmbedLink = "https://www.youtube.com/embed/" + cleanVideoID + "?autoplay=" + YouTubePopUpOptions.autoplay + "";
                    }

                    if (youtubeLink.match(/(vimeo.com\/)+[0-9]/) || youtubeLink.match(/(vimeo.com\/)+[a-zA-Z]/)) {
                        var videoEmbedLink = "https://player.vimeo.com/video/" + cleanVideoID + "?autoplay=" + YouTubePopUpOptions.autoplay + "";
                    }

                    $("body").append('<div class="YouTubePopUp-Wrap YouTubePopUp-animation">' +
                        '<div class="YouTubePopUp-Content">' +
                        '<span class="YouTubePopUp-Close">' +
                        '</span><iframe src="' + videoEmbedLink + '" allowfullscreen>' +
                        '</iframe>' +
                        '</div>' +
                        '</div>');

                    if ($('.YouTubePopUp-Wrap').hasClass('YouTubePopUp-animation')) {
                        setTimeout(function () {
                            $('.YouTubePopUp-Wrap').removeClass("YouTubePopUp-animation");
                        }, 600);
                    }

                    $(".YouTubePopUp-Wrap, .YouTubePopUp-Close").click(function () {
                        $(".YouTubePopUp-Wrap").addClass("YouTubePopUp-Hide").delay(515).queue(function () {
                            $(this).remove();
                        });
                    });

                    e.preventDefault();

                });

                $(document).keyup(function (e) {

                    if (e.keyCode == 27) {
                        $('.YouTubePopUp-Wrap, .YouTubePopUp-Close').click();
                    }

                });

            };

        }(jQuery));

    </script>



    <script>
        $(document).ready(function () {
            $('.div-step1').hover(function () {
                    $('#image1').show();
                    $("#text1").hide();
                    $("#step1").css({'border-color': 'red'})
                    $("#number1").css({'color': 'red'})
                },
                function () {
                    $('#image1').show();
                    $("#text1").hide();
                    $("#step1").css({'border-color': '#929ca5'})
                    $("#number1").css({'color': '#929ca5'})
                });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.div-step2').hover(function () {
                    $('#image2').show();
                    $("#text2").hide();
                    $("#step2").css({'border-color': 'red'})
                    $("#number2").css({'color': 'red'})
                    $(".div-step1").css({'height': '400px', 'width': '228px', 'background-color': '#fafafb'})
                    $("#step1").css({'border-color': '#929ca5'})
                    $('#image1').hide();
                    $("#text1").show();
                    $("#step1").css({'margin-left': '70px'})
                    $("#step3").css({'margin-left': '70px'})
                    /*background-color: #fafafb;*/
                },
                function () {
                    $('#image2').hide();
                    $("#text2").show();
                    $("#step2").css({'border-color': '#929ca5'})
                    $("#number2").css({'color': '#929ca5'})
                    $(".div-step1").css({'height': '400px', 'width': '679px', 'background-color': '#ffffff'})
                    $("#step1").css({'border-color': 'red'})
                    $('#image1').show();
                    $("#text1").hide();
                    $("#step1").css({'margin-left': '0'})
                    $("#step3").css({'margin-left': '70px'})
                });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.div-step3').hover(function () {
                    $('#image3').show();
                    $("#text3").hide();
                    $("#step3").css({'border-color': 'red'})
                    $("#number3").css({'color': 'red'})
                    $(".div-step1").css({'height': '400px', 'width': '228px', 'background-color': '#fafafb'})
                    $("#div-container").css({'background-color': '#ffffff'})
                    $("#step1").css({'border-color': '#929ca5'})
                    $('#image1').hide();
                    $("#text1").show();
                    $("#step1").css({'margin-left': '70px'})
                    $("#step2").css({'margin-left': '70px'})
                },
                function () {
                    $('#image3').hide();
                    $("#text3").show();
                    $("#step3").css({'border-color': '#929ca5'})
                    $("#number3").css({'color': '#929ca5'})
                    $(".div-step1").css({'height': '400px', 'width': '679px', 'background-color': '#ffffff'})
                    $("#step1").css({'border-color': 'red'})
                    $('#image1').show();
                    $("#text1").hide();
                    $("#step1").css({'margin-left': '0'})
                    $("#step2").css({'margin-left': '70px'})
                });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#mobile-step1').hover(function () {
                    $('#mobile-image1').show();
                    $("#mobile-image2").hide();
                    $("#mobile-image3").hide();
                    // $("#mobile-step2").css({'border-color': '#929ca5'})
                    // $("#mobile-step3").css({'border-color': '#929ca5'})
                },
                function () {
                    $('#mobile-image1').show();
                    $("#mobile-image2").hide();
                    $("#mobile-image3").hide();
                    // $("#mobile-step2").css({'border-color': '#929ca5'})
                    // $("#mobile-step3").css({'border-color': '#929ca5'})

                });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#mobile-step2').hover(function () {
                    $('#mobile-image1').hide();
                    $("#mobile-image2").show();
                    $("#mobile-image3").hide();
                    $("#m-number2").css({'color': 'red'})
                    $("#m-number3").css({'color': '#929ca5'})
                    $("#m-number1").css({'color': '#929ca5'})
                    $("#mobile-step2").css({'border-color': 'red'})
                    $("#mobile-step1").css({'border-color': '#929ca5'})
                    $("#mobile-step3").css({'border-color': '#929ca5'})
                },
                function () {
                    $('#mobile-image1').show();
                    $("#mobile-image2").hide();
                    $("#mobile-image3").hide();
                    $("#m-number2").css({'color': '#929ca5'})
                    $("#m-number3").css({'color': '#929ca5'})
                    $("#m-number1").css({'color': 'red'})
                    $("#mobile-step2").css({'border-color': '#929ca5'})
                    $("#mobile-step1").css({'border-color': 'red'})
                    $("#mobile-step3").css({'border-color': '#929ca5'})

                });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#mobile-step3').hover(function () {
                    $('#mobile-image1').hide();
                    $("#mobile-image2").hide();
                    $("#mobile-image3").show();
                    $("#m-number2").css({'color': '#929ca5'})
                    $("#m-number3").css({'color': 'red'})
                    $("#m-number1").css({'color': '#929ca5'})
                    $("#mobile-step3").css({'border-color': 'red'})
                    $("#mobile-step1").css({'border-color': '#929ca5'})
                    $("#mobile-step2").css({'border-color': '#929ca5'})
                },
                function () {
                    $('#mobile-image1').show();
                    $("#mobile-image2").hide();
                    $("#mobile-image3").hide();
                    $("#m-number2").css({'color': '#929ca5'})
                    $("#m-number3").css({'color': '#929ca5'})
                    $("#m-number1").css({'color': 'red'})
                    $("#mobile-step2").css({'border-color': '#929ca5'})
                    $("#mobile-step1").css({'border-color': 'red'})
                    $("#mobile-step3").css({'border-color': '#929ca5'})

                });
        });
    </script>

    <script>
        $(document).ready(function () {
            $("div.bhoechie-tab-menu>div.list-group>a").hover(function (e) {
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
            });
        });
    </script>
@endsection
