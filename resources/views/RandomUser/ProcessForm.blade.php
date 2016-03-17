@extends('layouts.master')

@section('title')
  Random Generator
@stop

@section('content')
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
    <br>
    <br>
    @if($numOfUsers > 0)
        <?php
            $faker = Faker\Factory::create();
            for($i = 0; $i < $numOfUsers; $i++) {
                echo "<h2>";
                echo $faker->name;
                echo "</h2>";
                if($includeAddress === "on") {
                  echo "<p>";
                  echo $faker->address;
                  echo "</p>";
                }

                if ($includeProfile === "on") {
                  echo "<p>";
                  echo $faker->text;
                  echo "</p>";
                }
            }
        ?>
    @else
        <p>Invalid input!</p>
    @endif
@stop
