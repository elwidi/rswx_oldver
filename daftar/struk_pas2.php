<?
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
 $id = $_GET [ "id" ];
  $nakal = $_GET [ "nakal" ];
  
$badak = mysql_query("SELECT * FROM rwtjalan_pesan WHERE id='$id'");
$b = mysql_fetch_array($badak);
if(!$b[id]){
//header("Location:./daftar.php");
}?>
<html>
<head><script language="JavaScript">
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
<style type="text/css">
<!--
.style4 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style10 {font-size: 10px}
.style12 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.style15 {font-size: 12px}
.style17 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style21 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style26 {font-size: 14px}
.style27 {font-size: 9px}
-->
</style>
</head>
<body alink="#000000" vlink="#000000" link="#000000">
 <div align="left">
           <table width="459" height="525" border="0" cellpadding="1" cellspacing="1">
		 <?
		 if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==6){
		 ?>
		 <tr class="style4">
		 <? 
		 }else{
		 ?> <tr  onClick="location.href='index.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
		 <? } ?>
		  <td colspan="3" valign="top"><div align="center" class="style21 style26">
		    <div align="left"><em><strong>
    STRUK PASIEN  RAWAT JALAN SEMENTARA </strong></em></div>
		  </div></td>
		  </tr>
		  <tr>
		  <td colspan="3"><span class="style27">.</span></td>
		  </tr>
           <?
		   if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==6){
		   ?>
		   <tr class="style4">
		   <?  
		  }elseif($nakal==1){
		  ?> <TR 
		   onClick="location.href='struk_pas.php?id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" bordercolor="#FFFFFF" class="style4">
<? }else{ ?>
<TR 
	 bordercolor="#FFFFFF" class="style4">
 <? } ?>		   
          <TD ><div align="left" > 
 		  NO RM</div></TD>
          <td ><div align="center">:</div></td>
          <td ><div align="left" >
		  <? 	 echo $b[NoPasien];  
 ?> </div></td>
          </TR>
          <tr bordercolor="#FFFFFF" class="style4">
          <td class="style10"><div align="left" class="style21">NAMA PASIEN</div></td>
          <td><div align="center" class="style21"><strong>:</strong></div></td>
          <td class="style10"><div align="left" class="style21"><?
		   $ksisksj_lldkfd =mysql_query("SELECT GolDarah,StatusNikah FROM datapasien WHERE NoPasien='$b[NoPasien]'");
		  $mx = mysql_fetch_array($ksisksj_lldkfd);
		  ///
		   echo $b[NamaPasien];
		    if($mx[StatusNikah]==1){
		   $stata= " NN";
		   }elseif($mx[StatusNikah]==2){
			   $stata= " NY";
		   }elseif($mx[StatusNikah]==3){
		   $stata= " TN";
		   }elseif($mx[StatusNikah]==4){
		   $stata= " NY";
		   }else{
		   $stata= " ?"; 
		   }
if($b[Umur]<15){
echo " AN";
}else{
echo " $stata";
}
		   ///
		    ?></div></td>
          </tr>
		   <tr class="style4">
		  <td>JENIS KELAMIN</td><td>:</td><td><div align="left"><? 
		 if($b[JenisKelamin]=='P'){
		 echo "<b>PEREMPUAN</b>";
		 }elseif($b[JenisKelamin]=='L'){
		 echo "<b>LAKI-LAKI</b>";
		 }else{
		 echo "?";
		 }
		  ?></div></td>
		  </tr>
		   <tr bordercolor="#FFFFFF" class="style4">
          <td class="style10"><span class="style21">UMUR</span></td>
          <td><div align="center" class="style21"><strong>:</strong></div></td>
          <td class="style10"><div align="left" class="style21"><?  echo $b[Umur]; ?> THN <?
		  $ceki = explode(":",$b[BlnUmur]);
		  echo "$ceki[0] Bln |  $ceki[1] Hari";
		  ?></div></td>
          </tr>
		  <tr bordercolor="#FFFFFF" class="style4"  onClick="wCompare_uududud0238 = window.open('../Kasir/xi9.php?id=<? echo $id; ?>', 
  'wCompare_uududud0238', 'width=390,height=200,left=100,Top=144,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_uududud0238.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
          <td width="173" class="style10"><div align="left" class="style12 style15">TGL MASUK</div></td>
          <td width="9"><div align="center" class="style21"><strong>:</strong></div></td>
          <td width="281" class="style10"><div align="left" class="style21"><?
		   echo "$b[TglMasuk]/$b[BlnMasuk]/$b[ThnMasuk],JAM : $b[JamMasuk]"; ?></div></td>
          </tr>
          <tr bordercolor="#FFFFFF" class="style4">
          <td class="style10"><div align="left" class="style21">REGISTER</div></td>
          <td><div align="center" class="style21"><strong>:</strong></div></td>
          <td class="style10"><div align="left" class="style21"><? echo $b[RegId]; ?></div></td>
          </tr>
		  <tr class="style4">
		  <td>GOLONGAN DARAH</td><td>:</td><td><div align="left"><? 
		  
		 $GolDar=$mx[GolDarah];
 if($GolDar==1){
echo "A";
}elseif($GolDar==2){
echo "B";
}elseif($GolDar==3){
echo "AB";
}elseif($GolDar==4){
echo "O";
}else{
echo "($GolDar)";
} 
		  ?></div></td>
		  </tr>
		   <tr bordercolor="#FFFFFF" class="style4">
          <td class="style10"><div align="left" class="style21">BAGIAN</div></td>
          <td><div align="center" class="style21"><strong>:</strong></div></td>
          <td class="style10"><div align="left" class="style21"><? echo $b[Bagian]; ?></div></td>
          </tr>
          <tr bordercolor="#FFFFFF" class="style4">
          <td class="style10"><div align="left" class="style21">DOKTER</div></td>
          <td><div align="center" class="style21"><strong>:</strong></div></td>
          <td class="style10"><div align="left" class="style21" > <? echo $b[NamaDokter]; 

   ?></div></td></tr>
  <?
   $pecah = explode("-",$b[KodeDokter]);
  if($pecah[1]>0){  
    $fmkdfgmf = mysql_query("SELECT NamaDokter FROM dokterganti WHERE id='$pecah[1]'");
$ada = mysql_fetch_array($fmkdfgmf);
  ?>
  <tR class="style4">
  <td><em>DOKTER PENGGANTI</em></td>
  <td><em>:</em></td>
  <td><div align="left"><em>
    <?
  echo strtoupper($ada[NamaDokter]);  ?>
  </em></div></td>
  </tR>
  <? } ?>
		  
