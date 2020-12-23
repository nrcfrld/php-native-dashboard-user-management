<?php
session_start();
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM dosen");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Dosen</h1>
    <a href="./create.php" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th style="width: 150">Aksi</th>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Inisial</th>
                  <th>Nama dosen</th>
                  <th>Status</th>
                  <th>Gender</th>
                  <th>Agama</th>
                  <th>Login</th>
                  <th>Email</th>
                  <th>Kota</th>
                  <th>No. Hp</th>
                  <th>Gaji</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?nik=<?= $data['nik'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="delete.php?nik=<?= $data['nik'] ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                    </td>
                    <td><?= $no ?></td>
                    <td><?= $data['nik'] ?></td>
                    <td><?= $data['inisial'] ?></td>
                    <td><?= $data['nama_dosen'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td><?= $data['sex'] ?></td>
                    <td><?= $data['agama'] ?></td>
                    <td><?= $data['login'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['kota'] ?></td>
                    <td><?= $data['nohp'] ?></td>
                    <td><?= $data['salary'] ?></td>
                    <td><?= $data['alamat'] ?></td>
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