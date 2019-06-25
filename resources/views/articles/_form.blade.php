
<form enctype="multipart/form-data" role="form" method="POST" action="{{ route('article.post') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
   <div style="padding: 10px; margin-bottom: 10px;">

            <div class="field">
                <label for="title">Title</label>
                                
                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>


            <div class="field">
                <label for="body">Body</label>
                                
                <textarea id="body" type="text" class="form-control" name="body" value="{{ old('body') }} 'size' => '400x500'"></textarea>

                @if ($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>


            <div class="field">
                <label for="url">Url</label>
                                
                <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}">

            </div>


            <div class="field"> 
                <label for="tags">Tags</label>
                                
                <input id="tags" type="text" class="form-control" name="tags" value="{{ old('tags') }}">

            </div>

      </div>


            <div class="field" style="padding: 10px;">

                 <button type="submit" class="btn btn-primary pull-right">
                    <i class="fa fa-btn fa-user"></i> Save
                 </button>
            </div>

  

</form>