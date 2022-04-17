<?php
$konek = mysqli_connect("localhost", "root", "", "uts");

$id = $_GET["id"];
$uts = mysqli_query($konek, "SELECT * FROM pendaftar where id_pendaftar=$id");
$result = [];
while ($uts2 = mysqli_fetch_assoc($uts)) {
    $result[] = $uts2;
}
$data = $result[0];
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];

    $telepon = $_POST["telepon"];
    $alamat = $_POST["alamat"];
    $kategori = $_POST["kategori"];
    $insert = mysqli_query($konek, "UPDATE pendaftar SET nama='$nama', telepon ='$telepon', alamat ='$alamat', kategori='$kategori' where id_pendaftar=$id");
    $hasil = mysqli_affected_rows($konek);
    if ($hasil > 0) {
        header("Location:halaman_admin.php");
    } else {
        echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dirubah');
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

    <title>Edit</title>
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
            <a class="nav-link text-light " href="#">About Us</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- akhir Navbar -->
    <br>
    <h5 style="text-align: center ;">Form Update</h5>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $data["nama"]; ?>" required />
                </div>
                <div class="form-group">
                    <label for="tipe">Telepon</label>
                    <input type="text" name="telepon" class="form-control" value="<?php echo $data["telepon"]; ?>" required />
                </div>
                <div class="form-group">
                    <label for="deskripsi">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $data["alamat"]; ?>" required />
                </div>
                <!-- <div class="form-group">
                    <label for="deskripsi">Kategori</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $data["kategori"]; ?>" required />
                    <button type="submit" name="submit"class="btn btn-success">Daftar</button>
                </div> -->
                <div>
                    <label for="deskripsi">Kategori</label>
                    <select class="form-select" name="kategori" value="<?php echo $data["kategori"]; ?>" required  >
                        <option selected>Pilih--</option>
                        <option value="Rookie">Rookie</option>
                        <option value="Intermediete">Intermediete</option>
                    </select ><br>
                    <button type="submit" name="submit"class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>