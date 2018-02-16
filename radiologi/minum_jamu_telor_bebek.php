<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 $id = $_GET["id"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16 || $a[Level]==9){?>
<html>
<head>
<script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6666';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {color: #000000; font-weight: bold; }
-->
    </style>
</head>
<body>
 <div align="left">
  <table width="961" align="left">
    <tr>
      <td width="928"><div align="left" class="style5">
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
      <td valign="top"> 
	  LIST DATA PEMERIKSAAN RADIOLOGI LUAR
        ( <? echo $a[Level]; ?> )<div align="left">
          <form target="_self">
            <table border="0" cellpadding="2" cellspacing="2">
              <tr class="style1">
                <td width="112">NAMA PASIEN</td><td width="12"><strong>:</strong></td>
    <td width="636"><div align="left">
      <input name="NamaPasien" type="text" autofocus="autofocus"  class="style1" size="20" maxlength="30">
      <input type="hidden" name="ela" value="2">
      
      || 
      <input name="ghg" type="submit" class="style1" value="Submit">
	  <input  type="button" name="fgfgf" value="Tambah Pasien Baru" onClick="location.href='mungkin_lebih_baik.php';" class="style1">
      <?
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9){
?><input name="djdjd" type="button" class="style1" onClick="location.href='../kasir/index.php';" value="Kembali"> <? 
}else{
?><input name="djdjd" type="button" class="style1" onClick="location.href='index.php';" value="Kembali"> 
      <? } ?>
      </div></td>
    </tr>
          </table></form>
    </div></td>
    </tr>
    <tr>
      <td valign="top">
        <div align="left">
          <table width="904" border="0" cellpadding="2" cellspacing="2" class="style1">
                <?
	if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9){
	?>
                <tr bgcolor="#666666"><? 
	}else{
	?> <tr bgcolor="#000066">
	<? } ?>
              <td width="28" height="25" bgcolor="#5ABB52"><span class="style11">NO</span></td>
     <td width="134" bgcolor="#5ABB52"><span class="style11">REGI ID / NO RM </span></td>
    <td width="26" bgcolor="#5ABB52"><span class="style11">TGL</span></td>
     <td width="322" bgcolor="#5ABB52"><span class="style11">NAMA PASIEN</span></td>
    <td width="65" bgcolor="#5ABB52"><span class="style11">TXN</span></td>
    <td width="72" bgcolor="#5ABB52"><div align="left" class="style11">NOKWT</div></td>
    <td width="113" bgcolor="#5ABB52"><div align="left" class="style11">KASIR</div></td>
    <td width="57" bgcolor="#5ABB52"><div align="left" class="style11">TGL</div></td>  
    </tr>
            <?
$nis=1;
  
      $dataSY = mysql_query("SELECT * FROM txnrad     ORDER BY id desc LIMIT 0,130"); 
     while($ss = mysql_fetch_array($dataSY)){
	//
	$dkjfkdjkdkdj= mysql_query("SELECT * FROM kwitansirj WHERE RegId='$ss[RegId]'");
	$hp = mysql_fetch_array($dkjfkdjkdkdj);
	//
	 $plak  = $nis%2;
 if($plak==1){
 $colo='bgcolor="#DEFEDC"';
 }else{
 $colo='';
 }
 if($hp[id]){
	$warna='bgcolor="#FFFF66"';
	}else{
	$warna='';
	}
 if($a[Level]==16){?>
	   <tr <? echo $colo; ?>  <? echo $warna; if($hp[id]){ }else{ ?>  onClick="location.href='nasi_kucing.php?hari=<? echo $ss[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"<? } ?>> 
	 <?
	 }else{?>
	 <tr  <? echo $colo; ?>   <? echo $warna; ?> onClick="location.href='d_re.php?id=<? echo $ss[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
       <? } ?>
              <td><div align="center"><? echo $nis; ?></div></td>
     <td><div align="left"><?  
	 echo $ss[RegId]; 
	  ?></div></td>
     <td><div align="left"><? echo "$ss[Tgl]/$ss[Bln]/$ss[Thn]"; ?></div></td>
     <td><div align="left"><? echo strtoupper($ss[NamaPasien]); ?></div></td>
     <td><div align="right"><?
	 $jkfkf_090 = mysql_query("SELECT SUM(Harga) AS jj FRom txnjalan WHERE RegId='$ss[RegId]'");
	 $un = mysql_fetch_array($jkfkf_090);
	 echo number_format($un[jj]); 
	 ?></div></td>
	 <td><div align="left"><?
	 if($hp[id]){
	 echo $hp[id];
	 }else{
	 echo "-";
	 }
	 ?></div></td>
	 <td><div align="left"><? echo strtoupper($hp[Kasir]); ?></div></td>
	 <td><div align="left"><? echo "$hp[TglBayar]-$hp[BlnBayar]-$hp[ThnBayar]"; ?></div></td>
    </tr>
            <?    $nis++; } ?>
  <?
	if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9){
	?><tr bgcolor="#666666"><? 
	}else{
	?> <tr bgcolor="#000066">
	<? } ?>              <td colspan="9" bgcolor="#5ABB52">&nbsp;</td>
    </tr>
          </table>
    </div>    </td>
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
