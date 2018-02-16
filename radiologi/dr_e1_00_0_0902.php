<?
session_start();
 include "../konek.php";
 include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
 $Bus = mysql_query("SELECT * FROM txnrad WHERE id=$id");
$x = mysql_fetch_array($Bus);
$cek_ck = mysql_query("SELECT * FROM kwitansi_lab_rad WHERE IdTxn='$id'");
$ss = mysql_fetch_array($cek_ck);
if(!$x[id]){
header("Location:./index.php");
}
?>
<html>
<head><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("rft_rt.php?id=<? echo $id; ?>", "wCompare", "width=580,height=640,left=700,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 

function toCompare2() { 
    wCompare = window.open("nakal_jelek.php?fito=<? echo $id; ?>", "wCompare", "width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
//--></script> <script language="JavaScript">
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
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style4 {color: #BEF983}
.style5 {color: #FFFFFF; font-weight: bold; }
.style6 {
	color: #CCCCCC;
	font-weight: bold;
}
-->
</style>
</head>
<body>

<div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
    <tr  >
      <td  colspan="3"  ><div  align="left">
	  <img src="../gambar/radpng">
         </div></td>
    </tr>
     
    <tr>
      <td colspan="3" valign="top">
        <div align="left">
          <table border="0" cellpadding="2" cellspacing="2" class="style1">
            <tr>
              <td width="117">NO RM</td>
    <td width="8">:</td>
    <td width="280"><div align="left"><? echo $x[NoPasien]; ?></div></td>
    </tr>
            <tr>
              <td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($x[NamaPasien]); ?></div></td>
    </tr>
            <tr>
              <td>TGL </td><td>:</td><td><div align="left"><? echo "$x[Tgl]/$x[Bln]/$x[Thn]"; ?></div></td>
    </tr>
            <tr><td>USIA</td><td>:</td><td><div align="left"><?
			$pco = explode("-",$x[LbhBulan]);
			 echo "$x[Usia] Thn $pco[0] Bln $pco[1] Hr "; ?></div></td>
    </tr>
	<tr>
	<td>OPR</td><td>:</td><td><div align="left"><? echo strtoupper($x[Opr]); ?></div></td>
	</tr>
	<tr>
	<td colspan="3" bgcolor="#5ABB52"><div align="center" class="style5">BAYAR</div></td>
	</tr>
	 <tr>
	  <td colspan="3" bgcolor="#FFFF00"><div align="center">
	     
	  </div></td>
	  </tr>
	<?
	if(!$ss[id]){
	?>
	<tr>
	<td colspan="3" bgcolor="#990000"><div align="center" class="style6">
	MAAF TRANSAKSI PEMBAYARAN BELUM DISELESAIKAN,..!!!!
	</div></td>
	</tr>
	<? 
	}else{
	?>
	<tr>
	<td>NO KWT</td><td>:</td><td><div align="left"><? echo "RAD:$ss[id]"; ?></div></td>
	</tr>
	<tr>
	<td>KASIR</td><td>:</td><td><div align="left"><? echo strtoupper($ss[Kasir]); ?></div></td>
	</tr>
	<tr>
	  <td>TGL JAM </td>
	  <td>:</td>
	  <td><div align="left"><? echo "$ss[Tgl]/$ss[Bln]/$ss[Thn] JAM:$ss[Jam]"; ?></div></td>
	  </tr>
	  
	  <tr>
      <td colspan="3" bgcolor="#5ABB52"><div align="left">
	  <input name="dffd" type="button" class="style1" onClick="location.href='../radiologi/minum_jamu_telor_bebek.php';" value="Kembali">
	  <input name="fggf" type="button" class="style1" onClick="location.href='h_0_82.php?id=<? echo $id; ?>';" value="Cetak Hasil">
	  <input name="dfjj" type="button" class="style1" onClick="toCompare2()"  value=" Cetak Struk/Kwt ">
      </div></td>
    </tr>
	<tr valign="top">
	  <td colspan="3"><div align="left">
	  <table width="484" border="1" class="style1">
	  <tr>
	  <td width="27"  bgcolor="#990000"><div align="center" class="style5">NO</div></td>
	  <td width="441" bgcolor="#990000"><span class="style5">NAMA BIAYA</span></td>
	  </tr>
	  <?
	  $nomer=1;
	  $kidkdk = mysql_query("SELECT * FROM txnjalan WHERE RegId='$x[RegId]'");
	  while($aa = mysql_fetch_array($kidkdk)){
	  //
	  $ldodlkdol = mysql_query("SELECT id FROM pasrad WHERE IdTxn='LU.$aa[id]'");
	  $usj= mysql_fetch_array($ldodlkdol);
	  //
	  if($usj[id]){
	  ?>
	  <tr  onClick="wCompare = window.open('e_e_e_e.php?IdBiaya=<? echo $aa[id]; ?>&id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=440,left=600,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  bgcolor="#FF6699"  >
	  <? 
	  }else{
	  ?>
	  <tr  onClick="wCompare = window.open('e_e_e_e.php?IdBiaya=<? echo $aa[id]; ?>&id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=440,left=600,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   >
	<? } ?>
	    <td><div align="center"><? echo $nomer; ?></div></td>
	    <td><div align="left"><? echo strtoupper($aa[NamaBiaya]); ?></div></td>
	    </tr>
		<?
		$nomer++; } ?>
	  <tr>
	    <td colspan="2" bgcolor="#990000">&nbsp;</td>
	    </tr>
	  <?
	  
	  ?>
	  </table>
	  </div></td>
	  </tr>
          </table>
    </div>    </td> 
    </tr>
	<? } ?>
  </table>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>