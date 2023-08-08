<?php 
    include 'config.php';
?>
// search engine tidak sederhana 
// Berikut adalah cara membuat search engine yang baik dan benar :v
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Tutor nya ada di halaman berikut : </p>
    <a href="index.php">Tutor1</a>
    <a href="index2.php">Tutor2</a>
    <form action="#" method="post">
        <p>Nama : </p> 
        <input type="text" name="nama"> <br>
        <p>Umur : </p>
        <input type="text" name="usia"> <br> <br>
        <button type="submit" name="add">Tambah</button>
        <?php
            $nama = $_POST['nama'];
            $usia = $_POST['usia'];
            if($nama == "" || $usia == "" || $usia < 1)
            {
                echo "Ada yg kosong/usia g sesuai ketentuan.";
            }
            else 
            {
                $sql = "INSERT INTO label3 (nama,usia)
                values ('$nama','$usia')";
                $res = mysqli_query($conn,$sql);
                if($res)
                {
                    echo "Data masuk";
                }
                else 
                {
                    echo "Salah keknya";
                }
            }
        ?>
    </form>
    //Result 
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Usia</th>
        </tr>
        <?php 
            $sql = "SELECT * FROM label3";
            $res = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($res))
            {
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['usia'] ?></td>
                </tr>
        <?php
            }
        ?>
    </table>
    // search data
    <form action="#" method="post">
        <p>Cari Nama : </p> 
        <input type="text" name="search"> <br> <br>
        <button type="submit" name="add">Cari</button>
        <?php 
            $search = $_POST['search'];
            if($search == "")
            {
                echo "Jangan kosong";
            }
            else 
            {
            ?>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Usia</th>
                </tr>
            <?php 
            $sql = "SELECT * FROM label3 where nama like '%$search%'";
            $res = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($res))
            {
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['usia'] ?></td>
                </tr>
            <?php
            }
            ?>
        <?php        
            }
        ?>
        </table>
    </form>
</body>
</html>
