<?php

class DatabaseConnection
{
    function getConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cleaning";
        return mysqli_connect($servername, $username, $password, $dbname);
    }
}