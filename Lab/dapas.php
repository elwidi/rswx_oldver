<?
session_start();
include "../konek.php";
include "../ceke.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12 || $a[Level]==16){
$ak = $_GET["ak"];
$iin = $_GET["iin"];
$NoPasien  = $_GET["NoPasien"];
$Alamat = $_GET["Alamat"];
$NamaPasien  = $_GET["NamaPasien"];
 ?>
 <html>
<head>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style5 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.style7 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style8 {font-size: 12px}
.style9 {font-family: Arial, Helvetica, sans-serif}
.style11 {color: #000066; font-size: 12; }
.style12 {color: #000066; font-size: 12px; }
.style15 {color: #000000; }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
<div align="left">
<table width="1007" height="325" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
<tr bgcolor="#000099" class="style1">
<td height="54" colspan="6" bgcolor="#D4D0C8"><div align="center" class="style1 style13">
 <?
 $file='';
 ?>
 <img src="../gambar/rad.gif"></td>
</tr>
<tr bgcolor="#99CCFF" class="style1">
<td colspan="6"><div align="left">
<form target="_self">
<table width="998" border="0" cellpadding="0" cellspacing="0">
<?
if($ak==3){
?>
<tr>
<td colspan="2" bgcolor="#ECE9D8"><span class="style8">NO RM : 
  <input name="NoPasien" type="text" class="style7" size="20" maxlength="20" autofocus="autofocus" > 
  <input type="hidden" name="iin" value="sayang">
  || 
  <input name="dff" type="submit" class="style7" value="Cari">
  <input name="dggg2" type="button" class="style7" onClick="location.href='dapas.php';" value="Cari BdsNamaPasien">
  	  <input name="dggg" type="button" class="style7" onClick="location.href='dapas.php?ak=4';" value="Cari Bds Alamat">
<input type="button" name="ffg" value="Kembali" onClick="location.href='../jujur_sabar';" class="style7">
</span></TD>
</tr>
<?
}elseif($ak==4){
?>
<tr>
<td bgcolor="#ECE9D8" colspan="2"><span class="style8">ALAMAT PASIEN : 
  <input name="Alamat" type="text" class="style7" size="20" maxlength="20"> 
  <input type="hidden" name="iin" value="cantik">
  || 
  <input name="dff" type="submit" class="style7" value="Cari">
  <input name="dggg2" type="button" class="style7" onClick="location.href='dapas.php';" value="Cari BdsNamaPasien">
  	  <span class="style11">
  	  <input name="dggg3" type="button" class="style7" onClick="location.href='dapas.php?ak=3';" value="Cari BdsNoPasien">
  	  <input type="button" name="ffg4" value="Kembali" onClick="location.href='../3w.php';" class="style7">
  	  </span></span></TD>
</tr>
<?
}elseif($ak==22){
?>
<tr class="style8">
<td width="320" bgcolor="#FFF10B">NO TELP ( MIRIP )</td>
<td width="678" bgcolor="#FFF10B"> 
  <div align="left"><input name="NoTelp" type="text" class="style7" size="20" maxlength="20">
  <input type="hidden" name="iin" value="okedeh">
  <input name="dfdf" type="submit" class="style7" value="Proses">
  <input type="button" name="ffg5" value="Kembali" onClick="location.href='../3w.php';" class="style7">
  </div></td>
</tr>
<? 

}elseif($ak==7){
?>
<tr>
<td colspan="2" bgcolor="#ECE9D8"><span class="style8">Nama Bapak: 
  <input name="NamaBapak" type="text" class="style7" size="20" maxlength="20"> 
  <input type="hidden" name="iin" value="ayu">
  || 
  <input name="dff" type="submit" class="style7" value="Cari">
  <input name="dggg2" type="button" class="style7" onClick="location.href='dapas.php';" value="Cari BdsNamaPasien">
  	  <span class="style11">
  	  <input name="dggg3" type="button" class="style7" onClick="location.href='dapas.php?ak=3';" value="Cari BdsNoPasien">
  	  <input type="button" name="ffg2" value="Kembali" onClick="location.href='../3w.php.php';" class="style7">
  	  </span></span></TD>
</tr>
<? }else{ ?>
<tr> 
<td colspan="2" bgcolor="#999999"><span class="style11"><span class="style8">NAMA PASIEN</span> : 
      <input name="NamaPasien" type="text" class="style7" size="30" maxlength="30" autofocus="autofocus" > 
	  <input type="hidden" name="iin" value="bojoku">
      || 
      <input name="sort" type="submit" class="style7" value="Sort">
	  <input name="dggg" type="button" class="style7" onClick="location.href='dapas.php?ak=3';" value="Cari BdsNoPasien">
	  <input name="dggg" type="button" class="style7" onClick="location.href='dapas.php?ak=4';" value="Cari Bds Alamat">
	  <input name="dggg" type="button" class="style7" onClick="location.href='dapas.php?ak=22';" value="Cari Bds NoTelp">
	 <input name="dggg" type="button" class="style7" onClick="location.href='dapas.php?ak=7';" value="Cari Bds NamaBapak"> 
 
  	     
     <span class="style8">
     <input type="button" name="ffg3" value="Kembali" onClick="location.href='../3w.php';" class="style7">
     </span>     ||</span><span class="style12"> Jumlah data :
<?
  $hra = mysql_query("SELECT COUNT(id) AS hy FROM datapasien");
  $i = mysql_fetch_array($hra);
  echo number_format($i[hy]);
 ?>
</span></td>
</tr>
<? } ?>
</table>
</form>
</div></td>
</tr>
<tr bgcolor="#000099" class="style1">
<td width="22" bgcolor="#5ABB52"><div align="center" class="style15"><span class="style1">NO</span></div></td>
<td width="51" bgcolor="#5ABB52"><div align="center" class="style15">
  <div align="left"><span class="style1">NO RM</span></div>
</div></td>
<td width="257" bgcolor="#5ABB52"><div align="center" class="style15">
  <div align="left"><span class="style1">NAMA PASIEN</span></div>
</div></td>
<td width="438" bgcolor="#5ABB52"><div align="center" class="style15">
  <div align="left"><span class="style1">ALAMAT</span></div>
</div></td>
<td width="97" bgcolor="#5ABB52"><div align="center" class="style15">
  <div align="left"><span class="style1">TGL LHR</span></div>
</div></td>
<td width="123" bgcolor="#5ABB52"><div align="left" class="style15">ADM</div></td>
</tr>
<?
if(!$akir){
$akir=0;
}
if($awal==''){
$awal=0;
}else{
$awal=$awal;
}
$no=1;
 if($iin=='bojoku'){ 
 $dataPsn = mysql_query("SELECT NoPasien,NamaPasien,Alamat,id,Opr,tgllhr FROM datapasien WHERE NamaPasien Like '$NamaPasien%' ORDER BY NoPasien LIMIT 0,200");
 }elseif($iin=='sayang'){
  $dataPsn = mysql_query("SELECT NoPasien,NamaPasien,Alamat,id,Opr,tgllhr FROM datapasien WHERE NoPasien='$NoPasien' LIMIT 0,200");
 }elseif($iin=='cantik'){
  $dataPsn = mysql_query("SELECT NoPasien,NamaPasien,Alamat,id,Opr,tgllhr FROM datapasien WHERE Alamat like '$Alamat%' LIMIT 0,200");
   }elseif($iin=='okedeh'){
  $dataPsn = mysql_query("SELECT NoPasien,NamaPasien,Alamat,id,Opr,tgllhr FROM datapasien WHERE Telpon like '$Telpon%' LIMIT 0,200");
  }elseif($iin=='ayu'){ 
  $dataPsn = mysql_query("SELECT NoPasien,NamaPasien,Alamat,id,Opr,tgllhr FROM datapasien WHERE NamaBapak like '$NamaBapak%' LIMIT 0,200");
  }elseif($iin=='hamil'){ 
  $dataPsn = mysql_query("SELECT NoPasien,NamaPasien,Alamat,id,Opr,tgllhr FROM datapasien WHERE tgllhr LIKE '%-$Thn' ORDER BY tgllhr LIMIT 0,200");
}else{
 $dataPsn = mysql_query("SELECT NoPasien,NamaPasien,Alamat,id,Opr,tgllhr FROM datapasien ORDER BY NoPasien
LIMIT $akir,200");
}
while($c = mysql_fetch_array($dataPsn)){
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==8 || $a[level]==4 || $a[level]==11 || $a[level]==6 ){ ?>
<tr onClick="location.href='karang_pete.php?id=<? echo $c[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" > 
<?
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==50){
?>
<tr 
onClick="location.href='muser_muser.php?id=<? echo $c[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
 bgcolor="#000000" class="style7">
<?  }else{?>
<tr 
onClick="wCompare = window.open('muser_muser.php?id=<? echo $c[id]; ?>', 
  'wCompare', 'width=580,height=600,left=500,Top=90,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style7">
 <? } ?> 
<td><div align="center" class="style7 style8 style9"><?  echo $no; ?></div></td>
<td><div align="left" class="style5 style8"><?
 echo $c[NoPasien];
  ?></div></td>
<td ><div align="left" class="style7"><? echo $c[NamaPasien]; ?></div></td>
<td><div align="left" class="style7"><? echo $c[Alamat]; ?></div></td>
<td><div align="left" class="style7"><? echo $c[tgllhr]; ?></div></td>
<td><div align="left" class="style7"><? echo $c[Opr]; ?></div></td>
</tr>
<? $no++; } ?> 
<tr bgcolor="#000099">
<td  colspan="6" bgcolor="#5ABB52"><div align="center"> .
</div></td>
</tr>
</table>
</div>
</body>
</html>
<? }else{
header("Location:./keluar.php");
}
?>