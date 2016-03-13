@extends('layouts.master')

@section('title')
  Random User Generator
@stop

@section('content')
  <form method="POST">
    {{ csrf_field() }}
    <input type="text" name="numOfUsers" placeholder="number of users">
    <input type="submit" value="Generate">
  </form>
@stop
