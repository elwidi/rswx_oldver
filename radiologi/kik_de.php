<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
 //
$IU99 = mysql_query("SELECT * FROM kwitansirj WHERE RegId='$hh[RegId]'");
$ni = mysql_fetch_array($IU99);
//
if($ni[id]=='dfdfd'){
echo "TRANSAKSI BELUM DISELESAIKAN DI KASIR<br>";
?>
<input type="button" name="FGF" value="Kembali" onClick="location.href='4e.php';">
<? 
}elseif(!$hh[id]){
echo "$hh[id]";
//header("Location:../keluar.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
 ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF00';
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
	font-size: 16px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>

<div align="left">
  <table width="411" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="367" colspan="3"><div  align="left">
	  <img src="../gambar/rad.gif">
	  </div>
        </td>
    </tr>
    <tr>
      <td colspan="3"><span class="style2">.</span></td>
    </tr>
    <tr>
      <td colspan="3" valign="top">
        <div align="left">
          <table width="403" border="0" cellpadding="2" cellspacing="2" class="style2">
            <tr>
              <td width="177">NO RM</td><td width="14">:</td><td width="251"><div align="left"><? echo $hh[NoPasien]; ?></div></td>
    </tr>
	 
            <tr>
              <td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($hh[NamaPasien]); ?></div></td>
    </tr>
	<tr>
	<td>NO KWT</td><td>:</td><td><div align="left"><? echo "KWT:$ni[id]";  ?></div></td>
	</tr>
	<tr>
	<td>KASIR</td><td>:</td><td><div align="left"><? echo strtoupper($ni[Kasir]); ?></div></td>
	</tr>
	<tr>
	<td>TGL / JAM BAYAR</td><td>:</td><td><div align="left"><? echo "$ni[TglBayar]/$ni[BlnBayar]/$ni[ThnBayar] JAM : $ni[JamBayar]"; ?></div></td>
	</tr>
	<tr>
	<td>PENJAMIN</td><td>:</td><td><div align="left"><? echo strtoupper($ni[NamaPer]); ?></div></td>
	</tr>
            <tr>
              <td colspan="3" bgcolor="#FFFF66"><div align="left">
			  <input name="fgf" type="button" class="style2" onClick="location.href='../Daftar/ed_d.php';" value="Kembali">
			  <input name="fggf" type="button" class="style2" onClick="location.href='h_0_8.php?id=<? echo $id; ?>';" value="Cetak Hasil">
			  <?
			    $pcd =explode("-",$a[Nik]);
  $Nik=strtoupper($pcd[0]);
if($Nik=='DR'){}else{
			  ?><input type="button" name="fgfgf" value="AlterProses" onClick="location.href='au.php?id=<? echo $id; ?>';" class="style2">
			  <?
			  } 
//			  echo "vv $hh[NoPasien]";
$kdikdidki = mysql_query("SELECT id FROM datapasien WHERE NoPasien='$hh[NoPasien]'");
$mox= mysql_fetch_array($kdikdidki);
			  ?>
			   
			  </div></td>
    </tr>
            <tr>
              <td colspan="3" valign="top">
                <div align="left">
                  <table border="1" class="style2">
                    <tr>
                      <td width="18" bgcolor="#A7F99C"><strong>NO</strong></td><td width="264" bgcolor="#A7F99C"><strong>NAMA TINDAKAN</strong></td><td width="92" bgcolor="#A7F99C"><div align="right"><strong>HARGA</strong></div></td>
    </tr>
                    <?
$ni=1;
$kdidkdikdid = mysql_query("SELECT * FROM txnjalan WHERE RegId='$hh[RegId]'");
while($bx= mysql_fetch_array($kdidkdikdid)){
//
$kiksik_lll = mysql_query("SELECT id FROM pasrad WHERE IdTxn='$bx[id]'");
$mx=mysql_fetch_array($kiksik_lll);

//
if($mx[id]){
?>
                 <tR  onClick="wCompare = window.open('d5r_r0.php?IdBiaya=<? echo $bx[id]; ?>&id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=440,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" bgcolor="#FFCC99" >
<? 
}else{
?>
                    <tR  onClick="wCompare = window.open('d5r_r0.php?IdBiaya=<? echo $bx[id]; ?>&id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=440,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
	<? } ?>
                      <td><div align="center"><? echo $ni; ?></div></td>
    <td><div align="left"><? echo strtoupper($bx[NamaBiaya]); ?></div></td> 
    <td><div align="right"><? echo  number_format($bx[JumlahHarga]);
	$ftr=$ftr+$bx[JumlahHarga];
	 ?></div></td>
    </tR>
                 
                    <? $ni++; } ?>   <tR>
                      <td colspan="2" bgcolor="#A7F99C"><div align="center"><strong>TOTAL</strong></div></td>
                      <td bgcolor="#A7F99C"><div align="right"><strong><? echo number_format($ftr); ?></strong></div></td>
                    </tR>
                  </table>
    </div>    </td>
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