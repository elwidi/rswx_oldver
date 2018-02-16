<?
session_start();
 include "../konek.php";
include "../salaman.php";
 $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);
  if(!$ii[id]){
  echo "RECORD SET TIDAK LENGKAP";
  }else{ ?>
  <html>
  <head>
  <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
-->
  </style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6699';
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
  <?
  if($IdObat>0){
  ?>
  <form action="9iiii.php">
  <? 
  }else{
  ?>
  <form target="_self">
  <? } ?>
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="767"   colspan="3" bgcolor="#FFFF99"><div align="left"><strong>
  INPUT KELOMPOK PAKET<br />
  <?
  echo strtoupper($ii[NamaObat]);
  ?>
  </strong></div></td>
  </tr>
  <tr valign="top">
    <td colspan="3"><div align="left">
	<table border="0" cellpadding="2" cellspacing="2" class="style1">
	<tr>
	<td width="235">KOMPONEN OBAT</td>
	<td width="9">:</td>
	<td width="506"><div align="left">
	<input name="NamaObat" type="text" class="style1" size="12" maxlength="12" <? if($IdObat>0){ ?> disabled="disabled"<? } ?>>
	<input type="hidden" name="iin" value="sembunyi">
	<input type="hidden" name="id" value="<? echo $id; ?>">
	 || <input type="submit" value="Cari" name="fg" class="style1" <? if($IdObat>0){ ?> disabled="disabled"<? } ?>>
	 <?
	 if($iin=='bojoku'){
	 ?><input type="button" name="fgg" value="Tampil Semua" style="background:#FFCC00" onClick="location.href='d3e_0.php?id=<? echo $id; ?>';" class="style1" ><? 
	 }else{
	 ?><input type="button" name="fgg" value="Lst Paket" onClick="location.href='d3e_0.php?iin=bojoku&id=<? echo $id; ?>';" class="style1" >
	 <? } ?>
	 <input type="button" name="fgg" value="Selesai" onClick="window.close()" class="style1" ></div></td>
	</tr>
	<tr valign="top">
	<td colspan="3"><div align="left">
	<table border="0" cellpadding="2" cellspacing="2" class="style1">
	<tr >
	<td width="22" bgcolor="#FFFF99"><div align="center"><strong>NO</strong></div></td>
	<td width="75" bgcolor="#FFFF99"><strong>KODE</strong></td>
	<td width="263" bgcolor="#FFFF99"><strong>NAMA OBAT</strong></td>
	<td width="75" bgcolor="#FFCC99">&nbsp;</td>
	<td width="70" bgcolor="#FFCC99"><div align="center">QTY</div></td>
	<? if($iin=='bojoku'){}else{?>		<td width="124" bgcolor="#FFFF99">GOLONGAN</td><? } ?>
	</tr>
	<?
	$nom=1;
	if($iin=='bojoku'){
	$kkdjdkf = mysql_query("SELECT * FROM isipaketdetil WHERE IdPaket='$id'");
	}elseif($iin=='sembunyi'){
	$kkdjdkf = mysql_query("SELECT * FROM dataobat WHERE NamaObat LIKE '$NamaObat%'  LIMIT 0,50");
	}else{
	$kkdjdkf = mysql_query("SELECT * FROM dataobat  LIMIT 0,50");
	}
	while($xx = mysql_fetch_array($kkdjdkf)){
	
	//
 	if($iin=='bojoku'){
	$lklfklgf = mysql_query("SELECT id,Qty FROM isipaketdetil WHERE id='$xx[id]'");
	}else{
		$lklfklgf = mysql_query("SELECT id,Qty FROM isipaketdetil WHERE IdObat='$xx[id]' AND IdPaket ='$id'");
	} $mk = mysql_fetch_array($lklfklgf);
	//
	$paos = $nom%2;
	if($paos==1){
	$wrn ='bgcolor="#EEFEE0"';
 	}else{
 	$wrn ='';
	}
	if($mk[id] && $IdObat!=$xx[id]){
 ?>
	 <tr  bgcolor="#FFCCFF"  onClick="location.href='d3e_0.php?NamaObat=<? echo $NamaObat; ?>&iin=<? echo $iin; ?>&id=<? echo $id; ?>&IdObat=<? echo $xx[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
	<? 
	}elseif($IdObat==$xx[id]){
	?> 
	<tr bgcolor="#99CCCC"> 
	<? 
	}elseif($xx[IdGol]==777){
	?><tr  <? echo $wrn; ?>  bgcolor="#FF99CC"><? 
	}else{    ?>
	<tr  <? echo $wrn; ?>   <? if($mk[id]>0){ echo $wrn; } ?> onClick="location.href='d3e_0.php?NamaObat=<? echo $NamaObat; ?>&iin=<? echo $iin; ?>&id=<? echo $id; ?>&IdObat=<? echo $xx[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	<? } ?>
	<td><div align="center"><? echo $nom; ?></div></td>
		<td><div align="left"><? echo $xx[KodeObat]; ?></div></td>
	<td><div align="left"><?   echo strtoupper($xx[NamaObat]);?></div></td>
	<?
	if($IdObat==$xx[id]){
	?>
	<input type="hidden" name="id" value="<? echo $id; ?>">
	<input type="hidden" name="IdObat" value="<? echo $IdObat; ?>">
	<input type="hidden" name="iin" value="<? echo $iin; ?>">
	<input type="hidden" name="NamaObat" value="<? echo $NamaObat; ?>">
	<td colspan="3"><div align="left">
	<?
	if($mk[id]){
	?><input type="text" name="Qty" maxlength="4" size="4" class="style1" value="<? echo $mk[Qty]; ?>" disabled="disabled"><? 
	}else{
	?><input type="text" name="Qty" maxlength="4" size="4" class="style1" value="<? echo $mk[Qty]; ?>">
	<? } ?> <input onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="submit" value="Ambil" name="fg" class="style1">
	<?
	if($mk[id]>0){
	?>
	<input type="button" class="style1" name="dfd" value="Hapus" onClick="location.href='9iiii.php?bas=3&fre=<? 
	echo $mk[id]; ?>&NamaObat=<? echo $NamaObat; ?>&iin=<? echo $iin; ?>&id=<? echo $id; ?>&IdObat=<? echo $IdObat; ?>';">
	<? 
	}
	?>
	   
	 <input   type="button" name="fgfg" value="Batal" onClick="window.close()" class="style1"> 
 </div></td>
	<?
	}else{
	?><td width="17"><div align="right"><? ?></div></td>
		<td width="19"><div align="center"><? if($mk[Qty]>0){
		echo number_format($mk[Qty]);
		}else{
		echo "-"; 
		} ?></div></td>
	<? if($iin=='bojoku'){}else{?>	<td width="36"><div align="left"><? echo strtoupper($xx[NamaGolongan]);?></div></td><? } ?>
		<? } ?>
	</tr>
	
	<?
	$nom++; } ?><tr>
	  <td colspan="6" bgcolor="#FFFF99"><span class="style1">&nbsp;</span></td>
	  </tr>
	</table>
	</div></td>
	</tr>
	</table> 
	</div></td>
  </tr>
  </table></form>
  </div>
  </body>
  </html>
  <? } ?>
 