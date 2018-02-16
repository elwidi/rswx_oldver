<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2  || $a[Level]==77){
//NoPasien=&NamaPasien=ardi&kadal=3&bas=8&Alamat=&NamaBapak=&Telp=
$NoPasien = $_GET["NoPasien"];
$NamaPasien = $_GET["NamaPasien"];
$kadal = $_GET["kadal"];
$bas = $_GET["bas"];
$Alamat = $_GET["Alamat"];
$NamaBapak = $_GET["NamaBapak"];
$Telp = $_GET["Telp"];
$id = $_GET["id"];
$Tgl=$_GET["Tgl"];
$Bln  = $_GET["Bln"];
$Thn= $_GET["Thn"];
$ikikak = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$pp = mysql_fetch_array($ikikak);
 $pode = explode("-",$pp[tgllhr]);
if($a[User2]=='admin'){
$udd_00 = mysql_query("UPDATE konco SET Level=1 WHERE id='$a[id]' AND User='admin'");
}
 
 ?><html>
<head>
<title>pendaftaran</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">function mmLoadMenus() {
  if (window.mm_menu_1014083330_0) return;
                        window.mm_menu_1014083330_0 = new Menu("root",146,23,"Arial, Helvetica, sans-serif",15,"#FFFFFF","#000099","#99CC66","#CCFF99","left","middle",3,0,150,-5,7,true,false,true,5,false,false);
  mm_menu_1014083330_0.addMenuItem("Daftar baru","location='index.php?kadal=6'");
  mm_menu_1014083330_0.addMenuItem("Rawat jalan","location='ed_d.php'");
  mm_menu_1014083330_0.addMenuItem("Rawat inap","location='fito_sayangku.php'");
  mm_menu_1014083330_0.addMenuItem("Booking pasien","location='x09_8.php'");
  mm_menu_1014083330_0.addMenuItem("Pasien batal","location='xw.php'");
   mm_menu_1014083330_0.hideOnMouseOut=true;
   mm_menu_1014083330_0.bgColor='#666666';
   mm_menu_1014083330_0.menuBorder=1;
   mm_menu_1014083330_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1014083330_0.menuBorderBgColor='#006699';
window.mm_menu_1014084116_0 = new Menu("root",146,23,"Arial, Helvetica, sans-serif",15,"#FFFFFF","#000099","#99CC66","#CCFF99","left","middle",3,0,150,-5,7,true,false,true,5,false,false);
  mm_menu_1014084116_0.addMenuItem("Data&nbsp;pasien","location='index.php?NoPasien=&NamaPasien=a&kadal=3&bas=8'");
  mm_menu_1014084116_0.addMenuItem("Data&nbsp;dokter","location='master_data/bg_m.php'");
  mm_menu_1014084116_0.addMenuItem("Data&nbsp;rujukan","location='master_data/3zsx.php'");
  mm_menu_1014084116_0.addMenuItem("Data&nbsp;ruangan","location='master_data/bisa_saja_ya.php'");
  mm_menu_1014084116_0.addMenuItem("Data&nbsp;ICD","location='master_data/mas_iqbal_baik.php'");
  mm_menu_1014084116_0.addMenuItem("Data&nbsp;penjamin","location='master_data/xx2.php'");
  mm_menu_1014084116_0.addMenuItem("Alasan&nbsp;pasien&nbsp;batal","location='master_data/2wv.php'");
   mm_menu_1014084116_0.hideOnMouseOut=true;
   mm_menu_1014084116_0.bgColor='#666666';
   mm_menu_1014084116_0.menuBorder=1;
   mm_menu_1014084116_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1014084116_0.menuBorderBgColor='#006699';

  window.mm_menu_1014084536_0 = new Menu("root",146,23,"Arial, Helvetica, sans-serif",15,"#FFFFFF","#000099","#99CC66","#CCFF99","left","middle",3,0,150,-5,7,true,false,true,5,false,false);
  mm_menu_1014084536_0.addMenuItem("RL1");
  mm_menu_1014084536_0.addMenuItem("RL2");
  mm_menu_1014084536_0.addMenuItem("RL3");
  mm_menu_1014084536_0.addMenuItem("RL4");
  mm_menu_1014084536_0.addMenuItem("RL5");
   mm_menu_1014084536_0.hideOnMouseOut=true;
   mm_menu_1014084536_0.bgColor='#666666';
   mm_menu_1014084536_0.menuBorder=1;
   mm_menu_1014084536_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1014084536_0.menuBorderBgColor='#006699';

    window.mm_menu_1014084652_0 = new Menu("root",145,23,"Arial, Helvetica, sans-serif",15,"#FFFFFF","#000099","#99CC66","#CCFF99","left","middle",3,0,150,-5,7,true,false,true,5,false,false);
  mm_menu_1014084652_0.addMenuItem("Farmasi&nbsp;gudang");
  mm_menu_1014084652_0.addMenuItem("Apotek");
  mm_menu_1014084652_0.addMenuItem("Logistik&nbsp;umum");
   mm_menu_1014084652_0.hideOnMouseOut=true;
   mm_menu_1014084652_0.bgColor='#666666';
   mm_menu_1014084652_0.menuBorder=1;
   mm_menu_1014084652_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1014084652_0.menuBorderBgColor='#006699';

mm_menu_1014084652_0.writeMenus();
} // mmLoadMenus()
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script language="JavaScript" src="mm_menu.js"></script>
</head>
<body background="../gambar/bag.jpg" bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('../gb/fo_ov_02.gif','../gb/fo_ov_03.gif','../gb/fo_ov_04.gif','../gb/fo_ov_05.gif','../gb/fo_ov_06.gif')">
<script language="JavaScript1.2">mmLoadMenus();</script>
<!-- ImageReady Slices (master.psd) -->
<table id="Table_01" width=1021 height="100%" border=0 cellpadding=0 cellspacing=0 align="center" bgcolor="#FFFFFF">
  <tr background="../gb/fo_01.gif"> 
    <td height="109" colspan="7">&nbsp; </td>
  </tr>
  <tr> 
    <td> <a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage('Image15','','../gb/fo_ov_02.gif',1);MM_showMenu(window.mm_menu_1014083330_0,0,32,null,'Image15')"><img src="../gb/fo_02.gif" name="Image15" width="146" height="31" border="0"></a></td>
    <td> <a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage('Image16','','../gb/fo_ov_03.gif',1);MM_showMenu(window.mm_menu_1014084116_0,0,32,null,'Image16')"><img src="../gb/fo_03.gif" name="Image16" width="146" height="31" border="0"></a></td>
    <td> <a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage('Image10','','../gb/fo_ov_04.gif',1);MM_showMenu(window.mm_menu_1014084536_0,0,32,null,'Image10')"><img src="../gb/fo_04.gif" name="Image10" width="146" height="31" border="0"></a></td>
    <td> <a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage('Image11','','../gb/fo_ov_05.gif',1);MM_showMenu(window.mm_menu_1014084652_0,0,32,null,'Image11')"><img src="../gb/fo_05.gif" name="Image11" width="145" height="31" border="0"></a></td>
    <td> <a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image12','','../gb/fo_ov_06.gif',1)"><img src="../gb/fo_06.gif" name="Image12" width="146" height="31" border="0"></a></td>
    <td> <a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image13','','../gb/fo_ov_07.gif',1)"><img src="../gb/fo_07.gif" name="Image13" width="146" height="31" border="0"></a></td>
    <td> <img src="../gb/fo_08.gif" width="146" height="31" alt=""></td>
  </tr>
  <tr> 
    <td colspan="7"> <img src="../gb/fo_09.gif" width="1021" height="660" alt=""></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>
<? } ?>