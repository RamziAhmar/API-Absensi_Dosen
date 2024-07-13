<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="col-sm-12">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Apakah anda akan hadir di jadwal :</h4>
                <p class="mt-3 mb-4 mb-lg-0"><strong><?= $jadwal['nama_matkul'] ?></strong> pada tanggal
                    <strong><?= $jadwal['tanggal'] ?></strong></p>
                <br>
                <a href="/absen/Hadir"
                    class="btn btn-inverse-primary <?= $absensi != null ? 'disabled' : null ?> btn-fw">Hadir</a>
                <a href="/absen/Tidak_Hadir"
                    class="btn btn-inverse-danger <?= $absensi != null ? 'disabled' : null ?> btn-fw">Tidak Hadir</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Vote -->
<div class="modal fade" id="absen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Vote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Apakah anda yakin?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/vote/" class="btn btn-danger">Vote</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>