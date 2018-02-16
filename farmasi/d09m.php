<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=hasil-export.xls");
 
// Tambahkan table
if($iin=='hari'){
include 'x2_0.php';
}else{
include 'b9_8x.php';
}
?>