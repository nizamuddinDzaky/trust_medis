
<?php echo $tanggal?>
<div class="row">
  <div class="col-md-12">
    <div class="col-sm-12">
      <ul class="nav nav-tabs bordered">
        <li class="active">
                <a href="#biodata" data-toggle="tab">
            <?php echo get_phrase('Teachers');?>
                  </a>
              </li>
        <li><a href="#add_rawat_jalan" data-toggle="tab">
            <?php echo get_phrase('New');?>
                </a>
              </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane box active" id="biodata">
          <div class="panel panel-default" id="biodata">
            <ul class="basic-list">
                <li><?php echo get_phrase('Name');?><span class="pull-right label-danger label"><?=$data_pasien->nama_pasien?></span></li>
                <li><?php echo get_phrase('Username');?><span class="pull-right label-purple label"><?=$data_pasien->jenis_kelamin?></span></li>
                <li><?php echo get_phrase('Phone');?><span class="pull-right label-red label"><?=$data_pasien->tgl_lahir?></span></li>
                <li><?php echo get_phrase('Email');?><span class="pull-right label-success label"><?=$data_pasien->alamat?></span></li>
                <li><?php echo get_phrase('Birthday');?><span class="pull-right label-info label"><?=$data_pasien->no_rm?></span></li>
              </ul>
          </div>
        </div>
        <div class="tab-pane box" id="add_rawat_jalan">
          <div class="panel panel-default">
            <ul class="basic-list">
                <?php echo form_open(base_url() . 'index.php?admin/rawat_jalan/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit', 'enctype' => 'multipart/form-data'));?>
                    <input type="hidden" class="form-control" required="" name="id_pasiens" placeholder="<?php echo get_phrase('Tanggal');?>" value = "<?=$data_pasien->id?>" readOnly>
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo get_phrase('Tanggal');?></label>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" required="" name="tanggal" placeholder="<?php echo get_phrase('Tanggal');?>" value = "<?=$tanggal?>" readOnly>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo get_phrase('Jam');?></label>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" required="" name="jam" placeholder="<?php echo get_phrase('Tanggal');?>" value = "<?=$jam?>" readOnly>
                          </div>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo get_phrase('Pembayaran');?></label>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" required="" name="pembayaran" placeholder="<?php echo get_phrase('Pembayaran');?>">
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo get_phrase('No Asuransi');?></label>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" required="" name="no_asuransi" placeholder="<?php echo get_phrase('No Asuransi');?>" >
                          </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo get_phrase('Penanggung');?></label>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" required="" name="penanggung" placeholder="<?php echo get_phrase('Penanggung');?>" >
                          </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo get_phrase('Kelas');?></label>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" required="" name="kelas" placeholder="<?php echo get_phrase('Kelas');?>" >
                          </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo get_phrase('Unit / Klinik');?></label>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" required="" name="unit" placeholder="<?php echo get_phrase('Unit / Klinik');?>" >
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo get_phrase('Dokter');?></label>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" required="" name="dokter" placeholder="<?php echo get_phrase('Dokter');?>" >
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo get_phrase('Paket');?></label>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" required="" name="paket" placeholder="<?php echo get_phrase('Paket');?>" >
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><?php echo get_phrase('Cara Masuk');?></label>
                        <div class="col-sm-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" required="" name="cara_masuk" placeholder="<?php echo get_phrase('Cara Masuk');?>" >
                          </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-info"><?php echo get_phrase('Add');?></button>
                <?php echo form_close();?>
              </ul>
          </div>
        </div>
      </div>
  </div>
</div>