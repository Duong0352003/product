<?php 
    $db = mysqli_connect('localhost', 'root', '', 'php');

    if(isset($_POST["btn"])){
        
        $Ma = mysqli_real_escape_string($db, $_POST['ma']);
        // $Ma = md5(mysqli_real_escape_string($db, $_POST['usn']));
        $Pass = mysqli_real_escape_string($db, $_POST['pass']);
        $mk=md5($Pass);

        session_start();
        $_SESSION['id'] = $Ma; 
        $query = "SELECT * FROM dangnhap WHERE MaSV ='$Ma' AND Pass='$mk'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) == 1) {
            $PQ = $row['PQuyen'];
            if($PQ=="Admin"){
                header('location: QT/Home.php');
            } else{
                header('location: SV/Show.php');
            }
        }else {
            echo "<script type='text/javascript'>alert('Mã sinh viên hoặc mật khẩu không đúng');</script>";
        }
    }

    set_error_handler(function(int $errno, string $errstr) {
        if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
            return false;
        } else {
            return true;
        }
    }, E_WARNING);
?>