<?php
    $Namc=0;
    $Nuc=0;
    $db = mysqli_connect('localhost', 'root', '', 'php');
    $sql = "SELECT * FROM dangnhap WHERE PQuyen='SV'";
    $query = mysqli_query($db,$sql);
    if ($query) {
        while($row = mysqli_fetch_assoc($query)) {
            $Ma = $row['MaSV'];
            $sql2 = "SELECT * FROM thongtin WHERE MaSV='$Ma'";
            $query2 = mysqli_query($db,$sql2);
            if ($query2) {
                while($row2 = mysqli_fetch_assoc($query2)) {
                    $Gt = $row2['GioiTinh'];
                    if($Gt=='Nam'){
                        $Namc+=1;
                    }
                    if($Gt=='Nữ'){
                        $Nuc+=1;
                    }
                }
            }
        }
    }
    $totalGt=$Namc+$Nuc;
    $Nam=$Namc/$totalGt*100;
    $Nu=$Nuc/$totalGt*100;
    $dataGt = array( 
		array("label"=>"Sinh viên nam", "symbol" => "Nam","y"=>$Nam),
		array("label"=>"Sinh viên nữ", "symbol" => "Nữ","y"=>$Nu),
	)
?> 