<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
	<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> FORM INPUT DATA POLI</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Data Poli</h4>
              <hr>
              <form class="form-horizontal style-form" action="/poli/save" method="post">
              	<?= csrf_field();  ?>
                <div class="form-group <?= ($validation->hasError('nama_poli')) ? 'has-error' : ''; ?>">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Poli</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama_poli" class="form-control round-form" autofocus>
                    <?php if($validation->hasError('nama_poli') == true) { ?>
                      <p class="help-block"><?= $validation->getError('nama_poli'); ?></p>
                    <?php } ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status</label>
                  <div class="col-sm-6">
                    <select name="status" class="form-control round-form">
	                  <option value="1">Active</option>
	                  <option value="2">Non-Active</option>
	                </select>
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