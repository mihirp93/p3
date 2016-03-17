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

        # return the view with the form criteria which will be
        # to generate the random users.
        return view('RandomUser.ProcessForm')->with('numOfUsers', $numOfUsers)
                                             ->with('includeDOB', $includeDOB)
                                             ->with('includeAddress', $includeAddress)
                                             ->with('includeProfile', $includeProfile);
    }
    # postProcessForm()

}
