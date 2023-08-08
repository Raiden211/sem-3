// ini untuk tutor database nya
<?php 
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba</title>
</head>
<body>
    <p>Tutor nya ada di halaman berikut : </p>
    <a href="index2.php">Tutor2</a>
    <a href="index3.php">Tutor3</a>
    // cara 1 = cara tambah biasa (Awal mulanya)
    <form action="#" method="post">
        <p>Nama : </p> 
        <input type="text" name="nama1"> <br>
        <p>Stok : </p> 
        <input type="text" name="stok"> <br>
        <p>Harga : </p>
        <input type="text" name="harga"> <br>
        <br>
        <button type="submit" name="add1">Submit data</button>
        <?php 
        $nama = $_POST['nama1'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        if ($nama == "" || $stok == "" || $harga == "")
        {
            echo "Onok seng kosong :v";
        }
        else 
        {
            $sql = "insert into label1 (nama,stok,harga) 
            values ('$nama','$stok','$harga')";
            $query = mysqli_query($conn,$sql);
            if($query)
            {
                echo "Data berhasil masuk";
            }
            else 
            {
                echo "Ada yang salah";
            }
        }
        ?>
    </form>
    // result 
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
        </tr>
    <?php 
        $sql = "select * from label1"; /*-> ini buat query sql untuk memilih data */
        $res = mysqli_query($conn,$sql); /* -> ini digunakan untuk koneksi ke db dan query dari sql */
        while ($row = mysqli_fetch_array($res)) /*-> ini untuk asosiasi array data, jadi multi data */
        {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['stok'] ?></td>
                <td><?= $row['harga'] ?></td>
            </tr>
    <?php        
        }
    ?>
    </table>
</body>
</html>
