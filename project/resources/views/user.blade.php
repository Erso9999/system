@extends('page')

@section('content')
 <!--<div>//$name</div>-->
 @foreach ($users as $user)
  <div>
    <div>{{$user->id}}. {{$user->name}} - {{$user->age}} - {{$user->city}}
  </div>
 @endforeach</div>
@endsection
