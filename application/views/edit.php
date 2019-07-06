<div class="content-wrapper">
    <section class="content">
        <?php foreach ($mahasiswa as $mhs) : ?>
            <form action="<?= base_url() . 'mahasiswa/update'; ?> " method="post">
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
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php endforeach; ?>
    </section>
</div>