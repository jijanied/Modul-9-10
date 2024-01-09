<!-- PRAKTIKUM MODUL 9 -->
<!-- LATIHAN 1 -->
<!-- Membuat Tulisan “Hello world” -->
<?php
echo "Hello world"
?>
<!-- LATIHAN 2 -->
<!-- Penerapan Perulangan Di PHP -->
<?php
for ($i = 1; $i <= 10; $i++) {
 echo "kata ini dicetak sebanyak 10 kali <br/>";
}

<!-- LATIHAN 3 -->
<!-- Penerapan PHP di Dalam HTML -->
<!DOCTYPE html>
<html>
<head>
 <title>LATIHAN 3 PEMROGRAMAN WEB</title>
</head>
<title>LATIHAN 3 PEMROGRAMAN WEB</title>
<body>
 <font color="red">
 <?php echo "Tulisan ini berwarna merah"; ?>
 </font>
 <?php
 echo "
<br/>
<b>Tulisan dalam bold atau tulisan tebal</b>
";
 ?>
</body>
</html>
<!-- LATIHAN 4 -->
<!-- Penulisan Variabel di PHP -->
<!DOCTYPE html>
<html>
<head>
 <title>LATIHAN 4 PEMROGRAMAN WEB</title>
</head>
<body>
 <?php
 $bilanganbulat = 17; // nilai variabel yang berisi angka (integer)
 $teks = "aku"; // nilai variabel yang berisi tulisan (string)
 $bilangandesimal = 17.42; // nilai variabel yang berisi angka desimal (float);
 echo "Variabel bilanganbulat: " . $bilanganbulat . "<br/>";
 echo "Variabel teks: " . $teks . "<br/>";
 echo "Variabel bilangandesimal: " . $bilangandesimal . "<br/>";
 ?>
</body>
</html>
<!-- LATIHAN 5 -->
<!-- Penghitungan Angka -->
<!DOCTYPE html>
<html>
<head>
 <title> LATIHAN 5 PEMROGRAMAN WEB</title>
</head>
<body>
 <?php
 $nim = "15211001"; // Sesuaikan dengan NIM Anda
 $nama = "Aldi Setiadi"; // Sesuaikan dengan nama Anda
 $sangkal1 = 20;
 $sangkal2 = 15;
 $hasilPenjumlahan = $sangkal1 + $sangkal2;
 echo "NIM: " . $nim . "<br/>";
 echo "NAMA: " . $nama . "<br/>";
 echo "Hasil Penjumlahan dari " . $sangkal1 . " dan " . $sangkal2 . "
adalah " . $hasilPenjumlahan . "<br/>";
 ?>
</body>
</html>
<!-- LATIHAN 6 -->
<!-- Penerapan Method Post Pada Form -->
<!DOCTYPE html>
<html>
<head>
 <title>LATIHAN 6 PEMROGRAMAN WEB</title>
</head>
<body>
<form method="post">
 <table>
 <tr>
 <td>Nama</td>
 <td>:</td>
 <td><input type="text" name="nama" /></td>
 </tr>
 <tr>
 <td>Mata Kuliah</td>
 <td>:</td>
 <td>
 <select name="mata_kuliah">
 <option value="">Pilih Mata Kuliah</option>
 <option value="Pemrograman Terstruktur">Pemrograman
Terstruktur</option>
 <option value="Pemrograman Web">Pemrograman
Web</option>
 <option value="Pemrograman Berorientasi
Objek">Pemrograman Berorientasi Objek</option>
 <option value="Algoritma Struktur Data">Algoritma
Struktur Data</option>
 </select>
 </td>
 </tr>
 <tr>
 <td>Jenis Kelamin</td>
 <td>:</td>
 <td>
 <input type="radio" name="jenis_kelamin" value="LakiLaki" />Laki-Laki<br />
 <input type="radio" name="jenis_kelamin"
value="Perempuan" />Perempuan
 </td>
 </tr>
 <tr>
 <td>Email</td>
 <td>:</td>
 <td><input type="email" name="email" /></td>
 </tr>
 <tr align="center">
 <td colspan="3"><input type="submit" name="submit"
value="Simpan" />&nbsp;
 <input type="reset" name="Reset" value="Reset" /></td>
 </tr>
 </table>
