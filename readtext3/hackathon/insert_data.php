<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conn_link=@mysqli_connect ("localhost", "root", "12345", "hack") or die("It cannot be connected to database");
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $father_name=$_POST["father_name"];
    $birth_date=$_POST["birth_date"];
    $register_local=$_POST["register_local"];
    $given_date=$_POST["given_date"];
    $valid_date=$_POST["valid_date"];
    $company=$_POST["company"];
    $dapartment=$_POST["dapartment"];
    $fin_code=$_POST["fin_code"];
      
      if($first_name&&$last_name&&$father_name&&$birth_date&&$register_local&&$given_date&&$valid_date&&$company&&$dapartment&&$fin_code){
          $insert_query="INSERT INTO id_info (first_name, last_name, father_name, birth_date, register_local, given_date, valid_date, company, dapartment, fin_code) VALUES ('$first_name', '$last_name', '$father_name', '$birth_date', '$register_local', '$given_date', '$valid_date', '$company', '$dapartment', '$fin_code')";
          $result=mysqli_query($conn_link, $insert_query) or die(mysqli_error($conn_link));
          
          if ($result){
            header("Location:index.php");
          }
          else{
            header("Location:insert_data.php");
          }
          }
        }

?>
 
  
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>  
  <form action="insert_data.php" method="POST">
    <table>
      <tr><td>Ad</td><td><input type="text" name='first_name' value=""/><br></td>
      <tr><td>Soyad</td><td><input type="text" name='last_name' value=""/><br></td>
      <tr><td>Ata adi</td><td><input type="text" name='father_name' value=""/><br></td>
      <tr><td>Dogum tarixi</td><td><input type="date" name='birth_date' value=""/><br></td>
      <tr><td>Yer</td><td><input type="text" name='register_local' value=""/><br></td>
      <tr><td>Verilme</td><td><input type="date" name='given_date' value=""/><br></td>
      <tr><td>Etibarli</td><td><input type="date" name='valid_date' value=""/><br></td>
      <tr><td>Company</td><td><input type="text" name='company' value=""/><br></td>
      <tr><td>Department</td><td><input type="text" name='dapartment' value=""/><br></td>
      <tr><td>Fin</td><td><input type="text" name='fin_code' value=""/><br></td>
      <tr><td></td><td><button type="submit" name="register">Daxil et</button></td>
    </table>
  </form>
</body>
</html>
