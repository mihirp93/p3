@extends('layouts.master')

@section('title')
  Random Generator
@stop

@section('content')
    <form method="POST">
      {{ csrf_field() }}
      <input type="text" name="numOfUsers" placeholder="number of users">
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
                echo "<p>";
                echo $faker->address;
                echo "</p>";
                echo "<p>";
                echo $faker->text;
                echo "</p>";
            }
        ?>
    @else
        <p>Invalid input!</p>
    @endif
@stop
