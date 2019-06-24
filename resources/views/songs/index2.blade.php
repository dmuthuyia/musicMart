@extends('layouts.nyumba')

@section('sebule')


<div class="divfold50read">

<div class="row">
  <div class="divfold52a">
    @foreach($products as $product)
      <div class="col-md-3">
        <div class="fireplace2singlespro">
        
        <div class="image">
          <img height="200" width="200" src="<?php echo asset("uploads/products/$product->product_img")?>"></img>
          <div class="textoverlay1"><span><em> offer <span class='spacer'></span><br /><span class='spacer'></span> this season.</em></span></div>

        </div>

            <div class="caption">
              <h3>{{$product->title}}</h3>
             <!-- <p>Manufacturer : <b>{{$product->producer->name}} {{$product->producer->surname}}</b></p> -->
              <p>Price KES : <b>{{$product->minprice}}</b></p>
              <form action="/cart/add" name="add_to_cart" method="post" accept-charset="UTF-8">
                <input type="hidden" name="product" value="{{$product->id}}" />
                <select name="amount" style="width: 100%;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
              <p align="center"><button class="btn btn-info btn-block">Add to Cart</button></p>
            </form>
            </div>

        </div>
      </div>
    @endforeach
  </div>
   
</div>
 <div style="padding: 10px;">
      <?php echo $products->render(); ?>
    </div>

</div>


@stop