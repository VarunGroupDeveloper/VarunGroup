<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.7.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

<!-- Feather Icon JS -->
<script src="<?php echo base_url(); ?>assets/js/feather.min.js"></script>

<!-- Slimscroll JS -->
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>

<!-- ApexChart JS -->
<script src="<?php echo base_url(); ?>assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/apexchart/chart-data.js"></script>

<!-- Chart JS -->
<script src="<?php echo base_url(); ?>assets/plugins/chartjs/chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/chartjs/chart-data.js"></script>

<!-- Datetimepicker JS -->
<script src="<?php echo base_url(); ?>assets/js/moment.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>

<!-- Daterangepicker JS -->
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Summernote JS -->
<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>

<!-- Select2 JS -->
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>

<!-- Peity Chart JS -->
<script src="<?php echo base_url(); ?>assets/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/peity/chart-data.js"></script>

<!-- Color Picker JS -->
<script src="<?php echo base_url(); ?>assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

<!-- Datatable JS -->
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap5.min.js"></script>

<!-- Custom JS -->
<script src="<?php echo base_url(); ?>assets/js/theme-colorpicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<!-- ✅ Auto-hide script -->
<script>
    setTimeout(function () {
        let successAlert = document.getElementById("success-alert");
        let errorAlert = document.getElementById("error-alert");

        if (successAlert) {
            successAlert.style.transition = "opacity 0.5s";
            successAlert.style.opacity = "0";
            setTimeout(() => successAlert.remove(), 500);
        }
        if (errorAlert) {
            errorAlert.style.transition = "opacity 0.5s";
            errorAlert.style.opacity = "0";
            setTimeout(() => errorAlert.remove(), 500);
        }
    }, 4000); // ✅ Hides after 3 seconds
</script>







