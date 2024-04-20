<?php include('Process.php')?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script>
            function CheckF() {
            let Ma = document.forms["Form"]["ma"].value;
            let Mk = document.forms["Form"]["pass"].value;
            if (Ma == "") {
                alert("Cần điền đầy đủ mã sinh viên");
            return false;
            }
            if (Mk == "") {
                alert("Cần điền đầy đủ mật khẩu");
            return false;
            }
        }
        </script>
    </head>
    <body>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .box {
                width: 300px;
                padding: 40px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            }

            .box label {
                font-size: 18px;
                color: #333;
                font-weight: bold;
            }

            .ipbox {
                width: calc(100% - 40px);
                padding: 10px;
                margin-top: 8px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }

            .ipbox:focus {
                outline: none;
                border-color: dodgerblue;
            }

            .submit {
                width: calc(100% - 40px);
                background-color: dodgerblue;
                color: #fff;
                padding: 12px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                transition: background-color 0.3s;
            }

            .submit:hover {
                background-color: #0091ea;
            }
        </style>
        <form name="Form" action="Dangnhap.php" onsubmit="return CheckF()" method="Post"><br>
        <div class="box">
            <label>Mã:</label>
            <input type="text" class="ipbox" name="ma" placeholder="Mã sinh viên"><br><br>
            <label>Mật khẩu:</label>
            <input type="text" class="ipbox" name="pass" placeholder="Mật khẩu"><br><br>
            <br><br><input type="submit" class="submit" name="btn" value="Đăng nhập">
        </box>
        </form>
    </body>
</html>