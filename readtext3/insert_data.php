<?php
 
  if($data){
    $conn_link=@mysqli_connect ("localhost", "iddbuser", "iddbpas13135", "iddb") or die("It cannot be connected to database");
    $first_name=$data["name"];
    $last_name=$data["surname"];
    $father_name=$data["fathername"];
    $birth_date=date("Y-m-d H:i:s",strtotime($data["born"]));
    $register_local=$data["place"];
    $given_date=date("Y-m-d H:i:s",strtotime($data["gived"]));
    $valid_date=date("Y-m-d H:i:s",strtotime($data["etibar"]));
    $company='1';
    $dapartment='1';
if($_POST['company']){
$company=$_POST['company'];
}
if($_POST['department']){
$dapartment=$_POST['department'];
}
    $fin_code=$data["fin"];
      print_r($data);
      if($first_name&&$last_name&&$father_name&&$birth_date&&$register_local&&$valid_date&&$company&&$dapartment){
          $insert_query="INSERT INTO id_info (first_name, last_name, father_name, birth_date, register_local, given_date, valid_date, company, dapartment, fin_code) VALUES ('$first_name', '$last_name', '$father_name', '$birth_date', '$register_local', '$given_date', '$valid_date', '$company', '$dapartment', '$fin_code')"; 
mysqli_set_charset($conn_link, "utf8");
          $result=mysqli_query($conn_link, $insert_query) or die(mysqli_error($conn_link));
           
          if ($result){
            header("Location:index.php");
          }
          

          }
        }

?>
