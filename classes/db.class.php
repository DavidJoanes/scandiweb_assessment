<?php

class Db
{
    protected function connectDB()
    {
        try {
            $dbName = "scandiweb";
            $user = "root";
            $pwd = "";
            $db = new PDO("mysql:host=localhost;dbname=".$dbName, $user, $pwd);
            return $db;
        } catch (PDOException $e) {
            print("Error occured during connection to database!: " .$e->getMessage() ."<br/>");
            die();
        }
    }
}
