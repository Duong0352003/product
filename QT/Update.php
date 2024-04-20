<?php include("QTSProcess.php")?>
<?php include("UpProcess.php")?>
<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
    </head>
    <body>
    <?php echo '<a href="http://localhost/Final/QT/Show.php?upid='.$Ma.'"><button>Back</button></a>'; ?>
        <form action="Update.php" method="POST" enctype="multipart/form-data"><br>
        <input type="text" hidden name="ma" readonly value='<?php echo $id?>'>
            <label>Năm nhập học:</label><br>
            <input type="text" class="ipbox" name="nam" readonly value='<?php echo $Nam?>'><br><br>
            <label>Ngành:</label><br>
            <select name="nganh2" hidden>
                <?php
                    echo '<option value="'.$Ngh.'"></option>';
                ?>
            </select>
            <select name="nganh">
            <?php
                if($Ngh==="CNTT") {
                    $name="Công nghệ thông tin";
                } else if($Ngh==="YHCT"){
                    $name="Y học cổ truyền";
                } else if($Ngh==="DTVT"){
                    $name="Điện tử viễn thông";
                } else if($Ngh==="DPT"){
                    $name="Truyền thông đa phương tiện";
                };
                echo '<option value="'.$Ngh.'">'.$name.'</option>';
                $Nganh = array('CNTT','YHCT','DTVT','DPT');
                foreach ($Nganh as $x) {
                    if($x==$Ngh){
                        continue;
                    }
                    if($x==="CNTT") {
                        $name2="Công nghệ thông tin";
                    } else if($x==="YHCT"){
                        $name2="Y học cổ truyền";
                    } else if($x==="DTVT"){
                        $name2="Điện tử viễn thông";
                    } else if($x==="DPT"){
                        $name2="Truyền thông đa phương tiện";
                    };
                    echo '<option value="'.$x.'">'.$name2.'</option>';
                  }
                ?>   
            </select><br><br>
            <label>Họ tên:</label>
            <input type="text" class="ipbox" name="ten" value='<?php echo $Ten?>'><br><br>
            <label>CMTND/CCCD:</label>
            <input type="text" class="ipbox" name="cccd" value="<?php echo $Cccd?>"><br><br>
            <label>Ngày cấp:</label>
            <input type="date" class="ipbox" name="ngc" value="<?php echo $Ngc?>"><br><br>
            <label>Nơi cấp:</label>
            <input type="text" class="ipbox" name="nc" value="<?php echo $Nc?>"><br><br>
            <label>Ngày sinh:</label>
            <input type="date" class="ipbox" name="ngs" value="<?php echo $Ngs?>"><br><br>
            <label>Nơi sinh:</label>
            <input type="text" class="ipbox" name="ns" value="<?php echo $Ns?>"><br><br>
            <label>Giới tính:</label>
            <?php
            if($Gt=='Nam'){
                echo'<input type="radio" value="Nam" name="gt" checked="checked"><label>Nam</label><input type="radio" value="Nữ" name="gt"><label>Nữ</label><br><br>';
            } else{
                echo'<input type="radio" value="Nam" name="gt"><label>Nam</label><input type="radio" value="Nữ" name="gt" checked="checked"><label>Nữ</label><br><br>';
            }
            ?>
            <label>Dân tộc:</label>
            <input type="text" class="ipbox" name="dt" value="<?php echo $Dt?>"><br><br>
            <label>Tôn giáo:</label>
            <input type="text" class="ipbox" name="tg" value="<?php echo $Tg?>"><br><br>
            <label>Email:</label>
            <input type="text" class="ipbox" name="mail" value="<?php echo $Mail?>"><br><br>
            <label>Số ĐT:</label>
            <input type="text" class="ipbox" name="sdt" value="<?php echo $Sdt?>"><br><br>
            <label>HKTT:</label>
            <input type="text" class="ipbox" name="hk" value="<?php echo $Hk?>"><br><br>
            <label>Địa chỉ:</label>
            <input type="text" class="ipbox" name="dc" value="<?php echo $Dc?>"><br><br>
            <label>ĐT cha:</label>
            <input type="text" class="ipbox" name="sdtc" value="<?php echo $Dtc?>"><br><br>
            <label>ĐT mẹ:</label>
            <input type="text" class="ipbox" name="sdtm" value="<?php echo $Dtm?>"><br><br>
            <br><br><button type="submit" name="btn">Cập nhật</button>
        </form>
    </body>
</html>