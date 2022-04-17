<?php
$konek = mysqli_connect("localhost", "root", "", "uts");
$id = $_GET["id"];
$dicky = mysqli_query($konek, "DELETE FROM pendaftar where id_pendaftar = $id");
$hasil = mysqli_affected_rows($konek);
if ($hasil > 0) {
        header("Location:halaman_admin.php");
} else {
    echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dihapus');
        </script>";
}
