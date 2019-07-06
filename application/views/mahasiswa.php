<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Mahasiswa
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Mahasiswa</li>
        </ol>
    </section>

    <section class="content">
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambahdata"> <i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Jurusan</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php $no = 1;
            foreach ($mahasiswa as $mhs) :
                ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td>
                        <?= $mhs->nama ?>
                    </td>
                    <td>
                        <?= $mhs->nim ?>
                    </td>
                    <td>
                        <?= $mhs->jurusan ?>
                    </td>
                    <td onclick=" javascript : return confirm('Anda Yakin Menghapus?');">
                        <?= anchor('mahasiswa/hapus/' . $mhs->id, '<div class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </div>'); ?>
                    </td>
                    <td>
                        <?= anchor('mahasiswa/edit/' . $mhs->id, '<div class="btn btn-success btn-sm">
                            <i class="fa fa-edit"></i>
                        </div>'); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Form Input Data Mahasiswa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'mahasiswa/tambah_aksi' ?>" method="post">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nim</label>
                            <input type="text" name="nim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <select name="jurusan" class="form-control" id="">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Kimia">Teknik Kimia</option>
                            </select>
                        </div>
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>