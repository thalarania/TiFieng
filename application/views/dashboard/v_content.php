	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Dashboard</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

  <section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $jumlah_pengaduan ?></h3>
                <p>Total Tiket</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?= base_url() ?>pengaduan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $jumlah_waiting ?></h3>
                <p>Total Waiting Approval</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url() ?>pengaduan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $jumlah_progress ?></h3>
                <p>Total Progress</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?= base_url() ?>pengaduan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $jumlah_solved ?></h3>

                <p>Total Solved</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= base_url() ?>pengaduan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

    </div>
  </section>
