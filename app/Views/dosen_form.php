<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form User</h4>
            <form class="forms-sample" method="post" action="/dosen/insert">
                <div class="form-group">
                    <label for="exampleInputUsername1">User</label>
                    <input name="id_user" type="text" class="form-control" id="exampleInputUser1" placeholder="User">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">Nama</label>
                    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputNama1" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">Email</label>
                    <input name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">No HP</label>
                    <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" placeholder="No HP">
                </div>
                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>