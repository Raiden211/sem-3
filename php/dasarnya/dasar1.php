// catatan = Silahkan dicoba sendiri :v <br>
// ini intro to php, untuk form terpisah
<?php
    echo "yo"; // cout di c++ output = yo
    $ini = "minuman"; // $ melambangkan variabel, semua variabel literally
    $jumlah = 12;
    echo "<br>";
    echo $ini; // output = minuman
    echo "<br>";
    echo $jumlah; // output = 12
    echo "<br>";
    echo var_dump($jumlah); // mengetahui tipe variabel output = int(12)
    echo "<br>";
    // ----------------
    // Gabungin 2 kata
    echo $ini." ini berjumlah ".$jumlah; // output = minuman ini berjumlah 12
    echo "<br>";
    // if else sama aja sih, g ada yg beda 
    echo "Ini if";
    echo "<br>";
    $biji = true;
    if($biji == false)
    {
        echo "Wedhok iki";
        echo "<br>";
    }
    else 
    {
        echo "Lanang iki";
        echo "<br>";
    }
    echo "Ini for";
    echo "<br>";
    // switch (ini gw kurang tau jadi ya udahlah)
    $tes = 3;
    switch($tes)
    {
        case 1 :
            echo "ini 1<br>";
            break;
        case 2 :
            echo "ini 2<br>";
            break;
        case 3: 
            echo "ini 3<br>";
            break;
        default : 
            echo "Gaada<br>";
            break;
    }
    // for ya sama aj gausah dibahas, ini cuman 3 konstruksi fundamental alias 3 konstruksi kena mental
    $tes = 3;
    for($i = 0; $i < $tes; $i++)
    {
        echo $i;
    }
    echo "<br>";
    $tes = 7;
    for($i = 0; $i < $tes; $i++)
    {
        if($i == 5)
        {
            break;
        }
        echo $i;
    }
    echo "<br>";
    echo "Test function";
    echo "<br>";

    function nama($data)
    {
        return $data;
    }
    $ak = "iki";
    echo nama($ak);

    echo "<br>";
    function ngitung($a,$b)
    {
        $hasil = ($a * $b)/4;
        return $hasil;
    }
    $an1 = 7;
    $an2 = 6;
    echo ngitung($an1,$an2);
    echo "<br>";
    echo "Tes Array"; // array sama aja sih
    echo "<br>";
    $data = [];
    $t1 = "Ya";
    $t2 = "hm";
    $idx = 0;
    $data[$idx] = $t1; // masukkin data pakai index
    $idx++;
    $data[$idx] = $t2;
    $idx++;
    for($i = 0; $i < $idx; $i++)
    {
        echo "$data[$i],";
    }
    echo "<br>";
    echo "Bisa juga kek gini";
    echo "<br>";
    echo "Data index ke 0 : ";
    echo $data[0]; // output : ya
    echo "<br>";
    echo "Atau g kek gini juga bisa sih<br>";
    $game = ["coc","ml","Dota","Genshin"];
    foreach($game as $n)
    {
        echo "$n ";
    }
    echo "<br>";
    echo "Opsi lain dari array menggunakan array()";
    // Sebenarnya ada opsi array lain yaitu kek gini
    echo "<br>";
    $kalian = array("Rici","RRG","Ivan","Dahren","Ferdinand");
    foreach($kalian as $k)
    {
        echo "$k<br>";
    }
    echo "<br>";
    echo "Tes double foreach";
    echo "<br>";
    $apa = array("Ikan" => 12000,"Daging" => 45000);
    foreach($apa as $nama => $harga)
    {
        echo "$nama harganya $harga<br>";
    }
    // segitu aj setahuku, ini beberapa gw mikir sendiri, beberapa liat gugel, dah itu aj, makasih :D
?>
