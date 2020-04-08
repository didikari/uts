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
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus"></i> Tambah Mahasiswa
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url()?>mahasiswa/tambah_mahasiswa">
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option>Teknik Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Teknik Komputer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <table class="table table-striped ml-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Alamat</th>
                    <th colspan="2" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no=1; 
            foreach ($mahasiswa as $mhs):?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $mhs->nama?></td>
                    <td><?= $mhs->nim?></td>
                    <td><?= $mhs->tanggal_lahir ?></td>
                    <td><?= $mhs->jurusan?></td>
                    <td><?= $mhs->alamat?></td>
                    <td onclick="javascript: return confirm('Anda yakin ingin menghapusnya')"><?= anchor('mahasiswa/hapus/'.$mhs->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></<i></div>')?></td>
                    <td><?= anchor('mahasiswa/edit/'.$mhs->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></<i></div>')?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>

    