@extends('layouts.master')

@section('title')
  Random User Generator
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
               @if(count($errors) > 0)
                  <div class="alert alert-danger" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      @foreach ($errors->all() as $error)
                      <span class="sr-only">Error:</span>
                        {{ $error }}
                      @endforeach
                  </div>
              @endif
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
          <div class="form-group">
             <button type="submit" class="btn btn-default">Generate Users</button>
          </div>   
        </form>
    </div>
  </div>
@stop
