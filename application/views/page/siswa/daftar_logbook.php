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
                                                <td><?= reset($weekDay)['set_date'] . ' sampai dengan ' . end($weekDay)['set_date']; ?></td>
                                                <td><a href="<?= base_url('cetak/' . $weekNumber); ?>" target="_blank"><button type="button" class="btn btn-soft-primary waves-effect waves-light"><i class="bx bx-printer font-size-16 align-middle me-2"></i>Cetak Log Book</button></a></td>
                                                <td style="vertical-align: middle;">
													<?php if ($this->view->checkTrxStatus($weekDay[$weekNumber]['trxId'])->resPemMateri == 1) { ?>
														<h5><badge type="button" class="badge badge-lg bg-success">Sudah di Approve Materi</badge></h5>
													<?php }else { ?>
														<h5><badge type="button" class="badge badge-lg bg-danger">Menunggu Approval Materi</badge></h5>
													<?php } ?>
													<?php if ($this->view->checkTrxStatus($weekDay[$weekNumber]['trxId'])->resPemRedaksi == 1) { ?>
														<h5><badge type="button" class="badge badge-lg bg-success">Sudah di Approve Redaksi</badge></h5>
													<?php }else { ?>
														<h5><badge type="button" class="badge badge-lg bg-danger">Menunggu Approval Redaksi</badge></h5>
													<?php } ?>

                                                    
                                                    
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
