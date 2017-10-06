<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 28.09.2017
 * Time: 16:21
 */

require_once "../lib/Db.php";

class ModelBase
{

    /**
     * This method will access the database execute the sql code passed to the method and then return the rows, that
     * have been fetched. Thus this method ought ot be used only when there is a return expected, specifically in case
     * of a SQL 'SELECT' statement.
     * @param $sql
     * @return array
     */
    public static function loadDbRowArray($sql)
    {
        $conn = Db::getInstance();
        // executing the sql code, that has been passed to the method
        $statement = $conn->prepare($sql);
        $statement->execute();

        // Setting the mode of fetch to be rows
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $array = $statement->fetchAll();
        return $array;
    }

    /**
     * This method will simply execute the sql code passed as string to this method and will do no further return.
     * Best to be used with adding or altering table statements.
     * @param $sql
     */
    public static function executeSQL($sql)
    {
        $conn = Db::getInstance();
        $conn->exec($sql);
    }
}