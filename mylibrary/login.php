<?php

function login()
{
    $con = mysqli_connect("localhost:8889", "test", "test", "store") or 
        die('Sorry, could not connect to the database or server');
    return $con;
}
?>