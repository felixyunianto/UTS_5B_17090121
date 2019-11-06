<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<!doctype html>
<html lang="en">

<head>
  <title>Aguzrybudy.com | Crud Menggunakan Modal Bootstrap (popup)</title>
  <meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    name="viewport" />
  <meta content="Aguzrybudy" name="author" />
  <!-- <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script> -->
</head>

<body>

  <div class="container">
    <h1>Data Mahasiswa</h1>
    <p><a href="index.php?page=tambahdata" class="btn btn-success">Add Data</a></p>

    <table id="mytable" class="table table-bordered">
      <thead>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Email</th>
        <th>NO Handphone</th>
        <th>Alamat</th>
        <th>Semester</th>
        <th>Action</th>
      </thead>
      <?php 
  //menampilkan data mysqli
  include "../koneksi.php";
  $no = 0;
  $data=mysqli_query($koneksi,"SELECT * FROM mahasiswa");
  if(mysqli_num_rows($data)>0){
    $no = 1 ;

    while($d = mysqli_fetch_assoc($data)){
      echo '
      <tr>
        <td>'.$no++.'</td>
        <td>'.$d['nim'].'</td>
        <td>'.$d['nama'].'</td>
        <td>'.$d['kelas'].'</td>
        <td>'.$d['email'].'</td>
        <td>'.$d['no_hp'].'</td>
        <td>'.$d['alamat'].'</td>
        <td>'.$d['semester'].'</td>
        <td>
          <a href="#">EDIT</a>
          <a href="halaman/mahasiswa/delete.php?nim'.$d['nim'].'" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>
        </td>
        </tr>
      ';
    }
  }else{
    echo '<tr><td colspan="8">Tidak ada Data!</td></tr>';
  }
  ?>
    </table>
  </div>


</body>

</html>