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
							<h3> Edit Data Tiket </h3>
						</div>

						<form action="<?php echo base_url() ?>pengaduan/update" method="post">
                            <div class="card-body">
								
								<div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Pengaduan</label>
                                    <input type="date" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan" value="<?= $detail['tgl_pengaduan'] ?>">
									<input type="hidden" class="form-control" id="id_pengaduan" name="id_pengaduan" value="<?= $detail ['id_pengaduan']?>">
								</div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">No Tiket</label>
                                    <input type="text" class="form-control" id="notiket_pengaduan" name="notiket_pengaduan" value="<?= $detail['notiket_pengaduan'] ?>" readonly>
                                </div>

								<div class="form-group">
                      				<label for="exampleInputEmail1">Nama Pelanggan :</label>
                      				<select id="id_pelanggan" name="id_pelanggan" class="form-control" required>
										<option value="<?= $detail['id_pelanggan'] ?>"><?= $detail['nama_pelanggan'] ?></option>
									    <option value="">- Pilih -</option>
										<?php foreach($pelanggan as $row){ ?>
										<option value="<?= $row->id_pelanggan ?>"><?= $row->nama_pelanggan ?></option>
										<?php } ?>
									</select>
                    			</div>

								<div class="form-group">
                        			<label for="exampleInputEmail1">Nama Type</label>
                        			<select id="id_type" name="id_type" class="form-control" required>
										<option value="<?= $detail['id_type'] ?>"><?= $detail['nama_type'] ?></option>
										    <option value="">- Pilih -</option>
										    <?php foreach($type as $row){ ?>
											  <option value="<?= $row->id_type ?>"><?= $row->nama_type ?></option>
										    <?php } ?>
									</select>
                    			</div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kategori</label>
                                    <select id="id_kategori" name="id_kategori" class="form-control" required>
										<option value="<?= $detail['id_kategori'] ?>"><?= $detail['nama_kategori'] ?></option>
										<option value="">- Pilih -</option>
									</select>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Judul Pengaduan</label>
                                    <input type="text" class="form-control" id="judul_pengaduan" name="judul_pengaduan" value="<?= $detail['judul_pengaduan'] ?>" required>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <textarea type="text" class="form-control" id="deskripsi_pengaduan" name="deskripsi_pengaduan" rows="10" required><?= $detail['deskripsi_pengaduan'] ?></textarea>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Detail Perbaikan</label>
                                    <textarea type="text" class="form-control" id="perbaikan_pengaduan" name="perbaikan_pengaduan" rows="10" required><?= $detail['perbaikan_pengaduan'] ?></textarea>
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