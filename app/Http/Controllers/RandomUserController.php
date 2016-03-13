<?php

namespace p3\Http\Controllers;

class RandomUserController extends Controller {

    // controller for route /RandomUser (GET Method)
    public function getShowForm() {
        return view('RandomUser.ShowForm');
    }

    // controller for route /RandomUser (POST method)
    public function postProcessForm() {

        if(isset($_POST["numOfUsers"])
           && is_numeric($_POST["numOfUsers"])
           && $_POST["numOfUsers"] > 0
           && $_POST["numOfUsers"] < 10) {
            $numOfUsers = $_POST["numOfUsers"];
        }
        else {
            $numOfUsers = 0;
        }
        return view('RandomUser.ProcessForm')->with('numOfUsers',$numOfUsers);
    }

}
