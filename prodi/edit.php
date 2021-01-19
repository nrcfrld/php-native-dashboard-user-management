<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$kode_prodi = $_GET['kode_prodi'];
$query = mysqli_query($connection, "SELECT * FROM prodi WHERE kode_prodi='$kode_prodi'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Prodi</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Kode Prodi</td>
                  <td><input class="form-control" type="text" name="kode_prodi" value="<?= $row['kode_prodi'] ?>" required></td>
                  <td>Nama Prodi</td>
                  <td><input class="form-control" type="text" name="nama_prodi" value="<?= $row['nama_prodi'] ?>" required></td>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                    <input class="btn btn-danger" type="reset" name="batal" value="Batalkan">
                  </td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>