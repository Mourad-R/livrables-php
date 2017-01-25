@extends('template')
@section('content')

  <title>Controllers display db data</title>


<!-- @if (count($messages) > 0) --> <!-- Pas obligatoire dans ce cas -->
    @foreach($messages as $message)
    <center>
 		<a href='/messageids/{{$message->id}}' style="margin-top: 50px;">{{$message->id}}</a>
 	</center>
    @endforeach
<!-- @endif -->    <!-- Pas obligatoire dans ce cas --> 
</body>
</html>


@endsection