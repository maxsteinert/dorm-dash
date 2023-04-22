<?php

$name = $_POST["name"];
$room = $_POST["dorm"];
$store = $_POST["store"];

if (! $name) {
    die("You must enter a name");
}

if (! $room) {
    die("You must enter a room number");
}


$host = "hostinger";
