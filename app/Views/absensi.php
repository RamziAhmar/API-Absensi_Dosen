<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Absensi</h4>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                No
              </th>
              <th>
                Dosen
              </th>
              <th>
                Jadwal
              </th>
              <th>
                Status
              </th>
              <th>
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach($absensi as $row){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row['id_dosen'] ?></td>
              <td><?= $row['id_jadwal'] ?></td>
              <td><?= $row['status'] ?></td>
              <td></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>