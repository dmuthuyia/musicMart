@extends('layouts.nyumba')

@section('sebule')


<div class="divfold50read">

<div class="row">
  <div class="divfold52a">
    @foreach($products as $product)
      <div class="col-md-6">
      <div class="denzintro1">
        <div class="fireplace2singlespro">
        
        <div class="image">
          <img height="200" width=100% src="<?php echo asset("uploads/products/$product->product_img")?>"></img>
          <div class="textoverlay1"><span><em> offer <span class='spacer'></span><br /><span class='spacer'></span> this season.</em></span></div>

        </div>

            <div class="caption" style="text-align: center;">
              <h3>{{$product->title}}</h3>
             <!-- <p>Manufacturer : <b>{{$product->producer->name}} {{$product->producer->surname}}</b></p> -->
              <p>{{$product->description}}</p>

            </div>

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


    <script type="text/javascript">


jQuery(document).ready(function() {
    jQuery('.denzintro1').addClass("dhidden").viewportChecker({
        classToAdd: 'dvisible animated fadeInLeftBig', // Class to add to the elements when they are visible
        offset: 100    
       });   
});            
        
    </script>


@stop