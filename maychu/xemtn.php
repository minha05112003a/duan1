<?php
include './database.php';
if (isset($_POST['tn'])) {
    $tn = $_POST['tn'];
    $ps = $_POST['ps'];
    $lay = mysqli_query($mysqli, "SELECT * FROM tinnhan WHERE id = '$tn'");
    while ($row = mysqli_fetch_array($lay)) {
        if ($row["matkhau"] == $ps) {
            echo $row['tinnhan'];
        }
    };    
}
