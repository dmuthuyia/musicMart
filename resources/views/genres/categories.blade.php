@extends('layouts.nyumba')

@section('kichwa')

    Categories

@endsection

@section('sebule')

<div class="divfold50">
<div class="divfold50read">

  <div class="row">
    <div class="col-md-6">

    <h3>Add new Category</h3>

    <div class="fireplace2singlespro">


            <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('categories.new') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
               <div style="padding: 10px; margin-bottom: 10px;">

                        <div class="field">
                            <label for="name">Category Name</label>
                                            
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="field">
                            <label for="description">Description</label>
                                            
                            <textarea id="description" type="text" class="form-control" name="description" value="{{ old('description') }} 'size' => '400x500'"></textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>



                        <div class="field">
                            <label for="category_img">category image</label>
                                            
                            <input type="file" name="category_img" value="{{ old('category_img') }}">

                        </div>

                  </div>


                        <div class="field" style="padding: 10px;">

                             <button type="submit" class="btn btn-primary pull-right">
                                <i class="fa fa-btn fa-user"></i> Save
                             </button>
                        </div>

              

            </form>

    </div>    
    </div>

    <div class="col-md-6">
    
    <h3>Add new Sub-category</h3>
    <div class="fireplace2singlespro">


            <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('subcategories.new') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
               <div style="padding: 10px; margin-bottom: 10px;">

                        <div class="field">
                            <label for="name">sub-category Name</label>
                                            
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>


                            <div class="field">
                                <label for="category">Category: </label><br>

                              <select class="form-control" name="category_id" id="category">
                                @foreach($categories as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>

                            </div>



                        <div class="field">
                            <label for="description">Description</label>
                                            
                            <textarea id="description" type="text" class="form-control" name="description" value="{{ old('description') }} 'size' => '400x500'"></textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>



                        <div class="field">
                            <label for="subcategory_img">Sub-category image</label>
                                            
                            <input type="file" name="subcategory_img" value="{{ old('subcategory_img') }}">

                        </div>

                  </div>


                        <div class="field" style="padding: 10px;">

                             <button type="submit" class="btn btn-primary pull-right">
                                <i class="fa fa-btn fa-user"></i> Save
                             </button>
                        </div>

              

            </form>
            
    </div>    

    </div>
  </div>








  <div class="row">
    <div class="col-md-6">

     <h3>Categories</h3>
      <div class="menu">
        <div class="accordion">
         <div class="accordion-group">
              
                <div class="accordion-inner">
                <div style="height:350px; overflow-y: scroll; margin-bottom: 20px;">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>
                      Id
                      </th>
                      <th>
                      Name
                      </th>
                      <th>
                      Description
                      </th>
                      <th>
                      Image
                      </th>
                      </tr>
                    </thead>   
                    <tbody>
                    @foreach($categories as $category)
                      <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td><img height="50" width="50" src="<?php echo asset("uploads/categories/$category->category_img")?>"></img></td>
                      </tr>
                    @endforeach
                      
                    </tbody>
                  </table>

                </div>
                </div>

            </div>
      </div>
      </div>
    
      
        
    </div>

    <div class="col-md-6">



     <h3>Sub categories</h3>
      <div class="menu">
        <div class="accordion">
         <div class="accordion-group">
              
                <div class="accordion-inner">
                <div style="height:350px; overflow-y: scroll; margin-bottom: 20px;">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>
                      Id
                      </th>
                      <th>
                      Name
                      </th>
                      <th>
                      Category id
                      </th>
                      <th>
                      Image
                      </th>
                      </tr>
                    </thead>   
                    <tbody>
                    @foreach($subcategories as $subcategory)
                      <tr>
                        <td>{{$subcategory->id}}</td>
                        <td>{{$subcategory->name}}</td>
                        <td>{{$subcategory->category_id}}</td>
                        <td><img height="50" width="50" src="<?php echo asset("uploads/subcategories/$subcategory->subcategory_img")?>"></img></td>
                      </tr>
                    @endforeach
                      
                    </tbody>
                  </table>

                </div>
                </div>

            </div>
      </div>
      </div>

        
    </div>
  
  </div>


</div>
</div>



@stop