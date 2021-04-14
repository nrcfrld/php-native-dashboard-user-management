<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Dosen</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST" id="form-dosen">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>NIK</td>
                <td><input class="form-control" type="number" name="nik" size="20" required>

                </td>
                <td>Inisial</td>
                <td><input class="form-control" type="text" name="inisial" size="20" maxlength="3" required></td>
              </tr>
              <tr>
                <td>Nama Dosen</td>
                <td><input class="form-control" type="text" name="nama_dosen" size="20" required></td>
                <td>Status</td>
                <td>
                  <select class="form-control" name="status" id="status" required>
                    <option value="">--Pilih Status--</option>
                    <option value="T">Tetap</option>
                    <option value="LB">Luar Biasa</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>
                  <select class="form-control" name="sex" id="sex" required>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="L">Pria</option>
                    <option value="P">Wanita</option>
                  </select>
                </td>
                <td>Agama</td>
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
                <td>Email</td>
                <td><input class="form-control" type="text" name="email" size="20" required></td>

                <td>Kota</td>
                <td><input class="form-control" type="text" name="kota" size="20" required></td>
              </tr>
              <tr>
                <td>Nomor Handphone</td>
                <td><input class="form-control" type="text" name="no_hp" size="20" maxlength="13" required></td>
                <td>Gaji</td>
                <td><input class="form-control" type="number" name="salary" size="20" required></td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control datepicker" name="birth_date" value="" id="date" required>
                    <div class="input-group-append">
                      <label class="input-group-text" for="date">
                        <i class="fas fa-calendar-day"></i>
                      </label>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td colspan="3"><textarea class="form-control" name="alamat" id="alamat" required></textarea></td>
              </tr>
              <tr>
                <td>Login</td>
                <td><input class="form-control" type="text" name="login" size="20" required></td>
              </tr>
              <tr>
                <td>Password</td>
                <td>
                  <div class="form-group mb-0">
                    <input id="password" class="form-control" type="password" name="password" size="20" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="show-password">
                    <label class="form-check-label" for="flexCheckDefault">
                      Tampilkan
                    </label>
                  </div>
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
$scripts = [
  <<< EOD
  <script>
    $(document).ready(function(){
      $("#form-dosen").validate({
        errorClass: "is-invalid",
      })

      $("#show-password").click(function(){
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      });

      $("#password").password({});
    })
  </script>
  EOD
];

require_once '../layout/_bottom.php';
?>