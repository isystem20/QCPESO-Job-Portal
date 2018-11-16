
    </div>

<script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--Custom JavaScript -->
<script type="text/javascript">
$(function() {
    $(".preloader").fadeOut();
});
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});
// ============================================================== 
// Login and Recover Password 
// ============================================================== 
$('#to-recover').on("click", function() {
    $("#loginform").slideUp();
    $("#recoverform").fadeIn();
});
</script>


<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-ui/jquery-ui.min.js"></script>



    <?php
    if (!empty($charts)) { ?>

            <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap popper Core JavaScript -->
            <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/js/popper.min.js"></script>
            <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/perfect-scrollbar.jquery.min.js"></script>
            <!--Wave Effects -->
            <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/waves.js"></script>
            <!--Menu sidebar -->
            <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/sidebarmenu.js"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/custom.min.js"></script>
            <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
            <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
            <!--sparkline JavaScript -->
            <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
            <!--morris JavaScript -->
            <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/chartist-js/dist/chartist.min.js"></script>
            <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
            <!-- Chart JS -->
            <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/dashboard4.js"></script>
            <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <?php
    }
    ?>
    <?php 
    if (!empty($datepicker)) { ?>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/moment/moment.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/moment/moment.js"></script>
    <?php
    }
    ?>




    <?php
    if (!empty($tables)) { ?>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/datatables/datatables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="<?php echo base_url(); ?>themes/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>themes/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>

    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
 
    <?php
    }
    ?>

<?php
    if (!empty($editor)) { ?>
   <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/custom.min.js"></script>
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/html5-editor/bootstrap-wysihtml5.js"></script>
    <script>
    $(document).ready(function() {

        $('.textarea_editor').wysihtml5();


    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
     <?php
    }
    ?>
<script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/toast-master/js/jquery.toast.js"></script>


<script src="<?php echo base_url(); ?>themes/ajax/office.js"></script>


</body>

</html>