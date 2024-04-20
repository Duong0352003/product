<?php
    $CNTTc=0;
    $YHCTc=0;
    $DTVTc=0;
    $DPTc=0;
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
                    $Ngh = $row2['Nganh'];
                    if($Ngh=='CNTT'){
                        $CNTTc+=1;
                    }
                    if($Ngh=='YHCT'){
                        $YHCTc+=1;
                    }
                    if($Ngh=='DTVT'){
                        $DTVTc+=1;
                    }
                    if($Ngh=='DPT'){
                        $DPTc+=1;
                    }
                }
            }
        }
    }
    $total=$CNTTc+$YHCTc+$DTVTc+$DPTc;
    $CNTT=$CNTTc/$total*100;
    $YHCT=$YHCTc/$total*100;
    $DTVT=$DTVTc/$total*100;
    $DPT=$DPTc/$total*100;
    $dataNganh = array( 
		array("label"=>"Công nghệ thông tin", "symbol" => "CNTT","y"=>$CNTT),
		array("label"=>"Y học cổ truyền", "symbol" => "YHCT","y"=>$YHCT),
		array("label"=>"Điện tử viễn thông", "symbol" => "DTVT","y"=>$DTVT),
		array("label"=>"Đa phương tiện", "symbol" => "DPT","y"=>$DPT), 
	)
?> 