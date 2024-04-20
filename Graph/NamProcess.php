<?php
    $Y2020c=0;
    $Y2021c=0;
    $Y2022c=0;
    $Y2023c=0;
    $Y2024c=0;
    $Y2025c=0;
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
                    $Nam = $row2['NamNH'];
                    if($Nam=='2020'){
                        $Y2020c+=1;
                    }
                    if($Nam=='2021'){
                        $Y2021c+=1;
                    }
                    if($Nam=='2022'){
                        $Y2022c+=1;
                    }
                    if($Nam=='2023'){
                        $Y2023c+=1;
                    }
                    if($Nam=='2024'){
                        $Y2024c+=1;
                    }
                    if($Nam=='2025'){
                        $Y2025c+=1;
                    }
                }
            }
        }
    }
    $dataYear = array(
        array("label"=> "2020", "y"=> $Y2020c),
        array("label"=> "2021", "y"=> $Y2021c),
        array("label"=> "2022", "y"=> $Y2022c),
        array("label"=> "2023", "y"=> $Y2023c),
        array("label"=> "2024", "y"=> $Y2024c),
        array("label"=> "2025", "y"=> $Y2025c),
    )
?> 