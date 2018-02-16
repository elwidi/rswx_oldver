<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $id  =$_GET["id"];
$skksksk = mysql_query("SELECT * FROM konco WHERE id='$id'");
$ye = mysql_fetch_array($skksksk);
if(!$ye[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==1){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6699';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script> 
 
</head><body background="../gambar/bag.jpg">
<div align="center">
<form action="d7.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3" bgcolor="#FFCC66">
  <div align="left">KOREKSI DATA KARYAWAN<br />
      <?php 
echo "REC : $ye[id]";
?>
  </div></td>
</tr>
<tr valign="top">
  <td colspan="2"><div align="left">
  <table width="429" border="0" cellpadding="2" cellspacing="2" >
  <tr>
  <td width="119">NIK</td>
  <td width="4">:</td>
  <td width="232"><div align="left">
  <input name="Nik" type="text"  value="<?php  echo $ye[Nik]; ?>" size="20" maxlength="20">
  </div></td>
  </tr>
  <tr>
  <td height="27">NAMA PEMAKAI</td>
  <td>:</td><td><div align="left">
  <input name="Nama" type="text"  value="<?php  echo $ye[Nama]; ?>" size="23" maxlength="120">
  <input type="hidden" name="id" value="<?php  echo $id; ?>">
  </div></td>
  </tr>
  <tr>
  <td>USER</td>
  <td>:</td><td><div align="left">
<input name="Usere" type="text"  id="Usere" value="<?php  echo $ye[User]; ?>" size="15" maxlength="15">
  </div></td>
  </tr>
  <tr>
  <td>BAGIAN</td><td>:</td><td><div align="left">
  <select name="IdBagian" >
  <option value="<?php  echo $ye[KodeBagian]; ?>"><?php  
    $kkdkdkkd2 = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$ye[KodeBagian]'");
  $bb2 = mysql_fetch_array($kkdkdkkd2);
  echo strtoupper($bb2[NamaBagian]); echo " <i>($ye[KodeBagian])</i>"; 

    ?></option>
  <?php 
  $jjsjsj = mysql_query("SELECT id FROM bagian ORDER BY NamaBagian");
  while($vv = mysql_fetch_array($jjsjsj )){
  ?>
  <option value="<?php  echo $vv[id]; ?>"><?php   
  $kkdkdkkd = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$vv[id]'");
  $bb = mysql_fetch_array($kkdkdkkd);
  echo strtoupper($bb[NamaBagian]);
   ?></option>
  <?php  } ?>
  </select>
  </div></td>
  </tr>
  <tr>
  <td>LEVEL</td><td>:</td><td><div align="left">
<select name="Level" >
<option value="<?php  echo $ye[Level];  ?>"><?php   
if($ye[Level]==3){
echo "KASIR";
}elseif($ye[Level]==2){
echo "PENDAFTARAN";
}elseif($ye[Level]==4){
echo "FARMASI";
}elseif($ye[Level]==11){
echo "FARMASI Gudang";
}elseif($ye[Level]==12){
echo "LABORATORIUM";
}elseif($ye[Level]==16){
echo "Radiologi";
}    echo " ($ye[Level]) ";
?></option>
 <option value="2">Pendaftaran</option>
 <option value="3">Kasir</option>
 <option value="4">Farmasi</option>
 <option value="12">Laboratorium</option>
 </select>
  </div></td>
  </tr>
  <?
  if($ye[Level]==16){
  ?><?
  }
  ?>
  <tr>
  <td>UPDATE</td>
  <td>:</td><td><div align="left"><?php  echo $ye[TglJam]; ?> // <?php  echo strtoupper($ye[Opr]); ?></div></td>
  </tr>
  
  <td colspan="3">&nbsp;</td> 
  </tr>
  <tr>
  <td colspan="3"><div align="left">
  <input name="fggf" type="submit"  value="Update" style="background:#99CCCC">
   <input type="button" name="fgfg" value="Sett Pass"   style="background:#FFCCCC"
    onClick="wCompare5r = window.open('7u55.php?id=<?php  echo $id; ?>', 
  'wCompare5r', 'width=380,height=250,left=90,Top=178,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare5r.focus();" >
   <input type="button" name="fgf" value="Hapus" onClick="location.href='f_rrr.php?id=<?php  echo $id; ?>';"   style="background:#CCCCCC">
   <input name="fgfgf" type="button"  onClick="window.close()" value="Selesai"  style="background:#99CCCC">
  </div></td>
  </tr></table>
  </div></td><td width="265" valign="top" >
  <img src="foto/<?php  echo $ye[Foto]; ?>" width="119" height="88"><br>
  <?php 
  echo "$ye[Foto]";
  ?>
  </td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?php  
}else{ 
header("Location:../keluar2.php");
?>
<?php 
}?>
