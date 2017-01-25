@extends('template')
@section('content')

  <title>Controllers display db data</title>


<!-- @if (count($messages) > 0) --> <!-- Pas obligatoire dans ce cas -->
    @foreach($messages as $message)
    <center>
 		<li  style="margin-top: 50px;">{{$message->contenu_messages}}</li>
 	</center>
    @endforeach
<!-- @endif -->    <!-- Pas obligatoire dans ce cas --> 
</body>
</html>


@endsection