<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 07.10.2017
 * Time: 21:19
 */
$root = $_SERVER["DOCUMENT_ROOT"];
require_once $root . "/vulcan/config.php";

require_once DIR_TEMP . "main_template.php";
require_once DIR_TEMP . "src_template.php";

require_once DIR_CON . "VulcanController.php";

require_once DIR_VIEWS . "VulcanView.php";


$vulcanController = new VulcanController(VulcanView::class);
$vulcan = $vulcanController->getViewString();

$head = stylesheet_links(["vulcan"]);

$html = main_wrapper("vulcan", $head, $vulcan);

echo $html;