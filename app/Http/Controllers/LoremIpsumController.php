<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class LoremIpsumController extends Controller {

    // controller of route GET /index.php
    public function getIndex() {
        return view('LoremIpsum.index');
    }

    // controller of route GET /LoremIpsum
    public function getShowForm() {
        return view('LoremIpsum.ShowForm');
    }

    // controller of route POST /LoremIpsum
    public function postProcessForm() {
        return view('LoremIpsum.ProcessForm');
    }

}
