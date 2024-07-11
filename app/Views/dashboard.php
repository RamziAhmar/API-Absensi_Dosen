<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="col-sm-12">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                
                <h4 class="card-title">Apakah anda akan hadir di jadwal :</h4>
                <p class="mt-3 mb-4 mb-lg-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <br>
                <button type="button" class="btn btn-inverse-primary btn-fw">Hadir</button>
                <button type="button" class="btn btn-inverse-danger btn-fw">Tidak Hadir</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>