@extends('layout')

@section('title', '外科口罩能帮助您预防冠状病毒吗 | International Shipping ')
@section('description', '')
@section('keywords', 'china, hong kong ')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/外科口罩能帮助您预防冠状病毒吗"/>
    <meta name="robots" content="nofollow" />

    <link rel="alternate" href="https://www.shoppre.com/外科口罩能帮助您预防冠状病毒吗" hreflang="zh-CN" />

{{--    <meta property="og:title" content="Online shopping for Face Masks | ShoppRe.com"/>--}}
{{--    <meta property="og:type" content="website"/>--}}
{{--    <meta property="og:url" content="https://www.shoppre.com/face-mask-international-shipping"/>--}}
{{--    <meta property="og:image" content="https://mcusercontent.com/8f7212d51aa9533c4788ccf05/images/a4ce8394-213d-4003-89c6-165a38f814b6.png"/>--}}
{{--    <meta property="og:description" content="Shop Face Mask from any Indian Website & Ship Worldwide. Best Rates, Fastest Processing, Free Sign-up!"/>--}}

    <style>

        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
        }

        .img-shopperstop-offer {
            display: none;
        }
        .underline-color {
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

        .valentine-slider{
            position: relative; top: 0px;
            left: 0px;
            width: 809px;
            height: 150px;
            overflow: hidden;
        }


        @media only screen and (max-width: 600px) {
            .valentine-slider{
                position: relative !important;
                top: 0px !important;
                left: 0px !important;
                overflow: hidden !important;
            }
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

        .first-time-shipment {
            background-color: #11273b;
            height: 813px;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 60px
        }

        .first-time-shipment .div-snow {
            padding-top: 146px
        }

        .first-time-shipment .div-snow img {
            position: absolute
        }

        .first-time-shipment .div-snow img {
            margin-left: -3px;
            position: absolute
        }

        .first-time-shipment .div-newyear {
            padding-top: 206px
        }

        .first-time-shipment .div-newyear img {
            margin-left: -12px;
            position: absolute
        }

        .textbox-email {
            width: 358px;
            height: 50px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            border-radius: 25px !important;
            background-color: #fff;
            border: 0;
            padding-left: 9%
        }

        .btn-grab-offer {
            width: 180px;
            height: 40px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
            border-radius: 60px;
            background-color: #e85151;
            color: #fff;
            transition: .6s
        }

        .btn-grab-offer:hover {
            color: #fff;
            background-color: #c83b3b;
            -webkit-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .6);
            -moz-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .6);
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .6)
        }

        .fst-service {
            box-shadow: 0 0 10px rgba(17, 39, 59, .1);
            border-radius: 15px;
            background-color: #fafafb;
            margin-top: -360px;
            padding: 20px
        }

        .fst-service .c-image {
            padding: 20px
        }

        .fst-service .shopandship {
            box-shadow: 0 0 6px rgba(80, 125, 188, .08);
            border-radius: 8px;
            border: 1px solid #5a5b5d26
        }

        .fst-service .ps {
            padding: 20px;
            box-shadow: 0 0 6px rgba(80, 125, 188, .08);
            border-radius: 8px;
            border: 1px solid #5a5b5d26
        }

        .fst-service .ic {
            padding: 20px;
            box-shadow: 0 0 6px rgba(80, 125, 188, .08);
            border-radius: 8px;
            border: 1px solid #5a5b5d26
        }

        .fst-service .shopandship:hover {
            border: 1px solid #507dbc
        }

        .fst-service .ps:hover {
            border: 1px solid #507dbc
        }

        .fst-service .ic:hover {
            border: 1px solid #507dbc
        }

        .fst-service .shopandship, .ic, .ps, h2 {
            font-size: 22px;
            font-weight: 500;
            color: rgba(255, 255, 255, .6)
        }

        .fst-service .shopandship, .ic, .ps, p {
            color: #fff;
            font-size: 16px;
            font-weight: 600
        }

        .fst-service .btn-chris-place-order {
            padding: 13px 50px;
            color: #fff;
            width: 300px;
            height: 50px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
            border-radius: 30px;
            background-color: #e85151
        }

        .chris-benefits {
            padding-top: 30px
        }

        .chris-benefits ul {
            text-decoration: none;
            list-style: none
        }

        .chris-benefits ul li {
            color: #224464;
            font-family: Montserrat, sans-serif;
            font-size: 15px;
            font-weight: 400;
            text-align: left;
            padding-top: 15px
        }

        .chris-benefits ul li img {
            margin-top: 9px
        }

        .text-center div {
            padding-top: 20px
        }

        .img-new-year {
            display: none
        }

        .chris-benefits .panel {
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05) !important
        }

        .chris-benefits .panel ul li span {
            margin-left: 15px
        }

        .leter-space {
            letter-spacing: 1px
        }

        #contact-support {
            padding-bottom: 30px
        }

        .select-control {
            float: left;
            width: 90px !important;
            height: 40px !important;
            font-size: 13px;
            font-weight: 400;
            font-style: italic;
            border-left: 0;
            border-radius: 3px;
            background-color: #fafafb;
            border: none
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff !important;
            border: none !important;
            border-radius: 4px !important;
            height: 40px !important;
            padding-top: 5px !important
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            margin-top: 4px !important
        }

        @media screen and (device-aspect-ratio: 40/71) {
            .img-mobile-view {
                width: 300px;
            }
        }

        @media only screen and (max-width: 600px) {
            .first-time-shipment {
                height: 651px
            }

            .img-mobile-view {
                display: block !important;
            }

            .img-desktop-view {
                display: none !important;
            }

            .textbox-email {
                width: 330px
            }

            .div-snow {
                display: none
            }

            .div-newyear {
                display: none
            }

            .fst-service {
                margin-top: -260px
            }

            .c-image {
                display: none
            }

            .txt-align {
                text-align: center
            }

            .img-new-year {
                display: block;
                width: 240px
            }

            .chris-benefits ul li {
                font-size: 16px
            }
        }
    </style>

