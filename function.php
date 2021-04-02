<?php

$conn = mysqli_connect("localhost","root","","tugas1pi");

function tambah($data){
    global $conn;

    $nama_lengkap = $data["nama_lengkap"];
    $tempat_lahir = $data["tempat_lahir"];
    $tanggal_lahir = $data["tanggal_lahir"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $alamat = $data["alamat"];
    $email = $data["email"];
    $no_hp = $data["no_hp"];

    $query = "INSERT INTO form
              VALUES
              ('','$nama_lengkap', '$tempat_lahir', '$tanggal_lahir','$jenis_kelamin', '$alamat','$email','$no_hp')
              ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

?>