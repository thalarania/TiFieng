	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h3>Data Type</h3>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Type</li>
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
							<h5> Edit Data Type </h5>
						</div>

						<form action="<?php echo base_url() ?>type/update" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Type</label>
                                    <input type="text" class="form-control" id="nama_type" name="nama_type" value="<?= $detail['nama_type'] ?>" required>
									<input type="hidden" class="form-control" id="id_type" name="id_type" value="<?= $detail ['id_type']?>">
									
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