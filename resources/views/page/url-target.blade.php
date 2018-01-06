@extends('layout')

@section('title', $title )
@section('description', $description)
@section('keywords', $keywords)

@section('content')
  <section class="timeline">
      <div class="container">
          <h1>Shipping from {{ucfirst(trans($source))}} to {{ucfirst(trans($destination))}}</h1>
          <br>
          <h4>Ship from {{ucfirst(trans($source))}} to {{ucfirst(trans($destination))}}. Shoppre offers DOOR TO DOOR courier to
              {{ucfirst(trans($destination))}} from ANY part of India. The charges are cheapest in {{ucfirst(trans($source))}} for sending
              courier to {{ucfirst(trans($destination))}} . This is by a courier company which is the best in industry
              for parcel services to {{ucfirst(trans($destination))}} .</h4>

      </div>
        <!--   <div class="container">

      <table class="table table-striped">
          <div class="col-md-8 col-sm-offset-2">
          <h3>Pricing details from {{ucfirst(trans($source))}} to {{ucfirst(trans($destination))}}</h3>
          </div>
          <thead>
          <tr>
              <th>No</th>
              <th>Weight</th>
              <th>Non-Document(Cost)</th>
               <th>Document(Cost)</th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <td>1</td>
              <td>10</td>
              <td>10254</td>
              <td>11254</td>
          </tr>
          </tbody>
      </table>
   </div> -->
  </section>
      <section class="timeline">
          <div class="container">
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