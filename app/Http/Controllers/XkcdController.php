<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class XkcdController extends Controller {

    ################################################################
    public function getShowForm() {
    ################################################################
    # Responds to requests to GET /xkcd
        return view('Xkcd.ShowForm');
    }
    # getShowForm()

    ################################################################
    public function postProcessForm(Request $request) {
    ################################################################
    # Responds to requests to POST /xkcd

      # validate the "number of words" form field.
      $this->validate($request, [
          'numOfWords' => 'required|integer|between:1,9'
      ]);
      $numOfWords = $request->input('numOfWords');

      # set the flag to signal the inclusion of numbers in the password.
      $includeNumbers = $request->input('includeNumbers');
      if(isset($includeNumbers)) {
          $includeNumbers = "on";
      }
      else {
          $includeNumbers = "off";
      }

      # set the flag to signal the inclusion of symbols in the password.
      $includeSymbols = $request->input('includeSymbols');
      if(isset($includeSymbols)) {
          $includeSymbols = "on";
      }
      else {
          $includeSymbols = "off";
      }

      # set the flag to signal the inclusion of symbols in the password.
      $useCamelCase = $request->input('useCamelCase');
      if(isset($useCamelCase)) {
          $useCamelCase = "on";
      }
      else {
          $useCamelCase = "off";
      }

      # number of passwords to generate
      $numOfPasswords = 10;

      # list of numbers.
      $numbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

      # list of special symbols.
      $symbols = array('~', '!', '#', '$', '%', '^', '&', '*');

      $passwords = [];
      for ($i = 0; $i < $numOfPasswords; $i++) {
          $passwords[$i] =  generatePassword($numOfWords, $includeNumbers, $includeSymbols,
                                             $useCamelCase,$numbers, $symbols);
      }

      # return the view with the generated passwords.
      return view('Xkcd.ProcessForm')->with('passwords',$passwords);

    }
    # postProcessForm()

}

##############################################################################
function generatePassword($numWords, $numbersSwitch, $symbolsSwitch,
                          $camelCaseSwitch, $num, $symb) {
##############################################################################
# Generate a password based on the criteria provided as follows :
# 1. How many word to include in the password?
# 2. Should numbers be included?
# 3. Should special symbols be included?
# 4. Should the password be formatted in a camelcase format?

    # hold the generated password.
    $password = "";

    # load list of words from a text file
    $words = file("data/nolls-word-list.txt",FILE_IGNORE_NEW_LINES);

    # random keys to select random words from the word list.
    $randKeys = array_rand($words, $numWords);

    # number of random keys
    $randLen = count($randKeys);

    if ($randLen === 1) {
        $randomWord = $words[$randKeys];
        if ($camelCaseSwitch === "on") {
            $randomWord = ucfirst($randomWord);
        }
        $password = $randomWord;
    }
    else {
        for ($i = 0; $i < $randLen; $i++) {
            $randomWord = $words[$randKeys[$i]];
            if ($camelCaseSwitch === "on") {
                $randomWord = ucfirst($randomWord);
            }
            $password = $password.$randomWord;
        }
    }

    # append a number to the password.
    if ($numbersSwitch === "on") {
        $randomNumber = $num[array_rand($num,1)];
        $password = $password.$randomNumber;
    }

    # append a special symbol to the password.
    if ($symbolsSwitch === "on") {
        $randomSymbol = $symb[array_rand($symb,1)];
        $password = $password.$randomSymbol;
    }

    # return the generated password
    return $password;
}
# generatePassword()
