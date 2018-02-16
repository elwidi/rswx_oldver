<?php 
session_start();
include "../konek.php";
include "../ceke.php";

?>
<html>
<head>
<script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9966';
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
	font-size: 16px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
-->
</style>
</head>
<body>
<div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="734" colspan="3"><div align="left"> <span class="style1">LIST DATA PERMINTAAN UNIT  <?
	  if($as==3){ ?>
	  <font color="#990000"><b>SUDAH DITERIMA</b></font> </span>
	  <? }
	  ?><br>
              <table border="0" cellpadding="2" cellspacing="2" class="style2">
                <tr>
                  <td width="104">USER LOG</td>
                  <td width="8">:</td>
                  <td width="517"><div align="left">
                    <?
echo $a[Nama];
?>
                  </div></td>
                </tr>
                <tr>
                  <td>BAGIAN</td>
                  <td>:</td>
                  <td><div align="left">FARMASI</div></td>
                </tr>
                <tr valign="top">
                  <td colspan="3"><div align="left">
				  <form target="_self">
				  <table class="style2" border="0" cellpadding="1" cellspacing="1">
				  <tr>
				  <td width="62">NO TXN </td>
				  <td width="4">:</td>
				  <td width="460"><div align="left">
				  MT-<input type="text" name="NoTx" maxlength="10" size="10" class="style2">
				   <input type="submit" value="Sort" name="fgfgf" class="style2">
				   <input type="button" name="fgfgf" value="Kembali" onClick="location.href='index.php';" class="style2">
				   </div></td>
				  </tr>
				  </table>
				  </form>
				  </div></td>
                </tr>
              </table>
      </div></td>
    </tr>
    <tr valign="top">
      <td colspan="3"><div align="left">
	  <table width="682" class="style2" border="1">
	  <tr>
	  <td width="24" bgcolor="#CCFFCC"><strong>NO</strong></td>
	  <td width="72" bgcolor="#CCFFCC"><strong>TGL</strong></td>
	  <td width="84" bgcolor="#CCFFCC"><strong>NOMER</strong></td>
	  <td width="38" bgcolor="#CCFFCC"><strong>ITEM</strong></td>
	  <td width="430" bgcolor="#CCFFCC"><strong>UNIT</strong></td>
	  </tr>
	  <?
	  $nomer=1;
//echo "$a[KodeBagian]";
	  if($as==3 || $a[KodeBagian]==33){
	  $kdjfldkfld  = mysql_query("SELECT * FROM oder_1 WHERE NoTxn Not like 'F%'  ORDER BY id desc LIMIT 0,200");
	  }elseif($NoTx>0 && $a[KodeBagian]==33){
	  $kdjfldkfld  = mysql_query("SELECT * FROM oder_1 WHERE NoTxn Not like 'F%' AND Stat>=1 and Stat<=2 and id='$NoTx'");
	   }elseif($NoTx>0 && $a[KodeBagian]!=33){
	  $kdjfldkfld  = mysql_query("SELECT * FROM oder_1 WHERE   Stat>=1 and Stat<=2 and id='$NoTx'");
  	  }else{
	  $kdjfldkfld  = mysql_query("SELECT * FROM oder_1 WHERE  Stat=1 ORDER BY id desc LIMIT 0,200");
	  }
	  while($nb = mysql_fetch_array($kdjfldkfld)){
	  $pc = $nomer%2;
	  if($pc==1){
	  $warna='';
	  }else{
	 $warna='bgcolor="#FFFF99"';
	  }
	 $pcp = explode(".",$nb[NoTxn]);
if($pcp[0]=='F'){
?><tr bgcolor="#CCCCCC"><?
}else{
	  ?>
  	  <tr  onClick="location.href='x09d.php?id=<? echo $nb[id]; ?>';" <? echo $warna; ?>   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
	 <? } ?> <td><div align="center"><? echo $nomer; ?></div></td>
	  <td><div align="left"><? echo "$nb[Tgl]-$nb[Bln]-$nb[Thn]"; ?></div></td>
	  <td><div align="left"><? echo "MT-$nb[id]"; ?></div></td>
	  <td><div align="center"><?
	  $kdjfkdfd_okfldf  = mysql_query("SELECT COUNT(id) AS hh FROM oder_1detil WHERE IdTxn='$nb[id]'");
	  $yb = mysql_fetch_array($kdjfkdfd_okfldf);
	  echo $yb[hh];
	  ?></div></td>
<td><div align="left"><? echo $nb[NamaUnit];?></div></td>
	  </tr>
 	  <?
	  $nomer++;  } ?>
	    <tr>
	    <td colspan="5" bgcolor="#CCFFCC">&nbsp;</td>
	    </tr></table>
	  </div></td>
    </tr>
  </table>
</div>
</body>
</html>