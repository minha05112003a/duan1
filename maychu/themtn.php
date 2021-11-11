<?php
include 'database.php';
// Ghi vào csdl
if (isset($_POST['tn'])) {
    $tn = $_POST['tn'];
    $ps = $_POST['ps'];
    $ketqua = mysqli_query($mysqli, "INSERT INTO tinnhan (id, tinnhan, matkhau)
    VALUES (NULL, '$tn', '$ps');");
    $order_id = mysqli_insert_id($mysqli);
    echo $order_id;
}
