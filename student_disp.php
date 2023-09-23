<?php
    include "connection.php";

    $q="select * from student_master";
	if(isset($_REQUEST['btnsubmit']))
	{
		$q="select * from student_master where name like '%".$_REQUEST['txtsearch']."%'";
	}

    $res=mysqli_query($cn,$q)
?>
<html>
    <body>
        <form method="post">
            <table border="3" align="center">
                <tr>
                    <th colspan="5"> <h2>Student Details</h2></th>
                </tr>
            <tr>
                <td colspan="5" align="center">
                        Search : <input type="text" name="txtsearch">
                        <input type="submit" value="Go" name="btnsubmit">
                        <input type="submit" value="Show All">
                    	<a href="student_ins.php">Insert Student Details</a>
                </td>
            </tr>
            <tr>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php 
while($row=mysqli_fetch_object($res))
{
	?>
	<tr>
	<td><?php echo ucfirst($row->name); ?></td>
	<td><?php echo $row->email; ?></td>
	<td><img src="images/<?php echo $row->image; ?>" height="50" width="50"></td>
	<td><a href="student_edit.php?id=<?php echo $row->id; ?>">Edit</a></td>
	<td><a href="student_delete.php?id=<?php echo $row->id; ?>" onclick="return confirm('Are You Sure?')">Delete</a></td>
	<!-- <td><a href="student_edit.php?id= ">Edit</a></td>
	<td><a href="student_delete.php?id="onclick="return confirm('Are You Sure?')">Delete</a></td> -->
   <!--  
    <td>Delete</td> -->
</tr>	
	<?php
}
?>
            </table>
        </form>
    </body>
</html>