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
                    <?php
                    if (!empty($this->session->tempdata('caption'))) { ?>
                       <h3 class="text-themecolor"><?=$this->session->tempdata('caption'); ?></h3>
                    <?php } else { ?>
                        <h3 class="text-themecolor">Office Staff Registration</h3>
                    <?php }
                    ?>
                    
                </div>
            <!--     <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Transactions</a></li>
                        <li class="breadcrumb-item">Applicants</li>
                        <li class="breadcrumb-item active">Registration</li>
                    </ol>
                </div> -->
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <?php
            $hidden = array(
              'Id' => $row->Id,
            );
            ?>
                        <?php echo form_open('admin/employee/edit','id="employee"',$hidden); ?>
                            <div class="row p-t-20">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">First Name</label>
                                                <input type="text" name="FirstName" value="<?=$row->FirstName;?>" class="form-control">

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Middle Name</label>
                                                <input type="text" name="MiddleName" value="<?=$row->MiddleName;?>" class="form-control">

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Last Name</label>
                                                <input type="text" name="LastName" value="<?=$row->LastName;?>" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group has-success">
                                        <label class="control-label">Suffix</label>
                                        <select type="text" name="Suffix" value="<?=$row->Suffix;?>" class="form-control">
                                            <option <?php if($row->Suffix=="N/A"){ echo "Selected";}?> value="N/A">N/A</option>
                                            <option <?php if($row->Suffix=="Jr"){ echo "Selected";}?> value="Jr">Jr.</option>
                                            <option <?php if($row->Suffix=="Sr"){ echo "Selected";}?> value="Sr">Sr.</option>
                                            <option <?php if($row->Suffix=="1"){ echo "Selected";}?> value="I">I</option>
                                            <option <?php if($row->Suffix=="2"){ echo "Selected";}?> value="II">II</option>
                                            <option <?php if($row->Suffix=="3"){ echo "Selected";}?> value="III">III</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control form-control-danger" name="UserName" value="<?=$row->EmailAddress;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Mobile</label>
                                                    <input type="text" name="MobileNum" class="form-control form-control-danger" value="<?=$row->MobileNum;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Telephone</label>
                                                    <input type="text" name="LandlineNum" class="form-control form-control-danger" value="<?=$row->LandlineNum;?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                              
                                <h3>Account No. Information</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">T.I.N. </label>
                                                    <input type="text" name="TIN" class="form-control form-control-danger" value="<?=$row->TIN;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">S.S.S. No.</label>
                                                    <input type="text" name="SSS" class="form-control form-control-danger" value="<?=$row->SSS;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">PHILHEALTH No.</label>
                                                    <input type="text" name="PHILHEALTH" class="form-control form-control-danger" value="<?=$row->PHILHEALTH;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">PAG-IBIG No.</label>
                                                    <input type="text" name="PAGIBIG" class="form-control form-control-danger" value="<?=$row->PAGIBIG;?>">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <h3>Remarks</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6">

                                                <div class="form-group">
                                                    <textarea class="textarea_editor form-control"  <?=$attr?> name="Remarks" rows="8"><?=$row->Remarks;?>
                                                    </textarea>
                                                </div>

                                            </div>
                                            <?php 
                                        $usertype = $this->session->userdata('usertype');
                                        if ($usertype == 'ADMIN') {
                                        ?>
                                                <div class="col-md-6 ">

                                                    <div class="form-group">
                                                        <label class="control-label ">Status</label>
                                                        <select class="form-control custom-select " name="IsActive" <?=$attr?> >

                                                            <option <?php if($row->IsActive=="1"){ echo "Selected";}?> value="1">Active</option>
                                                            <option <?php if($row->IsActive=="2"){ echo "Selected";}?> value="2">Inactive</option>

                                                        </select>
                                                    </div>

                                                    <?php
                                         }
                                        ?>

                                                </div>
                                        </div>
                                    </div>
                                </div>
 
                                            <?php
                                    if ($mode=="edit") {
                                        ?>
                                                <div class="form-actions">
                                                    <button type="submit" id="sub" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                    <a href="<?php echo base_url();?>manage/employees-masterlist" class="btn btn-inverse">Cancel</a>
                                                </div>
                                                <?php
                                    }
                                     ?>
                                                    </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- <?php
                        //  }   
                           ?>  -->

                                </form>
                            </div>
                </div>
            </div>
        </div>

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
                        <h3 class="text-themecolor">Office Staff Registration</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Transactions</a></li>
                            <li class="breadcrumb-item">Applicants</li>
                            <li class="breadcrumb-item active">Registration</li>
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
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">First Name</label>
                                                <input type="text" name="FirstName" class="form-control">

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Middle Name</label>
                                                <input type="text" name="MiddleName" class="form-control">

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Last Name</label>
                                                <input type="text" name="LastName" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group has-success">
                                        <label class="control-label">Suffix</label>
                                        <select class="form-control custom-select" name="Suffix">
                                            <option value="N/A">N/A</option>
                                            <option value="Jr">Jr.</option>
                                            <option value="Sr">Sr</option>
                                            <option value="1">I</option>
                                            <option value="2">II</option>
                                            <option value="3">III</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                          
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group has-success">
                                                <label class="control-label">Username</label>
                                                <input type="text" class="form-control " name="UserName">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group has-success">
                                                <label class="control-label">Mobile</label>
                                                <input type="text" name="MobileNum" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 ">
                                            <div class="form-group has-success">
                                                <label class="control-label">Telephone</label>
                                                <input type="text" name="LandlineNum" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                <div class="p-20">
                                                    <h3>Account No. Information</h3>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">T.I.N. </label>
                                                                        <input type="text" name="TIN" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">S.S.S. No.</label>
                                                                        <input type="text" name="SSS" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">PHILHEALTH No.</label>
                                                                        <input type="text" name="PHILHEALTH" class="form-control ">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 ">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">PAG-IBIG No.</label>
                                                                        <input type="text" name="PAGIBIG" class="form-control">
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
                                                                <button type="submit" id="sub" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                 <a href="<?php echo base_url();?>manage/employees-masterlist" class="btn btn-inverse">Cancel</a>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

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
              