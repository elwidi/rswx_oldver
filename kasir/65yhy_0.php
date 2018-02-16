<?
session_start();
include "../konek.php";
include "../ceke.php";
  $jdkj = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
 $hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
 header("Location:./index.php");
}
if($pa==3){
$ceke_S = mysql_query("SELECT * FROM txnrad WHERE  id='$id'");
}else{
$ceke_S = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$hh[RegId]'");
}
$ii = mysql_fetch_array($ceke_S);
if( $a[Level]==3){
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
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>
<body bgcolor="#FFCCCC">

<div align="left">
 
<form action="45gg.php">
 <table width="328" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="367"  colspan="3" bgcolor="#666666"><div align="center" class="style2">
        UPDATE DATA KWITANSI<br />
        <?
echo $hh[RegId];
?>
<input type="hidden" name="id" value="<? echo $id; ?>">
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><span class="style1">.</span></td>
    </tr>
    <tr>
      <td colspan="3" valign="top">
        <div align="left">
          <table width="320" border="0" cellpadding="2" cellspacing="2" class="style1">
            <tr>
              <td width="137">NO KWT</td>
    <td width="7">:</td>
    <td width="357"><div align="left"><? echo $hh[id]; ?></div></td>
    </tr>
            <tr>
              <td>PEMBAYAR </td>
      <td>:</td>
      <td><div align="left">
	  <input name="Pembayar" type="text" class="style1" value="<? echo "$hh[Pembayar]"; ?>" size="30" maxlength="100">
	  </div></td>
    </tr>
	<tr>
	<td>TUNAI</td><td>:</td><td><div align="left">
	<input name="Tunai" type="text" class="style1" value="<? echo $hh[Tunai]; ?>" size="12" maxlength="12">
	</div></td> 
	</tr>
	<tr>
	<td>Kk</td><td>:</td><td><div align="left">
	<input name="Kk" type="text" class="style1" value="<? echo $hh[Kk]; ?>" size="12" maxlength="12">
	</div></td> 
	</tr>
	<tr>
	<td>Db</td><td>:</td><td><div align="left">
	<input name="Db" type="text" class="style1" value="<? echo $hh[Db]; ?>" size="12" maxlength="12">
	</div></td> 
	</tr>
	<tr>
	<td>Jam</td><td>:</td><td><div align="left">
	<input name="JamS" type="text" class="style1" id="JamS" value="<? echo $hh[Jam]; ?>" size="12" maxlength="12">
	</div></td> 
	</tr>
            <tr>
              <td height="21">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#666666"><div align="left">
			  <input name="dfd"  type="submit" class="style1" value="Update">
			  <input name="ffgfg" type="button" class="style1" onClick="window.close()" value="Selesai">
			  </div></td>
            </tr>
          </table>
    </div>    </td>
    </tr>
  </table>
  </form>
</div>
</body>
</html>

<? 
}else{

}?>
