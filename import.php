<?php
include('database.php');

// Lấy nội dung của tệp SQL
$filename = 'php.sql';
$templine = '';
$lines = file($filename);
foreach ($lines as $line) {
    if (substr($line, 0, 2) == '--' || $line == '') {
        continue;
    }
    $templine .= $line;
    if (substr(trim($line), -1, 1) == ';') {
        mysqli_query($conn, $templine);
        $templine = '';
    }
}
echo "Tables imported successfully";
?>