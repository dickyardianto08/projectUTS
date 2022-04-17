<?php
$konek = mysqli_connect("localhost", "root", "", "uts");
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telepon = $_POST["telepon"];
    $alamat = $_POST["alamat"];
    $kategori = $_POST["kategori"];
    $insert = mysqli_query($konek, "INSERT INTO pendaftar values('', '$nama', '$telepon', '$alamat', '$kategori')");
    $hasil = mysqli_affected_rows($konek);
    if ($hasil > 0) {
        echo "<script>
        alert('Selamat, kamu suda terdaftar');
        </script>";
        header("Location:kategori.php");

    } else {
        echo "<script>
                alert('Mohon maaf, Data belum bisa ditambahkan');
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <title>Project UTS</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadoh-sm" style="background-color: #4700D8;">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#" style="margin-left: 30px;">
        <img src="asset/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top ">
        Blasting
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light " href="about us.php">About Us</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- awal pendaftaran-->
    <section>
        <div class="container">
            <div class="row text-center mt-5">
                <div class="col">
                    <h5>Sedikit Lagi impianmu menjadi drummer hebat segera terwujud <br>isikan data dirimu kemudian klik Daftar !</h5><br>
                </div>
            </div>
            <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nama">Nama Lengkap :</label>
                    <input type="text" name="nama" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="tipe">Telepon :</label>
                    <input type="text" name="telepon" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="deskripsi">Alamat :</label>
                    <input type="text" name="alamat" class="form-control" required />
                </div>
                <!-- <div class="form-group">
                    <label for="kondisi">Kategori</label>
                    <input type="text" name="kategori" class="form-control" required /><br>
                <button type="submit" name="submit"class="btn btn-success">Daftar</button>
                </div> -->
                <div>
                <label for="deskripsi">Kategori :</label>
                <select class="form-select" name="kategori" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected>Pilih--</option>
                    <option value="Rookie">Rookie</option>
                    <option value="Intermediete">Intermediete</option>
                    <!-- <button type="submit" name="submit"class="btn btn-success">Daftar</button> -->
                </select required><br>
                <button type="submit" name="submit"class="btn btn-success" >Daftar</button>
                </div>
            </form>
        </div>
    </div>
           
        </div>
    </section>
    <!-- Akhir pendaftaran-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>