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
					<?php foreach ($data as $weekNumber => $weekDay) { ?>	
					<div class="card">
						<div class="card-body">
							<p class="card-text">
								<div class="row">
									<div class="col-md-10">
										<h5>Minggu Ke-<?= $weekNumber; ?></h5>
										<span><?= reset($weekDay)['set_date'] . ' sampai dengan ' . end($weekDay)['set_date']; ?></span> 
										<hr> 
										<?php 
											$isLaporanComplete = true;

											foreach ($weekDay as $dayData) {
												if (empty($dayData['kegiatan']) || empty($dayData['pengalaman'])) {
													$isLaporanComplete = false;
													break;
												}
											}

											if ($isLaporanComplete) { ?>
											<a href="<?= base_url('cetak/' . $weekNumber ); ?>" target="_blank"><button type="button" class="btn btn-soft-primary waves-effect waves-light"><i class="bx bx-printer font-size-16 align-middle me-2"></i>Cetak Log Book</button></a>
										<?php } else { ?>
											<a href="<?= base_url('siswa/logbook/waktu/minggu/harian/' . $weekNumber ); ?>">
												<button type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-task font-size-16 align-middle me-2"></i> Lengkapi Laporan Harian</button>
											</a>
										<?php } ?>
									</div>
									<div class="col-md-2">
										Progress Mengisi LogBook
									</div>
								</div>

							</p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div> <!-- container-fluid -->
	</div>
