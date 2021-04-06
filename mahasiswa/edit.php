<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$nim = $_GET['nim'];
$prodi = mysqli_query($connection, "SELECT * FROM prodi");
$query = mysqli_query($connection, "SELECT * FROM mahasiswa WHERE nim='$nim'");
$row = mysqli_fetch_assoc($query);
// var_dump($row);
// die();
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
                <td><input readonly class="form-control" type="text" name="nim" size="20" value="<?= $row['nim'] ?>"></td>
              </tr>
              <tr>
                <td>Nama Mahasiswa</td>
                <td><input class="form-control" type="text" name="nama_mhs" size="20" value="<?= $row['nama_mhs'] ?>"></td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control datepicker" name="birth_date" value="<?= $row['birth_date'] ?>" id="date" required>
                    <div class="input-group-append">
                      <label class="input-group-text" for="date">
                        <i class="fas fa-calendar-day"></i>
                      </label>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>agama</td>
                <td>
                  <select class="form-control" name="agama" id="agama" required>
                    <option value="">--Pilih Agama--</option>
                    <option value="islam" <?php if ($row['agama'] == "islam") {
                                            echo "selected";
                                          } ?>>Islam</option>
                    <option value="protestan" <?php if ($row['agama'] == "protestan") {
                                                echo "selected";
                                              } ?>>Protestan</option>
                    <option value="katolik" <?php if ($row['agama'] == "katolik") {
                                              echo "selected";
                                            } ?>>Katolik</option>
                    <option value="hindu" <?php if ($row['agama'] == "hindu") {
                                            echo "selected";
                                          } ?>>Hindu</option>
                    <option value="buddha" <?php if ($row['agama'] == "buddha") {
                                              echo "selected";
                                            } ?>>Buddha</option>
                    <option value="khonghucu" <?php if ($row['agama'] == "khonghucu") {
                                                echo "selected";
                                              } ?>>Khonghucu</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>
                  <select class="form-control" name="sex" id="sex" required>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="L" <?php if ($row['sex'] == "L") {
                                        echo "selected";
                                      } ?>>Pria</option>
                    <option value="P" <?php if ($row['sex'] == "P") {
                                        echo "selected";
                                      } ?>>Wanita</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" class="form-control"><?= $row['alamat'] ?></textarea></td>
              </tr>
              <tr>
                <td>Kota</td>
                <td><input class="form-control" type="text" name="kota" size="20" value="<?= $row['kota'] ?>"></td>
              </tr>
              <tr>
                <td>Asal Sekolah</td>
                <td><input class="form-control" type="text" name="asal_sekolah" size="20" value="<?= $row['asal_sekolah'] ?>"></td>
              </tr>
              <tr>
                <td>No HP</td>
                <td><input class="form-control" type="text" name="no_hp" size="20" value="<?= $row['no_hp'] ?>"></td>
              </tr>
              <tr>
                <td>Login</td>
                <td><input class="form-control" type="text" name="login" size="20" value="<?= $row['login'] ?>"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input class="form-control" type="password" name="password" size="20" value="<?= $row['password'] ?>"></td>
              </tr>
              <tr>
                <td>Kode Prodi</td>
                <td>
                  <select class="form-control" name="kode_prodi" id="kode_prodi" required>
                    <option value="">--Pilih Prodi--</option>
                    <?php
                    while ($r = mysqli_fetch_array($prodi)) :
                    ?>
                      <option value="<?= $r['kode_prodi'] ?>" <?php if ($row['kode_prodi'] == $r['kode_prodi']) {
                                                                echo "selected";
                                                              } ?>><?= $r['nama_prodi'] ?></option>
                    <?php
                    endwhile;
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <a class="btn btn-danger" href="index.php">Batalkan</a>
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