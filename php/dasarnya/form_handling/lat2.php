<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    // Sebenarnya sama aja Get sama Post, sama-sama buat mengumpulkan data cuman kalau get datanya dimunculin di url
    <form action="coba1.php" method="post"> // Post ini buat dapatin data, tapi lebih aman dibandingkan get
        <p>Coba post : </p>
        <input type="text" name="cek">
        <button type="submit" name="sub">Submit</button>
        <br>
    </form>
    <br>
    <form action="coba.php" method="get"> // Get ini buat dapatin data (Tapi rentan, jangan pakai get untuk password)
        <p>Coba get : </p>
        <input type="text" name="test1">
        <button type="submit" name="sub">Submit</button>
        <br>
    </form>
    /* coba semisal inputnya "Gajelas" <br>
    apabila post maka url nya seperti ini = http://localhost/lat2/coba1.php<br>
    tapi apabila get maka jadinya kayak gini = http://localhost/lat2/coba.php?test1=gajelas&sub=<br>
    test1 itu nama input nya, = gajelas itu isinya */
    <br>
    <a href="coba.php">Get</a>
    <br>
    <a href="coba1.php">POST</a>
    <br>
    // ini belum sempurna
    <p>Insert Multiple data</p>
</body>
</html>