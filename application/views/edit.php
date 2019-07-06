<div class="content-wrapper">
    <section class="content">
        <?php foreach ($mahasiswa as $mhs) : ?>
            <?= form_open_multipart('mahasiswa/tambah_aksi'); ?>
            <input type="hidden" name="id" class="form-control" value="<?= $mhs->id; ?>">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $mhs->nama; ?>">
            </div>
            <div class="form-group">
                <label for="">Nim</label>
                <input type="text" name="nim" class="form-control" value="<?= $mhs->nim; ?>">
            </div>
            <div class="form-group">
                <label for="">Jurusan</label>
                <select name="jurusan" class="form-control" value="<?= $mhs->jurusan; ?>" id="">
                    <option value="<?= $mhs->jurusan; ?>"><?= $mhs->jurusan; ?></option>
                    <option>Teknik Informatika</option>
                    <option>Teknik Industri</option>
                    <option>Teknik Mesin</option>
                    <option>Teknik Kimia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $mhs->alamat; ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $mhs->email; ?>">
            </div>
            <div class="form-group">
                <label for="">No Telpon</label>
                <input type="text" name="no_telp" class="form-control" value="<?= $mhs->no_telp; ?>">
            </div>
            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="foto" value="<?= $mhs->foto; ?>" class="form-control-file">
            </div>
            <a href="<?= base_url('mahasiswa/index'); ?>" class="btn btn-primary">Kembali</a>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-success">Simpan</button>
            <?= form_close(); ?>
        <?php endforeach; ?>
    </section>
</div>