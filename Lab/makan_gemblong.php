<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ikan  = $_GET["ikan"];
$NamaBiaya  = $_GET["NamaBiaya"];
    ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style2 {
	font-size: 12px;
	color: #000000;
}
.style3 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style7 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 10px; color: #000000; }
.style8 {color: #0000CC}
.style10 {
	font-size: 10px;
	color: #990000;
}
.style19 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #FFFFFF; font-weight: bold; }
.style20 {
	font-size: 18px;
	color: #FFFFFF;
}
.style89 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #000000; font-weight: bold; }
.style22 {
	font-size: 10px;
	color: #990000;
	font-style: italic;
	font-weight: bold;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9999';
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
  <table width="1226" height="309"  border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
    <tr bgcolor="#006633">
      <td height="35" colspan="20" bgcolor="#5CBB57">
	  <div align="left">
	Halaman Laborat</div>	  </td>
    </tr>
    <tr>
      <td colspan="20">
        <div align="left"> 
          <form target="_self">
            <table width="933" border="0" cellpadding="2" cellspacing="2">
              <tr class="style3">
                <td width="86"><span class="style8">NAMA BIAYA<span class="style10">.</span></span></td>
    <td width="3"><div align="center"><strong>:</strong></div></td>
    <td width="824"><input name="NamaBiaya" type="text" class="style3" size="30" maxlength="30">
<input type="hidden" name="iin" value="<? echo $iin; ?>"></td>
    </tr>	  <?
	  if($iin>0){
	  ?>
	  <tr>
	  <td colspan="3"><div align="center">
	  <?
	  $kikdidk = mysql_query("SELECT * FROM paketlab WHERE id='$iin'");
	  $dap = mysql_fetch_array($kikdidk);
	  ?><font color="#990000"><b><i><?
	  echo   ($dap[NamaPaket]);
	  ?></i></b></font><?
	  ?>
	  </div></td>
	  </tr>
	  <?
	  } 
	  ?>

               <tr>
                <td colspan="3"><div align="left">
                  <input name="dfdff" type="submit" class="style3"  value="Sort">
                  <input type="button" name="ff" value="Kembali" onClick="location.href='index.php';" class="style3">
                  <!-- <input name="dsdf" type="button" class="style3" onClick="location.href='jangan_munafik.php';" value="Tampilkan Dalam Btk Laporan">-->
                
                  <?
if($a[Level]!=91 && $a[Level]!=12){}else{
?>
                   <?
				   if($iin>0){
			?>
			<input name="fgfgf" type="button" class="style3" style="background:#CCCC99" onClick="location.href='makan_gemblong.php';" value="Clear Ambil Paket">
			<?	   
				   }else{
				   ?><input name="ffgfg" type="button" class="style3" onClick="wCompare = window.open('d211c.php?id=<? echo $id; ?>', 
  'wCompare', 'width=480,height=300,left=70,Top=189,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Ambil /Paket">
	<input type="button" name="ff" value="Buat Paket Baru" onClick="location.href='s_erre.php';" class="style3">
	<? } ?>
	<input name="kembavli" type="button" class="style3" onClick="location.href='kartio.php';" value="Tambah">

				  <? } ?>
                 
                  
                </div></td>
    </tr>
    
              <tr  class="style89">
                <td colspan="3"><div align="left">
                  TOTAL DATA : <?
$dfjdhfjdhfjd = mysql_query("SELECT COUNT(id) AS kk FROM tabelbiayax");
$hy_ppo = mysql_fetch_array($dfjdhfjdhfjd);
echo number_format($hy_ppo[kk]);
?> 
                </div></td>
    </tr>
            </table>
    </form>
    </div></td>
    </tr>
    <tr bgcolor="#006633">
      <td width="28" bgcolor="#333333"><span class="style19">NO</span></td>
    <td width="57" bgcolor="#333333"><span class="style19">ID</span></td>
     <td width="82" bgcolor="#333333"><div align="center" class="style19">ITM SUB </div></td> 
   
    <td width="205" bgcolor="#333333"><span class="style19">NAMA BIAYA</span></td>
          <td width="80" bgcolor="#333333"><div align="right"><span class="style19">SVIP</span></div></td>
  <td width="83" bgcolor="#333333"><div align="right"><span class="style19">VIP</span></div></td>
       <td width="94" bgcolor="#333333"><div align="right"><span class="style19">  SATU </span></div></td>
       <td width="94" bgcolor="#333333"><div align="right"><span class="style19">  DUA </span></div></td>
       <td width="94" bgcolor="#333333"><div align="right"><span class="style19">  TIGA </span></div></td>
       <td width="94" bgcolor="#333333"><div align="right"><span class="style19">  ICU </span></div></td>
       <td width="94" bgcolor="#333333"><div align="right"><span class="style19">  NICU </span></div></td>
       <td width="94" bgcolor="#333333"><div align="right"><span class="style19">  HCU </span></div></td>
       <td width="94" bgcolor="#333333"><div align="right"><span class="style19">  ISOLASI </span></div></td>
       <td width="94" bgcolor="#333333"><div align="right"><span class="style19">  PERINA </span></div></td>
       <td width="94" bgcolor="#333333"><div align="right"><span class="style19">  NEONATOLOGI </span></div></td>
       <td width="94" bgcolor="#333333"><div align="right"><span class="style19">  RUJUK </span></div></td>
 	  <td width="99" class="style19">KELOMPOK SUB 1</td>
	  	  <td width="131" class="style19">KELOMPOK SUB 2</td>
		  	  <td width="73" class="style19">KELOMPOK SUB 3</td>
 </tr>
    <?
$no=1;
if($NamaBiaya!=''){
$bobok = mysql_query("SELECT * FROM tabelbiayax  WHERE NamaBiaya LIKE '$NamaBiaya%' LIMIT 0,100");
  }else{
 $bobok = mysql_query("SELECT * FROM tabelbiayax  LIMIT 0,25");
 } 
 while($xa = mysql_fetch_array($bobok)){
$pre =  $no%2;
if($pre==1){
$warna='  bgcolor="#BEFCC8"';
}else{
$warna='  bgcolor="#FFFFCC"';
} 
 ?> 
 
 <tr class="style3" <? echo $warna; ?>   valign="top"   >  
      <td><div align="center">
        <? 
	  if($iin>0){
	  ?>
        <input type="checkbox" name="ta_<? echo $xa[id]; ?>" onClick="location.href='d_D.php?id=<? echo $xa[id]; ?>&iin=<? echo $iin; 
	  ?>&NamaBiaya=<? echo $NamaBiaya; ?>';" <? if($xa[Kelompok3]==$iin){?> checked="checked"<? } ?>>
	  <?
	  }else{
	  echo $no; 
	  }?></div></td><td class="style7"  bgcolor="#ffffff"    ><div align="center"><?
if(strtoupper($a[LevelBag])=='X'){ 
?>
          <a href="ikan_goreng.php?NamaBiaya=<? echo $NamaBiaya; ?>&id=<? echo $xa[id]; ?>"  style="text-decoration:none"><?  echo "<i>#$xa[id]</i>";?></a>
          <?  }else{
 echo " #$xa[id]";
 } ?></div></td>
 
     <?
  $hjp= mysql_query("SELECT COUNT(id) AS jj FROM sublab WHERE IdBiaya='$xa[id]'");
 $uio = mysql_fetch_array($hjp);
  ?><td <? if($uio[jj]>0){ ?> <? }else{ } ?>>
       <div align="center" class="style7"><? if($uio[jj]>0){ ?><? 
 ?><font color="#FF0000"><? echo $uio[jj];  ?></font><? }else{ echo $uio[jj]; } 
 $hjp3= mysql_query("SELECT COUNT(id) AS jj FROM sublab_2 WHERE IdBiaya like '$xa[id]-%'");
 $uio3 = mysql_fetch_array($hjp3);
 if($uio3[jj]>0){
 ?> <font color="#009933"><i><?  echo " ($uio3[jj])"; ?></i></font><?
 }else{}
 ?></div></td>
     <td onClick="location.href='ikan_goreng.php?NamaBiaya=<? echo $NamaBiaya; ?>&id=<? echo $xa[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><div align="left"  ><? echo ($xa[NamaBiaya]);
	 //
	    $djdjdjdjdj = mysql_query("SELECT COUNT(id) AS jj FROM anak_labe WHERE IdBiaya='$xa[id]'");
   $mm = mysql_fetch_array($djdjdjdjdj);
   if($mm[jj]>0){
  ?><font color="#666666"><i><?  echo " ($mm[jj]) "; ?></i></font><? 
}
	 // ?></div></td>
     <td><div align="right"><? echo number_format($xa[Svip]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Vip]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Satu]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Dua]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Tiga]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Icu]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Nicu]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Hcu]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Isolasi]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Perina]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Neonatologi]); ?></div></td>
	 <td><div align="right"><?  echo number_format($xa[Rujuk]); ?></div></td>
	 
	 <td    onClick="wCompare_anak_cinta = window.open('xp_xs.php?id=<? echo $xa[id]; ?>', 
  'wCompare_anak_cinta', 'width=580,height=240,left=370,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_anak_cinta.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" ><div align="left"><? 
	 echo $xa[Kelompok1];
	 ?></div></td>
	  <td><div align="left"><? 
	 echo $xa[Kelompok2];
	 ?></div></td>
	  <td><div align="left"><? 
	 echo $xa[Kelompok3];
	 ?></div></td>
    </tr>
    <? $no++;  
$cang = explode("-",$xa[KodeBiaya]);
 
} ?>
    <tr bgcolor="#006633">
      <td colspan="20" bgcolor="#333333">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
 