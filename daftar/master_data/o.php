<?
session_start();
include "../../konek.php";
include "../../ceke.php";
 
?>
<html>
<head> 
  <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF00';
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
.style2 {font-size: 11px}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; }
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #FFFFFF; }
.style6 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #FFFFFF; font-weight: bold; }
-->
  </style>
</head>
<body   alink="#003366" vlink="#000099" link="#003399">

<div align="left">
  <table width="780" border="0" cellpadding="2" cellspacing="2"  bgcolor="#FFFFFF" class="style1"  >
    <tr>
      <td colspan="9" valign="top">
        <div align="left">
          <form target="_self">
            <table width="621" border="0" cellpadding="1" cellspacing="1" class="style3">
              <tr>
                <td width="86"><span class="style5"><span class="style3">NAMA PE</span>R</span></td>
    <td width="11">:</td>
    <td width="210"><div align="left">
      <input type="text" class="style1" name="NamaPer" maxlength="120" size=""/>
      </div></td><td width="301"><div align="left">
        <input name="dfdd" type="submit" class="style2" value="Proses">
      </div></td>
    </tr> 
            </table>
    </form>
    </div></td>
    </tr>
    <tr>
      <td width="25" bgcolor="#000066"><span class="style8">NO</span></td>
    
    <td width="179" bgcolor="#000066">
      <span class="style8">
         NAMA PERUSAHAAN  </span></td>
    <td width="80"  bgcolor="#000066"><span class="style8">TELP</span></td>
    <td  bgcolor="#000066"><span class="style6">Cp</span></td>
    <td width="277" bgcolor="#000066"><span class="style8">ALAMAT</span></td>
    <td width="84" bgcolor="#000066"><span class="style8">E-MAIL</span></td>
    </tr>
    <?
$no=1;
if($ak=='bhp'){
$ksesa = mysql_query("SELECT * FROM dataperusahaan ORDER BY NamaPer asc ");
}elseif($NamaPer!=''){
$ksesa = mysql_query("SELECT * FROM dataperusahaan WHERE NamaPer LIKE '$NamaPer%' ORDER BY NamaPer asc");
}else{
$ksesa = mysql_query("SELECT * FROM dataperusahaan ORDER BY NamaPer asc");
}
while($ee = mysql_fetch_array($ksesa)){
$pc = $no%2;
if($pc==1){
$warna='';
}else{
$warna=' bgcolor="#FFCC66"';
}
 ?>     
    <tr <? echo $warna; ?> onClick="location.href='xx2.php?id=<? echo $ee[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style2" valign="top">
     <td><div align="center"><? echo $no; ?>  
      </div></td>
       
    <td><div align="left"><?
echo strtoupper($ee[NamaPer]); 
?></div></td>
    <td><div align="left">
      <?
	  echo $ee[Telp];
	  ?>
      </div></td>
    <td width="95"><div align="left"><?
echo strtoupper($ee[Contact]); 
?></div></td>
    <td><div align="left"><? echo $ee[Alamat]; ?></div></td>
    <td><div align="left"><? echo $ee[email]; ?></div></td>
    </tr> 
    <?
$no++; }
?><tr>
      <td height="18" colspan="6" bgcolor="#000066">&nbsp;</td>
      </tr>
  </table>
</div>
</body>
</html>
 