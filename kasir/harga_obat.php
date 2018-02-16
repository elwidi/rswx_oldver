<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
 	  $nomer=1;
	  $baks=2;
	  $kdjfkdjfdfd = mysql_query("SELECT * FROM rj_resep WHERE IdPasien='$id'");
	  while($nn =  mysql_fetch_array($kdjfkdjfdfd)){
  	  include "../Farmasi/harga_farmasi2.php";
 	  $nomer++; }  
	  
	    echo number_format($ta_s);    
 ?>