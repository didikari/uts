<div class="content-wrapper">
    <section class="content">
        <?php foreach($mahasiswa as $mhs):?>

            <form method="post" action="<?= base_url()?>mahasiswa/update">
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="hidden" name="id" value="<?= $mhs->id?>">
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $mhs->nama?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control" value="<?= $mhs->nim?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= $mhs->tanggal_lahir?>">
                    </div>
                    <div class="form-group">
                    <label for="nama">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" value="<?= $mhs->jurusan?>">
                            <option>Teknik Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Teknik Komputer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $mhs->alamat?>">
                    </div>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>

        <?php endforeach;?>
    
    
    </section>

</div>