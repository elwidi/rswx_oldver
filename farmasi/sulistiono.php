<?
session_start();
include "../konek.php";
include "../ceke.php";
 if($a[Level]==4){
  $trt_po = date("d/m/y");
  $NamaPasien = $_GET["NamaPasien"];
  ?>
 <html>
 <head>
 <style type="text/css">
<!--
.style11 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
.style12 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
 </style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CC66CC';
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
        <tr valign="top">
        <td width="1214" colspan="3" bgcolor="#5ABB52" >
          <div align="left"> 
            <?
if($a[KodeBagian]==6){
$file='../gambar/ok.gif';
 }elseif($a[KodeBagian]==29){
 	       $file='../gambar/ugd.gif';
}elseif($a[KodeBagian]==22){
	       $file='../gambar/rm.gif';
}elseif($a[KodeBagian]==21){
	       $file='../gambar/cs.gif';
		   }elseif($a[KodeBagian]!=24 && $a[Level]==9){
		   $file='../gambar/poli.gif';
  	}elseif($a[Level]==1){
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
		   }elseif($a[Level]==9 && $a[KodeBagian]==24){
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
 		    }elseif($a[Level]==16){
		   $file='../gambar/radiologi.gif';
		    }elseif($a[Level]==8){
		   $file='../gambar/rm.gif';
		    }elseif($a[Level]==10){
		   $file='../gambar/ugd.gif';
		   }
		   ?>
          <img src="<? echo $file; ?>">            </div></td>
       </tr><tr valign="top">
  <td width="984" colspan="3"><div align="left" class="style11">
  HALAMAN PENJUALAN OBAT RESEP LUAR
  </div></td>
  </tr>
  <tr>
  <td colspan="3" valign="top">
  <div align="left">
  <table border="0" class="style1" cellpadding="2" cellspacing="2">
  <tr>
  <td width="78">Nama
  <td width="8">:</td>
  <tD width="788"><div align="left">
  <input type="text" name="Nama" maxlength="120" size="30">
  </div></tD>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
	<input name="fgfgf" type="button" class="style11" onClick="location.href='index.php';" value="Kembali">
	<input name="fgfgf" type="button" class="style11" onClick="location.href='buat_nomer_resep2.php';" value="Buat Transaksi Baru">
	<input name="fgfgf2" type="button" class="style11" onClick="location.href='index.php';" value="Cek Periode">
    </div></td></tr>
  </table>
  </div>  </td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><div align="left">
	<table border="0" cellpadding="2" cellspacing="2" class="style1">
	<tr>
	<td width="30" bgcolor="#0033CC"><div align="center" class="style12">No</div></td>
	<td width="119" bgcolor="#0033CC"><span class="style12">NoTxn</span></td>
	<td width="108" bgcolor="#0033CC"><span class="style12">Tgl</span></td>
 	<td width="55" bgcolor="#0033CC"><div align="center" class="style12">Kwt</div></td>
 	<td width="55" bgcolor="#0033CC"><div align="center" class="style12">Item</div></td>
	<td width="199" bgcolor="#0033CC"><span class="style12">Opr</span></td>
	<td width="102" bgcolor="#0033CC"><div align="center" class="style12">Jam</div></td>
	</tr>
	<?
	$nomer=1;
	$jujuj  = mysql_query("SELECT * FROM rj_resep WHERE NoResep like 'RL%' ORDER BY id desc");
	while($nb = mysql_fetch_array($jujuj)){
	$kdjkdjkdfdk =  mysql_query("SELECT COUNT(id) as jj FROM jualobat WHERE RegId='$nb[NoResep]'");
	$na = mysql_fetch_array($kdjkdjkdfdk);
	//
	$kdjkdjkdfdkx =  mysql_query("SELECT COUNT(id) as jj FROM jualobat_tmp WHERE RegId='$nb[NoResep]'");
	$nax = mysql_fetch_array($kdjkdjkdfdkx);
	//
	$nam = $nomer%2;
	if($nam==1){
	$warna='  bgcolor="#FFCCCC"';
	}else{
	$warna=' bgcolor="#CEE7FF"';
	} 
	?>
	<tr <? echo $warna; ?>   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="location.href='adik_dhimas.php?id=<? echo $nb[id]; ?>';">
	<td><div align="center"><? echo $nomer; ?></div></td>
	<td><div align="left"><? echo $nb[NoResep]; ?></div></td>
	<td><div align="left"><?
	echo "$nb[Tg] "; $bln = $nb[Bl]; $thn1 =$nb[Th];
	include "../bulan2.php";
	?></div></td>
	<td><div align="center"><?
	
	?></div></td>
	<td><div align="center"><?
	if($nax[jj]>0){
	?><font color="#990000"><i><?  	echo "$nax[jj]"; ?></i></font><? 
	}elseif($na[jj]>0){
	echo "$na[jj]";
}else{
echo "-";
}	?></div></td>
	<td><div align="left"><?
	echo ucfirst(strtolower($nb[Opr])); 
	?></div></td>
	<td><div align="center"><? echo $nb[Jam]; ?></div></td>
	</tr>
	<?
	$nomer++; } ?>
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