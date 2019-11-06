<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    <h1>ini semester 1</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            
            include '../koneksi.php';
            $no = 1;
            $id = "1";
            $nidn = $_SESSION['nidn'];

            $data = mysqli_query($koneksi, "select * from matkul where semester='$id' and nidn='$nidn'");
            $matkul = mysqli_fetch_array($data);

            ?>

            <?php if($matkul){
            ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $matkul['nama_matkul']; ?></td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                    Launch demo modal
                </button></td>
            <?php }else{ ?>
                <style>
                .style_tidak_ada{
                    color : red;
                    text-align :center;
                }
            </style>
            
            <td colspan="3" class="style_tidak_ada"><span class="style_tidak_ada">Maaf Anda tidak mengajar di semester ini</span></td>

            <?php } ?>
        </tbody>
    </table>

   
</body>
</html>