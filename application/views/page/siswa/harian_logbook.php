<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">

			<?php $this->load->view('partials/breadcumb'); ?>


			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<h5 class="card-header bg-transparent border-bottom text-uppercase">Petunjuk</h5>
						<div class="card-body">
							<p class="card-text">
								<ol>
									<li>Isi kegiatan dan pengalaman anda secara singkat di kolom yang tersedia. Jangan
										lupa lampirkan foto kegiatan.
									</li>
								</ol>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?php foreach ($data as $d) { ?>
					<div class="card">
						<div class="card-body">
						<p class="card-text">
							<h5><?= $d->set_date ?></h5>
							<hr><a href="<?= base_url('siswa/logbook/kirim_logbook'); ?>">
								<button type="button" class="btn btn-soft-primary waves-effect waves-light"><i class="bx bx-plus font-size-16 align-middle me-2"></i> BUAT LAPORAN HARIAN</button>
							</a>
							</p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div> <!-- container-fluid -->
	</div>