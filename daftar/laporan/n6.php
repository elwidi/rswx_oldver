<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
include "../../hari.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="378" height="39" colspan="3"><div align="left" class="style1">
PRESENTASE PEMAKAIAN TEMPAT TIDUR<br>&nbsp;
</div></td>
</tr>
 
 <tr>
<td colspan="3" valign="top">
<div align="left">
  <table width="380" border="0" cellpadding="1" cellspacing="1" class="style2">
    <tr>
      <td width="155">LANTAI <br />
        PERAWATAN</td>
      <td width="218">RATA <sup>2 </sup> TT<br>
        TERPAKAI </td>
    </tr>
    <tr>
      <td colspan="2" ><hr></td>
    </tr>
	<tr>
	<td colspan="2" valign="top">
	<div align="left">
	<table border="0" cellpadding="2" cellspacing="2">
	<tr>
      <td width="341" colspan="2"  valign="top"><div align="left">
          <table width="305" border="0" cellpadding="2" cellspacing="2" class="style2">
            <tr>
              <td colspan="4"><div align="left"> LANTAI I </div></td>
            </tr>
            <?
  		///
			 $nomer=1;
			 $jsmjm = mysql_query("SELECT * FROM ruangan WHERE Lantai='Lantai I' ORDER BY KodeKelas");
			while($nn = mysql_fetch_array($jsmjm)){
		///
  	if($KodeKelas !=$nn[KodeKelas]){?>
            <tr>
              <td width="42"><div align="center"><? echo $nomer; ?></div></td>
              <td width="98"><div align="left">
                <?
	  echo strtoupper($nn[NamaKelas]); 
	  ?>
              </div></td><td width="3"><strong>:</strong></td>
              <td width="136">.............</td>
            </tr>
            <? 	 $nomer++;
	} $KodeKelas =$nn[KodeKelas]; } 
	?>
          </table>
      </div></td>
    </tr>
    <tr>
      <td  valign="top"><div align="left">
          <table width="301" border="0" cellpadding="2" cellspacing="2" class="style2">
            <tr>
              <td colspan="4"><div align="left"> LANTAI II </div></td>
            </tr>
            <?
  		///
			 $nomerS=1;
			 $jsmjmS = mysql_query("SELECT * FROM ruangan WHERE Lantai='Lantai II' ORDER BY KodeKelas");
			while($nnS = mysql_fetch_array($jsmjmS)){
		///
  	if($KodeKelasS !=$nnS[KodeKelas]){?>
            <tr>
              <td width="40"><div align="center"><? echo $nomerS; ?></div></td>
              <td width="99"><div align="left">
                <?
	  echo strtoupper($nnS[NamaKelas]); 
	  ?>
              </div></td><td width="4"><strong>:</strong></td>
              <td width="132">.............</td>
            </tr>
            <? 	 $nomerS++;
	} $KodeKelasS =$nnS[KodeKelas]; } 
	?>
          </table>
      </div></td>
    </tr>
    <tr>
      <td  valign="top"><div align="left">
          <table width="304" border="0" cellpadding="2" cellspacing="2" class="style2">
            <tr>
              <td colspan="4"><div align="left"> LANTAI III </div></td>
            </tr>
            <?
  		///
			 $nomerSX=1;
			 $jsmjmSX = mysql_query("SELECT * FROM ruangan WHERE Lantai='Lantai III' ORDER BY KodeKelas");
			while($nnSX = mysql_fetch_array($jsmjmSX)){
		///
  	if($KodeKelasSX !=$nnSX[KodeKelas]){?>
            <tr>
              <td width="38"><div align="center"><? echo $nomerSX; ?></div></td>
              <td width="99"><div align="left">
                <?
	  echo strtoupper($nnSX[NamaKelas]); 
	  ?>
              </div></td><td width="3"><strong>:</strong></td>
              <td width="138">.............</td>
            </tr>
            <? 	 $nomerSX++;
	} $KodeKelasSX =$nnSX[KodeKelas]; } 
	?>
          </table>
      </div></td>
    </tr>
  </table>
</div></td>
</tr>
	</table>
	</div>
	</td>
	</tr>
    
</table>
</div>
</body>
</html>
<? 
}
?>
