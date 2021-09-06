@extends('layout')
@section('title',"usuarios registrados")
@section('content')

<br>

    <h1>  {{ $title }} </h1>

    <hr>

      
    @if(!@empty($user))

            <ul>
          
                 @foreach ($user as $users)
                <li> {{ $users }} </li>
                @endforeach 

             </ul>

    @else

         <p>no hay usuarios Registrados</p>

     @endif

@endsection



     
    
     
    

