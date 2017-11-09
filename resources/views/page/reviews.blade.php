@extends('layout')

@section('title', '- Shoppre Reviews')

@section('css_style')
<!-- Select2 -->
<link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
<link href="{{asset('css/star-rating.min.css')}}" rel="stylesheet"/>
@endsection

@section('content')

	<section class="page_head">
      <div class="pagebanner">
        <img src="img/banner1.jpg" width="100%">
        <div class="banner-cap">
          <h2>Member <span class="text-orange">Reviews</span></h2>
        </div>
      </div>
  </section>

  <section class="reviews_head">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <h2>What members are saying about <span class="text-orange">Shoppre</span></h2>
        <p>Our members love our top-rated service and how easy and worry-free we make shopping and shipping from INDIA</p>

        @if (session('message'))
          <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

      </div>
    </div>
  </section>

  <section class="reviews">
      <div class="container">
        <div class="col-md-8">
          <div class="list">
            <h3>Recent Reviews</h3>
            
            @foreach($reviews as $review)
            <div class="blox">
              <h4>By <span>{{$review->person}}</span> on {{date('j F, Y', strtotime($review->created_at))}}</h4>
              <input class="rating rated" value="{{$review->rating}}">
              <p>{{$review->review}}</p>
              <i>- {{$review->country->name}}</i>
            </div>
            @endforeach

            <div class="clearfix"></div>

            {{ $reviews->links() }}
          </div>
        </div>
        <div class="col-md-4">
          <div class="review_form">
            <h3>Leave your own feedback</h3>
            <form method="post" action="{{route('reviews.submit')}}">
              {{csrf_field()}}
              <div class="form-group">
                <label>Name *</label>
                <input type="text" class="form-control" name="person" placeholder="Enter Your Name">
                @if ($errors->has('person'))
                    <span class="error">{{ $errors->first('person') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label>Country *</label>
                <select class="form-control select2" name="countrid">
                  <option value="">Select Country</option>
                    @foreach($countries as $country)
                      <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('countrid'))
                    <span class="error">{{ $errors->first('countrid') }}</span>
                @endif
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="8" name="review" placeholder="Comments & Tips"></textarea>
                @if ($errors->has('review'))
                    <span class="error">{{ $errors->first('review') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label>Rating *</label>
                <div class="rating-star">
                  <input id="input-rate" type="text" class="rating" name="rating">
                </div>
                @if ($errors->has('rating'))
                    <span class="error">{{ $errors->first('rating') }}</span>
                @endif
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block btn-shoppre">Submit Feedback</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')
<script src="{{asset('js/star-rating.min.js')}}" type="text/javascript"></script>
<script>
  $(".rated").rating({
    'size':'xs',
    'min' : 0,
    'max' : 5,
    'step' : 1,
    'displayOnly' : true,
    'showClear' : false,
    'showCaption' : false
  });

  $("#input-rate").rating({
    'size':'sm',
    'min' : 0,
    'max' : 5,
    'step' : 1,
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