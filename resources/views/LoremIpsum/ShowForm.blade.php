@extends('layouts.master')

@section('title')
  Lorem Ipsum Generator
@stop

@section('content')
  @if(count($errors) > 0)
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  @endif
  <form method="POST" action="http://localhost/p3/public/lorem-ipsum">
    {{ csrf_field() }}
    <input type="text" name="numOfParagraphs" placeholder="number of paragraphs">
    <input type="submit" value="Generate">
  </form>

@stop
