<?php include("FT.php")?>
<?php 
    if(isset($_POST["btn"]))
    {
        $folder_path = '../PDF/';
        $filename = basename($_FILES['pdf']['name']);
        $newname = $folder_path . $filename;
        $FileType = pathinfo($newname,PATHINFO_EXTENSION);

        $db = mysqli_connect('localhost', 'root', '', 'php');
        $Ma = mysqli_real_escape_string($db, $_POST['ma']);

        $user_check_query = "SELECT * FROM file WHERE MaSV='$Ma'";
        $result = mysqli_query($db, $user_check_query);
        $row = mysqli_fetch_assoc($result);
        if (empty($row)) {
            $file = "INSERT INTO `file`(`MaSV`, `Ten`) VALUES('$Ma','$filename')";
            mysqli_query($db,$file);
            move_uploaded_file($_FILES['pdf']['tmp_name'], $newname);
        }else{
            $ten = $row['Ten'];
            $new = $ten . ',' . $filename;
            $file2 = " UPDATE `file` SET `Ten`='$new' WHERE MaSV='$Ma'";
            mysqli_query($db,$file2);
            move_uploaded_file($_FILES['pdf']['tmp_name'], $newname);
        }
    }
?>  
