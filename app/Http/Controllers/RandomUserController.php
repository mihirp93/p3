<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RandomUserController extends Controller {

    ################################################################
    public function getShowForm() {
    ################################################################
    # Responds to requests to GET /random-user
        return view('RandomUser.ShowForm');
    }
    # getShowForm()

    ################################################################
    public function postProcessForm(Request $request) {
    ################################################################
    # Responds to requests to POST /random-user

        # validate the "number of users" form field.
        $this->validate($request, [
            'numOfUsers' => 'required|integer|between:1,99'
        ]);
        $numOfUsers = $request->input('numOfUsers');

        # set the flag to signal the inclusion of user's DOB.
        $includeDOB = $request->input('includeDOB');
        if(isset($includeDOB)) {
            $includeDOB = "on";
        }
        else {
            $includeDOB = "off";
        }

        # set the flag to signal the inclusion of user's address.
        $includeAddress = $request->input('includeAddress');
        if(isset($includeAddress)) {
            $includeAddress = "on";
        }
        else {
            $includeAddress= "off";
        }

        # set the flag to signal the inclusion of user's profile.
        $includeProfile = $request->input('includeProfile');
        if (isset($includeProfile)) {
            $includeProfile = "on";
        }
        else {
            $includeProfile = "off";
        }

        # generate the users using external package.
        $faker = \Faker\Factory::create();
        $generatedString = "";
        for($i = 0; $i < $numOfUsers; $i++) {
            $generatedString .= "<h2>".$faker->name."</h2>";

            if ($includeDOB === "on") {
              $generatedString .= "<p>".$faker->dateTimeThisCentury->format('Y-m-d')."</p>";
            }
            if($includeAddress === "on") {
              $generatedString .= "<p>".$faker->address."</p>";
            }

            if ($includeProfile === "on") {
              $generatedString .= "<p>".$faker->text."</p>";
            }

            $generatedString .= "<br>";
        }

        # return the view with the generated users and pertinent info(if any).
        return view('RandomUser.ProcessForm')->with('generatedString', $generatedString);
    }
    # postProcessForm()

}
