@extends('layouts.nyumba')

@section('kichwa')

    Carison: Date and Text Rubber stamps

@endsection

@section('sebule')


	<div class="divfold50read">
		
		<div class="row">

			<div class="col-md-6">

				<div style="height: 400; width: 400;">
					<div class="fireplace2showimage">
					<img src="<?php echo asset("uploads/products/$product->product_img")?>"></img>
					</div>

					<div class="row">

		  				<div class="col-md-6">
							<div class="pricetag1">
								<div class="pricetag1inner"> 
									<h4 style="color: white;">{{ $product->minprice }}/=</h4>
								</div>
		  					</div>
		  				</div>

						<div class="col-md-6">
				  			<a href="{{ URL::previous() }} " class="fa fa-arrow-left btn btn-primary" style="width: 100%;">Go Back</a>
				  			<a href="{{ route('products') }} " class="fa fa-arrow-left btn btn-primary" style="width: 100%;">See more Products</a>
		  				</div>

  					</div>

 			

				</div>

			</div>

			<div class="col-md-6" style="text-align: center;">
				<div class="titles1">
					<h4>{{ $product->title }}</h4>

  
					
				</div>
				

				<hr>

				<div class="row">

					<div class="col-md-12">
	                 
	                    <img height="140" width=100% src="<?php echo asset("uploads/products/$product->product_img2")?>"></img>
	                </div> 
					
					
				</div>

				<div class="row">

					<div class="col-md-12">
	                 
	                    <img height="140" width=100% src="<?php echo asset("uploads/products/$product->product_img3")?>"></img>
	                </div>
					
					
				</div>


			</div>

	    </div>

	    <hr>

		<div class=" divfold50readshow ">
		    <div class="row">


						<div class="col-md-9"> 
							Name: {{ $product->title }} <br>
							Category: {{ $product->category->name }} <br>
							Subcategory: {{ $product->subcategory->name }} <br>
							Description: {{ $product->description }} <br>
							Price: {{ $product->minprice }} <br>


				            <?php

					            $featuredshow= ( $product->featured == 1) ? 'Yes' : 'No' ;
					           
					    		$best_sellingshow= ( $product->best_selling == 1) ? 'Yes' : 'No' ;
					           
					    		$new_arrivalshow= ( $product->new_arrival == 1) ? 'Yes' : 'No' ;

				            ?>


							Featured: {{  $featuredshow }}<br>
							Best selling: {{  $best_sellingshow }} <br>
							New arrival: {{  $new_arrivalshow }} <br>

						</div>


						<div class="col-md-3"> 
				            <form action="/cart/add" name="add_to_cart" method="post" accept-charset="UTF-8">
				                <input type="hidden" name="product" value="{{$product->id}}" />
				                <label style="text-align: center;">Order now: Order Amount</label>
				                
				                <input type="number" name="amount" pattern="[0-9]" style="margin-bottom: 2px;" class="form-control" value="1" />

				                <input type="hidden" value="{{ csrf_token() }}" name="_token">
				                <p align="center"><button class="btn btn-info btn-block">Buy / Add to Cart</button></p>
				            </form>


                    <form action="{{ url('product/delete', [$product->id]) }}" method="delete">

                      <input type="hidden" value="{{ csrf_token() }}" name="_token">

                      <div class="btn-group"> 
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#editprof">Edit</a>
                        <button class="btn btn-primary">Delete</button>
                      </div>
                    </form>
                  
						</div>


		    </div>
	    </div>

	    <div class="row">
  <div class="divfold52a">

  	<div class="titles1"> <h4> Related products </h4> </div>

    @foreach($interested as $iproduct)
      <div class="col-md-4">
      <div class="denzintro2">
       
        <div class="fireplace2singlespro">

          <div class="fireplace2singlesproinner1">
        
              <div class="image">
                <img height="130" src="<?php echo asset("uploads/products/$iproduct->product_img")?>"></img>
                <div class="textoverlay1"><span><em><span class='spacer'></span><br /><span class='spacer'></span></em></span></div>

              </div>

              <div class="row">

                <div class="col-md-6">
                  <div class="image">
                    <img height="130" src="<?php echo asset("uploads/products/$iproduct->product_img2")?>"></img>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="image">
                    <img height="130" src="<?php echo asset("uploads/products/$iproduct->product_img3")?>"></img>
                  </div>
                </div>
                
              </div>

                  <div class="caption">
                    
                  <a href="{{ url('products/show', [$iproduct->id]) }}"><h6>{{$iproduct->title}}</h6></a>
                   <!-- <p>Manufacturer : <b>{{$product->producer->name}} {{$product->producer->surname}}</b></p> -->
                    <p>Price KES : <b>{{$iproduct->minprice}}</b></p>
                  </div>

          </div>
          <div class="fireplace2singlesproinner2">
              <form action="/cart/add" name="add_to_cart" method="post" accept-charset="UTF-8">
                <input type="hidden" name="product" value="{{$product->id}}" />
                <label style="text-align: center;">Order now: Order Amount</label>
                
                <input type="number" name="amount" pattern="[0-9]" style="margin-bottom: 2px;" class="form-control" value="1" />

                <input type="hidden" value="{{ csrf_token() }}" name="_token">
              <p align="center"><button class="btn btn-info btn-block">Buy / Add to Cart</button></p>
            </form>
          </div>
           

        </div>
      </div>

      </div>
    @endforeach
  </div>
	    </div>


	</div>


