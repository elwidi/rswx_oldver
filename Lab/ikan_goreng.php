<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$NamaBiaya = $_GET["NamaBiaya"];
 $ikan  = $_GET["ikan"];
 $id = $_GET["id"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 $gatr = mysql_query("SELECT * FROM tabelbiayax WHERE id='$id'");
$as = mysql_fetch_array($gatr);
if($as[id]!=$id){
 header("Location:./makan_gemblong.php");
}
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	color: #CCCC33;
	font-weight: bold;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style5 {font-family: Arial, Helvetica, sans-serif}
.style6 {font-size: 10px}
.style7 {color: #FFFF99}
.style8 {color: #000000}
.style9 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style11 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
</head>
<body>

<div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
  <tr>
  <td colspan="2" valign="top" bgcolor="#59BA54"> 
  <div align="left">
   Halaman Koreksi data  </div>
  </td>
  </tr>
    <tr>
    <td width="439" valign="top">  <form action="alpokat.php"> 
        <div align="left">
          <table  border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
          <input type="hidden" name="ff2"  value="<? echo $ff2; ?>">
          
 
          <tr>
          <td colspan="3"><? echo $a[level]; ?>&nbsp;</td>
          </tr>
		   
          <tr>
          <td><div align="left"><span class="style4">NAMA BIAYA </span></div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style5 style6">
           <input name="NamaBiaya" type="text" class="style11" value="<? echo $as[NamaBiaya];  ?>" size="30"  maxlength="120">
		   <input type="hidden" name="id" value="<? echo $id; ?>">
          </div></td>
          </tr>
		
             <tr bordercolor="#D4D0C8">
                <td bgcolor="#FFEEDD"><div align="left" class="style4"><span class="style2">SVIP</span></div></td><td bgcolor="#FFEEDD"><div align="center" class="style4"><strong>:</strong></div></td><td bgcolor="#FFEEDD"><div align="left" class="style4 style2 style5">
                  <input name="Svip" type="text" class="style4" id="Svip"  size="15" value="<? echo $as[Svip]; ?>" maxlength="15">
                  </div></td>
    </tr>
              <tr>
                <td><div align="left"><span class="style4">VIP</span></div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Vip" type="text" class="style4" id="Vip" value="<? echo $as[Vip]; ?>"   size="15" maxlength="15">
                  </div></td>
              </tr>
              <tr>
                <td><div align="left"><span class="style4">SATU</span></div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Satu" type="text" class="style4" id="Satu"  size="15"  maxlength="15" value="<? echo $as[Satu]; ?>">
                  </div></td>
              </tr>
              
              
              <tr class="style4">
                <td>DUA</td>
              <td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                <input name="Dua" type="text" class="style4" id="Dua"   size="15" maxlength="15" value="<? echo $as[Dua]; ?>">
                </div></td>
              </tr>
              <tr class="style4">
                <td><div align="left">TIGA</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Tiga" type="text" class="style4" id="Tiga"  size="15" maxlength="15" value="<? echo $as[Tiga]; ?>">
                  </div></td>
              </tr><tr class="style4">
                <td><div align="left">ICU</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Icu" type="text" class="style4" id="Icu"   size="15" maxlength="15" value="<? echo $as[Icu]; ?>">
                  </div></td>
              </tr><tr class="style4">
                <td><div align="left">NICU</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Nicu" type="text" class="style4" id="Nicu"  size="15" maxlength="15" value="<? echo $as[Nicu]; ?>">
                  </div></td>
              </tr><tr class="style4">
                <td><div align="left">HCU</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Hcu" type="text" class="style4" id="Hcu"   size="15" maxlength="15" value="<? echo $as[Hcu]; ?>">
                  </div></td>
    </tr>
	<tr class="style4">
                <td><div align="left">PICU</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Picu" type="text" class="style4" id="Picu"  size="15" maxlength="15" value="<? echo $as[Picu]; ?>">
                  </div></td>
    </tr>
	<tr class="style4">
                <td><div align="left">ISOLASI</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Isolasi" type="text" class="style4" id="Isolasi"   size="15" maxlength="15" value="<? echo $as[Isolasi]; ?>">
                  </div></td>
    </tr>
		<tr class="style4">
                <td><div align="left">PERINA</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Perina" type="text" class="style4" id="Perina"  size="15" maxlength="15" value="<? echo $as[Perina]; ?>">
                  </div></td>
    </tr>
		<tr class="style4">
                <td><div align="left">NEONATOLOGI</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Neonatologi" type="text" class="style4" id="Neonatologi"  size="15" maxlength="15" value="<? echo $as[Neonatologi]; ?>">
                  </div></td>
    </tr>
		<tr class="style4">
                <td><div align="left">RUJUKAN</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Rujukan" type="text" class="style4" id="Rujukan"  size="15" maxlength="15" value="<? echo $as[Rujuk]; ?>">
                  </div></td>
    </tr>
          <tr bgcolor="#000033">
          <td colspan="3" bgcolor="#59BA54"><div align="center" class="style8">
            <span class="style11">.            </span>
            <input name="simpan" type="submit" class="style11" value="Simpan">
  <?
  $mdkdld  = mysql_query("SELECT COUNT(id) AS jj FROM sublab WHERE IdBiaya=$id");
  $jx = mysql_fetch_array($mdkdld);
  if($jx[jj]>0){
  
  }else{
  ?><input name="fgf" type="button" class="style11" onClick="location.href='d.php?id=<? echo $id; ?>';" value="Hapus">
  <? } ?>
           
 <?
	   if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[level]==7){ }else{
	   ?> <input name="sdfff" type="button" class="style11" onClick="location.href='brekele.php?id=<? echo $id; ?>';" value="Tambah Sub Item">
        <!-- <input type="button" name="fgf" value="Copy Data Item" onClick="location.href='bakar_singkong_enakya.php?id=<? //echo $id; ?>';">-->
          <? } ?><input name="kmba" type="button" class="style11" onClick="location.href='makan_gemblong.php';" value="Kembali">
          <input name="Kernc" type="button" class="style11" onClick="location.href='keluar.php';" value="Keluar">
			 
           </div></td>
          </tr>
           </table>
        </div>
      </form></td><td width="759" valign="top" bgcolor="#FFFFFF"><div align="left"><?
	  if($hari==6){
 	  }else{
	  ?><iframe src="buah_melon_manis.php?hari=<? echo $hari; ?>&HARI=5&id=<? echo $id; ?>" width="620" height="800" frameborder="0"></iframe>
	  <? } ?></div></td>
    </tr>
  </table>
</div>
</body>
</html>

<? } ?>






