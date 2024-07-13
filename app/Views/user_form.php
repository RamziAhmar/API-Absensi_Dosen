<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form User</h4>
            <form class="forms-sample" method="post" action="/user/insert">
                <div class="form-group">
                    <label for="exampleInputUsername1">Username</label>
                    <input name="username" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Akses</label>
                    <select name="akses" id="akses" class="form-control">
                        <option>Pilih</option>
                        <option value="1">Admin</option>
                        <option value="2">Guru</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>