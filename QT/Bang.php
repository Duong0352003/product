<DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../Css/A.css">
    <link rel="stylesheet" href="../Css/Link.css">
    </head>
    <body>
    <button ><a href="http://localhost/Final/QT/Home.php">Go Back</button></a>
        <div class="box">
        <a>Thong tin</a><br><br><br>
            <table class="table">
                <thead>
                    
                </thead>  
                <tbody>
                    <th><p>MÃ SINH VIÊN</p></th>
                    <th><p>HỌ TÊN</p></th>
                    <th><p>NGÀNH</p></th>
                    <th><p>NĂM NHẬP HỌC</p></th>
                </tbody>
                <?php
                    $db = mysqli_connect('localhost', 'root', '', 'php');
                    $sql = "SELECT * FROM dangnhap WHERE PQuyen='SV'";
                    $query = mysqli_query($db,$sql);
                    if ($query) {
                        while($row = mysqli_fetch_assoc($query)) {
                            $Ma = $row['MaSV'];
                            $sql = "SELECT * FROM thongtin WHERE MaSV='$Ma'";
                            $query2 = mysqli_query($db,$sql);
                            if ($query2) {
                            while($row2 = mysqli_fetch_assoc($query2)) {
                              $Ma = $row2['MaSV'];
                              $Ten = $row2['HoTen'];
                              $Nam = $row2['NamNH'];
                              $Ngh = $row2['Nganh'];
                              echo '
                                <tr>
                                <td><p><a href="Show.php?upid='.$Ma.'">'.$Ma.'</p></td>
                                <td><p>'.$Ten.'</p></td>
                                <td><p>'.$Ngh.'</p></td>
                                <td><p>'.$Nam.'</p></td>		
                                </tr>
                              ';}
                            } else {
                              echo "0 results";
                            }
                      }
                    }
                ?>   
            </table>
        </div>
        <button onclick="topFunction()" class="Ttop" id="To-top">
            <i class="fas fa-arrow-up color3"></i>
        </button>

    </body>
</html>

<script>
let mybutton = document.getElementById("To-top");

window.onscroll = function () {scrollFunction();};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
mybutton.addEventListener("click", backToTop);
function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script>
    function myFunction() {
  alert("Deleted date can't be recover!");
}
</script>