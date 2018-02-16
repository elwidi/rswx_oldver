<?
include "../konek.php";
include "../salaman.php";
include "../rake.php";
include "../alamat.php";
$l_00l = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
$b= mysql_fetch_array($l_00l);
if(!$b[id]){
header("Location:../keluar2.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pembayaran Apotik</title>
<style type="text/css">
body { font-family:"Trebuchet MS"; font-size:12px; }
.heading { font-size:14px;padding:5px;border-bottom:1px solid #000000; }
.style11 {font-family: "Times New Roman", Times, serif; font-size: 14px; font-weight: bold; }
.style3223 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px; color:#999999
}
</style>
<script type="text/javascript">
window.onload = function(){
	window.print();
}
</script> 
</head>

<body>
	<table width="500">
	<tr>

		<td width="95"><img  src="../gb/gb.png"  width="68" height="53" /></td>
		<td width="393"><span  class="style11">
		  <?
	echo strtoupper($fkd[Nama]); 
	?>
		</span><span class="style3223"><br />
        <? echo strtoupper($fkd[Jalan]); ?><br />
Telp. <? echo $fkd[Telp]; ?>.<br />
FAX : <? echo $fkd[Fax]; ?> </span></td>
	</tr>
</table>	<div align="center">

		<div class="heading"><strong>KWITANSI</strong></div>
	</div>
	<br />
	<table width="100%" cellspacing="1" cellpadding="5">
	  <tr>
		<td width="20%" valign="top"><strong>No. Kwitansi </strong></td>
		<td width="1%" valign="top"><strong>:</strong></td>

		<td width="79%" valign="top"><? echo $b[id];?></td>
	  </tr>
	  <tr>
		<td valign="top"><strong>Sudah Terima dari</strong></td>
		<td valign="top"><strong>:</strong></td>
		<td valign="top"><? echo strtoupper($b[Pembayar]); ?> </td>
	  </tr>

	  <tr>
		<td valign="top"><strong>Banyaknya Uang </strong></td>
		<td valign="top"><strong>:</strong></td>
		<td valign="top">
		<?
		include "../terbilang.php";
		$kalimat = terbilang($b[Jam]);
		echo strtoupper($kalimat);
		?></td>
	  </tr>
	  <tr>

	    <td valign="top"><strong>PRO</strong></td>
	    <td valign="top">:</td>
	    <td valign="top"><? echo $b[Pembayar]; ?></td>
      </tr>
	  <tr>
		<td valign="top"><strong>Untuk Pembayaran </strong></td>
		<td valign="top"><strong>:</strong></td>

		<td valign="top">Bukti Pembayaran Transaksi Jaminan Rm: <? echo $b[NoPasien]; ?> An : <? echo ucfirst(strtolower($b[NamaPasien])); ?></td>
	  </tr>
	  <tr>
		<td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td valign="top">
		<span style="border:1px solid #000000;padding:4px;font-weight:bold;">
		&nbsp;&nbsp;&nbsp;Rp<? echo number_format($b[Jam]); ?>&nbsp;&nbsp;&nbsp;		</span>		</td>

	  </tr>
	  <tr>
		<td colspan="3">
		<br />
		<table width="100%">
			<tr  valign="bottom">
			  <td width="50%" align="center">
					&nbsp;
				    (<? echo strtoupper($b[Pembayar]); ?>)<br />
		      <br /></td>
				<td width="50%" align="right">
					Bekasi, <? echo date("d.m.Y"); ?><br><?
					  ?>					<br /><br /><br /><br/><br/>
					( <? echo strtoupper($a[Nama]); ?> )<br>
					<?
					 
					?>
				</td>
			</tr>
		</table>

	  </tr>
	</table>		
</body>
</html>
