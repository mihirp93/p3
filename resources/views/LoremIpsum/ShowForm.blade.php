@extends('layouts.master')

@section('title')
  Lorem Ipsum Generator
@stop

@section('content')

  <form method="POST">
    {{ csrf_field() }}
    <input type="text" name="numOfParagraphs" placeholder="number of paragraphs">
    <input type="submit" value="Generate">
  </form>
@stop
