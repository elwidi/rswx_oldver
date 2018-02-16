<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
//KodeIcd=A01&NamaICD=343
$KodeIcd = $_GET["KodeIcd"];

$NamaICD = $_GET["NamaICD"];
$iin = $_GET["iin"];
$pil = $_GET["pil"];
 if($a[Level]==2){?>

<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style6 {color: #000000; font-weight: bold; }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9933';
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
  <table border="0" cellpadding="2" cellspacing="2">
   <tr bgcolor="#58BB4F"class="style1">
<td colspan="3" ><img src="../../gambar/pendaftaran.gif"></td>
</tr>
<tr>
<td colspan="3"><div align="left"><? include "../../kucrit.php"; ?>.</div></td>
</tr>
    <tr>
      <td  colspan="3" valign="top">  
        <form target="_self">
          <table border="0" class="style1" >
            <?
if($iin==3){
?>
            <tr bgcolor="#FFFFCC">
              <td width="177">KODE ICD</td>
              <td width="6">:</td>
              <td width="685"><div align="left"><input name="KodeIcd" type="text" class="style1" size="20" maxlength="20">
                <input type="hidden" name="NamaICD" value="343">
              </div></td>
    </tr>
            <?
}else{
?><tr>
              <td width="177">NAMA ICD</td>
              <td width="6">:</td>
              <td width="685"><div align="left"><input name="NamaICD" type="text" class="style1" size="20" maxlength="20">
               <input  type="radio" name="pil" value="1" > Description 
			                  <input type="radio" name="pil" value="0" checked="checked"> Terjemahan 
			   </div></td>
    </tr>
            <? } ?>
            <tr>
              <td colspan="3"><div align="left">
                <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="fgfg" type="submit" class="style1" value="Submit">
                <input   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="dffggf" type="button" class="style1" onClick="location.href='../index.php';" value="Kembali">
                <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="FGF" value="Tambah Data" class="style1" onClick="location.href='makanan_sehat_enak.php?id=100';">
                
                <?
if($iin==3){
?><input name="fdd"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" class="style1" onClick="location.href='mas_iqbal_baik.php';" value="Cari Berdasarkan Nama">
                <? 
}else{
?><input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="fdd" type="button" class="style1" onClick="location.href='mas_iqbal_baik.php?iin=3';" value="Cari Berdasarkan Kode">
                <? } ?>
              </div></td>
    </tr>
            <TR>
              <TD colspan="3"><div  align="left">TOTAL DATA : <?
$ksjdks = mysql_query("SELECT COUNT(id) AS jj FROM icdx");
$nb = mysql_fetch_array($ksjdks);
echo number_format($nb[jj]); 
?></div></TD>
    </TR>
          </table>
    </form>     </td>
    </tr>
    <tr>
      <td colspan="3" valign="top"><div align="left">
        <table border="0" cellpadding="2" cellspacing="2" class="style1">
          <tr bgcolor="#D4D0C8">
            <td width="32" bgcolor="#58BB4F"><div align="center"><span class="style6">NO</span></div></td>
    <td width="83" bgcolor="#58BB4F"><span class="style6">ICD_CODE</span></td>
    <td width="126" bgcolor="#58BB4F"><span class="style6">TERMINAL_CODE</span></td>
    <td width="348" bgcolor="#58BB4F"><span class="style6">DESCRIPTION</span></td>
    <td width="277" bgcolor="#58BB4F"><span class="style6">TERJEMAHAN</span></td>
     <td width="131" bgcolor="#58BB4F"><span class="style6">OPR</span></td>
    <td width="53" bgcolor="#58BB4F"><span class="style6">TGL</span></td>
    <td width="59" bgcolor="#58BB4F"><span class="style6">JAM</span></td>
    </tr>
          <?
$ha=1;
if($tmp>0){
$tmp=$tmp;
}else{
$tmp=300;
}
if($NamaICD=="343"){
$kakan = mysql_query("SELECT * FROM icdx WHERE ICD_CODE='$KodeIcd' ORDER BY id DESC");
}elseif($NamaICD!='' && $NamaICD!="343" && $pil=='1'){
$kakan = mysql_query("SELECT * FROM icdx WHERE DESCRIPTION LIKE '$NamaICD%'  ORDER BY id DESC");
}elseif($NamaICD!='' && $NamaICD!="343" && $pil==0){
$kakan = mysql_query("SELECT * FROM icdx WHERE TERJEMAHAN LIKE '$NamaICD%'  ORDER BY id DESC");
}else{
$kakan = mysql_query("SELECT * FROM icdx   ORDER BY id DESC LIMIT 0,27");
 }
while($aa = mysql_fetch_array($kakan)){
   $res = $ha %2;
if($res==1){
$warna ='bgcolor="#B4FAA8"';
}else{
$warna ='';
}
?> 
 <tr <? echo $warna; ?>  onClick="wCompare = window.open('y6y_i.php?id=<? echo $aa[id]; ?>', 
  'wCompare', 'width=580,height=340,left=470,Top=138, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
              
              <td><div align="center"><? echo $ha; ?></div></td>
    <td><div align="left"><? echo $aa[ICD_CODE]; ?></div></td>
    <td><div align="left"><? echo $aa[TERMINAL_CODE]; ?></div></td>
    <td><div align="left"><? echo $aa[DESCRIPTION]; ?></div></td>
    <td><div align="left"><? echo $aa[TERJEMAHAN]; ?></div></td>
     <td><div align="left"><? echo $aa[Opr]; ?></div></td>
    <td><div align="left"><? echo $aa[Tgl]; ?></div></td>
    <td><div align="left"><? echo $aa[Jam]; ?></div></td>
    </tr>
          
          <? $ha++; } ?>
          <tr>
            <td colspan="8" bgcolor="#58BB4F">&nbsp;</td>
      </tr></table>
    </div></td>
    </tr>
  </table>
</div>
</body>
</html>
<?
}else{

}
?>