<div class="modal" id="editprof" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
              <button type="button" class="close" 
              data-dismiss="modal" 
              aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Product: {{$product->title }} </h4> 
              </div>

            <div class="modal-body" style="">



        


            
           
                    {{ Form::model($product, array('url' => array('update/product'))) }}
                       <div class="row">
                        <div class="col-md-6">
                          <h2 style="text-align: center;">Update Product</h2>

                          <div class="field">
                              <label for="id
                              ">Product id</label><br />

                              {{ Form::input('id', 'id', null, ['class' => 'form-control']) }}
                              
                          </div>   
                        </div>

                        <div class="col-md-6">
                        <div class="field">
                            <label for="featured">Featured</label><br />

                            {{ Form::checkbox('featured', 1, $product->featured, ['class' => 'field']) }}
                            
                        </div>

                        <div class="field">
                            <label for="best_selling">Best selling</label><br />

                            {{ Form::checkbox('best_selling', 1, $product->best_selling, ['class' => 'field']) }}
                        </div>

                        <div class="field">
                            <label for="new_arrival">New arrival</label><br />

                            {{ Form::checkbox('new_arrival', 1, $product->new_arrival, ['class' => 'field']) }}
                        </div>
                        </div>

                       </div>



                    @include("products._form")

                    <div class="divfold50read">

                        <div class="field">
                            <label for="product_img">product image</label>
                                            
                            <input type="file" name="product_img" value="{{ old('product_img') }}">

                        </div>

                        <div class="field">
                            <label for="product_img2">Artwork image</label>
                                            
                            <input type="file" name="product_img2" value="{{ old('product_img2') }}">

                        </div>

                        <div class="field">
                            <label for="product_img3">Second  artwork image</label>
                                            
                            <input type="file" name="product_img3" value="{{ old('product_img3') }}">

                        </div>

                        <hr>




                        <div class="field" style="padding: 10px;">

                             <button type="submit" class="btn btn-primary pull-right">
                                <i class="fa fa-btn fa-user"></i> Update
                             </button>
                        </div>

                    </div>

                    {!! Form::close() !!}
   








 
           
                
            </div>

        

          <div class="modal-footer">
              <button type="button" 
                 class="btn btn-default" 
                 data-dismiss="modal">Close</button>
              </span>
          </div>
        </div>

        
    </div>
</div>



    <script type="text/javascript">
        $('#category').on('change focus hover',function(e){
            console.log(e);

            var cat_id = e.target.value;

            //ajax
            $.get('/ajax-subcat?cat_id=' + cat_id, function(data){
                //success data
                //console.log(data);
                $('#subcategory').empty();
                $.each(data, function(index, subcatObj){
                    $('#subcategory').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                });
            });

        });




        $('#subcategory').on('change focus hover',function(e){
            console.log(e);

            var subcat_id = e.target.value;

            //ajax
            $.get('/ajax-products?subcat_id=' + subcat_id, function(data){
                //success data
                //console.log(data);
                $('#service').empty();
                $.each(data, function(index, serviceObj){
                    $('#service').append('<option value="'+serviceObj.id+'">'+serviceObj.title+'</option>');
                });
            });

        });


jQuery(document).ready(function() {
    jQuery('.denzintro1').addClass("dhidden").viewportChecker({
        classToAdd: 'dvisible animated bounceInUp', // Class to add to the elements when they are visible
        offset: 100    
       });   
});            
        
    </script>

@endsection

