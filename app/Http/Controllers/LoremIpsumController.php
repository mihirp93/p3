<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

use Badcow\LoremIpsum\Generator;

class LoremIpsumController extends Controller {

    // controller for route /LoremIpsum (GET Method)
    public function getShowForm() {
        return view('LoremIpsum.ShowForm');
    }

    // controller for route /LoremIpsum(POST Method)
    public function postProcessForm() {

        if(isset($_POST["numOfParagraphs"])
          && is_numeric($_POST["numOfParagraphs"])
          && $_POST["numOfParagraphs"] > 0
          && $_POST["numOfParagraphs"] < 100) {
          $numOfParagraphs = $_POST["numOfParagraphs"];
          $generator = new Generator();
          $paragraphs = $generator->getParagraphs($numOfParagraphs);
        }
        else {
          $paragraphs = NULL;
        }
        return view('LoremIpsum.ProcessForm')->with('paragraphs',$paragraphs);
    }

}
