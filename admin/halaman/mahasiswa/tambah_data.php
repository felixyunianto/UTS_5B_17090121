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
    
    <form action="halaman/mahasiswa/proses_tambah.php" method="post">
        <div class="form-group row">
            <div clas="col-sm2 col-form-label"><label class="col-sm2 col-form-label">NIM</label></div>
            
            <div class="col-sm-12">
            <input type="text" class="form-control" name="nim" placeholder="Isikan NIM" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm2 col-form-label">Nama</label>
            <div class="col-sm-12">
            <input type="text" class="form-control" name="nama" placeholder="Isikan Nama" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm2 col-form-label">Kelas</label>
            <div class="col-sm-12">
            <input type="text" class="form-control" name="kelas" placeholder="Isikan Kelas" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm2 col-form-label">Email</label>
            <div class="col-sm-12">
            <input type="email" class="form-control" name="email" placeholder="Isikan Email" required>
            </div>
        </div>
        <div class="form-group row">
            
            <label class="col-sm2 col-form-label">No Handphone</label>
            <div class="col-sm-12">
            <input type="text" class="form-control" name="no_hp" placeholder="Isikan No Hp" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm2 col-form-label">Alamat</label>
            <div class="col-sm-12">
            <input type="text" class="form-control" name="alamat" placeholder="Isikan Alamat" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm2 col-form-label">Semester</label>
            <div class="col-sm-12">
            <input type="text" class="form-control" name="semester" placeholder="Isikan Semester" required>
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