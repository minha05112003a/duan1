<?php
include './database.php';
if (isset($_POST['tdn'])) {
    $tendangnhap = $_POST['tdn'];
    $mk = $_POST['pass'];
    $ketqua = mysqli_query($mysqli, "INSERT INTO user (id, tentaikhoan, matkhau)
    VALUES (NULL, '$tendangnhap', '$mk')");
    echo "1";
} else {
    echo "0";
}
