@extends('layouts.master')

@section('title')
  Random User Generator
@stop

@section('content')

  <form method="POST">
    {{ csrf_field() }}
    <input type="text" name="numOfRandomUsers" placeholder="number of random users">
    <input type="submit" value="Generate">
  </form>
@stop
