<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
 //  header('Refresh: 10');

$iiiiid = mysql_query("SELECT id,Min,NamaObat,StokAwal FROM dataobat WHERE id='$IdObat'");
$c= mysql_fetch_array($iiiiid);
//
$sa=2;
include "huting.php";
 echo "if($Stok<=$c[Min]){"; if($Stok<=$c[Min]){
$ads=2;
}else{
$ads='';
}
echo "jj $ads";
?>
<html>
<head> <script type="text/javascript" language="JavaScript"><!-- 
function toCompare2() { 
    wComparea2wws2 = window.open("x1q.php?fa=<? echo $id; ?>&IdObat=<? echo $IdObat; ?>", "wComparea2wws2", "width=680,height=140,left=240,Top=230,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wComparea2wws2.focus(); 
}; 

 //--></script> </head>
<body <? if($ads==2){ ?> onLoad="toCompare2()"<? }?>>
</body>
</html>
<?
 ?>