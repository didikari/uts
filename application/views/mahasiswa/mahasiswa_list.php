
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
          <ol class="breadcrumb">
              <li class="breadcrumb mr-3">
                <h1><?= $judul?></h1>
              </li>
              <li class="breadcrumb-item active mt-2 mb-0">
                <p>Control Panel</p>
              </li>
            </ol>
            <!-- tambah mahasiswa-->
            <button type="button" class="bg-primary"> <i class="fa fa-user-plus"></i> Tambah Mahasiswa</button>
            <!-- end tambah mahasiswa -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <i class="nav-icon fas  fa-tachometer-alt"></i> Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<!-- /.content-header -->
<table class="table table-striped ml-3">    
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no=1; 
    foreach ($mahasiswa as $mhs):?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $mhs['nama']?></td>
      <td><?= $mhs['nim']?></td>
      <td><?= $mhs['tanggal_lahir']?></td>
      <td><?= $mhs['jurusan']?></td>
      <td><?= $mhs['alamat']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  