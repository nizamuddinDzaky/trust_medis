<?php 
    $rtl          = $this->db->get_where('settings' , array('type'=>'rtl'))->row()->description;
    $skin_colour  =   $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description;
?>

  <!-- <link rel="stylesheet" href="<?php echo base_url();?>style/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css"> -->

  <link href="<?php echo base_url();?>style/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>style/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>style/bower_components/morrisjs/morris.css" rel="stylesheet">
<link href="<?php echo base_url();?>style/css/animate.css" rel="stylesheet">


  

  <link href="<?php echo base_url();?>style/css/style.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>style/css/colors/<?php if ($skin_colour != '') echo 'skin-' . $skin_colour;?>.css" id="theme" rel="stylesheet">
<link href="<?php echo base_url();?>style/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>style/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>style/js/jPlayer/jplayer.flat.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/bower_components/gallery/css/animated-masonry-gallery.css" />
<link href="<?php echo base_url();?>style/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>style/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/bower_components/fancybox/ekko-lightbox.min.css" />
<link href="<?php echo base_url();?>style/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>style/bower_components/html5-editor/bootstrap-wysihtml5.css" />
<link href="<?php echo base_url();?>style/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js"></script>
<script>
    function checkDelete()
    {
        var chk=confirm("���Esta seguro?");
        if(chk)
        { return true;  }
        else{ return false;}
    }
</script>