@extends('layouts.master')

@section('title')
  Lorem Ipsum Generator
@stop

@section('content')

    <form method="POST" action="http://localhost/p3/public/lorem-ipsum">
      {{ csrf_field() }}
      <label for="numOfParagraphs">How many paragraphs?(Max:99)</label>
      <input type="text" name="numOfParagraphs" maxlength="2" size="2">
      <br>
      <input type="submit" value="Generate">
    </form>
    <?php
        foreach($paragraphs as $paragraph){
          echo "<p>";
          echo $paragraph;
          echo "</p>";
        }
    ?>
@stop