@endsection

@section('content')


    <div class="row" style="margin-top: 3%">
        <img class="img-desktop-view"
             src="https://mcusercontent.com/8f7212d51aa9533c4788ccf05/images/c5b63a21-e9ef-47a4-b301-db05a72bb8f8.png"
             width="100%">
        <center>
            <img class="img-mobile-view img-shopperstop-offer"
                 src="https://mcusercontent.com/8f7212d51aa9533c4788ccf05/images/af5053de-3c0c-48c0-b55f-3254604fa95c.png"
                 width="90%" style="margin-top:6%;">
        </center>
        {{--                <div class="">--}}
        {{--                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">--}}
        {{--                        Below are the Recommended & Recently Shipped Gifts! </h2>--}}
        {{--                </div>--}}
    </div>
    <section>

        <div class="container fst-service" style="margin-top: 0px;">

            <div class="row text-center">
                <h2 class="f-s-20 p-color-cement-dark font-weight-900"><u>

                        特殊运动<span class="f-s-20 f-c-blue f-w-9"> （病毒和空气污染）</span>
                    </u></h2>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Disposable-Face-Mask-Elastic-Blue/dp/B07MKD5PYX"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/516r59TKI8L._SL1053_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Disposable 2 Ply Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 800
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-5 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/dp/B084FXVL31/ref=sspa_dk_hqp_detail_aax_0"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71vunNEphJL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Glider Disposable Style 2 Ply
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 799
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            3-6 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/mop-n-me-disposable-3-ply-air-pollution-blue-face-mask-pack-50-mnm-mask-green-mask/p/itm196322817c5d5"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/k63xle80/mask-respirator/9/k/v/mnm-mask-green-mop-n-me-original-imafz5m4bf4wuqdh.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Disposable 3 Ply - Pack of 50
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 350
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-5 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://pinkblue.in/romsons-dispo-mask.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://d11eqtcd4tfmzx.cloudfront.net/pub/media/catalog/product/cache/1/image/1000x1000/e9c3970ab036de70892d86c6d221abfe/r/o/romsons_dispo_mask.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Romsons Dispo Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 138
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            2-4 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://otbliss.com/face-mask-premium-fluid-resistant.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://otbliss.com/pub/media/catalog/product/cache/ec19c9f8db37af49cbf92829c2885eff/m/a/mask_box_copy.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    3 Ply Face Mask - Fluid Resistant
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 1200
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            7-9 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.medilord.com/Face-Mask-"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://www.medilord.com/image/cache/catalog/Medilord/Blossom/Blossom%20Face%20Mask%203%20Ply%20(2)-750x750.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Blossom Face Mask 3 Ply
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 210
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            5-8 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.industrybuying.com/surgical-mask-safeshield-MED.SUR.10549580/"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="//static6.industrybuying.com/products/medical-supplies-equipment/medical-consumables/surgical-mask/MED.SUR.10549580.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    2-Ply Ear Loop Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 590
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-7 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.industrybuying.com/surgical-mask-max-plus-MED.SUR.14640203/"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="//static6.industrybuying.com/products/medical-supplies-equipment/medical-consumables/surgical-mask/MED.SUR.14640203.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    2 Ply Surgical Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 934
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-7 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.snapdeal.com/product/vkare-disposable-face-mask-50/1672755717"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://n3.sdlcdn.com/imgs/a/i/0/Vkare-Disposable-Face-Mask-50-SDL935170834-1-c3db7.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    2 Ply Face Mask - 50pcs
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 950
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            9-11 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.snapdeal.com/product/maxpluss-3ply-surgical-face-mask/619311638656#bcrumbSearch:3ply|bcrumbLabelId:46101962"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://n2.sdlcdn.com/imgs/f/i/z/maxpluss-3Ply-Surgical-Face-Mask-SDL980509008-2-b3b4c.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Maxpluss 3Ply - 50 pcs
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 1950
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            8-11 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.shopclues.com/disposable-elastic-3-ply-surgical-mask-pack-of-50-mask-148961758.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://cdn.shopclues.com/images1/thumbnails/104780/280/1/148961758-104780639-1580887579.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    3-Ply Ear Loop Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 379
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-6 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.shopclues.com/pack-of-1000-surgical-face-mask-118808414.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://cdn.shopclues.com/images/thumbnails/70449/280/1/11880841448100threequarter21494664840.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Pack of 1000 Surgical Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 2977
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            6-8 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>

    <section>

        <div class="container christmas">
            <label class="f-s-24 f-c-d-greay">外科口罩能帮助您预防冠状病毒吗?</label>
            <p class="f-s-16 f-c-gray f-w-4 "><b>“冠状病毒：死亡人数超过1500+！”冠状病毒的新闻头条和恐慌气氛仍然无处不在。自从发生致命的暴发以来，医生一直在建议各种预防方法以防止传播。由于冠状病毒是一种空气传播的疾病，因此最重要的习惯是保持呼吸卫生。因此，配备口罩将使与病毒直接接触的风险降到最低。这不仅适用于未感染的人，也适用于患有该疾病的人。由于口罩会捕获被感染者的呼气飞沫（打喷嚏和咳嗽时），因此可以戴上口罩来确保家庭/公共健康。.
            </p>

            <h1 class="f-s-20 f-c-d-greay f-w-7">哪里可以买到外科口罩?</h1>
            <p class="f-s-16 f-c-gray f-w-4">由于对口罩的需求增加，中国面临供应短缺。因此，最近印度政府取消了将某些口罩和手套运往国外的禁令。因此，如果附近的便利店或药店没有手术口罩，您可以随时在线使用国际运输服务。</a>.
            </p>

            <h3 class="f-s-20 f-c-d-greay f-w-7">有哪些可用选项?</h3>
            <p class="f-s-16 f-c-gray f-w-4">您可能遇到过带有2层或3层手术口罩的产品标签。但是2层和3层面罩有什么区别？唯一的区别在于层数。在2层口罩中，有两层旨在形成潜在的屏障来过滤细菌。在3层口罩中，您可以找到一个额外的外层，使您远离液体和血液的接触.
            </p>

            <h3 class="f-s-20 f-c-d-greay f-w-7">印度的ShoppRe和外科口罩购物:</h3>
            <p class="f-s-16 f-c-gray f-w-4">由于这是紧急医疗时期，ShoppRe提供24 * 7全天候支持，可让您从任何地方在线购买外科口罩。您要做的就是免费注册。用印度的外科口罩，手套和其他必要的工具冲浪。做出选择并下订单。完成此操作后，ShoppRe会立即发货。通常，它需要3到6天才能交付。
            </p>

            <h3 class="f-s-20 f-c-d-greay f-w-7">只需在运输确认时付款:</h3>
            <p class="f-s-16 f-c-gray f-w-4">当然，在进行货币交易时，购买外国产品会变得很忙。同样，在这种情况下，您势必会填满实际上感觉像是作业的表格。但是，在ShoppRe，您将不会遇到这样的困难。那是因为您可以见到个人购物先生。这家伙机器人将支付您的购买。一旦您的订单到达ShoppRe，您的状态就会更新。您可以检查可交付成果的图片并确认发货。付款后，ShoppRe会将产品运送到您家门口
            </p>

            <h3 class="f-s-20 f-c-d-greay f-w-7">《国际外科口罩运输》：听起来太远了还是您对预算感到负担?</h3>
            <p class="f-s-16 f-c-gray f-w-4">对口袋友好的国际运输服务似乎离现实还很遥远。而且由于ShoppRe在线提供了令人印象深刻的国际运输服务，因此您可能会对价格有所怀疑。但这不是您的假设。这是事实。 ShoppRe可以将产品从印度大量运送到其他地方。从而将运输成本降低多达80％。现在在您的位置购物，无需担心运费太高。
            </p>
            <br>
            <div>
                <p class="f-s-22 f-c-blue f-w-7">其他预防性提示:</p>
                <ul>
                    <li>
                        <h4 class="header4 p-color-cement f-w-4"><strong>您可以重复使用外科口罩吗?</strong> - 切勿误用重复使用的口罩。它们是一次性使用的口罩。那么，您必须多久更改一次？您可以将其打开8小时
                        </h4>
                    </li>
                    <li>
                        <h4 class="header4 p-color-cement f-w-4">花时间在洗手时。优选地，至少20秒。每次咳嗽或打喷嚏时，请务必彻底洗手。</h4>
                    </li>
                </ul>
            </div>
            <br>
            <p class="f-s-22 f-c-green f-w-7">结论:</p>
            <p class="f-s-16 f-c-gray f-w-4">当走出去变得危险时，您可以依靠此国际运输服务。您绝对不会遇到产品不可用或距离过长的问题。外科口罩以某种方式在每所房子的购物清单中名列前茅。运输服务提供的服务使您在ShoppRe期间可以体会到这种担忧。在沙发上下订单。让ShoppRe以最便宜的运费提供最好的国际运输服务，以帮助抗击冠状病毒。
            </p>

        </div>
        <br>

    </section>


    <section class="chris-benefits">
        <div class="container " >
                <h1 class="p-color-cement-dark font-weight-900" style="font-size: 28px;">Leave Your Comments</h1>
            <div class="fb-comments" data-href="https://www.shoppre.com/face-mask-international-shipping" data-width="1000" data-numposts="5">

            </div>

{{--            <div class="row text-center">--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel boxed outer border-1px">--}}
{{--                        <ul>--}}
{{--                            <li><span><a href="/myntra-online-shopping-shipping-from-india">Myntra Online Fashion Store</a></span></li>--}}
{{--                            <li><span><a href="/flipkart-online-shopping">Flipkart.com Online Shop</a></span></li>--}}
{{--                            <li><span><a href="/amazon-online-shopping">Amazon.in Shopping India</a></span></li>--}}
{{--                            <li><span><a href="/jaypore-international-shipping-from-india">Jaypore Handpicked Products</a></span></li>--}}
{{--                            <li><span><a href="/ajio-online-shopping">AJIO Fashion & Lifestyle Brand</a></span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel outer border-1px">--}}
{{--                        <ul>--}}
{{--                            <li><span><a href="/limeroad-shopping-international-shipping">Limeroad Online Shopping Site</a></span></li>--}}
{{--                            <li><span><a href="/chumbak-online-shopping" target="_blank">Chumbak Online Shopping</a></span></li>--}}
{{--                            <li><span><a href="/firstcry-online-shopping" target="_blank">FirstCry Baby & Kids Shopping</a></span></li>--}}
{{--                            <li><span><a href="/fabindia-online-shopping" target="_blank">Fabindia Traditional Wear</a></span></li>--}}
{{--                            <li><span><a href="/lifestylestores-online-shopping" target="_blank">Lifestylestores Shopping India</a></span></li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel outer border-1px">--}}
{{--                        <ul>--}}
{{--                            <li><span><a href="/pepperfry-online-shopping" target="_blank">Pepperfry Furniture Shopping</a></span></li>--}}
{{--                            <li><span><a href="/shoppersstop-online-shopping" target="_blank">Shoppers Stop Latest Trends‎</a></span></li>--}}
{{--                            <li><span><a href="/nykaa-online-shopping" target="_blank">Nykaa Online Beauty Store</a></span></li>--}}
{{--                            <li><span><a href="/tatacliq-online-shopping" target="_blank">Tata CLiQ Online Shopping</a></span></li>--}}
{{--                            <li><span><a href="https://clnk.in/j1Oo" target="_blank">Biba Ethnic Wear for Ladies</a></span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br/><br/>--}}
{{--            </div>--}}
        </div>
{{--        <div class="text-center">--}}
{{--            <br>--}}
{{--            <a href="/indian-online-stores" class="btn btn-s-b btn-b-r" target="_blank">Indian online shopping sites</a>--}}
{{--        </div>--}}
        <br/>
        </div>
    </section>
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
                        <i class="fa fa-phone" aria-hidden="true"></i> Call us</p>
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
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
                        <i class="fa fa-phone" aria-hidden="true"></i> Call us</p>
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i> Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
        <br>
    </section>

@endsection

@section('js_script')
    <script type='text/javascript'>
        var cId = '52423';

        (function (d, t) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/') + 'cuelinksv2.js';
            document.getElementsByTagName('body')[0].appendChild(s);
        }());
    </script>


@endsection
