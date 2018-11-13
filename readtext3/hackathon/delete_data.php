<?php
$conn_link=@mysqli_connect("localhost", "root", "12345", "hack")
   or die("It cannot be connected to database");

   
   
   $query_select="delete from id_info where id=".$_GET["user_id"];
   $result=mysqli_query($conn_link,$query_select) or die(mysqli_error($conn_link));
if($result)
{
	 header("Location:index.php");
}

?>