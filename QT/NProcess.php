<?php
  set_error_handler(function(int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
  }, E_WARNING);
  $db = mysqli_connect('localhost', 'root', '', 'php');

  if (isset($_POST['btn'])) {
    $Ngh =  $_POST['nganh'];
    $Nam = $_POST['nam'];
    $Ma = $Nam . $Ngh .rand(100,999);
    $Ten = $_POST['ten'];
    $Cccd = $_POST['cccd'];
    $Ngc = $_POST['ngc'];
    $Nc = $_POST['nc'];
    $Ngs = $_POST['ngs'];
    $Ns = $_POST['ns'];
    $Gt = $_POST['gt'];
    $Dt = $_POST['dt'];
    $Tg = $_POST['tg'];
    $Mail = $_POST['mail'];
    $Sdt = $_POST['sdt'];
    $Hk = $_POST['hk'];
    $Dc = $_POST['dc'];
    $Dtc = $_POST['sdtc'];
    $Dtm = $_POST['sdtm'];
    $PQ = $_POST['pq'];

    $query = "INSERT INTO `thongtin`(`MaSV`, `HoTen`, `CCCD`, `NgayCap`, `NoiCap`, `NgaySinh`, `NoiSinh`, `GioiTinh`, `DanToc`, `TonGiao`, `Email`, `SDT`, `HKTT`, `DiaChi`, `DTCha`, `DTMe`, `NamNH`, `Nganh`) 
    VALUES ('$Ma','$Ten','$Cccd','$Ngc','$Nc','$Ngs','$Ns','$Gt','$Dt','$Tg','$Mail','$Sdt','$Hk','$Dc','$Dtc','$Dtm','$Nam','$Ngh')";
    mysqli_query($db, $query);
    $pass = '1234567';
    $pass2 = md5($pass);
    echo $pass2;
    if($PQ=='Admin'){
      $query2 = "INSERT INTO `dangnhap`(`MaSV`, `Pass`, `PQuyen`) VALUES ('$Ma', '$pass2','$PQ')";
      mysqli_query($db, $query2);
    } else{
      $query2 = "INSERT INTO `dangnhap`(`MaSV`, `Pass`, `PQuyen`) VALUES ('$Ma', '$pass2','SV')";
      mysqli_query($db, $query2);
    }
    header('location: Bang.php');
  }
?>
