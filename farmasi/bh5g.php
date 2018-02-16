<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11){
 $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);
 if(!$ii[id]){
 header("Location:./obat.php");
 }
?>
<html>
<head> 
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>
<body>

<div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="460" colspan="3"><div align="center" class="style2">
        SETTING OBAT KE supplier<br />
        <?
echo strtoupper($ii[NamaObat]);
?>
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><span class="style1">.</span></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" bgcolor="#FFFFFF">
        <div align="left">
          <table border="1" class="style1">
            <tr>
              <td width="18" bgcolor="#9999FF"><strong>NO</strong></td>
    <td width="205" bgcolor="#9999FF"><strong>SUPPLIER</strong></td>
    <td width="108" bgcolor="#9999FF"><strong>KEY ID</strong></td>
    <td width="101" bgcolor="#9999FF"><strong>TGL JAM</strong></td>
    </tr>
            <?
$nomer=1;
$ki_0k = mysql_query("SELECT * FROM obatsupplier WHERE IdObat='$id'");
while($vv = mysql_fetch_array($ki_0k)){
?>
            <tr >
              <td><div align="center"><? echo $nomer; ?></div></td>
    <td><div align="left"><? echo strtoupper($vv[NamaSupplier]); ?></div></td>
    <td><div align="left"><? echo $vv[KeyID]; ?></div></td>
    <td><div align="left"><? echo $vv[TglJam]; ?></div></td>
    </tr>
            <? $nomer++; } ?><tr>
              <td colspan="4" bgcolor="#9999FF">&nbsp;</td>
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

}?>
