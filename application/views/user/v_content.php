	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data User</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">User</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<a href="<?= base_url() ?>user/add" class="btn btn-newprimary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
						</div>

						<div class="card-body">
							<?php
							echo validation_errors('<div class="alert alert-danger alert-dismissible">','</div>');
							if ($this->session->flashdata('success'))
							{
								echo '<div class="alert alert-success alert-dismissible " role="alert">';
								echo $this->session->flashdata('success');
								echo '</div>';
							}
							if ($this->session->flashdata('error'))
							{
								echo '<div class="alert alert-danger alert-dismissible " role="alert">';
								echo $this->session->flashdata('error');
								echo '</div>';
							}
							?>
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama User</th>
										<th>Email User</th>
										<th>Password User</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody style="font-weight: 500;">
                                    <?php $no=1; foreach($tabel as $row){ ?>
                                        <tr>
											<td><?= $no++ ?></td>
											<td><?= $row->nama_user ?></td>
											<td><?= $row->email_user ?></td>
											<td><?= $row->password_user ?></td>
											<td>
												<a href="<?= base_url(); ?>user/edit/<?= $row->id_user ?>" type="submit" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i></a>

												<a type="submit" class="btn btn-danger btn-sm btnhapus" data-id="<?= $row->id_user ?>" style="color: white;"><i class="fa fa-trash"></i> </a>


											</td>
                                        </tr>
                                    <?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>