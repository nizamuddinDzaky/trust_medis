
<?php
	// $rtl              =	$this->db->get_where('settings' , array('type'=>'rtl'))->row()->description;
	$account_type       =	$this->session->userdata('login_type');
	?>
<!DOCTYPE html>
<html lang="en" dir="<?php if ($rtl == 'rtl') echo 'rtl';?>">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EduAppGT PRO - School Management System">
    <meta name="author" content="Web Studio Guatemala">
    <link rel="icon" type="ico" sizes="16x16" href="style/images/favicon.ico">
	<?php include 'topcss.php';?>	
</head>

<body>
    <div id="wrapper">
		<?php include $account_type.'/navigation.php';?>	
		<?php $this->load->view('backend/header'); ?>
		 <div id="page-wrapper">
            <div class="container-fluid">
		 	<?php $this->load->view('backend/admin/'.$page_name, $data)?>
		 	</div>
		 	<?php include 'footer.php';?>
    	</div>
    </div>
    <?php include 'modal.php';?>
    <?php include 'scripts.php';?>  
</body>
</html>