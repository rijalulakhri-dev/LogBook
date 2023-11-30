<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<?php $this->load->view('partials/breadcumb'); ?>
			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<h5 class="card-header bg-transparent border-bottom text-uppercase">Petunjuk</h5>
						<div class="card-body">
							<p class="card-text">
								<ol>
									<li>Isi data sesuai dengan tanggal dan waktu yang sudah ditentukan</li>
								</ol>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<div class="card">
						<div class="card-body">
							<form method="POST" action="<?= base_url($action); ?>" class="needs-validation">
								<div class="row">
									<div class="col-lg-12">
										<div class="mt-4 mt-lg-0">
											<div class="row mb-4">
												<label for="" class="col-sm-3 col-form-label">Waktu Mulai</label>
												<div class="col-sm-9">
													<input type="date" class="form-control" name="waktu_mulai">
												</div>
											</div>
											<div class="row mb-4">
												<label for="" class="col-sm-3 col-form-label">Waktu Berakhir</label>
												<div class="col-sm-9">
													<input type="date" class="form-control" name="waktu_berakhir">
												</div>
											</div>
										</div>
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
