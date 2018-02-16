<?
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==98){
 $datat = mysql_query("SELECT * FROM supplier3 WHERE id='$id'");
}elseif($a[Level]==6){
 $datat = mysql_query("SELECT * FROM supplier2 WHERE id='$id'");
}else{
 $datat = mysql_query("SELECT * FROM supplier WHERE id='$id'");
}
$xs= mysql_fetch_array($datat);
if(!$xs[KodeSuplier]){
header("Location:./kompor.php");
}
   ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style3 {font-size: 12px}
.style4 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style5 {color: #990000}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #990000; }
.style7 {
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	font-style: italic;
}
.style10 {
	color: #000099;
	font-weight: bold;
	font-style: italic;
}
.style11 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000099; font-weight: bold; font-style: italic; }
.style12 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="center">
<form action="cikal_bakal.php"> 
  <div align="left">
           <table width="781" border="0" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="#FFFFFF">
            <tr bordercolor="#0000FF" bgcolor="#000099">
              <td height="41" colspan="4"><div align="center" class="style7">
                EDIT DATA SUPPLIER
                </div></td>
    </tr>
            <tr>
              <td colspan="4"><div align="left">.</div></td>
    </tr>
        <?
		if($a[Level]==11){}else{
		?>    <tr  valign="top">
              <td width="170" height="30"><div align="left" class="style2 style5">KODE  </div></td>
    <td width="4"><div align="left" class="style11">:</div></td>
    <td width="239"><div align="left" class="style2">
      <input type="text" name="KodeSuplier" maxlength="25" size="25" value="<? echo $xs[KodeSuplier]; ?>">
      
      </div></td><td width="342">&nbsp;</td>
    </tr>
	<? } ?>      <input type="hidden"  name="id" value="<? echo $xs[id];  ?>">

            <tr valign="top">
              <td><div align="left" class="style6">NAMA  </div></td>
    <td><div align="left" class="style11">:</div></td>
    <td><div align="left" class="style2">
      <input name="NamaSuplier" type="text" class="style6" value="<? echo $xs[NamaSuplier]; ?>" size="25" maxlength="120">
      </div></td>
	  <td>&nbsp;</td>
    </tr>
            <tr  valign="top">
              <td><div align="left" class="style6">ALAMAT</div></td>
    <td><div align="left" class="style11">:</div></td>
    <td><div align="left" class="style2">
      <textarea name="Alamat" cols="40" rows="3" class="style6"><? echo $xs[Alamat]; ?></textarea>
	   
      </div></td><td><div align="left" class="style12">	    ||
	   <a href="#" onClick="wCompare = window.open('c_0a1.php?id=<? echo $id; ?>', 
  'wCompare', 'width=600,height=400,left=370,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none">
	   Sub Bid Usaha
	    </a> </div></td>
    </tr>
	<?
	if($a[Level]==6){
	?>
	<tr class="style6">
	<td>SUB BID USAHA</td><td><span class="style10">:</span></td>
	<td><div align="left">
<select name="IdUsaha" id="IdUsaha"><?
$kdidk_fgfw3 = mysql_query("SELECT id,BidangUsaha FROM bidang_usaha WHERE id='$xs[Level]'");
$np = mysql_fetch_array($kdidk_fgfw3);
if($np[id]){
?>
	<option value="<? echo $np[id]; ?>"><? echo $np[BidangUsaha]; ?></option>
 <? }else{
?>
<option value="-">--Sub Bid Usaha--</option>
<?
}
$kdfkjdkf = mysql_query("SELECT id FROM bidang_usaha ");
while($bb = mysql_fetch_array($kdfkjdkf)){
?>
<option value="<? echo $bb[id]; ?>"><? 
$kdidk_fgf = mysql_query("SELECT BidangUsaha FROM bidang_usaha WHERE id='$bb[id]'");
$nb = mysql_fetch_array($kdidk_fgf);
echo $nb[BidangUsaha];
?></option>
<? } ?>
</select> 	
	</div></td>
	<td>&nbsp;</td>
	</tr>
	<?
	}
	?>
            <tr  valign="top">
              <td><div align="left" class="style6">KOTA</div></td>
    <td><div align="left" class="style11">:</div></td>
    <td><div align="left"><span class="style1"><span class="style3"><span class="style2">
      <input type="text" name="Kota" maxlength="25" size="25" value="<? echo $xs[Kota]; ?>">
      </span></span></span>
      </div></td>	<td>&nbsp;</td>

    </tr>
            <tr  valign="top">
              <td><div align="left" class="style6">CONTACT PERSON </div></td>
    <td><div align="left" class="style11">:</div></td>
    <td><div align="left" class="style2">
      <input name="CP" type="text" class="style6" value="<? echo $xs[CP]; ?>" size="20" maxlength="100">
      </div></td>	<td>&nbsp;</td>

    </tr>
            <tr  valign="top">
              <td><div align="left" class="style6">TELP</div></td>
    <td><div align="left" class="style11">:</div></td>
    <td><div align="left" class="style2">
     <?
	 if($a[Level]==6){
	 ?><input type="text" name="KodeArea" maxlength="6"  size="3" class="style6" value="<? echo $xs[KodeArea]; ?>">-<?
	 }
	 ?>
	 
	  <input name="Telp" type="text" class="style6" value="<? echo $xs[Telp]; ?>" size="20" maxlength="100">
      </div></td>	<td>&nbsp;</td>

    </tr>
	<?
	if($a[Level]==6){
	?>
	     <tr  valign="top">
              <td><div align="left" class="style6">HP</div></td>
    <td><div align="left" class="style11">:</div></td>
    <td><div align="left" class="style2">
      <input name="Hp" type="text" class="style6" value="<? echo $xs[Hp]; ?>" size="20" maxlength="100">
      </div></td>	<td>&nbsp;</td>

    </tr>
	   <tr  valign="top">
              <td><div align="left" class="style6">FAX</div></td>
    <td><div align="left" class="style11">:</div></td>
    <td><div align="left" class="style2">
        <?
	 if($a[Level]==6){
	 ?><input type="text" name="KodeArea2" maxlength="6"  size="3" class="style6" value="<? echo $xs[KodeArea2]; ?>">-<?
	 }
	 ?><input name="Fax" type="text" class="style6" value="<? echo $xs[Fax]; ?>" size="20" maxlength="100">
      </div></td>	<td>&nbsp;</td>
     </tr>
	    <tr  valign="top">
              <td><div align="left" class="style6">e-mail</div></td>
    <td><div align="left" class="style11">:</div></td>
    <td><div align="left" class="style2">
      <input name="email" type="text" class="style6" value="<? echo $xs[email]; ?>" size="40" maxlength="100">
      </div></td>	<td>&nbsp;</td>
     </tr>
	 <tr class="style6" valign="top">
	 <td>KETERANGAN</td><td>:</td><td><div align="left">
	 <textarea rows="4" cols="40" name="Keterangan" class="style6"><?
	 echo $xs[Keterangan];
	  ?></textarea>
	 </div></td>
	 </tr>
	 <? } ?>
            
            <tr  valign="top">
              <td colspan="4"><div align="left"></div></td>
    </tr>
            <tr bordercolor="#990033" bgcolor="#000099" class="style4">
              <td colspan="4">
                <div align="center">
                  <input type="submit" value="Simpan" name="sasa">
                  <?
				  $dkjfkdjfkdjfkdjkdjd = mysql_query("SELECT COUNT(id) as jj FROM obatsupplier WHERE IdSupplier='$xs[id]'");
