@extends('mails.mailmaster')

@section('mailsebule')
<br>Hello {{ Auth::user()->FirstName }},
<br>
Your report on Kenyan love dating site abuse by user: {{ $userid }} User name: {{ $UserName }} has been received.
We will look into it and decide appropriate measures.
<br>
Thank you very much.
@endsection

@section('ads')

    

@endsection