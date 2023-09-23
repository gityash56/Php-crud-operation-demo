<?php 
include "connection.php";

$q1="select * from student_master where id=".$_REQUEST['id'];
$res=mysqli_query($cn,$q1);
$row=mysqli_fetch_object($res);
$file="images/".$row->stud_img;
unlink($file);


$q="delete from student_master where id=".$_REQUEST['id'];
mysqli_query($cn,$q);
header("location:student_disp.php");
?>