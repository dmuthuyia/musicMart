@extends('layouts.nyumba')

@section('kichwa')

    Trybs: {{ $user->FirstName }} Profile

@endsection

@section('sebule')

<section class="row new-whistle">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Your profile</h3></header>
            <form action="{{ route('profile.save') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" name="FirstName" class="form-control" value="{{ $user->FirstName }}" id="FirstName">
                </div>
                <div class="form-group">
                    <label for="mypic">mypic (only .jpg)</label>
                    <input type="file" name="mypic" class="form-control" id="mypic">
                </div>
                <button type="submit" class="btn btn-primary">Save profile</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
    @if (Storage::disk('local')->has($user->FirstName . '-' . $user->id . '.jpg'))
        <section class="row new-whistle">
            <div class="col-md-6 col-md-offset-3">
                <img src="{{ route('profile.picture', ['filename' => $user->FirstName . '-' . $user->id . '.jpg']) }}" alt="" class="img-responsive">
            </div>
        </section>
    @endif


@endsection