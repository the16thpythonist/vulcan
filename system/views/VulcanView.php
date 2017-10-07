<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 07.10.2017
 * Time: 20:54
 */
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root . "config.php";

// Getting the template file for the vulcan project, that contains all the html templates
require_once DIR_TEMP . "vulcan_template.php";

require_once "ViewInterface.php";

class VulcanView implements ViewInterface
{

    public function __construct()
    {

    }

    public function procureMainPageString()
    {
        $itemLinkArray = [
            "hi" => "",
            "hp" => "",
            "jo" => "",
        ];

        return vulcan_main_section("Working?", $itemLinkArray);
    }

    public function getString()
    {
        return $this->procureMainPageString();
    }

}