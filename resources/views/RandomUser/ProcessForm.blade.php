@extends('layouts.master')

@section('title')
  Random Generator
@stop

@section('head')
<link type="text/css" rel="stylesheet" href="css/styles.css">
@stop

@section('content')
  <div class="my_container">
    <h1>Random User Generator</h1>
    <div class="jumbotron">
        <form class="form-horizontal" method="POST" action="/random-user">
             {{ csrf_field() }}
             <div class="form-group">
                 <label>How many users?(Max:99)
                   <input type="text"
                          name="numOfUsers"
                          value="{{ old('numOfUsers') }}"
                          maxlength="2"
                          size="2"
                          class="form-control">
                </label>
             </div>
             <div class="checkbox">
                <label>
                  <input type="checkbox" name="includeDOB"> Include Date of Birth
                </label>
            </div>
            <div class="checkbox">
               <label>
                 <input type="checkbox" name="includeAddress"> Include Address
               </label>
           </div>
           <div class="checkbox">
              <label>
                <input type="checkbox" name="includeProfile"> Include a brief profile
              </label>
          </div>
             <button type="submit" class="btn btn-default">Generate Users</button>
        </form>
    </div>

    @if($numOfUsers > 0)
        <?php
            $faker = Faker\Factory::create();
            for($i = 0; $i < $numOfUsers; $i++) {
                echo "<h2>";
                echo $faker->name;
                echo "</h2>";

                if ($includeDOB === "on") {
                  echo "<p>";
                  echo $faker->dateTimeThisCentury->format('Y-m-d');
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
</div>
@stop
