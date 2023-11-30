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
								<h2 class="mb-3">Welcome, <?= ucfirst($this->session->userdata('nama')); ?>!</h2>
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
