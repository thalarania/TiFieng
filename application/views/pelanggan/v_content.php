	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Pelanggan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Pelanggan</li>
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
							<a href="<?= base_url() ?>pelanggan/add" class="btn btn-newprimary btn-sm btntambahkriteria"><i class="fa fa-plus"></i> Tambah Data </a>
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
										<th>Nama Pelanggan</th>
										<th>Alamat Pelanggan</th>
										<th>Wilayah </th>
										<th>No Telp Pelanggan</th>
										<th>Email Pelanggan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody style="font-weight: 500;">
                                    <?php $no=1; foreach($tabel as $row){ ?>
                                        <tr>
											<td><?= $no++ ?></td>
											<td><?= $row->nama_pelanggan ?></td>
											<td><?= $row->alamat_pelanggan ?></td>
											<td><?= $row->nama_wilayah ?></td>
											<td><?= $row->notlp_pelanggan ?></td>
											<td><?= $row->email_pelanggan ?></td>
											
											<td>

												<a href="<?= base_url(); ?>pelanggan/edit/<?= $row->id_pelanggan ?>" type="submit" class="btn btn-warning" ><i class="icofont icofont-edit"></i> Edit</a>

												<a type="submit" class="btn btn-danger btnhapus" data-id="<?= $row->id_pelanggan ?>" style="color: white;"><i class="icofont icofont-trash"></i> Hapus</a>

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