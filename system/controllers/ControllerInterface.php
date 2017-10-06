<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 28.09.2017
 * Time: 15:22
 */

interface ControllerInterface
{
    public function checkPost();

    public function checkSession();

    public function getViewString();
}