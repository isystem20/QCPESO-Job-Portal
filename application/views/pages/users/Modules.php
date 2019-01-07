

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
                    <h3 class="text-themecolor">Modules</h3>
                    <!-- <h6 class="text-muted">Masterlist of All Jobtitles</h6> -->
                
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Maintenance</li>
                        <li class="breadcrumb-item active">Languages</li>
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
                                <button type="button" data-toggle="modal" data-target="#add-modu-modal" class="btn waves-effect waves-light btn-success">Add</button>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-action="<?=base_url('admin/'.$class.'/')?>">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Url</th>
                                                <th>Parent</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <?php
                                        if ($masterlist->num_rows() > 0) {
                                            foreach ($masterlist->result() as $row) { ?>
                                            <tr Id="row<?=$row->Id; ?>">
                                                <td><?php echo $row->Name; ?></td>
                                                <td><?php echo $row->Url; ?></td>
                                                <td><?php echo $row->Parentname; ?></td>
                                                <td><?php echo $row->Category; ?></td>
                                
                                                <td>
                                                    <?php 
                                                    if ($row->IsActive == '1') {
                                                        echo '<label class="label label-success">Active</label>';
                                                    }
                                                    else {
                                                        echo '<span class="label label-light-inverse">Inactive</span>';
                                                    }
                                                    ?>
                                                </td>
                                                <td class="actions">
                                                    <button class="read-item-btn btn btn-info waves-effect waves-light btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="View" type="button" data-action="<?=base_url('admin/'.$class.'/'); ?>" data-id="<?php echo $row->Id; ?>" data-name="<?=$row->Name; ?>" data-name="<?=$row->Url; ?>" data-name="<?=$row->Parentname; ?>"  data-createdby="<?=$row->CreatedBy; ?>" data-createdat="<?=$row->CreatedAt; ?>" data-modifiedby="<?=$row->ModifiedById; ?>" data-modifiedat="<?=$row->ModifiedAt; ?>" data-version="<?=$row->VersionNo; ?>" data-status="<?=$row->IsActive; ?>"> <i class="fas fa-info-circle"></i> </button>


                                                    <button class="edit-item-btn btn btn-success waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"type="button" data-action="<?=base_url('admin/'.$class.'/'); ?>" data-id="<?php echo $row->Id; ?>" data-name="<?=$row->Name; ?>" data-name="<?=$row->Url; ?>" data-name="<?=$row->Parent; ?>" data-desc="<?=$row->Description; ?>" data-status="<?=$row->IsActive; ?>"> <i class="far fa-edit" ></i> </button>



                                                     <button class="del-item-btn btn btn-danger waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="button" data-action="<?=base_url('admin/'.$class.'/'); ?>" data-id="<?php echo $row->Id; ?>" data-name="<?=$row->Name; ?>"> <i class="fas fa-trash-alt"></i></button>                                                  
                                                </td>
                 
                                            </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Url</th>
                                                <th>Parent</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                    </tfoot>
                                    </table>
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
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
            <footer class="footer"> <p>© 2018 Quezon City PESO, All Rights Reserved. Design with love by <a href="#">SIGMA</a></p></footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>






        <div id="add-modu-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="header-modu-text" class="modal-title">Add New Module</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
            <?php
            $hidden = array(
              'itemid' => '',
            );
            ?>
            <?php echo form_open('admin/modules/add','id="add-modu-form"',$hidden); ?>
                <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Name: </label>
                    <div class="col-10">
                        <input type="text" name="name" class="form-control" placeholder="A unique name for this category">                        
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Url: </label>
                    <div class="col-10">
                        <input type="text" name="url" class="form-control" placeholder="Url">                        
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Parent: </label>
                    <div class="col-10">
                      
                        <select class="form-control" name="parent"
                                                        <?php
                                                            if ($masterlist->num_rows() > 0) {
                                                                foreach ($masterlist->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>                        
                    </div>
                </div>
              <!--   <div class="form-group row">
                    <label for="message-text" class="col-2 control-label">Description:</label>
                    <div class="col-10">
                        <textarea name="description" class="form-control" placeholder="Short description"></textarea>
                    </div>
                </div> -->
                  <div class="form-group row">
                    <label for="message-text" class="col-2 control-label">Category:</label>
                    <div class="col-10">
                        <input name="category" class="form-control" placeholder="Short Category"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Visible: </label>
                    <div class="col-10">
                        <select name="visible" class="form-control">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" id="addmodu-submit" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>

