
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
                    <h3 class="text-themecolor">License list Maintenance</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Manage</li>
                        <li class="breadcrumb-item active">Maintenance</li>
                        <li class="breadcrumb-item active">License list</li>

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

                            
                                  
                                <h4 class="card-title">License list</h4>
                                <h6 class="card-subtitle">Masterlist of All License list</h6>
                                  <div class="card-body">
                                <button type="button" id="add-btn1" class="btn waves-effect waves-light btn-success">Add</button>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable1" class="table table-bordered table-striped">


                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Eligibility Title</th>
                                                <th>Description</th>
                                                 <th>Modified By </th>
                                                 <th>Modified At </th>
                                                 <th>Status</th>
                                                 <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                             <tr>    
                                                <th>Name</th>
                                                <th>Eligibility Title</th>
                                                <th>Description</th>
                                                 <th>Modified By </th>
                                                 <th>Modified At </th>
                                                 <th>Status</th>
                                                 <th>Action</th>
                                            </tr>
                                        </tfoot>   
                                        <tbody>
                                         <?php
                                        if ($license->num_rows() > 0) {
                                            foreach ($license->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->eligibilityTitle; ?></td>
                                                 <td><?php echo character_limiter($row->description, 30); ?></td>
                                                    <td><?php echo $row->modifiedById; ?></td>
                                                      <td><?php echo date('Y-m-d',strtotime($row->modifiedAt)); ?></td>
                                                <td>
                                                    <?php 
                                                    if ($row->isActive == '1') {
                                                        echo '<label class="label label-primary">Active</label>';
                                                    }
                                                    else {
                                                        echo '<label class="label label-light-inverse">Inactive</label>';
                                                    }

                                                    ?>
                                                </td>
                                                <td class="actions">
                                                    <button class="read-item-btn btn btn-info waves-effect waves-light btn-sm" type="button"> <i class="fas fa-info-circle"></i> </button>
                                                    <button class="edit-item-btn btn btn-success waves-effect waves-light btn-sm" type="button"> <i class="far fa-edit" ></i> </button>
                                                     <button class="del-item-btn btn btn-danger waves-effect waves-light btn-sm" type="button"> <i class="fas fa-trash-alt"></i></button>                                                  
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                           
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
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

<div id="add-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form id="add-form1" action="<?php echo base_url(); ?>admin/license/add" method="POST">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Name: </label>
                        <input type="text" name="name" class="form-control" placeholder="A unique name for this category">
                    </div>
                     <div class="form-group">
                        <label for="recipient-name" class="control-label">Eligibility Title: </label>
                        <input type="text" name="eligibiltytitle" class="form-control" placeholder="A unique title for this Eligibility Title">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Description:</label>
                        <textarea name="description" class="form-control" placeholder="Short description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active (Activate now)</option>
                            <option value="0">Inactive (Register but activate later)</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" id="add-submit1" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>