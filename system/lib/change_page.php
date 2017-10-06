<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 28.09.2017
 * Time: 16:02
 */

/**
 * This function echos a html segment to the browser page, that consists of a java script, that is being executed
 * right away. That JavaScript will automatically link to another page, with the URL, that is given to the function.
 * So overall this function can be used to execute an automatic jump to another page.
 * @param $URL
 */
function change_page($URL)
{
    echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
    echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}