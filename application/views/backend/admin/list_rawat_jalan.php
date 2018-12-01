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

<div class="white-box">
<table id="myTable" class="table table-striped">
  <thead>
    <tr>
      <th style="text-align: center;"><?php echo get_phrase('Jode');?></th>
      <th style="text-align: center;"><?php echo get_phrase('Nama');?></th>
      <th style="text-align: center;"><?php echo get_phrase('Waktu');?></th>
      <th style="text-align: center;"><?php echo get_phrase('Alamat');?></th>
      <th style="text-align: center;"><?php echo get_phrase('Nomor Rm');?></th>
      <th style="text-align: center;"><?php echo get_phrase('Options');?></th>
    </tr>
  </thead>
  <tbody>
  <?php 
      foreach($rawat_jalan as $row):
  ?>
    <tr>
    <td style="text-align: center;"><?php echo $row['kode'];?></td>
	  <td style="text-align: center;"><?php echo $row['nama_pasien'];?></td>
    <td style="text-align: center;"><?php echo $row['waktu']?></td>
	  <td style="text-align: center;"><?php echo $row['alamat'];?></td>
    <td style="text-align: center;"><?php echo $row['no_rm'];?></td>
     <td style="text-align: center;" class="text-nowrap">
      <a href="<?php echo base_url(); ?>index.php?admin/view_rawatjalan/<?=$row['id_rawat_jalan']?>" data-original-title="View Rawat Jalan" data-toggle="tooltip"> <i class="fa fa-user text-inverse m-r-10"></i></a>
      <a href="#" data-toggle="tooltip" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/teachers/delete/<?php echo $row['teacher_id'];?>');" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#myTable').DataTable();
  })
</script>