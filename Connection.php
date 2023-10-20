<?php

function dbconnect()
{
    static $connection = null;
    if ($connection === null) {
        $connection = mysqli_connect('localhost', 'root', '', 'dtc');
        if (!$connection) {
            die("impossible de se connecter a la base");
        }
    }
    return $connection;
}
