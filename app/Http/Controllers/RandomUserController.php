<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class RandomUserController extends Controller {

    // controller of route GET /RandomUser
    public function getShowForm() {
        return view('RandomUser.ShowForm');
    }

    // controller of route POST /RandomeUser
    public function postProcessForm() {
        return view('RandomUser.ProcessForm');
    }

}
