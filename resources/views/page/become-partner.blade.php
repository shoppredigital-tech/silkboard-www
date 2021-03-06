@extends('layout')

@section('title', 'ShoppRe - Shipping Partner | Seller & Ecommerce Logistics Solutions ')
@section('description', 'ShoppRe for You: eCommerce Logistics and Shipping Solutions. Multiple Shipping Partners for Sellers.')
@section('keywords', 'seller, ecommerce shipping solutions india, marketplace, b2b, b2c')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/seller-partner"/>
    <link rel="shortcut icon" href="https://www.shoppre.com/img/favicon.png">
    <link rel="icon" type="image/png" href="https://www.shoppre.com/img/favicon.png" sizes="60x60">

    <meta property="og:title" content="ShoppRe - India's #1 International Shipping Solution | Sellers "/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/seller-partner"/>
    <meta property="og:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/seller-shipping-service.png')}}"/>
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:alt" content="ShoppRe Seller" />
    <meta property="og:description" content="Seller & Ecommerce Partnership. Ship your products Internationally starting at ₹500"/>
    <meta property="og:site_name" content="ShoppRe International Shipping Seller"/>

    <style>
        .div-option{height:30px;padding-top:5px}.select2-container{box-sizing:border-box;display:inline-block;margin:0;position:relative;vertical-align:middle}.select2-container .select2-selection--single{box-sizing:border-box;cursor:pointer;display:block;height:34px;user-select:none;-webkit-user-select:none}.select2-container .select2-selection--single .select2-selection__rendered{display:block;padding-left:8px;padding-right:20px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.select2-container .select2-selection--single .select2-selection__clear{position:relative}.select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered{padding-right:8px;padding-left:20px}.select2-container .select2-selection--multiple{box-sizing:border-box;cursor:pointer;display:block;min-height:32px;user-select:none;-webkit-user-select:none}.select2-container .select2-selection--multiple .select2-selection__rendered{display:inline-block;overflow:hidden;padding-left:8px;text-overflow:ellipsis;white-space:nowrap}.select2-container .select2-search--inline{float:left}.select2-container .select2-search--inline .select2-search__field{box-sizing:border-box;border:none;font-size:100%;margin-top:5px;padding:0}.select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button{-webkit-appearance:none}.select2-dropdown{background-color:white;border:1px solid #aaa;border-radius:4px;box-sizing:border-box;display:block;position:absolute;left:-100000px;width:100%;z-index:1051}.select2-results{display:block}.select2-results__options{list-style:none;margin:0;padding:0}.select2-results__option{padding:6px;user-select:none;-webkit-user-select:none}.select2-results__option[aria-selected]{cursor:pointer}.select2-container--open .select2-dropdown{left:0}.select2-container--open .select2-dropdown--above{border-bottom:none;border-bottom-left-radius:0;border-bottom-right-radius:0}.select2-container--open .select2-dropdown--below{border-top:none;border-top-left-radius:0;border-top-right-radius:0}.select2-search--dropdown{display:block;padding:4px}.select2-search--dropdown .select2-search__field{padding:4px;width:100%;box-sizing:border-box}.select2-search--dropdown .select2-search__field::-webkit-search-cancel-button{-webkit-appearance:none}.select2-search--dropdown.select2-search--hide{display:none}.select2-close-mask{border:0;margin:0;padding:0;display:block;position:fixed;left:0;top:0;min-height:100%;min-width:100%;height:auto;width:auto;opacity:0;z-index:99;background-color:#fff;filter:alpha(opacity=0)}.select2-hidden-accessible{border:0 !important;clip:rect(0 0 0 0) !important;height:1px !important;margin:-1px !important;overflow:hidden !important;padding:0 !important;position:absolute !important;width:1px !important}.select2-container--default .select2-selection--single{background-color:#fff;border:1px solid #aaa;border-radius:4px}.select2-container--default .select2-selection--single .select2-selection__rendered{color:#444;line-height:34px}.select2-container--default .select2-selection--single .select2-selection__clear{cursor:pointer;float:right;font-weight:bold}.select2-container--default .select2-selection--single .select2-selection__placeholder{color:#999}.select2-container--default .select2-selection--single .select2-selection__arrow{height:26px;position:absolute;top:4px;right:4px;width:20px}.select2-container--default .select2-selection--single .select2-selection__arrow b{border-color:#888 transparent transparent transparent;border-style:solid;border-width:5px 4px 0 4px;height:0;left:50%;margin-left:-4px;margin-top:-2px;position:absolute;top:50%;width:0}.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__clear{float:left}.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__arrow{left:1px;right:auto}.select2-container--default.select2-container--disabled .select2-selection--single{background-color:#eee;cursor:default}.select2-container--default.select2-container--disabled .select2-selection--single .select2-selection__clear{display:none}.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b{border-color:transparent transparent #888 transparent;border-width:0 4px 5px 4px}.select2-container--default .select2-selection--multiple{background-color:white;border:1px solid #aaa;border-radius:4px;cursor:text}.select2-container--default .select2-selection--multiple .select2-selection__rendered{box-sizing:border-box;list-style:none;margin:0;padding:0 5px;width:100%}.select2-container--default .select2-selection--multiple .select2-selection__rendered li{list-style:none}.select2-container--default .select2-selection--multiple .select2-selection__placeholder{color:#999;margin-top:5px;float:left}.select2-container--default .select2-selection--multiple .select2-selection__clear{cursor:pointer;float:right;font-weight:bold;margin-top:5px;margin-right:10px}.select2-container--default .select2-selection--multiple .select2-selection__choice{background-color:#e4e4e4;border:1px solid #aaa;border-radius:4px;cursor:default;float:left;margin-right:5px;margin-top:5px;padding:0 5px}.select2-container--default .select2-selection--multiple .select2-selection__choice__remove{color:#999;cursor:pointer;display:inline-block;font-weight:bold;margin-right:2px}.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover{color:#333}.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice,.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__placeholder,.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-search--inline{float:right}.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice{margin-left:5px;margin-right:auto}.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove{margin-left:2px;margin-right:auto}.select2-container--default.select2-container--focus .select2-selection--multiple{border:solid black 1px;outline:0}.select2-container--default.select2-container--disabled .select2-selection--multiple{background-color:#eee;cursor:default}.select2-container--default.select2-container--disabled .select2-selection__choice__remove{display:none}.select2-container--default.select2-container--open.select2-container--above .select2-selection--single,.select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple{border-top-left-radius:0;border-top-right-radius:0}.select2-container--default.select2-container--open.select2-container--below .select2-selection--single,.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple{border-bottom-left-radius:0;border-bottom-right-radius:0}.select2-container--default .select2-search--dropdown .select2-search__field{border:1px solid #aaa}.select2-container--default .select2-search--inline .select2-search__field{background:transparent;border:none;outline:0;box-shadow:none;-webkit-appearance:textfield}.select2-container--default .select2-results>.select2-results__options{max-height:200px;overflow-y:auto}.select2-container--default .select2-results__option[role=group]{padding:0}.select2-container--default .select2-results__option[aria-disabled=true]{color:#999}.select2-container--default .select2-results__option[aria-selected=true]{background-color:#ddd}.select2-container--default .select2-results__option .select2-results__option{padding-left:1em}.select2-container--default .select2-results__option .select2-results__option .select2-results__group{padding-left:0}.select2-container--default .select2-results__option .select2-results__option .select2-results__option{margin-left:-1em;padding-left:2em}.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option{margin-left:-2em;padding-left:3em}.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option{margin-left:-3em;padding-left:4em}.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option{margin-left:-4em;padding-left:5em}.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option{margin-left:-5em;padding-left:6em}.select2-container--default .select2-results__option--highlighted[aria-selected]{background-color:#5897fb;color:white}.select2-container--default .select2-results__group{cursor:default;display:block;padding:6px}.select2-container--classic .select2-selection--single{background-color:#f7f7f7;border:1px solid #aaa;border-radius:4px;outline:0;background-image:-webkit-linear-gradient(top, #fff 50%, #eee 100%);background-image:-o-linear-gradient(top, #fff 50%, #eee 100%);background-image:linear-gradient(to bottom, #fff 50%, #eee 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFFFF', endColorstr='#FFEEEEEE', GradientType=0)}.select2-container--classic .select2-selection--single:focus{border:1px solid #5897fb}.select2-container--classic .select2-selection--single .select2-selection__rendered{color:#444;line-height:28px}.select2-container--classic .select2-selection--single .select2-selection__clear{cursor:pointer;float:right;font-weight:bold;margin-right:10px}.select2-container--classic .select2-selection--single .select2-selection__placeholder{color:#999}.select2-container--classic .select2-selection--single .select2-selection__arrow{background-color:#ddd;border:none;border-left:1px solid #aaa;border-top-right-radius:4px;border-bottom-right-radius:4px;height:26px;position:absolute;top:1px;right:1px;width:20px;background-image:-webkit-linear-gradient(top, #eee 50%, #ccc 100%);background-image:-o-linear-gradient(top, #eee 50%, #ccc 100%);background-image:linear-gradient(to bottom, #eee 50%, #ccc 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFEEEEEE', endColorstr='#FFCCCCCC', GradientType=0)}.select2-container--classic .select2-selection--single .select2-selection__arrow b{border-color:#888 transparent transparent transparent;border-style:solid;border-width:5px 4px 0 4px;height:0;left:50%;margin-left:-4px;margin-top:-2px;position:absolute;top:50%;width:0}.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__clear{float:left}.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__arrow{border:none;border-right:1px solid #aaa;border-radius:0;border-top-left-radius:4px;border-bottom-left-radius:4px;left:1px;right:auto}.select2-container--classic.select2-container--open .select2-selection--single{border:1px solid #5897fb}.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow{background:transparent;border:none}.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow b{border-color:transparent transparent #888 transparent;border-width:0 4px 5px 4px}.select2-container--classic.select2-container--open.select2-container--above .select2-selection--single{border-top:none;border-top-left-radius:0;border-top-right-radius:0;background-image:-webkit-linear-gradient(top, #fff 0%, #eee 50%);background-image:-o-linear-gradient(top, #fff 0%, #eee 50%);background-image:linear-gradient(to bottom, #fff 0%, #eee 50%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFFFF', endColorstr='#FFEEEEEE', GradientType=0)}.select2-container--classic.select2-container--open.select2-container--below .select2-selection--single{border-bottom:none;border-bottom-left-radius:0;border-bottom-right-radius:0;background-image:-webkit-linear-gradient(top, #eee 50%, #fff 100%);background-image:-o-linear-gradient(top, #eee 50%, #fff 100%);background-image:linear-gradient(to bottom, #eee 50%, #fff 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFEEEEEE', endColorstr='#FFFFFFFF', GradientType=0)}.select2-container--classic .select2-selection--multiple{background-color:white;border:1px solid #aaa;border-radius:4px;cursor:text;outline:0}.select2-container--classic .select2-selection--multiple:focus{border:1px solid #5897fb}.select2-container--classic .select2-selection--multiple .select2-selection__rendered{list-style:none;margin:0;padding:0 5px}.select2-container--classic .select2-selection--multiple .select2-selection__clear{display:none}.select2-container--classic .select2-selection--multiple .select2-selection__choice{background-color:#e4e4e4;border:1px solid #aaa;border-radius:4px;cursor:default;float:left;margin-right:5px;margin-top:5px;padding:0 5px}.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove{color:#888;cursor:pointer;display:inline-block;font-weight:bold;margin-right:2px}.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove:hover{color:#555}.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice{float:right}.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice{margin-left:5px;margin-right:auto}.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove{margin-left:2px;margin-right:auto}.select2-container--classic.select2-container--open .select2-selection--multiple{border:1px solid #5897fb}.select2-container--classic.select2-container--open.select2-container--above .select2-selection--multiple{border-top:none;border-top-left-radius:0;border-top-right-radius:0}.select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple{border-bottom:none;border-bottom-left-radius:0;border-bottom-right-radius:0}.select2-container--classic .select2-search--dropdown .select2-search__field{border:1px solid #aaa;outline:0}.select2-container--classic .select2-search--inline .select2-search__field{outline:0;box-shadow:none}.select2-container--classic .select2-dropdown{background-color:#fff;border:1px solid transparent}.select2-container--classic .select2-dropdown--above{border-bottom:none}.select2-container--classic .select2-dropdown--below{border-top:none}.select2-container--classic .select2-results>.select2-results__options{max-height:200px;overflow-y:auto}.select2-container--classic .select2-results__option[role=group]{padding:0}.select2-container--classic .select2-results__option[aria-disabled=true]{color:grey}.select2-container--classic .select2-results__option--highlighted[aria-selected]{background-color:#3875d7;color:#fff}.select2-container--classic .select2-results__group{cursor:default;display:block;padding:6px}.select2-container--classic.select2-container--open .select2-dropdown{border-color:#5897fb}

        @media only screen and (max-width:600px) {.div-option{height:auto;padding-top:0;margin-bottom:20px}.mobile-pad{padding:0}}
    </style>

@endsection

@section('content')
    <main>
        <div class="header">
            <div class="container"><br><br><br>
                <center>
                    <h1 class="f-s-36 f-c-white f-w-8">Seller & Ecommerce Partnership</h1>
                    <p class="f-s-20 f-c-l-gray ">ShoppRe.com Your Global Shipping Partner. Ship your products
                        Internationally starting at ₹500/-.<br> ✅Online Seller ✅Social Seller ✅eCommerce Seller ✅Amazon FBA Seller</p>
                </center>
                <br>
                <br>
            </div>
        </div>
    </main>

    <div class="modal fade" id="succesBlock" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                </div>

                <div class="modal-body">

                    <div class="thank-you-pop">
                        <img src="/img/images/ThanksSellers.png"
                             alt="" style="width: 60%">
                        <h2><b>Thank You!</b></h2>
                        <p>For Submitting the details
                            <br>We will get back to you soon.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container" style="margin-top: 30px;">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive img-shipments" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-tailor.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="f-s-24 font-weight-900 f-c-d-greay">Are you a Seller or an young Entrepreneur or an upcoming organization
                    aspiring to make your talent & business [B2B, B2C, C2C] reach overseas?</h1>
                <p class="f-s-20 f-c-l-gray">
                    <span> Sit back and relax while we handle the fuss of your company's shipments and delivery.
                        Ship your products with us & reach customers Globally.</span> To know how much you can save monthly on regular shipping.</p>
                <br>
                <div class="f-s-16 f-c-red">
                    <p>YOUR ONE-STOP SOLUTION FOR ALL SHIPPING PROBLEMS! </p>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #fafafb;">
        <div class="container "><br><br>
            <h2 class="f-s-30 f-c-blue f-w-6">Submit your Interest:</h2>
            <div class="col-md-12 col-xs-12 div-b-w-s "
                 style="-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;padding-top: 20px">
                <div class="col-md-12 col-xs-12 card-body no-pad">
                    <div class="col-md-12 colxs-12 no-pad">
                        <div class="col-md-8 col-xs-12 no-pad">
                            <form action="" method="post" id="seller_lp">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="f-s-14 f-c-l-gray" for="name">Seller Type <span
                                                        class="f-c-red">*</span></label>
                                            <select class="countries form-control" name="businessType" multiple="multiple" id="businessType"
                                                    style="border: 1px solid #e6e9ef !important;">
                                                <option value="">Online Seller</option>
                                                <option value="">Facebook Seller</option>
                                                <option value="">Instagram Seller</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="f-s-14 f-c-l-gray" for="name">Contact Person Full Name
                                                <span
                                                        class="f-c-red">*</span></label>
                                            <input type="text" class="form-control" name="Name"
                                                   placeholder="Enter name"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="f-s-14 f-c-l-gray" for="Mobile_number">Mobile Number<span
                                                            class="f-c-red">*</span></label>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Mobile Number"
                                                           aria-label="Username"
                                                           aria-describedby="basic-addon1" name="contactNumber"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="f-s-14 f-c-l-gray" for="email">Email Address<span
                                                            class="f-c-red">*</span></label>
                                                <input type="email" class="form-control" name="email"
                                                       aria-describedby="emailHelp" placeholder="Enter email address"
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="f-s-14 f-c-l-gray" for="businessname">Business Name (if
                                                    applicable)</label>
                                                <input type="text" class="form-control" name="businssName"
                                                       placeholder="Name of your store/business">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="f-s-14 f-c-l-gray" for="website">Website/Page
                                                    (optional)</label>
                                                <input type="text" class="form-control" name="webSite"
                                                       placeholder="Enter url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12 no-pad">
                                        <label class="f-s-14 f-c-l-gray">No.of shipments in a month<span
                                                    class="f-c-red">*</span></label>
                                        <div class="col-md-12 col-xs-12 no-pad" style="border: 1px solid #e6e9ef; height: 30px;">
                                            <div class="col-md-2 col-xs-6"
                                                 style="background-color: #e6e9ef;height: 30px;padding-top: 5px;">
                                                <p>Domestic</p>
                                            </div>
                                            <div class="col-md-2 col-xs-6" style="padding-top:5px">
                                                <label class="f-s-14 f-c-blue"> Less than</label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 no-pad div-option" style="">
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="domestic" value="10-15" checked>10-50
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="domestic" value="50-100">50-100
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="domestic" value="100-500">100-500
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="domestic" value="500+">500+
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-xs-12 no-pad" style="margin-top: 20px">
                                        <div class="col-md-12 col-xs-12 no-pad" style="border: 1px solid #e6e9ef; height: 30px;">
                                            <div class="col-md-2 col-xs-6"
                                                 style="background-color: #e6e9ef;height: 30px;padding-top: 5px;">
                                                <p>International</p>
                                            </div>
                                            <div class="col-md-2 col-xs-6" style="padding-top:5px">
                                                <label class="f-s-14 f-c-blue"> Less than</label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 no-pad div-option" >
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="International" value="10-50" checked>10-50
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="International" value="50-100">50-100
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="International" value="100-500">100-500
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="International" value="500+">500+
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12 no-pad "><br>
                                        <div class="col-md-12 col-xs-12 pad-t-15">
                                            <label class="f-s-14 f-c-l-gray" for="countries">Which are the top Countries
                                                you Ship?</label>
                                        </div>
                                        <div class="col-md-12 col-xs-12 pad-t-10">
                                            <select class="countries form-control" name="states[]" multiple="multiple" id="Countries"
                                                    style="border: 1px solid #e6e9ef !important;">
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12 no-pad" style="margin-bottom: 20px">
                                        <button type="submit" id="btnSubmit" class="btn btn-s-r btn-b-r m-t-20 btn-l" style="background-color: #4285f4">Submit</button>
                                        <br>
                                        <br>
{{--                                        <div id='succes-Block'style="background-color:green;text-align: center"><label id="message" style="color:white"></label></div>--}}
                                    </div>




                            </form>
                        </div>
                        <div class="col-md-2 col-xs-12 mobile-pad">
                            <div class="col-md-12 col-xs-12 no-pad  ">
                                <h6 class="advertisement-text">Exciting Offers</h6>
                                <div class="col-md-12 col-xs-12 no-pad" >
                                    <a href="http://bit.ly/shpr-seller" target="_blank" title="Click To Message Us on WhatsApp">
                                        <img style="width: 300px; height: auto; margin-bottom: 20px" src="{{env('AWS_CLOUD_FRONT')}}/img/images/shoppre-b2c-b2b-c2c.png">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xs-12 no-pad">
                <center>
                    <h1 class="f-s-30 font-weight-900 f-c-d-greay">Features & Benefits:</h1>
                    {{--<p class="f-s-20 f-c-d-greay">Get a FREE estimate for your courier, and schedule a pickup with us. We’ll come to your doorsteps to pick it up within 48 hours.--}}
                        {{--Our courier partners are known to reach your destination in 3-6 days, wherever in the world!’</p>--}}
                    {{--</br>--}}
                </center>
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <div class="col-md-6 col-xs-12 no-padding">
                        <ul>
                            <li>👨‍💻 Dashboard</li>
                            <li>🚚 Door to Door Pickup Services</li>
                            <li>✅ Customs Clearance & Paperwork</li>
                            <li>💲 Low Cost for Higher Kgs</li>
                            <li>📦 Package Return Services</li>
                            <li>💳 Multiple Payment Options</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-12 no-padding">
                        <ul>
                            <li>🚚Pick-Up Anywhere in India</li>
                            <li>✅FREE International Promotion</li>
                            <li>✈️Multiple Courier Partners</li>
                            <li>📫Doorstep Delivery, 3–6 Working Days</li>
                            <li>✅E-Commerce/Amazon Fulfillment</li>
                            <li>📡Real time online tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <center> <a href="https://bit.ly/3ftPwnP" target="_blank">
                <div class="btn header6 btn-get-assisted p-color-white no-margin" style="background-color: #25D366">
                    <center>
                        WhatsApp Here
                    </center>
                </div>
            </a></center>
    </section>
@endsection

@section('js_script')
    <script src="{{env('AWS_CLOUD_FRONT')}}/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#succesBlock").hide();

            $(document).ready(function () {

                $("#seller_lp").submit(function (e) {

                    //stop submitting the form to see the disabled button effect
                    e.preventDefault();
                    //disable the submit button
                    $("#btnSubmit").attr("disabled", true);
                    return true;

                });
            });

            $("#seller_lp").validate({
            rules: {
                email: {
                    required: !0
                }
            },
            messages: {},
            submitHandler: function(e) {
                $("#schedule_load").show();
                var n = $("input[name='Name']").val(),
                    a = $("input[name='email']").val(),
                    t = $("input[name='businssName']").val(),
                    i = $("input[name='webSite']").val(),
                    s = $("input[name='contactNumber']").val(),
                    u = $("#businessType option:selected").text(),
                    l = $("#Countries option:selected").text(),
                    m = $("input[name='domestic']:checked").val(),
                    c = $("input[name='International']:checked").val(),
                    o = $("input[name=_token]").val();
                jQuery.ajax({
                    url: "seller",
                    type: "POST",
                    data: {
                        _token: o,
                        email: a,
                        name: n,
                        businessType: u,
                        businessName: t,
                        websiteLink: i,
                        contact_no: s,
                        Countries: l,
                        domesticShipmentRange: m,
                        internationalShipmentRange: c,
                        mailtrain_type: "become-partner"
                    },
                    success: function(e) {
                        $('#succesBlock').modal('show'), $("input[name='Name']").val(""), $("input[name='businessType']").val(""), $("input[name='email']").val(""), $("input[name='businssName']").val(""), $("input[name='webSite']").val(""), $("input[name='contactNumber']").val(""), $("#schedule_load").hide()
                    }
                });

                const leadObject = {
                    customer: {
                        name: n,
                        email: a,
                        phone: s,
                    },
                    form_info: {
                        form_id: 1,
                    },
                    lead_meta: [
                        {
                          attribute: 'name',
                          value: n,
                        },
                        {
                            attribute: 'email',
                            value: a
                        },
                        {
                          attribute: 'phone',
                          value: s
                        },
                        {
                            attribute: 'business_type',
                            value: u
                        },
                        {
                            attribute: 'business_name',
                            value: t
                        },
                        {
                            attribute: 'website_link',
                            value: i,
                        },
                        {
                            attribute: 'countries',
                            value: l,
                        },
                        {
                            attribute: 'domestic_shipment_range',
                            value: m,
                        },
                        {
                            attribute: 'international_shipment_ange',
                            value: c,
                        }
                    ]
                };

                const url = window.location.href;
                const arr = url.split("/");
                const prefix = arr[0]+'//';
                const subDomain = arr[2].split('.')[0];
                const domain = arr[2].split('.')[1]+'.'+arr[2].split('.')[2];
                let leadsSubDomain = '';
                if (subDomain === 'www') {
                    leadsSubDomain = 'leads';
                } else {
                    leadsSubDomain = 'staging-leads'
                }
                const leadsDomain = prefix + leadsSubDomain+'.'+ domain;

                jQuery.ajax({
                    url: leadsDomain+"/api/leads",
                    crossDomain: true,
                    headers: {
                        'Access-Control-Allow-Origin': '*'
                    },
                    type: "POST",
                    data: { lead: JSON.stringify(leadObject) },
                    success: function(res) {
                    }
                });
            }
            });
            $(".countries").select2();
        });
    </script>
@endsection
