<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

	<section id="main-content">
      <section class="wrapper">

        <h3><i class="fa fa-angle-right"></i> DATA POLI</h3>
        <div class="row mt">
          <div class="col-md-12">
          	<div class="card" style="width: 18rem;">
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">Nama Poli : <?= $poli['nama_poli']; ?></li>
			    <li class="list-group-item">
			    	<?php if($poli['status'] == 1) { echo "status aktif"; }else{ echo "sfs"; } ?>
			    </li>
			    
			  </ul>
			</div>
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
  </section>

<?= $this->endSection(); ?>