<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
	<meta name="author" content="Dreams technologies - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title><?php echo isset($title) ? $title : 'Default Title'; ?></title>


	<?php $this->load->view('templates/admin/auth/style'); ?>
</head>

<body class="bg-linear-gradiant">

	<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

	<!-- Main Wrapper -->
    <?php $this->load->view($page); ?> 
	<!-- /Main Wrapper -->

    <?php $this->load->view('templates/admin/auth/script'); ?>

</body>

</html>