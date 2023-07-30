	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data dashboard</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">dashboard</li>
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
							<h3> edit Data dashboard </h3>
						</div>

						<form action="<?php echo base_url() ?>dashboard/update" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama dashboard</label>
                                    <input type="text" class="form-control" id="nama_dashboard" name="nama_dashboard" value="<?= $detail['nama_dashboard'] ?>">
									<input type="hidden" class="form-control" id="id_dashboard" name="id_dashboard" value="<?= $detail ['id_dashboard']?>">
									
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