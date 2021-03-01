<!-- jQuery 2.2.3 -->
<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>

<script>
    $(function () {
        var t = $('#datatable').DataTable();

        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    })
</script>

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">
					Data Token
					<?php
					$message = $this->session->flashdata('message');
					if(isset($message)){
						?>
						<span class="alert fade in" role="alert"> <?=$message?> </span>
						<?php
					}
					?>
				</h3>

                <div class="box-tools">
                    <a href="<?php echo site_url('token/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> &nbsp; Tambah</a>
                </div>
			</div>
			<div class="box-body">
				<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" width="100%">
					<thead>
					<tr>
						<th>No</th>
						<th>Date</th>
                        <th>Request By</th>
                        <th>Needs</th>
                        <th>Token</th>
                        <th>Qr Code</th>
                        <th>Visited Count</th>
						<th>Actions</th>
					</tr>
					</thead>

					<tbody>
					<?php foreach($token as $t){
						?>
						<tr>
							<td></td>
                            <td><?=convert_timestamp($t['created_on'])?></td>
                            <td><?=$t['request_by']?></td>
                            <td><?=$t['needs']?></td>
                            <td><?=$t['token']?></td>
                            <td><img src="<?=site_url($t['qrcode'])?>" width="100px"/> </td>
                            <td><?=$t['visited_count']?></td>
                            <td>
                                <a href="<?php echo site_url('token/delete/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-times-rectangle"></span> &nbsp; Hapus</a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
