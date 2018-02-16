<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
if($id=='xx'){
				$KISKSISKS= mysql_query("SELECT * FROM dataperusahaan WHERE id='$IdPer'");
				$ii = mysql_fetch_array($KISKSISKS);
				if(!$ii[id]){
					header("Location:./index.php");
				}

}else{
$datat = mysql_query("SELECT * FROM supplier WHERE id='$id'");
$xs= mysql_fetch_array($datat);
}
if(!$xs[KodeSuplier] && $id!=='xx'){
header("Location:./kompor.php");
}
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11){
?>
<html>
<head><script language="JavaScript">
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
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="441" colspan="3"><div align="center" class="style3">
SETTING OBAT &amp; <? if($id=='xx'){ ?>SUPPLIER <? }else{ ?>PENJAMIN <? } ?>
<br>
<?
if($id=='xx'){
echo strtoupper($ii[NamaPer]); 
}else{
echo strtoupper($xs[NamaSuplier]); 
}
?></div></td>
</tr>
<tr valign="top">
  <td colspan="3">
  <div align="left">
  <form target="_self">
  <table border="0" cellpadding="2" cellspacing="2" class="style1">
  <tr>
  <td width="114">NAMA OBAT</td>
  <td width="12"><strong>:</strong></td>
  <td width="285"><div align="left">
  <input type="text" name="NamaObat" maxlength="20" size="20">
  <input type="hidden" name="id"  value="<? echo $id; ?>"> 
<?
if($id=='xx'){ ?>
<input type="hidden" name="IdPer" value="<? echo $IdPer; ?>">

<? }else{
?>  
<? } 
//id=xx&IdPer=40&IdObat=9
?><input type="hidden" name="ispa" value="1">


  </div></td>
  </tr>
  <tr>
  <td colspan="3"><div align="left">
  <input name="fgf" type="submit" class="style1" value="Sort">
   <input name="fgf" type="button" class="style1" onClick="window.close()" value="Selesai">
  </div></td>
  </tr>
  </table>
  </form>
  </div>
  </td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="1" class="style1">
  <tr>
  <td width="57" bgcolor="#CCCC99"><div align="center"><strong>NO</strong></div></td>
  <td width="373" bgcolor="#CCCC99"><strong>NAMA OBAT</strong></td>
  </tr>
  <?
  $no=1;
  if($ispa==1){
  $nomerWW = mysql_query("SELECT * FROM dataobat WHERE NamaObat LIKE '$NamaObat%' LIMIT 0,100");
  }else{
  $nomerWW = mysql_query("SELECT * FROM dataobat LIMIT 0,100");
  }
  while($nn = mysql_fetch_array($nomerWW)){
if($id=='xx'){}else{  
$kkdjkdf  = mysql_query("SELECT id FROM obatsupplier WHERE IdObat='$nn[id]' AND IdSupplier='$id'");
  $ps = mysql_fetch_array($kkdjkdf); }
  if($id=='xx'){
  ?>
   <tr <? if($IdObat==$nn[id]){?> bgcolor="#CCCCFF"<? }else{ ?>onClick="location.href='u123_123.php?ispa=1&id=xx&NamaObat=<? echo $NamaObat; ?>&IdPer=<? echo $IdPer; ?>&IdObat=<? echo $nn[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"<? } ?>>
  <? 
  }elseif($ps[id]){
  ?>
  <tr bgcolor="#CCCCCC" onClick="location.href='u123_123.php?ispa=<? echo $ispa; ?>&NamaObat=<? echo $NamaObat; ?>&IdObat=<? echo $nn[id]; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <?
  }elseif($IdObat==$nn[id]){
 ?>
 <tr bgcolor="#FFFF66"> 
 <? 
 }else{ ?>
  <tr onClick="location.href='u123_123.php?ispa=<? echo $ispa; ?>&NamaObat=<? echo $NamaObat; ?>&IdObat=<? echo $nn[id]; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  <? } ?>
  <td><div align="center"><? echo $no; ?></div></td>
  <td><div align="left">
  <?
    $KeyID="$nn[id]-$IdPer";  $kdik_00_00_00 = mysql_query("SELECT id,IdObat FROM  ObatAss WHERE KeyID='$KeyID'");
      $posm= mysql_fetch_array($kdik_00_00_00);
	   if($id=='xx' && $IdObat==$nn[id]){
     ?><b><i><? echo strtoupper($nn[NamaObat]); ?></i></b> || <?
  
   if($posm[id]){
   ?><input type="button" name="fgf" value="Buang / Batal" onClick="location.href='kik_00_123.php?fito=1&NamaObat=<? echo $NamaObat; ?>&IdPer=<? echo $IdPer; 
   ?>&id=xx&IdObat=<? echo $nn[id]; ?>';" class="style1" style="background:#FF99CC"><? 
   }else{
   ?><input type="button" name="fgf" value="Ambil" onClick="location.href='kik_00_123.php?NamaObat=<? echo $NamaObat; ?>&IdPer=<? echo $IdPer; 
   ?>&id=xx&IdObat=<? echo $nn[id]; ?>';" class="style1" style="background:#CCFF33"><? 
   }
   
  }else{
  ?>
  <?   if($posm[id] && $id=='xx'){
  ?>
  <i><b><font color="#990000"><?     echo strtoupper($nn[NamaObat]);     
 ?></font></b></i>
  <? 
  }else{
   echo strtoupper($nn[NamaObat]);     
   }
   
   
if($IdObat==$nn[id]){ echo " || "; 
if($ps[id]){ ?>
<input type="button" name="dfd" value="Buang" onClick="location.href='f_01234.php?aku=iki&id=<? echo $id; ?>&IdObat=<? echo $IdObat; ?>&ispa=<? echo $ispa; ?>&NamaObat=<? echo $NamaObat; ?>';" class="style1" style="background-color:#FF99CC">
<? }else{
?>


<input type="button" name="dfd" value="Ambil" onClick="location.href='f_01234.php?id=<? echo $id; ?>&IdObat=<? echo $IdObat; ?>&ispa=<? echo $ispa; ?>&NamaObat=<? echo $NamaObat; ?>';" class="style1" style="background-color:#CCFFCC"> <? } ?>
<? } ?>
<? } ?>
  </div></td>
  </tr>
  <? $no++; } ?>  <tr>
    <td colspan="2" bgcolor="#CCCC99">&nbsp;</td>
    </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
<? 
}else{

}
?>