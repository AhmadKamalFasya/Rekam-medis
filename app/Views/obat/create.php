<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
	<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> FORM INPUT DATA OBAT</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Data Obat</h4>
              <hr>
              <form class="form-horizontal style-form" action="/obat/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group <?= ($validation->hasError('nama_obat')) ? 'has-error' : ''; ?>">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Obat</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama_obat" class="form-control round-form" autofocus value="<?= old('nama_obat'); ?>">
                    <?php if($validation->hasError('nama_obat') == true) { ?>
                     <p class="help-block"><?= $validation->getError('nama_obat'); ?></p>
                   <?php } ?>
                  </div>
                </div>
                <div class="form-group  <?= ($validation->hasError('jenis_obat')) ? 'has-error' : ''; ?>">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Obat</label>
                  <div class="col-sm-6">
                    <input type="text" name="jenis_obat" class="form-control round-form" autofocus value="<?= old('jenis_obat'); ?>">
                    <?php if($validation->hasError('jenis_obat')) { ?>
                      <p class="help-block"><?= $validation->getError('jenis_obat'); ?></p>
                    <?php } ?>
                  </div>
                </div>
                <button class="btn btn-info" type="submit">Submit</button>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>

<?= $this->endSection(); ?>