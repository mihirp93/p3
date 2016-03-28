@extends('layouts.master')

@section('title')
  Chmod Permissions Calculator
@stop

@section('content')
  <div class="my_container">
    <h1>Chmod Permissions Calculator</h1>
    <div class="jumbotron">
        <form class="form-horizontal" method="POST" action="#">
             {{ csrf_field() }}
               @if($error_exists === 1)
                  <div class="text-warning">
                      <p>{{ $error_string }}</p>
                  </div>
              @else
                <div class="text-success">
                  <p>{{ $ownerInt }} {{ $groupInt }} {{ $allInt }}</p>
                </div>
              @endif
            <table class="table table-striped">
                <thead>
                     <tr>
                       <th>Permission</th>
                       <th>Read</th>
                       <th>Write</th>
                       <th>Execute</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                 <td>Owner</td>
                  <td><input type="checkbox" name="ownerRead"></td>
                  <td><input type="checkbox" name="ownerWrite"></td>
                  <td><input type="checkbox" name="ownerExecute"></td>
                </tr>
                <tr>
                  <td>Group</td>
                  <td><input type="checkbox" name="groupRead"></td>
                  <td><input type="checkbox" name="groupWrite"></td>
                  <td><input type="checkbox" name="groupExecute"></td>
                </tr>
                <tr>
                  <td>All</td>
                  <td><input type="checkbox" name="allRead"></td>
                  <td><input type="checkbox" name="allWrite"></td>
                  <td><input type="checkbox" name="allExecute"></td>
                </tr>
            </tbody>
          </table>
          <div class="form-group">
             <button type="submit" class="btn btn-default">Calculate</button>
          </div>
        </form>
    </div>
  </div>
@stop
