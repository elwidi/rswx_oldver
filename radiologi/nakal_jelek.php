<?
session_start();
 include "../konek.php";
 include "../salaman.php";
include "../rake.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){

$Bus = mysql_query("SELECT * FROM txnrad WHERE id=$fito");
$x = mysql_fetch_array($Bus);
if(!$x[id]){
header("Location:./permen_karet.php");
}
?>
<html>
<head><script type="text/javascript">
window.onload = function(){
	window.print();
}
</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style5 {font-size: 10px}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style7 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>
<body>

<div align="left">
  <table border="0" cellpadding="1" cellspacing="1">
    <tr>
    <td width="444"><div align="center" class="style1">STRUK TRANSAKSI <br>
	RADIOLOGI LUAR </div></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td>
      <div align="left">
        <table width="425" border="0" cellpadding="1" cellspacing="1">
         <tr class="style1">
 <td><strong>NO RAD</strong></td>
 <td><strong>:</strong></td>
 <td><div align="left"><strong>
   <?
 //
   $KeyID=date("m-Y");

 //
 $kikj2 = mysql_query("SELECT NoUrut FROM norad WHERE NoTxn='RL-$x[RegId]'");
 $dapat2 = mysql_fetch_array($kikj2);
 if($dapat2[NoUrut]>0){
 echo "$dapat2[NoUrut]";
 }else{
 ?> 
   <? 
   $kikj = mysql_query("SELECT NoUrut FROM norad  WHERE  KeyID='$KeyID' ORDER BY NoUrut DESC");
 $dapat = mysql_fetch_array($kikj);
 $Baru = $dapat[NoUrut]+1;
$TglJam=date("H:i:s");
$Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");

$isi =mysql_query("INSERT INTO  `norad` (`NoUrut`, `NoTxn`, `NoPasien`, `NamaPasien`, `Opr`, `TglJam` , `KeyID`, `Tgl`, `Bln`, `Thn`
, `Stat`, `IdBagian`, `NamaBagian`) 
VALUES ('$Baru', 'RL-$x[RegId]','$x[id]','$x[NamaPasien]', '$a[Nama]', '$TglJam','$KeyID','$Tgl','$Bln','$Thn','0','RL','RAD LUAR')");
     echo "$Baru"; ?>  
 
   <? 
 }

  ?>
 </strong></div></td>
 </tr><tr>
        <td width="114"><div align="left" class="style6 style5">NO REG</div></td>
        <td width="9"><div align="center" class="style1 style5">:</div></td>
        <td width="292"><span class="style4 style5">
          <?
		  $nop = mysql_query("SELECT id FROM txnrad WHERE RegId='$x[RegId]'");
		  $h = mysql_fetch_array($nop);
		echo "$x[RegId]";  ?>
          </span>
          <div align="left" class="style4 style5"></div></td>
        </tr>
		<tr>
		<td><div align="left" class="style4 style5">JENIS PERIKSA</div></td><td><div align="center" class="style4 style5"><strong>:</strong></div></td><td><div align="left" class="style4 style5">RADIOLOGI </div></td>
		</tr>
		<tr>
		<td><div align="left" class="style4 style5">NAMA PASIEN</div></td><td><div align="center" class="style4 style5"><strong>:</strong></div></td><td><span class="style4 style5"><? echo strtoupper($x[NamaPasien]); ?>
		  </span>
		  <div align="left" class="style4 style5"></div></td>
		</tr>
		<tr>
		<td><div align="left" class="style4 style5">JENIS KELAMIN</div></td><td><div align="center" class="style4 style5"><strong>:</strong></div></td><td><span class="style4 style5"><? echo strtoupper($x[JenisKelamin]); ?>
		  </span>
		  <div align="left" class="style4 style5"></div></td>
		</tr>
<tr>
		<td><div align="left" class="style4 style5">USIA</div></td><td><div align="center" class="style4 style5"><strong>:</strong></div></td><td><span class="style4 style5"><? echo "$x[Usia] Thn";
$pcd =explode("-",$x[LbhBulan]);
echo " $pcd[0] Bl $pcd[1] Hr";
?>
		  </span>
		  <div align="left" class="style4 style5"></div></td>
		</tr>  
		<tr>
		<td><div align="left" class="style4 style5">DOKTER</div></td><td><div align="center" class="style4 style5"><strong>:</strong></div></td><td><span class="style4 style5"><? echo $x[NamaDokter]; ?>
		  </span>
		  <div align="left" class="style4 style5"></div></td>
		</tr>
		<tr class="style4">
		<td>RUJUKAN</td><td>:</td>
		<td><div align="left"><? echo $x[NamaPerujuk]; ?></div></td>
		</tr>
		<tr>
		<td colspan="3"><div align="center"><span class="style4"> </span></div></td>
		</tr>
		<tr>
		<td colspan="3">
		<table border="0" cellpadding="1" cellspacing="1">
				<tr bgcolor="#000000">
		<td width="24" height="18" bgcolor="#FFFFFF"><span class="style4"><strong>NO</strong></span></td> 
		<TD width="268" bgcolor="#FFFFFF"><span class="style4"><strong>NAMA BIAYA </strong></span></TD>
		<td width="54" bgcolor="#FFFFFF"><div align="right"><span class="style4"><strong>HARGA</strong></span></div></td>
		</tr>
		<?
		$no=1;
		$skak =  mysql_query("SELECT * FROM txnjalan WHERE RegId='$x[RegId]'");
		while($sa= mysql_fetch_array($skak)){
		?>
		<tr valign="top">
		<td><div align="center" class="style4 style5"><? echo $no; ?></div></td>
		 
		<td><div align="left" class="style6"><? echo strtoupper($sa[NamaBiaya]); ?></div></td>
		<td><div align="right" class="style6"><? echo number_format($sa[Harga]); 
		$Tharga = $Tharga + $sa[Harga];
		?></div></td>
		</tr>
		<? $no++; } ?>
		<tr bgcolor="#000000">
		<td colspan="2" bgcolor="#FFFFFF"><div align="center" class="style4"><strong>TOTAL</strong></div></td>
		<td width="54" bgcolor="#FFFFFF"><div align="right" class="style4"><strong><? echo number_format($Tharga); ?></strong></div></td>
		</tr>
		<tr>
		<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
		<td colspan="4">
		<div align="right">
		<table border="0" cellpadding="1" cellspacing="1" class="style4" >
		<tr>
		<?
		$tgp=date("d"); $blp=date("m"); $thp=date("Y");
		$jam = date("H:i:s");
		?>
		<td>BEKASI<span class="style7">, </span><? echo "$tgp/$blp/$thp"; ?></td>
		</tr>
		<tr>
		<td><p>&nbsp;</p>
		  <p>&nbsp;</p></td>
		</tr>
		<tr>
		<td> <div align="center">( <? echo strtoupper($a[Nama]); ?> ) </div></td>
		</tr>
		<tr>
		<td> <div align="center">
		  <?  echo $jam; ?> 
		  </div></td>
		</tr>
		</table>
		</div>
		</td>
		</tr>
		 </table>
		</td>
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
header("Location:./keluar.php");
}
?>