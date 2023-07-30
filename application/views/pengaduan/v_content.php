	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Tiket</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Tiket</li>
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
							<?php if($this->session->userdata('level') == 'Admin'){ ?>
							<a href="<?= base_url() ?>pengaduan/add" class="btn btn-newprimary btn-sm btntambahkriteria"><i class="fa fa-plus"></i> Tambah Data</a>
							<?php } ?>
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
										<th>No Tiket</th>
										<th>Tanggal</th>
										<th>Pelanggan </th>
										<th>Judul</th>
										<th>Deskripsi</th>
										<th>Type</th>
										<th>Kategori</th>
										<th>Teknisi</th>
										<th>Status</th>
										<th width="20%">Aksi</th>
									</tr>
								</thead>
								<tbody style="font-weight: 500;">
                                    <?php $no=1; foreach($tabel as $row){ 
										if($row->status_pengaduan == 'Menunggu Konfirmasi'){
											$badge = '
												<span class="badge badge-warning">'.$row->status_pengaduan.'</span>
											';

											if($this->session->userdata('level') == 'Admin'){
												$tombol = '
													<a type="submit" class="btn btn-sm btn-success btnkonfirmasi" data-id="'.$row->id_pengaduan.'" style="color: white;"><i class="fa fa-paper-plane"></i></a>
												';
											}else{
												$tombol = '';
											}
											
										}elseif($row->status_pengaduan == 'Dikonfirmasi'){
											$badge = '
												<span class="badge badge-info">'.$row->status_pengaduan.'</span>
											';

											if($this->session->userdata('level') !== 'Admin'){
												$tombol = '
													<a type="submit" class="btn btn-sm btn-success btnselesai" data-id="'.$row->id_pengaduan.'" style="color: white;"><i class="fa fa-check"></i></a>
												';
											}else{
												$tombol = '';
											}

											
										}else{
											$badge = '
												<span class="badge badge-success">'.$row->status_pengaduan.'</span>
											';

											$tombol = '
												
											';
										}
									?>
                                        <tr>
											<td><?= $no++ ?></td>
											<td><?= $row->notiket_pengaduan ?></td>
											<td><?= shortdate_indo($row->tgl_pengaduan) ?></td>
											<td><?= $row->nama_pelanggan ?></td>
											<td><?= $row->judul_pengaduan ?></td>
											<td><?= $row->deskripsi_pengaduan ?></td>
											<td><?= $row->nama_type ?></td>
											<td><?= $row->nama_kategori ?></td>
											<td><?= $row->nama_teknisi ?></td>
											<td><?= $badge ?></td>
											
											<td>
												<?php if($this->session->userdata('level') == 'Admin'){ ?>
													<a href="<?= base_url(); ?>pengaduan/edit/<?= $row->id_pengaduan ?>" type="submit" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i></a>

													<a type="submit" class="btn btn-sm btn-danger btnhapus" data-id="<?= $row->id_pengaduan ?>" style="color: white;"><i class="fa fa-trash"></i></a>
												<?php } ?>

												<a type="submit" class="btn btn-sm btn-info btnlihat" data-id="<?= $row->id_pengaduan ?>" style="color: white;"><i class="fa fa-eye"></i></a>

												<?= $tombol ?>

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

<div id="modalshow" class="modal">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail Tiket</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body" id="detail">
				
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>