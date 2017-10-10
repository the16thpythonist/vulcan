<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 07.10.2017
 * Time: 20:54
 */
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root . "/vulcan/config.php";

// Getting the template file for the vulcan project, that contains all the html templates
require_once DIR_TEMP . "vulcan_template.php";

require_once "ViewInterface.php";

class VulcanView implements ViewInterface
{

    public function __construct()
    {

    }

    public function procureHeader()
    {
        $navItemLinkArray = [
            "News" => "",
            "Forschung" => "",
            "Partner" => "",
            "Kontakt" => ""
        ];
        return vulcan_header('/vulcan/src/img/logo.png', $navItemLinkArray);
    }

    public function procureMainSectionString()
    {
        $itemLinkArray = [
            "Unsere Mission" => "",
            "Partner" => "",
            "Kontakt/Wir" => "",
        ];

        $title = "Using the thermal energy of volcano eruptions";
        $subTitle = "to power the future";

        return vulcan_main_section($title, $subTitle, $itemLinkArray);
    }

    public function procureMissionSectionString()
    {
        $imageSource = '/vulcan/src/img/crates2.png';
        $title = "Unsere Mission";

        return vulcan_mission_section($imageSource, $title, 'li', 'ty');
    }

    public function getString()
    {
        $header = $this->procureHeader();
        $mainSection = $this->procureMainSectionString();
        $missionSection = $this->procureMissionSectionString();
        return $header . $mainSection . $missionSection;
    }

}