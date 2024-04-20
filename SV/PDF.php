<?php

$id = $_GET['upid'];

$path="../PDF/";
$file = $path .$id;
$filename = $id ;
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
@readfile($file);
?>