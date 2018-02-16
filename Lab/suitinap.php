<?php 
session_start();
include "../konek.php";
include "../ceke.php";
include "../alamat.php";
$RegId= $_GET["RegId"];
$NoBukti = $_GET["NoBukti"];
$gundul = $_GET["gundul"];
$fito = $_GET["fito"];
$ada = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
$splo = explode("-",$kp[transferKe]);
 $Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
$pey = explode("-",$NoBukti);
if($pey[0]=='LAB'){
$NoBukti="$NoBukti";
}else{
$NoBukti="LAB-$NoBukti";
}
if(!$awal){
$awal=0;
}else{
$awal=$awal;
}
 if(!$akir){
 $akir=50;
 }else{
 $akir=$akir;
 }
  if(!$kp[id]){
//header("Location:./rambut_gondrong.php");
}
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
//include "latar_lab.php";
?>
<html>
<head> 
<?
if($adaS==5){
?><script type="text/javascript">
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
.style4 {font-size: 14px}
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
.style22 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; }
.style6 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style17 {color: #990000}
-->
    </style><TITLE>hasil lab ranap</TITLE></head>
<body alink="Black" vlink="Black" link="Black">
<div align="left">
<table width="726"   border="0" cellpadding="0" cellspacing="0">
 <TR  onClick="location.href='index.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" valign="top">
      <td width="486" height="92"><div align="left">
	   <table border="0" cellpadding="0" cellspacing="0">
	   <tr valign="top">
	   <td width="115"><span class="style5"><img src="../gb/gb.png" width="114" height="88"></span></td>
	   <td width="486"><div align="left">
	   <table border="0" cellpadding="1" cellspacing="1" class="style3">
	     <tr>
           <td width="377"><span class="style16"><strong>RUMAH SAKIT YADIKA</strong></span></td>
	       </tr>
	     <tr>
           <td></td>
	       </tr>
	     <tr>
           <td><div align="left"><?
		   echo $fkd[Jalan];
		   ?></div></td>
	       </tr>
	     <tr>
           <td>Telp <?
		   echo $fkd[Telp];
		   ?><?
		   echo $fkd[Fax];
		   ?> </td>
	       </tr>
	    <? /* <tr>
           <td><span class="style3"><?
		   $kiks_dfdfd = mysql_query("SELECT * FROM dokterlab WHERE id=1 ");
		   $nam = mysql_fetch_array($kiks_dfdfd); 
		   echo $nam[Dokter]; 
		   ?></span></td>
	       </tr>
	     <tr class="style3">
           <td><span class="style3">NO SIP : <? echo $nam[Sip];  ?> </span></td>
	       </tr>
	     */ ?><tr>
	       <td><div align="left"><?
		    $kfjgkfgf_Fgfgflflfgm = mysql_query("select * from dokter_lab where id=1");
$ya_p = mysql_fetch_array($kfjgkfgf_Fgfgflflfgm);
echo $ya_p[NamaDokter];	
		   ?></div></td>
	       </tr>
	  </table>
	   </div></td>
	   </tr>
	   </table>
      </div></td>
   </TR>
<tr ><TD colspan="3"><div align="center"><span class="style6">
 HASIL PEMERIKSAAN LABORATORIUM<br>
  RAWAT INAP</span></div></TD>
</tr>

<tr>
  <td colspan="2" valign="top">
    <div align="left">
      <table width="722" border="0" cellpadding="2" cellspacing="2">
          <tr >
             <TD width="714" colspan="3">
              <div align="center">
                <table width="712"  border="0" cellpadding="2" cellspacing="2"> 
                  <tr><TD width="127"><div align="left" class="style3">No Pasien </div></TD><td width="5"><strong>:</strong></td><td width="192"><div align="left" class="style3"><? echo $kp[NoPasien]; 
			 
			?></div></td>
                      <td width="88"><div align="left" class="style3">Tgl Periksa </div></td>
                      <td width="6"><strong>:</strong></td> <td width="230"><div align="left" class="style3"><? 
			$dasP = mysql_query("SELECT * FROM txninap2 WHERE MstKey='$kp[MstKey]' AND NoBukti='$NoBukti'");
			$yesh = mysql_fetch_array($dasP);
			echo "$yesh[Tgl]-$yesh[Bln]-$yesh[Thn]";
			//echo "$kp[TglMasuk]"; ?> ||
                        <? //echo date("H:i:s"); ?></div></td>
                    </tr>
                  <tr><TD><div align="left" class="style3">Umur</div></TD><td width="5"><strong>:</strong></td><td><div align="left" class="style3"><span class="style3"><?
 $umurnya = mysql_query("SELECT 	Alamat,tgllhr,JenisKelamin FROM datapasien WHERE NoPasien='$kp[NoPasien]'");
$k=mysql_fetch_array($umurnya);
$pecah = explode("-",$k[tgllhr]);
$birth = gregoriantojd($pecah[1],$pecah[0],$pecah[2]);
$cal = cal_from_jd(1721426+unixtojd()-$birth, CAL_GREGORIAN);
$Usio = ($cal['year']-1);
$BlnIm = ($cal['month']-1);
$Har = ($cal['day']-1);
//echo 'Umur : ' . ($cal['year']-1) . ' tahun, ' . ($cal['month']-1) . ' bulan, ' . ($cal['day']-1) . ' hari';
$ujuka = "$Usio:$BlnIm:$Har";
 $upda = mysql_query("UPDATE keluarmasukpasien SET Umur='$ujuka' WHERE MstKey='$kp[MstKey]'");
$er = explode(":",$kp[Umur]);
echo "$er[0] Thn $er[1] Bln $er[2] Hari";
?></span></div></td>
                      <td><div align="left" class="style3">Nama Pasien</div></td><td width="6"><strong>:</strong></td>
                      <td width="230"><div align="left" class="style3"><? echo ucfirst(strtolower($kp[NamaPasien])); ?>
                      || <?  echo "$k[JenisKelamin]"; ?> </div></td>
                    </tr>
                  
                  <tr><TD><div align="left" class="style3">Asal Pasien </div></TD><td width="5"><strong>:</strong></td><td><div align="left" class="style3"> 
                    <? echo strtoupper($j[NamaKelas]); echo " | $j[NamaRuangan]"; ?></div></td>
                      <td><div align="left" class="style3">No Lab </div></td>
                      <td><strong>:</strong></td>
                      <td width="230"><div align="left" class="style3"><? echo ""; 
				//
//			 $bus="$yesh[Tgl]$yesh[Bln]$yesh[Thn]";
				$Rea="$yesh[NoBukti]";
				echo "$Rea ";
				
 	$ksjksds = mysql_query("SELECT NoUrut,id FROM urutanlab WHERE RegId='$fito.$Rea'");
 	$bcx = mysql_fetch_array($ksjksds);
	 
				?> ( <? echo $bcx[NoUrut]; 
				////
				if($bcx[NoUrut]>0 && $adaS==5){
				/////////
				$ldkfldkfldkfldi0di0fkldkfdlkfldf = mysql_query("SELECT COUNT(id) AS bb FROM ItemCtk WHERE IdUrutLab='$bcx[id]'"); 
				$dap = mysql_fetch_array($ldkfldkfldkfldi0di0fkldkfdlkfldf);
				$djah = $dap[bb]+1;
				/////
				$TglJamEK=date("d.m.Y.H:i:s");
				$ididk = mysql_query("INSERT INTO `ItemCtk` (`id`, `IdUrutLab`, `CtkKe`, `Opr`, `TglJam`, `NoPasien`, `NamaPasien`) 
				VALUES (NULL, '$bcx[id]', '$djah', '$a[Nama]', '$TglJamEK','$kp[NoPasien]','$kp[NamaPasien]')");
				}
				///
				?> ) </div></td>
                    </tr>
                  <tr  valign="top">
                    <TD><div align="left" class="style3">Alamat</div></TD>
                    <td width="5"><strong>:</strong></td>
                      <td class="style3" ><div align="left" class="style22"><? echo strtoupper($k[Alamat]); ?> </div></td>
                      <td  class="style3">Dokter</td>
                      <td><strong>:</strong></td><td class="style3"><div align="left"> <?
					  echo ucfirst(strtolower($kp[KetDokter]));
					  ?></div></td>
                    </tr>
                  </table>
                </div></TD>
           </tr>
      </table>
    </div></td></tr>
 
<tr><TD colspan="3">
      
        <div align="left">
          <table width="706" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="702">
                <div align="right">
                  <table width="722" border="0" cellspacing="2" cellpadding="2">
                    <TR bgcolor="Silver">
                      <TD width="168"><SPAN class="style3">JENIS PEMERIKSAAN</SPAN>                      </TD>
                    <td width="169">
                      <div align="center"><SPAN class="style3">HASIL</SPAN>                        </div></td><td width="93">
                        <div align="center"><SPAN class="style3">SATUAN</SPAN>                        </div></td><td width="160">
                          <div align="center"><SPAN class="style3">NILAI rujukan</SPAN>                          </div></td><td width="78">
                                <div align="center"><SPAN class="style3">KET</SPAN>                                </div></td>
                  </TR>
                    <tr>
                      <td colspan="5"><hr></td>
		          </tr>
                    <? 
					$PR=explode("-",$NoBukti);
$hh=1;
if($PR[0]=='LAB'){
 $kju = mysql_query("SELECT * FROM cetak_hasil_labinap  WHERE RegId='$kp[MstKey]' AND NoBukti ='$NoBukti' ORDER BY   IdBiaya LIMIT $awal,$akir");
}elseif($akan==1){
$kju = mysql_query("SELECT * FROM cetak_hasil_labinap  WHERE RegId='$kp[MstKey]' AND NoBukti='LAB-$NoBukti' ORDER BY   IdBiaya LIMIT $awal,$akir");
}else{
$kju = mysql_query("SELECT * FROM cetak_hasil_labinap  WHERE RegId='$kp[MstKey]' AND NoBukti='LAB-$NoBukti' ORDER BY IdBiaya,id"); 
}
while($ui = mysql_fetch_array($kju)){
 $Bang = mysql_query("SELECT NamaBiaya,Kelompok1,Kelompok2 
FROM tabelbiayax WHERE id='$ui[IdBiaya]'");
$ik= mysql_fetch_array($Bang);
 $besa="$ik[Kelompok1]-$ik[Kelompok2]";
 if($Ki != $besa){
//cek_bayar bloncek  
 $pot = explode(":",$ui[IdSubLab]);
 $Hyyt = mysql_query("SELECT * FROM sublab WHERE IdBiaya='$ui[IdBiaya]'");
$pyt = mysql_fetch_array($Hyyt); 
 ?>
                    <tr><TD colspan="5"><div align="left" class="style3">
<b><? echo "$besa"; ?></b></div></TD></tr>
 <? }?>
                    
  <?
if($Id==$ui[id]){
?>
                    <? 
}else{
?>
              <?
			  $pecaha = $hh%2;
			  if($pecaha==1){
			  $warna='';
			  }else{
			  $warna='bgcolor="#CCFFFF"';
			  }
			  ?>      <tr <? echo $warna; ?>  valign="top">
                      <TD><div align="left" class="style3"><? 
if($ui[level]==2){ echo "&nbsp;&nbsp;";
}elseif($ui[level]==3){ echo "&nbsp;&nbsp;&nbsp;&nbsp;";
}else{ }
if($tanto==1){ echo "$hh.."; }
echo "<i>"; echo ucfirst(strtolower($ui[NamaBiaya]));   $potx = explode("-",$ui[IdSubLab]);

?><font color="#993300"><?  ?></font><? 
    ?></i></div></TD>
                  <td><div align="center" class="style3"><? 
if($ui[Hasil]==''){ echo "."; }else{ echo $ui[Hasil]; }  ?></div></td>
                  <td><div align="center" class="style3"><? if($ui[Satuan]==''){
echo "."; }else{ echo $ui[Satuan]; }  ?></div></td>
                  <td><div align="center" class="style3"><? echo $ui[NilaiNormal]; ?></div></td>
                  <td><div align="center" class="style3"><? if($ui[Keterangan]==''){
echo "."; }else{ 
echo ucfirst(strtolower($ui[Keterangan]));
}  $bak = $pyt[Kelompok]; ?></div></td>
                  </tr><?
  		  	$jdkjd998 = mysql_query("SELECT id FROM sublab WHERE NamaBiaya='$ui[NamaBiaya]'");
  $xa = mysql_fetch_array($jdkjd998);
 $pecahan = explode("-",$ui[IdSubLab]);
   $balake ="$ui[IdBiaya]-$pecahan[1]";
   $ree=1;
         	$jkop = mysql_query("SELECT * FROM sublab_2 WHERE IdBiaya='$ui[IdBiaya]-$potx[2]' ORDER BY IdBiaya asc");
   while($sp =  mysql_fetch_array($jkop)){
  ////
  
   $kdjkfd_00 = mysql_query("SELECT COUNT(id) AS hh FROM cetak_hasil_sub_labinap WHERE IdSubLab='$ui[id].$sp[id]'");
 $YS = mysql_fetch_array($kdjkfd_00);
  if($YS[hh]>0){}else{
    $simmo=mysql_query("INSERT INTO  `cetak_hasil_sub_labinap` (
`id` ,
`RegId` ,
`NoBukti` ,
`IdBiaya` ,
`IdSubLab` ,
`NamaBiaya` ,
`Hasil` ,
`Satuan` ,
`NilaiNormal` ,
`MaxP` ,
`MinP` ,
`MinW` ,
`MaxW` ,
`Keterangan`
,
`Kelompok`
 )
VALUES (
NULL , '$kp[MstKey]','$ui[NoBukti]', '$sp[IdBiaya]', '$ui[id].$sp[id]',
 '$sp[NamaBiaya]', '$sp[Hasil]', '$sp[Satuan]', '$sp[NilaiNormal]',
 '$sp[MaxP]', '$sp[MinP]', '$sp[MinW]', '$sp[MinW]', '.','$nakal[1]'
)");
 
 } 
  $kkik= mysql_query("SELECT * FROM cetak_hasil_sub_labinap WHERE IdSubLab='$ui[id].$sp[id]'");
  $sp2= mysql_fetch_array($kkik);
  ///////////////////////////////////////////////////
  $sp=$sp2;
  $saa=$ree%2;
  if($saa==1){
  $warna2='';
  }else{
  $warna2='bgcolor="#CCFFFF"';
  }
  ?>
                    <tr   <? echo $warna2; ?> class="style3">
                      <td><div align="left">&nbsp;&nbsp;(-). <? echo ucfirst(strtolower($sp[NamaBiaya]));   ?></div></td>
    <td><div align="center"><? 
   echo $sp[Hasil];   ?></div></td>
      <td><div align="center"><?  echo $sp[Satuan]; ?></div></td>
	  <td><div align="center"><? echo $sp[NilaiNormal]; ?></div></td>
		  <td><div align="center"><? echo $sp[Keterangan]; ?></div></td>
    </tr> 
                    <?
  $ree++; }
  ?>
                    <?
	  } // if($Id==$ui[id]){
	  ?>          <? $Ki="$ik[Kelompok1]-$ik[Kelompok2]";  $hh++; } ?>
                  </table>
              </div></td>
            </tr>
          </table>
        </div></TD></tr>

<tr>
  <td valign="top">
 	<div align="left"> <br>
        <table  height="77" border="0" cellpadding="2" cellspacing="2">
          <tr>
          <td width="243"   height="23" valign="top" class="style3">
	      &nbsp;&nbsp;Catatan :       </td>
          </tr>
	      <tr>
	        <td valign="top">
	          <div align="left">
	        <table  
			 onClick="wCompare = window.open('c56.php?NoBukti=<?  echo $NoBukti; ?>&fito=<? echo $fito;  ?>&gundul=pacul&ff=2&ikan=bakar', 
  'wCompare', 'width=480,height=300,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" width="232" height="61" border="1" cellpadding="0" cellspacing="0" >
	              <tr valign="top" class="style3">
	                <td width="228"  height="59">
	                  <div align="left">
	                <?
					$jshjsdsj_sdskknjf = mysql_query("SELECT * FROM ket_hasil_lab2 WHERE IdPasien='$fito' AND NoBukti='$NoBukti'");
				  $us_s = mysql_fetch_array($jshjsdsj_sdskknjf);
				 echo $us_s[Keterangan]; 
					?>   
                      </div>			          </td>
                    </tr>
	              </table>
	            </div></td></tr>
          </table>
  	  </div></td>
  <TD width="281" ><div align="left" class="style3">
    <div align="right"><br>
      <table width="205"  border="0">
          <TR>
            <TD width="168"><div align="left" class="style3">
              <div align="right">BEKASI, 
                <? 			echo "$yesh[Tgl]-$yesh[Bln]-$yesh[Thn]";?>
                  <br>
                ANALIS / PEMERIKSA</div>
            </div></TD>
          </TR>
          <tr>
            <TD height="43" colspan="3"><div align="right"></div></TD>
          </tr>
          <tr>
            <TD colspan="3"><div align="left" class="style3">
              <div align="right">( <? echo strtoupper($a[Nama]); ?> )<br>
                <? echo date("H:i:s"); 	?> </div>
            </div></TD>
          </tr>
          </table>
    </div>
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
