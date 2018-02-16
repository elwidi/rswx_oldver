 <?
 $kj_09 = mysql_query("SELECT SUM(Total) AS jh FROM txnjalan2 WHERE RegId='$ss[RegId]'");
 $n = mysql_fetch_array($kj_09);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112  && $hp[id]){
?><tr  onClick="location.href='s.php?id=<? echo $ss[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><?
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112  && !$hp[id]){ ?>
 <tr   onClick="location.href='d_re.php?id=<? echo $ss[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
 <? 
 }else{
 ?><tr   onClick="location.href='nasi_kucing.php?hari=<? echo $ss[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" > 
 <? } ?>
<td><div align="center"><? 
/////
$kdjkkdf2 = mysql_query("SELECT COUNT(id) AS kk FROM cetak_hasil_lab WHERE RegId='$ss[RegId]'");
$bn2 = mysql_fetch_array($kdjkkdf2);
///
$kdjkkdf = mysql_query("SELECT COUNT(id) AS kk FROM cetak_hasil_lab WHERE RegId='$ss[RegId]' AND Hasil!=''");
$bn = mysql_fetch_array($kdjkkdf);
////===================================+++++++++++++++++++++++++++++++++++++++++++++++++++++
//	$jkop = mysql_query("SELECT COUNT(id) AS mm FROM hasilcuculab3 WHERE RegId='$ss[RegId]'");
 // $sp =  mysql_fetch_array($jkop);
/////////////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//$jkop2 = mysql_query("SELECT COUNT(id) AS mm FROM hasilcuculab3 WHERE Hasil!='' and  RegId='$ss[RegId]'");
//$sp2 =  mysql_fetch_array($jkop2);
////===============================================================================

/////////////////////////////////////////////////////////////////////////////////////
$warna= 'bgcolor="#FFFF00"';
$warna2= 'bgcolor="#FFFF00"';
$warna3= 'bgcolor="#FFCC99"';
   echo $nis;
 ?></div></td>    
<td><div align="center"><? echo $ss[id]; ?></div></td> 
<td><div align="left"><? echo $ss[RegId]; ?></div></td>
<td><div align="left"><? echo "$ss[Tgl]/$ss[Bln]/$ss[Thn]"; ?></div></td> 
<td><div align="left"><? 
$pc = explode("-",$ss[RegId]);
echo "$pc[1]";
?></div></td>
 <td <? 
 if($bn[kk]==0 && $bn2[kk]==0 && $n[jh]>0){
 echo $warna3;
  }elseif($bn[kk]==$bn2[kk] && $sp[mm]==$sp2[mm] && $bn[kk]>0  && $n[jh]>0){
 echo $warna3;
 }elseif($bn[kk]!=$bn2[kk] && $n[jh]>0){
 echo $warna;
  }elseif($n[jh]>0 && $sp[mm]!=$sp2[mm]){
  echo $warna2; } ?> ><div align="left"><? echo strtoupper($ss[NamaPasien]); ?></div></td>
 <td><div align="right"><? 
   echo number_format($n[jh]);
 ?></div></td>
<td><div align="left"><? echo strtoupper($ss[Opr]); ?></div></td>
<td><div align="center"><? if($hp[id]){ echo "$hp[IdTxn]"; 
}else{
 echo "."; 
}?></div></td>
<td><div align="left"><? echo strtoupper($ya[Opr]); ?></div></td>
<td><div align="left"><? echo $ya[Jam];   ?></div></td>
</tr>
<?   ?>