<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Jadwal</h4>
            <form class="forms-sample" method="post" action="/jadwal/insert">
                <div class="form-group">
                    <label for="exampleInputUsername1">Dosen</label>
                    <input name="id_dosen" type="text" class="form-control" id="exampleInputUser1" placeholder="Dosen">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">Matkul</label>
                    <input name="id_matkul" type="text" class="form-control" id="exampleInputNama1" placeholder="Matkul">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control" id="exampleInputTanggal1" placeholder="Tanggal">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">Jam Mulai</label>
                    <input name="jam_mulai" type="time" class="form-control" id="exampleInputEmail1" placeholder="Jam Mulai">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">Jam Selesai</label>
                    <input name="jam_selesai" type="time" class="form-control" id="exampleInputEmail1" placeholder="Jam Selesai">
                </div>
                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>