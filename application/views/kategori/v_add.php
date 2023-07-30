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
							<h3> Tambah Data Kategori </h3>
						</div>

						<form action="<?php echo base_url() ?>kategori/insert" method="post">
                            <div class="card-body">


								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Type</label>
                                    <select id="id_type" name="id_type" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($type as $row){ ?>
											<option value="<?= $row->id_type ?>"><?= $row->nama_type ?></option>
										<?php } ?>
									</select>
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
                                    <label for="exampleInputEmail1">Nama Kategori</label>
                                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Teknisi</label>
                                    <input type="text" class="form-control" id="nama_teknisi" name="nama_teknisi">
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