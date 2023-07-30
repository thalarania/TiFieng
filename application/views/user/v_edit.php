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
							<h3> Edit Data User </h3>
						</div>

						<form action="<?php echo base_url() ?>user/update" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama user</label>
                                    <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $detail['nama_user'] ?>">
									<input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= $detail ['id_user']?>">
								</div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Email User</label>
                                    <input type="text" class="form-control" id="email_user" name="email_user" value="<?= $detail['email_user'] ?>">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Password User</label>
                                    <input type="text" class="form-control" id="password_user" name="password_user" value="<?= $detail['password_user'] ?>">
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