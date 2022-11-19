<h1>Hasil</h1>
<!-- menampilkan nama dan nim -->
<?php
if (isset($_POST["nama"]) && isset($_POST["nim"])) {
    echo "Nama : " . $_POST["nama"] . "<br>";
    echo "NIM : " . $_POST["nim"]. "<br>";
}
?>
<!--Menampilkan jumlah karakter nim-->
<?php
if (isset($_POST['nim'])) {
    $nim = $_POST['nim'];
    $jumlah = strlen($nim);
    echo "Jumlah karakter : $jumlah". "<br>";
}
?>
<!--Menampilkan jumlah karakter jika karater . tidak dihitung-->
<?php
if (isset($_POST['nim'])) {
    $nim = $_POST['nim'];
    $jumlah = strlen($nim);
    $jumlah = $jumlah - substr_count($nim, ".");
    echo "Jumlah karakter tanpa titik : $jumlah". "<br>";
}
?>
<!--menampilkan angkatan -->
<?php
if (isset($_POST["nim"])) {
    if (substr($_POST["nim"], 0, 2) == "21") {
        echo "Angkatan : 2021". "<br>";
    } else {
        echo "Bukan Angkatan 2021". "<br>";
    }
}
?>
<!-- menampilkan fakultas -->
<?php
if (isset($_POST["nim"])) {
    if (substr($_POST["nim"], 3, 2) == "01") {
        echo "Fakultas : Fakultas Teknologi Informasi dan Industri". "<br>";
    } else {
        echo "Bukan Mahasiswa Fakultas Teknologi Informasi dan Industri". "<br>";
    }
}
?>
<!-- menampilkan jurusan -->
<?php
if (isset($_POST["nim"])) {
    if (substr($_POST["nim"], 6, 2) == "53") {
        echo "Jurusan : Teknik Informatika". "<br>";
    } else {
        echo "Bukan Mahasiswa Jurusan Sistem Informasi". "<br>";
    }
}
?>
</body>
</html>
