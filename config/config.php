<?php
$con = mysqli_connect('localhost', 'root', 'root', 'file_operation');
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}
