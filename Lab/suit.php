<?
session_start();
 include "../konek.php";
 include "../salaman.php";
include "../rake.php";
header("Location:./hsl_lab_luar.php?fito=$fito&ak=1");
 $ada = mysql_query("SELECT * FROM labumum WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
 
if(!$kp[id]){
//header("Location:./rambut_gondrong.php");
}
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
//include "latar_lab.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>hasil lab luar</title>
<style type="text/css">
body { font-family:"Trebuchet MS"; font-size:12px; }
.heading { font-size:14px;padding:5px;border-bottom:1px solid #000000; }
</style>
<?
if($adaS==5){
?>
<script type="text/javascript">
window.onload = function(){
	window.print();
}
</script> <? } ?><script language="JavaScript">
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
	</script><style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style6 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style17 {
	font-size: 14px;
	font-weight: bold;
}
-->
    </style><TITLE></TITLE>
</head>

<body alink="#000000" vlink="#000000" link="#000000">

<div align="left">
  <table width="726" border="0" cellpadding="0" cellspacing="0">
    
    <TR onClick="location.href='index.php?hari=<? echo $fito; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" valign="top">
      <td width="573" height="82"><div align="left">
        <table border="0" cellpadding="1" cellspacing="1" class="style3">
        <tr>
          <td><span class="style17">LABORATORIUM KLINIK RS.YADIKA</span></td>
        </tr>
        <tr>
          <td></td>
        </tr>
          <tr>
            <td>Jl.Dasa	Darma Kav. 20- 23, Bojong, YADIKA- Bekasi </td>
          </tr>
          <tr>
            <td>Telp : 021-82422511-12, Fax. 021- 82432958 </td>
          </tr>
          <tr>
            <td>Dokter Penanggung Jawab : dr  Febria Asterina, Sp.PK </td>
          </tr>
          <tr>
            <td>NO SIP : 446.1/54.2/BPPT/V/2010</td>
          </tr>
      </table>
    </div></td>
    <TD width="153"><div align="center" class="style5">
      &nbsp;
    </div></TD></TR>
    <tr onClick="location.href='suit.php?adaS=5&fito=<? echo $fito; ?>&ak=1&tanto=1';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" ><TD height="54" colspan="2"><div align="center"><span class="style6">HASIL PEMERIKSAAN LABORATORIUM<br>
      PASIEN LUAR </span></div></TD>
    </tr>
    <tr valign="top"
 ><TD colspan="2">
       <div align="left">
	   <table border="1" cellpadding="1" cellspacing="1">
	   <tr>
	   <td width="719" valign="top">
	   <div align="left">
	   <table 
	    onClick="location.href='suit.php?fito=<? echo $fito; ?>&ak=1&tanto=1';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" width="719"  border="0" cellpadding="1" cellspacing="1"> 
        <tr><TD width="96"><div align="left" class="style3">No. Pasien </div></TD><td width="4">:</td><td width="237"><div align="left" class="style3"><? echo $kp[id]; ?></div></td>
    <td width="92"><div align="left" class="style3">Tgl Periksa </div></td>
    <td width="6">:</td>
    <td width="251"><div align="left" class="style3"><? echo "$kp[Tgl]/$kp[Bln]/$kp[Thn]";  ?> </div></td>
    </tr>
        <tr><TD><div align="left" class="style3">Umur</div></TD><td>:</td><td><div align="left" class="style3"><?
   echo "$kp[Usia] Thn "; $xsp = explode("-",$kp[LbhBulan]);
   echo "$xsp[0] Bln "; if($xsp[1]>0){ echo "$xsp[1] Hari"; }
?> || </div></td>
    <td><div align="left" class="style3">Nama Pasien </div></td>
    <td>:</td>
    <td width="251"><div align="left" class="style3"><? echo strtoupper($kp[NamaPasien]); ?> || <? echo "$kp[JenisKelamin]"; ?></div></td>
    </tr>
        
        <tr class="style3">
          <TD><div align="left" class="style3">Asal Pasien </div></TD><td>:</td><td><div align="left" class="style3">
            <?
			echo $kp[NamaPerujuk];
			?> </div></td>
    <td><div align="left" class="style3">No. Lab </div></td>
    <td>:</td>
    <td width="251"><div align="left" class="style3"><? echo $kp[RegId]; ?> ( <?
	//
$Rea="$kp[id].$kp[RegId]";
	$ksjksds = mysql_query("SELECT NoUrut,id FROM urutanlab WHERE RegId='$Rea'");
	$bcx = mysql_fetch_array($ksjksds);
	echo $bcx[NoUrut];
	 if($bcx[NoUrut]>0 && $adaS==5){
				/////////
				$ldkfldkfldkfldi0di0fkldkfdlkfldf = mysql_query("SELECT COUNT(id) AS bb FROM ItemCtk WHERE IdUrutLab='$bcx[id]'"); 
				$dap = mysql_fetch_array($ldkfldkfldkfldi0di0fkldkfdlkfldf);
				$djah = $dap[bb]+1;
				/////
				$TglJamEK=date("d.m.Y.H:i:s");
				$ididk = mysql_query("INSERT INTO `ItemCtk` (`id`, `IdUrutLab`, `CtkKe`, `Opr`, `TglJam`, `NoPasien`, `NamaPasien`) 
				VALUES (NULL, '$bcx[id]', '$djah', '$a[Nama]', '$TglJamEK','$kp[id]','$kp[NamaPasien]')");
				}
	//
	 ?>)</div></td>
    </tr>
        <tr><TD><div align="left" class="style3">Alamat</div></TD>
    <td>:</td>
    <td ><div align="left" class="style3"><? echo strtoupper($kp[Alamat]); ?></div></td>
    <td><div align="left" class="style3">Dokter</div></td><td>:</td><td><div align="left" class="style3"><? 
echo $kp[NamaDokter]; ?></div></td>
    </tr>
        </table>
	   </div>	   </td>
	   </tr>
	   </table>
	   </div>
    </TD>
    </tr>
    
    
    <tr><TD colspan="2">
      <table border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td width="724"> 
            
            <table width="600%" border="0" cellspacing="1" cellpadding="1">
              <TR bgcolor="Silver">
                <TD width="176"><SPAN class="style3">JENIS PEMERIKSAAN</SPAN></TD>
      <td width="161">
        <div align="center"><SPAN class="style3">HASIL</SPAN>          </div></td><td width="101">
            <div align="center"><SPAN class="style3">SATUAN</SPAN>              </div></td><td width="200">
                <div align="center"><SPAN class="style3">NILAI rujukan</SPAN></div></td>
                    <td width="68">
                      <div align="center"><SPAN class="style3">KET</SPAN>                      </div></td>
    </TR>
              <?
$KA=1;
if($akan==2){
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' AND level='0' ORDER BY Idsublab,id");
}elseif($akan==1){
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY Idsublab,id LIMIT $awal,$akir");
}elseif($akan==3){
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY Idsublab,id LIMIT 0,$spran");  
}elseif($akan==4){
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY Idsublab,id LIMIT $spran,100");  
}else{
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY Idsublab,id");  
}
while($ui = mysql_fetch_array($kju)){
  	$kdjkdfjkddk0909 = mysql_query("SELECT Kelompok1,Kelompok2 FROM tabelbiayax WHERE id='$ui[Idsublab]'");
	$gv = mysql_fetch_array($kdjkdfjkddk0909);
$besa = $gv[Kelompok1];
  if($gv[Kelompok2]){ 
 $besa="$gv[Kelompok1]-$gv[Kelompok2]";
  }else{
  $besa="$gv[Kelompok1]";
  } 
  ////////
  
  if($ftr9==$besa){
  $var="sama";
  }else{
  $var=0;
  }
  /////
  if($Ki !=$ui[IdBiaya]){ 
  ?>
<?

if($ftr9==$besa){

}else{
?><tr class="style3">
	<td height="31" colspan="5"><div align="left">
 	<b><? 

 if($ftr9==$besa){
 
 }else{
 echo "$besa"; 
 }
 
   $ftr9= $besa;

 ?></b><br>
 	<?
	if($ftr9==$besa){
	
	}else{ ?><hr><? } ?></div></td>
	</tr>
	 <? 
	 }
//cek_bayar bloncek  
$loik = mysql_query("SELECT RegId FROM kwitansirj WHERE RegId='$ui[RegId]'");
$pp= mysql_fetch_array($loik);
//end of bayar blon
 $Bang = mysql_query("SELECT NamaBiaya 
FROM tabelbiayax WHERE id='$ui[IdBiaya]'");
$ik= mysql_fetch_array($Bang);
$potS = explode(":",$ui[Idsublab]);
$Hyyt = mysql_query("SELECT * FROM sublab WHERE id='$potS[1]'");
$pyt = mysql_fetch_array($Hyyt);
if($pyt[Kelompok]!=$bak){
?>
              <tr><TD colspan="5"><div align="left" class="style8"><?
if($ak==1){ 
 ?><a href="kentut_bau.php?fito=<? echo $fito; ?>" style="text-decoration:none"><? 
 echo "$pyt[Kelompok]"; ?></a><? 
 }else{
?><a href="kentut_bau.php?fito=<? echo $fito; ?>&ak=1" style="text-decoration:none"><? echo $ik[NamaBiaya]; ?></a><? 
}
 ?> </div></TD>
    </tr>
              <? } // end of $pyt[Kelompok] $bak ada_kuda_lucuP
 }
  $jkop = mysql_query("SELECT COUNT(id) as jj FROM sublab_2 WHERE IdBiaya='$ui[Idsublab]-$ui[IdBiaya]'"); 
 $nbx = mysql_fetch_array($jkop);
 if($Id==$ui[id]){
 ?>
              
              <? 
 }else{
 ?>
              <tr  >
                <TD><div align="left" class="style3"><? 
 if($tanto==1){
?><font color="#FF0000">
<a href="suit.php?fito=<? echo $fito; ?>&ak=1&spran=<? echo $KA; ?>&akan=3" style="text-decoration:none"><?  echo "$KA."; ?></a></font><? 
 }
if($ui[level]==2){ echo "&nbsp;&nbsp;";
}elseif($ui[level]==3){ echo "&nbsp;&nbsp;&nbsp;&nbsp;";
}else{ } 
?>
<a href="suit.php?fito=<? echo $fito; ?>&ak=1&spran=<? echo $KA; ?>&akan=4" style="text-decoration:none">
<? echo $ui[NamaBiaya];    //echo "($ui[NamaBiaya])"; ?>
</a></div></TD>
    <td><div align="center" class="style3"><? 
if($ui[Hasil]==''){ echo "."; }else{ echo $ui[Hasil]; }  ?></div></td>
    <td><div align="center" class="style3"><? if($ui[Satuan]==''){
echo "."; }else{ echo $ui[Satuan]; }  ?></div></td>
    <td><div align="center" class="style3"><? echo $ui[NilaiNormal]; ?></div></td>
    <td><div align="center" class="style3"><? if($ui[Keterangan]==''){
echo "."; }else{ 
echo $ui[Keterangan]; $bak = $pyt[Kelompok];
}   
    ?></div></td>
    </tr>
<?
if($nbx[jj]>0){
$TglJam=date("d.m.Y-H:i:s");
$nus=1;
 $jkop2 = mysql_query("SELECT * FROM sublab_2  WHERE IdBiaya='$ui[Idsublab]-$ui[IdBiaya]'"); 
 while($kk = mysql_fetch_array($jkop2)){
  ///

  $kunci="$ui[id]-$kk[id]";
    ////////////////////////////////////////////////////////////////////////////////////////////////
 $mkn = mysql_query("");
			   
  //////////////////////////////////////////////////////////////////////////////////////////////
       $Dimas="$kp[id]-$ui[IdBiaya].$kk[id]";
   $kdkkd = mysql_query("SELECT * FROM hasilcuculab3 WHERE Dimas='$Dimas'");
  $kokpa = mysql_fetch_array($kdkkd);
   //
?>
 <tr class="style3" >
<td width="40"><div align="left">&nbsp;&nbsp;&nbsp;(-)&nbsp;<?
echo strtoupper($kk[NamaBiaya]); 
?></div></td>
<td><div align="center" class="style3"><? 
if($kokpa[id]){
echo $kokpa[Hasil]; 
}else{
echo $kk[Hasil]; }  ?></div></td>
    <td><div align="center" class="style3"><? 
	 
 echo $kk[Satuan];   ?></div></td>
    <td><div align="center" class="style3"><? 
 
echo $kk[NilaiNormal];
  ?></div></td>
    <td><div align="center" class="style3"><?
	if($kokpa[id]){
echo $kokpa[Keterangan]; 
}else{ 
echo $kk[Keterangan];  
}   
 
   ?></div></td>
</tr>
<? 
     
	$nus++; 
} ?>
 <? 
 }  
?>	    

              <? 

 
} //Id
 $Ki=$ui[IdBiaya]; $KA++;  }
 ?>
              </table></td>
    </tr>
        </table>
    </TD></tr>
    
    <tr>
      <td valign="top">
        <div align="left"><br>
          <table width="412" height="77" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td width="404" height="23" valign="top" class="style3">	      &nbsp;Catatan :              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">
                  <table
				   onClick="wCompare = window.open('b_234.php?fito=<? echo $fito; ?>&ak=1', 
  'wCompare', 'width=480,height=300,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   width="404" height="61" border="1" cellpadding="0" cellspacing="0" >
                    <tr valign="top">
                      <td width="400" height="59"><div align="left">
					  <?
					  $dkfkdlf = mysql_query("SELECT * FROM ket_hasil_lab WHERE IdPasien='LR.$fito'");
					  $h_ada  = mysql_fetch_array($dkfkdlf);
					  echo strtoupper($h_ada[Keterangan]);
					  ?>
					  </div></td>
                    </tr>
                  </table>
              </div></td>
            </tr>
          </table>
      </div></td><TD><div align="right" class="style3"> 
          <table border="0"><TR> 
 	          <TD width="120"><div align="left" class="style3">
 	            <div align="center">Bekasi, 
 	              <? $tg=date("d"); $bl=date("m"); $th=date("Y"); $jam =date("H:i:s");
echo "$tg/$bl/$th"; ?>
 	            </div>
              </div></TD></TR>
            <tr><TD height="39" colspan="3">&nbsp;</TD>
    </tr>
            <tr><TD colspan="3"><div align="center" class="style3">( <? echo strtoupper($a[Nama]); ?> )<br>
            <? echo $jam; 	?> </div></TD></tr>
          </table>
    </div></TD></tr>
  </table>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>

