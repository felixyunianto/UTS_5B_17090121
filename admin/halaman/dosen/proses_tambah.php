<?php
include "../../../koneksi.php";
if(isset($_POST['submit'])){
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $alamat = $_POST['alamat'];
    
    $cek = mysqli_query($koneksi, "select * from dosen where nidn='$nidn'") or die(mysqli_error($koneksi));

    if(mysqli_num_rows($cek)==0){
        $sql = mysqli_query($koneksi,"INSERT INTO dosen (nidn,nama,mata_kuliah,alamat) VALUES ('$nidn','$nama','$mata_kuliah','$alamat')")or die (mysqli_error($koneksi));
        if($sql){
            echo '<script>alert("Berhasil menambahkan data!); document.location="../../index.php"</script>';
        }else{
            echo '<div class="alert alert-warning>Gagal menambahkan data!</div>';
        }
    }else{
        echo '<div class="alert alert-warning>NIDN sudah terdaftar!</div>';
    }
}



// header('location:../../index.php');
?>