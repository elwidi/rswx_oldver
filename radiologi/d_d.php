<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$IdPasien'");
$x = mysql_fetch_array($PasieR);
if(!$x[id]){
//header("Location:./index.php");
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#0099CC';
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
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>
<body>

<div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="409" colspan="3"><div align="center" class="style1">
        INPUT HASIL PEMERIKSAAN RADIOLOGI<br />
        </div></td>
    </tr>
    <tr valign="top">
      <td colspan="3">
	  <div align="left">
	  <table border="0" cellpadding="2" cellspacing="2" class="style2">
	  <tr>
	  <td width="119">MSTKEY</td>
	  <td width="3"><strong>:</strong></td>
	  <td width="267"><div align="left"><? echo $x[MstKey]; ?></div></td>
	  </tr>
	  <tr>
	  <td>NO RM</td><td><strong>:</strong></td>
	  <td><div align="left"><? echo $x[NoPasien]; ?></div></td>
	  </tr>
	  <tr>
	  <td>NAMA PASIEN</td><td><strong>:</strong></td>
	  <td><div align="left"><? echo strtoupper($x[NamaPasien]); ?></div></td>
	  </tr>
	  <tr>
	  <td>KELAS</td>
	  <td><strong>:</strong></td>
	  <td><div align="left"><? 
				 $splo = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan); 
echo "$j[NamaKelas]"; ?></div></td>
	  </tr>
	  <tr>
	    <td colspan="3"><div align="left">
		<input name="fgf" type="button" class="style2" style="background:#CCCCCC" onClick="location.href='sabar_itu_baik.php?id=<? echo $IdPasien; ?>';" value="Mundur">
		<input type="button" name="sdff" value="Ke Depan" onClick="location.href='../Daftar/fito_sayangku.php';"  style="background:#CCCCCC" class="style2">
		 
		 
	    </div></td>
	    </tr>
	  </table>
	  </div>
	  </td>
    </tr>
    <tr>
      <td colspan="3" valign="top">
        <div align="left">
          <table border="1" class="style2">
            <tr>
              <td width="24" bgcolor="#D4D0C8"><div align="center"><span class="style3">NO</span></div></td>
    <td width="307" bgcolor="#D4D0C8"><span class="style3">NAMA PEMERIKSAAN</span></td> 
    <td bgcolor="#D4D0C8"><span class="style3">NO BUKTI</span></td>
    </tr>
            <?
$nomer=1;
$kdkidkdikd = mysql_query("SELECT * FROM txninap3 WHERE   NoBukti='MM-$IdStruk'");
while($aa = mysql_fetch_array($kdkidkdikd)){
$lddkld_lld = mysql_query("SELECT IdTxn FROM pasrad2 WHERE IdTxn='$aa[id]'");
$mx = mysql_fetch_array($lddkld_lld);
  if($mx[IdTxn]==$aa[id]){
  $warna='bgcolor="#FFFF66"';
  }else{
    $warna='';
  }
?> <tr  <? echo $warna;  ?> onClick="wCompare = window.open('d5r_r0d.php?IdStruk=<? echo $IdStruk; ?>&IdBiaya=<? echo $aa[id]; ?>&id=<? echo $IdPasien; ?>', 
  'wCompare', 'width=790,height=550,left=610,Top=78,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
              <td><div align="center"><?  echo $nomer; ?></div></td>
    <td  ><div align="left"><? echo strtoupper($aa[NamaBiaya]); ?></div></td>
    <td   onClick="wCompare = window.open('aa_0.php?IdBiaya=<? echo $aa[id]; ?>&id=<? echo $IdPasien; ?>', 
  'wCompare', 'width=670,height=550,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" ><div align="left"><? echo $aa[NoBukti]; ?></div></td>
    </tr>
            <? $nomer++; } ?><tr>
              <td colspan="3" bgcolor="#D4D0C8">&nbsp;</td> 
      </tr>
          </table>
    </div>    </td>
    </tr>
  </table>
</div>
</body>
</html>
<?
}else{

}
?>