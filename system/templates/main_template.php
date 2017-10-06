<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 28.09.2017
 * Time: 16:39
 */

require_once "body_template.php";

// This is the generic version of the main template, which just accepts the body and the header

/**
 * This template is for the main html page, with the fill-ins at the
 * @param $title
 * @param $head
 * @param $body
 * @return string
 */
function main_basic($title, $head, $body)
{
    $tempString = "
<!DOCTYPE html>
<html lang=\"en\">
<!-- THE HEAD OF THE HTML DOCUMENT -->
<head>
<meta charset='UTF-8'>
<title>$title</title>
$head
</head>
<!-- THE BODY OF THE HTML DOCUMENT -->
<body>
$body
</body>
</html>
    ";

    return $tempString;
}


function main_wrapper($title, $head, $body, $before='', $after='')
{
    $body = body_wrapper($body, $before, $after);
    $html = main_basic($title, $head, $body);
    return $html;
}

