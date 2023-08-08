<?php 
    include 'config.php';
    function hitungna($a,$b)
    {
        $res = (($a*4/10)+($b*6/10));
        return $res;
    }
?>

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
    <a href="index3.php">Tutor3</a>
<form action="#" method="post">
        <p>Nama : </p> 
        <input type="text" name="nama2"> <br>
        <p>Nilai UTS : </p>
        <input type="text" name="nilai1"> <br>
        <p>Nilai UAS : </p>
        <input type="text" name="nilai2"> <br>
        <br>
        <button type="submit" name="add2">Tambah</button>
        <button type="submit" name="delete">Delete</button>
        <?php 
            $name = $_POST['nama2'];
            $nilai1 = $_POST['nilai1'];
            $nilai2 = $_POST['nilai2'];
            $na = hitungna($nilai1,$nilai2);
            if($name == "")
            {
                echo "Nama gaboleh kosong<br>";
            }
            if($nilai1 == "")
            {
                $nilai1 = 0;
            }
            if($nilai2 == "")
            {
                $nilai2 = 0;
            }
            else 
            {
                if($na >= 80)
                {
                    $grade = "A";
                }
                else if($na >= 75)
                {
                    $grade = "B+";
                }
                else if($na >= 70)
                {
                    $grade = "B";
                }
                else if($na >= 64)
                {
                    $grade = "C+";
                }
                else if($na > 55)
                {
                    $grade = "C";
                }
                else if($na >= 45)
                {
                    $grade = "D";
                }
                else if($na < 45 || $nilai2 == 0 || $nilai2 == "")
                {
                    $grade = "E";
                }
                $sql = "insert into label2 (name,nilai1,nilai2,na,grade) 
                values ('$name','$nilai1','$nilai2','$na','$grade')";
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
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Grade</th>
        </tr>
        <?php 
            $sql = "SELECT * FROM label2";
            $res = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($res))
            {
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['nilai1'] ?></td>
                    <td><?= $row['nilai2'] ?></td>
                    <td><?= $row['na'] ?></td>
                    <td><?= $row['grade'] ?></td>
                </tr>
        <?php
            }
        ?>
        <?php 
            if(isset($_GET['delete']))
            {
                $sql = "Delete from label2";
                $res = mysqli_query($conn,$sql);
                if($res)
                {
                    echo "data terhapus";
                }
                else 
                {
                    echo "error";
                }
            }
        ?>
    </table> 
</body>
</html>
