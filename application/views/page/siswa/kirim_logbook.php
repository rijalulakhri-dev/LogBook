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
					<div class="card">
						<div class="card-body">
							<form method="POST" action="<?= base_url($action); ?>" class="needs-validation" enctype="multipart/form-data">
								<div class="row g-3 mb-3">
									<div class="col-md-12">
										<label for="" class="form-label">Apa kegiatanmu hari
											ini?*</label>
										<textarea class="form-control" name="kegiatan"
											rows="3"></textarea>
									</div>
								</div>
								<div class="row g-3 mb-3">
									<div class="col-md-12">
										<label for="" class="form-label">Bagaimana
											pengalamanmu hari ini?*</label>
										<textarea class="form-control" name="pengalaman"
											rows="3"></textarea>
									</div>
								</div>

								<button type="submit" class="btn btn-primary waves-effect waves-light mt-3">
									<i class=" bx bx-navigation font-size-16 align-middle me-2"></i> Simpan
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- container-fluid -->
	</div>
