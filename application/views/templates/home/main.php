<!doctype html>
<html class="no-js" lang="zxx">
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php echo isset($title) ? $title : 'Default Title'; ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <?php $this->load->view('templates/home/style'); ?>


<body class="rs-smoother-yes rtl">

    <!-- preloader start -->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container has-theme-light-blue">
                <div class="loader-icon"><img src="assets/images/favicon-light-blue.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- preloader start -->

    <div id="rs-mouse">
        <div id="cursor-ball"></div>
    </div>

    <!-- preloader end -->

    <!-- Header area start -->
      <?php $this->load->view('templates/home/header'); ?>
    <!-- Header area end -->



    <!-- Body main wrapper start -->
    <main>

     <?php $this->load->view($page); ?>

    </main>

    <!-- Body main wrapper end -->

    <!-- footer area start -->
   <?php $this->load->view('templates/home/footer'); ?>
    <!-- footer area end -->

    <!-- back to top -->
    <!-- Backtotop start -->
    <div class="backtotop-wrap cursor-pointer has-theme-light-blue">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Backtotop end -->

     <?php $this->load->view('templates/home/script'); ?>
</body>

</html>