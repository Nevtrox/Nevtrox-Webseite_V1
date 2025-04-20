<?php

$mysql = new db();
class db
{
    public function db()
    {

        $dbHost = "web.ecso.space";
        $dbName = "Haupt";
        $dbUser = "Haupt";
        $dbPass = '7LkHH1ivH195WCapz0Ay';

        $db = new PDO('mysql:host=' . $dbHost . ';charset=utf8;dbname=' . $dbName, $dbUser, $dbPass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}

?>