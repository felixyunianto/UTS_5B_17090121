<?php
    include '../../../koneksi.php';

    if(isset($_GET['nim'])){
        $nim = $_GET['nim'];

        $cek = mysqli_query($koneksi,"select * from mahasiswa where nim ='$nim'")or die(mysqli_error($koneksi));

        if(mysqli_num_rows($cek) > 0){
            $del = mysqli_query($koneksi, "delete from mahasiswa where nim ='$nim'")or die(mysqli_error($koneksi));
            if($del){
                echo '<script>alert("Berhasil Menghapus Data"); document.location:../../index.php</script>';
            }else{
                echo '<script>alert("Gagal Menghapus Data"); document.location:../../index.php</script>';
            }
        }else{
            echo '<script>alert("NIM tidak ditemukan"); document.location:../../index.php</script>';
        }

    }else{
        echo '<script>alert("NIM tidak ditemukan"); document.location:../../index.php</script>';
    }
    
    header("location:../../index.php");
?>