</form>
<?php
if (isset($_POST['submit'])) {
 $nama = $_POST['nama'];
 $mata_kuliah = $_POST['mata_kuliah'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $email = $_POST['email'];
 echo "<br/>THE OUTPUT SESUAI INPUTAN DARI FORM DIATAS<br/>";
 echo "Nama: " . $nama . "<br/>";
 echo "Mata Kuliah: " . $mata_kuliah . "<br/>";
 echo "Jenis Kelamin: " . $jenis_kelamin . "<br/>";
 echo "Email: " . $email . "<br/>";
}
?>
</body>
</html>
<!-- LATIHAN 7 -->
<!-- Penerapan Method Get Pada Form -->
<!DOCTYPE html>
<html>
<head>
 <title>LATIHAN 7 PEMROGRAMAN WEB</title>
</head>
<body>
 <form method="get">
 <table>
 <tr>
 <td>Name</td>
 <td>:</td>
 <td><input type="text" name="nama" /></td>
 </tr>
 <tr>
 <td>NIM</td>
 <td>:</td>
 <td><input type="text" name="nim" /></td>
 </tr>
 <tr align="center">
 <td colspan="3"><input type="submit" name="submit"
value="Submit" />&nbsp;
 <input type="reset" name="Reset" value="Reset" />
 </td>
 </tr>
 </table>
 </form>
 <?php
 if (isset($_GET['submit'])) {
 // Menggunakan isset untuk memeriksa apakah form telah disubmit
 $nama = $_GET['nama'];
 $nim = $_GET['nim'];
 echo "<br/><br/> INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS
<br/>";
 echo "Nama: " . $nama . "<br/>";
 echo "NIM: " . $nim . "<br/>";
 }
 ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
 <title>LATIHAN 8 PEMROGRAMAN WEB</title>
</head>
<body>
 <?php
 // CARA PERTAMA MENDEKLARASIKAN ARRAY 1 DIMENSI
 print("CARA PERTAMA MENDEKLARASIKAN ARRAY 1 DIMENSI: ");
 $kota[0] = "Magelang";
 $kota[1] = "Jogja";
 $kota[2] = "Surabaya";
 print("A : " . $kota[2]); // Print adalah cara lain menampilkan selain echo
 echo "<br/><br/>";
 // CARA KEDUA MENDEKLARASIKAN ARRAY 1 DIMENSI
 print("CARA KEDUA MENDEKLARASIKAN ARRAY 1 DIMENSI: ");
 $kota2 = array("X", 1 => "Sandow", 2 => "Surabaya");
 print("2: " . $kota2[0]);
 echo "<br/><br/>";
 // CARA KETIGA MENDEKLARASIKAN ARRAY 1 DIMENSI
 print("CARA KETIGA MENDEKLARASIKAN ARRAY 1 DIMENSI: ");
 $inisialkota = array("JBR" => "Surabaya", "SDA" => "Sidoarjo", 581 => "SDA");
 echo "JBR adalah kata: " . $inisialkota["JBR"];
 ?>
</body>
</html>
<!-- LATIHAN 9 -->
<!-- Array Multidimensi -->
<!DOCTYPE html>
<html>
<head>
 <title>LATIHAN 9 PEMROGRAMAN WEB</title>
</head>
<body>
 <?php
 # CARA PERTAMA MENDEKLARASIKAN ARRAY MULTIDIMENSI
 print("CARA PERTAMA MENDEKLARASIKAN ARRAY MULTIDIMENSI: ");
 $buah = array(
 "apel" => array("warna"=>"merah", "rasa"=>"manis"),
 "pisang" => array("warna"=>"kuning", "rasa"=>"manis"));
 print "Warna buah apel adalah ";
 print $buah["apel"]["warna"] . "<br/>";
 print "Warna buah pisang adalah ";
 print$buah["pisang"]["warna"];

 echo "<br/><br/></br>";
 # CARA KEDUA MENDEKLARASIKAN ARRAY MULTIDIMENSI
 print("CARA KEDUA MENDEKLARASIKAN ARRAY MULTIDIMENSI: </br>");
 $buah = array(
 array("apel", "merah", "manis"),
 array("pisang", "kuning", "manis")
 );
 echo $buah[0][0] . " warna: " . $buah[0][1] . " rasa: " .
$buah[0][2]."<br/>";
 echo $buah[1][0] . " warna: " . $buah[1][1] . " rasa: " .
$buah[1][2]."<br/>";
 ?>
</body>
</html>
<!-- PRAKTIKUM MODUL 10 -->
<!--Praktikum- Skrip Program Modul 7 => String.php-->
<!DOCTYPE html>
<html>
<head>
    <title>Praktikum String dan Tanggal</title>
</head>   
<body>
    <?php
    $kalimat = "Universitas PGRI Madiun";

    printf("Hasil Strlen : %s<br>\n", strlen($kalimat));
    printf("Hasil Strtoupper : %s<br>\n", strtoupper($kalimat));
    printf("Hasil Strtolower : %s<br>\n", strtolower($kalimat));
    printf("Hasil Ucfirst : %s<br>\n", ucfirst($kalimat));
    printf("Hasil Ucwords : %s<br>\n", ucwords($kalimat));
    printf("Aslinya : $kalimat<br>\n");

    printf("Tanggal Sekarang : %s", Date("d F Y"));
    echo "<br>";
    ?>
</body>
</html>
<!--Praktikum- Skrip Program Modul 7 => Tanggal.php-->
<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Tanggal</title>
</head>   
<body>
    <?php
    $namahari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
    $namabulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    echo $namahari[date("w")] . "," . date("j") . " " . $namabulan[date("n")] . "".date("Y");

    echo date("Y/m/d")."<br />"; //ini menampilkan dengan format 2017/10/02
    echo date("l, d-m-Y")."<br />"; //ini menampilkan dengan format Tuesday, 02-10-2017
    echo date("d F Y")."<br />"; //ini menampilkan format 02 Oktober 2017
    echo date("h:i:s")."<br />"; //ini menampilkan format 00:31:04
    echo date("l, d-m-Y h:i:s")."<br />"; //ini menampilkan dengan format Tuesday, 02-10-2017 00:31:35
    ?>
</body>
</html>
<!-- TUGAS PRAKTIKUM -->
<!DOCTYPE html>
<html>

<head>
    <title>Tugas String dan Tanggal</title>
</head>

<body>
    <form method="post" action="">

        Masukkan Nama, Email dan Password <br>

        Default Nama = belajar, Email = test@gmail.com dan Password = madiun
        <br>
        Isian data: <br>

        Nama : <input type="text" name="nama" value="belajar"><br>
        Email: <input type="text" name="email"><br>
        Password: <input type="password" name="password"><br>

        <input type="submit" value="Cek"><br>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email)) {
            print("Harap mengisi email <br>\n");
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if ($email == "test@gmail.com") {
                    print("Alamat email $email valid<br>\n");
                } else {
                    print("Alamat email $email tidak valid<br>\n");
                }
            } else {
                print("Format alamat email tidak valid<br>\n");
            }
        }

        if (isset($password)) {

            $pass_valid = crypt("madiun", $nama);
            $enkripsi = crypt($password, $nama);

            if ($pass_valid == $enkripsi) {
                print("Password valid");
            } else {
                print("Password salah");
            }
        }
    }

    ?>

