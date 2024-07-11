<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Striped Table</h4>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                No
              </th>
              <th>
                username
              </th>
              <th>
                Password
              </th>
              <th>
                Akses
              </th>
              <th>
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach($user as $row){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row['username'] ?></td>
              <td><?= $row['password'] ?></td>
              <td><?= $row['akses'] ?></td>
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