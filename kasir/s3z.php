<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
include "../alamat.php";
 $jdkj = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
 header("Location:./index.php");
}
$ceke_S = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$hh[RegId]'");
$ii = mysql_fetch_array($ceke_S);
if( $a[Level]==3 ){
include "../terbilang.php";
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
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
	font-size: 14px;
	font-weight: bold;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;  
}
.style3223 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px; color:#999999
}
.style4 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;}
.style5 {font-size: 3px}
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-style: italic; }
.style11 {font-family: "Times New Roman", Times, serif; font-size: 14px; font-weight: bold; }
.style12 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>
<body>

<div align="left">
<form target="_self">
  <table width="556" border="0" cellpadding="2" cellspacing="2"
  >
    <tr   >
  <td width="123"> <div align="center"><span class="style1"><img   src="../gb/gb.png" alt="logo" width="45" height="45"></span></div></td>
    <td width="430"><span  class="style11"><?
	echo strtoupper($fkd[Nama]); 
	?></span><span class="style3223"><br>
<? echo strtoupper($fkd[Jalan]); ?><br />
      Telp.  <? echo $fkd[Telp]; ?>.<br>
	  FAX : <? echo $fkd[Fax]; ?> </span> </td>
    </tr>
     
    
     <tr bordercolor="#000000" class="style3">
       <td colspan="2" valign="top">
         <div align="left"><table border="1" class="style3">
		  <tr>
		  <td width="85">TOTAL TXN</td>
		  <td width="4">:</td>
		  <td width="167"><div align="left"><?
		  $Bul = $hh[Kk]+$hh[Db]+$hh[Jam]+$hh[Tunai];
		  echo number_format($Bul);
		  ?></div></td>
		  </tr>
		  <tr>
		    <td>BAYAR</td>
		    <td>:</td>
		    <td><div align="left">
			<?
			if($Bayar>0){
			echo number_format($Bayar); 
			}else{
			?>
			<input type="text" name="Bayar" maxlength="14"  size="14" class="style3">
			<? } ?>
			<input type="hidden" name="id" value="<? echo $id; ?>">
			</div></td>
		    </tr>
		  <tr>
		    <td>KEMBALI</td>
		    <td>:</td>
		    <td><div align="left"><?
			if($Bayar>0){$Kembali= $Bayar-$Bul;
			echo number_format($Kembali);
			}else{
			echo "SILAHKAN INPUT BAYAR ";
			}
			?></div></td>
		    </tr>
			<tr>
			<td colspan="3" valign="top">
			<div align="left">
			<?
			$kal = terbilang($Kembali);
			echo strtoupper($kal); 
			?>
			</div>
			</td>
			</tr>
		  <tr>
		    <td colspan="3"><div align="left">
			<input type="submit" value="Simpan" name="fgf" class="style3">
			<?
			if($Bayar>0){
			?>
			<input type="button" name="fgff" class="style3" value="Reset" onClick="location.href='s3z.php?id=<? echo $id; ?>';">
			<?
			}
			?>
			<input type="button" name="ffgfg" value="Selesai" onClick="window.close()" class="style3">
			</div></td>
		    </tr>
		  </table>
         </div>		</td>
    </tr>
   </table>
   </form>
</div>
 <div align="left"></div></body>
</html>
<? 
}else{
header("Location:../keluar.php");
}
?>