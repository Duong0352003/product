<?php
    $db = mysqli_connect('localhost', 'root', '', 'PHP');
    session_start();
    $id = $_SESSION['id']; 
    $sql = "SELECT * FROM thongtin WHERE MaSV='$id'";
    $query = mysqli_query($db,$sql);
    if ($query) {
        while($row = mysqli_fetch_assoc($query)) {
            $Ma = $row['MaSV'];
            $Ten = $row['HoTen'];
            $Cccd = $row['CCCD'];
            $Ngc = $row['NgayCap'];
            $Nc = $row['NoiCap'];
            $Ngs = $row['NgaySinh'];
            $Ns = $row['NoiSinh'];
            $Gt = $row['GioiTinh'];
            $Dt = $row['DanToc'];
            $Tg = $row['TonGiao'];
            $Mail = $row['Email'];
            $Sdt = $row['SDT'];
            $Hk = $row['HKTT'];
            $Dc = $row['DiaChi'];
            $Dtc = $row['DTCha'];
            $Dtm = $row['DTMe'];
            $Nam = $row['NamNH'];
            $Ngh = $row['Nganh'];
        }
    }
?> 