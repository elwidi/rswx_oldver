<?
session_start();
include "../konek.php";
include "../ceke.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==45){
  $trt_po = date("d/m/y");
  $NamaPasien = $_GET["NamaPasien"];
  ?>
 <html>
 <head>
 <style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style9 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #000000; }
.style11 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
 </style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CC66CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
 </head>
 <body>

 <div align="left">
   <table width="920" height="213" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
<tr valign="top">
<td  colspan="10"><div align="left">
<?
if($a[Level]==9){
	  $file='../gambar/kasir.jpg';
}else{
$file='../gambar/farmasi.jpg';
}
?>
	<?
  	if($a[Level]==1){
	       $file='../gambar/pendaftaran.gif';
		   }elseif($a[Level]==7){
		   $file='../gambar/akutansi.gif';
		   }elseif($a[Level]==98){
		   $file='../gambar/boga.gif';
		   }elseif($a[Level]==2){
		   $file='../gambar/cust ser.gif';
		   }elseif($a[Level]==11){
		   $file='../gambar/farmasi.gif';
		   }elseif($a[Level]==112){
		   $file='../gambar/fisio.gif';
		   }elseif($a[Level]==3){
		   $file='../gambar/hrd.gif';
		   }elseif($a[Level]==9){
		   $file='../gambar/kasir.gif';
		   }elseif($a[Level]==4){
		   $file='../gambar/keperawatan.gif';
		   }elseif($a[Level]==22){
		   $file='../gambar/keuangan.gif';
		   }elseif($a[Level]==12){
		   $file='../gambar/laboratorium.gif';
		   }elseif($a[Level]==5){
		   $file='../gambar/log far.gif';
		   }elseif($a[Level]==6){
		   $file='../gambar/log umum.gif';
		   }elseif($a[Level]==77){
		   $file='../gambar/poli.gif';
		    }elseif($a[Level]==16){
		   $file='../gambar/radiologi.gif';
		    }elseif($a[Level]==8){
		   $file='../gambar/rm.gif';
		    }elseif($a[Level]==9){
		   $file='../gambar/ugd.gif';
		   }
		   ?>
          <img src="<? echo $file; ?>">
</div></td>
</tr>
<tr>
<td colspan="10" bgcolor="#000066"><span class="style11">HALAMAN TRANSAKSI RETUR </span></td>
</tr>     
     <form target="_self">
       <tr>
         <td colspan="10" valign="top"><div align="left">
           <table border="0" cellpadding="2" cellspacing="2">
             <tr class="style3">
               <td width="137"><?
 if($ek==3){ ?>NAMA PASIEN<?  }else{
 ?>NO RESEP<? } ?></td><td width="8">:</td><td width="714"><div align="left"><?
 if($ek==3){
 ?>
                 <input type="text" name="NamaPasien" maxlength="30" size="30">
                 <input  type="hidden" name="cp" value="100">
                 <? 
 }else{
 ?><input type="text" name="NoResep" maxlength="40" size="20">
                 <input type="hidden" name="cp" value="3"><? } ?>
                 
                 <input type="hidden" name="mobil" value="<? echo $mobil; ?>">
                 </div></td>
   </tr>
             <tr class="style3">
               <td colspan="3"><div align="left">
                 <input name="fgfgf" type="submit" class="style3" value="Submit"> 
                 <?
  if($ek==3){
  ?><input type="button" name="ffgf" value="Cari No Resep" onClick="location.href='sulistiono.php';" class="style3" style="background:#999933"><? 
  }else{
  ?> <input type="button" name="ffgf" value="Cari Bds Nama" onClick="location.href='sulistiono.php?ek=3';" class="style3">
                 <? } ?>
   <input name="dfjfgf" type="button" class="style3" onClick="location.href='buat_nomer_resep3.php?RL=Umum';" value="Buat Transaksi Baru" <? if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==45){ ?> disabled="disabled"<? } ?>> 
   <input type="button" name="ff" value="Kembali" onClick="location.href='../jujur_sabar.php';" class="style3">
                  || LEVEL AKSES  :  <? echo $a[Level]; ?></div></td>
     </tr>
            </table>
   </div></td>
   </tr> <tr bgcolor="#FFCCCC" class="style9">
     <td width="29" bgcolor="#FFFF33"><div align="center"><span class="style9">NO</span></div></td><td width="65" bgcolor="#FFFF33"><span class="style9">ID</span></td>
   <td width="48" bgcolor="#FFFF33"><span class="style9">TGL</span></td>
   <td width="75" bgcolor="#FFFF33" ><div align="center">JAM</div></td>
    <td width="214" bgcolor="#FFFF33" ><div align="left">NAMA</div></td>
    <td width="181" bgcolor="#FFFF33"><div align="left">NO RESEP</div></td>
      <td width="58" bgcolor="#FFFF33"><div align="left">KWT</div></td>
	   <td width="58" bgcolor="#FFFF33"><div align="left">NILAI</div></td>
        <td width="65" bgcolor="#FFFF33"><div align="center">JAM</div></td>
	    <td width="129" bgcolor="#FFFF33"><div align="left">OPR</div></td>
    </tr>
     </form>
    <?
  $no=1;
      $ada_pa = mysql_query("SELECT * FROM rl_resep WHERE NamaPasien LIKE '$NamaPasien%'   ORDER BY id desc limit 0,100 "); 
   while($f = mysql_fetch_array($ada_pa)){
      include "hitung_harga_rl.php";
  $kkik = mysql_query("SELECT * FROM jual_ob_rl_tmp WHERE RegId='$f[NoResep]'");
  $ada = mysql_fetch_array($kkik);
  $od = explode("-",$f[Jam]);
//
 		    $kkik3 = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM jual_ob_rl WHERE RegId='$f[NoResep]'");
  $ada3 = mysql_fetch_array($kkik3);
 
 ?>     <tr 
    onClick="location.href='x2c.php?anak=3&NoResep=<? echo $f[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
	class="style3">
  <td><div align="center"><? echo $no; ?></div></td>
    <td><div align="left"><? echo $f[id]; ?></div></td>
    <td><div align="left"><? echo $f[Tgl]; ?></div></td>
    <td><div align="center"><? echo $f[Jam]; ?></div></td>
    <td><div align="left"><? echo strtoupper($f[NamaPasien]); ?></div></td>
      <td><div align="left"><? echo $f[NoResep]; ?></div></td>
	  <td><div align="left"><?
 	$ksiski = mysql_query("SELECT id,Kasir as Opr,JamBayar as Jam FROM kwitansirj WHERE NoPasien='RL-$f[id]'");
	$us = mysql_fetch_array($ksiski);
	if($us[id]){
	echo "RL:$us[id]";
	}else{
	echo ".";
	}
	?></div></td>
	  <td><div align="center"><? 
  //$RegId = $f[NoResep];
  
  echo number_format($Bay);
  $Bay=0; $Ppn=0;  $sub_rac=0; $sayang2=0;
   $sayangx=0;
   $sayangz=0;
   $sayangz2=0;
   $sayangz3=0;
   $sayangz5=0;
		   ?></div></td>
	  	  <td><div align="center"><? echo $us[Jam]; ?></div></td>
	  <td><div align="left"><? echo strtoupper($us[Opr]); ?></div></td>
     </tr>
     
     <? $no++; } ?> <tr class="style3">
       <td colspan="9" bgcolor="#FFFF33">&nbsp;</td>
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