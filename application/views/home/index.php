
  <body>
  
  <nav class="navbar navbar-dark bg-dark" style="background-image: url('./asset/bg.png');">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./asset/logo.png" alt="logo" width="125" height="125" class="d-inline-block align-text-top">
      </a>
			<a class="navbar-brand" href="<?php echo base_url('landing/logout');?>" onclick="return confirm('Anda yakin ingin logout?');" >
        <img src="./asset/icons/export.png" alt="logo" width="40" height="40" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>

  <div class="container mt-3">
    <h2 class="text-sm-center mb-5 fw-bold">DATA PASIEN CHIKA MEDIKA</h2>

    <?php if($this->session->flashdata('flash')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Pasien <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php endif; ?>

    <?php if(validation_errors()): ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-ungu btn-primary mb-3 float-right" data-toggle="modal" data-target="#tambah_modal">
      Tambah Data Pasien
    </button>
      
        <table class="display table table-striped table-borderless" id="tabeluser">
          <thead class="thead-dark">
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
              <th>No. Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php 
              foreach($pasien as $ps){ ?>
              <tr>
                <td><?=$ps->id_pasien?></td>
                <td><?=$ps->nama_pasien?></td>
                <td><?=$ps->tgl_lahir?></td>
                <td><?=$ps->alamat?></td>
                <td><?=$ps->no_telp?></td>
                
                <td class="text-center">
                  <a href="<?= base_url(); ?>home/detail/<?= $ps->id_pasien; ?>" id="set_dtl" class="btn btn-primary btn-sm" >
                    Detail
                  </a>
    
                  <input type="hidden" name="<?php echo base_url('home/hapus/'.$ps->id_pasien); ?>" value="<?=$ps->id_pasien?>">
                  <a href="<?php echo base_url('home/hapus/'.$ps->id_pasien); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data pasien?')" class="btn btn-danger btn-sm">
                    Delete
                  </a>
                  
                </td>
              </tr>
              <?php } ?>
          </tbody>

        </table>
  </div>
    
<!-- Modal Tambah Pasien -->
<div class="modal fade" id="tambah_modal" tabindex="-1" aria-labelledby="judulmodal_tambah" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color: #833761;" id="judulmodal_tambah">Menambah Data Pasien Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <?php if(validation_errors()): ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
        <?php endif; ?>

        <form action="<?php echo base_url(). 'home/tambah_aksi'; ?>" method="POST">

          <div class="form-group">
              <label for="nama"> <strong>Nama Lengkap Pasien</strong></label>
              <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-row">
              <div class="form-group col-md-3">
                  <label for="tgl_lahir"><strong>Tanggal Lahir</strong></label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
              </div>
              <div class="form-group col-md-6">
                  <label for="no_telp"> <strong>Nomor Telepon</strong></label>
                  <input type="text" class="form-control" id="no_telp" name="no_telp">
              </div>
              <div class="form-group col-md-3">
                  <label for="jk"><strong>Jenis Kelamin</strong></label>
                  <select class="form-control custom-select" id="jk" name="jk" >
                      <option>Pilih Jenis Kelamin</option>
                      <option>L</option>
                      <option>P</option>
                  </select>
              </div>
          </div>

          <div class="form-group">
              <label for="alamat"><strong>Alamat</strong></label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
          </div>
          
          <hr>
          
          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="anamnese"><strong>Anamnese</strong></label>
                  <textarea class="form-control" id="anamnese" name="anamnese" rows="3"></textarea>
              </div>

              <div class="form-group col-md-6">
                  <label for="nomenklatur"><strong>Nomenklatur</strong></label>
                  <textarea class="form-control" id="nomenklatur" name="nomenklatur" rows="3"></textarea>
              </div>
          </div>
          <hr>
          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="diagnosa"><strong>Diagnosa</strong></label>
                  <textarea class="form-control" id="diagnosa" name="diagnosa" rows="3"></textarea>
              </div>

              <div class="form-group col-md-6">
                  <label for="tindakan"><strong>Tindakan</strong></label>
                  <textarea class="form-control" id="tindakan" name="tindakan" rows="3"></textarea>
              </div>
          </div>

          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="resep"><strong>Resep</strong></label>
                  <textarea class="form-control" id="resep" name="resep" rows="3"></textarea>
              </div>

              <div class="form-group col-md-6">
                  <label for="keterangan"><strong>Keterangan</strong></label>
                  <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
              </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
    </div>
  </div>
</div>
<!-- Akhir Modal Tambah Pasien -->
