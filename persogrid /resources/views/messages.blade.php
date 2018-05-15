@extends('layout.app')
@section('content')
    <h1>Messages</h1>
    @if(count($messages)>0)
    @foreach ($messages as $message)
    <ul class="list-group">
        <li class="list-group-item">Name :{{$message->name}}</li>
        <li class="list-group-item">Surname :{{$message->surname}}</li>
        <li class="list-group-item">Email :{{$message->name}}</li>
        <li class="list-group-item">Messages :{{$message->name}}</li>

    </ul>
    @endforeach
    @endif
@endsection
@section('sidebar')
    @parent
    <p>This</p>>
@endsection