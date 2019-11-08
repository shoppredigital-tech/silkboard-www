@extends('layout')

@section('title', 'Indian Sweets FREE International Delivery from India')
@section('description', 'Indian sweets international delivery - Buy Quality Sweets, Dryfruits, Namkeens, Snacks for gifting, festival celebration, weeding, birthday parties. Shop Now!')
@section('keywords', 'free shipping from india, indian sweets, dryfruits, namkeen, desserts, snacks')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/indian-diwali-sweets-dryfruits-free-internatioanl-delivery" />

    <style>
        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
        }

        .underline-color  {
            text-decoration: underline red;
        }

        .img-product {
            width: 216px;
        }
        .zoom:hover {
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        .banner {
            display: none;
        }

        .image-banner {
            display: block;
        }

        .p-b-26 {
            padding-bottom: 26px !important;
        }

        .header-section {
            height: 480px !important;
        }

        @media only screen and (max-width:600px) {
            .img-product {
                width: 120px !important;
            }

            .header-section {
                height: 450px !important;
            }

            .m-t-img {
                margin-top: 0px !important;
            }

            .banner {
                display: block;
            }

            .image-banner {
                display: none;
            }

            .p-b-26 {
                padding-bottom: 26px !important;
            }
        }

        @media only screen
        and (min-width: 1024px)
        and (max-height: 1366px)
        and (-webkit-min-device-pixel-ratio: 1.5) {
            .img-product {
                width: 150px !important;
            }
        }

        .first-time-shipment{background-color:#11273b;height:813px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:60px}.first-time-shipment .div-snow{padding-top:146px}.first-time-shipment .div-snow img{position:absolute}.first-time-shipment .div-snow img{margin-left:-3px;position:absolute}.first-time-shipment .div-newyear{padding-top:206px}.first-time-shipment .div-newyear img{margin-left:-12px;position:absolute}.textbox-email{width:358px;height:50px;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:25px!important;background-color:#fff;border:0;padding-left:9%}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}.fst-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-360px;padding:20px}.fst-service .c-image{padding:20px}.fst-service .shopandship{box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ps{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ic{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .shopandship:hover{border:1px solid #507dbc}.fst-service .ps:hover{border:1px solid #507dbc}.fst-service .ic:hover{border:1px solid #507dbc}.fst-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.fst-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.fst-service .btn-chris-place-order{padding:13px 50px;color:#fff;width:300px;height:50px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:30px;background-color:#e85151}.chris-benefits{padding-top:30px}.chris-benefits ul{text-decoration:none;list-style:none}.chris-benefits ul li{color:#224464;font-family:Montserrat,sans-serif;font-size:15px;font-weight:400;text-align:left;padding-top:15px}.chris-benefits ul li img{margin-top:9px}.text-center div{padding-top:20px}.img-new-year{display:none}.chris-benefits .panel{box-shadow:0 2px 10px rgba(0,0,0,.05)!important}.chris-benefits .panel ul li span{margin-left:15px}.leter-space{letter-spacing:1px}#contact-support{padding-bottom:30px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default .select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.first-time-shipment{height:651px}.textbox-email{width:330px}.div-snow{display:none}.div-newyear{display:none}.fst-service{margin-top:-260px}.c-image{display:none}.txt-align{text-align:center}.img-new-year{display:block;width:240px}.chris-benefits ul li{font-size:16px}}
    </style>

@endsection

@section('content')
    <main>
        <div class="header">
            <div class="container"><br><br><br>
                <center>
                    <h1 class="f-s-36 f-c-white f-w-8">INDIAN SWEETS Free International Delivery</h1>
                    <p class="f-s-20 f-c-l-gray ">Shop Branded Sweets & Namkeen With Your ShoppRe Address for International Delivery from India.<br></p>
                    <br>
                </center>
                <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611"><i><a href="/first-time-international-shipment-offer" target="_blank">ShoppRe First Time Shipping Offer</a> :
                        Get ₹200 Discount - Use Code: FRST50. T&C*</i></p>
                <br>
                <br>
            </div>
        </div>
    </main>
{{--    <section class="first-time-shipment header-section" style="padding-top: 50px !important;">--}}
{{--        <div class="container no-padding banner">--}}
{{--                <p class="f-s-28 f-c-white f-w-9 text-center" style="background-color: #4285f4"><i>Indian Sweets: FREE International Shipping from India</i></p>--}}
{{--                <div class="col-md-6 col-xs-12" style="padding-top: 7%">--}}
{{--                   <center> <p class="m-t-sm f-s-30">Why Worries Re, <span style="font-family: Bahnschrift">Just ShoppRe!</span></p></center>--}}
{{--                    <p class="f-c-white m-t-sm f-s-18 text-center">--}}
{{--                        If you are in the quest for Indian sweets and snacks this Diwali for gifting purposes or just getting them for yourselves,--}}
{{--                        then ShoppRe is here to ship all your favorite <span class="underline-color">Sweets & Snacks</span> at your doorsteps to add extra vibrancy to your Diwali (🪔)--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-xs-12 no-padding">--}}
{{--                    <center>--}}
{{--                        <img src="{{asset('img/images/tape_signup.svg')}}" alt="signup shoppre">  <br>--}}
{{--                    </center>--}}
{{--                    <br>--}}
{{--                    <center>--}}
{{--                        <h18 class="f-s-50 f-c-white  f-w-9">Celebrate Diwali</h18>--}}
{{--                        <p class="f-s-36 f-c-white f-w-9 ">With ShoppRe.com </p>--}}
{{--                        <br>--}}
{{--                        <img src="{{asset('img/diwali/diwali-shipping-cashback-sweets-free-shipping.png')}}" alt="Diwali offer Free shipping from india" > <br><br>--}}
{{--                        <a href="{{route('customer.register')}}" class="btn btn-s-r btn-b-g btn-a-l" target="_blank">Sign UP FREE</a>--}}
{{--                        <br>--}}
{{--                        <br>--}}
{{--                    </center>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        <div class="image-banner">--}}
{{--            <img src="{{asset('img/diwali/diwali-sweets-free-shipping-from-india.png')}}" alt="" style="height: 430px; width: 100%;">--}}
{{--        </div>--}}
{{--    </section>--}}


    <section >
        <div class="container fst-service" style="margin-top: 0px;">
            <div class="row">
                <div class="">
                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">
                        Below are the Recommended & Recently Shipped Indian Sweets & Namkeens From India</h2>
{{--                    November 2019: <span class="f-s-25 f-c-red f-w-9">WEEKEND BINGE Sale (Up To 30% Off)</span>--}}

                </div>
{{--                <div class="col-md-4 col-xs-12 text-center margin-tp">--}}
{{--                    <p class="no-pad Rakhi-mid-div f-s-16 txt-center" style="margin-top: 10px;">(Online Chat or Click on BUY NOW &--}}
{{--                        <br>you will be redirected to WhatsApp)</p>--}}
{{--                    <div class="">--}}
{{--                        <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Pratheeksha;%20I%20Love%20to%20Send%20Diwali,%20Gifts%20and%20Sweets%20from%20India" target="_blank">--}}
{{--                            <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/images/7338208403-personal-shopper-number.png" >--}}
{{--                            <span class="font-16">+91-7338208403</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                            <img class="img-product m-t-img" src="{{asset('img/diwali/soanpapdi.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Soan Papdi <br>(200 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1800 <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha:%20Buy%20for%20me%20Soan%20Papdi(200g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="{{asset('img/diwali/kajukatli.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Kaju Katli <br>(250 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1895
                            <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Kaju%20Katli(250g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="{{asset('img/diwali/besanladdu.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Besan Laddu <br>(250 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1795
                            <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Besan%20Laddu(250g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="{{asset('img/diwali/DoodhBurfi.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Doodh Burfi <br>(250 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1795
                            <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Doodh%20Burfi(250g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="{{asset('img/diwali/raisins.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Raisins <br>(250 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1790
                            <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Raisins(250g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="{{asset('img/diwali/pistachios.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Pista <br>(200 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1790
                            <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Pista(200g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="{{asset('img/diwali/mamrabadam.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Mamra Badam <br>(200 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹2290
                            <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Mamra%20Badam(200g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="{{asset('img/diwali/cashewnutssalt.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Cashew <br>(200 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1930
                            <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Cashew(200g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="{{asset('img/diwali/SohanPapdi.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Sohan Papdi <br>(250 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1735 <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Sohan%20Papdi(250g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="{{asset('img/diwali/Doodh_Peda.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Doodh Peda <br>(250 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1795 <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Doodh%20Peda(250g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="{{asset('img/diwali/Dalmoth.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Dalmoth <br>(100 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1696 <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Dalmoth(100g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="{{asset('img/diwali/Chow_Chow.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Chow Chow <br>(100 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1692 <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Chow%20Chow(100g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="{{asset('img/diwali/PISTA_BISCUITS.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Pista Biscuits <br>(150 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1705 <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Pista%20Biscuits(150g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="{{asset('img/diwali/JEERA_BISCUITS.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Jeera Biscuits <br>(150 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1702 <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Jeera%20Biscuits(150g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="{{asset('img/diwali/PISTA_STICK.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Pista Stick <br>(150 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1775 <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Pista%20Stick(150g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="{{asset('img/diwali/MASALA_BISCUITS.jpg')}}" alt="signup shoppre">
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            Masala Biscuits <br>(150 grams)
                        </div>
                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">
                            ₹1702 <br>
                            <span class="f-s-16 f-c-gray">Free Shipping</span>
                        </div>
                        <div class="check-price-padd">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Buy%20for%20me%20Masala%20Biscuits(150g)" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mar-t-25">
                <div class="txt-center">
                        <button type="button" class="btn btn-warning bord-rad-5 margin-r-10">
                            <a href="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Estimate Shipping Rate</p>
                            </a>
                        </button>
                        <button type="button" class="btn btn-success bord-rad-5 margin-r-10">
                            <a href="https://api.whatsapp.com/send?phone=919148357733&text=Hi%20Pratheeksha;%20Can%20i%20Send%20Diwali,%20Gifts%20and%20Sweets%20from%20India?" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Message Us On WhatsApp</p>
                            </a>
                        </button>
                </div>
            </div>
        </div>
    </section>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h2 class="header1 p-color-cement-dark font-30">Featured Services & Benefits</h2>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shopper</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>20-Day Free Storage</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Consolidation</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Repackaging</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Scanned Copies Document-couriers</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Country-discount</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
    </section>
    <br>
    <br>

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
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 9148357733</a>

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
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 9148357733</a>

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
        <br>
    </section>
@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#diwali_coupon").validate({
                rules:
                    {
                        email: {required: true}
                    },
                messages:
                    {
                        // email: {required: 'Please enter your email id'}
                    },
                submitHandler: function (form) {
                    debugger;
                    var email = $("input[name='email']").val();
                    var pnumber = $("input[name='pnumber']").val();
                    var cnumber = $("[name='country_code']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'new-year-offer',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            pnumber: pnumber,
                            cnumber: cnumber,
                        },
                        success: function (data) {
                            var url= "{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?email=" + email + "&c_code="+ cnumber +"&PN="+ pnumber ;
                            console.log(data);
                            // window.open(url);
                            window.location.href = url;

                        }
                    })
                }
            });

        });
    </script>
@endsection
