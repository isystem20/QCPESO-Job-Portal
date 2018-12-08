
    </div>

<script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-ui/jquery-ui.min.js"></script>

<script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/waves.js"></script>

<script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/sidebarmenu.js"></script>
<script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/custom.min.js"></script>




<script type="text/javascript">
$(function() {
    $(".preloader").fadeOut();
});
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});
 
$('#to-recover').on("click", function() {
    $("#loginform").slideUp();
    $("#recoverform").fadeIn();
});
</script>


<?php if (!empty($charts)) { ?>
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
<?php } ?>

<?php  if (!empty($datepicker)) { ?>
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
<?php } ?>

<?php if (!empty($wizard)) { ?>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/wizard/jquery.steps.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/wizard/jquery.validate.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/wizard/steps.js"></script>
<?php } ?>

<?php if (!empty($addons)) { ?>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/dff/dff.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script>
    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            //templateResult: formatRepo, // omitted for brevity, see the source of this page
            //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>
<?php } ?>

<?php if (!empty($datepicker)) { ?>
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
    <script>
    /*******************************************/
    // Basic Date Range Picker
    /*******************************************/
    $('.daterange').daterangepicker();

    /*******************************************/
    // Date & Time
    /*******************************************/
    $('.datetime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    });

    /*******************************************/
    //Calendars are not linked
    /*******************************************/
    $('.timeseconds').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        timePicker24Hour: true,
        timePickerSeconds: true,
        locale: {
            format: 'MM-DD-YYYY h:mm:ss'
        }
    });

    /*******************************************/
    // Single Date Range Picker
    /*******************************************/
    $('.singledate').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });

    /*******************************************/
    // Auto Apply Date Range
    /*******************************************/
    $('.autoapply').daterangepicker({
        autoApply: true,
    });

    /*******************************************/
    // Calendars are not linked
    /*******************************************/
    $('.linkedCalendars').daterangepicker({
        linkedCalendars: false,
    });

    /*******************************************/
    // Date Limit
    /*******************************************/
    $('.dateLimit').daterangepicker({
        dateLimit: {
            days: 7
        },
    });

    /*******************************************/
    // Show Dropdowns
    /*******************************************/
    $('.showdropdowns').daterangepicker({
        showDropdowns: true,
    });

    /*******************************************/
    // Show Week Numbers
    /*******************************************/
    $('.showweeknumbers').daterangepicker({
        showWeekNumbers: true,
    });

    /*******************************************/
    // Date Ranges
    /*******************************************/
    $('.dateranges').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    });

    /*******************************************/
    // Always Show Calendar on Ranges
    /*******************************************/
    $('.shawCalRanges').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        alwaysShowCalendars: true,
    });

    /*******************************************/
    // Top of the form-control open alignment
    /*******************************************/
    $('.drops').daterangepicker({
        drops: "up" // up/down
    });

    /*******************************************/
    // Custom button options
    /*******************************************/
    $('.buttonClass').daterangepicker({
        drops: "up",
        buttonClasses: "btn",
        applyClass: "btn-info",
        cancelClass: "btn-danger"
    });

    /*******************************************/
    // Language
    /*******************************************/
    $('.localeRange').daterangepicker({
        ranges: {
            "Aujourd'hui": [moment(), moment()],
            'Hier': [moment().subtract('days', 1), moment().subtract('days', 1)],
            'Les 7 derniers jours': [moment().subtract('days', 6), moment()],
            'Les 30 derniers jours': [moment().subtract('days', 29), moment()],
            'Ce mois-ci': [moment().startOf('month'), moment().endOf('month')],
            'le mois dernier': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
        },
        locale: {
            applyLabel: "Vers l'avant",
            cancelLabel: 'Annulation',
            startLabel: 'Date initiale',
            endLabel: 'Date limite',
            customRangeLabel: 'SÃ©lectionner une date',
            // daysOfWeek: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi','Samedi'],
            daysOfWeek: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
            monthNames: ['Janvier', 'fÃ©vrier', 'Mars', 'Avril', 'ÐœÐ°i', 'Juin', 'Juillet', 'AoÃ»t', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
            firstDay: 1
        }
    });
    </script>
    <script>
    // MAterial Date picker    
    $('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
    $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

    $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
    // Clock pickers
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    </script>
<?php } ?>

<?php if (!empty($tables)) { ?>
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
<?php } ?>

<?php if (!empty($editor)) { ?>
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
<?php } ?>

<?php if (!empty($tags)) { ?>   
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script>
    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        // // $(".select2").select2();
        // $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        // $(".vertical-spin").TouchSpin({
        //     verticalbuttons: true
        // });
        // var vspinTrue = $(".vertical-spin").TouchSpin({
        //     verticalbuttons: true
        // });
        // if (vspinTrue) {
        //     $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        // }
        // $("input[name='tch1']").TouchSpin({
        //     min: 0,
        //     max: 100,
        //     step: 0.1,
        //     decimals: 2,
        //     boostat: 5,
        //     maxboostedstep: 10,
        //     postfix: '%'
        // });
        // $("input[name='tch2']").TouchSpin({
        //     min: -1000000000,
        //     max: 1000000000,
        //     stepinterval: 50,
        //     maxboostedstep: 10000000,
        //     prefix: '$'
        // });
        // $("input[name='tch3']").TouchSpin();
        // $("input[name='tch3_22']").TouchSpin({
        //     initval: 40
        // });
        // $("input[name='tch5']").TouchSpin({
        //     prefix: "pre",
        //     postfix: "post"
        // });
        // For multiselect
    //     $('#pre-selected-options').multiSelect();
    //     $('#optgroup').multiSelect({
    //         selectableOptgroup: true
    //     });
    //     $('#public-methods').multiSelect();
    //     $('#select-all').click(function() {
    //         $('#public-methods').multiSelect('select_all');
    //         return false;
    //     });
    //     $('#deselect-all').click(function() {
    //         $('#public-methods').multiSelect('deselect_all');
    //         return false;
    //     });
    //     $('#refresh').on('click', function() {
    //         $('#public-methods').multiSelect('refresh');
    //         return false;
    //     });
    //     $('#add-option').on('click', function() {
    //         $('#public-methods').multiSelect('addOption', {
    //             value: 42,
    //             text: 'test 42',
    //             index: 0
    //         });
    //         return false;
    //     });
    //     $(".ajax").select2({
    //         ajax: {
    //             url: "https://api.github.com/search/repositories",
    //             dataType: 'json',
    //             delay: 250,
    //             data: function(params) {
    //                 return {
    //                     q: params.term, // search term
    //                     page: params.page
    //                 };
    //             },
    //             processResults: function(data, params) {
    //                 // parse the results into the format expected by Select2
    //                 // since we are using custom formatting functions we do not need to
    //                 // alter the remote JSON data, except to indicate that infinite
    //                 // scrolling can be used
    //                 params.page = params.page || 1;
    //                 return {
    //                     results: data.items,
    //                     pagination: {
    //                         more: (params.page * 30) < data.total_count
    //                     }
    //                 };
    //             },
    //             cache: true
    //         },
    //         escapeMarkup: function(markup) {
    //             return markup;
    //         }, // let our custom formatter work
    //         minimumInputLength: 1,
    //         //templateResult: formatRepo, // omitted for brevity, see the source of this page
    //         //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    //     });
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script type="text/javascript">
        function stopRKey(evt) {
          var evt = (evt) ? evt : ((event) ? event : null);
          var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
          if ((evt.keyCode == 13) && ((node.type=="text") || (node.type=="radio") || (node.type=="checkbox")) )  {return false;}
        }

        document.onkeypress = stopRKey;
        </script> 
<?php } ?>

<?php if (!empty($uploadfile)) { ?>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
   
    <script src="<?php echo base_url(); ?>themes/admin-pro/minimal/js/custom.min.js"></script>
  
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
      
        $('.dropify').dropify();

        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

    
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
   
    <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<?php } ?>


<script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/toast-master/js/jquery.toast.js"></script>

<script src="<?php echo base_url(); ?>themes/ajax/office.js"></script>

</body>

</html>