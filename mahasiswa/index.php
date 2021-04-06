<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM mahasiswa");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Mahasiswa</h1>
    <?php if (checkRole() == 'admin') : ?>
      <a href="./create.php" class="btn btn-primary">Tambah Data</a>
    <?php endif; ?>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <?php if (checkRole() == 'admin') : ?>
                    <th style="width: 150">Aksi</th>
                  <?php endif; ?>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Agama</th>
                  <th>Gender</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th>Asal Sekolah</th>
                  <th>No HP</th>
                  <th>Login</th>
                  <th>Password</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr>
                    <?php if (checkRole() == 'admin') : ?>
                      <td>
                        <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?nim=<?= $data['nim'] ?>" onclick="return confirm('Are you sure you want to delete ?')">
                          <i class="fas fa-trash fa-fw"></i>
                        </a>
                        <a class="btn btn-sm btn-info" href="edit.php?nim=<?= $data['nim'] ?>">
                          <i class="fas fa-edit fa-fw"></i>
                        </a>
                      </td>
                    <?php endif; ?>
                    <td><?= $no ?></td>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama_mhs'] ?></td>
                    <td><?= $data['agama'] ?></td>
                    <td><?= $data['sex'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['kota'] ?></td>
                    <td><?= $data['asal_sekolah'] ?></td>
                    <td><?= $data['no_hp'] ?></td>
                    <td><?= $data['login'] ?></td>
                    <td><?= $data['password'] ?></td>
                    <td><?= $data['kode_prodi'] ?></td>
                  </tr>

                <?php
                  $no++;
                endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>