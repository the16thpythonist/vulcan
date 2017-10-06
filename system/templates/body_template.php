<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 28.09.2017
 * Time: 16:57
 */


function body_wrapper($content, $before='', $after='')
{
    $tempString = "
<div class='page-wrapper'>
$before
<div class='page-content-wrapper'>
$content
</div>
$after
</div>
    ";

    return $tempString;
}