</body>
</html>
<!--Tugas Praktikum Menggunakan String dan Tanggal-->
<!DOCTYPE html>
<html>
<head>
    <title>Tugas String dan Tanggal</title>
</head>
<body>
<form method="post" action="">
    <table border="2">
        <tr>
            <td>
                <table border="0">
                    <tr>
                        <td colspan="4"><b>Masukkan Nama, Email, Password, dan Tanggal Lahir <br>
                        Default Nama: belajar, Email: test@gmail.com, Password: madiun, dan Tanggal Lahir: 2000-01-01 <br>
                        <u>Isian Data:</u></b>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" name="nama" /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" name="email" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td colspan="2"><input type="password" name="password" /></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" name="tanggal_lahir" placeholder="YYYY-MM-DD" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="2"><input type="submit" value="CEK" /></td>
                    </tr>                          
                </table>
            </td>
        </tr>        
    </table>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = "belajar";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    if (empty($email)) {
        print("Harap mengisi email <br>\n");
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($email == "test@gmail.com") {
                print("Alamat email $email valid<br>\n");
            } else {
                print("Alamat email $email tidak valid<br>\n");
            }
        } else {
            print("Format alamat email tidak valid<br>\n");
        }
    }

    if (isset($password)) {
        $pass_valid = crypt("madiun", $nama);
        $enkripsi = crypt($password, $nama);

        if ($pass_valid == $enkripsi) {
            print("Password valid<br>");
        } else {
            print("Password salah<br>");
        }
    }

    if (!empty($tanggal_lahir)) {
        if (DateTime::createFromFormat('Y-m-d', $tanggal_lahir) !== false) {
            print("Tanggal lahir $tanggal_lahir valid<br>");
        } else {
            print("Format tanggal lahir tidak valid<br>");
        }
    }
}
?>
</body>
</html>



