
<div class="divfold50read">

           

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
               <div style="padding: 10px; margin-bottom: 10px;">


                        <div class="field">
                            <label for="title">Name</label>
                                            
                            <input id="title" type="text" class="form-control" name="title" value="{{$product->title }}">

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>


                            <div class="field">
                                <label for="category">Category: </label><br>

                              <select class="form-control" name="category" id="category">

                               <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                                @foreach($categories as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>

                            </div>


                            <div class="field">
                                <label>Sub category</label>
                                <select class="form-control input-sm" name="subcategory" id="subcategory">
                                  <option value="{{ $product->subcategory->id }}">{{ $product->subcategory->name }}</option>
                                    <option value=""></option>
                                    
                                </select>
                                
                            </div>



                        <div class="field">
                            <label for="description">Description</label>
                                            
                            <textarea id="description" type="text" class="form-control" name="description" value="{{$product->description }} 'size' => '400x500'"></textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>



                        <div class="field">
                            <label for="minprice">price</label>
                                            
                            <input id="minprice" type="number" class="form-control" name="minprice" value="{{$product->minprice }}">

                            @if ($errors->has('minprice'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('minprice') }}</strong>
                                </span>
                            @endif
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