<?php

$link = mysql_connect('localhost', 'root', '');

if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$dbcheck = mysql_select_db("fit_halls");

if (!$dbcheck) {
        echo mysql_error();
}

mysql_query("SET names utf8");

?>
