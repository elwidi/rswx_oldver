<?
session_start();
include "../konek.php";
include "../ceke.php";
 $jdfd = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh= mysql_fetch_array($jdfd);
 if(!$hh[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCCCCC';
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
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; }
-->
</style>
</head>
<body>

<div align="left">
<?
if($x==99){
?>
<form action="s3ww.php">
 <? }else{ ?>
<form action="3wwX.php"> 
 <? } ?> <table border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="536" colspan="3"><div align="center" class="style2">
        LIST DATA TRANSAKSI POLI <br />
        <?
echo $hh[RegId];
?><br>
        <?
echo strtoupper($hh[NamaPasien]); 
echo " ($hh[NoPasien]) ";
?>
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center"><span class="style6">
        <input type="submit" value="Update Data Klik Disini !!! " name="fgff" style="background:#FFCC99">
      </span></div></td>
    </tr>
    <tr>
      <td colspan="3" valign="top">
        <div align="left">
          <table border="0" cellpadding="2" cellspacing="2" bgcolor="#CCEAE3" class="style1">
            <tr>
              <td width="17" bgcolor="#FFFF99"><strong>NO</strong></td>
     <td width="295" bgcolor="#FFFF99"><strong>NAMA BIAYA</strong></td>
    <td width="45" bgcolor="#FFFF99"><div align="right"><strong>HARGA</strong></div></td>
	 <td width="45" bgcolor="#FFFF99"><div align="right"><strong>HRG-DISK</strong></div></td>
	<td width="67" bgcolor="#FFFF99"><div align="right"><strong>DISKON</strong></div></td>
	<td width="67" bgcolor="#FFFF99"><div align="right"><strong>JAMINAN</strong></div></td>
	<td width="88" bgcolor="#FFFF99"><div align="right"><strong>BAYAR</strong></div></td>
	
    <td width="206" bgcolor="#FFFF99"><strong> </strong></td>
     </tr>  
            <? 
$nomer=1;
 if($x==51){
 $kdjfkdkdf = mysql_query("SELECT * FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Fis'");
}elseif($x==12){
 $kdjfkdkdf = mysql_query("SELECT * FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Rad'");
}elseif($x==99){
 $kdjfkdkdf = mysql_query("SELECT * FROM txnugd WHERE IdPasien='$hh[id]'");
}else{
 $kdjfkdkdf = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$hh[RegId]'");
}   while($vb = mysql_fetch_array($kdjfkdkdf)){
//
if($x==12){
 $kjdfkdfd_DFdf = mysql_query("SELECT * from pecah_kwt where IdDetil='R.$vb[id]'");
}elseif($x==99){
 $kjdfkdfd_DFdf = mysql_query("SELECT * from pecah_kwt where IdDetil='$vb[id]'");
}elseif($x==51){
 $kjdfkdfd_DFdf = mysql_query("SELECT * from pecah_kwt where IdDetil='F.$vb[id]'");
}else{
 $kjdfkdfd_DFdf = mysql_query("SELECT * from pecah_kwt where IdDetil='L.$vb[id]'");
 }
$hg = mysql_fetch_array($kjdfkdfd_DFdf);
//
  if($vb[id]==$Detil){
  ?>
            
            <?
  }else{
  ?>  <? /*if($FiLaDim[Enam]=='on' ){    ?>onClick="location.href='VGT.php?x=<? echo $x; ?>&Detil=<? echo $vb[id]; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? }   */ ?> 
            <tr >
              <td><div align="center"><? echo $nomer; ?></div></td>
      <td><div align="left"><? echo $vb[NamaBiaya]; ?></div></td>
	  <td><div align="right"><? 
	  $Nilek = $vb[Harga]-$vb[rp_dis];
	  echo number_format($Nilek);
	  ?></div></td>
      <td><div align="right">
	  <input name="Harga_<? echo $vb[id]; ?>" type="text" class="style1" value="<? echo ($vb[Harga]); ?>" size="8" maxlength="12" >
	  <? 
  $tot = $tot + $Nilek;
   ?></div></td> 
   <td><div align="center"> 
   <input type="button" name="fgfgf" value="Diskon : <? echo "$vb[disk]%"; ?>" style="background:#99CC00"  onClick="wCompare_jfjff = window.open('kerja_bakti.php?id=<? echo $id; 
   ?>&Detil=<? echo $vb[id]; ?>&x=<? echo $x; ?>', 
  'wCompare_jfjff', 'width=600,height=210,left=70,Top=20,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_jfjff.focus();">
	 
   
   </div></td>
   <td><div align="left">
    <input type="text" name="Jamin_<? echo $vb[id]; ?>" maxlength="12" size="8" value="<? echo $hg[Jam]; ?>" >
   </div></td>
      <td><div align="left">
	  <input type="hidden" name="Id_<? echo $vb[id]; ?>" value="<? echo $vb[id]; ?>">
	 
       <input type="text" name="NonghfJam_<? echo $vb[id]; ?>" maxlength="12" size="8" value="<? echo $hg[NonJam]; ?>" disabled="disabled" >
	    <input type="hidden" name="NonJam_<? echo $vb[id]; ?>" maxlength="12" size="8" value="<? echo $hg[NonJam]; ?>"  >
	   <input type="hidden" name="HargaLama" value="<? echo $vb[Harga]; ?>">
	 
	  <input type="hidden" name="Id" value="<? echo $id; ?>">
	  <input type="hidden" name="x" value="<? echo $x; ?>"></div></td><td><div align="left">
	    <?
		if($x==99){ 
		?><input type="button" name="fgfg2" class="style1"  value="Hapus" onClick="location.href='s99.php?x=<? echo $x; ?>&id=<? echo $id; ?>&IdDetil=<? echo $vb[id]; ?>';">
	<? } ?>   </div></td>
      </tr>
            <? } ?>
            <?
$nomer++; } ?><tr>
              <td colspan="2" bgcolor="#FFFF99"><div align="center"><strong>TOTAL</strong></div></td>
      <td bgcolor="#FFFF99"><div align="right"><strong><? echo number_format($tot); ?></strong></div></td>
      <td colspan="3">&nbsp;</td>
      </tr>
          </table>
    </div>    </td>
    </tr>
  </table>
  </form>
</div>
</body>
</html>
<?
}
?>