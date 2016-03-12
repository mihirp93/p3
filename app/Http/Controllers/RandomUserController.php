<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class RandomUserController extends Controller {

    // controller for route /RandomUser (GET Method)
    public function getShowForm() {
        return view('RandomUser.ShowForm');
    }

    // controller for route /RandomUser (POST method)
    public function postProcessForm() {
        return view('RandomUser.ProcessForm');
    }

}
