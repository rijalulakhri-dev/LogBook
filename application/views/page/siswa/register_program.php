<div class="main-content">

<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<?php $this->load->view('partials/breadcumb');
		?>


		<div class="row">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Biodata</h4>
						<p class="card-title-desc">Lengkapi data di bawah ini</p>
					</div>
					<div class="card-body p-4">
						
						<div class="row">
							<div class="col-lg-12">
								<div class="mt-4 mt-lg-0">
									<form action="<?= base_url($action); ?>" method="POST">
										<div class="row mb-4">
											<label for="" class="col-sm-3 col-form-label">NIM/NIS</label>
											<div class="col-sm-9">
											  <input type="text" class="form-control" name="nim">
											</div>
										</div>
										<div class="row mb-4">
											<label for="" class="col-sm-3 col-form-label">Lembaga Pendidikan</label>
											<div class="col-sm-9">
											  <input type="text" class="form-control" name="lembaga_pendidikan">
											</div>
										</div>
										<div class="row mb-4">
											<label for="" class="col-sm-3 col-form-label">Jurusan</label>
											<div class="col-sm-9">
											  <input type="text" class="form-control" name="jurusan">
											</div>
										</div>
										<div class="row mb-4">
											<label for="" class="col-sm-3 col-form-label">Departemen</label>
											<div class="col-sm-9">
											  <input type="text" class="form-control" name="departemen">
											</div>
										</div>
										<div class="row mb-4">
											<label for="" class="col-sm-3 col-form-label">Pembimbing Materi</label>
											<div class="col-sm-9">
											  <input type="text" class="form-control" name="pembimbing_materi">
											</div>
										</div>
										<div class="row mb-4">
											<label for="" class="col-sm-3 col-form-label">Pembimbing Redaksi</label>
											<div class="col-sm-9">
											  <input type="text" class="form-control" name="pembimbing_redaksi">
											</div>
										</div>
										<div class="row justify-content-end">
											<div class="col-sm-9">
												<div>
													<button type="submit" class="btn btn-primary w-md">Simpan</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>


	</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
