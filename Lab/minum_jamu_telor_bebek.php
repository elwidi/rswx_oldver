<?
session_start();
 include "../konek.php";
include "../ceke.php";
 $id = $_GET["id"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12 || $a[Level]==9){?>
<html>
<head>
<script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66CC33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style9 {color: #FFFFFF; font-weight: bold; }
-->
    </style>
</head>
<body>
<div align="center">
<table width="961" align="left" class="style1">
<tr>
<td width="928"><div align="center" class="style5">
	<?
  	if($a[Level]==1){
	       $file='../gambar/pendaftaran.gif';
		   }elseif($a[Level]==7){
		   $file='../gambar/akutansi.gif';
		   }elseif($a[Level]==98){
		   $file='../gambar/boga.gif';
		   }elseif($a[Level]==2){
		   $file='../gambar/cust ser.gif';
		   }elseif($a[Level]==11){
		   $file='../gambar/farmasi.gif';
		   }elseif($a[Level]==112){
		   $file='../gambar/fisio.gif';
		   }elseif($a[Level]==3){
		   $file='../gambar/hrd.gif';
		   }elseif($a[Level]==9){
		   $file='../gambar/kasir.gif';
		   }elseif($a[Level]==4){
		   $file='../gambar/keperawatan.gif';
		   }elseif($a[Level]==22){
		   $file='../gambar/keuangan.gif';
		   }elseif($a[Level]==12){
		   $file='../gambar/laboratorium.gif';
		   }elseif($a[Level]==5){
		   $file='../gambar/log far.gif';
		   }elseif($a[Level]==6){
		   $file='../gambar/log umum.gif';
		   }elseif($a[Level]==77){
		   $file='../gambar/poli.gif';
		    }elseif($a[Level]==16){
		   $file='../gambar/radiologi.gif';
		    }elseif($a[Level]==8){
		   $file='../gambar/rm.gif';
		    }elseif($a[Level]==9){
		   $file='../gambar/ugd.gif';
		   }
		   ?>
          <img src="<? echo $file; ?>">
  </div>
</div></td>
</tr>
<tr>
<td valign="top"> 
<div align="left">
<form target="_self">
<table border="0" cellpadding="2" cellspacing="2">
<tr class="style1">
<td width="112">NAMA PASIEN</td><td width="12"><strong>:</strong></td>
<td width="636"><div align="left">
<input type="text" name="NamaPasien" maxlength="30" size="20">
<input type="hidden" name="hari" value="oke">
<input type="hidden" name="mobil" value="<? echo $mobil; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">

|| 
<input name="ghg" type="submit" class="style1" value="Submit">
<?
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 ){}else{
?><input type="button" name="fgf" value="Input Transaksi Baru" onClick="location.href='mencret_jorok.php';" class="style1"  style="background:#FFFF33">
<? }?><input name="djdjd" type="button" class="style1" onClick="location.href='../3w.php';" value="Kembali"> 
 
 
</div></td>
</tr>
</table></form>
</div></td>
</tr>
<tr>
<td valign="top">
<div align="left">
<table width="904" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr bgcolor="#000066">
<td width="23" height="25" bgcolor="#666666"><span class="style9">NO</span></td>
<td width="24" height="25" bgcolor="#666666"><span class="style9">NO RM</span></td>
<td width="91" bgcolor="#666666"><span class="style9">REGI ID</span></td>
<td width="24" bgcolor="#666666"><span class="style9">TGL</span></td>
<td width="27" bgcolor="#666666"><span class="style9">JAM</span></td>
<td width="297" bgcolor="#666666"><span class="style9">NAMA PASIEN</span></td>
<td width="111" bgcolor="#666666"><div align="right"><span class="style9">TXN</span></div></td>
<td width="48" bgcolor="#666666"><span class="style9">OPR</span></td>
<td width="60" bgcolor="#666666"><div align="left" class="style9">NOKWT</div></td>
<td width="81" bgcolor="#666666"><div align="left" class="style9">KASIR</div></td>
<td width="50" bgcolor="#666666"><div align="left" class="style9">TGL BYR </div></td>  
</tr>
<?   
$nis=1;
     $dataSY = mysql_query("SELECT * FROM labumum   ORDER BY id DESC LIMIT 0,120");
     while($ss = mysql_fetch_array($dataSY)){
 $kj_09 = mysql_query("SELECT SUM(Total) AS jh FROM txnjalan2 WHERE RegId='$ss[RegId]'");
 $n = mysql_fetch_array($kj_09);
 $plak  = $nis%2;
 if($plak==1){
 $colo='bgcolor="#DEFEDC"';
 }else{
 $colo='';
 }
 
 if($a[Level]==9){ ?>
 <tr   <? echo $colo; ?> onClick="location.href='d_re.php?id=<? echo $ss[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
 <? 
 }else{
 ?><tr   <? echo $colo; ?>   onClick="location.href='nasi_kucing.php?hari=<? echo $ss[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" > 
 <? } ?>
<td><div align="center"><? 
/////
$kdjkkdf2 = mysql_query("SELECT COUNT(id) AS kk FROM cetak_hasil_lab WHERE RegId='$ss[RegId]'");
$bn2 = mysql_fetch_array($kdjkkdf2);
///
$kdjkkdf = mysql_query("SELECT COUNT(id) AS kk FROM cetak_hasil_lab WHERE RegId='$ss[RegId]' AND Hasil!=''");
$bn = mysql_fetch_array($kdjkkdf);
$kdjfdf_dfdfdfd = mysql_query("SELECT * from kwitansirj WHERE RegId='$ss[RegId]'");
$gx = mysql_fetch_array($kdjfdf_dfdfdfd);
////===================================+++++++++++++++++++++++++++++++++++++++++++++++++++++
//	$jkop = mysql_query("SELECT COUNT(id) AS mm FROM hasilcuculab3 WHERE RegId='$ss[RegId]'");
 // $sp =  mysql_fetch_array($jkop);
/////////////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//$jkop2 = mysql_query("SELECT COUNT(id) AS mm FROM hasilcuculab3 WHERE Hasil!='' and  RegId='$ss[RegId]'");
//$sp2 =  mysql_fetch_array($jkop2);
////===============================================================================

/////////////////////////////////////////////////////////////////////////////////////
$warna= 'bgcolor="#FFFF00"';
$warna2= 'bgcolor="#FFFF00"';
$warna3= 'bgcolor="#FFCC99"';
   echo $nis;
 ?></div></td>    
<td><div align="center"><? echo $ss[id]; ?></div></td> 
<td><div align="left"><? echo $ss[RegId]; ?></div></td>
<td><div align="left"><? echo "$ss[Tgl]/$ss[Bln]/$ss[Thn]"; ?></div></td> 
<td><div align="left"><? 
$pc = explode("-",$ss[RegId]);
echo "$pc[1]";
?></div></td>
 <td <? 
 if($bn[kk]==0 && $bn2[kk]==0 && $n[jh]>0){
 echo $warna3;
  }elseif($bn[kk]==$bn2[kk] && $sp[mm]==$sp2[mm] && $bn[kk]>0  && $n[jh]>0){
 echo $warna3;
 }elseif($bn[kk]!=$bn2[kk] && $n[jh]>0){
 echo $warna;
  }elseif($n[jh]>0 && $sp[mm]!=$sp2[mm]){
  echo $warna2; } ?> ><div align="left"><? echo strtoupper($ss[NamaPasien]); ?></div></td>
 <td><div align="right"><? 
   echo number_format($n[jh]);
 ?></div></td>
<td><div align="left"><? echo strtoupper($ss[Opr]); ?></div></td>
<td><div align="center"><? 
if($gx[id]>0){
echo "KWT:$gx[id]"; 
}else{
echo "-";
} ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($gx[Kasir])); ?></div></td>
<td><div align="left"><? echo "$gx[TglBayar]-$gx[BlnBayar]-$gx[ThnBayar]";   ?></div></td>
</tr> <? 
   $nis++; } ?>
<tr bgcolor="#000066">
<td colspan="11">&nbsp;</td>
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
}else{
header("Location:./keluar.php");
}
?>
