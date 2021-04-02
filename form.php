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
 <style type="text/css">

body {
    margin: 0;
    padding: 0;
    background-color: aqua;
   }

 * {
  box-sizing: border-box;
}

form {
  padding: 1em;
  background: #f9f9f9;
  border: 1px solid #c1c1c1;
  margin-top: 9rem;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}

form input {
  margin-bottom: 1rem;
  background: #fff;
  border: 1px solid #9c9c9c;
}

form button {
  background: lightgrey;
  padding: 0.7em;
  border: 0;
}


form button:hover {
  background: green;
  color: white;
}

form span a{
  background: lightblue;
  padding: 0.7em;
  border: 0;
  text-decoration: none;
  color: black;
  text-align: center;
}


form span a:hover {
  background: blue;
  color: white;
}

label {
  text-align: right;
  display: block;
  padding: 0.5em 1.5em 0.5em 0;
}

input {
  width: 100%;
  padding: 0.7em;
  margin-bottom: 0.5rem;
}

input:focus {
  outline: 3px solid green;
}

select {
  width: 100%;
  padding: 0.7em;
  margin-bottom: 0.5rem;
}

select:focus {
  outline: 3px solid green;
}

@media (min-width: 400px) {
  form {
    overflow: hidden;
  }

  label {
    float: left;
    width: 200px;
  }

  input {
    float: left;
    width: calc(100% - 200px);
  }


    select {
    float: left;
    width: calc(100% - 200px);
  }

  button {
    float: right;
    width: calc(100% - 200px);
  }

 </style>
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
