@extends('mails.mailmaster')

@section('mailsebule')



    <h2>Hello {{ $FirstName }}</h2>

        <div>
            Thank you for registering.<br>
            Kenyan love welcomes you.<br>
            Please follow the link below to verify your email address
            {{ URL::to('register/verify/' . $confirmation_code) }}.<br/>

        </div>


@endsection

@section('ads')

    

@endsection