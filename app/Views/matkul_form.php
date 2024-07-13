<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Matkul</h4>
            <form class="forms-sample" method="post" action="/matkul/insert">
                <div class="form-group">
                    <label for="exampleInputUsername1">Mata Kuliah</label>
                    <input name="nama_matkul" type="text" class="form-control" id="exampleInputUser1" placeholder="Mata Kuliah">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">SKS</label>
                    <input name="sks" type="text" class="form-control" id="exampleInputSKS1" placeholder="SKS">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" id="exampleInputKeterangan1" placeholder="Keterangan">
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