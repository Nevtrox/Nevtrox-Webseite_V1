<?php

$mysql = new db();
class db
{
    public function db()
    {

        $dbHost = "web.ecso.space";
        $dbName = "silas";
        $dbUser = "silas";
        $dbPass = 'vPibF5Li5AQYtqFHfkgm';

        $db = new PDO('mysql:host=' . $dbHost . ';charset=utf8;dbname=' . $dbName, $dbUser, $dbPass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}

?>