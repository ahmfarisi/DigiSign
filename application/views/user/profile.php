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
                    Ubah Profil
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
            <?php echo form_open('user/profile/'.$user['id']); ?>
            <div class="box-body">
                <div class="row clearfix">

                    <div class="col-md-6">
                        <label for="nama" class="control-label">Nama</label>
                        <div class="form-group">
                            <input type="text" name="nama" value="<?php echo $user['nama']; ?>" class="form-control" id="nama"/>
                            <?=form_error('nama')?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="username" class="control-label">Username</label>
                        <div class="form-group">
                            <input type="text" name="username" value="<?php echo $user['username']; ?>" class="form-control" id="username"/>
                            <?=form_error('username')?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="control-label">Password</label>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="password"/>
                            <p class="help-block">Kosongkan jika tidak ingin mengubah password</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check"></i> &nbsp; Ubah
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?php
