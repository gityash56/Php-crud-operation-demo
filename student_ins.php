<?php
    include "connection.php";

     if(isset($_REQUEST['btnsubmit']))
     {
          date_default_timezone_set('Asia/Kolkata'); 
          $file=$_FILES['fileimg']['name'];
          $ext=@end(explode(".",$file)); 
          $dt=date("Y m d h i s A");
          echo $f="Actor ".$dt.".".$ext; 

			$q="insert into student_master set
			name='".$_REQUEST['txtsname']."',
			email='".$_REQUEST['txtmail']."', 
			image='".$f."' 
			";
		 mysqli_query($cn,$q);       
         move_uploaded_file($_FILES['fileimg']['tmp_name'],"images/".$f);
         header("location:student_disp.php");
     }
?>
<html>
    <head>

    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
        Student Name : <input type="text" name="txtsname" required > 
        Email : <input type="email" name="txtmail" required >    
        image : <input type="file" name="fileimg" accept="image/*" required>
        <input type="submit" name="btnsubmit">
        <input type="reset" >
        <input type="button" value="back">
        <!-- <input type="button" onclick="javascript:history.go(-1);" value="back"> -->
        </form>
    </body>
</html>