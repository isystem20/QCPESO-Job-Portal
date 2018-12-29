
        <div class="page-wrapper">
            
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Certificates Maintenance</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Manage</li>
                        <li class="breadcrumb-item active">Maintenance</li>
                        <li class="breadcrumb-item active">Certificates Masterlist</li>

                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Certificates</h4>
                                <h6 class="card-subtitle">Masterlist of All Certificates</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Eligibility Title</th>
                                                <th>Description</th>
                                                <th>Modified By</th>
                                                <th>Modified At</th>                                   
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Eligibility Title</th>
                                                <th>Description</th>
                                                <th>Modified By</th>
                                                <th>Modified At</th>                                   
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                            <tbody>
                                                <?php
                                        if ($certificate->num_rows() > 0) {
                                            foreach ($certificate->result() as $row) { ?>
                                            <tr>
                                                
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->description; ?></td>
                                                 <td><?php echo $row->eligibilityTitle; ?></td>
                                                <td><?php echo $row->modifiedById?></td>
                                                <td><?php echo $row->modifiedAt?></td>
                                                <td>
                                                    <?php 
                                                    if ($row->isActive == '1') {
                                                        echo '<label class="label label-primary">Active</label>';
                                                    }
                                                    else {
                                                        echo '<label class="label label-danger">Inactive</label>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 Admin Pro by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

        