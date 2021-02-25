<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

	<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> FORM INPUT DATA RESEP</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Data Resep</h4>
              <hr>
              <form class="form-horizontal style-form" action="/poli/save" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Rekam Medis ID</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama_poli" class="form-control round-form" readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Obat</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama_poli" class="form-control round-form" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Obat</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama_poli" class="form-control round-form" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Dosis</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama_poli" class="form-control round-form" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Cara Pakai</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama_poli" class="form-control round-form" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Obat</label>
                  <div class="col-sm-6">
                    <select name="status" class="form-control round-form">
	                  <option value="1">Active</option>
	                  <option value="2">Non-Active</option>
	                </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Obat</label>
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