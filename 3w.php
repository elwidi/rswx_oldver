<?php 
session_start();
include "konek.php";
include "ceke.php";
 if($a[Level]==1){
header("Location:./admin/index.php");
 }elseif($a[Level]==2){
 header("Location:./daftar/index.php");
 }elseif($a[Level]==3){
 header("Location:./kasir/index.php");
 }elseif($a[Level]==4){
 header("Location:./farmasi/index.php");
 }elseif($a[Level]==11){
 header("Location:./lg/index.php");
 }elseif($a[Level]==12){
 header("Location:./lab/index.php");
 }elseif($a[Level]==16){
 header("Location:./radiologi/index.php");
 }else{
 header("Location:./index.php");
}
  ?>