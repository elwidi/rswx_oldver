<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$fito = $_GET["fito"];
include "../alamat.php";

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
	   <td width="115"><img src="../gambar/YADIKA.png" alt="logo" width="62" height="54"></td>
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
      <p><span class="style16">HASIL PEMERIKSAAN LABORATORIUM<br> 
        RAWAT JALAN
</span><span class="style6"><a href="jesa_pa_k.php?fito=<? echo $fito; ?>" style="text-decoration:none"><br>
      </a></span></p>
      </div></TD>
    </tr>
    
    
    <tr
  ><TD colspan="3">
      <div align="center">
	  <table border="0" cellpadding="2" cellspacing="2">
	  <tr valign="top"> 
	  <td width="766"><div align="left">
	  <table width="759" border="0" cellpadding="0" cellspacing="1">
	  <tr>
	  <td width="741" valign="top">
	  <div align="center">
	  <table width="752"  border="0" cellpadding="1" cellspacing="1"> 
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
?><TR  onClick="location.href='kentut_bau.php?fito=<? echo $fito; ?>&ak=1';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
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
                <TR bgcolor="Silver">
                  <TD width="168" bgcolor="#FFFFFF"><div align="center"><SPAN class="style3">
                    <?
  if($tanto==1){
  ?><a href="kentut_bau.php?fito=<? echo $fito; ?>&ak=<? echo $ak; ?>" style="text-decoration:none ">JENIS PEMERIKSAAN</a><? 
  }else{
  ?>
                    <a href="kentut_bau.php?tanto=1&fito=<? echo $fito; ?>&ak=<? echo $ak; ?>" style="text-decoration:none ">JENIS PEMERIKSAAN</a>
                    <? } ?></SPAN>
                    </div></TD>
          <td width="146" bgcolor="#FFFFFF">
            <div align="center"><SPAN class="style3">HASIL</SPAN>          </div></td><td width="72" bgcolor="#FFFFFF">
              <div align="center"><SPAN class="style3">SATUAN</SPAN>              </div></td><td width="259" bgcolor="#FFFFFF">
                <div align="center"><SPAN class="style3">NILAI RUJUKAN </SPAN></div></td> 
        </TR>
                
                <?
$KA=1; $noma=1;
if($akan==2){
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' AND level='0' ORDER BY IdBiaya,id");
}elseif($akan==1){
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY IdBiaya,id LIMIT $awal,$akir");
}else{
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$kp[RegId]' ORDER BY  IdBiaya,id ");
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
 echo "$besa "; 
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
 echo  ( ($pyt[Kelompok])); ?></a><? 
 }else{
?><a href="kentut_bau.php?fito=<? echo $fito; ?>&ak=1" style="text-decoration:none"><? echo $ik[NamaBiaya]; ?></a><? 
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
?><font color="#FF0000"><?  echo "$KA."; ?></font><? 
 }
if($ui[level]==2){ echo "&nbsp;&nbsp;";
}elseif($ui[level]==3){ echo "&nbsp;&nbsp;&nbsp;&nbsp;";
}else{ } 
echo   ($ui[NamaBiaya]);    //echo "($ui[NamaBiaya])"; ?></div></TD>
        <td><div align="center" class="style3"><? 
if($ui[Hasil]==''){ echo "."; }else{ echo $ui[Hasil]; }  ?></div></td>
        <td><div align="center" class="style3"><? if($ui[Satuan]==''){
echo "."; }else{ echo   ($ui[Satuan]); }  ?></div></td>
        <td><div align="center" class="style3"><? echo $ui[NilaiNormal]; ?></div></td>
        </tr>
                <?
if($nbx[jj]>0){
$TglJam=date("d.m.Y-H:i:s");
$nus=1;
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
echo  $kk[NamaBiaya]; 
?></div></td>
    <td><div align="center" class="style3"><? 
if($kokpa[id]){
$nele= $kokpa[Hasil]; 
}else{
$nele=$kk[Hasil]; } 
 

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
			  <?
			  if($ela=='dimas'){
			  ?>
			  <tr>
			  <td >&nbsp;</td>
			  </tr>
			  <? 
			  }else{
			  ?> <tr valign="top">
			     <td bgcolor="#993333"><div align="left">
				 <input type="button" name="fgfgf" value="Tambah Keterangan"  onClick="wCompare_ddddD_D = window.open('s_09a.php?fas=<? echo $fas; ?>&fito=<? echo $fito; ?>', 
  'wCompare_ddddD_D', 'width=480,height=400,left=120,Top=129,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_ddddD_D.focus();"    class="style15">
				 <input style="background-color:#66FF66" type="button" name="fgfgf_D" value="Komponen" class="style15"  onClick="wCompare_dd_08ddD_D = window.open('w_0.php?fas=<? echo $fas; ?>&fito=<? echo $fito; ?>', 
  'wCompare_dd_08ddD_D', 'width=480,height=400,left=120,Top=129,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_dd_08ddD_D.focus();"  >
				 <input type="button" name="fgfgfff" value="Clear View" class="style15" onClick="location.href='bioskop_dganti_vcd.php?ela=dimas&hari=iin&fas=<? echo $fas; ?>&fito=<? echo $fito; ?>';">
				 				 <input name="fgfgf" type="button" class="style15" onClick="window.close()" value="Tutup">
				 
				 </div></td>
			     </tr>
				 <? } ?>
			   <tr valign="top">
			     <td bgcolor="#FFFFFF"><div align="left">
				 <table border="0" cellpadding="2" cellspacing="2">
				 <TR>
				 <TD colspan="3"><?
				 $kdjfdkjfdkjfkdfd = mysql_query("SELECT * FROM teks_lab WHERE NoBukti LIKE '$fas-%' ORDER BY id desc");
$po = mysql_fetch_array($kdjfdkjfdkjfkdfd);
echo $po[Judul];
				 ?></TD>
				 </TR>
				 <?
 				 $kdjkfdf_Dfdf  = mysql_query("SELECT * FROM teks_lab WHERE NoBukti like '$fas-%' and Vare!=''");
				 while($hp = mysql_fetch_array($kdjkfdf_Dfdf)){ ?>
				 <tr class="style3">
				 <td width="182"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="wCompare_ddddD_D = window.open('s_09a.php?supran=<?  echo $hp[id]; ?>&bayar=lama&fas=<? echo $fas; ?>&fito=<? echo $fito; ?>', 
  'wCompare_ddddD_D', 'width=480,height=400,left=120,Top=129,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_ddddD_D.focus();"    ><div align="left"><?
				 echo $hp[Vare];
				 ?></div></td><td width="8">:</td>
				 <td  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onDblClick="location.href='jjj_kkk.php?del=<? echo $hp[id]; ?>&fas=<? echo $fas; ?>&fito=<? echo $fito; ?>';" width="550"><div align="left">
				 <?
				 echo $hp[Isian];
				 ?> 
				</div></td>
				 </tr>
				 <? } ?>
				 </table></div></td>
			     </tr>
			   </table>
            </div></td>
     </tr>
        </table>
    </TD></tr>
    
    
  </table> 
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
//     Struktur teks_lab
 }
?>
