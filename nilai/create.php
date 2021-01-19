<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$mahasiswa = mysqli_query($connection, "SELECT nim,nama_mhs FROM mahasiswa");
$mata_kuliah = mysqli_query($connection, "SELECT mk_id,nama_mk FROM mata_kuliah");
$prodi = mysqli_query($connection, "SELECT kode_prodi,nama_prodi FROM prodi");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Nilai</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>NIM</td>
                <td>
                  <select class="form-control" name="nim" id="nim" required>
                    <option value="">--Pilih Mahasiswa--</option>
                    <?php
                    while ($r = mysqli_fetch_array($mahasiswa)) :
                    ?>
                      <option value="<?= $r['nim'] ?>"><?= $r['nama_mhs'] ?></option>
                    <?php
                    endwhile;
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Mata Kuliah</td>
                <td>
                  <select class="form-control" name="mk_id" id="mk_id" required>
                    <option value="">--Pilih Matakuliah--</option>
                    <?php
                    while ($r = mysqli_fetch_array($mata_kuliah)) :
                    ?>
                      <option value="<?= $r['mk_id'] ?>"><?= $r['nama_mk'] ?></option>
                    <?php
                    endwhile;
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Kode Prodi</td>
                <td>
                  <select class="form-control" name="kode_prodi" id="kode_prodi" required>
                    <option value="">--Pilih Program Studi--</option>
                    <?php
                    while ($r = mysqli_fetch_array($prodi)) :
                    ?>
                      <option value="<?= $r['kode_prodi'] ?>"><?= $r['nama_prodi'] ?></option>
                    <?php
                    endwhile;
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Inisial Dosen</td>
                <td><input class="form-control" type="text" name="inisial" size="20"></td>
              </tr>
              <tr>
                <td>Nilai UTS</td>
                <td><input class="form-control" type="text" name="nilai_uts" size="20"></td>
              </tr>
              <tr>
                <td>Nilai UAS</td>
                <td><input class="form-control" type="text" name="nilai_uas" size="20"></td>
              </tr>
              <tr>
                <td>Nilai Akhir</td>
                <td><input class="form-control" type="text" name="nilai_akhir" size="20"></td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Batalkan">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>