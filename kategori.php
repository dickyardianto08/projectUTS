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
  <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
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
                    <h5>Halo Sobat Blasting, berikut Informasi Jadwal Les yang kami tawarkan !</h5><br>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                <div class="card">
                    <img src="asset/drumkategori.jpg" class="card-img-top medium" alt="...">
                    <div class="card-body">
                        <p class="card-text">untuk kamu yang masih belum mengenal materi drum Les dilaksanakan pada hari Sabtu pukul 13.00 - 16.00 dengan biaya Rp. 250.000</p>
                    </div>
                </div>
                </div>
                <div class="col-4 text-center">
                <div class="card">
                    <img src="asset/drumkategori.jpg" class="card-img-top medium" alt="...">
                    <div class="card-body">
                        <p class="card-text">untuk kamu yang sudah mengenal  materi drum Les dilaksanakan pada hari Minggu pukul 19.00 - 22.00 dengan biaya Rp. 350.000</p>
                    </div>
                </div>
                </div>
            </div><br>
            <button style="margin-left: 550px;" type='button' class='btn btn-success '><a class="text-light" href="pendaftaran.php">Lanjutkan Ke Pendaftaran</a></button><br>              
        </div>
    </section><br>
    <!-- Akhir pendaftaran-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>