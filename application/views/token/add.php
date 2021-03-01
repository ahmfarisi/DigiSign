<!-- jQuery 2.2.3 -->
<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>

<script>
    $(function () {
        $('.select2').select2();
    })

</script>

<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">
					Tambah Token
					<?php
					$message = $this->session->flashdata('message');
					if(isset($message)){
						?>
						<span class="alert fade in" role="alert"> <?=$message?> </span>
						<?php
					}
					?>
				</h3>
			</div>
			<?php echo form_open('token/add'); ?>
			<div class="box-body">
				<div class="row clearfix">

                    <div class="col-md-6">
                        <label for="nama" class="control-label">Token Di-Request Oleh</label>
                        <div class="form-group">
                            <input type="text" name="request_by" value="<?php echo $this->input->post('request_by'); ?>" class="form-control" id="request_by"/>
                            <?=form_error('request_by')?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="needs" class="control-label">Kebutuhan Token</label>
                        <div class="form-group">
							<textarea class="form-control" name="needs" id="needs"><?php echo $this->input->post('needs'); ?></textarea>
                            <?=form_error('needs')?>
                        </div>
                    </div>

				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">
					<i class="fa fa-check"></i> &nbsp; Simpan
				</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
<?php
