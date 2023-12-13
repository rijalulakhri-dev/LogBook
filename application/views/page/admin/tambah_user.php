<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">

			<?php $this->load->view('partials/breadcumb'); ?>

			<div class="row">
				<div class="col-sm-8">
					<div class="card">
						<div class="card-body">

							<?php $this->load->view('partials/alerts'); ?>
							<?php echo validation_errors(); ?>
							<form method="POST" action="<?= base_url($action); ?>" class="needs-validation">
								<div class="row g-3">
									<div class="col-md-6 mb-3">
										<label class="form-label text-dark" for="">Nip/No Badge</label>
										<input class="form-control" name="nomor_pengguna" type="text" value="<?= set_value('nomor_pengguna'); ?>">
										<div class="form-text text-danger"><?= form_error('nomor_pengguna') ?></div>

									</div>
									<div class="col-md-6 mb-3">
										<label class="form-label text-dark" for="">Nama</label>
										<input class="form-control" name="nama" id="nama" type="text" value="<?= set_value('nama'); ?>">
										<div class="form-text text-danger"><?= form_error('nama') ?></div>
									</div>
								</div>
								<div class="row g-3">
									<div class="col-md-6 mb-3">
										<label class="form-label text-dark" for="">Password</label>
										<input class="form-control" name="password" id="password" type="password" value="<?= set_value('password'); ?>">
										<div class="form-text text-danger"><?= form_error('password') ?></div>
									</div>
									<div class="col-md-6">
										<label class="form-label text-dark" for="">Jenis Kelamin</label>
										<select class="form-select digits" name="jenis_kelamin" id="jenis_kelamin">
											<option value="" default>-- Pilih --</option>
											<option value="laki-laki">Laki - Laki</option>
											<option value="perempuan">Perempuan</option>
										</select>
										<div class="form-text text-danger"></div>
									</div>
								</div>
								<div class="row g-3">
									<div class="col-md-6 mb-3">
										<label class="form-label text-dark" for="">Level</label>
										<select class="form-select digits" name="level" id="level"
											onchange="showSubOptions()">
											<option value="0" default>-- Pilih --</option>
											<option value="1">Super Admin</option>
											<option value="2">Pembimbing</option>
											<option value="3">Siswa</option>
										</select>
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-6" id="subOptions" style="display: none;">
										<label class="form-label fw-bold">Sub Level Akses</label>
										<select class="form-select" name="subLevel" id="subLevel">
											<option default>--Pilih--</option>
											<option value="pembimbing redaksi">Pembimbing Redaksi</option>
											<option value="pembimbing materi">Pembimbing Materi</option>
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn-success waves-effect waves-light mt-3">
									<i class=" bx bx-navigation font-size-16 align-middle me-2"></i> Tambah
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- container-fluid -->
	</div>


	<script>
		function showSubOptions() {
			var levelSelect = document.getElementById("level");
			var subOptionsDiv = document.getElementById("subOptions");

			if (levelSelect.value === "2") {
				subOptionsDiv.style.display = "block";
			} else {
				subOptionsDiv.style.display = "none";
			}
		}
	</script>
