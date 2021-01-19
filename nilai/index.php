<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM nilai");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Nilai</h1>
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
                  <th>MK ID</th>
                  <th>Kode Prodi</th>
                  <th>Inisial</th>
                  <th>Nilai UTS</th>
                  <th>Nilai UAS</th>
                  <th>Nilai Akhir</th>
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
                        <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?kode_prodi=<?= $data['kode_prodi'] ?>">
                          <i class="fas fa-trash fa-fw"></i>
                        </a>
                        <a class="btn btn-sm btn-info" href="edit.php?kode_prodi=<?= $data['kode_prodi'] ?>">
                          <i class="fas fa-edit fa-fw"></i>
                        </a>
                      </td>
                    <?php endif; ?>
                    <td><?= $no ?></td>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['mk_id'] ?></td>
                    <td><?= $data['kode_prodi'] ?></td>
                    <td><?= $data['Inisial'] ?></td>
                    <td><?= $data['Nilai_UTS'] ?></td>
                    <td><?= $data['Nilai_UAS'] ?></td>
                    <td><?= $data['Nilai_akhir'] ?></td>
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