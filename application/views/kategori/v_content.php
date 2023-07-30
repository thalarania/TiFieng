	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Kategori</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Kategori</li>
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
							<a href="<?= base_url() ?>kategori/add" class="btn btn-newprimary btn-sm btntambahkriteria"><i class="fa fa-plus"></i> Tambah Data</a>
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
										<th>Nama Type </th>
										<th>Nama Wilayah </th>
										<th>Nama Kategori </th>
										<th>Nama Teknisi </th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody style="font-weight: 500;">
                                    <?php $no=1; foreach($tabel as $row){ ?>
                                        <tr>
											<td><?= $no++ ?></td>
											<td><?= $row->nama_type ?></td>
											<td><?= $row->nama_wilayah ?></td>
											<td><?= $row->nama_kategori ?></td>
											<td><?= $row->nama_teknisi ?></td>
											<td>

												<a href="<?= base_url(); ?>kategori/edit/<?= $row->id_kategori ?>" type="submit" class="btn btn-warning" ><i class="icofont icofont-edit"></i> Edit</a>


												<a type="submit" class="btn btn-danger btnhapus" data-id="<?= $row->id_kategori ?>" style="color: white;"><i class="icofont icofont-trash"></i> Hapus</a>

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