<?php 
session_start();
include "../konek.php";
include "../ceke.php";
//header('Refresh: 2');
if(!$Bln){
$Bln=$bln=date("m");
$Thn=$thn1=date("Y");
}else{
$bln=$Bln;
$thn1=$Thn;
}?>
<html>
<head>
<style type="text/css">
<!--
.style3 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
.style2 {
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
  }
.style6 {color: #000000; font-weight: bold; }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6633';
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
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1110" height="43" colspan="3"><div align="left" class="style3">
Laporan Faktur Pembelian  <br />
<?

?>
Periode : <? include "../bulan.php"; ?>
</div></td>
</tr>
<tr class="style2">
<td colspan="3"><div align="left">
<input type="button" name="fgfg" value="Kembali"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 onClick="location.href='index.php';">
 <input type="button" name="fgfgfgf" value="Cek Perionde"   onClick="wCompare4f3w12 = window.open('../lg/c2a0.php?Kat=<? echo $Kat; ?>&as=41', 
  'wCompare4f3w12', 'width=400,height=140,left=170,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f3w12.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <input type="button" name="fgfgfg" value="Export Ke Excel" onClick="location.href='d09m.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>';">
  </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="938" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="32" rowspan="2" bgcolor="#FFCCCC"><div align="center"><span class="style6">NO </span></div></td><td colspan="2" bgcolor="#FFCCCC"> <div align="center" class="style6">TANGGAL</div></td><td colspan="2" bgcolor="#FFCCCC"> <div align="center" class="style6">ORDER  </div></td><td width="195" rowspan="2" bgcolor="#FFCCCC"> <span class="style6">SUPPLIER</span></td><td width="64" rowspan="2" bgcolor="#FFCCCC"><div align="right"><strong>PPN</strong></div></td><td width="53" rowspan="2" bgcolor="#FFCCCC"><div align="right"><strong>NILAI</strong></div></td><td width="55" rowspan="2" bgcolor="#FFCCCC"><div align="right"><strong>NILAI+PPN</strong></div></td>
</tr>
<tr>
<td width="68" bgcolor="#FFCCCC"><span class="style6">BUAT</span></td>
<td width="71" bgcolor="#FFCCCC"><span class="style6">ORDER</span></td>
<td width="159" bgcolor="#FFCCCC"><span class="style6">FARMASI</span></td>
<td width="185" bgcolor="#FFCCCC"><span class="style6">LOGISTIK</span></td>
</tr>

<?
$nomer=1;
$kdkdjkfd = mysql_query("SELECT * FROM polog77x  where Bln=$Bln AND Thn='$Thn' ORDER BY id desc");
while($bb = mysql_fetch_array($kdkdjkfd)){
//
$dkjfkdjfdfd_DFdf  = mysql_query("SELECT NoPo,Tgl,Bln,Thn FROM polog77 WHERE id='$bb[IdPo]'");
$b= mysql_fetch_array($dkjfkdjfdfd_DFdf);//
$pak = $nomer%2;
if($pak==1){
$warna='';
}else{
$warna='  bgcolor="#D2FD84"';
}


    $kjdkjksjkd = mysql_query("SELECT * FROM podetil77x WHERE   IdPox='$bb[id]'");// LIMIT $awal,$dara");
	while($pp =  mysql_fetch_array($kjdkjksjkd)){
	  if($pp[PotRp]>0){
  
	$hass = ($pp[Harga]-($pp[Harga]-$pp[PotRp]))/$pp[Harga]*100;
$Harga=($hass/$pp[Qty]/$pp[Pengali]);   //echo "%"; 
	 }elseif($pp[PotPrc]>0){
$Harga=$pp[PotPrc];
	}else{
 	} 
	//////
 		$Diskon2 =$Diskon2+ $pp[Total];
		 
	
	///////
	}

  ?>
 <tr <?  echo $warna; ?>   onClick="wCompare4_0_0_0f3w12 = window.open('dimas_mau_tk.php?id=<? echo $bb[id]; ?>', 
  'wCompare4_0_0_0f3w12', 'width=800,height=440,left=400,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4_0_0_0f3w12.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo "$b[Tgl]-$b[Bln]-$b[Thn]"; ?></div></td>
 <td><div align="left"><? echo "$bb[Tgl]-$bb[Bln]-$bb[Thn]"; ?></div></td>
 <td><div align="left"><? echo $b[NoPo]; ?></div></td>
  <td><div align="left"><? echo $bb[NoPo]; ?></div></td>
 <td><div align="left"><?
 echo ucfirst(strtolower($bb[NamaSupplier])); 
 ?></div></td>
 <td><div  align="right"><?
 $Disko = $Diskon2*10/100;
   $tot_1 = $tot_1 + $Disko;
echo ceil($Disko);
 ?></div></td>
 <td><div  align="right"><?
 echo ceil($Diskon2);
  $tot_2 = $tot_2 + $Diskon2;

 ?></div></td>
 <td><div align="right"><?
 $tot  = $Disko  + $Diskon2; 
 $tot_3 = $tot_3 + $tot;
 echo ceil($tot);
 $Disko=0;
$Diskon2=0;
 ?></div></td>
 </tr>

 <? $nomer++; } ?> <tr   >
   <td colspan="6" bgcolor="#FFCCCC"><div align="center"><strong>TOTAL</strong></div></td>
   <td bgcolor="#FFCCCC"><div align="right"><strong>
     <?
   echo ceil($tot_1);
   ?>
   </strong></div></td>
  <td bgcolor="#FFCCCC"><div align="right"><strong>
    <?
   echo ceil($tot_2);
   ?>
  </strong></div></td>  
  <td bgcolor="#FFCCCC"><div align="right"><strong>
    <?
   echo ceil($tot_3);
   ?>
  </strong></div></td>
 </tr>
 </table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>