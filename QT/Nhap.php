<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <script>
            function CheckF() {
            let Nam = document.forms["Form"]["nam"].value;
            let Ten = document.forms["Form"]["ten"].value;
            let Cccd = document.forms["Form"]["cccd"].value;
            let Ngc = document.forms["Form"]["ngc"].value;
            let Nc = document.forms["Form"]["nc"].value;
            let Ngs = document.forms["Form"]["ngs"].value;
            let Ns = document.forms["Form"]["ns"].value;
            let Gt = document.forms["Form"]["gt"].value;
            let Dt = document.forms["Form"]["dt"].value;
            let Mail = document.forms["Form"]["mail"].value;
            let Sdt = document.forms["Form"]["sdt"].value;
            let Hk = document.forms["Form"]["hk"].value;
            let Dc = document.forms["Form"]["dc"].value;
            let Sdtc = document.forms["Form"]["sdtc"].value;
            let Sdtm = document.forms["Form"]["sdtm"].value;
            if (Nam == "") {
                alert("Cần điền đầy đủ năm nhập học");
            return false;
            }
            if (Ten == "") {
                alert("Cần điền đầy đủ tên");
            return false;
            }
            if (Cccd == "") {
                alert("Cần điền đầy đủ CCCD");
            return false;
            }
            if (Ngc == "") {
                alert("Cần điền đầy đủ ngày cấp CCCD");
            return false;
            }
            if (Nc == "") {
                alert("Cần điền đầy đủ nơi cấp CCCD");
            return false;
            }
            if (Ngs == "") {
                alert("Cần điền đầy đủ ngày sinh");
            return false;
            }
            if (Ns == "") {
                alert("Cần điền đầy đủ mã nơi sinh");
            return false;
            }
            if (Gt == "") {
                alert("Cần chọn giới tính");
            return false;
            }
            if (Dt == "") {
                alert("Cần điền đầy đủ dân tộc");
            return false;
            }
            if (Mail == "") {
                alert("Cần điền đầy đủ mail");
            return false;
            }
            if (Sdt == "") {
                alert("Cần điền đầy đủ số điện thoại");
            return false;
            }
            if (Hk == "") {
                alert("Cần điền đầy đủ hộ khẩu");
            return false;
            }
            if (Dc == "") {
                alert("Cần điền đầy đủ địa chỉ");
            return false;
            }
            if (Sdtc == "") {
                alert("Cần điền đầy đủ số điện thoại cha");
            return false;
            }
            if (Sdtm == "") {
                alert("Cần điền đầy đủ số điện thoại mẹ");
            return false;
            }
        }
        </script>
    </head>
    <body>
    <button ><a href="http://localhost/Final/QT/Home.php">Go Back</button></a>
        <form name="Form" action="NProcess.php" method="POST" onsubmit="return CheckF()" enctype="multipart/form-data"><br>
            <label>Ngành:</label><br>
            <select name="nganh">
                <option value="CNTT">Công nghệ thông tin</option>
                <option value="YHCT">Y học cổ truyền</option>
                <option value="DTVT">Điện tử viễn thông</option>
                <option value="DPT">Truyền thông đa phương tiện</option>
            </select><br><br>
            <label>Năm nhập học:</label><br>
            <input type="text" class="ipbox" name="nam" value="2024"><br><br>
            <label>Họ tên:</label>
            <input type="text" class="ipbox" name="ten" value="A"><br><br>
            <label>CMTND/CCCD:</label>
            <input type="text" class="ipbox" name="cccd" value="261"><br><br>
            <label>Ngày cấp:</label>
            <input type="date" class="ipbox" name="ngc" value="22/02/2022"><br><br>
            <label>Nơi cấp:</label>
            <input type="text" class="ipbox" name="nc" value="A"><br><br>
            <label>Ngày sinh:</label>
            <input type="date" class="ipbox" name="ngs" value="22/02/2022"><br><br>
            <label>Nơi sinh:</label>
            <input type="text" class="ipbox" name="ns" value="A"><br><br>
            <label>Giới tính:</label>
            <input type="radio" value="Nam" name="gt"><label>Nam</label><input type="radio" value="Nữ" name="gt"><label>Nữ</label><br><br>
            <label>Dân tộc:</label>
            <input type="text" class="ipbox" name="dt" value="A"><br><br>
            <label>Tôn giáo:</label>
            <input type="text" class="ipbox" name="tg" value="A"><br><br>
            <label>Email:</label>
            <input type="text" class="ipbox" name="mail" value="A"><br><br>
            <label>Số ĐT:</label>
            <input type="text" class="ipbox" name="sdt" value="356181"><br><br>
            <label>HKTT:</label>
            <input type="text" class="ipbox" name="hk" value="A"><br><br>
            <label>Địa chỉ:</label>
            <input type="text" class="ipbox" name="dc" value="A"><br><br>
            <label>ĐT cha:</label>
            <input type="text" class="ipbox" name="sdtc" value="1561"><br><br>
            <label>ĐT mẹ:</label>
            <input type="text" class="ipbox" name="sdtm" value="16516"><br><br>
            <label>Phân quyền:</label>
            <input type="checkbox" value="Admin" name="pq">Admin
            <br><br><input type="submit" name="btn" value="Regsiter">
        </form>
    </body>
</html>