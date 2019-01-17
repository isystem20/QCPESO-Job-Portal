<?php 
if (!empty($employee)) {
    $attr="";
   foreach ($employee as $row) 
    { 
        if ($mode=="view") {
            $attr="disabled readonly";
        }
        ?>
<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Employee Registration</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Manage</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Add Employee</li>
                </ol>
            </div>
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                 <?php
            $hidden = array(
              'id' => $row->Id,
            );
            ?>
                <?php echo form_open('admin/employee/edit','id="employee"',$hidden); ?>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="row">

                                
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">First Name</label>
                                                                        <input type="text" name="FirstName" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">Last Name</label>
                                                                        <input type="text" name="LastName" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">Username</label>
                                                                        <input type="text" name="LoginName" class="form-control ">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">Password</label>
                                                                        <input type="Password" name="Password" class="form-control">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                <div class="p-20">
                                                    <h3>Remarks</h3>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <label class="control-label">Remarks</label>
                                                                    <div class="form-group">
                                                                        <textarea class="textarea_editor form-control" name="Remarks" rows="8" placeholder="Enter text ..."></textarea>
                                                                    </div>

                                                                </div>

                                                                <?php 
                                        $usertype = $this->session->userdata('usertype');
                                        if ($usertype == 'ADMIN') {
                                        ?>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label ">Status</label>
                                                                            <select class="form-control custom-select " name="IsActive">

                                                                                <option value="1">Active</option>
                                                                                <option value="2">Inactive</option>

                                                                            </select>
                                                                        </div>

                                                                        <?php
                                         }
                                        ?>

                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                <div class="form-actions">
                                                                <button type="submit" id="sub-btn" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                <button type="button" class="btn btn-inverse">Cancel</button>
                                                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


  <?php
   }
}
else { ?>
<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Employee Registration</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Manage</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Add Employee</li>
                </ol>
            </div>
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <?php echo form_open('admin/employee/add','id="employee"'); ?>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="row">

                                
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">First Name</label>
                                                                        <input type="text" name="FirstName" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">Last Name</label>
                                                                        <input type="text" name="LastName" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">Username</label>
                                                                        <input type="text" name="LoginName" class="form-control ">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">Password</label>
                                                                        <input type="Password" name="Password" class="form-control">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                <div class="p-20">
                                                    <h3>Remarks</h3>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <label class="control-label">Remarks</label>
                                                                    <div class="form-group">
                                                                        <textarea class="textarea_editor form-control" name="Remarks" rows="8" placeholder="Enter text ..."></textarea>
                                                                    </div>

                                                                </div>

                                                                <?php 
                                        $usertype = $this->session->userdata('usertype');
                                        if ($usertype == 'ADMIN') {
                                        ?>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label ">Status</label>
                                                                            <select class="form-control custom-select " name="IsActive">

                                                                                <option value="1">Active</option>
                                                                                <option value="2">Inactive</option>

                                                                            </select>
                                                                        </div>

                                                                        <?php
                                         }
                                        ?>

                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                <div class="form-actions">
                                                                <button type="submit" id="sub-btn" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                <button type="button" class="btn btn-inverse">Cancel</button>
                                                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
     <?php  
   }
?>