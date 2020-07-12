<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> <?php echo (!empty($template_title))?$template_title:'';?></title>
    <meta name="description" content="<?php echo (!empty($template_description))?$template_description:'';?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	
	<?php 
		$this->load->view('template/notika/components/fonts');
		$this->load->view('template/notika/components/css');
	?>
	
	<!-- jquery
    ============================================ -->
    <script src="<?php echo base_url('template/notika/js/vendor/jquery-1.12.4.min.js');?>"></script>
    <!-- modernizr JS
		============================================ -->
    <script src="template/notika/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
		
    <!-- Start Navbar Top Area -->
		<?php 
			$this->load->view('template/notika/components/navbar');
		?>
	<!-- End Navbar Top Area -->
		
    <!-- Mobile Header-mobile start -->
    	<?php 
			$this->load->view('template/notika/components/header-mobile');
		?>
	<!-- Mobile Header-mobile end -->
	
    <!-- Main Header area start-->
		<?php 
			$this->load->view('template/notika/components/header');
		?>
	<!-- Main Header area End-->    


	<!-- Start Body -->
		
		<?php 
			if(!empty($template_body))
			{
				foreach ($template_body as $body) {
					$this->load->view($body);
				}
			}
		?>

	<!-- End Body -->
	
    <!-- Start Footer area-->
		<?php 
			$this->load->view('template/notika/components/footer');
		?>
	<!-- End Footer area-->
	
	<!-- Start JS  -->
		<?php 
			$this->load->view('template/notika/components/js');
		?>
	<!-- End JS -->
</body>

</html>