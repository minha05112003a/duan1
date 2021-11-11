<?php
include './database.php';
if (isset($_POST['tdn'])) {
    $tendangnhap = $_POST['tdn'];
    $mk = $_POST['pass'];
    $lay = mysqli_query($mysqli, "SELECT * FROM user WHERE tentaikhoan = '$tendangnhap'");
    while ($row = mysqli_fetch_array($lay)) {
        if ($row["matkhau"] == $mk) {
            echo "1";
        } else {
            echo "0";
        }
    };    
} else {
    echo "0";
}
