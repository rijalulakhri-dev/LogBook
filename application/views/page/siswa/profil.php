<div class="main-content">

<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<?php $this->load->view('partials/breadcumb'); ?>
		<!-- end page title -->

		<div class="row">
			<div class="col-xl-8 col-md-6">
				<!-- card -->
				<div class="card card-h-100">
					<!-- card body -->
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="flex-grow-1">
								<span class="text-muted mb-3 lh-1 d-block text-truncate">Master</span>
								<table>
									<?php foreach ($data as $d) { ?>
									<tr>
										<td class="f-w-700 text-dark" style="width:70%"><p class="fs-5">Nama</p></td>
										<td class="f-w-600 text-dark"><p class="fs-5">: <?= $d->namaB ?></p></td>
									</tr>
									<tr>
										<td class="f-w-700 text-dark" style="width:70%"><p class="fs-5">No Badge</p></td>
										<td class="f-w-600 text-dark"><p class="fs-5">: <?= $d->noBadgeB ?></p></td>
									</tr>
									<tr>
										<td class="f-w-700 text-dark" style="width:70%"><p class="fs-5">NIK</p></td>
										<td class="f-w-600 text-dark"><p class="fs-5">: <?= $d->nimB ?></p></td>
									</tr>
									<tr>
										<td class="f-w-700 text-dark" style="width:70%"><p class="fs-5">Lembaga Pendidikan</p></td>
										<td class="f-w-600 text-dark"><p class="fs-5">: <?= $d->pendidikanB ?></p></td>
									</tr>
									<tr>
										<td class="f-w-700 text-dark" style="width:70%"><p class="fs-5">Jurusan</p></td>
										<td class="f-w-600 text-dark"><p class="fs-5">: <?= $d->jurusanB ?></p></td>
									</tr>
									<tr>
										<td class="f-w-700 text-dark" style="width:70%"><p class="fs-5">Departemen</p></td>
										<td class="f-w-600 text-dark"><p class="fs-5">: <?= $d->departemenB ?></p></td>
									</tr>
									<tr>
										<td class="f-w-700 text-dark" style="width:70%"><p class="fs-5">Pembimbing Materi</p></td>
										<td class="f-w-600 text-dark"><p class="fs-5">: <?= $d->pemMateriB ?></p></td>
									</tr>
									<tr>
										<td class="f-w-700 text-dark" style="width:70%"><p class="fs-5">Pembimbing Redaksi</p></td>
										<td class="f-w-600 text-dark"><p class="fs-5">: <?= $d->pemRedaksiB ?></p></td>
									</tr>
									<?php } ?>
								</table>
							</div>
						</div>
					</div><!-- end card body -->
				</div><!-- end card -->
			</div><!-- end col -->
		</div>
	</div>
	<!-- container-fluid -->
</div>
<!-- End Page-content -->
