@extends('layouts.nyumba')

@section('sebule')


<div class="divfold50read">

    <div class="row">
        <div class="divfold52a">
            @foreach($albums as $album)
            <div class="col-md-4">
                <div class="denzintro2">

                    <div class="fireplace2singlespro">

                        <div class="fireplace2singlesproinner1">

                            <div class="image" style="margin-bottom: 5px;">
                                <img height="170" src="<?php echo asset("uploads/albums/$album->album_img")?>"></img>
                                <div class="textoverlay1"><span><em><span class='spacer'></span><br /><span
                                                class='spacer'></span></em></span></div>

                            </div>


                            <div class="caption">

                                <a href="{{ url('albums/show', [$album->id]) }}">
                                    <h6>{{$album->title}}</h6>
                                </a>

                                Price KES : <b>{{$album->price}}</b>
                            </div>

                        </div>
                        <div class="fireplace2singlesproinner2">
                            <form action="/cart/add" name="add_to_cart" method="post" accept-charset="UTF-8">
                                <input type="hidden" name="album" value="{{$album->id}}" />
                                <label style="text-align: center;">Order now: Order Amount</label>

                                <input type="number" name="amount" pattern="[0-9]" style="margin-bottom: 2px;"
                                    class="form-control" value="1" />

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
    <div style="padding: 10px;">
        <?php echo $albums->render(); ?>
    </div>

</div>


<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('.denzintro2').addClass("dhidden").viewportChecker({
        classToAdd: 'dvisible animated zoomInDown', // Class to add to the elements when they are visible
        offset: 100
    });
});
</script>


@stop