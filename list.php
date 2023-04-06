<?php
require_once 'config/config.php';

$sql = "SELECT * FROM person";
if ($sql = mysqli_prepare($con, $sql)) {
    mysqli_stmt_execute($sql);
}
$res = mysqli_stmt_get_result($sql);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo
            "<tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[age]</td>
                <td>$row[file]</td>
                <td><img src=src/file/$row[file]></td>
            </tr>";
    }
}
