	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h3>Data Pelanggan</h3>
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
							<h5> Tambah Data Pelanggan </h5>
						</div>

						<form action="<?php echo base_url() ?>pelanggan/insert" method="post">
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

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Pelanggan</label>
                                    <input type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" required>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Wilayah</label>
                                    <select id="id_wilayah" name="id_wilayah" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($wilayah as $row){ ?>
											<option value="<?= $row->id_wilayah ?>"><?= $row->nama_wilayah ?></option>
										<?php } ?>
									</select>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">No Telp Pelanggan</label>
                                    <input type="number" class="form-control" id="notlp_pelanggan" name="notlp_pelanggan" required>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Email Pelanggan</label>
                                    <input type="text" class="form-control" id="email_pelanggan" name="email_pelanggan" required>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Password Pelanggan</label>
                                    <input type="password" class="form-control" id="password_pelanggan" name="password_pelanggan" required>
                                </div>
                                
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-newprimary">Submit</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>