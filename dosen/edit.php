<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$nik = $_GET['nik'];
$query = mysqli_query($connection, "SELECT * FROM dosen WHERE nik='$nik'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Dosen</h1>
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
          <input type="hidden" name="nik" value="<?= $row['nik'] ?>">
          <table cellpadding="8" class="w-100">
            <tr>
              <td>NIK</td>
              <td><input class="form-control" type="number" name="nik" size="20" required value="<?= $row['nik'] ?>" disabled></td>
              <td>Inisial</td>
              <td><input class="form-control" type="text" name="inisial" size="20" maxlength="3" required value="<?= $row['inisial'] ?>" disabled></td>
            </tr>
            <tr>
              <td>Nama Dosen</td>
              <td><input class="form-control" type="text" name="nama_dosen" size="20" required value="<?= $row['nama_dosen'] ?>"></td>
              <td>Status</td>
              <td>
                <select class="form-control" name="status" id="status" required>
                  <option value="">--Pilih Status--</option>
                  <option value="T" <?php if ($row['status'] == "T") {
                                      echo "selected";
                                    } ?>>Tetap</option>
                  <option value="LB" <?php if ($row['status'] == "LB") {
                                        echo "selected";
                                      } ?>>Luar Biasa</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Sex</td>
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
              <td>Agama</td>
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
              <td>Login</td>
              <td><input class="form-control" type="text" name="login" size="20" required value="<?= $row['login'] ?>"></td>
              <td>Password</td>
              <td><input class="form-control" type="password" name="password" size="20" required value="<?= $row['password'] ?>"></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input class="form-control" type="text" name="email" size="20" required value="<?= $row['email'] ?>"></td>

              <td>Kota</td>
              <td><input class="form-control" type="text" name="kota" size="20" required value="<?= $row['kota'] ?>"></td>
            </tr>
            <tr>
              <td>Nomor Handphone</td>
              <td><input class="form-control" type="text" name="no_hp" size="20" maxlength="12" required value="<?= $row['nohp'] ?>"></td>
              <td>Gaji</td>
              <td><input class="form-control" type="number" name="salary" size="20" required value="<?= $row['salary'] ?>"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td colspan="3"><textarea class="form-control" name="alamat" id="alamat" required><?= $row['alamat'] ?></textarea></td>
            </tr>
            <tr>
              <td>
                <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
              <td>
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