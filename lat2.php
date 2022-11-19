<!DOCTYPE html>
<html>
<body>
<h1>Pencarian Mahasiswa</h1>
<!-- mengimputkan nama nim -->
<form action="lat2.php" method="post">
<div class="form-group">
    <label for="nama">Nama <br> </label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
</div>
<div class="form-group">
    <label for="nim">NIM <br></label>
    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
</div>
<br>
<button type="submit" class="btn btn-default">Cari</button>
</form>
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
