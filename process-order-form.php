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


$host = "localhost";
$dbname = "u507831009_order_db";
$username = "u507831009_maxsteinert";
$password = "Ves6zJ]Pw/8";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection Error: " . mysqli_connect_error());
}

$sql = "INSERT INTO order_form (name, dorm, store)
        VALUES ('$name', '$room', '$store')";

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sss", $name, $room, $store);

mysqli_execute($stmt);

echo "Record saved.";
