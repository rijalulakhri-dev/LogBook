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
								<th>Bulan</th>
								<th>Minggu</th>
								<th>Hari</th>
								<th>waktu</th>
								<th>File</th>
								<th>Lainnya</th>
							</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Juli</td>
									<td>3</td>
									<td>18</td>
									<td>2023 - juli - 20</td>
									<td>logbook.pdf</td>
									<td><button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">Approve File</button></td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div> <!-- end col -->
		</div> <!-- end row -->

	</div> <!-- container-fluid -->
</div>
