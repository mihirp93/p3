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

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < $numOfUsers; $i++) {
          $users[$i] = $faker->name;
        }

        # set the flag to signal the inclusion of user's DOB.
        $includeDOB = $request->input('includeDOB');
        $birthdays = array();
        if(isset($includeDOB)) {
            $includeDOB = "on";
            for($i = 0; $i < $numOfUsers; $i++) {
              $birthdays[$i] = $faker->dateTimeThisCentury->format('Y-m-d');
            }
        }
        else {
            $includeDOB = "off";
        }

        # set the flag to signal the inclusion of user's address.
        $includeAddress = $request->input('includeAddress');
        $addresses = array();
        if(isset($includeAddress)) {
            $includeAddress = "on";
            for($i = 0; $i < $numOfUsers; $i++) {
              $addresses[$i] = $faker->address;
            }
        }
        else {
            $includeAddress= "off";
        }

        # set the flag to signal the inclusion of user's profile.
        $includeProfile = $request->input('includeProfile');
        $profiles = array();
        if (isset($includeProfile)) {
            $includeProfile = "on";
            for($i = 0; $i < $numOfUsers; $i++) {
              $profiles[$i] = $faker->text;
            }
        }
        else {
            $includeProfile = "off";
        }

        # return the view with the generated users and pertinent info(if any).
        return view('RandomUser.ProcessForm')->with('users',$users)
                                             ->with('birthdays', $birthdays)
                                             ->with('addresses', $addresses)
                                             ->with('profiles',$profiles);
    }
    # postProcessForm()

}
