<div class="main-content">

<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<?php $this->load->view('partials/breadcumb'); ?>
		<!-- end page title -->

		<div class="row">
			<div class="col-12">
				<?php $this->load->view('partials/alerts'); ?>
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Table Data User</h4>
					</div>
					<div class="card-body">

						<table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
							<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Nip/No Badge</th>
								<th>Jenis Kelamin</th>
								<th>Level</th>
								<th>Terdaftar</th>
							</tr>
							</thead>
							<tbody>
								<?php 
								$no = 1;
								foreach ($data as $d) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $d->nama ?></td>
									<td><?= $d->nomor_pengguna ?></td>
									<td><?= $d->jenisKelamin ?></td>
									<td><?= $d->level ?></td>
									<td><?= $d->terdaftar ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>

					</div>
				</div>
			</div> <!-- end col -->
		</div> <!-- end row -->

	</div> <!-- container-fluid -->
</div>
