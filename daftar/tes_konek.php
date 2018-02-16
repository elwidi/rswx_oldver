<?php 
 $connect = mysql_connect("192.168.1.100:3306","root","mitra6633");
 if($connect){
 echo "server ok";
 }else{
echo "koneksi ke server masih gagal ";
}
//lakukan koneksi ke database
$connect_db = mysql_select_db("mitra5",$connect); 
 
if($connect_db){
 echo "<br>db ok";
}else{
echo "koneksi ke database masih gagal ";
}
 ?>
