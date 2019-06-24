@extends('mails.mailmaster')

@section('mailsebule')


email:		{{ $email }} <br>
FirstName:	{{ $FirstName }} <br>
LastName:	{{ $LastName }} <br>
UserName:	{{ $UserName }} <br>
dobyear:	{{ $dobyear }} <br>
is_female:	{{ $is_female }} <br>
Age:		{{ $Age }} <br>
Race:		{{ $Race }} <br>
Country:	{{ $Country }} <br>
LookingFor:	{{ $LookingFor }} <br>
Education:	{{ $Education }} <br>
Religion:	{{ $Religion }} <br>

@endsection

@section('ads')

    

@endsection