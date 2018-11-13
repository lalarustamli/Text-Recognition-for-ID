<? 
header('Content-type: text/html; charset=utf-8');
?><!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hackathon</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="main">
    <div class="container">
        <div class="video_area">
            <form action="processit.php" method="post" id="data" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select name="sened" class="form-control">
                                                <option>Sənəd növü</option>
                                                <option value="shexsiyyet" selected="selected">Şəxsiyyət vəsiqəsi</option>
                                                <option value="yenipass">Yeni şəxsiyyət vəsiqəsi</option>
                                                <option value="beynel">Beynəlxalq passport</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" class="btn open yellow_btn" type="button">Kameranı aç</button>
                                    </div>
                                </div>
                                <p class="info">Ön hissəni çəkin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="camera_area">
                            <div class="camera">
                                <img src="img/id_cardd.png" class="img-responsive">
                                <div class="top"></div>
                                <div class="bottom"></div>
                            </div>
                            <div class="video"></div>
                        </div>
                    </div>
                </div>
                <div class="row mbottom">
                    <div class="col-md-12 col-sm-12">
                        <div id="results"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 col-sm-4">Qonağın şirkətinin adı:</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" name="company">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 col-sm-4">Gəldiyi muəssisədə departamentin adı:</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" name="department">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn green_btn" data-toggle="modal" data-target="#addModal">Əlavə et</button>
                </div>
            </form>
        </div>

        <div class="table_area">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Ata adı</th>
                        <th>Doğum tarixi</th>
                        <th>FİN №</th>
                        <th>Qeydiyyat yeri</th>
                        <th>Verilmə tarixi</th>
                        <th>Etibarlılıq tarixi</th>
                        <th>Redaktə</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
$conn_link=@mysqli_connect ("localhost", "iddbuser", "iddbpas13135", "iddb") or die("It cannot be connected to database");

mysqli_set_charset($conn_link, "utf8");
$insert_query="SELECT * FROM id_info ORDER BY id DESC";
$result=mysqli_query($conn_link, $insert_query) or die(mysqli_error($conn_link));
          
	 while($row = mysqli_fetch_assoc($result))
    {
 
       print '<tr>
                        <td>'.$row['first_name'].'</td>
                        <td>'.$row['last_name'].'</td>
                        <td>'.$row['father_name'].'</td>
                        <td>'.$row['birth_date'].'</td>
                        <td>'.$row['fin_code'].'</td>
                        <td>'.$row['register_local'].'</td>
                        <td>'.$row['given_date'].'</td>
                        <td>'.$row['valid_date'].'</td>
                        <td><a href="#" class="edit btn btn-xs" data-toggle="modal" data-id="'.$row['id'].'" data-target="#editModal"><span class="ti ti-pencil"></span></a><a href="#" class="delete btn btn-xs"><span class="ti ti-close"></span></a></td>
                    </tr>';
    }

?>
                    
                   
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="editModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Redaktə et</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn green_btn" id="subform" >Yadda saxla</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/webcam.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