<!--           <tr bordercolor="#FFFFFF" class="style4">
          <td class="style10"><div align="left" class="style21">RUJUKAN</div></td>
          <td><div align="center" class="style21"><strong>:</strong></div></td>
          <td class="style10"><div align="left" class="style21"><?  //echo $b[RujukanDari]; ?></div></td>
          </tr> -->
		  <tr bordercolor="#FFFFFF" class="style4">
          <td class="style10"><div align="left" class="style21">ASURANSI PENJAMIN</div></td>
          <td><div align="center" class="style21"><strong>:</strong></div></td><?
		  $bans = strtoupper($b[NamaPer]);
		  ?>
          <td class="style10"><div align="left" class="style21"><? echo strtoupper($b[NamaPer]); ?></div></td>
          </tr>
		   <tr>
		  <td colspan="3"><span class="style17"><!--JASA DOKTER-->&nbsp; </span></td>
		  </tr>
         <tr class="style4">
           <td height="24"   class="style21">PENDAFTARAN</td>
		  <td><div align="center"><strong><span class="style21">:</span></strong></div></td>
          <td><span class="style21">Rp.<?
		  
		  ?>.......................................................... </span></td>
          </tr> <tr>
          <td height="25"  class="style21">KONSULTASI</td>
		  <td><div align="center"><strong><span class="style21">:</span></strong></div></td>
          <td><span class="style21">.....................................................................  </span></td>
          </tr>
          
		
		  
          <tr>
          <td height="23"   class="style21">TINDAKAN 1</td>
          <td><div align="center"><strong><span class="style21">:</span></strong></div></td>
          <td><span class="style21">..................................................................... </span></td>
          </tr>
		  <tr>
          <td height="23"   class="style21">TINDAKAN 2</td>
          <td><div align="center"><strong><span class="style21">:</span></strong></div></td>
          <td><span class="style21">..................................................................... </span></td>
          </tr>
		  <tr>
          <td height="23"   class="style21">TINDAKAN 3</td>
          <td><div align="center"><strong><span class="style21">:</span></strong></div></td>
          <td><span class="style21">..................................................................... </span></td>
          </tr>
		  <tr class="style21">
		  <td>DIAGNOSIS</td>
		  <td><div align="center"><strong><span class="style21">:</span></strong></div></td>
<td><span class="style21">..................................................................... </span></td>
		  </tr>
          <tr>
          <td height="130" colspan="3" valign="top"><div align="left" class="style21">
          <table width="410" border="0" cellpadding="0" cellspacing="0" >
           <tr>
          <td colspan="3">.</td>
          </tr>
          <tr>
          <td width="166"><table width="137" border="0" cellpadding="2" cellspacing="2">
          <tr>
          <td width="129" class="style21">Bekasi, <? 
$ttg=date("d"); $bll=date("m"); $thh =date("Y");
echo "$ttg/$bll/$thh"; $jam=date("H:i:s");
?></td>
          </tr>
          <tr>
          <td height="28" class="style21">&nbsp; </td>
          </tr>
          <tr>
          <td class="style21">( <? echo strtoupper($a[Nama]); ?> ) <br>
		  <i><?
		  echo strtoupper($a[NamaBagian]); 
		  ?></i><br>
          <? echo $jam; ?> </td>
          </tr>
           
</table></td>
          <td width="244" colspan="2">
            <div align="left" class="style15">
                  <div align="left">
                    <table width="159" border="0" cellpadding="2" cellspacing="2">
                              <tr>
                              <td width="151" class="style15"> <div align="right">TTD DOKTER </div></td>
                              </tr>
                              <tr>
                              <td height="36" class="style15"><div align="right">					 </div></td>
                              </tr>
                              <tr>
                              <td class="style15"><div align="right">( <? echo $b[NamaDokter]; ?> ) </div></td>
                              </tr>
                    </table>
                  </div>
            </div></td></tr>
          </table>
          </div></td>
          </tr>
   </table>
</div> 
</body>
</html>

<?
}else{
header("Location:./keluar.php");
}
?>