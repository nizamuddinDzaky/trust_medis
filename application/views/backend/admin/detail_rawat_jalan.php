<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo get_phrase('Teachers');?></h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
  		    <li><a href="<?php echo base_url(); ?>index.php?admin/admin_dashboard"><?php echo get_phrase('Dashboard');?></a></li>
            <li><a class="active"><?php echo get_phrase('Teachers');?></a></li>
        </ol>
    </div>
</div>

<div class="row">
	<div class="col-md-3">
		<div class="white-box">
			<ul class="basic-list">
                <li><?php echo get_phrase('Name');?><span class="pull-right label-danger label"><?=$rawat_jalan->nama_pasien?></span></li>
                <li><?php echo get_phrase('Username');?><span class="pull-right label-purple label"><?=$rawat_jalan->jenis_kelamin?></span></li>
                <li><?php echo get_phrase('Phone');?><span class="pull-right label-red label"><?=$rawat_jalan->tgl_lahir?></span></li>
                <li><?php echo get_phrase('Email');?><span class="pull-right label-success label"><?=$rawat_jalan->alamat?></span></li>
                <li><?php echo get_phrase('Birthday');?><span class="pull-right label-info label"><?=$rawat_jalan->no_rm?></span></li>
            </ul>
		</div>
	</div>
	<div class="col-md-5">
		<div class="white-box">
			<?php echo form_open(base_url() . 'index.php?admin/pasien/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit', 'enctype' => 'multipart/form-data'));?>
					<div class="form-group">
	                    <label class="col-sm-4 control-label"><?php echo get_phrase('Dokter');?></label>
	                    <div class="col-sm-5">
	                    	<div class="input-group">
	                      		<div class="input-group-addon"><i class="ti-user"></i></div>
	                      		<input type="text" class="form-control" required="" name="name" placeholder="<?php echo get_phrase('Dokter');?>">
	                    	</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-4 control-label"><?php echo get_phrase('Kondisi Masuk');?></label>
	                    <div class="col-sm-5">
	                    	<div class="input-group">
	                      		<div class="input-group-addon"><i class="ti-user"></i></div>
	                      		<input type="text" class="form-control" required="" name="kondisi_masuk" placeholder="<?php echo get_phrase('Kondisi Masuk');?>">
	                    	</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-4 control-label"><?php echo get_phrase('Kegiatan');?></label>
	                    <div class="col-sm-5">
	                    	<div class="input-group">
	                      		<div class="input-group-addon"><i class="ti-user"></i></div>
	                      		<input type="text" class="form-control" required="" name="kegiatan" placeholder="<?php echo get_phrase('Kegiatan');?>">
	                    	</div>
	                    </div>
	                </div>
	                <button type="submit" class="btn btn-info"><?php echo get_phrase('Add');?></button>
			<?php echo form_close();?>
		</div>
	</div>

	<div class="col-md-4">
		<div class="white-box">
			<?php echo form_open(base_url() . 'index.php?admin/pasien/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit', 'enctype' => 'multipart/form-data'));?>
					<div class="form-group">
	                    <label class="col-sm-4 control-label"><?php echo get_phrase('Dokter');?></label>
	                    <div class="col-sm-5">
	                    	<div class="input-group">
	                      		<div class="input-group-addon"><i class="ti-user"></i></div>
	                      		<input type="text" class="form-control" required="" name="name" placeholder="<?php echo get_phrase('Dokter');?>">
	                    	</div>
	                    </div>
	                </div>
			<?php echo form_close();?>
		</div>
	</div>
</div>
