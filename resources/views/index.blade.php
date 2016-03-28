@extends('layouts.master')

@section('title')
    Developer's Best Friend
@stop

@section('content')
<div class="jumbotron">
   <h1>Developer's Best Friend</h1>
   <p class="lead">
       Hello there! Are you in need of placeholder data to test out the
       design kinks of your application(or maybe you're just here to have fun!).
       Anyhow, you came to the right place. Below are some tools that
       are created specifically for you! I hope you enjoy using them
       as much as I enjoyed developing them.
   </p>
   <hr>
   <hr>
   <h2>Lorem Ipsum</h2>
   <p>
       It's simple. All you have to do is provide
       the number of paragraphs.And, I will do the heavy lifting to generate
       the desired number of paragraphs with lorem ipsum text.
   </p>
   <p>
       <a href="/lorem-ipsum">Get lorem ipsum text!</a>
   </p>
   <h2>Random Users</h2>
   <p>
       Again, it's pretty simple. All you have to do is
      provide the number of users desired and any other extra information
      (like date of birth,brief description, etc).You sit back and relax!!
      And, I will go and do the work for you.
   </p>
   <p>
      <a href="/random-user">Click to generate random users!</a>
   </p>
   <h2>Xkcd Passwords</h2>
   <p>
      Generate easy to remember passwords. This is a great tool if you need
      passwords to use for your placeholder("dummy") user accounts.
   </p>
   <p>
      <a href="/xkcd">Click to generate xkcd passwords!</a>
   </p>
   <h2>Permissions Calculator</h2>
   <p>
      Ever had difficulty using the "chmod" utility to give proper permissions to
      different types of users? Well, this is the tool for you then. Just select
      the pertinent checkboxes. And, a number will be calculated which then you
      can use as argument to the chmod utility to modify permissions for a
      particular file or directory.
   </p>
   <p>
      <a href="/chmod-calc">Take me to permissions calculator!</a>
   </p>
</div>
@stop
