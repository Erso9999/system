@extends('page')

@section('content')
  <div>Name: {{$user->name}}</div>
  <div>Age: {{$user->age}}</div>
  <div>City: {{$user->city}}</div>
@endsection
