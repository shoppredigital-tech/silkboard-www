@extends('layout')

@section('title', 'ShoppRe.com - India | Customer Reviews & Ratings | 4.8/5')
@section('description', 'Read our latest Reviews & Ratings showcasing the excellent service, ship on time & quality of shipment. Share feedback about your shipping experiences with us.')
@section('keywords', 'reviews, ratings, customer, shipping, shopping, service, india')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/reviews">

    <link href="{{env('AWS_CLOUD_FRONT')}}/css/select2.min.css" rel="stylesheet">
    <link href="{{env('AWS_CLOUD_FRONT')}}/css/star-rating.min.css" rel="stylesheet"/>

    <meta property="og:title" content="ShoppRe.com Reviews and Feedback"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Read our latest Review & Ratings showcasing the excellent service, ship on time & quality of shipment."/>
    <meta property="og:url" content="https://www.shoppre.com/reviews"/>
    <meta property="og:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>
    <meta property="og:site_name" content="ShoppRe.com"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@Go_Shoppre"/>
    <meta name="twitter:title" content="Customer Reviews & Ratings | ShoppRe.com"/>
    <meta name="twitter:description" content="Read our latest Review & Ratings showcasing the ShoppRe excellent service, ship on time & quality of shipment."/>
    <meta name="twitter:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>

    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

    <style>
        .ligth-background{background-color:#fafafb}.header .container p a{color:#e9c46a}.rating-xl{font-size:23px}.form-control{height:41px}label{float:left;margin-left:4px}.r-img{width:100%}.img-circle{padding-top:9px}.img-circle p{text-transform:uppercase;color:#fff;font-size:25px}.rating-container .filled-stars{color:#e9c46a!important}@media only screen and (max-width:1024px){.rating-xl{font-size:16px;text-align:center}}
    </style>

    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
              "@type": "Organization",
              "name": "ShoppRe",
              "alternateName": "International Shipping from India",
              "url": "https://www.shoppre.com/reviews",
              "logo": "https://www.shoppre.com/img/logo.png",
          "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91 80409 44077",
                "contactType": "customer service"
            },
          "sameAs": [
                "https://www.facebook.com/goshoppre",
                "https://twitter.com/Go_Shoppre",
                "https://www.instagram.com/shoppre_official",
                "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
                "https://www.linkedin.com/company/shoppre.com",
                "https://in.pinterest.com/shoppre",
                "https://g.page/shoppre",
                "https://github.com/shoppre",
                "https://cheap-fast-international-shipping-from-india.business.site"
          ]
        }
    </script>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "image": [
            "https://www.shoppre.com/img/images/shoppre-logo.png"
           ],
          "@id": "https://www.shoppre.com",
          "name": "ShoppRe online shopping international shipping from india",
          "address": {
                "@type": "PostalAddress",
                "streetAddress": "No.181, 1st Floor 2nd Cross Rd, 1st Block Koramangala",
                "addressLocality": "Bengaluru",
                "addressRegion": "KA",
                "postalCode": "560034",
                "addressCountry": "India"
          },
          "review": {
            "@type": "Review",
            "reviewRating": {
                  "@type": "Rating",
                  "ratingValue": "4",
                  "bestRating": "5"
                },
            "author": {
                  "@type": "Person",
                  "name": "Gabor R"
                }
          },
          "url": "https://www.shoppre.com/reviews",
          "telephone": "+918277919191"
        }
      </script>

    <script type="application/ld+json">
         {
           "@context" : "http://schema.org",
               "@type" : "Review",
               "name" : "ShoppRe Reviews",
               "url" : "https://www.shoppre.com/reviews",
               "image" : "https://www.shoppre.com/img/images/shoppre-logo.png",
               "author" : "Gabor R",
               "reviewBody" : "Absolutely fantastic service, very kind and polite customer service and support! Although the transaction didn't take place, the team went to great lengths to get a refund from the seller, which I received. The rates are also very competitive. Shoppre is highly recommended for anyone.",
               "reviewRating" : {
           "@type" : "Rating",
           "ratingValue" : "5"
                           },
           "itemReviewed" : {
               "@type" : "Organization",
               "name" : "Best International Shipping Companies in India",
               "image" : "https://www.shoppre.com/img/images/shoppre-logo.png",
               "address" : {
               "@type" : "PostalAddress",
               "streetAddress" : "No.181, 1st Floor 2nd Cross Rd, 1st Block Koramangala",
               "addressLocality" : "Bengaluru",
               "addressRegion" : "Karnataka",
               "postalCode" : "560034",
               "telephone" : "+91-8277919191",
               "addressCountry" : {
           "@type" : "Country",
           "name" : "India"
        		 }
        	 }
         	}
         }
      </script>

