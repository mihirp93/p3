<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RandomUserController extends Controller {

    // controller for route /RandomUser (GET Method)
    public function getShowForm() {
        return view('RandomUser.ShowForm');
    }

    // controller for route /RandomUser (POST method)
    public function postProcessForm(Request $request) {

      $this->validate($request, [
        'numOfUsers' => 'required|integer|between:1,10'
      ]);

      $numOfUsers = $request->input('numOfUsers');
      $includeAddress = $request->input('includeAddress');
      if(isset($includeAddress)) {
        $includeAddress = "on";
      }
      else {
        $includeAddress= "off";
      }
      $includeProfile = $request->input('includeProfile');
      if (isset($includeProfile)) {
        $includeProfile = "on";
      }
      else {
        $includeProfile = "off";
      }

      return view('RandomUser.ProcessForm')->with('numOfUsers', $numOfUsers)
                                           ->with('includeAddress', $includeAddress)
                                           ->with('includeProfile', $includeProfile);
    }

}
