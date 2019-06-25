@extends('layouts.nyumba')

@section('kichwa')

    Orders

@endsection

@section('sebule')

<div class="divfold50">
<div class="divfold50read">

<h3>Your Orders</h3>
<div class="menu">
  <div class="accordion">
@foreach($orders as $order)
 <div class="accordion-group">
      <div class="accordion-heading country">
        @if(Auth::user()->admin)
        <a class="accordion-toggle" data-toggle="collapse" href="#order{{$order->id}}">Order #{{$order->id}} - {{$order->User->name}} - {{$order->created_at}}</a>
        @else
        <a class="accordion-toggle" data-toggle="collapse" href="#order{{$order->id}}">Order #{{$order->id}} - {{$order->created_at}}</a>
        @endif
      </div>
      <div id="order{{$order->id}}" class="accordion-body collapse">
        <div class="accordion-inner">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>
              Title
              </th>
              <th>
              Amount
              </th>
              <th>
              Price
              </th>
              <th>
              Total
              </th>
              </tr>
            </thead>   
            <tbody>
            @foreach($order->orderItems as $orderitem)
              <tr>
                <td>{{$orderitem->title}}</td>
                <td>{{$orderitem->pivot->amount}}</td>
                <td>{{$orderitem->pivot->minprice}}</td>
                <td>{{$orderitem->pivot->total}}</td>
              </tr>
            @endforeach
              <tr>
                <td></td>
                <td></td>
                <td><b>Total</b></td>
                <td><b>{{$order->total}}</b></td>
              </tr>
              
            </tbody>
          </table>





        </div>

<div>Delivery DETAILS</div>

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>
              First Name
              </th>
              <th>
               Last Name
              </th>
              <th>
               City
              </th>
              <th>
              Phone
              </th>
              <th>
              additional details
              </th>
              </tr>
            </thead>   
            <tbody>
           
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
            </tbody>
          </table>

      </div>
    </div>
@endforeach
</div>
</div>
</div>
</div>
@stop