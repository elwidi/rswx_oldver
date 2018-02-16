<?php 
session_start();
include "../konek.php";
include "../ceke.php";
//header('Refresh: 3');
?>
<html>
<head>
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
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style><script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest').autocomplete('carw.php', 
			{
				/*	parameter "parse" pada script ini sebenarnya adalah deklarasi ulang
					dari event parse di library jquery-autocomplete.
					fungsinya adalah untukmenghandle data yang diterima, karena data yang
					diterima adalah Ajax maka penanganannya adalah sebagai berikut: */
				parse: function(data){ 
					var parsed = [];
					for (var i=0; i < data.length; i++) {
						parsed[i] = {
							data: data[i],
							value: data[i].NamaObat // nama field yang dicari
							 // nama field yang dicari
						};
					}
					return parsed;
				},
				/*	pada parameter formatItem, kita dapat mengcustom tampilan yang akan muncul ketika 
					ada result dari hasil pencarian autocomplete, kalau formatItem ini tidak di deklarasikan
					maka hanya akan muncul berupa daftar nama yang terkesan kaku */
				formatItem: function(data,i,max){
					var str = '';
					/* 	tampilkan foto, apabila foto kosong, maka tampilkan default unknown image
						berapapun lebar foto ini, tingginya disesuaikan menjadi 50px agar tidak menghabiskan tempat */
					 
					
					/*  variable "data" merupakan variable dengan tipe json atau array assosiatif javascript 1 dimensi 
						oleh karena itu dalam mengambil setiap pada "data" hanya dengan "data.nama_property" */
str += '<u>'+data.NamaObat+'<br>'+data.KeyID;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="sd_0.php?hari=supran&id=" + Result;
			}
		);
	});
  </script>
  <style type="text/css">
