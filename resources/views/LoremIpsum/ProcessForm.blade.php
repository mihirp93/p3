@extends('layouts.master')

@section('title')
  Lorem Ipsum Generator
@stop

@section('head')
<link type="text/css" rel="stylesheet" href="css/styles.css">
@stop

@section('content')
  <div class="my_container">
    <h1>Lorem Ipsum Text Generator</h1>
    <div class="jumbotron">
        <form class="form-horizontal" method="POST" action="lorem-ipsum">
             {{ csrf_field() }}
             <div class="form-group">
               <label>How many paragraphs?(Max:99)
                 <input type="text"
                        name="numOfParagraphs"
                        value="{{ old('numOfParagraphs') }}"
                        maxlength="2"
                        size="2"
                        class="form-control">
              </label>
             </div>
             <button type="submit" class="btn btn-default">Generate Text</button>
        </form>
    </div>
  </div>
  <?php
      foreach($paragraphs as $paragraph){
        echo "<p>";
        echo $paragraph;
        echo "</p>";
      }
  ?>

@stop
