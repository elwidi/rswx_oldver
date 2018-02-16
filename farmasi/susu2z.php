<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
 $umbu = mysql_query("SELECT * FROM rj_resep WHERE id=$id");
$ii = mysql_fetch_array($umbu);
 if(!$ii[id]){
 echo "RECORD SET TIDAK LENGKAP";
 }else{  
  ?>
<html>
<head>
<style type="text/css">
<!--
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style11 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.style12 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.style28 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
 
<div align="center">
  <table width="580" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
    <tr>
      <td width="572" height="31"  colspan="5"><div align="center" class="style12"></div></td>
    </tr>
	<tr>
	<td colspan="5" valign="top"><div align="left">
	<table width="483" height="96" border="0" cellpadding="2" cellspacing="2">
	<TR  class="style7">
       <td width="22" height="33" bgcolor="#669966"><span class="style28">NO</span></td>
       <td width="214" bgcolor="#669966"><span class="style28">NAMA OBAT</span></td>
        <td width="23" bgcolor="#669966"><span class="style28">STK</span></td>
		   <td width="53" bgcolor="#669966"><div align="right"><span class="style28">HARGA</span></div></td>
       <td width="139" bgcolor="#669966"><span class="style28">GOL</span></td>
      </TR>
    <?
$no=1;
$uy = mysql_query("SELECT * FROM dataobat WHERE NamaObat Like '$NamaObat%' AND NamaObat !='' ORDER BY NamaObat LIMIT 0,10");
while($c = mysql_fetch_array($uy)){
$Gol=strtoupper($c[NamaGolongan]);
 $ka = $no%2;
 if($ka==1){
 $warna='  bgcolor="#D8FCE2"';
 }else{
 $warna=' bgcolor="#FFCCCC"';
 }
?>    <tr  <? echo $warna; ?> 
onClick="location.href='bgd.php?IdObat=<? echo $c[id]; ?>&id=<? echo $id; ?>&Rc=<? echo $Rc; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
class="style11">
      
      <td><div align="center" class="style11"><? echo $no; ?></div></td>
       <td><div align="left" class="style11"><? $nama = strtoupper($c[NamaObat]);
	   $ambil  = substr($nama,0,5);
 	   echo $nama;  if($ambil=='PAKET'){
	      $kdfjdfd_dfdfdf = mysql_query("SELECT COUNT(id) as kk FROM isipaketdetil WHERE IdPaket='$c[id]'");
		  $hv = mysql_fetch_array($kdfjdfd_dfdfdf);
		 if($hv[kk]>0){ ?> ( <font color="#990000"><i><?  echo $hv[kk]; ?></i></font> }<? }
	   }
	    ?></div></td>
 	  <td><div align="center"><? 
	  include "huting.php";
	  ?></div></td> 
	  <td><div align="right"><?
	 if($ii[KodePer]==83 ){
	 ?><font color="#0000FF"><i><? 
	 $kdjfkdjfd_Dfmndlfdmlfd = mysql_query("SELECT * FROM golobat WHERE id='$c[IdGol]'");
	 $ypo = mysql_fetch_array($kdjfkdjfd_Dfmndlfdmlfd);
	 $kdjfkdjfd_Dfmndlfdmlfd2 = mysql_query("SELECT * FROM golobat WHERE id='$c[IdGol]'");
	 $ypo2 = mysql_fetch_array($kdjfkdjfd_Dfmndlfdmlfd2);
  // echo "($persen_1)";
	$Tiga2 = $c[Tiga]-($c[Tiga]*$persen_1/100);
	 echo number_format($Tiga2); 
	 ?></i></font><? 
	 }else{
	  echo number_format($c[Tiga]); 
	 }  ?></div></td>
	  <td><div align="left"  class="style11"><? 
	  if($Gol=="ORAL"){ ?>
<font color="#009933"><? echo $Gol;?></font><? 
}elseif($Gol=="ALKES"){ ?>
<font color="#990000"><? echo $Gol;?></font>
<? 
}elseif($Gol=="LUAR"){ ?>
<font color="#666666"><i><b><? echo $Gol;?></b></i></font>
<?
}else{
	  echo "$Gol ($c[IdGol])";
	  }
	  ?></div></td>
    </tr>
	
    <? $no++; } ?>
    <tr  bgcolor="#FFCCCC">
      <td height="21" colspan="8" bgcolor="#669966">&nbsp;</td>
    </tr>
	</table>
	</div></td>
	</tr>
  </table>
</div>
  </div>
</body>
</html>
<? } ?>
 