@extends('layouts.master')

@section('title')
    Developer's Best Friend
@stop

@section('content')
<div class="jumbotron">
   <h1>Developer's Best Friend</h1>
   <p class="lead">
       Hello there! Are you in need of placeholder data to test out the
       kinks of your application(or maybe you're just here to have fun!).
       Anyhow, you came to the right place. Below are some tools that
       are created specifically for you! I hope you enjoy using them
       as much as I enjoyed developing them.
   </p>
   <hr>
   <hr>
   <h2>Lorem Ipsum Generator</h2>
   <p>
       Generate lorem ipsum text. It's simple. All you have to do is provide
       the number of paragraphs.And, I will do the heavy lifting to generate
       the desired number of paragraphs with lorem ipsum text.
   </p>
   <p>
       <a href="/lorem-ipsum">Click to generate text!</a>
   </p>
   <h2>Random User Generator</h2>
   <p>
      Generate random users. Again, it's pretty simple. All you have to do is
      provide the number of users desired and any pertinent information
      (like Date of Birth,Brief description, etc).You sit back and relax!!
      And, I will go and do the work for you.
   </p>
   <p>
      <a href="/random-user">Click to generate users!</a>
   </p>
</div>
@stop
