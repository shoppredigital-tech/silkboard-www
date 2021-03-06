@extends('layout')

@section('title', 'Shop Jaypore | Ship Internationally from India to USA, UAE, AUS ')
@section('description', 'Shop any products in Jaypore and Ship them to your Country with ShoppRe Package Forwarding. Get additional 50% Discount. Save up to 80% On Shipping Rates.')
@section('keywords', 'international Shipping, jaypore sarees, dupatta, earrings, books, handcrafted jewelry')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/jaypore-international-shipping-from-india" />

    <meta property="og:title" content="Shop Japore products | Ship Internationally with ShoppRe" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/jaypore-international-shipping-from-india" />
    <meta property="og:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg" />
    <meta property="og:image:width" content="2506">
    <meta property="og:image:height" content="1312">
    <meta property="og:image:alt" content="shoppre international shipping india" />
    <meta property="og:description" content="Ship your purchases from Jaypore to Worldwide with ShoppRe, at an affordable shipping cost." />
    <meta property="og:site_name" content="shoppre" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="go_shoppre" />
    <meta name="twitter:title" content="Jaypore International Shipping from India " />
    <meta name="twitter:description" content="Shop in Jaypore.com and ship your packages from India to USA, +150 countries at a cheap courier cost." />
    <meta name="twitter:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg" />
    <meta name="twitter:image:alt" content="shoppre international shipping" />
    <style>
        .bg-jaypore-landing-page{background-image:url(../../img/images/overlay1.png);height:560px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;background-color:#fafafb;padding-top:60px}.bg-jaypore-landing-page .container>div{margin-bottom:3em}.d-header-text{font-size:40px;font-weight:900}.d-header-text1{font-family:Montserrat -Italic;font-style:italic;line-height:26px;margin-top:25px}.christmas-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-121px;padding:20px}.box-steps p{line-height:1}.box-steps p span{font-size:22px;font-weight:900}.flipkart-h1{font-size:25px}.christmas-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.christmas-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}#packing:hover{display:none}@media only screen and (max-width:600px){.bg-jaypore-landing-page{height:628px}}
    </style>

@endsection
@section('content')

    <section class="bg-jaypore-landing-page">
        <div class="container">
            <br>
            <br>
            <h1 class="f-s-36 f-c-white f-w-8">Shop your purachses from Jaypore.com</h1>
            <p class="f-s-22 f-c-white">Get Free Virtual Shipping Address and Ship to your country at Low Rates</p>
            <br>
            <p class="f-s-22 f-c-white">Place your order in Jaypore Store with your ShoppRe Virtual Address.</p>
            <br>
            <p class="f-s-22 f-c-white">Sarees, Dupattas, Blouses, Handcrafted Jewelry, Kurtas, Shirts, Earrings, HomeDecor</p>
            <br>

            </p>
            <div class="col-md-12 col-xs-12 no-pad">
                <a href="/customer/register" class="btn btn-s-r btn-b-r btn-a-l">Create My Free Address</a>
                {{--<a href="/indian-online-stores" class="btn btn-l btn-s-b btn-b-b btn-a-l">Indian Stores List</a>--}}
            </div>

        </div>
    </section>


    <section class=" ">
        <div class="container christmas-service">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align"></h2>
                </div>
            </div>

            <div class=" col-md-12 offer-description">
                <h2 class="p-color-cement-dark font-weight-900" style="font-size: 28px;">Shop The Most Beautiful Products. Handmade with Love at Japore.com‎</h2>
                <h4 class="p-color-cement" style="font-style:italic">Curated Online Shop for Handpicked Products, Sarees, Apparel, Book, Jewelry, Gifts & many more. </h4>
                <br>
                <p class="header4 p-color-cement">Shop India's most beautiful products such as handmade sarees, dupattas, bags, jewelry, books, shawls, home decor,
                    gifts and more & ship their purchases from India & ship to USA, UK, UAE, AUS, Canada & 220+ countries,
                    at an affordable shipping cost. Since Japore India doesn't offer to ship internationally, customers
                    have no other choice but to look for alternative shipping options. </p> <br>
                <p class="header4 p-color-cement">We’re a <a href="{{route('home')}}">shipping & consolidation company</a> that specializes in domestic & international
                    logistic solutions. We  handle over ₹1,000,000 worth of E-Commerce shipments and 2000 Courier pickup
                    requests a month! A potential customer can shop from 1000+ desi/Indian online stores and,
                    we ship those packages/couriers off to 220+ countries around the world. Our vision has always
                    been to be of help to the Global Indian Community, and their need to shop authentic products
                    from India, and help them ship it all in at a reasonable cost. </p> <br>

                <div class="offerDesc">
                    <h2 class="header2 p-color-cement font-weight-900">How are we the best international shipping solution from India?</h2>
                    <p class="header4 p-color-cement">Our streamlined set of <a href="{{route('consolidationService')}}">Repackaging & Package Consolidation</a> services, helps you cut down the shipping costs to 80% lesser!</p>
                    <br>
                    <br>
                    <p class="header4 p-color-cement">All you have to do is; </p>
                    <ul>
                        <li>Ship your purchases to the Virtual Address we provide for FREE,</li>
                        <li>Use our FREE unique personal locker to store them, and finally,</li>
                        <li>Pay the never-before-like shipping cost we charge and,</li>
                        <li>Your shipment will be on it's way to reach you in 3-6 days!</li>
                    </ul>
                </div>
                <br>
                <br>
                <center>
                    <h4 class="p-color-cement-dark flipkart-h1">International Credit/Debit Cards Giving You Trouble?</h4>
                    <h5 class="header5 p-color-cement">No worries! Our <a href="/personal-shopper-shopping-concierge-from-india">Personal Shopper</a> will swoop in & take care of it all for you!</h5> <br>
                    <a href="https://www.jaypore.com?src=shoppre.com" class="btn-chris-place-order">Go Shopping Now!</a>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="shopandship ">
                        <h2>Shop & Ship</h2>
                        <br/>
                        <p>Shop From Jaypore.com Store; Get FREE Indian Virtual Address. We'll Ship to Your Doorsteps!</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ps">
                        <h2>Personal Shopper</h2>
                        <br>
                        <p>Payment Hassles at Checkout? No Worries, Let Us Know What You Need; We'll Shop for You at Jaypore.com</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ic">
                        <h2>International Courier</h2>
                        <br>
                        <p>Schedule a Pickup For Your Courier From Anywhere in India; We ship to 220+ countries!</p>

                    </div>
                </div>
            </div>
            <br>
        </div>
        <br>
        <br>
    </section>

    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="p-color-cement-dark flipkart-h1 font-weight-900" >Here Are Some of Our Many Featured Services & Benefits</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shipping Address</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>20-Days Free Package Storage</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Consolidation</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Repackaging</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shopper Service</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Scanned of your documents</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Country-specific Discount</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>3-6 days delivery, online tracking</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>International Courier Service</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
    </section>
    <section>
        <br>
        <div class="container">
            <center>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Buying products from Jaypore.com from a different country?</h1>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Join us now for a lifetime of effortless</h1>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Online shopping with international shipping from India!</h1>

                <br>
                <a href="{{route('customer.register')}}"" class="btn-chris-place-order">Sign Up for Free</a>

            </center>
        </div>
    </section>
    <section class="product-courier ">
        <div class="container div-ics-border-btm">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">How <span class="p-color-blue">to Shop from Jaypore.com</span>?
                    </h1>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <br/><br/>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <center>
                            <br/>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shop-product.svg" alt="">
                            <br/>
                            <br/>
                            <span class="p-color-blue">Step 1</span>
                            <h1 class="header5 p-color-cement">Shop Jaypore Products</h1>
                            <br>
                            <p class="p-color-cement header5">
                                Purchase your favourite & brand products from Jaypore Indian online store & Set Cash on Delivery
                            </p>

                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pay-receive.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step 2</span>
                        <br>
                        <h1 class="header5 p-color-cement">Pay & Receive</h1>
                        <br>
                        <p class="header6 p-color-cement">We will pay for your order and will receive your order at our
                            ShoppRe Warehouse.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue">Step 3</span>
                        <h1 class="header5 p-color-cement">Ship in @ 80%
                            Less Cost</h1>
                        <br>
                        <p class="header6 p-color-cement">
                            Save up to 80% in shipping costs as we wait around for 20 days for all your purchases to
                            reach us - for FREE, and repackage & ship them to your doorsteps as one!
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 4</span>
                        <br>
                        <h1 class="header5 p-color-cement">Unbox Your
                            Package</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            We'll dispatch your shipment within 24 hours of you making a request to ship, and it will
                            reach you safe & sound within 3-6 days, no matter wherever in the world you are!
                        </p>

                    </div>
                </div>
            </div>
            <br/><br/>
            <center>
                <a href="https://www.shoppre.com/personal-shopper">Place Your Order Now!</a>
            </center>
            <br/><br/>
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
                    <a href="tel:+91-8040944077" class="header2 p-color-white">+91 80 4094 4077</a>

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
                    <a href="tel:+91-8040944077" class="header2 p-color-white">+91 80 4094 4077</a>

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



