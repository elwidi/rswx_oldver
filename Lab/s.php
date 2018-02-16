<?
session_start();
include "../ceke.php";
include "../konek.php";
include "../alamat.php";
  $jdkj = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
 header("Location:./index.php");
}
$ceke_S = mysql_query("SELECT * FROM labumum WHERE  RegId='$hh[RegId]'");
$ii = mysql_fetch_array($ceke_S);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==11){
include "../terbilang.php";
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style155 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;  
}
.style155223 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px; color:#999999
}
.style4 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;}
.style5 {font-size: 3px}
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-style: italic; }
.style11 {font-family: "Times New Roman", Times, serif; font-size: 14px; font-weight: bold; }
.style12 {font-family: "Times New Roman", Times, serif}
.style155 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>

<div align="left">
  <table width="556" border="0" cellpadding="2" cellspacing="2"
  >
    <tr  onClick="location.href='minum_jamu_telor_bebek.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  <td width="123"> <div align="center"><span class="style1"><img   src="../gb/gb.png" alt="logo" width="45" height="45"></span></div></td>
    <td colspan="3"><span  class="style11"><?
	echo strtoupper($fkd[Nama]); 
	?></span><span class="style155223"><br>
<? echo strtoupper($fkd[Jalan]); ?><br />
      Telp.  <? echo $fkd[Telp]; ?>.<br>
	  FAX : <? echo $fkd[Fax]; ?> </span> </td>
    </tr>
    <tr>
      <td colspan="4"><span class="style5"><hr></span></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><b>KWITANSI</b></div></td>
    </tr>
    <tr class="style155">
      <td colspan="2"><div align="left" class="style21 style22 style155">No Kwt </div></td>
        <td width="6"><div align="center" class="style20 style12">
          <div align="left">:</div>
      </div></td>
        <td width="424">
      <div align="left"  ><?
		  //echo $hh[RegId];
		  echo "KWT:$id";
		  ?> </div></td>
    </tr>
     <tr bordercolor="#000000" class="style155">
       <td colspan="2"><div align="left"  >Sudah Diterima Dari </div></td>
       <td width="6"><div align="left"><strong>:</strong></div></td>
       <td width="424">
       <div align="left"  ><?
	   if($a[Level]==11){
	     echo ucfirst(strtolower($hh[Pembayar])); 
	   }else{
	   ?> <a href="#" 
	   onClick="wCompare = window.open('../Kasir/65yhy_0.php?pa=3&id=<? echo $id;?>', 
  'wCompare', 'width=380,height=440,left=500,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none" >
	   <? echo ucfirst(strtolower($hh[Pembayar])); ?></a>
	   <? } ?></div></td>
    </tr>
     <tr bordercolor="#000000" class="style155">
       <td colspan="2"><span  >Nama Pasien </span></td>
       <td><div align="left"><strong>:</strong></div></td>
       <td><div align="left"  >
           <? 
echo ucfirst(strtolower($hh[NamaPasien]));
?>
       </div></td>
    </tr>
	<tr class="style155">
	<td colspan="2">Nilai</td><td>:</td><td><div align="left"><?
	$atu2=$hh[Tunai]+$hh[Db]+$hh[Kk]+$hh[Jam];
echo number_format($atu2); 
  ?></div></td>
	</tr>
     <tr class="style155">
       <td colspan="2"><span>Terbilang</span></td>
       <td><div align="left"><strong>:</strong></div></td>
       <td><div align="left"><i><?
 
 $kalimat = terbilang($atu2);
echo ucfirst(strtolower($kalimat));
 ?></i></div></td>
     </tr>
     <tr bordercolor="#000000" class="style155">
       <td colspan="2"><div align="left"  >Keterangan</div></td>
       <td><div align="left"><strong>:</strong></div></td>
       <td><div align="left"  ><?
	   echo ucfirst(strtolower($hh[Keterangan]));
	   ?> </div></td>
    </tr>
     
     <tr bordercolor="#000000" class="style155">
       <td colspan="4"><span class="style7">.</span></td>
    </tr>
     <tr bordercolor="#000000" class="style155">
       <td colspan="4" valign="top">
         <div align="left"></div>		</td>
    </tr>
     <tr>
     <td colspan="4"><div align="center">
	 <table width="573" border="0" cellpadding="2" cellspacing="2">
	 <tr valign="top">
	 <td width="374" ><span class="style10">* Terimakasih atas kepercayaan anda terhadap pelayanan RS YADIKA, <br>
	      Bila ada biaya yang belum masuk di Rincian ini akan di tagihkan kemudian </span></td>
	 <td width="184"><div align="right">
       <table width="179" border="0" cellpadding="2" cellspacing="2" class="style4"  >
         <tr valign="bottom">
          <td width="171" height="35"><div align="center">BEKASI, 
            <? 	  echo "$hh[TglBayar]/$hh[BlnBayar]/$hh[ThnBayar]";
	  //echo date("d-"); echo strtoupper(date("F")); echo date("-Y");  ?>          
          </div></td>
         </tr> 
         <tr>
           <td height="33"><span></span></td>
	    </tr>
         <tr>
           <td   valign="bottom"> <div align="center">(  <? echo strtoupper($a[Nama]); ?> )<br>
          <? echo date("H:i:s"); ?></div>	  
         </tr>
         <tr>
          <td height="2">	    </tr>
        </table>
      </div></td>
	 </tr>
	 </table>
	 </div></td>
    </tr>
  </table>
</div>
 <div align="left"></div></body>
</html>
<? 
}else{
header("Location:../keluar.php");
}
?>