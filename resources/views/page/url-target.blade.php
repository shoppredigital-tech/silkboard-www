@extends('layout')

@section('title',  'Shipping From India To '.ucfirst(trans($destination)).' - Courier Services To '.ucfirst(trans($destination)))
@section('description', 'Shoppre offers Door to Door courier service to ' .ucfirst(trans($destination)).
' from any part of India. The charges are cheapest in India for sending courier to ' .ucfirst(trans($destination)).'. Sign Up Now!')
@section('keywords', 'ship your packages, delivered to your country, parcel services to '.ucfirst(trans($destination)).',
sending courier to ' .ucfirst(trans($destination)).', shipping')

@section('content')
  <section class="timeline">
      <div class="container">
          <h1>Shipping from {{ucfirst(trans($source))}} to {{ucfirst(trans($destination))}}</h1>
          <br>
          <h4>Ship from {{ucfirst(trans($source))}} to {{ucfirst(trans($destination))}}. Shoppre offers DOOR TO DOOR courier to
              {{ucfirst(trans($destination))}} from ANY part of India. The charges are cheapest in {{ucfirst(trans($source))}} for sending
              courier to {{ucfirst(trans($destination))}} . This is by a courier company which is the best in industry
              for parcel services to {{ucfirst(trans($destination))}} .</h4>
          <br></div>br>
          <div class="col-sm-10">
           <div class="parcel_logs">
          <h3>Ship your Parcel through Shoppre’s trusted Courier Partners</h3>
          <img src="{{asset('img/dhl.png')}}">
          <img src="{{asset('img/fedex.png')}}">
          <img src="{{asset('img/dtdc.png')}}">
          <h4>Shoppre receives and ships over INR 10,00,000 worth in eCommerce purchases monthly!</h4>
           </div>
          </div>
      </div>
  </section>
@endsection