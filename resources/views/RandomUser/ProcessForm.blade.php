@extends('layouts.master')

@section('title')
  Random Generator
@stop

@section('content')
    <form method="POST" action="http://localhost/p3/public/random-user">
     {{ csrf_field() }}
     <label for="numOfUsers">How many users?(Max:99)</label>
     <input type="text"
            name="numOfUsers"
            maxlength="2"
            size="2"
            value="{{ old('numOfUsers') }}">
      <br>
      <input type="checkbox" name="includeDOB"><label for="includeDOB">Include Date of Birth</label>
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

                if ($includeDOB === "on") {
                  echo "<p>";
                  echo $faker->dateTimeThisCentery->format('Y-m-d');
                  echo "</p>";
                }
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
    @endif
@stop