<!--
.style4 {color: #FFFFFF}
.style5 {color: #FFFF00}
-->
  </style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="1111" colspan="3"><div align="left" class="style1">
HPP DATA 
PERIODE : <? echo date("d.m.Y:H:i:s"); ?> </div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="120"><div align="left">
NAMA OBAT
</div></td><td width="8">:</td>
<td width="555"><div align="left">
<input name="text" type="text" class="style2" id="suggest" />
</div></td>
</tr>
<tr>
  <td colspan="3"><input name="fgfgfg" type="button" class="style3" onClick="location.href='../3w.php';" value="Kembali">
||
  <input name="fgfg" type="button" class="style3" onClick="location.href='iin_kabag_bca_angke.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>';" value="Export Ke Excel">
||
<input name="fgfgfgf" type="button" class="style3" value="Upload Ke Journal Akuntansi" >
<?
if($id>0){ ?> || <?
?>
<input type="button" name="jdhjhdjfd" value="Reset" onClick="location.href='sd_0.php';" class="style3">
<?
} 
?></td>
  </tr>
</table>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="1253" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="18" bgcolor="#FFCCFF"><strong>NO</strong></td><td width="88" bgcolor="#FFCCFF"><strong>NAMA OBAT</strong></td><td width="1127" bgcolor="#FFCCFF"><strong>MASUK</strong></td> 
</tr>
<?
if(!$Bln){
$Bln=date("m")-0;
}else{
$Bln=$Bln;
}
if(!$Thn){
$Thn=date("Y");
}else{
$Thn=$Thn;
}
  $nomer=1;
  if($hari=='supran'){
       $d_D = mysql_query("SELECT * FROM catat_obat WHERE id='$id'");
  }else{
       $d_D = mysql_query("SELECT * FROM catat_obat WHERE Bln=$Bln AND Thn=$Thn AND Sumber like 'BL%' ");
  }
  while($ff = mysql_fetch_array($d_D)){ 
  //
  $num=1;
   $kdidkdidk_99d0 = mysql_query("SELECT id,NoPasien,NamaPasien,Qty,NamaObat,JamTran,HargaBeli,KodeObat FROM jualobat WHERE KodeObat='$ff[IdObat]'");
  while($ww =  mysql_fetch_array($kdidkdidk_99d0)){
 		//
		$depan=1;
 		while($depan<=$ww[Qty]){
		$angka[$num]="$ww[JamTran]";
		$Rm[$num]="$ww[NoPasien]";
		$Pasien[$num]="$ww[NamaPasien]";
		$Id[$num]="$ww[id]";
			$KodeObat[$num]="$ww[KodeObat]";
	// echo "$ww[KodeObat] $num - $ww[id] --> $ww[Qty]<br>";
		$depan++; 
		$num++;
		}  
		//
  
  }//
?>
<tr valign="top">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($ff[NamaObat])); ?></div></td><td><div align="left">
<table width="1139" border="0" cellpadding="2" cellspacing="2" class="style3">
<?
$fgfgfJKJ = mysql_query("SELECT COUNT(id) as jj FROM podetil77x WHERE IdBarang='$ff[IdObat]'  
 AND  Stat=2 ORDER BY id asc");
$hg = mysql_fetch_array($fgfgfJKJ);
if($hg[jj]>0){
?>
<tr>
<td width="17" bgcolor="#CCCCCC"><strong>No</strong></td><td width="21" bgcolor="#CCCCCC"><strong>Rec</strong></td>
<td width="140" bgcolor="#CCCCCC">Po</td>
<td width="36" bgcolor="#CCCCCC">Faktur</td>
<td width="18" bgcolor="#CCCCCC"><strong>Qty</strong></td>
<td width="34">Satuan</td> <td width="829" bgcolor="#CCCCCC"><div align="right"><strong>Detail</strong></div></td>
 </tr>
<? } ?>
<?
$noma=1;
$tar =1;
$JKJ = mysql_query("SELECT IdBarang,Qty,id,NamaBarang,Pengali,Harga,Total,NamaSatuan,IdFaktur,IdPox FROM podetil77x WHERE IdBarang='$ff[IdObat]'  
 AND  Stat=2 ORDER BY IdFaktur asc");
while($kk = mysql_fetch_array($JKJ)){
///
$kjkfd_DFdfd = mysql_query("SELECT NoPo,Ppn,id FROM polog77x WHERE id='$kk[IdPox]'");
$vx = mysql_fetch_array($kjkfd_DFdfd);
$kdjfkdfd_DFdfd =  mysql_query("SELECT NoFaktur FROM fakturpo WHERE id='$kk[IdFaktur]'");
$bx = mysql_fetch_array($kdjfkdfd_DFdfd);
 ?>
<tr valign="top">
<td><div  align="center"><? echo $noma; ?></div></td>
<td><div align="center"><? echo $kk[id]; ?></div></td>
<td><div align="left"><?
if($vx[Ppn]==1){
?><i><font color="#990000"><?
echo $vx[NoPo];
?></font></i><? 
}else{
echo $vx[NoPo];
}
?></div></td>
<td><div align="left"><?
echo $bx[NoFaktur];
?></div></td>
<td><div align="left"><?
 $Tot = $kk[Qty]*$kk[Pengali];
echo $kk[Qty];
  ?></div></td>
  <td><div align="left"><?
  echo ucfirst(strtolower($kk[NamaSatuan])); 
  ?></div></td>
 
<td valign="top"><div align="left">
<table width="642" border="0" cellpadding="1" cellspacing="1" class="style3">
<tr>
<td>No</td><td>No Po</td><td><div align="right">Nilai</div></td><td>NoTxn</td><td>NoRm</td><td>NamaPasien</td>
<td width="46">Nilai</td>
<td width="46">Rec</td>
<td width="46">Ppn(10%)</td>

</tr>
 <?
 /*
 if(!$$awalX){
 $awalX=1;
 }else{
 $awalX=$awalX;
 }
 */
 
$awalX = 1; 
while($awalX<=$Tot){
 $wa = $awalX%2;
if($wa==1){
$warna2='  bgcolor="#FCDCBC"';
}else{
$warna2=' bgcolor="#EFFFD2"';
}
?>
 <tr <? echo $warna2; ?> >
<td width="20"><div align="left"><? echo $awalX; ?></div></td>
<td width="153"><div align="left"><?
echo $vx[NoPo];  //echo " ($tar)"; 
?></div></td>
<td width="55"><div align="right"><? echo ($kk[Harga]);
$tot = $tot + $kk[Harga];
 ?></div></td>
 <?
 if($KodeObat[$tar]==$kk[IdBarang]){
 ?><td width="58" bgcolor="#FFFF99"><div align="left"><?
 echo $angka[$tar];
 ?></div></td>
 <td width="62"><div align="left"><?
 echo $Rm[$tar]; 
 ?></div></td>
 <td width="183"><div align="left"><?
   echo $Pasien[$tar];
 ?></div></td>
 <td><div align="left"><?
 if($Id[$tar]>0){
 $Jual =($kk[Harga]);
  $Pakai = $Pakai + $kk[Harga];
}else{
 $Jual =0;
 }
// 	 $kdhkdjfhhhkd_Dfdfd  = mysql_query("UPDATE  catat_obat SET Hpp='$Pakai' WHERE KeyID='$ff[KeyID]'");
$KeyID="$ff[KeyID]";
 echo ($Jual);
 ?></div></td><td width="17"><div align="center"><? echo "#$Id[$tar]";  ?></div></td>
  <?  $awalX2++;}else{ 
  $balan='<td colspan="4">&nbsp;</td>';
  echo $balan;  } ?><td><div align="center"><? 
   if($vx[Ppn]==1){ 
   $Ppn =$kk[Harga]*10/100;
  echo ($Ppn);
  $TPpn = $TPpn+$Ppn;
  }else{
  echo "-";
  }  ?></div></td>
 </tr>
  <?
$awalX++; $tar++;}
  
$Tot=0;
?> <tr>
   <td colspan="2" bgcolor="#CEFDC8"><div align="center"><em>Total</em></div></td>
    <td bgcolor="#CEFDC8"><div align="left"><em>
      <?
	echo ($tot);
	$trt = $trt + $tot; 
	?>
    </em></div></td>
    <td colspan="6" bgcolor="#CEFDC8"><em>Pakai : <? echo ($Pakai);
   	  $tot_3 = $tot_3 + $Pakai; ?>  
	 <?
	$kdjkdjkdfkd_DFdf  = mysql_query("SELECT SUM(Total) as hh FROM returbeli WHERE IdPo='$vx[id]' AND IdBarang='$kk[IdBarang]'");
	$bpa = mysql_fetch_array($kdjkdjkdfkd_DFdf);
if($bpa[hh]>0){
	?><b>   Retur :    ( <?  echo ($bpa[hh]);  
	       ?> ) </b> 
	<? 
	} 	
 $Kunci =$ff[KeyID]; 
 $IdBarang = $kk[IdBarang];
	?>  Persedian : <? 
	$guna = $guna + $Pakai;
	$Perse = $tot - $Pakai;	
?> <font color="#990000"><?
	echo "Rp.";
	if($Perse==0){
	echo "Habis";
	}else{
	
	 echo ($Perse);
   $tot_2 = $tot_2 + $Perse; 
	 	}
		
 $NamaBarang=$kk[NamaBarang];
$tot_1 = $tot_1 + $tot; 
		$tot = 0; $Pakai=0;
		
  //?> <?  if($kdhkdjfhhhkd_Dfdfd){
 echo " Ok   ";   ?> <?   
 }?></font> </em> &nbsp;&nbsp;   <?  if($vx[Ppn]==1){
  ?> <font color="#003399"><u>  Ppn  <?
   echo ($TPpn);
   $tot_Ppn = $tot_Ppn+$TPpn;
   
 $TPpn=0;
  }   $PerseX=0; 
  ?></u> </font>  </td>
 </tr>
   </table>
</div></td>
</tr>
<?
$noma++; } ?>
 <tr>
 <td colspan="7" bgcolor="#3366FF"><span class="style4">GT 1 : Persedian : <span class="style5"><? echo $NamaBarang; ?>, </span>Tot  <span class="style5"><? echo ($tot_1);
 
  ?>. </span>Tot Perse :   <span class="style5"><? echo ($tot_2); 
 ?>. </span>Tot Pakai <span class="style5">:    
       <?  echo ($tot_3);
	// echo "--$Kunci - $IdBarang --<br>";
	 $kdhkdjfhhhkxxxd_Ddfdfdffdfd  = mysql_query("UPDATE  catat_obat SET Sta='$tot_2' WHERE KeyID='$Kunci' AND IdObat='$IdBarang'");
$kdhkdjfhhhkxxxd_Ddfdfdccxxcxxffdfd  = mysql_query("UPDATE  catat_obat SET Hpp='$tot_3' WHERE KeyID='$Kunci' AND IdObat='$IdBarang'");
   $tot_3=0; $tot_1=0;  $tot_2=0; ?>
  </span></span><span class="style5">.</span></td>
 </tr></table>
</div></td>
</tr>
<?
$nomer++; } ?>
 </table>
</div></td>
</tr>
<tr>
  <td colspan="3" valign="top" bgcolor="#ECE9D8"><div align="left" class="style1"><strong>
  Total Persediaan  : <? 
    $tra = $trt -$guna; 
  echo ($tra); 
   	  //echo "($kk[IdBarang])";
	// $kdhkdjfhhhkxxxd_Dfdfd  = mysql_query("UPDATE  catat_obat SET Hpp='$guna' WHERE KeyID='$KeyID'");

   //$kdhkdjfhhhkd_cccDfdfd  = mysql_query("UPDATE  catat_obat SET Sta='$tra' WHERE KeyID='$KeyID'");
   //echo " ( $KeyID ) "; 
   $KeyID=''; 
   
   ?> <font color="#009933"> || Ppn : <? echo ($tot_Ppn);  ?></font>
  </strong></div></td>
</tr>
</table>
</div>
</body> 
</html> 