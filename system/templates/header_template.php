<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 28.09.2017
 * Time: 18:52
 */


function header($headerLogo, $headerLogoLink, $headerElementLinkArray)
{
    $elementString = "";
    // Creating the Elements from the passed array
    $count = 1;
    foreach ($headerElementLinkArray as $name => $link) {
        $lastID = "";
        if ($count == sizeof($headerElementLinkArray)){
            $lastID = "id='last-header-element'";
        }
        $elementString .= "
<div class='header-element'>
<a class='header-link' href='$link' $lastID>$name</a>
</div>
";
    }

   $tempString = "
<div class='header-wrapper'>
<div class='header-content-wrapper'>
<a class='header-element' id='header-logo' href='$headerLogoLink'>$headerLogo</a>
</div>
$elementString
</div>
";

    return $tempString;

}