<?
session_start();
 include "../konek.php";
include "../ceke.php";
$ki_00= mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$op = mysql_fetch_array($ki_00);
if(!$op[id]){
header("Location:../keluar2.php");
}else{?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3399';
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
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
-->
</style>
</head>
<body>

<div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="626" colspan="3"><div align="center" class="style1">
        <div align="left">DETAIL DATA TXN OBAT<BR />
            <?
echo "$op[RegId]";
?>
          </div>
      </div></td>
    </tr>
    <tr valign="top">
      <td colspan="3"><div align="left">
	  <table border="0" cellpadding="2" cellspacing="2" class="style3">
	  <tr>
	  <td width="31" bgcolor="#CDFEDE"><div align="center"><span class="style5">NO</span></div></td>
	  <td width="183" bgcolor="#CDFEDE"><strong>NO RESEP</strong></td>
	  <td width="183" bgcolor="#CDFEDE"><strong>NILAI</strong></td>
	  </tr>
	  <?
	  $nomer=1;
	  $kdjfkdjfdfd = mysql_query("SELECT * FROM rj_resep WHERE IdPasien='$id'");
	  while($nn =  mysql_fetch_array($kdjfkdjfdfd)){
 	  ?>
	  <tr   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   onClick="location.href='c2a_asd.php?id=<? echo $id; ?>&NoResep=<? echo $nn[NoResep]; ?>';">
	  <td><div align="center"><? echo $nomer; ?></div></td>
	  <td><div align="left"><? echo $nn[NoResep]; ?></div></td>
	  <td><div align="left">
	    <?
 	  include "../Farmasi/harga_farmasi2.php";
 
  	  ?>
	    </div></td>
	  </tr>
	 
	  <?
	  $nomer++; } ?>
	  <tr>
	    <td colspan="2" bgcolor="#CDFEDE" class="style5">TOTAL</td>
		<td bgcolor="#FFFF33"><div align="left"><? echo number_format($ta_s); ?></div></td>
	    </tr>  </table>
	  </div></td>
    </tr>
  </table>
</div>
</body>
</html>
<? }
?>