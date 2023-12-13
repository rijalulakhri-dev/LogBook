

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
										<th>NIM</th>
										<th>Nama Mahasiswa</th>
										<th>Durasi Magang</th>
										<th>Lainnya</th>
									</tr>
								</thead>
								<tbody>
									<?php $start = 1; foreach ($load as $d) { 
										if ($this->logic->getDurasiMagang($d->noBadgeB) != null) { ?>
									<tr>
										<td><?= $start++ ?></td>
										<td><?= $d->nimB ?></td>
										<td><?= $d->namaB ?></td>
										<td><?= $this->logic->getDurasiMagang($d->noBadgeB)->week_number ?> Minggu</td>
										<td><a href="">
												<span
													class="btn btn-soft-primary btn-sm waves-effect waves-light">Lihat</span>
										</td>
										</a>
									</tr>
									<?php }}?>

								</tbody>
							</table>

						</div>
					</div>
				</div> <!-- end col -->
			</div> <!-- end row -->

		</div> <!-- container-fluid -->
	</div>
