<?php
include "../../../koneksi.php";
if(isser($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $semester = $_POST['semester'];
    
    $cek = mysqli_query($koneksi, "select * from mahasiswa where nim='$nim'") or die(mysqli_error($koneksi));

    if(mysqli_num_rows($cek)==0){
        $sql = mysqli_query($koneksi,"INSERT INTO mahasiswa (nim,nama,kelas,email,no_hp,alamat,semester) VALUES ('$nim','$nama','$kelas','$email','$no_hp','$alamat','$semester')")or die (mysqli_error($koneksi));
        if($sql){
            echo '<script>alert("Berhasil menambahkan data!); document.location="../../index.php"</script>';
        }else{
            echo '<div class="alert alert-warning>Gagal menambahkan data!</div>';
        }
    }else{
        echo '<div class="alert alert-warning>NIM sudah terdaftar!</div>';
    }
}



// header('location:../../index.php');
?>