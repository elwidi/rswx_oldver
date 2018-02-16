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

$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
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
	   <td width="115"><img src="../gambar/YADIKA.png" alt="logo" width="112" height="88"></td>
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
   <td colspan="3"><div align="left" class="style3">
   Hal : <?
   $her=1;
    	$kdfdfdfdfdju = mysql_query("SELECT *  FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY IdBiaya,id "); 
		while($pop = mysql_fetch_array($kdfdfdfdfdju)){
		///
		 $jkop2xx = mysql_query("SELECT * FROM sublab_2 WHERE IdBiaya='$pop[IdBiaya]-$pop[IdSubLab]' ORDER BY id asc"); 
 while($kkxx = mysql_fetch_array($jkop2xx)){

$her++; }
		///
		$her++; }
	 $hal =ceil($her/23);
echo "$depan Dari $hal";    ?> </div></td>
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
 $no=1;
 $kjdfdfD_Dfdfd = mysql_query("SELECT * FROM tampil_lab WHERE IdPasien='$id' AND Level=1");
 while($nn = mysql_fetch_array($kjdfdfD_Dfdfd)){
  ?>
 <tr class="style8">
 <td><div align="left"><? echo $nn[Kelompok]; ?></div></td>
 </tr>
 <?
  $kjdfdfD_Dfdfd2 = mysql_query("SELECT * FROM tampil_lab WHERE IdPasien='$id'   AND Kelompok='$nn[Kelompok2]'");
 while($nn2 = mysql_fetch_array($kjdfdfD_Dfdfd2)){
?>
 <tr class="style3">
 <td><div align="left"><? echo $nn2[NamaBiaya]; ?></div></td>
 </tr> <?
  $kjdfdfD_Dfdfd3 = mysql_query("SELECT * FROM tampil_lab WHERE IdPasien='$id'   AND Kelompok='$nn2[NamaBiaya]'");
 while($nn3 = mysql_fetch_array($kjdfdfD_Dfdfd3)){
?>
 <tr class="style3">
 <td><div align="left">&nbsp;(-) <? echo $nn3[NamaBiaya]; ?></div></td>
 </tr>
 <? } ?>
 <? } ?>
 

 <? 
   } ?>
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
