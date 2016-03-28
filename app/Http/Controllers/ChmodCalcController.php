<?php

namespace p3\Http\Controllers;
use p3\Http\Controllers\Controller;


class ChmodCalcController extends Controller {

    ################################################################
    public function getShowForm() {
    ################################################################
    # Responds to requests to GET /chmod-calc
        return view('ChmodCalc.ShowForm');
    }
    # getShowForm()

    ################################################################
    public function postProcessForm() {
    ################################################################
    # Responds to requests to POST /chmod-calc

      # initialize variables.
      $ownerInt = 0;
      $groupInt = 0;
      $allInt = 0;
      $error_exists = 0;
      $error_string = NULL;

      if (isset($_POST["ownerRead"])
          || isset($_POST["ownerWrite"])
          || isset($_POST["ownerExecute"])
          || isset($_POST["groupRead"])
          || isset($_POST["groupWrite"])
          || isset($_POST["groupExecute"])
          || isset($_POST["allRead"])
          || isset($_POST["allWrite"])
          || isset($_POST["allExecute"])) {

          # calculate based on the checked "read" checkboxes
          if (isset($_POST["ownerRead"])) {
            $ownerInt = $ownerInt + 4;
          }
          if (isset($_POST["groupRead"])) {
            $groupInt = $groupInt + 4;
          }
          if (isset($_POST["allRead"])) {
            $allInt = $allInt + 4;
          }

          # calculate based on the checked "write" checkboxes
          if (isset($_POST["ownerWrite"])) {
            $ownerInt = $ownerInt + 2;
          }
          if (isset($_POST["groupWrite"])) {
            $groupInt = $groupInt + 2;
          }
          if (isset($_POST["allWrite"])) {
            $allInt = $allInt + 2;
          }

          # calculate based on the checked "execute" checkboxes
          if (isset($_POST["ownerExecute"])) {
            $ownerInt = $ownerInt + 1;
          }
          if (isset($_POST["groupExecute"])) {
            $groupInt = $groupInt + 1;
          }
          if (isset($_POST["allExecute"])) {
            $allInt = $allInt + 1;
          }
      }
      else {
          $error_exists = 1;
          $error_string = "Unable to calculate.  Please select at least one checkbox";
      }
      return view('ChmodCalc.ProcessForm')->with('error_exists', $error_exists)
                                          ->with('error_string', $error_string)
                                          ->with('ownerInt', $ownerInt)
                                          ->with('groupInt', $groupInt)
                                          ->with('allInt', $allInt);

    }
    # postProcessForm()

}
