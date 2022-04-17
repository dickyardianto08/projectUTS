<?php
include 'koneksi.php';
$konek = mysqli_connect("localhost", "root", "", "uts");
$result = [];
$uts = mysqli_query($konek, "SELECT * FROM pendaftar");
while ($uts2 = mysqli_fetch_assoc($uts)) {
    $result[] = $uts2;
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
   <!-- DATA TABLE-->
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark shadoh-sm" style="background-color: #4700D8;">
    <div class="container">
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
<br><h5 style="text-align: center; border-top:50px;">DATA PENDAFTAR</h5><br>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data2">
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Kategori</th>
                <th></th>
                <th></th>
        </thead>
        <tbody>
            <?php
            foreach ($result as $uts2) :
            ?>
                <tr>
                    <td>
                        <?php
                        echo $uts2["nama"];
                        ?></td>
                    <td>
                        <?php
                        echo $uts2["telepon"];
                        ?></td>
                    <td>
                        <?php
                        echo $uts2["alamat"];
                        ?></td>
                    <td>
                        <?php
                        echo $uts2["kategori"];
                        ?></td>
                    <td>
                        <a href="hapus.php?id=<?php echo $uts2["id_pendaftar"]; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                            </svg>>
                        </a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $uts2["id_pendaftar"]; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>

        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
