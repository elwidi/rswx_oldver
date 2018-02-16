<?
include "../konek.php";
include "../salaman.php";
include "../rake.php";
?><html>
<head><script language="JavaScript">
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
	</script> 
<style type="text/css">
<!--
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>
<body>

<div align="left">
<?
if($as==5){
?>
<form target="_self">
<? 
}else{
?>
<form action="f_l.php">
<? } ?>
   <table  border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="681" colspan="3"><span class="style2">.</span></td>
    </tr> 
    <tr>
      <td valign="top"  colspan="3"><div align="left">
           <table border="0" cellpadding="2" cellspacing="2" class="style2">
            <?
			if($as==5){
			?>
			<tr>
			<td colspan="3" valign="top"><div align="left">
			<table width="673" border="0" cellpadding="2" cellspacing="2" class="style2">
			<tr>
			<td width="128">NAMA PEMBAYAR</td>
			<td width="8">:</td>
			<td width="489"><div align="left">
			<input name="Pembayar" type="text" class="style2" size="20" maxlength="90">
			<input type="hidden" name="as" value="5">
			<input type="hidden" name="ba" value="2">
			</div></td>
			</tr>
			</table>
			</div></td>
			</tr>
			<? 
			}else{
			?><tr>
              <td width="188">SUDAH DITERIMA DARI </td>
    <td width="6"><strong>:</strong></td><td width="436"><div align="left">
	<input name="Pembayar" type="text" class="style2" size="30" maxlength="100">
      </div></td>
    </tr>
            <tr>
              <td>JUMLAH</td>
      <td><strong>:</strong></td>
      <td><div align="left">	<input name="Nilai" type="text" class="style2" size="20" maxlength="20">
      </div></td>
    </tr>
            <tr>
              <td>PRO</td>
      <td><strong>:</strong></td>
      <td><div align="left">	<input name="Pro" type="text" class="style2" id="Pro" size="30" maxlength="100">
      </div></td>
    </tr>
            <tr>
              <td>UNTUK PEMBAYARAN </td>
      <td><strong>:</strong></td>
      <td><div align="left">
	  <textarea name="Keterangan" cols="30" rows="2" class="style2"></textarea>
	  </div></td>
    </tr>
	<? } ?>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#5BB752"><div align="left">
			  <input name="fgfg" type="submit" class="style2" value="Simpan dan Cetak">
			<?
			if($as==5){
			?><input type="button" name="fgfg" value="Clear Cek History/Cetak Ulang Kwt Manual" onClick="location.href='d_iu.php';" class="style2"><? 
			}else{
			?>   <input type="button" name="fgfg" value="Cek History/Cetak Ulang Kwt Manual" onClick="location.href='d_iu.php?as=5';" class="style2">
			<? } ?>
			   <input name="fgfg" type="button" class="style2" onClick="location.href='index.php';" value="Selesai">
			  </div></td>
              </tr>
            </table>
     
    </div></td>
    </tr>
	<?
	if($ba==2){
	?>
	<tr valign="top">
	<td colspan="3"><div align="left">
	<table border="1" class="style2">
	<tr>
	<td bgcolor="#FFCC99"><strong>NO</strong></td><td bgcolor="#FFCC99"><strong>PEMBAYAR</strong></td><td bgcolor="#FFCC99"><strong>PASIEN</strong></td><td bgcolor="#FFCC99"><strong>NO KWT</strong></td><td bgcolor="#FFCC99"><strong>TGL</strong></td><td bgcolor="#FFCC99"><strong>JAM</strong></td><td bgcolor="#FFCC99"><strong>HARI</strong></td><td bgcolor="#FFCC99"><strong>OPR</strong></td>
	</tr>
	<?
	$nomer=1;
	$kksk = mysql_query("SELECT * FROM kwtman WHERE Pasien LIKE '$Pembayar%' ORDER BY id desc LIMIT 0,100");
	while($xx = mysql_fetch_array($kksk)){
	?>
	<tr  onClick="wCompare = window.open('kwe.php?id=<?   echo $xx[id]; ?>', 'wCompare', 'width=680,height=440,left=30,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
	<td><div align="center"><? echo $nomer; ?></div></td>
	<td><div align="left"><? echo $xx[NoKwt]; ?></div></td>
	<TD><div align="left"><? echo strtoupper($xx[Pasien]); ?></div></TD>
		<TD><div align="left"><? echo strtoupper($xx[Pasien]); ?></div></TD>
	<td><div align="right"><? echo "$xx[Tgl]/$xx[Bln]/$xx[Thn]"; ?></div></td>
	<td><div align="center"><? echo $xx[Jam]; ?></div></td>
	<td><div align="left"><? echo strtoupper($xx[NamaHari]); ?></div></td>
	<td><div align="left"><? echo strtoupper($xx[Opr]); ?></div></td>
	</tr>
	
	<? $nomer++; }?><tr>
	  <td colspan="8" bgcolor="#FFCC99">&nbsp;</td>
	  </tr>
	</table>
	</div></td>
	</tr>
	<?  
	}
	?>
  </table>
  </form>
 </div>
</body>
</html>