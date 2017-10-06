<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 28.09.2017
 * Time: 17:56
 */

/**
 * @param $inputBlock
 * @param $registerLink
 * @param $errorString
 * @param $headerText
 * @param $headerSubtext
 * @param $footer
 * @return string
 */
function generic_login($inputBlock, $registerLink, $errorString, $headerText, $headerSubtext, $footer)
{
    // The error DIV will only be added to the html string, in case there actually is a none empty error string
    $errorDisplay = "";
    if ($errorDisplay !== "") {
        $errorDisplay = "
<span class='login-error'>$errorString</span>
        ";
    }

    // The actual template for the login container
    $tempString = "
<div class='login-wrapper'>
<div class='login-header-wrapper'>
<span class='login-header'>$headerText</span>
<span class='login-sub-header'>$headerSubtext</span>
<div class='login-header-separator'></div>
</div>
<div class='login-form-wrapper'>
<form id='login-form' method='post'>
$errorDisplay
$inputBlock
<div class='login-button-wrapper'>
<input type='submit' content='Sign In'>
<a href='$registerLink' class='login-register-wrapper'>Sign Up</a>
</div>
</form>
<div class='login-footer-wrapper'>
<div class='login-footer-separator'></div>
<span class='login-footer'>$footer</span>
</div>
</div>
</div>
    ";

    return $tempString;
}