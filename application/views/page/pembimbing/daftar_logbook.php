<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">

			<!-- start page title -->
			<?php $this->load->view('partials/breadcumb'); ?>
			<!-- end page title -->

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Default Datatable</h4>
						</div>
						<div class="card-body">

							<table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
								<thead>
									<tr>
										<th>No</th>
										<th>Waktu</th>
										<th>Hari</th>
										<th>File</th>
										<th>Lainnya</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
                                    foreach ($data as $weekNumber => $weekDay) {
										
										$isDataComplete = true;
										
                                        foreach ($weekDay as $dayData) {
	
                                            if (empty($dayData['kegiatan']) || empty($dayData['pengalaman'])) {
                                                $isDataComplete = false;
                                                break;
                                            }
                                        }

                                        if ($isDataComplete) { ?>
									<tr>
										<td><?= $no++ ?></td>
										<td>Minggu <?= $weekNumber ?></td>
										<td><?= reset($weekDay)['set_date'] . ' sampai dengan ' . end($weekDay)['set_date']; ?>
										</td>
										<td><a href="<?= base_url('cetakin/' . $weekNumber. '/'. $badge); ?>" target="_blank"><button
													type="button"
													class="btn btn-soft-primary waves-effect waves-light"><i
														class="bx bx-printer font-size-16 align-middle me-2"></i>Cetak
													Log Book</button></a></td>
										<td>
											<a href="<?= base_url('pembimbing/daftar_logbook/approve/' . $weekNumber); ?>">
												<button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">Pembimbing
													Materi</button>
											</a> 
												<button type="button"
												class="btn btn-warning btn-rounded waves-effect waves-light">Pembimbing
												Redaksi</button>
										</td>
									</tr>
									<?php }
                                    } ?>
								</tbody>
							</table>

						</div>
					</div>
				</div> <!-- end col -->
			</div> <!-- end row -->

		</div> <!-- container-fluid -->
	</div>
