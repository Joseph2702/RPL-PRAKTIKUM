<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "parkir")
    or die("Can't connect to the database");
?>