<?php include("QTSProcess.php")?>
<?php include("FT.php")?>
<!DOCTYPE html>
<html>
    <head>
        <title>Thông tin</title>
        <link rel="stylesheet" type="text/css" href="../Css/Link.css">
        <script>
            function Pdf_C() {
                var fup = document.getElementById('pdf');
                var fileName = fup.value;
                var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
                if(ext == "pdf" ){
                    return true;
                } else{
                    alert("Upload pdf files only");
                    fup.focus();
                    return false;
                }
            }
        </script>
    </head>
    <body>
    <button ><a href="http://localhost/Final/QT/Bang.php">Go Back</a></button>
        <div class="Trai">
            <label>Năm nhập học:</label>
            <label><?php echo $Nam?></label><br><br>
            <input type="text" name="ma" hidden value=<?php echo $Ma?>>
            <label>Ngành:</label>
            <label><?php echo $Ngh?></label><br><br>
            <label>Mã Sinh viên:</label>
            <label><?php echo $Ma?></label><br><br>
            <label>Họ tên:</label>
            <label><?php echo $Ten?></label><br><br>
            <label>CMTND/CCCD:</label>
            <label><?php echo $Cccd?></label><br><br>
            <label>Ngày cấp:</label>
            <label><?php echo $Ngc?></label><br><br>
            <label>Nơi cấp:</label>
            <label><?php echo $Nc?></label><br><br>
            <label>Ngày sinh:</label>
            <label><?php echo $Ngs?></label><br><br>
            <label>Nơi sinh:</label>
            <label><?php echo $Ns?></label><br><br>
            <label>Giới tính:</label>
            <label><?php echo $Gt?></label><br><br>
            <label>Dân tộc:</label>
            <label><?php echo $Dt?></label><br><br>
            <label>Tôn giáo:</label>
            <label><?php echo $Tg?></label><br><br>
            <label>Email:</label>
            <label><?php echo $Mail?></label><br><br>
            <label>Số ĐT:</label>
            <label><?php echo $Sdt?></label><br><br>
            <label>HKTT:</label>
            <label><?php echo $Hk?></label><br><br>
            <label>Địa chỉ:</label>
            <label><?php echo $Dc?></label><br><br>
            <label>ĐT cha:</label>
            <label><?php echo $Dtc?></label><br><br>
            <label>ĐT mẹ:</label>
            <label><?php echo $Dtm?></label><br><br>
            <br><br><?php echo '<a href="http://localhost/Final/QT/Update.php?upid='.$Ma.'"><button>Cập nhật</button></a>'; ?>
            <?php echo '<a href="http://localhost/FInal/QT/Xoa.php?upid='.$Ma.'"><button>Xóa</button></a>'; ?>
            <div class="phai">
            <label>Bang</label><br>
                <?php
                    $db = mysqli_connect('localhost', 'root', '', 'php');
                    $sql = "SELECT * FROM name";
                    $query = mysqli_query($db,$sql);
                    if ($query) {
                        while($row = mysqli_fetch_assoc($query)) {
                            $MaS = $row['name'];
                            echo '
                            <a href="PDF.php?upid='.$MaS.'" target="_blank">'.$MaS.'</a><br>
                            '
                        ;}
                    } else {
                        echo "0 results";
                    }
                ?>   
            </div>
    </body>
</html>