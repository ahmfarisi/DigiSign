<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    DIGITAL SIGNATURE
                </h3>
            </div>
			<div class="box-body">
				<!-- Small boxes (Stat box) -->
				<div class="row">

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3><?=$token['jumlah']?></h3>

                                <p>TOKEN<br/>DIBUAT</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-building"></i>
                            </div>
                            <a href="<?=site_url('token/index')?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3><?=$visited['jumlah']?></h3>

                                <p>VERIFIKASI<br/>TOKEN</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <a href="<?=site_url('token/index')?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>



				</div>
				<!-- /.row -->
			</div>
        </div>
    </div>
</div>
