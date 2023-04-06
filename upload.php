<?php
require_once 'config/config.php';

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $tmp = $file['tmp_name'];

    move_uploaded_file($tmp, 'src/file/' . $file['name']);
} else {
    $file = null;
}

$data = json_decode($_POST['params'], true);
$sql = "INSERT INTO person VALUES(NULL, ?, ?, ?)";
if ($sql = mysqli_prepare($con, $sql)) {
    mysqli_stmt_bind_param($sql, 'sss', $data['name'], $data['age'], $file['name']);
    mysqli_stmt_execute($sql);
}
