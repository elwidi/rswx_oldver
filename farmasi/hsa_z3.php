<?
//header("Location:./ba_df.php?NoResep=$NoResep&id=$id&IdDetil=$IdDetil");
session_start();
include "../konek.php";
include "../salaman.php";
$kjdkdj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$mm = mysql_fetch_array($kjdkdj);
//
$KDJKJKDFJ= mysql_query("SELECT * FROM jualobat_tmp WHERE id='$IdDetil'");
$ye = mysql_fetch_array($KDJKJKDFJ);
if(!$ye[id]){
header("Location:../keluar2.php");
}elseif(!$mm[id]){
header("Location:../keluar2.php");
}else{
 ?>
<html>
<head> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
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
	font-size: 14px;
	font-weight: bold;
}

.style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
 <div align="left"><?
 if($ye[Pengali]==1){?>
 <form action="f_4cce.php">
 <? } ?>
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="272" colspan="3">
   <div align="left" class="style2">HALAMAN KOREKSI DATA<br>
         <?
 echo strtoupper($ye[NamaObat]); 
 ?>
     </div></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style12">
 <tr>
 <td width="80">QTY</td>
 <td width="8">:</td>
 <td width="162"><div align="left">
 <input name="Qty"  type="text" class="style12" size="12" maxlength="12" value="<? echo $ye[Qty]; ?>">
 <input type="hidden" name="id" value="<? echo $id; ?>">
 <input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">
 <input type="hidden" name="Rc" value="<? echo $Rc; ?>">
 <input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
 </div></td>
 </tr>
 <tr>
 <td>Racikan Ke </td><td>:</td><td><div align="left">
 <input type="text" name="RacKe" maxlength="2" size="2" value="<? echo $ye[stat]; ?>" class="style12">
 </div></td>
 </tr>
 <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
 </tr>
 <tr>
   <td colspan="3">
   <input type="submit" value="Update" name="fgfgf" <? if($ye[Pengali]==1){}else{?> disabled="disabled"<? } ?> class="style12"> 
   <input type="button" name="ffgf" value="Hapus" onClick="location.href='d_f20agf.php?Rc=<? echo $Rc; ?>&NoResep=<? echo $NoResep; ?>&id=<? echo $id;?>&IdDetil=<? echo $IdDetil; ?>';" class="style12">
   <input type="button" name="ffgfe" value="Selesai" onClick="window.close()" class="style12">
   </td>
   </tr>
 </table>
 </div>
 </td>
 </tr>
 </table>
 </form>
 </div>
 </body>
</html>
<? 
}
?>