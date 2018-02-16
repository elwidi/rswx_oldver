<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$fito = $_GET["fito"];
include "../alamat.php";
if(!$dowo){
$dowo=23;
}else{
$dowo=$dowo;
}
if(!$depan){
$depan=1;
}else{
$depan=$depan;
}

if(!$dere){
$dere=0;
}else{
$dere=$dere;
}

$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
 $hsggsgs_sdk  = mysql_query("SELECT * FROM ket_hasil_lab  WHERE IdPasien='$kp[id]'");
 $osa = mysql_fetch_array($hsggsgs_sdk);
if(!$kp[id]){
//header("Location:./rambut_gondrong.php");
}
 $koka = mysql_query("SELECT JenisKelamin FROM datapasien WHERE NoPasien='$kp[NoPasien]'");
$ii_ii = mysql_fetch_array($koka);

if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$kdjkdjfkdf_dfdf = mysql_query("SELECT * FROM cetak_lab WHERE IdPasien='$fito'");
$hp= mysql_fetch_array($kdjkdjfkdf_dfdf);
 ?>
<html>
<head>
<?
if($hewan=='ayam'){
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
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.style7 {font-family: Arial, Helvetica, sans-serif}
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style10 {font-size: 10px}
.style15 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style16 {font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
-->
    </style><TITLE></TITLE></head>
<body alink="Black" vlink="Black" link="Black">

<div align="left">
  <table width="714" border="0" cellpadding="0" cellspacing="0">
    
    <TR  onClick="location.href='4e.php?id=<? echo $fito; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" valign="top">
      <td width="701" height="92"><div align="left">
	   <table border="0" cellpadding="0" cellspacing="0">
	   <tr valign="top">
	   <td width="115"><img src="../gb/gb.png" width="120" height="105" /></td>
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
	     <tr>
	       <td>I<strong>NSTALASI LABORATORIUM <br>
		   <?
		   $kfjgkfgf_Fgfgflflfgm = mysql_query("select * from dokter_lab where id=1");
$ya_p = mysql_fetch_array($kfjgkfgf_Fgfgflflfgm);
echo $ya_p[NamaDokter];	
		   ?></strong></td>
	       </tr>
	  </table>
	   </div></td>
	   </tr>
	   </table>
      </div></td>
   </TR>
    <tr  ><TD height="34" colspan="3"><div align="center">
      <p><span class="style16">
	  <a href="c12w.php?id=<? echo $fito; ?>" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none">HASIL PEMERIKSAAN LABORATORIUM<br> 
        RAWAT JALAN</a>
</span><span class="style6"><a href="jesa_pa_k.php?fito=<? echo $fito; ?>" style="text-decoration:none"><br>
      </a>
	  </span></p>
      </div></TD>
    </tr>
   <tr>
   <td colspan="3"><div align="left" class="style3"></div></td>
   </tr> 
    
    <tr
  ><TD colspan="3">
      <div align="center">
	  <table border="1" cellpadding="0" cellspacing="0">
	  <tr valign="top"> 
	  <td width="766"><div align="left">
	  <table width="759" border="0" cellpadding="0" cellspacing="1">
	  <tr >
	  <td width="741" valign="top">
	  <div align="center">
	  <table  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  
	  onClick="wCompare = window.open('d01m.php?akan=<? echo $akan; ?>&ak=<? echo $ak; ?>&id=<? echo $fito; ?>', 
  'wCompare', 'width=420,height=240,left=300,Top=128,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  width="752"  border="0" cellpadding="1" cellspacing="1"> 
        <tr ><TD width="87"><div align="left" class="style3">No. RM </div></TD><td width="3">:</td><td width="223"><div align="left" class="style3"><?
echo $kp[NoPasien];
?></div></td>
    <td width="102"><div align="left" class="style3">Tgl Periksa </div></td>
    <td width="7">:</td><td width="241"><div align="left" class="style3"><? echo "$kp[TglMasuk]/$kp[BlnMasuk]/$kp[ThnMasuk]"; ?> || <? 
echo date("H")-1; echo date(":i:s");
?></div></td>
    </tr>
        <tr>
          <TD class="style3">Nama Pasien </TD>
          <td>:</td><td><div align="left" class="style3"><? echo  ($kp[NamaPasien]); ?> || <? echo $ii_ii[JenisKelamin]; ?></div></td>
    <td><span class="style3">No. Lab</span></td>
    <td>&nbsp;</td><td width="241"><span class="style3"><? echo $kp[RegId]; ?> (
        <?
	//
$Rea="$kp[id].$kp[RegId]";
	$ksjksds = mysql_query("SELECT NoUrut,id FROM urutanlab WHERE RegId='$Rea'");
	$bcx = mysql_fetch_array($ksjksds);
	echo $bcx[NoUrut];
	//
	 if($bcx[NoUrut]>0 && $hewan=='ayam'){
				/////////
				$ldkfldkfldkfldi0di0fkldkfdlkfldf = mysql_query("SELECT COUNT(id) AS bb FROM ItemCtk WHERE IdUrutLab='$bcx[id]'"); 
				$dap = mysql_fetch_array($ldkfldkfldkfldi0di0fkldkfdlkfldf);
				$djah = $dap[bb]+1;
				/////
				$TglJamEK=date("d.m.Y.H:i:s");
				$ididk = mysql_query("INSERT INTO `ItemCtk` (`id`, `IdUrutLab`, `CtkKe`, `Opr`, `TglJam`, `NoPasien`, `NamaPasien`) 
				VALUES (NULL, '$bcx[id]', '$djah', '$a[Nama]', '$TglJamEK','$kp[NoPasien]','$kp[NamaPasien]')");
				}?>
) </span></td>
    </tr>
        
        <tr><TD><div align="left" class="style3">Umur</div></TD><td>:</td><td><div align="left" class="style3">
          <?
echo $kp[Umur]; ?> &nbsp;
Thn
<?
		  $ceki = explode(":",$kp[BlnUmur]);
		  echo "$ceki[0] Bln    $ceki[1] Hari";
?>
        </div></td>
    <td><div align="left" class="style3">Dokter</div></td>
    <td>:</td><td width="241"><div align="left" class="style3">
      <?
 		echo $kp[NamaDokter]; 	 ?>
    </div></td>
    </tr>
 
        <tr   class="style3">
 
            <td class="style3"><span class="style7">Asal Pasien </span></td>
            <td class="style3"><span class="style15">:</span></td>
    <td class="style3"><? echo ucfirst(strtolower($kp[Bagian])); ?></td>
    <TD  ><div align="left" class="style3">Penjamin</div></TD>
    <td>:</td>
 <td><div align="left"><?
 echo  ucfirst(strtolower($kp[NamaPer])); 
 ?></div></td>
          </tr>
        <tr   class="style3" valign="top">
          <td class="style3">Alamat</td>
          <td class="style3">:</td>
          <td colspan="4" class="style3"><span class="style7">
            <?
$hhhg = mysql_query("SELECT Alamat FROM datapasien WHERE NoPasien='$kp[NoPasien]'");
$jop = mysql_fetch_array($hhhg);
echo  ucfirst(strtolower($jop[Alamat]));
?>
          </span></td>
          </tr>
        </table>
	  </div>	  </td>
	  </tr>
	  </table>
	  </div></td>
	  </tr>
	  </table>
	   
	  </div>
    </TD>
    </tr>
    
    <?
 if($aku=="berdoa"){
?><TR  >
      <?  
 }else{
 ?>
    
      <? } ?> 
    <tr><TD colspan="3">
      <table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>
            
            <div align="center">
               <table border="1" cellpadding="0" cellspacing="0">
			   <tr valign="top">
			   <td width="767"><div align="left">
			   <table width="761" border="0" cellspacing="2" cellpadding="2">
                <?
				if($akan==11){
				?><tr  onClick="location.href='hsl_lab.php?fito=<? echo $fito; ?>&ak=<? echo $ak; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" ><?
				}else{
				?><TR  onClick="location.href='hsl_lab.php?akan=11&fito=<? echo $fito; ?>&ak=<? echo $ak; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
                  <? } ?><TD width="168" ><div align="center"><SPAN class="style3">
                     JENIS PEMERIKSAAN </SPAN>
                    </div></TD>
          <td width="146">
            <div align="center"><SPAN class="style3">HASIL</SPAN>          </div></td><td width="72">
              <div align="center"><SPAN class="style3">SATUAN</SPAN>              </div></td><td width="259">
                <div align="center"><SPAN class="style3">NILAI RUJUKAN </SPAN></div></td><td width="104">
                  <div align="center"><SPAN class="style3">KET</SPAN>                    </div></td>
        </TR>
                
                <?
$KA=1; $noma=1;
if($akan==5 && $doa=='tobat'){
 	$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY IdBiaya,id Limit $dere,23 "); 
}elseif($akan==2){
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' AND level='0' ORDER BY IdBiaya,id");
}elseif($akan==1){
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY IdBiaya,id LIMIT $awal,$akir");
  }elseif($akan==11 && !$hp[id]){
 $kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY Kelompok,IdSubLab "); 
 }elseif($akan==11 && $hp[id]){
$pian=$hp[Awal]-1;  
if($pian<0){
$pian=0;
}else{
$pian=$pian;
}
$aker=$hp[Akir]+1;
 $kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY Kelompok,IdSubLab LIMIT $pian,$aker");  
}else{
 	$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY IdBiaya,id LIMIT $dere,$dowo ");   
}
while($ui = mysql_fetch_array($kju)){
 	$kdjkdfjkddk0909 = mysql_query("SELECT Kelompok1,Kelompok2 FROM tabelbiayax WHERE id='$ui[IdBiaya]'");
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
if($tanto==1){ echo "$noma.";} echo "$besa "; // echo "($ui[id])";
//$gahag = mysql_query("update cetak_hasil_lab Set Kelompok='$besa' WHERE id='$ui[id]'");
 }
 $gahag = mysql_query("update cetak_hasil_lab Set Kelompok='$besa' WHERE id='$ui[id]'");
// echo "update cetak_hasil_lab Set Kelompok='$besa' WHERE id='$ui[id]'"; 
   $ftr9= $besa;
 $beha = $besa;
   $iik = mysql_query("INSERT INTO  `tampil_lab`
    (`id`, `IdPasien`, `RegId`, `Level`, `NamaBiaya`, `IdDetil`, `Urut`, `Kelompok`, `Kelompok2`, `Hasil`, `Satuan`, `Rujukan`) VALUES (NULL, '$fito',
   '$kp[RegId]', '1', '$ui[NamaBiaya]',  '$ui[id]','$noma','$besa','$besa','','','')");
   ?></b> <br>
                    <?
	if($ftr9==$besa){
	
	}else{ ?><hr>
                    <? } ?>   </div></td>
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
  echo  ( ($pyt[Kelompok]));  
 }else{
  if($tanto==1){ echo "$noma-"; } echo $ik[NamaBiaya];  
}
 ?> </div></TD>
        </tr>
                <? } // end of $pyt[Kelompok] $bak ada_kuda_lucuP
 }
    $jkop = mysql_query("SELECT COUNT(id) as jj FROM sublab_2 WHERE IdBiaya='$ui[IdBiaya]-$ui[IdSubLab]'"); 
 $nbx = mysql_fetch_array($jkop);
 if($Id==$ui[id]){
 ?>
                
                <? 
 }else{
$rek =  $noma%2;
if($rek==1){
$warna='bgcolor="#D9FDE1"';
}else{
$warna='';
}
?>
                <tr <? echo $warna; ?>   >
                  <TD><div align="left" class="style3"><?   
 if($tanto==1){
?><font color="#FF0000"><?  echo "$noma."; ?></font><? 
 }
 
  $iik = mysql_query("INSERT INTO  `tampil_lab`
    (`id`, `IdPasien`, `RegId`, `Level`, `NamaBiaya`, `IdDetil`, `Urut`, `Kelompok`, `Kelompok2`, `Hasil`, `Satuan`, `Rujukan`) VALUES (NULL, '$fito',
   '$kp[RegId]', '2', '$ui[NamaBiaya]',  '$ui[id].','$noma','$besa','$besa','$ui[Hasil]','$ui[Satuan]','$ui[NilaiNormal]')");
if($ui[level]==2){ echo "&nbsp;&nbsp;";
}elseif($ui[level]==3){ echo "&nbsp;&nbsp;&nbsp;&nbsp;";
}else{ } 
echo   ($ui[NamaBiaya]);  //  echo "($ui[id]- $ui[IdSubLab])"; 
  $uukjdsd_df  = mysql_query("update cetak_hasil_lab Set Kelompok='$beha' WHERE id='$ui[id]'");
 //echo "update cetak_hasil_lab Set Kelompok='$beha' WHERE id='$ui[id]'"; 
 ?></div></TD>
        <td><div align="center" class="style3"><? 
if($ui[Hasil]==''){ echo "."; }else{ echo $ui[Hasil]; }  ?></div></td>
        <td><div align="center" class="style3"><? if($ui[Satuan]==''){
echo "."; }else{ echo   ($ui[Satuan]); }  ?></div></td>
        <td><div align="center" class="style3"><? echo $ui[NilaiNormal]; ?></div></td>
        <td><div align="center" class="style3"><? if($ui[Keterangan]==''){
echo "."; }else{ 
echo  $ui[Keterangan]; $bak = $pyt[Kelompok];
}   
    ?></div></td>
        </tr>
                <?
if($nbx[jj]>0){
$TglJam=date("d.m.Y-H:i:s");
$nus=1; $noma=$noma;
 $jkop2 = mysql_query("SELECT * FROM sublab_2 WHERE IdBiaya='$ui[IdBiaya]-$ui[IdSubLab]' ORDER BY id asc"); 
 while($kk = mysql_fetch_array($jkop2)){
  ///
   $kunci="$ui[id]-$kk[id]";
     ////////////////////////////////////////////////////////////////////////////////////////////////
	 
 $mkn = mysql_query("INSERT INTO  `cetak_hasil_sublab` 
			(`id`, `RegId`, `IdBiaya`, `level`, `IdSubLab`, `NamaBiaya`, `Hasil`, `Satuan`, `NilaiNormal`,
			 `MaxP`, `MinP`, `MinW`, `MaxW`, `Keterangan`, `Opr`, `TglJam`) 
			 VALUES (NULL, '$kp[id]', '$kk[IdBiaya]', '$kk[level]', 
			 '$kunci', '$kk[NamaBiaya]', '$kk[Hasil]', '$kk[Satuan]', '$kk[NilaiNormal]', '$kk[MaxP]', '$kk[MinP]', '$kk[MinW]',
			  '$kk[MaxW]', '$kk[Keterangan]', '$a[Nama]', '$TglJam')");
			   
  //////////////////////////////////////////////////////////////////////////////////////////////
  $kdkkd = mysql_query("SELECT * FROM cetak_hasil_sublab WHERE Idsublab='$kunci' ");
  $kokpa = mysql_fetch_array($kdkkd);
 
   //
$reks =  $nus%2;
if($reks==1){
$warna2='bgcolor="#D9FDE1"';
}else{
$warna2='';
}
?>
                <tr   <? echo $warna2; ?> class="style3"  onClick="wCompare = window.open('po_e.php?kandang=sapi&kunci=<? echo $kunci; ?>&ela=<? echo $kk[id]; ?>&fito=<? echo $fito; ?>&ak=1', 
  'wCompare', 'width=580,height=540,left=600,Top=23, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
                  <td   width="168"><div align="left">&nbsp;&nbsp;&nbsp;(-)&nbsp;<?
 if($tanto==1){
?><font color="#FF0000"><?  echo "$noma.."; ?></font><? 
$KA++;    } $noma++; 

if($kokpa[id]){
$Satean=$kokpa[Satuan]; 
}else{
$Satean=$kk[Satuan]; }
if($kokpa[id]){
$nele= $kokpa[Hasil]; 
}else{
$nele=$kk[Hasil]; } 
if($kokpa[id]){
$Rujukan= $kokpa[NilaiNormal]; 
}else{
$Rujukan= $kk[NilaiNormal];
} 
   $iik = mysql_query("INSERT INTO  `tampil_lab`
    (`id`, `IdPasien`, `RegId`, `Level`, `NamaBiaya`, `IdDetil`, `Urut`, `Kelompok`
	, `Kelompok2`, `Hasil`, `Satuan`, `Rujukan`) VALUES (NULL, '$fito',
   '$kp[RegId]', '3', '$kk[NamaBiaya]',  '$kk[id]','$noma','$ui[NamaBiaya]','$besa','$nele','$Satean','$Rujukan')");
echo  $kk[NamaBiaya]; 
?></div></td>
    <td><div align="center" class="style3"><? 
 
 
$pendek= trim($kokpa[NilaiNormal]);
$bedal = explode("-",$pendek);
$depan =$bedal[0]-0;
$akir=$bedal[1]-0;
$panjang=strlen($nele);
if($depan>=0 && $nele!='' && $panjang<5){
  	if($nele>$akir){
   echo "$nele"; ?><sup><b>*</sup><? 
   }elseif($nele<$depan){  
 ?><sup><b>*</sup><? 
      echo "$nele"; 
   }else{
   echo $nele; 
   }
   }else{
   echo "$nele";
   } 
 
  ?></div></td>
        <td><div align="center" class="style3"><? 
	if($kokpa[id]){
echo $kokpa[Satuan]; 
}else{
 echo $kk[Satuan]; }  ?></div></td>
        <td><div align="center" class="style3"><? 
	if($kokpa[id]){
echo $kokpa[NilaiNormal]; 
}else{
echo $kk[NilaiNormal];
} ?></div></td>
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

 
$noma++;} //Id
 $Ki=$ui[IdBiaya]; $KA++;  }
 ?>
              </table>
			   </div></td>
			   </tr>
			   </table>
            </div></td>
     </tr>
        </table>
    </TD></tr>
    
    <tr>
      <td valign="top">
        <div align="left"> 
          <table  onClick="wCompare = window.open('d_111.php?ela=<? echo $ui[id]; ?>&fito=<? echo $fito; ?>&ak=1', 
  'wCompare', 'width=580,height=200,left=400,Top=63, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  width="416" height="77" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td width="408" height="23" valign="top" class="style3">	      &nbsp;Catatan  :              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">
                  <table width="404" height="61" border="1" cellpadding="0" cellspacing="0" class="style3">
                      <tr valign="top">
                        <td width="400" height="59"><?
						echo strtoupper($osa[Keterangan]);
						?>&nbsp;</td>
	                  </tr>
                  </table>
              </div></td>
            </tr>
          </table>
      </div></td><TD colspan="2"><div align="right" class="style3"> 
          <table width="147" border="0">
            <TR> 
              <TD width="141"><div align="left" class="style3">
 	              <div align="center">Bekasi, 
 	                <? $tg=date("d"); $bl=date("m"); $th=date("Y"); $jam =date("H:i:s");
echo "$kp[TglMasuk]/$kp[BlnMasuk]/$kp[ThnMasuk]"; ?>
 	                <br>
                    <span class="style10">ANALIS / PEMERIKSA</span> </div>
              </div></TD></TR>
            <tr><TD height="36" colspan="3">&nbsp;</TD>
    </tr>
            <tr><TD colspan="3"><div align="center" class="style3">( <? echo  ($a[Nama]); ?> )<br>
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
