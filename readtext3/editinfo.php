<!DOCTYPE html>
<head></head>
<body>

<?php
print_r($_POST);
	$conn_link=@mysqli_connect ("localhost", "iddbuser", "iddbpas13135", "iddb") or die("It cannot be connected to database");
mysqli_set_charset($conn_link, "utf8");
		if($_GET["id"] && !empty($_POST)){
			$query_select="UPDATE id_info
			SET  
			first_name = '$_POST[Ad]',
			last_name = '$_POST[Soyad]',
			father_name = '$_POST[Ata_adı]',
			birth_date = '$_POST[Doğum_tarixi]',
			register_local = '$_POST[Qeydiyyat_yeri]',
			given_date = '$_POST[Verilmə_tarixi]',
            valid_date = '$_POST[Etibarlılıq_tarixi]',
             
            fin_code = '$_POST[FİN_№]'
			WHERE id=".$_GET['id'];
	$result=mysqli_query($conn_link,$query_select) or die(mysqli_error($conn_link));
if($result){
	echo "<script>location='index.php'</script>";
}

}
else{

	$query_select="select * from id_info where id=".$_GET["user_id"];
	$result=mysqli_query($conn_link,$query_select) or die(mysqli_error($conn_link));

	if($result){
   		$myarray=mysqli_fetch_assoc($result);
    	echo "

			<form action='update_data.php' method='POST'>
            <label>Ad:</label><input type='text' name='id' value='".$myarray["id"]."'> <br><br>
			<label>Ad:</label><input type='text' name='first_name' value='".$myarray["first_name"]."'> <br><br>
			<label>Soyad:</label><input type='text' name='last_name' value='".$myarray["last_name"]."'> <br><br>
			<label>Ata adı:     </label><input type='text' name='father_name' value='".$myarray["father_name"]."'><br><br>
			<label>Doğum tarixi:     </label><input type='text' name='birth_date' value='".$myarray["birth_date"]."'><br><br>
			<label>Qeydiyyatda olduğu ünvan:     </label><input type='text' name='register_local' value='".$myarray["register_local"]."'><br><br>
			<label>Verilme tarixi:     </label><input type='text' name='given_date' value='".$myarray["given_date"]."'><br><br>
			<label>Etibarlı olduğu tarix:     </label><input type='text' name='valid_date' value='".$myarray["valid_date"]."'><br><br>
            <label>Company:     </label><input type='text' name='company' value='".$myarray["company"]."'><br><br>
            <label>Department:     </label><input type='text' name='dapartment' value='".$myarray["dapartment"]."'><br><br>
            <label>Fin kod:     </label><input type='text' name='fin_code' value='".$myarray["fin_code"]."'><br><br>
    			<input type='submit' name='submit' value='update'>
			</form>";
   }
}

?>

</body>
</html>
