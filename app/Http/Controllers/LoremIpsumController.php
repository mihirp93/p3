<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;
use Illuminate\Http\Request;

class LoremIpsumController extends Controller {


    ##################################################################
    public function getShowForm() {
    ##################################################################
    # Responds to requests to GET /lorem-ipsum
        return view('LoremIpsum.ShowForm');
    }
    # getShowForm()

    ##################################################################
    public function postProcessForm(Request $request) {
    ##################################################################
    # Responds to requests to POST /lorem-ipsum

        # validate the form field.
        $this->validate($request, [
          'numOfParagraphs' => 'required|integer|between:1,99'
        ]);

        # use the external package to generate the desired number of paragraphs.
        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($request->input('numOfParagraphs'));

        # return the view with the generated paragraphs.
        return view('LoremIpsum.ProcessForm')->with('paragraphs',$paragraphs);
    }

}
