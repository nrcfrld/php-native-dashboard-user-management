<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$prodi = mysqli_query($connection, "SELECT * FROM prodi");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Mahasiswa</h1>
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
                <td><input class="form-control" type="text" name="nim" size="20"></td>
              </tr>
              <tr>
                <td>Nama Mahasiswa</td>
                <td><input class="form-control" type="text" name="nama_mhs" size="20"></td>
              </tr>
              <tr>
                <td>agama</td>
                <td>
                  <select class="form-control" name="agama" id="agama" required>
                    <option value="">--Pilih Agama--</option>
                    <option value="islam">Islam</option>
                    <option value="protestan">Protestan</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="khonghucu">Khonghucu</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>
                  <select class="form-control" name="sex" id="sex" required>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="L">Pria</option>
                    <option value="P">Wanita</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" class="form-control"></textarea></td>
              </tr>
              <tr>
                <td>Kota</td>
                <td><input class="form-control" type="text" name="kota" size="20"></td>
              </tr>
              <tr>
                <td>Asal Sekolah</td>
                <td><input class="form-control" type="text" name="asal_sekolah" size="20"></td>
              </tr>
              <tr>
                <td>No HP</td>
                <td><input class="form-control" type="text" name="no_hp" size="20"></td>
              </tr>
              <tr>
                <td>Login</td>
                <td><input class="form-control" type="text" name="login" size="20"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input class="form-control" type="password" name="password" size="20"></td>
              </tr>
              <tr>
                <td>Kode Prodi</td>
                <td>
                  <select class="form-control" name="kode_prodi" id="kode_prodi" required>
                    <option value="">--Pilih Prodi--</option>
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