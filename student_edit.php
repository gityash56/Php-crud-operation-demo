<?php
    include "connection.php";
	$q1="select * from student_master where id=".$_REQUEST['id'];
	$res=mysqli_query($cn,$q1);
	$row=mysqli_fetch_object($res);
     if(isset($_REQUEST['btnsubmit']))
     {
		 if($_FILES['fileimg']['name']=="")
			{
				$q="update student_master set
				name='".$_REQUEST['txtsname']."',
				email='".$_REQUEST['txtmail']."'
				where id=".$_REQUEST['id'];
			}
		else
			{
				$q="update student_master set
				name='".$_REQUEST['txtsname']."',
				email='".$_REQUEST['txtmail']."',
				image='".$_FILES['fileimg']['name']."'
				where id=".$_REQUEST['id'];
				move_uploaded_file($_FILES['fileimg']['tmp_name'],"images/".$_FILES['fileimg']['name']);
			}
	
			mysqli_query($cn,$q);
			header("location:student_disp.php");
	}
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            <table border="3" align="center">
                <tr>
                    <th colspan="5"> <h2>Update Student Details</h2></th>
                </tr>
            
				<tr>
					<td>Student Name</td>
					<td>:</td>
					<td><input type="text" name="txtsname" required value="<?php echo $row->name; ?>"></td>
				</tr>	
				<tr>
					<td>Student Email</td>
					<td>:</td>
					<td><input type="text" name="txtmail" required value="<?php echo $row->email; ?>"></td>
				</tr>	
				<tr>
					<td>Student Image</td>
					<td>:</td>
					<td><input type="file" name="fileimg" ><img src="images/<?php echo $row->image; ?>" height="50" width="50"></td>
				</tr>   
				<tr>
					<th colspan="3">
					<input type="submit" name="btnsubmit" value="Update">
					<input type="button" value="back" onclick="javascript:history.go(-1);"> </th>
				</tr>

			</table>
	</form>
</html>