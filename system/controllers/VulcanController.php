<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 07.10.2017
 * Time: 21:07
 */

require_once "ControllerBase.php";
require_once "ControllerInterface.php";


class VulcanController extends ControllerBase implements ControllerInterface
{

    public $viewClass;
    public $view;

    public function __construct($viewClass)
    {
        $this->viewClass = $viewClass;

        $this->createView();
    }

    public function createView()
    {
        $this->view = new $this->viewClass();
    }

    public function checkPost()
    {
        // TODO: Implement checkPost() method.
    }

    public function checkSession()
    {
        // TODO: Implement checkSession() method.
    }

    public function getViewString()
    {
        return $this->view->getString();
    }

}