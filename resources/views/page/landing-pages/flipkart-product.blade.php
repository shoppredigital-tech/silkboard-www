@extends('layout')

@section('title', 'Flipkart.com Online Shop | Offers & Sale | ShoppRe')
@section('description', 'Flipkart Online Shopping.Shop Flipkart with your ShoppRe Address and Ship Internationally at Lowest rates from India. Buy Now!')
@section('keywords', 'flipkart usa, shipping from india, shipping rates, international delivery, shopping stores')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/flipkart-online-shopping" />
    <meta name="robots" content="nofollow" />

    <meta property="og:title" content="Flipkart: Shopping with ShoppRe International Delivery" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.shoppre.com/flipkart-online-shopping" />
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="ShoppRe Flipkart international shipping" />
    <meta property="og:description" content="Shop Flipkart store and Ship Internationally with ShoppRe." />
    <meta property="og:site_name" content="ShoppRe" />

    <style>
        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
        }

        .underline-color  {
            text-decoration: underline red;
        }
        .img-shopperstop-offer {
            display: none;
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

        @media screen and (device-aspect-ratio: 40/71) {
            .img-mobile-view {
                width: 300px;
            }
        }

        @media only screen and (max-width:600px) {
            .img-product {
                width: 120px !important;
            }

            .img-mobile-view {
                display: block !important;
            }

            .img-desktop-view {
                display: none !important;
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
            <div class="container"><br><br>
                <center>
                        <h1 class="f-s-36 f-c-white f-w-8">FLIPKART Online Shopping</h1>
                    <p class="f-s-20 f-c-l-gray ">Shop Flipkart With Your ShoppRe Address for International Delivery from India.<br></p>
                    <br>
                </center>
{{--                <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611">--}}
                <p class="f-c-white f-w-9 text-center" >
                    <i><a href="/first-time-international-shipment-offer" target="_blank">ShoppRe Offer</a> :
                        Get ₹200 Discount on Shipping Flipkart.com Products Internationally. T&C*</i></p>
                <br>
                <br>
            </div>
        </div>
    </main>

{{--    <section class="first-time-shipment header-section" style="padding-top: 50px !important;">--}}
{{--        <div class="container no-padding banner">--}}
{{--                <p class="f-s-28 f-c-white f-w-9 text-center" style="background-color: #4285f4"><i>Flipkart - Shop Online with Best Offers‎</i></p>--}}
{{--                <div class="col-md-6 col-xs-12" style="padding-top: 7%">--}}
{{--                   <center> <p class="m-t-sm f-s-30">Why Worries Re, <span style="font-family: Bahnschrift">Just ShoppRe!</span></p></center>--}}
{{--                    <p class="f-c-white m-t-sm f-s-18 text-center">--}}
{{--                        If you are in the quest for Indian Fashion & Lifestyle for gifting purposes or just getting them for yourselves,--}}
{{--                        then ShoppRe is here to ship all your favorite <span class="underline-color">Shopping & Shipping</span> at your doorsteps, Worldwide.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-xs-12 no-padding">--}}
{{--                    <center>--}}
{{--                        <img src="{{asset('img/images/tape_signup.svg')}}" alt="signup shoppre">  <br>--}}
{{--                    </center>--}}
{{--                    <br>--}}
{{--                    <center>--}}
{{--                        <img src="{{asset('img/diwali/diwali-offer.png')}}" alt="Diwali offer india" > <br><br>--}}
{{--                        <a href="{{route('customer.register')}}" class="btn btn-s-r btn-b-g btn-a-l" target="_blank">Sign UP FREE</a>--}}

{{--                    </center>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        <div class="image-banner">--}}
{{--            <img src="{{asset('img/product/flipkart-big-diwali-sale-2019-oct25.png')}}" alt="flipkart big diwali sale" style="height: 430px; width: 100%;">--}}
{{--        </div>--}}
{{--    </section>--}}


    <section >
        <div class="container fst-service" style="margin-top: 0px;">
            <div class="row">
                <center>
                    <a href="https://www.flipkart.com/offers-list/mensfashion?screen=dynamic&pk=themeViews%3DLS-RD20-Jan-MenFashion%3Ada%2CLS-RD20-Jan-MenFashion%3Add~widgetType%3DdealCard~contentType%3Dneo&wid=2.dealCard.OMU&param=778878&otracker=hp_banner_1_6.bannerX3.BANNER_FVA6YAN8K2RM&fm=neo%2Fmerchandising&iid=M_2895c065-5e73-49aa-a718-c38ba037e71b_6.FVA6YAN8K2RM&ppt=hp&ppn=hp&ssid=us1ond00a80000001581918347843" target="_blank">
                        <img class="img-desktop-view"
                             src="https://rukminim1.flixcart.com/flap/480/480/image/af2926cf02a3c3c9.jpg?q=50"
{{--                             width="1100px"--}}
                             style="height: 300px;width: 700px;"></a>
                </center>
                <center>
                    <a href="https://www.flipkart.com/offers-list/mensfashion?screen=dynamic&pk=themeViews%3DLS-RD20-Jan-MenFashion%3Ada%2CLS-RD20-Jan-MenFashion%3Add~widgetType%3DdealCard~contentType%3Dneo&wid=2.dealCard.OMU&param=778878&otracker=hp_banner_1_6.bannerX3.BANNER_FVA6YAN8K2RM&fm=neo%2Fmerchandising&iid=M_2895c065-5e73-49aa-a718-c38ba037e71b_6.FVA6YAN8K2RM&ppt=hp&ppn=hp&ssid=us1ond00a80000001581918347843" target="_blank">
                        <img class="img-mobile-view img-shopperstop-offer"
                             src="https://rukminim1.flixcart.com/flap/480/480/image/af2926cf02a3c3c9.jpg?q=50"
                             width="300px" ></a>
                </center>
{{--                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">👉<span class="f-s-25 f-c-red f-w-9"><a--}}
{{--                                href="https://www.flipkart.com/fashion-trendy-ikfc4-store" target="_blank">STYLE YOUR WINTER(40-80% Off)</a></span> /--}}
{{--                        Below are the Recommended & Recently Shipped Products!</h2>--}}

                {{--                <div class="col-md-4 col-xs-12 text-center margin-tp">--}}
{{--                <span class="f-s-25 f-c-red f-w-9">Winter Wear Upto 70% Off</span>--}}
                {{--                    <div class="">--}}
                {{--                        <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Suresh;%20AJIO%20International%20Shipping" target="_blank">--}}
                {{--                            <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/images/7338208403-personal-shopper-number.png" >--}}
                {{--                            <span class="font-16"></span>--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>


            <div class="row text-center">

{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26">--}}
{{--                            <img class="img-product m-t-img flipkart-product-img"--}}
{{--                                 src="https://rukminim1.flixcart.com/image/416/416/k2jbyq80/mask-respirator/t/g/s/halfmask-1-grapple-deals-original-imafhvfktdxquhru.jpeg?q=70">--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Soan Papdi <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹150 + Shipping Charges--}}
{{--                        </div>--}}
{{--                        <div class="check-price-padd">--}}
{{--                            <a href="https://www.flipkart.com/grapple-deals-bike-riding-cycling-anti-pollution-dust-sun-protection-half-face-cover-mask-men-women-halfmask-1/p/itm7c891792771ee">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                            <img class="img-product m-t-img flipkart-product-img"--}}
{{--                                 src="https://rukminim1.flixcart.com/image/416/416/k2w6xe80/mask-respirator/u/x/e/be-bpm-302-be-safe-forever-original-imafm4gzcsccfjbg.jpeg?q=70">--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Kaju Katli <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹245 + Shipping Charges--}}
{{--                        </div>--}}
{{--                        <div class="check-price-padd">--}}
{{--                            <a href="https://www.flipkart.com/safe-forever-n95-anti-pollution-face-mask-activated-carbon-men-women-pack-3-be-bpm-302-respirator/p/itm246aec9cf61f9">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                            <img class="img-product m-t-img flipkart-product-img"--}}
{{--                                 src="https://rukminim1.flixcart.com/image/416/416/jz30nm80/mask-respirator/q/t/b/skull-face-mask-1pc-anti-pollution-dust-sun-tashkurst-original-imafhmxpcr4g5j3w.jpeg?q=70">--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Besan Laddu <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
{{--                        <div class="check-price-padd">--}}
{{--                            <a href="https://www.flipkart.com/tashkurst-face-bike-riding-dust-protection-anti-pollution-mask-half-cover-men-women-kids-3pc-respirator/p/itmfhnbdjgqkjurx"--}}
{{--                               target="_blank"> <span class="elementor-icon-list-icon">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                            <img class="img-product m-t-img flipkart-product-img"--}}
{{--                                 src="https://rukminim1.flixcart.com/image/416/416/jtd98y80/mask-respirator/y/y/a/face-mask-aadya-shoppings-original-imafeqaxgygqhqqk.jpeg?q=70">--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Burfi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
{{--                        <div class="check-price-padd">--}}
{{--                            <a href="https://www.flipkart.com/aadya-shoppings-face-mask-mask-respirator/p/itmfeqdygvwpbzgj">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <img class="img-product m-t-img" src="https://rukminim1.flixcart.com/flap/420/474/image/7912274dbd765277.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Soan Papdi <br>(200 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹150 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/mobiles/~samsung-galaxy-s9-64gb/pr?sid=tyy,4io" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img" src="https://rukminim1.flixcart.com/flap/420/474/image/83d123b5846557b7.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Kaju Katli <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹245 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/mobiles/~honor-10-lite/pr?sid=tyy,4io" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img" src="https://rukminim1.flixcart.com/flap/420/474/image/a158e94f2cf680f8.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Besan Laddu <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹145 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/mobiles/~samsung-a50-4gb/pr?sid=tyy,4io" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/420/474/image/cac03c8f0f761ab5.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Doodh Burfi <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹145 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/mobiles/~pixel-3a-xi/pr?sid=tyy,4io" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/420/474/image/4f1031cc42efd008.jpg?q=90" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Raisins <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/mens-clothing/~mens-clothing-top-brand/pr?sid=2oq%2Cs9b&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.discount_range_v1%255B%255D%3D50%2525%2Bor%2Bmore" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/420/474/image/bb4e50f2b3942204.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/mens-footwear/pr?sid=osp%2Ccil&p%5B%5D=facets.discount_range_v1%255B%255D%3D40%2525%2Bor%2Bmore&p%5B%5D=facets.fulfilled_by%255B%255D%3DFlipkart%2BAssured&p%5B%5D=facets.brand%255B%255D%3DPuma&p%5B%5D=facets.brand%255B%255D%3DSparx&p%5B%5D=facets.brand%255B%255D%3DADIDAS&p%5B%5D=facets.brand%255B%255D%3DNike&p%5B%5D=facets.brand%255B%255D%3DWoodland&p%5B%5D=facets.brand%255B%255D%3DREEBOK&p%5B%5D=facets.brand%255B%255D%3DProvogue&p%5B%5D=facets.brand%255B%255D%3DRed%2BTape&p%5B%5D=facets.brand%255B%255D%3DAsian&p%5B%5D=facets.brand%255B%255D%3DBata&p%5B%5D=facets.brand%255B%255D%3DLee%2BCooper&p%5B%5D=facets.brand%255B%255D%3DLotto&p%5B%5D=facets.brand%255B%255D%3DCampus&p%5B%5D=facets.brand%255B%255D%3DFila&p%5B%5D=facets.brand%255B%255D%3DRed%2BChief&p%5B%5D=facets.brand%255B%255D%3DSkechers&p%5B%5D=facets.brand%255B%255D%3DCrocs&p%5B%5D=facets.brand%255B%255D%3DKraasa&p%5B%5D=facets.brand%255B%255D%3DRoadster&p%5B%5D=facets.brand%255B%255D%3DBRUTON&p%5B%5D=facets.brand%255B%255D%3DMast%2B%2526%2BHarbour&p%5B%5D=facets.brand%255B%255D%3DChevit&p%5B%5D=facets.brand%255B%255D%3DZixer&p%5B%5D=facets.brand%255B%255D%3DADIDAS%2BORIGINALS&p%5B%5D=facets.brand%255B%255D%3DSCATCHITE&p%5B%5D=facets.brand%255B%255D%3DBond%2BStreet%2BBy%2BRed%2BTape&p%5B%5D=facets.brand%255B%255D%3DAsics&p%5B%5D=facets.brand%255B%255D%3DHRX%2Bby%2BHrithik%2BRoshan&p%5B%5D=facets.brand%255B%255D%3DMetronaut&p%5B%5D=facets.brand%255B%255D%3DAircum&p%5B%5D=facets.brand%255B%255D%3DSEGA&p%5B%5D=facets.brand%255B%255D%3DWELDONE&p%5B%5D=facets.brand%255B%255D%3DU.S.%2BPolo%2BAssn.&p%5B%5D=facets.brand%255B%255D%3DUnited%2BColors%2Bof%2BBenetton&p%5B%5D=facets.brand%255B%255D%3DConverse&p%5B%5D=facets.brand%255B%255D%3DAndrew%2BScott&p%5B%5D=facets.brand%255B%255D%3DREEBOK%2BCLASSICS&p%5B%5D=facets.brand%255B%255D%3DCrew%2BSTREET&p%5B%5D=facets.brand%255B%255D%3DArrow&p%5B%5D=facets.brand%255B%255D%3DLevi%2527s&p%5B%5D=facets.brand%255B%255D%3DPower&p%5B%5D=facets.brand%255B%255D%3DFrench%2BConnection&p%5B%5D=facets.brand%255B%255D%3DYonex&p%5B%5D=facets.brand%255B%255D%3DHush%2BPuppies&p%5B%5D=facets.brand%255B%255D%3DInvictus&p%5B%5D=facets.brand%255B%255D%3DPark%2BAvenue&p%5B%5D=facets.brand%255B%255D%3DD-SNEAKERZ&p%5B%5D=facets.brand%255B%255D%3DFlying%2BMachine&p%5B%5D=facets.brand%255B%255D%3DU.S.Polo%2BAssn.&p%5B%5D=facets.brand%255B%255D%3DRuosh&p%5B%5D=facets.brand%255B%255D%3DAllen%2BSolly&p%5B%5D=facets.brand%255B%255D%3DWROGN&p%5B%5D=facets.brand%255B%255D%3DLouis%2BPhilippe&p%5B%5D=facets.brand%255B%255D%3DLayasa&p%5B%5D=facets.brand%255B%255D%3DM7%2BBy%2BMetronaut&p%5B%5D=facets.brand%255B%255D%3DEd%2BHardy&p%5B%5D=facets.brand%255B%255D%3DTimberland&p%5B%5D=facets.brand%255B%255D%3DWildcraft&p%5B%5D=facets.brand%255B%255D%3DDucati&p%5B%5D=facets.brand%255B%255D%3DATHLETIC%2BWORKS&p%5B%5D=facets.brand%255B%255D%3DKook%2BN%2BKeech&p%5B%5D=facets.brand%255B%255D%3DTimberwood&p%5B%5D=facets.brand%255B%255D%3DU.S.%2BPolo%2BAssn&p%5B%5D=facets.brand%255B%255D%3DTommy%2BHilfiger&p%5B%5D=facets.brand%255B%255D%3DSeven%2BBy%2BMS%2BDhoni&p%5B%5D=facets.brand%255B%255D%3DPeter%2BEngland%2BPE&p%5B%5D=facets.brand%255B%255D%3DCarlton%2BLondon&p%5B%5D=facets.brand%255B%255D%3DBabolat&p%5B%5D=facets.brand%255B%255D%3DMochi&p%5B%5D=facets.brand%255B%255D%3DSlazenger&p%5B%5D=facets.brand%255B%255D%3DStag&p%5B%5D=facets.brand%255B%255D%3DSwiss%2BMilitary&p%5B%5D=facets.brand%255B%255D%3DVan%2BHeusen" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/420/474/image/050f4f5b9b1205b6.jpg?q=90" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Mamra Badam <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹640 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/offers-list/fashionaccessories?screen=dynamic&pk=themeViews%3DMA-BSD-Dec-OMU-1%3AApp%2CMA-BSD-Dec-OMU-1%3ADT~widgetType%3DdealCard~contentType%3Dneo&wid=2.dealCard.OMU" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/420/474/image/b186b74228815889.jpg?q=90" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Cashew <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹280 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/womens-clothing/ethnic-wear/pr?sid=2oq%2Cc1r%2C3pj&p%5B%5D=facets.discount_range_v1%255B%255D%3D50%2525%2Bor%2Bmore&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.rating%255B%255D%3D4%25E2%2598%2585%2B%2526%2Babove" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/420/474/image/8123e370278f3066.jpg?q=90" alt="signup shoppre">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Raisins <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹140 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/womens-clothing/~cs-8ffi6o3ikj/pr?sid=2oq%2Cc1r&p%5B%5D=facets.discount_range_v1%255B%255D%3D50%2525%2Bor%2Bmore&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.rating%255B%255D%3D4%25E2%2598%2585%2B%2526%2Babove" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/420/474/image/8bcc3f188e6cc6e8.jpg?q=90" alt="signup shoppre">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista <br>(200 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹140 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/kids-clothing/pr?sid=2oq%2Cmpf&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.discount_range_v1%255B%255D%3D60%2525%2Bor%2Bmore" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/420/474/image/791cf6d161a73974.jpg?q=90" alt="signup shoppre">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Mamra Badam <br>(200 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹640 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/all/~cs-n39qcozzjb/pr?sid=all&sort=popularity" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/420/474/image/aa53903950ab5efb.jpg?q=90" alt="signup shoppre">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Cashew <br>(200 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹280 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/womens-footwear/~bbd-minimum-60/pr?sid=osp%2Ciko&p%5B%5D=facets.discount_range_v1%255B%255D%3D50%2525%2Bor%2Bmore&p%5B%5D=facets.brand%255B%255D%3DPuma&p%5B%5D=facets.brand%255B%255D%3DADIDAS%2BNEO&p%5B%5D=facets.brand%255B%255D%3DAdidas%2BCore&p%5B%5D=facets.brand%255B%255D%3DADIDAS%2BORIGINALS&p%5B%5D=facets.brand%255B%255D%3DADIDAS&p%5B%5D=facets.brand%255B%255D%3DREEBOK%2BCLASSICS&p%5B%5D=facets.brand%255B%255D%3DREEBOK&p%5B%5D=facets.brand%255B%255D%3DAsics&p%5B%5D=facets.brand%255B%255D%3DCarlton%2BLondon&p%5B%5D=facets.brand%255B%255D%3DCarlton%2BLondon%2BMiss%2BCL&p%5B%5D=facets.brand%255B%255D%3DCL%2Bby%2BCarlton%2BLondon&p%5B%5D=facets.brand%255B%255D%3DMiss%2BCL%2BBy%2BCarlton%2BLondon&p%5B%5D=facets.brand%255B%255D%3DLavie&p%5B%5D=facets.brand%255B%255D%3DMiss%2BCL&p%5B%5D=facets.brand%255B%255D%3DNike&p%5B%5D=facets.brand%255B%255D%3DJealous%25EF%25BF%25BD21&p%5B%5D=facets.brand%255B%255D%3DJealous%2B21&p%5B%5D=facets.brand%255B%255D%3DChemistry&p%5B%5D=facets.brand%255B%255D%3DRemanika&p%5B%5D=facets.brand%255B%255D%3DBata&p%5B%5D=facets.brand%255B%255D%3DPower&p%5B%5D=facets.brand%255B%255D%3DNorth%2BStar&p%5B%5D=facets.brand%255B%255D%3DNATURALIZER&p%5B%5D=facets.brand%255B%255D%3DFootIn&p%5B%5D=facets.brand%255B%255D%3DCaraMia&p%5B%5D=facets.brand%255B%255D%3DCara%2BMia&p%5B%5D=facets.brand%255B%255D%3DCatwalk&p%5B%5D=facets.brand%255B%255D%3DCrocs&p%5B%5D=facets.brand%255B%255D%3DInc.5&p%5B%5D=facets.brand%255B%255D%3DMetro&p%5B%5D=facets.brand%255B%255D%3DMochi&p%5B%5D=facets.brand%255B%255D%3DPeople&p%5B%5D=facets.brand%255B%255D%3DForever%2BGlam%2Bby%2BPantaloons&p%5B%5D=facets.brand%255B%255D%3DUVANERA&p%5B%5D=facets.brand%255B%255D%3DUvanera&p%5B%5D=facets.brand%255B%255D%3DAllen%2BSolly&p%5B%5D=facets.brand%255B%255D%3DALDO&p%5B%5D=facets.brand%255B%255D%3DCall%2BIt%2BSpring&p%5B%5D=facets.brand%255B%255D%3DNine%2BWest&p%5B%5D=facets.brand%255B%255D%3DCerutti&p%5B%5D=facets.brand%255B%255D%3DDune%2BLondon&p%5B%5D=facets.brand%255B%255D%3DWildcraft&p%5B%5D=facets.brand%255B%255D%3DMode%2BBy%2BRed%2BTape&p%5B%5D=facets.brand%255B%255D%3DRed%2BTape&p%5B%5D=facets.brand%255B%255D%3DClarks&p%5B%5D=facets.brand%255B%255D%3DLotto&p%5B%5D=facets.brand%255B%255D%3DUnited%2BColors%2Bof%2BBenetton&p%5B%5D=facets.brand%255B%255D%3DDiana%2BKorr&p%5B%5D=facets.brand%255B%255D%3DHolii&p%5B%5D=facets.brand%255B%255D%3DSeven%2BBy%2BMS%2BDhoni&p%5B%5D=facets.brand%255B%255D%3DLee%2BCooper&p%5B%5D=facets.brand%255B%255D%3DSHOE%2BCOUTURE&p%5B%5D=facets.brand%255B%255D%3DMFT%2BCouture&p%5B%5D=facets.brand%255B%255D%3DKnotty%2BDerby&p%5B%5D=facets.brand%255B%255D%3DTOMS&p%5B%5D=facets.brand%255B%255D%3DAction&p%5B%5D=facets.brand%255B%255D%3DPavers%2BEngland&p%5B%5D=facets.brand%255B%255D%3DFila&p%5B%5D=facets.brand%255B%255D%3DA-HA%2BBy%2BLiberty&p%5B%5D=facets.brand%255B%255D%3DLiberty&p%5B%5D=facets.brand%255B%255D%3DTiptopp%2Bby%2BLiberty&p%5B%5D=facets.brand%255B%255D%3DForce%2B10%2BBy%2BLiberty&p%5B%5D=facets.brand%255B%255D%3DSenorita%2Bby%2BLiberty&p%5B%5D=facets.brand%255B%255D%3DGliders%2Bby%2BLiberty&p%5B%5D=facets.brand%255B%255D%3DA-HA&p%5B%5D=facets.brand%255B%255D%3DA-Ha&p%5B%5D=facets.brand%255B%255D%3DForce%2B10&p%5B%5D=facets.brand%255B%255D%3DGliders&p%5B%5D=facets.brand%255B%255D%3DTIPTOPP&p%5B%5D=facets.brand%255B%255D%3DTiptopp&p%5B%5D=facets.brand%255B%255D%3DSenorita&p%5B%5D=facets.brand%255B%255D%3DDressberry&p%5B%5D=facets.brand%255B%255D%3DHRX%2Bby%2BHrithik%2BRoshan&p%5B%5D=facets.brand%255B%255D%3DAnouk&p%5B%5D=facets.brand%255B%255D%3DMast%2B%2526%2BHarbour&p%5B%5D=facets.brand%255B%255D%3DRoadster&p%5B%5D=facets.brand%255B%255D%3Dether&p%5B%5D=facets.brand%255B%255D%3DImara&p%5B%5D=facets.brand%255B%255D%3DBruno%2BManetti&p%5B%5D=facets.brand%255B%255D%3DKlaur%2BMelbourne&p%5B%5D=facets.brand%255B%255D%3DCORSICA&p%5B%5D=facets.brand%255B%255D%3DSparx&p%5B%5D=facets.serviceability%5B%5D%3Dtrue" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/045da0d11c6eafd9.jpg?q=90" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Sohan Papdi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹85 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNm2" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/9c90327cf28dc6d3.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Peda <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNm4" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/a27e4c416fca1b6c.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Dalmoth <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹46 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNm3" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/273c264cb042247c.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Chow Chow <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹42 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNna" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/250/266/image/08d567cfadbb3a74.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹55 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNni" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/250/266/image/cef0d665b504714f.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Jeera Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNno" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/250/266/image/039e954523eb5aa9.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Stick <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹125 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNnu" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/250/266/image/1605e9c959f669c8.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Masala Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNns" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <img class="img-product m-t-img" src="https://rukminim1.flixcart.com/image/612/612/jyeq64w0/book/5/4/0/you-are-the-best-wife-original-imafgkyugczdayt8.jpeg?q=70">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Soan Papdi <br>(200 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹150 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jQ5k" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img" src="https://rukminim1.flixcart.com/image/612/612/jed4sy80/book/3/0/5/life-is-what-you-make-it-original-imaf32hgmtznjbdc.jpeg?q=70">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Kaju Katli <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹245 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jQ5m" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img" src="https://rukminim1.flixcart.com/image/612/612/k1mgu4w0/book/2/9/5/life-s-amazing-secrets-original-imaf76z4ah5wfree.jpeg?q=70">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Besan Laddu <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹145 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jQ5n" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/image/612/612/k0plpjk0/book/4/7/8/turning-points-a-journey-through-challanges-original-imaezet6hsayhzqh.jpeg?q=70">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Doodh Burfi <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹145 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jQ5p" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>



            </div>







{{--            <div class="mar-t-25">--}}
{{--                <div class="txt-center">--}}
{{--                        <button type="button" class="btn btn-warning bord-rad-5 margin-r-10">--}}
{{--                            <a href="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">--}}
{{--                            <p class="btn-md">Estimate Shipping Rate</p>--}}
{{--                            </a>--}}
{{--                        </button>--}}
{{--                        <button type="button" class="btn btn-success bord-rad-5 margin-r-10">--}}
{{--                            <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Pratheeksha;%20Can%20i%20Send%20Diwali,%20Gifts%20and%20Sweets%20from%20India?" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">--}}
{{--                            <p class="btn-md">Message Us On WhatsApp</p>--}}
{{--                            </a>--}}
{{--                        </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class=" col-md-12 no-pad"><br>--}}
            <br>
            <br>
{{--                <center>--}}
{{--                    <h2 class="p-color-cement-dark font-weight-900 ">Diwali Jamboree all over the world | Send Sweets abroad from India with ShoppRe--}}
{{--                    </h2>--}}
{{--                </center>--}}
{{--                <br>--}}
{{--                    <p class="header4 p-color-cement">--}}
{{--                        Waking up from the hustling noise, crackers, and children playing is the testament of preparations going on in every Indian house for Diwali celebrations.--}}
{{--                        And every Indian feels the same zeal and happiness for this grand festival of <i>hope, light, and prosperity</i> that marks the triumph of virtue over vice.--}}
{{--                    </p> <br>--}}
{{--                    <p class="header4 p-color-cement">--}}
{{--                        It doesn't matter where in the world we are, Indians always find a way to celebrate Diwali and many major countries like the USA, Australia, Canada, etc also--}}
{{--                        celebrate Diwali lavishly. And amidst this merriment, there is this little package of Indian sweets swathed in love that is--}}
{{--                        sent from home that brings a smile on the face of an Indian far from home. </p> <br>--}}
{{--                <p class="header4 p-color-cement">--}}
{{--                        So buy <strong>Indian sweet online from India</strong> and send it to your family and friends within 3-8 days, anywhere in the world with ShoppRe, and enjoy up to 80% low shipping rates.--}}
{{--                        You can easily order sweets for yourself or even buy sweets from India and get them delivered at your doorstep worldwide.--}}

{{--                    </p>--}}
{{--            <br>--}}
{{--                <div id="How_to_save">--}}
{{--                    <h2  class="f-s-20 f-c-blue f-w-9" class="p-color-cement-dark font-weight-900 ">Online indian sweets delivery in USA</h2>--}}
{{--                    <p class="header4 p-color-cement">--}}
{{--                        The splendor of the Diwali celebration is such that even the white house has been celebrating it for so many years now. The revelry of the Indian diaspora--}}
{{--                        is at its zenith and it begins long before Diwali with fairs, parties, lights, visits to temples to pay their obeisance to the gods, and various vivacious rituals.--}}
{{--                        We do online Indian sweets delivery in USA to complete your celebrations.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            <br>--}}
{{--            <div id="How_to_save">--}}
{{--                <h2  class="f-s-20 f-c-blue f-w-9" class="p-color-cement-dark font-weight-900 ">Export sweets from India to Australia</h2>--}}
{{--                <p class="header4 p-color-cement">--}}
{{--                    Many cultural and traditional celebrations mark the advent of the Diwali festival in all cities of Australia like Melbourne and Sydney where its thriving--}}
{{--                    Indian population fills the air with jovial activities. There are long rows of oil lamps outside houses to welcome the Hindu gods and celebrate this auspicious--}}
{{--                    festival of light and delight. You can order Indian sweets online Australia with us.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div id="How_to_save">--}}
{{--                <h2  class="f-s-20 f-c-blue f-w-9" class="p-color-cement-dark font-weight-900 ">Indian sweets online international delivery Canada</h2>--}}
{{--                <p class="header4 p-color-cement">--}}
{{--                    Many Canadians celebrate this festival of lights with full vigor and zeal, and this joyous festival attracts plenty of media and public attention.--}}
{{--                    You can order Indian sweets online from Canada with us to serve during corporate Diwali dinners, carnivals or gatherings with elaborate firework displays--}}
{{--                    hosted by various community groups, businesses, schools, and associations to celebrate Diwali.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div id="How_to_save">--}}
{{--                <h2  class="f-s-20 f-c-blue f-w-9" class="p-color-cement-dark font-weight-900 ">Send Sweets to Malaysia Online</h2>--}}
{{--                <p class="header4 p-color-cement">--}}
{{--                    Diwali in Malaysia is celebrated by people of all races and cultures inhabiting there. It is also a public holiday so the Indian diaspora can--}}
{{--                    celebrate this grand festival of light and prosperity with all the pomp and gaiety that they used to do while their time in India.--}}
{{--                    Get a chance to take a trip back memory lane and order Indian sweets online from Malaysia with ShoppRe.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div id="How_to_save">--}}
{{--                <h2  class="f-s-20 f-c-blue f-w-9" class="p-color-cement-dark font-weight-900 ">Order Indian Mithai Online in Singapore from India </h2>--}}
{{--                <p class="header4 p-color-cement">--}}
{{--                    Little India in Singapore is the kernel of Diwali celebrations. People get into the spirit of the festival of lights and discover vibrant Indian culture through it.--}}
{{--                    Serangoon Road is lit with lights, and you can see fireworks, candles being lit, beautiful rangoli decorations and liveliness of people in the night market.--}}
{{--                    Buy Indian sweets online from Singapore and add more joy to celebrations.--}}
{{--                </p>--}}
            </div>
            <br>
    </section>

    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="f-s-24 f-c-blue f-w-8 txt-center">ShoppRe Receives & Ships over <span class="f-c-red">₹25,00,000/-</span> worth FLIPKART Purchases monthly!</h1>
            </center>
            <br>
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox outer border-1px">
                            <h1 class="f-s-26 f-c-red f-w-8">40+</h1>
                            <h5 class="header6 p-color-cement font-weight-900">Fan of Flipkart.com Online Shop?
                                <br>
                                Shop from 40+ categories </h5>
                            <div class="ecomSmallBox">
                                <a href="/flipkart-shopping-with-shoppre-from-india" target="_blank">
                                    <p class="header4 p-color-blue font-weight-900 txt-u-l">#flipkartStore</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>

                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox outer border-1px">
                            <h1 class="f-s-26 f-c-red f-w-8">220+</h1>
                            <h5 class="header6 p-color-cement font-weight-900">Offers delivery to over 220 countries.
                                <br>
                                With world-class customer service</h5>
                            <div class="ecomSmallBox">
                                <a href="/countries" target="_blank">
                                    <p class="header4 p-color-blue font-weight-900 txt-u-l">#worldwideDelivery</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox outer border-1px">
                            <h1 class="f-s-26 f-c-red f-w-8">3-6 Days</h1>
                            <h5 class="header6 p-color-cement font-weight-900">3-6 days door-to-door safe package
                                <br>
                                delivery with online tracking</h5>
                            <div class="ecomSmallBox" >
                                <a href="/shop-from-india-ship-worldwide" target="_blank">
                                    <p class="header4 p-color-blue font-weight-900 txt-u-l">#transitTimes</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox outer border-1px">
                            <h1 class="f-s-26 f-c-red f-w-8">60-80%</h1>
                            <h5 class="header6 p-color-cement font-weight-900">Save by Storage, Consolidation
                                <br>
                                & Repackaging. Discounted Rates.</h5>
                            <div class="ecomSmallBox">
                                <a href="/cheap-rates-international-shipping-cost-calculator" target="_blank">
                                    <p class="header4 p-color-blue font-weight-900 txt-u-l">#cheapRates</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <br>

    <section class="chris-benefits">
        <div class="container " >
            <center>
                <h1 class="f-s-24 f-c-dark f-w-8 txt-center">Online shopping websites with ShoppRe hassle-free International Delivery</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel boxed outer border-1px">
                        <ul>
                            <li><span><a href="/myntra-online-shopping">Myntra Online Fashion Store</a></span></li>
                            <li><span><a href="/flipkart-shopping-with-shoppre-from-india">Flipkart.com Online Shop</a></span></li>
                            <li><span><a href="/amazon-online-shopping">Amazon.in Shopping India</a></span></li>
                            <li><span><a href="/jaypore-international-shipping-from-india">Jaypore Handpicked Products</a></span></li>
                            <li><span><a href="/ajio-online-shopping">AJIO Fashion & Lifestyle Brand</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel outer border-1px">
                        <ul>
                            <li><span><a href="/limeroad-shopping-international-shipping">Limeroad Online Shopping Site</a></span></li>
                            <li><span><a href="/chumbak-online-shopping" target="_blank">Chumbak Online Shopping</a></span></li>
                            <li><span><a href="/firstcry-online-shopping" target="_blank">FirstCry Baby & Kids Shopping</a></span></li>
                            <li><span><a href="/fabindia-online-shopping" target="_blank">Fabindia Traditional Wear</a></span></li>
                            <li><span><a href="/lifestylestores-online-shopping" target="_blank">Lifestylestores Shopping India</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel outer border-1px">
                        <ul>
                            <li><span><a href="/pepperfry-online-shopping" target="_blank">Pepperfry Furniture Shopping</a></span></li>
                            <li><span><a href="/shoppersstop-online-shopping" target="_blank">Shoppers Stop Latest Trends‎</a></span></li>
                            <li><span><a href="/nykaa-online-shopping" target="_blank">Nykaa Online Beauty Store</a></span></li>
                            <li><span><a href="/tatacliq-online-shopping" target="_blank">Tata CLiQ Online Shopping</a></span></li>
                            <li><span><a href="https://clnk.in/j1Oo" target="_blank">Biba Ethnic Wear for Ladies</a></span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
        <div class="text-center">
            <br>
            <a href="/indian-online-stores" class="btn btn-s-b btn-b-r" target="_blank">Indian online shopping sites</a>
        </div>
        <br/>
        </div>
    </section>



    {{--    <section class="chris-benefits">--}}
{{--        <div class="container" >--}}
{{--            <center>--}}
{{--                <h2 class="header1 p-color-cement-dark font-30">Featured Services & Benefits</h2>--}}
{{--            </center>--}}
{{--            <div class="row text-center">--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel ">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shopper</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>20-Day Free Storage</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Consolidation</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Repackaging</span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel ">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Scanned Copies Document-couriers</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Country-discount</span></li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel ">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Product Recommendations</span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br/><br/>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <br>
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
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

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
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

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
    <script type="text/javascript">
        var cId =  "52423";

        (function(d, t) {
            var s = document.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://cdn0.cuelinks.com/js/" : "http://cdn0.cuelinks.com/js/")  + "cuelinksv2.js";
            document.getElementsByTagName("body")[0].appendChild(s);
        }());
    </script>
@endsection
