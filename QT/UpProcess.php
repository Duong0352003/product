<?php
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'php');

  if (isset($_POST['btn'])) {
    $id = $_POST['ma'];
    $id2 = substr($id, -3);
    $Ngh = $_POST['nganh'];
    $Ngh2 = $_POST['nganh2'];
    $Nam = $_POST['nam'];
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

    $Ma=$Nam.$Ngh.$id2;
    $fc=FALSE;
    $sql= "SELECT * FROM file WHERE MaSV='$id'";
    $query = mysqli_query($db,$sql);
    $row = mysqli_fetch_assoc($query);
    if (empty($row)) {
      $fc= TRUE;
    }else{
      $TenF = $row['Ten'];
    }
    $sql2 = "SELECT * FROM dangnhap WHERE MaSV='$id'";
    $query2 = mysqli_query($db,$sql2);
    if ($query2) {
      while($row2 = mysqli_fetch_assoc($query2)) {
        $Pass=$row2['Pass'];
        $PQ = $row2['PQuyen'];
      }
    }
    $del="DELETE FROM `file` WHERE MaSV='$id'";
    $del2="DELETE FROM `dangnhap` WHERE MaSV='$id'";
    mysqli_query($db, $del);
    mysqli_query($db, $del2);
    $upd = "UPDATE `thongtin` SET MaSV='$Ma',HoTen='$Ten',CCCD='$Cccd',NgayCap='$Ngc',NoiCap='$Nc',NgaySinh='$Ngs',NoiSinh='$Ns',GioiTinh='$Gt'
    ,DanToc='$Dt',TonGiao='$Tg',Email='$Mail',SDT='$Sdt',HKTT='$Hk',DiaChi='$Dc',DTCha='$Dtc',DTMe='$Dtm',NamNH='$Nam',Nganh='$Ngh' WHERE MaSV='$id'";
    mysqli_query($db, $upd);
    if($fc== TRUE)
    {
      ;
    }else{
      $file = "INSERT INTO `file`(`MaSV`, `Ten`) VALUES('$Ma','$TenF')";
      mysqli_query($db, $file);
    }
    $DN = "INSERT INTO `dangnhap`(`MaSV`, `Pass`,`PQuyen`) VALUES ('$Ma', '$Pass','$PQ')";
    mysqli_query($db, $DN);
    header('location: Show.php?upid='.$Ma.'');
  }
?>
