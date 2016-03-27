@extends('layouts.master')

@section('title')
  Random User Generator
@stop

@section('content')
  <div class="my_container">
    <h1>Xkcd Password Generator</h1>
    <div class="jumbotron">
        <form class="form-horizontal" method="POST" action="#">
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
              <label>How many words?(Max:9)
                 <input type="text"
                        name="numOfWords"
                        value="{{ old('numOfWords') }}"
                        maxlength="1"
                        size="1"
                        class="form-control">
              </label>
             </div>
            <div class="my_check_group">
                <label class="checkbox">
                  <input type="checkbox" name="includeNumbers"/>Include a number
                </label>
                <label class="checkbox">
                  <input type="checkbox" name="includeSymbols"/>Include a symbol
                </label>
                <label class="checkbox">
                  <input type="checkbox" name="useCamelCase"/>Apply camelcase
                </label>
          </div>
          <div class="form-group">
             <button type="submit" class="btn btn-default">Generate password</button>
          </div>
        </form>
    </div>
  </div>
@stop
