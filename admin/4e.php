<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 
if($a[Level]==1){
?>
<html>
<head> 
</head><body  >
<div align="center">
<form action="4Es.php">
<table width="480" border="0" cellpadding="2" cellspacing="2" >
<tr>
<td colspan="3"><div align="left" class="style2">
TAMBAH DATA KARYAWAN
</div></td>
</tr>
  <tr>
  <td width="140">NIK</td>
  <td width="5">:</td>
  <td width="315"><div align="left">
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
<option value="-" >--PILIH BAGIAN--</option>
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
 <option value="2">Pendaftaran</option>
 <option value="3">Kasir</option>
 <option value="4">Farmasi</option>
 <option value="11">FarmasiGudang</option>
 <option value="12">Laboratorium</option>
 <option value="16">Radiologi</option>
 </select>
  </div></td>
  </tr>
  <tr>
  <td colspan="3">&nbsp;</td> 
  </tr>
  <tr>
  <td colspan="3"><div align="left">
  <input name="fggf" type="submit"  value="Simpan" style="background:#99CCCC">
   <input name="fgfgf" type="button"  onClick="window.close()" value="Selesai"  style="background:#99CCCC">
  </div></td>
  </tr>
  </table>
  </form>
</div>
</body>
</html>
<?php 
}
?>