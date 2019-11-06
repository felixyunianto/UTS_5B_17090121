<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>


<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
            <th scope="col">4</th>
            <th scope="col">5</th>
            <th scope="col">6</th>
            <th scope="col">7</th>
            <th scope="col">8</th>
            <th scope="col">9</th>
            <th scope="col">10</th>
            <th scope="col">11</th>
            <th scope="col">12</th>
            <th scope="col">13</th>
            <th scope="col">14</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $no =1;
        $data = mysqli_query($koneksi, "select * from mahasiswa where kelas='B'");
        while($d = mysqli_fetch_array($data)){
        ?>
        
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nim'] ?></td>
            <td><?php echo $d['nama'] ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
</body>
</html>