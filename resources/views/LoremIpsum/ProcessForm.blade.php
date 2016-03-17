@extends('layouts.master')

@section('title')
  Lorem Ipsum Generator
@stop

@section('content')

    <form method="POST" action="http://localhost/p3/public/lorem-ipsum">
      {{ csrf_field() }}
      <input type="text" name="numOfParagraphs" placeholder="number of paragraphs">
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
