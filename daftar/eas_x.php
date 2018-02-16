<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$mas = $_GET["mas"];
$IdDetil=$_GET["IdDetil"];
if($para=='normal'){
$jhjdhkdfd = mysql_query("SELECT * FROM icd_rj2 WHERE id='$IdDetil'");
}else{
$jhjdhkdfd = mysql_query("SELECT * FROM icd_rj WHERE id='$IdDetil'");
} $ya = mysql_fetch_array($jhjdhkdfd);
if(!$ya[id]){
echo "Dfd";//header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head> <script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
}
.style2 {
	font-size: 12px;
	color: #990000;
}
-->
</style>
</head>
<body>
<table border="1">
<tr  valign="middle">
<td width="645" colspan="3"><div align="left">
  <p align="center"><span class="style1">YAKIN DATA INI AKAN DI HAPUS?<br />
      <span class="style2">  
      <?
  echo "$ya[NamaPasien] ($ya[NoPasien])<br> $ya[Diagnosa]";
  ?>
      </span><br>
    <a href="w87.php?para=<? echo $para; ?>&id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">YA</a> || <a href="#" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="window.close()"  style="text-decoration:none">TIDAK</a></span></p>
  <p>&nbsp;  </p>
</div></td>
</tr>
</table>
</body>
</html>
<? 
}?>