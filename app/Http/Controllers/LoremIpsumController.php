<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

use Badcow\LoremIpsum\Generator;
use Illuminate\Http\Request;


class LoremIpsumController extends Controller {

   /**
   * Responds to requests to GET /lorem-ipsum
   */
    public function getShowForm() {
        return view('LoremIpsum.ShowForm');
    }

    /**
     * Responds to requests to POST /lorem-ipsum
    */
    public function postProcessForm(Request $request) {
        $this->validate($request, [
          'numOfParagraphs' => 'required|integer|between:1,99'
        ]);

        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($request->input('numOfParagraphs'));

        return view('LoremIpsum.ProcessForm')->with('paragraphs',$paragraphs);
    }

}
