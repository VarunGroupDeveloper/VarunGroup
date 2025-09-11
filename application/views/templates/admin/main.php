<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="VarunBajaj - Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
	<meta name="author" content="Dreams technologies - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title><?php echo isset($title) ? $title : 'Default Title'; ?></title>

	<?php $this->load->view('templates/admin/style'); ?>

</head>

<body>

	<div id="global-loader">
		<div class="page-loader"></div>
	</div>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

	<?php $this->load->view('templates/admin/header'); ?>



	<?php $this->load->view('templates/admin/sidebar'); ?>

	<?php if (isset($page)) $this->load->view($page); ?>

	<?php $this->load->view('templates/admin/footer'); ?>

	</div>
	<!-- /Main Wrapper -->
	

    <?php $this->load->view('templates/admin/script'); ?>

</body>

</html>