<body>
    
    <!-- Header -->
    <nav class="navbar navbar-dark bg-dark" style="background-image: url('/chikamedika/asset/bg.png');">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>asset/logo.png" alt="logo" width="125" height="125" class="d-inline-block align-text-top">
            </a>
            
            <a class="navbar-brand" href="<?php echo base_url('landing/logout');?>" onclick="return confirm('Anda yakin ingin logout?');" >
                <img src="<?= base_url(); ?>asset/icons/export.png" alt="logo" width="40" height="40" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>
    <!-- Akhir Header -->

    <div class="container mb-3">
        <div class="row mt-3 mx-auto">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2 class="card-title text-center" style="color: #833761 ;">Tambah Visit Pasien</h2>
                        </div>

                        <form action="<?= base_url(); ?>home/tambah_visit/<?= $pasien['id_pasien']; ?>" method="POST">
                            <hr>

                            <?php if(validation_errors()): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>
                            
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

                            <button onclick="window.history.back();" type="button" class="btn btn-secondary">Kembali</button>
                            
                            <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>