<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 28.09.2017
 * Time: 16:58
 */

$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root . "/vulcan/config.php";

/**
 * This template takes the names of the css stylesheets and the
 * @param $stylesheetNames
 * @return string
 */
function stylesheet_links($stylesheetNames)
{
    $tempStrings = "";
    foreach ($stylesheetNames as $name) {
        $path = URL_STYLES . $name;
        // In case the name does not already contain the CSS file extension, adds it
        if ( strpos($name, ".css") == false ){
            $path .= ".css";
        }
        // Adding a linking to the stylesheet to the temp string
        $tempStrings .= "<link href='$path' type='text/css' rel='stylesheet'>\r\n";
    }

    // Returning the complete string with all the stylesheet linkings
    return $tempStrings;
}

function script_links($scriptNames, $async=TRUE){
    $tempStrings = "";
    foreach ($scriptNames as $name) {
        $path = URL_SCRIPTS . $name;
        // In case the name does not already contain the CSS file extension, adds it
        if ( strpos($name, ".js") == false ){
            $path .= ".js";
        }
        // Adding a linking to the stylesheet to the temp string
        if ($async === TRUE) {
            $tempStrings .= "<script src='$path' async></script>";
        } else {
            $tempStrings .= "<script src='$path'></script>";
        }
    }

    // Returning the complete string with all the stylesheet linkings
    return $tempStrings;
}
