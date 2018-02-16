<?
session_start();
include "../konek.php";
include "../ceke.php";
  $jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if($a[Level]==3){
   ?>
  <html>
  <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF99CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
  <style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
  </style>
  </head>
  <body>
  <div align="left"> 
  <table width="478" height="90" border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td colspan="5"><div align="center" class="style2">
  LIST DATA PEMERIKSAAN RADIOLOGI
  </div></td>
  </tr>
 <tr class="style2">
 <td width="34" bgcolor="#D4D0C8">NO</td>
 <td bgcolor="#D4D0C8">KODE</td>
 <td width="210" bgcolor="#D4D0C8">NAMA BIAYA</td>
  <td width="100" bgcolor="#D4D0C8"><div align="right">HARGA</div></td>
   </tr>
 <?
 $kik = 1;
   $keikei = mysql_query("SELECT * FROM tarif  WHERE NamaBiaya LIKE '%$NamaBiaya%' LIMIT 0,100");
  while($ss = mysql_fetch_array($keikei)){
$gabi = $kik%2;
if($gabi==1){
$warna='';
}else{
$warna=' bgcolor="#FFFF99"';
} 		 
  ?>
 <tr  <? echo $warna; ?>  onClick="location.href='kakus4.php?IdBiaya=<? echo $ss[id]; ?>&NamaBiaya=<? echo $NamaBiaya; ?>&iin=slk&id=<? echo $id; 
 ?>&fito=<? echo $ss[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  
    <td  ><div align="center"><? echo $kik;   ?></div></td>
	<td><div align="left"><? echo $ss[KodeBiaya]; ?></div></td>
   <td  ><div align="left"><? echo ($ss[NamaBiaya]); ?></div></td>
    <td  <? if($posa[id]){ ?> bgcolor="#FF66CC"<? } ?> ><div align="right"><?
    
	echo number_format($ss[Tiga],2);
     ?></div></td>
    </tr>
 <? $kik++; } ?>
 <tr>
   <td colspan="7" bgcolor="#D4D0C8">&nbsp;</td>
   </tr>
 </table>
  </div>
  </body>
  </html>
 <? } ?>
 