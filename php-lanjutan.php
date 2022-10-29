<?php

$nama ="Sri Mulya Ningsih";

/*
echo $nama;
echo <br/>;
echo $nama;
echo <br/>;
echo $nama;
echo <br/>;
echo $nama;
echo <br/>;
echo $nama;
*/

//perulangan
/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n =$i+1;
    echo $no." ".$nama."<br/>";
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n =$i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;

do {
    $n =$i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/
/*
$data = array('Samsung', 'Oppo', 'Asus', 'Remdi', 'Xiomi', 'Vivo');

$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br/>";
    $i++;
}

//echo $data[5];


foreach($data as $value) {
    echo $value."<br/>";
}
*/

//percabangan
/*
if ($nama =="Sri Mulya Ningsih") {
    echo $nama." Pengguna Hp Oppo";
} else if($nama == "Rizwan") {
    echo $nama." Pengguna Samsung";
} else {
        echo $nama."Siapa pengguna Hp Xiomi?";
}
*/
/*
switch($nama) {
    case "Sri Mulya Ningsih" :
        $pesan = $nama." Pengguna Hp Oppo";
    break;
    case "Rizwan" :
        $pesan = $nama." Pengguna Hp Samsung";
    break;
    default;
        $pesan = $nama." Siapa Pengguna Hp Xiomi?";

 }

echo $pesan;


*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Putu":
                    $pesan = $_POST['nama']." Pengguna Hp Oppo";
                break;
                case "Budi":
                    $pesan = $_POST['nama']." Pengguna Hp Samsung";
                break;
                default:
                    $pesan = $_POST['nama']." Siapa Pengguna Hp Xiomi?";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Masukkan input nama dan jumlah.";
        }
    ?>
</body>
</html>