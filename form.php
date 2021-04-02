<?php
require 'function.php';

  if( isset($_POST["submit"]) ) {
    
    if ( tambah($_POST) > 0) {
      echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'form.php'
      </script>
      ";
    } else {
      echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'form.php'
      </script> 
      ";
    }
  }

?>

<!DOCTYPE html>

<html>

<head>

 <title>Form Pendaftaran</title>

</head>

<body>

 <form action="" method="GET">

  <h1 align="center">Formulir Pendaftaran</h1>

        <label>Nama Lengkap</label>

        <input name="nama_lengkap" type="text">

        <label>Tempat Lahir</label>

        <input name="tempat_lahir" type="text">

        <label>Tanggal Lahir</label>

        <input name="tanggal_lahir" type="date">

        <label>Jenis Kelamin</label>

        <select name="jenis_kelamin">

         <option value="Laki-Laki">Laki-Laki</option>

         <option value="Perempuan">Perempuan</option>

        </select>

        <label>Alamat Lengkap</label>

        <input name="alamat" type="text">

        <label>E-mail</label>

        <input name="email" type="text">

        <label>No.HP</label>

        <input name="no_hp" type="text">

        <button>Daftar</button>

 </form>

</body>


</html>
