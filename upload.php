<?php
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $tmp = $file['tmp_name'];

    move_uploaded_file($tmp, 'src/file/' . $file['name']);
}
$data = json_decode($_POST['params'], true);

foreach ($data as $key => $value) {
    echo "$key = $value<br>";
}
