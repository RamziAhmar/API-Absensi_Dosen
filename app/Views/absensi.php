<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Absensi</h4>
            <div class="d-lg-flex align-items-center justify-content-between">
                <h1 class="font-weight-bold text-dark"></h1>
                <div class="mb-3">
                    <a href="/absensi/tambah" class="btn btn-inverse-primary btn-fw">Tambah <i class="mdi mdi-plus"></i> </a>
                </div>
            </div>

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
                        <?php $no = 1;
                        foreach ($absensi as $row) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->nama_lengkap ?></td>
                                <td><?= $row->tanggal ?></td>
                                <td><?= $row->status ?></td>
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