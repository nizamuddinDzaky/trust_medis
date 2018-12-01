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
    <div class="col-sm-12">
        <ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab">
					<?php echo get_phrase('Teachers');?>
                </a>
            </li>
			<li><a href="#add" data-toggle="tab">
					<?php echo get_phrase('New');?>
            	</a>
            </li>
		</ul>

<div class="tab-content">
		<div class="tab-pane box active" id="list">
          <div class="white-box">
            <div class="table-responsive">
            <table id="myTable" class="table table-striped">
              <thead>
                <tr>
                  <th style="text-align: center;"><?php echo get_phrase('Name');?></th>
				          <th style="text-align: center;"><?php echo get_phrase('Jenis Kelamin');?></th>
                  <th style="text-align: center;"><?php echo get_phrase('Tanggal Lahir');?></th>
			            <th style="text-align: center;"><?php echo get_phrase('Alamat');?></th>
			            <th style="text-align: center;"><?php echo get_phrase('Nomor Rm');?></th>
                  <th style="text-align: center;"><?php echo get_phrase('Nomor Rm');?></th>
                </tr>
              </thead>
              <tbody>
              <?php 
		              foreach($pasiens as $row):
		          ?>
                <tr>
                <td style="text-align: center;"><?php echo $row['nama_pasien'];?></td>
            	  <td style="text-align: center;"><?php echo $row['jenis_kelamin'];?></td>
                <td style="text-align: center;"><?php echo $row['tgl_lahir']?></td>
            	  <td style="text-align: center;"><?php echo $row['alamat'];?></td>
				        <td style="text-align: center;"><?php echo $row['no_rm'];?></td>
			           <td style="text-align: center;" class="text-nowrap">
                  <a href="javascript:" onclick="showAjaxModalPasien('<?php echo base_url();?>index.php?admin/check_riwayat_transaksi/<?=$row['id']?>','<?php echo $row['id']?>')" data-original-title="Profile"> <i class="fa fa-user text-inverse m-r-10"></i></a>
                  <a href="#" data-toggle="tooltip" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/teachers/delete/<?php echo $row['teacher_id'];?>');" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a></td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
            </div>
            </div>
          </div>

	<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url() . 'index.php?admin/pasien/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit', 'enctype' => 'multipart/form-data'));?>

        <div class="col-md-12">
          <div class="white-box">
            <h3 class="box-title m-b-0"><?php echo get_phrase('New');?></h3>
            <br><br>
				<div class="padded">
		     
		     		 <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo get_phrase('Nama');?></label>
                    <div class="col-sm-5">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="ti-user"></i></div>
                      <input type="text" class="form-control" required="" name="name" placeholder="<?php echo get_phrase('Name');?>">
                    </div>
                    </div>
                  </div>

					 <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo get_phrase('Jenis Kelamin');?></label>
                    <div class="col-sm-5">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="ti-user"></i></div>
                      <input type="text" class="form-control" required="" name="jenis_kelamin" placeholder="<?php echo get_phrase('Jenis Kelamin');?>">
                    </div>
                    </div>
                  </div>

					<div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo get_phrase('Tanggal Lahir');?></label>
                    <div class="col-sm-5">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                      <input type="text" class="form-control mydatepicker" required="" name="tgl_lahir" placeholder="<?php echo get_phrase('Tanggal Lahir');?>">
                    </div>
                    </div>
                  </div>
					
					<div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo get_phrase('Alamat');?></label>
                    <div class="col-sm-5">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-key"></i></div>
                      <input type="text" class="form-control" required="" name="alamat" placeholder="<?php echo get_phrase('alamat');?>">
                    </div>
                    </div>
                  </div>					
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="uploads/user.jpg" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-red btn-file">
										<span class="fileinput-new"><?php echo get_phrase('Select');?></span>
										<span class="fileinput-exists"><?php echo get_phrase('Change');?></span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput"><?php echo get_phrase('Delete');?></a>
								</div>
							</div>
						</div>
					</div>
        </div>
						<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('Add');?></button>
							<span id="preloader-form"></span>
						</div>
						</div>
						 <?php echo form_close();?>
                    </form>                
                </div>                
			</div>
			 </div>                
			</div>
</div>
<script src="<?php echo base_url();?>style/bower_components/datatables/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
      $('#myTable').DataTable();
      $(document).ready(function() {
        var table = $('#example').DataTable({
          "columnDefs": [
          { "visible": false, "targets": 2 }
          ],
          "order": [[ 2, 'asc' ]],
          "displayLength": 25,
          "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
              if ( last !== group ) {
                $(rows).eq( i ).before(
                  '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                  );

                last = group;
              }
            } );
          }
        } );
    $('#example tbody').on( 'click', 'tr.group', function () {
      var currentOrder = table.order()[0];
      if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
        table.order( [ 2, 'desc' ] ).draw();
      }
      else {
        table.order( [ 2, 'asc' ] ).draw();
      }
    });
  });
    });
    $('#example23').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
  </script>