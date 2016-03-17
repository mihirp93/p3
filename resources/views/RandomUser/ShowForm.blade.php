@extends('layouts.master')

@section('title')
  Random User Generator
@stop

@section('content')
  @if(count($errors) > 0)
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  @endif
  <form method="POST" action="http://localhost/p3/public/random-user">
   {{ csrf_field() }}
    <input type="text" name="numOfUsers" placeholder="number of users">
    <br>
    <input type="checkbox" name="includeAddress"><label for="includeAddress">Include Address</label>
    <br>
    <input type="checkbox" name="includeProfile"><label for="includeProfile">Include a brief profile</label>
    <br>
    <input type="submit" value="Generate">
  </form>
@stop
