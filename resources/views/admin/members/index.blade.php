@foreach($users as $user)
<!--<li>{!! $user['name'] !!}   {!! $user['email']!!}</li>--> 
{{ $user['name'] }}
@endforeach

