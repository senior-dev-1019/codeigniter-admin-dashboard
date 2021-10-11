</div>
<!-- End of Main Content -->
<?php if($this->session->userdata('logged_in')) : ?>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Stroom-storing.nl <?=  date("Y"); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
    </div>
</div>
</div>
</div>


<script src="<?php echo site_url(); ?>assets/js/jquery/datetimepicker.js"></script>

<script src="<?php echo site_url(); ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo site_url(); ?>assets/js/jquery/jquery.easing.min.js"></script>

<script src="<?php echo site_url(); ?>assets/js/jquery/jquery-steps.js"></script>

<!-- Page level plugins -->
<script src="<?php echo site_url(); ?>assets/js/chart/Chart.min.js"></script>
<link href="<?php echo site_url(); ?>assets/css/datatables/dataTables.min.css" rel="stylesheet">
<!-- Page level plugins -->
<script src="<?php echo site_url(); ?>assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url(); ?>assets/js/datatables/dataTables.bootstrap4.min.js"></script>

<!-- <script>
$('#demo').datetimepicker({
3
inline:true,
4
});
    CKEDITOR.replace( 'editor1' );
</script> -->
<?php endif; ?>
</body>

</html>
