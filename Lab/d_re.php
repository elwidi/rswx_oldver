<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 $kdjfkdkfd  = mysql_query("SELECT * FROM labumum WHERE id='$id'");
 $ya = mysql_fetch_array($kdjfkdkfd);
 //
 $kdjfkdjkfd= mysql_query("SELECT * FROM kwitansirj WHERE RegId='$ya[RegId]'");
 $ua = mysql_fetch_array($kdjfkdjkfd);
 if($ua[id]){
 header("Location:./s.php?id=$ua[id]");
 }elseif(!$ya[id]){
 header("Location:./minum_jamu_telor_bebek.php");
 }else{
 ?>
 <html>
 <head><script language="JavaScript">
 	function formatAngka(objek, separator) {
 	  a = objek.value;
 	  b = a.replace(/[^\d]/g,"");
 	  c = "";
   panjang = b.length;
 	  j = 0;
   for (i = panjang; i > 0; i--) {
     j = j + 1;
     if (((j % 3) == 1) && (j != 1)) {
       c = b.substr(i-1,1) + separator + c;
     } else {
 	      c = b.substr(i-1,1) + c;
     }
 	  }
 	  objek.value = c;
 }
 </script><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9900';
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
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
 </style>
 </head>
 <body>
 <div align="left">
 <form action="d_c.php">
 <table border="1">
 <tr>
 <td width="530" colspan="3" bgcolor="#99CCFF"><div align="left" class="style1">
 HALAMAN PEMBAYARAN TRANSAKSI <BR />
 PEMERIKSAAN LABORATORIUM LUAR
 </div></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style2">
 <TR>
 <TD>REGID</TD><td>:</td><td><div align="left"><?
 echo $ya[RegId]; 
 ?></div></td>
 </TR>
 <tr>
 <td width="140">NAMA PASIEN</td>
 <td width="8">:</td>
 <td width="356"><div align="left"><?
 echo strtoupper($ya[NamaPasien]); ?></div></td>
 </tr>
 <tr>
 <td>PEMBAYAR</td><td>:</td><td><div align="left">
 <input type="text" name="Pembayar" maxlength="120" size="30" value="<? echo $ya[NamaPasien]; ?>">
 </div></td>
 </tr> 
 <tr>
   <td>DOKTER</td>
   <td>:</td>
   <td><div align="left"><? echo $ya[NamaDokter]; ?></div></td>
 </tr>
 <tr>
   <td>RUJUKAN</td>
   <td>:</td>
   <td><div align="left"><? echo $ya[NamaPerujuk]; ?></div></td>
 </tr>
 <tr>
   <td>TOTAL TXN </td>
 <td>:</td>
   <td><div align="left"><?
$kdjkdjkfd= mysql_query("SELECT SUM(Harga) AS hh FROM txnjalan2 WHERE RegId='$ya[RegId]'");
$up = mysql_fetch_array($kdjkdjkfd);
echo number_format($up[hh]);   
   ?> || 
   <a href="#"  style="text-decoration:none" onClick="wCompare = window.open('ivr.php?id=<? echo $id; ?>', 
  'wCompare', 'width=380,height=240,left=470,Top=129,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >CEK DETAIL</a> </div></td>
 </tr>
 <tr valign="top">
 <td>KETERANGAN</td><td>:</td><td><div align="left">
 <textarea rows="3" cols="50" name="Keterangan" class="style2">PELUNASAN PEMBAYAR LABORATORIUM LUAR AN:<? echo $ya[NamaPasien]; ?></textarea>
 </div></td>
 </tr>
 <tr>
   <td>TYPE BAYAR </td>
   <td>:</td>
   <td><div align="left"><?
   $bala=3;
   include "../type_bayar.php";
   ?></div></td>
 </tr>
 <tr>
   <td>TUNAI</td>
   <td>:</td>
   <td><div align="left">
   <input type="text" name="Tunai" maxlength="14" size="14" class="style2"  onKeyUp="formatAngka(this, '.')" >
   <input type="hidden" name="id" value="<? echo $id; ?>">
   </div></td>
 </tr>
 <tr>
   <td>DEBET</td>
   <td>:</td>
   <td><div align="left">
   <input type="text" name="Db" maxlength="14" size="14" class="style2"  onKeyUp="formatAngka(this, '.')" >
   </div></td> </tr>
 <tr>
   <td>KREDIT</td>
   <td>:</td>
   <td><div align="left">
   <input type="text" name="Kk" maxlength="14" size="14" class="style2"  onKeyUp="formatAngka(this, '.')" >
   </div></td> </tr>
 <tr>
   <td>JAM</td>
   <td>:</td>
   <td><div align="left">
   <input name="JamE" type="text" class="style2" id="JamE" size="14" maxlength="14"  onKeyUp="formatAngka(this, '.')" >
   </div></td> </tr>
 </table>
 </div> </td>
 </tr>
 <tr>
   <td colspan="3" valign="top" bgcolor="#99CCFF"><div align="left">
   <input type="submit" value="Simpan" name="fgfgf" class="style2">
   <input type="button" name="fgfg" value="Kembali" onClick="location.href='minum_jamu_telor_bebek.php';" class="style2">
   </div></td>
 </tr>
 </table>
 </form>
 </div>
 </body>
 </html>
 <? } ?> 