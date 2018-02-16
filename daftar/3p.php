<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$jjnj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$h = mysql_fetch_array($jjnj);
$iui = mysql_query("SELECT * FROM datapasien WHERE NoPasien='$h[NoPasien]'");
$pp= mysql_fetch_array($iui); 
if(!$h[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2  || $a[Level]==77){
?>
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
.style2 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size:14px}
.style12 {font-family: Arial, Helvetica, sans-serif; font-size:12px}
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #666666; }
-->
 </style>
 </head>
 <body>
 <div align="left">
 <table border="0" cellpadding="0" cellspacing="0">
 <tr valign="top"  onClick="location.href='index.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
 <td width="800" colspan="3"><div align="left">
  <table border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
  <td><div align="left">
  <img src="../gb/gb.png" width="67" height="60" />
  </div></td>
  </tr>
  </table>
 </div></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
   <td width="780" colspan="3"><div align="center" class="style2">IDENTITAS PASIEN </div></td>
 </tr>
  <tr valign="top">
    <td colspan="3"><div align="left">
	              <table height="864" border="1" cellpadding="0" cellspacing="0">
                    <tr valign="top">
	<td width="559"><div align="left">
	<table border="0" cellpadding="1" cellspacing="1" class="style3">
	<tr>
	<td width="308">NAMA LENGKAP</span></td>
	</tr>
	<tr>
	<td><div align="left"><strong><? echo strtoupper($h[NamaPasien]); ?>.</strong></div></td>
	</tr>
	</table>
	</div></td><td width="211"><div align="left">
	<table border="0" cellpadding="1" cellspacing="1" class="style3">
	<tr>
	<td width="148" ><div align="center">NOMOR  RM</div></td>
	</tr>
	<tr>
	<td><div align="center"><strong><? echo $h[NoPasien];?></strong></div></td>
	</tr>
	</table>
	</div></td>
	</tr>
	<tr>
	<td colspan="2" valign="top"><div align="left">
	 <table border="0" cellpadding="1" cellspacing="1">
	 <tr valign="top">
	  <td width="481"  ><div align="left">
	  <table border="0" cellpadding="1" cellspacing="1" class="style12">
	  <tr>
	  <td> TEMPAT / TANGGAL LAHIR</td><td width="228" rowspan="2" valign="top"><div align="left">
	  <table border="0" cellpadding="2" cellspacing="2" class="style12">
	  <tr>
	  <td width="82">UMUR</td>
	  <td width="8">:</td>
	  <td width="127"><div align="left"><?
	  $pecah =explode("-",$pp[tgllhr]);
	   $birth = gregoriantojd($pecah[1],$pecah[0],$pecah[2]);
 $cal = cal_from_jd(1721426+unixtojd()-$birth, CAL_GREGORIAN);
 $Usio = ($cal['year']-1);
 $BlnIm = ($cal['month']-1);
 $Har = ($cal['day']-1);
//echo 'Umur : ' . ($cal['year']-1) . ' tahun, ' . ($cal['month']-1) . ' bulan, ' . ($cal['day']-1) . ' hari';
 $ujuka = "$Usio:$BlnIm:$Har";
 echo "$Usio Th $BlnIm Bl $Har Hr";
	   ?></div></td>
	  </tr>
	  <tr>
	  <td>KELAMIN</td><td>:</td><td><div align="left"><? if($pp[JenisKelamin]='P'){
	  echo "PEREMPUAN";
	  }else{
	  echo "LAKI-LAKI";
	  }  ?></div></td>
	  </tr>
	  </table>
	  </div></td>
	  </tr>
	  <tr>
	  <td><div align="left"><? echo strtoupper($pp[TempatLhr]); ?> /  <? echo $pp[tgllhr]; ?></div></td>
	  </tr>
	  <tr valign="top">
	    <td colspan="2"><div align="left">
		ALAMAT LENGKAP : <br>
		<table border="0" cellpadding="1" cellspacing="2" class="style12">
		<tr>
		<td width="437" colspan="3"><div align="left">
		<b><?
		echo strtoupper($pp[Alamat]); 
		?></b>
		</div></td>
		</tr>
		<tr valign="top">
		  <td colspan="3"><div align="left">
		  <table border="0" cellpadding="1" cellspacing="1" class="style12">
		  <tr>
		  <td width="92">TELP</td>
		  <td width="8">:</td>
		  <td width="250"><div align="left"><? echo $pp[Telp]; ?></div></td>
		  </tr>
		  </table>
		  </div></td>
		  </tr>
		</table>
		</div></td>
	    </tr>
	   </table>
	  </div></td><td width="292" valign="top">
	  <table border="0" cellpadding="1" cellspacing="1" class="style12">
	  <tr>
	  <td width="105">NO KTP</td>
	  <td width="8"><strong>:</strong></td>
	  <td width="162"><div align="left"><? ?></div></td>
	  </tr>
	  <tr>
	  <td>STATUS</td><td><strong>:</strong></td><td><div align="left"><?
	   if($pp[StatusNikah]==1){
  echo "BELUM NIKAH";
  }elseif($pp[StatusNikah]==2){
  echo "NIKAH";
  }elseif($pp[StatusNikah]==3){
  echo "DUDA";
  }elseif($pp[StatusNikah]==4){
  echo "JANDA";
  } ?></div></td>
	  </tr>
	  <tr>
	    <td>AGAMA</td>
	    <td><strong>:</strong></td>
	    <td><div align="left"><?
		 if($pp[KodeAgama]==1){
  echo "Islam";
  }elseif($pp[KodeAgama]==2){
  echo "Kristen";
  }elseif($pp[KodeAgama]==3){
  echo "Katolik";
  }elseif($pp[KodeAgama]==4){
  echo "Hindu";
  }elseif($pp[KodeAgama]==5){
  echo "BUDHA";
  }else{
  echo "LAIN-LAIN";
  }  
		?></div></td>
	    </tr>
	  <tr>
	    <td>PENDIDIKAN</td>
	    <td><strong>:</strong></td>
	    <td><div align="left"><?
		 if($pp[Pendidikan]==1){ echo "TK"; }elseif($pp[Pendidikan]==2){
  echo "SD"; }elseif($pp[Pendidikan]==3){ echo "SLTP";
  }elseif($pp[Pendidikan]==4){
  echo "SLTA"; }elseif($pp[Pendidikan]==5){
  echo "Perguruan Tinggi";
  }else{
  echo "Lain-Lain";
  }
		?></div></td>
	    </tr>
	  <tr>
	    <td>PEKERJAAN</td>
	    <td><strong>:</strong></td>
	    <td><div align="left"><?  echo strtoupper($pp[Pekerjaan]);?></div></td>
	    </tr>
	  </table>
	  </td>
	  </tr>
	 <tr valign="top">
	   <td colspan="2"  ><div align="left">
	   
	   </div></td>
	   </tr>
 	</table>
	</div></td>
  </tr>
  
	 <tr>
	                  <td height="667" colspan="2">
<p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
  	  <p>&nbsp;</p></td>
	</tr></table>
	</div></td>
	</tr>
 </table>
 </div> </td>
 </tr>
 <tr>
   <td height="25" colspan="3" valign="top">&nbsp;</td>
 </tr>
 <tr>
   <td colspan="3" valign="top"><div align="center" class="style5">
   JL. Kelurahan Jakarta No 40 Pondok Gede-Bekasi<BR>
   Telp (021) 849xxxx (021) 8483047
   </div></td>
 </tr>
  </table>
 </div>
 </body>
 </html>
<?
}
?>