$posk = mysql_fetch_array($dkjfkdjfkdjfkdjkdjd);
if($posk[jj]>0){
?>
 <input type="button" name="fg" value="<? echo "ada $posk[jj] sett" ?>" onClick="wCompare = window.open('u7u_099.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="background-color:#FF6666"class="style1">
 <?  }else{

  if($a[Level]==98 && $taat_selalu[sembilan]==0){
 
 }elseif($a[Level]==98 && $taat_selalu[sembilan]==1){
 ?>
 <input name="kdjdf" type="button" 
				  class="style5" 
				  onClick="wCompares2ddd_0901 = window.open('mbleduk.php?id=<? echo $xs[id]; ?>', 
  'wCompares2ddd_0901', 'width=880,height=140,left=120,Top=220,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2ddd_0901.focus();"  value="Hapus"><?
 }elseif($dik_dimas[duapuluh]==1){
				  ?><input name="kdjdf" type="button" 
				  class="style5" 
				  onClick="wCompares2ddd_0901 = window.open('mbleduk.php?id=<? echo $xs[id]; ?>', 
  'wCompares2ddd_0901', 'width=880,height=140,left=120,Top=220,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2ddd_0901.focus();"  value="Hapus">
				  <? } ?>
				  <? } ?>
                  <input type="button" name="kembali" value="Kembali" onClick="location.href='kompor.php';">
                </div></td></tr>
            <tr bordercolor="#990033" bgcolor="#000099">
              <td colspan="4" bgcolor="#66CC66"><div align="center">
                <?
/*				if($a[Level]==6){}else{
				?><input type="button" name="fg" value="Setting Obat &amp; supplier" onClick="wCompare = window.open('u123_123.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="background-color:#CCFF33" class="style1">
	<? }  */?>
                </div></td>
    </tr>
    </table>
  </div> 
</form>
</div>
</body>
</html>
