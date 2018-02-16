<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
if($id!=''){
$umbu = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$ii = mysql_fetch_array($umbu);
	$splo = explode("-",$ii[transferKe]);
 $Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
  }
 
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==4){
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
	which.style.background='#FFCC99';
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
    <tr valign="top">
      <td width="572" height="31"  colspan="5"><div align="left" class="style12">
	  <table border="0" cellpadding="2" cellspacing="2" class="style7">
	  <tr>
	  <td width="73">RM</td>
	  <td width="8">:</td>
	  <td width="185"><div align="left"><? echo $ii[NoPasien]; ?></div></td>
	  </tr>
	    <tr>
	  <td>KELAS</td><td>:</td><td><div align="left"><? echo $j[NamaKelas]; ?></div></td>
	  </tr>
	  </table>
	  </div></td>
    </tr>
	<tr>
	<td colspan="5" valign="top"><div align="left">
	<table width="474" height="96" border="0" cellpadding="2" cellspacing="2">
	 <TR  class="style7" valign="top">
       <td width="21" height="33" bgcolor="#669966"><span class="style28">NO</span></td>
       <td width="200" bgcolor="#669966"><span class="style28">NAMA OBAT</span></td>
       <td width="57" bgcolor="#669966"><div align="right" class="style28">HARGA</div></td>
       <td width="36" bgcolor="#669966"><span class="style28">STK</span></td>
       <td width="40" bgcolor="#669966"><div align="center"><span class="style28">PRC</span></div></td>
	          <td width="148" bgcolor="#669966"><span class="style28">GOL</span></td>
      </TR>
    <?
$no=1;
$uy = mysql_query("SELECT * FROM dataobat WHERE NamaObat Like '$NamaObat%' AND NamaObat !='' ORDER BY NamaObat LIMIT 0,30");
while($c = mysql_fetch_array($uy)){
$Gol=strtoupper($c[NamaGolongan]);
  $ter = $no%2;
  if($ter==1){
  $warna=' bgcolor="#DEFEE6"';
  }else{
  $warna=' bgcolor="#FFFF99"';
  } ?>
    <tr  <? echo $warna; ?> valign="top"
onClick="location.href='inap_0.php?IdGudang=<? echo $IdGudang; ?>&NoResep=<? echo $NoResep; ?>&Rc=<? echo $Rc; ?>&arum=<? echo $jumlah_beli1; ?>&aku=<? echo $aku; ?>&id=<? echo $id; ?>&IdObat=<? echo $c[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
class="style11">
       
      <td><div align="center" class="style11"><? echo $no; ?></div></td>
       <td><div align="left" class="style11"><? echo strtoupper($c[NamaObat]); ?></div></td>
      <td><div align="right" class="style11"><?
	  if($j[NamaKelas]=='I'){
	  echo number_format($c[Satu]);
	  }elseif($j[NamaKelas]=='II'){
	  echo number_format($c[Dua]);
	  }elseif($j[NamaKelas]=='III'){
	  echo number_format($c[Tiga]);
	  }elseif($j[NamaKelas]=='VIP'){
	  echo number_format($c[Vip]);
	  }elseif($j[NamaKelas]=='SVIP'){
	  echo number_format($c[Svip]);
	  }else{
	  echo number_format($c[HargaJual]);
	  } ?></div></td>
	 
	  <td><div align="center"><? 
	  include "huting.php";
	  ?></div></td> 
	  <td><div align="center"><? 
	$peka = mysql_query("SELECT Upper FROM golobat WHERE id='$c[IdGol]'"); 
	$yg = mysql_fetch_array($peka);
	echo "$yg[Upper]%";
	  ?></div></td> <td><div align="left"  class="style11"><? 
	  if($Gol=="ORAL"){ ?>
<font color="#009933"><? echo $Gol;?></font><? 
}elseif($Gol=="ALKES"){ ?>
<font color="#990000"><? echo $Gol;?></font>
<? 
}elseif($Gol=="LUAR"){ ?>
<font color="#666666"><i><b><? echo $Gol;?></b></i></font>
<?
}else{
	  echo "$Gol";
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
<? 
}else{
header("Location:./keluar.php");
} 
?>