<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 28.09.2017
 * Time: 15:24
 */

$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root . "/vulcan/config.php";

class ControllerBase
{

    /**
     * This will return the boolean value of whether or not the _POST super global array is empty.
     * @return bool
     */
    public static function postEmpty()
    {
        if (sizeof($_POST) == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * This will return the boolean value of whether or not the key is
     * @param string $key
     * @return bool
     */
    public static function postContainsKey(string $key)
    {
        if (array_key_exists($_SESSION, $key)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * This will return the boolean value of whether or not the _SESSION super global array is empty.
     * @return bool
     */
    public static function sessionEmpty()
    {
        if (self::sessionEnabled()){
            if (sizeof($_SESSION)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    /**
     * This will return the booelan value of whether or not a session is even enabled: A session is enabled, in case
     * the 'session_start()' call was made at the beginning of the script. This function however will not tell if the
     * the session is being used or not, the SESSION array could just as well be empty.
     * @return bool
     */
    public static function sessionEnabled()
    {
        $status = session_status();
        if ($status == PHP_SESSION_NONE || $status == PHP_SESSION_ACTIVE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * This will return the boolean value of whether or not the session is active and USED, which means True will only
     * be returned in case a session value is only is set.
     * @return bool
     */
    public static function sessionActive()
    {
        if (session_status() == PHP_SESSION_ACTIVE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * This method will return the boolean value of whether or not the passed string is part of the keys of the
     * _SESSION super global array.
     * @param string $key
     * @return bool
     */
    public static function sessionContainsKey(string $key)
    {
        if (self::sessionEnabled() && array_key_exists($key, $_SESSION)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}