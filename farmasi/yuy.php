<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11){
 $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);
 ?>
 <html>
 <head>
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
 </style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#ffFFFF'
	}
	//-->
	</script>
 </head>
 <body>
 <div align="center">
 <table border="0" cellpadding="2" cellspacing="2" class="style1">
 <tr>
 <td width="481" height="21"><div align="center">
 LIST DATA SETTINGAN
 </div></td>
 </tr>
 <tr>
 <td valign="top">
 <div align="left">
 <table border="1" bordercolor="#336699" class="style1">
 <tr>
 <td width="18" bgcolor="#FFCCCC">NO</td><td width="140" bgcolor="#FFCCCC">SATUAN</td><td width="51" bgcolor="#FFCCCC">PENGALI</td><td width="98" bgcolor="#FFCCCC">OPR</td><td width="90" bgcolor="#FFCCCC">TGLJAM</td>
 </tr>
 <?
 $nomer=1;
 $datakp = mysql_query("SELECT * FROM settingsatuan WHERE IdBarang='$id'");
 while($gs = mysql_fetch_array($datakp)){
 if($dimas==$gs[id]){
 ?>
 <tr class="style1" bgcolor="#FFFF00"> 
 <? 
 }else{?>
 <tr onClick="location.href='yuy.php?dimas=<? echo $gs[id]; ?>&id=<? echo $id;?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
 <? } ?>
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo $gs[NamaSatuan]; ?></div></td>
 <td><div align="center"><? 
 $pcs =explode(".",$gs[Pengali]);
 $sds =$pcs[1]-0;
 if($sds>0){
 echo number_format($gs[Pengali],2);
 }else{
 echo number_format($gs[Pengali]);
 } ?></div></td>  
 <td><div align="left"><? echo strtoupper($gs[Opr]); ?></div></td>
 <td><div align="left"><? 
 if($dimas==$gs[id]){
 ?>
 <a href="erj8.php?id=<? echo $id; ?>&dimas=<? echo $gs[id]; ?>" style="text-decoration:none">HAPUS</a>
 <? 
 }else{
 echo $gs[TglJam];
 } ?></div></td>
 </tr>
 <? $nomer++; } ?> <tr>
   <td colspan="5" bgcolor="#FFCCCC">&nbsp;</td>
   </tr>

 </table>
 </div> </td>
 </tr>
 </table>
 </div>
 </body>
 </html>
 <?
 }else{
 header("Location:../keluar.php");
 }
 ?>