@endsection

@section('content')
{{--    <div class="container">--}}
{{--        <br><br><br>--}}
{{--    </div>--}}
    <section class="header">
        <br>
        <br>
        <div class="container header-padder-top">
            <center>
                <p class="header1 p-color-white">Customer Reviews & Ratings</p>
                <p class="header2 p-color-cement header-margin-bottom">Our customers love our top-rated
                    service and how easy & worry-free<br> we make <a href="{{route('ifs.index')}}">shopping and shipping
                        from INDIA!</a>
                </p>
            </center>
        </div>
    </section>

    <section>
        <div class="container section-social-reviews">
            <center>
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
            </center>

{{--            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">--}}
{{--                <center>--}}
{{--                    <a href="https://www.google.com/search?q=shoppre&oq=shoppre&aqs=chrome..69i57j69i60l5.4478j0j7&sourceid=chrome&ie=UTF-8#lrd=0x3bae146191401f95:0x1cf2770c1532d7d1,1,,,"--}}
{{--                       target="_blank" title="Click Here to Rate & Review Us on Google">--}}
{{--                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/reviews/review-google.png" class="r-img" alt="Google Reviews">--}}
{{--                    </a>--}}
{{--                </center>--}}
{{--            </div>--}}

{{--            <div class="col-xs-12 col-sm-12 div-review-hr"></div>--}}
{{--            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">--}}
{{--                <center>--}}
{{--                    <a href="https://www.facebook.com/pg/goshoppre/reviews/?ref=page_internal" target="_blank" title="Click Here to Recommend Us on Facebook">--}}
{{--                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/reviews/review-facebook.png" class="r-img" alt="Facebook Reviews">--}}
{{--                    </a>--}}
{{--                </center>--}}
{{--            </div>--}}

{{--            <div class="col-xs-12 col-sm-12 div-review-hr"></div>--}}
{{--            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 ">--}}
{{--                <center>--}}
{{--                    <a href="#reviews">--}}
{{--                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/reviews/review-shoppre.png" class="r-img" alt="Shoppre Reviews">--}}
{{--                    </a>--}}
{{--                </center>--}}

{{--            </div>--}}
        </div>
    </section>

    <section class="ligth-background">
        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 div-submit-review">
                <center>
                    <p class="margin-bottom-div header1">Leave Your Feedback</p>
                </center>
                <form method="post" action="{{route('reviews.submit')}}">
                    {{csrf_field()}}
{{--                    <div class="row margin-bottom-div">--}}
{{--                        <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4 col-sm-12 col-xs-12">--}}
{{--                            <div class="form-group rating-star-left-margin">--}}
{{--                                <div class="rating-star rating-xl">--}}
{{--                                    <input id="input-rate" type="text" class="rating" name="rating" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Your Name <span class="mandatory_fields">*</span></label>
                                <input id="input-rate" type="text" name="person" placeholder="Enter name" required
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Country <span class="mandatory_fields">*</span></label>
                                <select class="form-control" name="country_id" required>
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Comment <span class="mandatory_fields">*</span></label>
                                <textarea class="form-control" rows="4" name="review" placeholder="enter comment" required >
                                    </textarea>
                            </div>
                        </div>
                    </div>
                    <center>
                        <div class="row row-padding">
                            <input type="submit" class="btn-review-submit header5" value="Submit"/>
                        </div>
                    </center>
                </form>
            </div>
        </div>
        <center>
            @php
                $index=0;
                $colors = array("#fc91ad", "#aa62e3", "#2b78dc", "#6558ee", "#fd4e13", "#e5213b", "#94ba2b");

            @endphp
            <div class="container-fluid" style="padding-left: 4%;padding-right: 4%" id="reviews">
                <div>
                    <div class="row" id="reviews-more">
                        @foreach($reviews as $review)
                            @php
                                $color= $colors[$index];
                                $pname = $review->person;
                                $firstname = explode(" ", $pname);
                                $fl = substr($firstname[0], 0, 1);
                                $sfl = substr($firstname[1], 0, 1);
                                $index++;
                            @endphp
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 inner-review ">
                                    <div class="row div-img-row">
                                        <div class="col-md-1 col-sm-2 col-xs-2 no-padding">
                                            <div class=" img-review img-circle "style="background-color: {{$color}};">
                                                <center>
                                                    <p>{{$fl}}</p>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-7 col-xs-7">
                                            <p class="pull-left p-name-font-weight">{{$review->person}}
                                                <br><span style="color:#677582 ">{{$review->name}}</span> </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-3 col-xs-3 pull-right">
                                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/rating-star.png" style="margin-top: 11px" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <i class="quots-t ">
                                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/qoute_up.svg" alt="">
                                        </i>
                                    </div>
                                    <div class="row">
                                        <p class=" p-reviews">{{substr($review->review, '0','500')}}!</p>
                                    </div>
                                    <div class="row">
                                      <span class="quots-b">
                                         <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/qoute_down.svg" alt="">
                                      </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="remove-row">
                        <center>
                            <button class="btn-more-review header5" id="btn-more" data-id="{{ $review->id }}">
                                Load More
                            </button>
                        </center>
                    </div>

                </div>
            </div>
        </center>
    </section>

    <section style="background-color: #fafafb">
        <div class="container-fluid padder-top-review">
            <center>
                <p class="header1 p-color-cement-dark">
                    Delivering Joy to Your Doorsteps</p>
                <p class="header2 p-doorstep-des">You've got no reason to wait around any longer, just come ShoppRe!</p>
                <a href="https://www.shoppre.com/customer/register" target="_blank">
                    <div class="btn-signup-review header5 p-color-white" style="background-color: #1AAFD0">
                        <p>
                            Sign Up for FREE
                        </p>
                    </div>
                </a>
            </center>
        </div>
    </section>

@endsection

@section('js_script')

    <script src="https://apis.google.com/js/platform.js?onload=renderBadge" async defer></script>

    <script>
        window.renderBadge = function() {
            var ratingBadgeContainer = document.createElement("div");
            document.body.appendChild(ratingBadgeContainer);
            window.gapi.load('ratingbadge', function() {
                window.gapi.ratingbadge.render(ratingBadgeContainer, {"merchant_id": 131040432});
            });
        }
    </script>

    <script>
        $("a[href^='#']").click(function(e){e.preventDefault();let t=$($(this).attr("href")).offset().top;$("body, html").animate({scrollTop:t},1e3)}),$(document).ready(function(){$(document).on("click","#btn-more",function(){let e=$(this).data("id");$("#btn-more").html("Loading...."),$.ajax({url:"/more-reviews",method:"POST",data:{id:e,_token:"{{csrf_token()}}"},success:function(e){console.log(e),""!=e?($("#remove-row").remove(),$("#reviews-more").append(e)):$("#btn-more").html("No Data")}})})}),$(".rated").rating({size:"lg",min:0,max:5,step:1,displayOnly:!0,showClear:!1,showCaption:!1}),$("#input-rate").rating({size:"lg",min:0,max:5,step:1,showClear:!1,showCaption:!1});
    </script>
@endsection
