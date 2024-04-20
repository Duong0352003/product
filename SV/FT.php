<?php
    $db = mysqli_connect('localhost', 'root', '', 'php');
    $id = $_SESSION['id']; 
    $user_check_query = "SELECT * FROM file WHERE MaSV='$id'";
    $result = mysqli_query($db, $user_check_query);
    $row = mysqli_fetch_assoc($result);
    if (empty($row)) {
        $del="DELETE FROM name";
        mysqli_query($db,$del);
    }
    else{
        $tenF=$row['Ten'];
        $PDFArray = explode(',', $tenF);
        $del="DELETE FROM name";
        mysqli_query($db,$del);
        foreach ($PDFArray as $PDFN) {
            $file = "INSERT INTO `name`(`name`) VALUES('$PDFN')";
            mysqli_query($db,$file);
        }
    }
?>
