@extends('page')

@section('content')
  <div>Name: {{$user->name}}</div>
  <div>Age: {{$user->age}}</div>
  <div>City: {{$user->city}}</div>

  <a href="/user">Back to all records</a>
@endsection


