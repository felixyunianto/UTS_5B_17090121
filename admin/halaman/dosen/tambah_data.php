<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Morris Chart-->
    <link rel="stylesheet" href="../assets/libs/morris-js/morris.css" />

    <!-- App css -->
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">
    
    <form action="halaman/dosen/proses_tambah.php" method="post">
        <div class="form-group row">
            <div clas="col-sm2 col-form-label"><label class="col-sm2 col-form-label">NIDN</label></div>
            
            <div class="col-sm-12">
            <input type="text" class="form-control" name="nidn" placeholder="Isikan nidn" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm2 col-form-label">Nama</label>
            <div class="col-sm-12">
            <input type="text" class="form-control" name="nama" placeholder="Isikan Nama" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm2 col-form-label">Mata Kuliah</label>
            <div class="col-sm-12">
            <input type="text" class="form-control" name="mata_kuliah" placeholder="Isikan Mata Kuliah" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm2 col-form-label">Alamat</label>
            <div class="col-sm-12">
            <input type="email" class="form-control" name="alamat" placeholder="Isikan Email" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
            <input type="submit" class="btbn btn-primary btn-xs" value="SIMPAN">
            </div>
        </div>


    </form>

</div>


</body>
</html>