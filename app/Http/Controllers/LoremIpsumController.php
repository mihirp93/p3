<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class LoremIpsumController extends Controller {

    // controller for route /LoremIpsum (GET Method)
    public function getShowForm() {
        return view('LoremIpsum.ShowForm');
    }

    // controller for route /LoremIpsum(POST Method)
    public function postProcessForm() {
        return view('LoremIpsum.ProcessForm');
    }

}
