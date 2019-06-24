@extends('layouts.nyumba')

@section('kichwa')

   Cart

@endsection

@section('sebule')

<div class="divfold50">
<div class="divfold50read">
  <h1>On Your Shopping Cart</h1>
  <table class="table table-bordered table-striped">
    <tbody>
      <tr>
        <td>
          <b>Title</b>
        </td>
        <td>
          <b>Amount</b>
        </td>
        <td>
          <b>Price</b>
        </td>
        <td>
          <b>Total</b>
        </td>
        <td>
          <b>Cancel</b>
        </td>
      </tr>
      @foreach($cart_products as $cart_item)
        <tr>
          <td>{{$cart_item->Products->title}} </td>
          <td>
           {{$cart_item->amount}}
          </td>
          <td>
            {{$cart_item->Products->minprice}}
          </td>
          <td>
           {{$cart_item->total}}
          </td>
          <td>
            <a href="{{URL::route('delete_product_from_cart',array($cart_item->id))}}">Remove</a>
          </td>
        </tr>
      @endforeach
      <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
          <b>Total</b>
        </td>
        <td>
          <b>{{$cart_total}}</b>
        </td>
        <td>
        </td>        
      </tr>
    </tbody>
  </table>

  <a href="{{ URL::previous() }} " class="fa fa-arrow-left btn btn-primary" style="width: 100%;">Go Back to add more products</a>

  <div><h2>Shipping details</h2></div>

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
              </tr>
            </thead>   
            <tbody>
          
              <tr>
                <td>{{Auth::user()->FirstName}}</td>
                <td>{{Auth::user()->LastName}}</td>
                <td>{{Auth::user()->City}}</td>
                <td></td>
              </tr>
         
              
            </tbody>
          </table>
<div class="row">
  <div class="col-md-4"><label></label><br /></div>
  <div class="col-md-4">
      <form action="/order" method="post" accept-charset="UTF-8">
        
        <textarea class="span4" name="shipping_details" rows="5" placeholder="Must add Additional details"></textarea>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </div>
  <div class="col-md-4">
    <button class="btn btn-block btn-primary btn-large">Place order</button>
  </form>
  </div>
</div>


</div>
</div>
@stop