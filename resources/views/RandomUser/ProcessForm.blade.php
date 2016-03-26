@extends('layouts.master')

@section('title')
  Random Generator
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
             <div class="my_check_group">
                 <label class="checkbox">
                   <input type="checkbox" name="includeDOB"> Include Date of Birth
                 </label>
                <label class="checkbox">
                  <input type="checkbox" name="includeAddress"> Include Address
                </label>
               <label class="checkbox">
                 <input type="checkbox" name="includeProfile"> Include a brief profile
               </label>
           </div>
             <button type="submit" class="btn btn-default">Generate Users</button>
        </form>
    </div>
    @if(isset($generatedString))
      <?php echo $generatedString ?>
    @endif
</div>
@stop
