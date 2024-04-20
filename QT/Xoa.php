<?php
    $db = mysqli_connect('localhost', 'root', '', 'PHP');
    $id = $_GET['upid'];
    $sql = "SELECT * FROM thongtin WHERE MaSV='$id'";
    $del="DELETE FROM `file` WHERE MaSV='$id'";
    $del2="DELETE FROM `dangnhap` WHERE MaSV='$id'";
    $del3="DELETE FROM `thongtin` WHERE MaSV='$id'";
    mysqli_query($db, $del);
    mysqli_query($db, $del2);
    mysqli_query($db, $del3);
    header('location: Bang.php');
?>