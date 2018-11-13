<!DOCTYPE html>
<html lang="az">
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
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <form action="processit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <select name="sened" class="form-control">
                                                <option>Sənəd növü</option>
                                                <option value="shexsiyyet" selected="selected">Şəxsiyyət vəsiqəsi</option>
                                                <option value="newpass">Yeni şəxsiyyət vəsiqəsi</option>
                                                <option value="beynel">Beynəlxalq passport</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button class="btn open yellow_btn">Kameranı aç</button>
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
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <form action="..." method="post">
                        <div id="results"></div>
                    </form>
                </div>
            </div>
        </div>

        <div class="table_area">
            <form action="..." method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 col-sm-4">Qonağın şirkətinin adı:</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" name="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 col-sm-4">Gəldiyi muəssisədə departamentin adı:</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" name="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn green_btn" data-toggle="modal" data-target="#addModal">Əlavə et</button>
                </div>
            </form>
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
                    <tr>
                        <td>Serxan</td>
                        <td>Recebov</td>
                        <td>Selver</td>
                        <td>02.03.1996</td>
                        <td>00000000</td>
                        <td>Baki</td>
                        <td>29.10.2012</td>
                        <td>02.03.2021</td>
                        <td><a href="#" class="edit btn btn-xs" data-toggle="modal" data-target="#editModal"><span class="ti ti-pencil"></span></a><a href="#" class="delete btn btn-xs"><span class="ti ti-close"></span></a></td>
                    </tr>
                    <tr>
                        <td>Nergiz</td>
                        <td>Mehtizade</td>
                        <td>Mehman</td>
                        <td>02.03.1996</td>
                        <td>00000000</td>
                        <td>Baki</td>
                        <td>29.10.2012</td>
                        <td>02.03.2021</td>
                        <td><a href="#" class="edit btn btn-xs" data-toggle="modal" data-target="#editModal"><span class="ti ti-pencil"></span></a><a href="#" class="delete btn btn-xs"><span class="ti ti-close"></span></a></td>
                    </tr>
                    <tr>
                        <td>Gulnar</td>
                        <td>Necefzade</td>
                        <td>sdsdads</td>
                        <td>02.03.1996</td>
                        <td>00000000</td>
                        <td>Baki</td>
                        <td>29.10.2012</td>
                        <td>02.03.2021</td>
                        <td><a href="#" class="edit btn btn-xs" data-toggle="modal" data-target="#editModal"><span class="ti ti-pencil"></span></a><a href="#" class="delete btn btn-xs"><span class="ti ti-close"></span></a></td>
                    </tr>
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
                        <button type="button" class="btn green_btn">Yadda saxla</button>
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
