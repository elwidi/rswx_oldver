<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$xe = $_GET["xe"];
$hari = $_GET["hari"];
$id = $_GET["id"];
$angka = ceil($hari);
if($angka==0){
header("Location:./afif_lucu.php?id=2");
}
 $Bus = mysql_query("SELECT * FROM labumum WHERE id=$hari");
$x = mysql_fetch_array($Bus);
$cek_ck = mysql_query("SELECT RegId FROM kwitansirj WHERE RegId ='$x[RegId]'");
$ss = mysql_fetch_array($cek_ck);
if($ss[RegId] && $a[LevelBag]!=1){
//header("Location:./afif_lucu.php?ini=2");
//header("Location:./suit.php?fito=$hari");

}
if(!$x[id]){
header("Location:./permen_karet.php");
}
////////////////////////
$ads = mysql_query("SELECT COUNT(id) as jj FROM txnjalan2 WHERE RegId='$x[RegId]'");
$bx = mysql_fetch_array($ads);
//
if($bx[jj]>0 && $bala==1){
//
 $KeyID=date("d").date("m")."-".date("Y");
//
$kiakaik = mysql_query("SELECT NoUrut FROM urutanlab  where KeyID='$KeyID' ORDER BY id DESC");
$p = mysql_fetch_array($kiakaik);
//
$NoUrut=$p[NoUrut]+1;
$RegId="$x[id].$x[RegId]";
$TglJam=date("d.m.Y-H:i:s");
    $hi=date("d");$bi=date("m");$ti=date("Y");
if($x[KdRujukan]==1){
$isikpao = mysql_query("INSERT INTO  `urutanlab` (`IdPasien`, `KeyID`, `NoUrut`, `RegId`, `NoPasien`, `NamaPasien`, `TglJam`, `Opr`  , `Tgl`, `Bln`, `Thn`)

 VALUES ('LR.$x[id]', '$KeyID', '$NoUrut', '$x[id].$x[RegId]', '$x[id]', '$x[NamaPasien]', '$TglJam', '$a[Nama]','$hi','$bi','$ti')");
 
}else{
 $isikpao = mysql_query("INSERT INTO  `urutanlab` (`IdPasien`, `KeyID`, `NoUrut`, `RegId`, `NoPasien`, `NamaPasien`, `TglJam`, `Opr`  , `Tgl`, `Bln`, `Thn`)

 VALUES ('LR.$x[id].X', '$KeyID', '$NoUrut', '$x[id].$x[RegId]', '$x[id]', '$x[NamaPasien]', '$TglJam', '$a[Nama]','$hi','$bi','$ti')");
 }// end of bx[jj]
 } 

/////////////////////
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
	color: #0000CC;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {
	font-size: 12px;
	font-weight: bold;
}
.style9 {font-weight: bold}
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style11 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style12 {color: #990000}
.style13 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #990000; }
.style20 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000; }
.style21 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #990000;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3366';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("winie_poh.php?hari=<? echo $hari; ?>&NamaBiayak=<? echo $NamaBiayak;?>", "wCompare", "width=430,height=440,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 

  
//--></script> 
</head>
<body <? if($ela==10){ ?> onLoad="toCompare()"<? } ?>>
<div align="left"> 
<?
if($xe>0){
?>
<form action="sangar_burung.php">  
<? }else{ ?>
 <!-- <form action="winie_poh.php">	 -->
<form target="_self">
   <div align="left">
     <? } ?>
     <table width="799" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
       <tr bgcolor="#C4D2E2">
         <td height="40" colspan="3"><div align="center" class="style1">
           <img src="../gambar/labe.png"></div></td>
    </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="0" cellpadding="0" cellspacing="0">
 <?
   $kiakaik2 = mysql_query("SELECT NoUrut FROM urutanlab  where  IdPasien ='LR.$x[id].X' ORDER BY id DESC");
$p2 = mysql_fetch_array($kiakaik2);

 if($p2[NoUrut]>0){
 ?>
 <tr class="style4">
 <td>NO URUT</td><td>:</td><td><div align="left"><? 

echo $p2[NoUrut]; ?></div></td>
 </tr>
 <?
 }
 ?>
   <tr>
         <td width="293"><div align="left"><span class="style4">NO REG</span></div></td><td width="14"><div align="center" class="style2 style5">
           :</div></td><td width="472"><div align="left" class="style4"><? 
echo "$x[RegId]";
?>
             <input type="hidden" value="<? echo $x[RegId]; ?>" name="RegId">
             </div></td>
    </tr>
       <tr>
         <td><div align="left"><span class="style4">NAMA PASIEN</span></div></td><td><div align="center" class="style4 style9">
           :</div></td>
    <td><div align="left" class="style4"><? echo strtoupper($x[NamaPasien]); ?>
      <input type="hidden" name="NamaPasien" value="<? echo $x[NamaPasien]; ?>"></div></td>
    </tr>
       <tr>
         <td bgcolor="#FFFF99" class="style4"><strong>DOKTER</strong></td>
         <td bgcolor="#FFFF99" class="style10">:</td>
         <td bgcolor="#FFFF99" class="style4"><div align="left"><strong>
	     <a href="#"   onClick="wCompare = window.open('../Radiologi/80_mn.php?hari=<? echo $hari; ?>&xe=<? echo $xe; ?>', 
  'wCompare', 'width=580,height=500,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none"><? 
	if(!$x[KodeDokter]){
	?>TENTUKAN DOKTER ????<? 
	}else{
	echo $x[NamaDokter];
	}
	?>
	     </a> || <?
		 if(!$x[KodeDokter]){}else{ ?><a href="#" 
		   onClick="wCompare = window.open('90909m.php?fito=<? echo $fito; ?>&xe=<? echo $xe; ?>&hari=<? echo $hari; ?>&anak=ela', 
  'wCompare', 'width=380,height=230,left=470,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none">GANTI DOKTER</a><? }
		 ?></strong></div></td>
	</tr>
       <tr>
         <td bgcolor="#FFFF99"><div align="left" class="style10">RUJUKAN</div></td>
    <td bgcolor="#FFFF99"><div align="center"><strong><span class="style4">:</span></strong></div></td>
    <td bgcolor="#FFFF99"><div align="left" class="style10"><a href="#"   onClick="wCompare = window.open('../Radiologi/40_mn.php?hari=<? echo $hari; ?>&xe=<? echo $xe; ?>', 
  'wCompare', 'width=580,height=500,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none"><? 
	if(!$x[KdRujukan]){
	?>TENTUKAN DR PERUJUK ???<? 
	}else{
	echo $x[NamaPerujuk]; 
	}?> </a> || <?
	if(!$x[KdRujukan]){}else{ ?>
	<a href="#" 
		   onClick="wCompare = window.open('90909m.php?fito=<? echo $fito; ?>&xe=<? echo $xe; ?>&hari=<? echo $hari; ?>&anak=wedok', 
  'wCompare', 'width=380,height=230,left=470,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none">GANTI RUJUKAN </a>
	<? }
	?>
      <input type="hidden" name="NamaDokter" value="<? echo $x[NamaDokter]; ?>">
      <input type="hidden" name="KodeDokter" value="<? echo $x[KodeDokter]; ?>">
      <input type="hidden" name="hari" value="<? echo $hari; ?>">
      </div></td>
    </tr>
       <?
if($ss[RegId]){
?>
       <tr>
         <td colspan="3">&nbsp;</td>
    </tr>
       <? 
}else{
?>
       <tr class="style4">
         <td><div align="left" class="style11 style12">
           <div align="left"><span class="style4">NAMA BIAYA </span></div>
    </div></td>
    <td><div align="center" class="style13"><span class="style4">:</span></div></td>
    <td><div align="left" class="style13">
      <?
		if($xe>0){
				$mas = mysql_query("SELEcT * FROM tabelbiayax WHERE id=$xe");
		$re = mysql_fetch_array($mas);
		}else{ }
if($xe>0){
		echo strtoupper($re[NamaBiaya]); echo " // $re[KodeBiaya]"; 
		?><input type="hidden" name="xe" value="<? echo $xe; ?>"><? 
		?>
      <? 
		}else{
		?>		<input name="NamaBiayak" type="text" class="style4" id="NamaBiayak" size="20" maxlength="20" <? if(!$x[KodeDokter] || !$x[KdRujukan]){?> disabled="disabled"<? }else{} ?>>
		<input type="hidden" name="ela" value="10">
      <? 
		} 
		?> 
      <input type="hidden" name="hari" value="<? echo $hari; ?>">
      <input type="hidden" name="NamaBiaya"	 value="<? echo $re[NamaBiaya]; ?>">
      <input type="hidden" name="IdLab" value="<? echo $re[id]; ?>">
      <input type="hidden" name="KodeBiaya" value="<? echo $re[KodeBiaya]; ?>">
      <input type="hidden" name="Harga" value="<? echo $re[Harga]; ?>">
      <input type="hidden" name="Satuan" value="<? echo $re[Satuan]; ?>">
      <input type="hidden" name="Grup" value="<? echo $re[Grup]; ?>">
      <input type="hidden"  name="hari" value="<? echo $hari; ?>">
      </div></td>
    </tr>
       <? } ?>
       <?
 if($ss[RegId]){
 ?>
       <tr bgcolor="#000000">
         <td colspan="3" bgcolor="#006600"><div align="center">
           <input name="dfjj2" type="button" class="style4" onClick="location.href='nakal_jelek.php?fito=<? echo $hari; ?>';"  value=" Cetak Struk/Kwt "> 
           <input name="djhdjhjdfd" type="button" class="style4" onClick="location.href='';" value="BuatHasilPemeriksaan">
           <!--    <input type="button" name="dfdf2" value=" TampilKan Hasil " onClick="location.href='siu.php?RegId=<?// echo $x[RegId]; ?>';"> -->
           <input name="sddff2" type="button" class="style4" onClick="location.href='index.php?id=1';" value="Kembali">  
         </div></td>
     </tr>
       <? 
 }else{
 ?><tr bgcolor="#C4D2E2">
         <td colspan="3"><div align="center">
           <?
  if($xe>0){
  ?><input name="dfdf" type="submit" class="style4" value="Simpan" ><? 
  }else{
  ?><input name="dfdf" type="submit" class="style4" value="Cari"  <? if(!$x[KodeDokter] || !$x[KdRujukan]){?> disabled="disabled"<? }else{} ?>>
           <?
   }
   ?>
           <input name="dfjj" type="button" class="style4" onClick="location.href='nakal_jelek.php?fito=<? echo $hari; ?>';"  value=" Cetak Struk/Kwt ">
           <input name="dfdf2" type="button" class="style4" onClick="location.href='siu.php?RegId=<? echo $x[RegId]; ?>';" value=" TampilKan Hasil ">
		   
           <!-- <input type="button" name="djhdjhjdfd" value="BuatHasilPemeriksaan" onClick="location.href='beberapa_hari_ini_akusakit.php?hari=<? //echo $hari; ?>';"> -->
           
           <?
 if($a[LevelBag]==5){
?>
           <input name="ffgg" type="button" class="style4" onClick="location.href='jaikik_popo.php?id=<?  echo $hari; ?>';" value="Hapus"> 
           <?
 }
  ?>
           <!-- <input type="button" name="dfdf" value=" TampilKan Hasil " onClick="location.href='siu.php?RegId=<? //echo $x[RegId]; ?>';"> -->
           <input name="sddff" type="button" class="style4" onClick="location.href='index.php?id=1';" value="Kembali">
          </div></td>
    </tr>
       <? } ?>
	   <?
	   $skjdksjksd = mysql_query("SELECT COUNT(id) as jj FROM cetak_hasil_lab WHERE RegId='$x[RegId]'");
	   $ads= mysql_fetch_array($skjdksjksd);
	   if($ads[jj]>0){
	   ?>
	   <tr bgcolor="#990000">
	   <td colspan="3"><div align="center">
	   <input name="fggf" type="button" class="style4"   onClick="wCompare = window.open('340k.php?id=<? echo $hari; ?>', 
  'wCompare', 'width=580,height=440,left=600,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Isikan Pemeriksaan Hasil"    style="background:#FFFFFF">
	   	<?
		if($bx[jj]>0){


	$ndsa = "$x[id].$x[RegId]";
 	$djkdjkdfd = mysql_query("SELECT id FROM urutanlab WHERE RegId='$ndsa'");
	$bf = mysql_fetch_array($djkdjkdfd);
	if($bf[id]){
	 ?>
	  <input type="button" name="ghgh" value="Simpan Nomer Urut"  onClick="location.href='tekan.php?id=<? echo $hari; 
		?>&bala=1';" class="style4" disabled="disabled"><input type="button" name="ghgh" value="Hapus Nomer Urut"  style="background:#99CC33"  onClick="wCompare = window.open('23_f3.php?id=<? echo $hari; ?>&bala=<? echo $bf[id]; ?>&NoBukti=<? echo $NoBukti; ?>', 
  'wCompare', 'width=480,height=340,left=30,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   class="style4">
	<? 
	}else{
	?>
        <input type="button" name="ghgh" value="Simpan Nomer Urut" style="background:#FF6699" onClick="location.href='nasi_kucing.php?hari=<? echo $hari; 
		?>&bala=1';" class="style4">
		<? } ?>
		
		<?
	}	// if($bx[jj]>0){
?>
	   </div></td>
	   </tr>
	   <? } ?>
       <tr>
         <td colspan="3"><div align="center">
           <iframe src="milimeter.php?hari=<? echo $hari; ?>&RegId=<? echo $x[RegId]; ?>&bapak=<? echo $hari; ?>" width="800" height="300" frameborder="0"></iframe>
    </div></td>
    </tr>
        
 </table>
 </div>
 </td>
 </tr>
     
   </table>
   </div>
 </form>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>