	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h4>Data Wilayah</h4>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Wilayah</li>
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
							<h5> Edit Data Wilayah </h5>
						</div>

						<form action="<?php echo base_url() ?>wilayah/update" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Wilayah</label>
                                    <input type="text" class="form-control" id="nama_wilayah" name="nama_wilayah" value="<?= $detail['nama_wilayah'] ?>">
									<input type="hidden" class="form-control" id="id_wilayah" name="id_wilayah" value="<?= $detail ['id_wilayah']?>">
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