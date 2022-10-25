<?php

$conn = mysqli_connect("mcserver.uk/phpmyadmin", "root", "", "login");

if (!$conn) {
    echo "Connection Failed";
}