<?php 
if (!empty($applicant)) {
    $attr="";
   foreach ($applicant as $row) 
    { 
        if ($mode=="view") {
            $attr="disabled readonly";
        }
        ?>
    <div class="page-wrapper">

        <div class="container-fluid">

            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Applicant Registration</h3>
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
                    <?php
            $hidden = array(
              'id' => $row->Id,
            );
            ?>
                        <?php echo form_open('admin/applicant/edit','id="applicant"',$hidden); ?>
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
                                        <div class="col-sm-2">
                                            <div class="form-group has-success">
                                                <label class="control-label">Gender</label>
                                                <select class="form-control custom-select" value="<?=$row->Gender;?>" name="Gender">
                                                    <div class="col-md-6 ">
                                                        <option <?php if($row->Gender=="Male"){ echo "Selected";}?> value="Male">Male</option>
                                                        <option <?php if($row->Gender=="Female"){ echo "Selected";}?> value="Female">Female</option>

                                                </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Birthdate</label>
                                                    <input type="date" class="form-control" value="<?=$row->BirthDate;?>" name="BirthDate">

                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Age</label>
                                                    <input type="text" name="Age" class="form-control" value="<?=$row->Age;?>">

                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Birth Place</label>
                                                    <select class="form-control custom-select" name="BirthPlace">
                                                        <?php $str="";
                                                    if ($city->num_rows() > 0) {
                                                        foreach ($city->result() as $types) { 
                                                            if ($row->BirthPlace==$types->Id){
                                                              $str="Selected";
                                                            }
                                                            else {
                                                                $str="";
                                                            }
                                                            ?>
                                                            <option <?=$str?> value="
                                                                <?=$types->Id?>">
                                                                    <?=$types->Name?>
                                                            </option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Status</label>
                                                    <select class="form-control custom-select" name="CivilStatus" value="<?=$row->CivilStatus;?>">
                                                        <option <?php if($row->CivilStatus=="Single"){ echo "Selected";}?> value="Single">Single</option>
                                                        <option <?php if($row->CivilStatus=="Married"){ echo "Selected";}?> value="Married">Married</option>
                                                        <option <?php if($row->CivilStatus=="Separated"){ echo "Selected";}?> value="Separated">Separated</option>

                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Nationality</label>
                                                    <select class="form-control custom-select" name="Nationality" value="<?=$row->Nationality;?>">
                                                        <?php $str="";
                                                    if ($national->num_rows() > 0) {
                                                        foreach ($national->result() as $types) { 
                                                            if ($row->Nationality==$types->Id){
                                                              $str="Selected";
                                                            }
                                                            else {
                                                                $str="";
                                                            }
                                                            ?>
                                                            <option <?=$str?> value="
                                                                <?=$types->Id?>">
                                                                    <?=$types->Name?>
                                                            </option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">

                                            <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">House No</label>
                                                    <input type="text" name="HouseNum" class="form-control" value="<?=$row->HouseNum;?>">

                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Street Name</label>
                                                    <input type="text" name="StreetName" class="form-control form-control-danger" value="<?=$row->StreetName;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">City</label>
                                                    <select class="form-control custom-select" name="CityId" value="<?=$row->CityId;?>">
                                                        <?php $str="";
                                                    if ($city->num_rows() > 0) {
                                                        foreach ($city->result() as $types) { 
                                                            if ($row->CityId==$types->Id){
                                                              $str="Selected";
                                                            }
                                                            else {
                                                                $str="";
                                                            }
                                                            ?>
                                                            <option <?=$str?> value="
                                                                <?=$types->Id?>">
                                                                    <?=$types->Name?>
                                                            </option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Province</label>
                                                    <select class="form-control custom-select" name="ProvinceId" value="<?=$row->ProvinceId;?>">
                                                        <option <?php if($row->ProvinceId=="0"){ echo "Selected";}?> value="0">N/A</option>
                                                        <?php $str="";
                                                    if ($region->num_rows() > 0) {
                                                        foreach ($region->result() as $types) { 
                                                            if ($row->ProvinceId==$types->Id){
                                                              $str="Selected";
                                                            }
                                                            else {
                                                                $str="";
                                                            }
                                                            ?>
                                                            <option <?=$str?> value="
                                                                <?=$types->Id?>">
                                                                    <?=$types->Name?>
                                                            </option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" class="form-control form-control-danger" placeholder="Email" name="EmailAddress" value="<?=$row->EmailAddress;?>">
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
                                <h3>Disability</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Disability</label>
                                                    <select class="form-control custom-select" name="Disability" value="<?=$row->Disability;?>">
                                                        <option value="N/A">N/A</option>
                                                        <?php $str="";
                                                    if ($disability->num_rows() > 0) {
                                                        foreach ($disability->result() as $types) { 
                                                            if ($row->Disability==$types->Id){
                                                              $str="Selected";
                                                            }
                                                            else {
                                                                $str="";
                                                            }
                                                            ?>
                                                            <option <?=$str?> value="
                                                                <?=$types->Id?>">
                                                                    <?=$types->Name?>
                                                            </option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Others Please Specify</label>
                                                    <input type="text" name="DisabilityOthers" value="<?=$row->DisabilityOthers;?>" class="form-control ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Education</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Is Currently Studying</label>
                                                    <select class="form-control custom-select" name="IsCurrentlyStudying" value="<?=$row->IsCurrentlyStudying;?>">
                                                        <option <?php if($row->IsCurrentlyStudying=="1"){ echo "Selected";}?> value="Yes">Yes</option>
                                                        <option <?php if($row->IsCurrentlyStudying=="2"){ echo "Selected";}?> value="No">No</option>

                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Last School Level</label>
                                                    <input type="text" name="LastSchoolLevel" class="form-control form-control-danger" value="<?=$row->LastSchoolLevel;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Non Student Reason</label>
                                                    <input type="text" name="NonStudentReason" class="form-control form-control-danger" value="<?=$row->NonStudentReason;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Preferred Training Course</label>
                                                    <input type="text" name="PreferredTrainingCourse" class="form-control form-control-danger" value="<?=$row->PreferredTrainingCourse;?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <h3>Other Information</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Employment Status</label>
                                                    <select class="form-control custom-select" name="EmploymentStatus">
                                                        <?php $str="";
                                                    if ($status->num_rows() > 0) {
                                                        foreach ($status->result() as $types) { 
                                                            if ($row->EmploymentStatus==$types->Id){
                                                              $str="Selected";
                                                            }
                                                            else {
                                                                $str="";
                                                            }
                                                            ?>
                                                            <option <?=$str?> value="
                                                                <?=$types->Id?>">
                                                                    <?=$types->Name?>
                                                            </option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Preferred Jobs</label>
                                                    <input type="text" name="PreferredTrainingCourse" class="form-control form-control-danger" value="<?=$row->PreferredJobs;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Preferred Locations</label>
                                                    <select class="select2 form-control custom-select" id="PreferredWorkLocations" name="PreferredWorkLocations" style="width: 100%" multiple="multiple" value="<?=$row->PreferredWorkLocations;?>">
                                                        <?php $str="";
                                                            if ($location->num_rows() > 0) {
                                                                $jobloc = json_decode($row->PreferredWorkLocations,true);
                                                                    foreach($location->result() as $types) {
                                                                        $str = "";
                                                                        foreach($jobloc as $key) {
                                                                            if($key == $types->Id) {
                                                                                $str = "selected";
                                                                            }
                                                                        }
                                                                        ?>
                                                            <option <?=$str?> value="
                                                                <?=$types->Id?>">
                                                                    <?=$types->Name?>
                                                            </option>
                                                            <?php
                                                                    }
                                                                }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Is OFW</label>
                                                    <select class="form-control custom-select" name="IsOFW" value="<?=$row->IsOFW;?>">
                                                        <option <?php if($row->IsOFW=="1"){ echo "Selected";}?> value="Yes">Yes</option>
                                                        <option <?php if($row->IsOFW=="2"){ echo "Selected";}?> value="No">No</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Is Kasambahay</label>
                                                    <select class="form-control custom-select" name="IsKasambahay" value="<?=$row->IsKasambahay;?>">
                                                        <option <?php if($row->IsKasambahay=="1"){ echo "Selected";}?> value="Yes">Yes</option>
                                                        <option <?php if($row->IsKasambahay=="2"){ echo "Selected";}?> value="No">No</option>
                                                    </select>

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
                                                    <textarea class="textarea_editor form-control" name="Remarks" rows="8"><?=$row->Remarks;?>
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

                                <!--   <?php
                           //if ($row->UserType=='ADMIN') {
                             ?>   -->
                                <div class="card">
                                    <div class="card-body p-b-0">
                                        <ul class="nav nav-tabs customtab2" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#employmenthistory" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Employment History</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#skills" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Skills</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#languages" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Languages</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#education" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Education History</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#dependents" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Dependents</span></a> </li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="employmenthistory" role="tabpanel">
                                                <div class="p-20">
                                                    <h3>Employment History</h3>
                                                    <?php
                            if ($mode=="edit") {
                                ?>
                                                        <a data-toggle="modal" data-target="#employmentmodal" class="btn waves-effect waves-light btn-success">Add</a>
                                                        <?php
                            }
                             ?>
                                                            <div class="table-responsive m-t-40">
                                                                <table id="employ" class="table table-bordered table-striped" data-action="">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Company Name</th>
                                                                            <th>Held Position</th>
                                                                            <th>Company Address</th>
                                                                            <th>Inclusive Date From</th>
                                                                            <th>Inclusive To</th>
                                                                                <?php
                            if ($mode=="edit") {
                                ?>
                                                                            <th>Action</th>
                                                                             <?php
                            }
                             ?>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <?php

                                                                    if ($row->WorkTbl->num_rows() > 0) {
                                                                    foreach ($row->WorkTbl->result() as $workhist) { ?>
                                                                            <tr id="row<?=$workhist->ApplicantId; ?>">
                                                                                <td>
                                                                                    <input type="hidden" readonly class="form-control" name="WorkDataId" value="<?php echo $workhist->Id; ?>">

                                                                                    <input type="text" placeholder="Can not be empty." readonly class="form-control CompanyName" name="CompanyName" value="<?php echo $workhist->CompanyAddress; ?>">
                                                                                </td>

                                                                                <td>
                                                                                    <input type="text" class="form-control HeldPosition" name="HeldPosition" value="<?php echo $workhist->HeldPosition; ?>">
                                                                                </td>

                                                                                <td>
                                                                                    <input type="text" class="form-control CompanyAddress" name="CompanyAddress" value="<?php echo $workhist->CompanyAddress; ?>">
                                                                                </td>

                                                                                <td>
                                                                                    <input type="text" class="form-control InclusiveDateFrom" name="InclusiveDateFrom" value="<?php echo $workhist->InclusiveDateFrom; ?>">
                                                                                </td>

                                                                                <td>
                                                                                    <input type="text" class="form-control InclusiveDateTo" name="InclusiveDateTo" value="<?php echo $workhist->InclusiveDateTo; ?>">
                                                                                </td>
                                                                                 <?php
                            if ($mode=="edit") {
                                ?>
                                                                                <td class="actions">
                                                                                    <button class="btn btn-danger btn-xs tr-remover">Remove<i class="fa fa-trash-o "></i></button>
                                                                                </td>
                                                                                                      <?php
                            }
                             ?>
                                                                                <tr>

                                                                                    <?php
                                            }
                                        }
                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="skills" role="tabpanel">
                                                <div class="p-20">
                                                    <h3>Skills History</h3>
                                                    <?php
                            if ($mode=="edit") {
                                ?>
                                                        <a data-toggle="modal" data-target="#skillmodal" class="btn waves-effect waves-light btn-success">Add</a>
                                                        <?php
                            }
                             ?>
                                                            <div class="table-responsive m-t-40">
                                                                <table id="skill" class="table table-bordered table-striped" data-action="">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Skill Name</th>
                                                                            <th>Description</th>
                                                                            <?php
                            if ($mode=="edit") {
                                ?>
                                                                            <th>Action</th>
                                                                              <?php
                            }
                             ?>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <?php
                                                                         // print_r($row->WorkTbl->result_array());
                                                                    if ($row->SkillTbl->num_rows() > 0) {
                                                                    foreach ($row->SkillTbl->result() as $skills) { ?>
                                                                            <tr id="row<?=$skills->ApplicantId; ?>">

                                                                                <td>
                                                                                    <input type="hidden" readonly class="form-control" name="SkillId" value="<?php echo $skills->Id; ?>">
                                                                                    <input type="text" placeholder="Can not be empty." readonly class="form-control Name" name="Name" value="<?php echo $skills->Name; ?>">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control Description" name="Description" value="<?php echo $skills->Description; ?>">
                                                                                </td>
                                                                                 <?php
                            if ($mode=="edit") {
                                ?>
                                                                                <td class="actions">
                                                                                    <button class="btn btn-danger btn-xs tr-remover">Remove<i class="fa fa-trash-o "></i></button>
                                                                                </td>
                                                                                <?php
                            }
                             ?>
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

                                            <div class="tab-pane" id="languages" role="tabpanel">
                                                <div class="p-20">
                                                    <h3>Languages</h3>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">Languages Spoken</label>
                                                                        <select class="select2 form-control custom-select" multiple="multiple" name="LanguageSpoken[]" style="width: 100%" value="<?=$row->LanguageSpoken;?>">
                                                                            <?php $str="";
                                                            if ($language->num_rows() > 0) {
                                                                $lang = json_decode($row->LanguageSpoken,true);
                                                                    foreach($language->result() as $types) {
                                                                        $str = "";
                                                                        foreach($lang as $key) {
                                                                            if($key == $types->Id) {
                                                                                $str = "selected";
                                                                            }
                                                                        }
                                                                        ?>
                                                                                <option <?=$str?> value="
                                                                                    <?=$types->Id?>">
                                                                                        <?=$types->Name?>
                                                                                </option>
                                                                                <?php
                                                                    }
                                                                }
                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">Languages Read</label>
                                                                        <select class="select2 form-control custom-select" multiple="multiple" name="LanguageRead[]" style="width: 100%" value="<?=$row->LanguageRead;?>">
                                                                            <?php $str="";
                                                            if ($language->num_rows() > 0) {
                                                                $lang = json_decode($row->LanguageRead,true);
                                                                    foreach($language->result() as $types) {
                                                                        $str = "";
                                                                        foreach($lang as $key) {
                                                                            if($key == $types->Id) {
                                                                                $str = "selected";
                                                                            }
                                                                        }
                                                                        ?>
                                                                                <option <?=$str?> value="
                                                                                    <?=$types->Id?>">
                                                                                        <?=$types->Name?>
                                                                                </option>
                                                                                <?php
                                                                    }
                                                                }
                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">Languages Written</label>
                                                                        <select class="select2 form-control custom-select" multiple="multiple" name="LanguageWritten[]" style="width: 100%" value="<?=$row->LanguageWritten;?>">
                                                                            <?php $str="";
                                                            if ($language->num_rows() > 0) {
                                                                $lang = json_decode($row->LanguageWritten,true);
                                                                    foreach($language->result() as $types) {
                                                                        $str = "";
                                                                        foreach($lang as $key) {
                                                                            if($key == $types->Id) {
                                                                                $str = "selected";
                                                                            }
                                                                        }
                                                                        ?>
                                                                                <option <?=$str?> value="
                                                                                    <?=$types->Id?>">
                                                                                        <?=$types->Name?>
                                                                                </option>
                                                                                <?php
                                                                    }
                                                                }
                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group has-success">
                                                                        <label class="control-label">Dialect</label>
                                                                        <select class="select2 form-control custom-select" multiple="multiple" name="Dialect[]" style="width: 100%" value="<?=$row->Dialect;?>">
                                                                            <?php $str="";
                                                            if ($dialect->num_rows() > 0) {
                                                                $lang = json_decode($row->Dialect,true);
                                                                    foreach($dialect->result() as $types) {
                                                                        $str = "";
                                                                        foreach($lang as $key) {
                                                                            if($key == $types->Id) {
                                                                                $str = "selected";
                                                                            }
                                                                        }
                                                                        ?>
                                                                                <option <?=$str?> value="
                                                                                    <?=$types->Id?>">
                                                                                        <?=$types->Name?>
                                                                                </option>
                                                                                <?php
                                                                    }
                                                                }
                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="education" role="tabpanel">
                                                <div class="p-20">
                                                    <h3>Education</h3>
                                                    <?php
                            if ($mode=="edit") {
                                ?>
                                                        <a data-toggle="modal" data-target="#educationmodal" class="btn waves-effect waves-light btn-success">Add</a>
                                                        <?php
                            }
                             ?>
                                                            <div class="table-responsive m-t-40">
                                                                <table id="educ" class="table table-bordered table-striped" data-action="">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>School Name</th>
                                                                            <th>Program</th>
                                                                            <th>Highest Level</th>
                                                                            <th>Year Graduated</th>
                                                                            <th>Last School Year Attended</th>
                                                                            <?php
                            if ($mode=="edit") {
                                ?>
                                                                            <th>Action</th>
                                                                               <?php
                            }
                             ?>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <?php

                                                                    if ($row->EducTbl->num_rows() > 0) {
                                                                    foreach ($row->EducTbl->result() as $educhist) { ?>
                                                                            <tr id="row<?=$educhist->ApplicantId; ?>">

                                                                                <td>
                                                                                    <input type="hidden" readonly class="form-control Id" name="EducId" value="<?php echo $educhist->Id; ?>">
                                                                                    <input type="text" placeholder="Can not be empty." readonly class="form-control SchoolName" name="SchoolName" value="<?php echo $educhist->SchoolName; ?>">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control ProgramCourse" name="ProgramCourse" value="<?php echo $educhist->ProgramCourse; ?>">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control HighestLevel" name="HighestLevel" value="<?php echo $educhist->HighestLevel; ?>">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control YearGraduated" name="YearGraduated" value="<?php echo $educhist->YearGraduated; ?>">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control YearLastAttended" name="YearLastAttended" value="<?php echo $educhist->YearLastAttended; ?>">
                                                                                </td>
                                                                                  <?php
                            if ($mode=="edit") {
                                ?>
                                                                                <td class="actions">
                                                                                    <button class="btn btn-danger btn-xs tr-remover">Remove<i class="fa fa-trash-o "></i></button>
                                                                                </td>
                                                                                  <?php
                            }
                             ?>
                                                                                <tr>

                                                                                    <?php
                                            }
                                        }
                                        ?>
                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="dependents" role="tabpanel">
                                                <div class="p-20">
                                                    <h3>Dependents</h3>
                                                    <?php
                            if ($mode=="edit") {
                                ?>
                                                        <a data-toggle="modal" data-target="#dependentsmodal" class="btn waves-effect waves-light btn-success">Add</a>
                                                        <?php
                            }
                             ?>
                                                            <div class="table-responsive m-t-40">
                                                                <table id="depends" class="table table-bordered table-striped" data-action="">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Description</th>
                                                                              <?php
                            if ($mode=="edit") {
                                ?>
                                                                            <th>Action</th>
                                                                             <?php
                            }
                             ?>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                         // print_r($row->WorkTbl->result_array());
                                                                    if ($row->DependentTbl->num_rows() > 0) {
                                                                    foreach ($row->DependentTbl->result() as $depends) { ?>
                                                                            <tr id="row<?=$depends->ApplicantId; ?>">

                                                                                <td>
                                                                                    <input type="hidden" readonly class="form-control" name="DependentDataId" value="<?php echo $depends->Id; ?>">
                                                                                    <input type="text" placeholder="Can not be empty." readonly class="form-control Name" name="DependentName" value="<?php echo $depends->Name; ?>">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control Description" name="DependentDescription" value="<?php echo $depends->Description; ?>">
                                                                                </td>
                                                                                 <?php
                            if ($mode=="edit") {
                                ?>
                                                                                <td class="actions">
                                                                                    <button class="btn btn-danger btn-xs tr-remover">Remove<i class="fa fa-trash-o "></i></button>
                                                                                </td>
                                                                                 <?php
                            }
                             ?>
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
                                            <?php
                                    if ($mode=="edit") {
                                        ?>
                                                <div class="form-actions">
                                                    <button type="submit" id="sub-btn" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                    <a href="<?php echo base_url();?>manage/transactions/all-applicant" class="btn btn-inverse">Cancel</a>
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
                        <h3 class="text-themecolor">Applicant Registration</h3>
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
                        <?php echo form_open('admin/applicant/add','id="applicant"'); ?>
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
                                        <div class="col-sm-2">
                                            <div class="form-group has-success">
                                                <label class="control-label">Gender</label>
                                                <select class="form-control custom-select" name="Gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group has-success">
                                                <label class="control-label">Birthdate</label>
                                                <input type="date" class="form-control" name="BirthDate">

                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group has-success">
                                                <label class="control-label">Age</label>
                                                <input type="text" name="Age" class="form-control">

                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group has-success">
                                                <label class="control-label">Birth Place</label>
                                                <select class="form-control custom-select" name="BirthPlace">
                                                    <?php $str="";
                                        if ($city->num_rows() > 0) {
                                            foreach ($city->result() as $types) { 
                                                if ($types->Id==$row->CityId){
                                                     $str ="Selected";
                                                }
                                                ?>
                                                        <option <?=$str ?> value="
                                                            <?=$types->Id; ?>">
                                                                <?php echo $types->Name; ?>
                                                        </option>
                                                        <?php
                                            }
                                        }
                                        ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group has-success">
                                                <label class="control-label">Civil Status</label>
                                                <select class="form-control custom-select" name="CivilStatus">
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Separated">Separated</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group has-success">
                                                <label class="control-label">Nationality</label>
                                                <select class="form-control custom-select" name="Nationality">
                                                    <?php $str="";
                                        if ($national->num_rows() > 0) {
                                            foreach ($national->result() as $types) { 
                                                if ($types->Id==$row->Nationality){
                                                     $str ="Selected";
                                                }
                                                ?>
                                                        <option <?=$str ?> value="
                                                            <?=$types->Id; ?>">
                                                                <?php echo $types->Name; ?>
                                                        </option>
                                                        <?php
                                            }
                                        }
                                        ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">

                                        <div class="col-sm-3">
                                            <div class="form-group has-success">
                                                <label class="control-label">House No</label>
                                                <input type="text" name="HouseNum" class="form-control">

                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group has-success">
                                                <label class="control-label">Street Name</label>
                                                <input type="text" name="StreetName" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group has-success">
                                                <label class="control-label">City</label>
                                                <select class="form-control custom-select" name="CityId">
                                                    <?php $str="";
                                        if ($city->num_rows() > 0) {
                                            foreach ($city->result() as $types) { 
                                                if ($types->Id==$row->CityId){
                                                     $str ="Selected";
                                                }
                                                ?>
                                                        <option <?=$str ?> value="
                                                            <?=$types->Id; ?>">
                                                                <?php echo $types->Name; ?>
                                                        </option>
                                                        <?php
                                            }
                                        }
                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group has-success">
                                                <label class="control-label">Province</label>
                                                <select class="form-control custom-select" name="ProvinceId">
                                                    <option value="0">N/A</option>
                                                    <?php $str="";
                                        if ($region->num_rows() > 0) {
                                            foreach ($region->result() as $types) { 
                                                if ($types->Id==$row->ProvinceId){
                                                     $str ="Selected";
                                                }
                                                ?>
                                                        <option <?=$str ?> value="
                                                            <?=$types->Id; ?>">
                                                                <?php echo $types->Name; ?>
                                                        </option>
                                                        <?php
                                            }
                                        }
                                        ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group has-success">
                                                <label class="control-label">Email</label>
                                                <input type="text" class="form-control " name="EmailAddress">
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

                            <h3>Disability</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <label class="control-label">Disability</label>
                                                <select class="form-control custom-select" name="Disability" value="<?=$row->Disability;?>">
                                                    <option value="N/A">N/A</option>
                                                    <?php $str="";
                                        if ($disability->num_rows() > 0) {
                                            foreach ($disability->result() as $types) { 
                                                if ($types->Id==$row->Disability){
                                                     $str ="Selected";
                                                }
                                                ?>
                                                        <option <?=$str ?> value="
                                                            <?=$types->Id; ?>">
                                                                <?php echo $types->Name; ?>
                                                        </option>
                                                        <?php
                                            }
                                        }
                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-success">
                                                <label class="control-label">Others Please Specify</label>
                                                <input type="text" name="DisabilityOthers" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3>Education</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group has-success">
                                                <label class="control-label">Is Currently Studying</label>
                                                <select class="form-control custom-select" name="IsCurrentlyStudying">
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-3 ">
                                            <div class="form-group has-success">
                                                <label class="control-label">Last School Level</label>
                                                <input type="text" name="LastSchoolLevel" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 ">
                                            <div class="form-group has-success">
                                                <label class="control-label">Non Student Reason</label>
                                                <input type="text" name="NonStudentReason" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 ">
                                            <div class="form-group has-success">
                                                <label class="control-label">Preferred Training Course</label>
                                                <input type="text" name="PreferredTrainingCourse" class="form-control ">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-20">
                                    <h3>Other Information</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group has-success">
                                                        <label class="control-label">Employment Status</label>
                                                        <select class="form-control custom-select" name="EmploymentStatus">
                                                            <?php $str="";
                                        if ($status->num_rows() > 0) {
                                            foreach ($status->result() as $types) { 
                                                if ($types->Id==$row->EmploymentStatus){
                                                     $str ="Selected";
                                                }
                                                ?>
                                                                <option <?=$str ?> value="
                                                                    <?=$types->Id; ?>">
                                                                        <?php echo $types->Name; ?>
                                                                </option>
                                                                <?php
                                            }
                                        }
                                        ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group has-success">
                                                        <label class="control-label">Preferred Jobs</label>
                                                        <input type="text" name="PreferredJobs" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group has-success">
                                                        <label class="control-label">Preferred Locations</label>
                                                        <select class="select2 form-control custom-select" multiple="multiple" id="PreferredWorkLocations" name="PreferredWorkLocations" style="width: 100%">
                                                            <?php
                                                            if ($location->num_rows() > 0) {
                                                                foreach ($location->result() as $row) { ?>
                                                                    <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?>
                                                                                                </option>
                                                                                                <?php
                                                            }
                                                        }
                                                        ?>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group has-success">
                                                        <label class="control-label">Is OFW</label>
                                                        <select class="form-control custom-select" name="IsOFW">
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group has-success">
                                                        <label class="control-label">Is Kasambahay</label>
                                                        <select class="form-control custom-select" name="IsKasambahay">
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                        </select>

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
                                                <div class="card">
                                                    <div class="card-body p-b-0">
                                                        <ul class="nav nav-tabs customtab2" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#employmenthistory" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Employment History</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#skills" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Skills</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#languages" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Languages</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#education" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Education History</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#dependents" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Dependents</span></a> </li>

                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="employmenthistory" role="tabpanel">
                                                                <div class="p-20">
                                                                    <h3>Employment History</h3>

                                                                    <a data-toggle="modal" data-target="#employmentmodal" class="btn waves-effect waves-light btn-success">Add</a>
                                                                    <div class="table-responsive m-t-40">
                                                                        <table id="employ" class="table table-bordered table-striped" data-action="">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Company Name</th>
                                                                                    <th>Held Position</th>
                                                                                    <th>Company Address</th>
                                                                                    <th>Date From</th>
                                                                                    <th>Date To</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            </tbody>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane" id="skills" role="tabpanel">
                                                                <div class="p-20">
                                                                    <h3>Skills History</h3>

                                                                    <a data-toggle="modal" data-target="#skillmodal" class="btn waves-effect waves-light btn-success">Add</a>
                                                                    <div class="table-responsive m-t-40">
                                                                        <table id="skill" class="table table-bordered table-striped" data-action="">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Skill Name</th>
                                                                                    <th>Description</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            </tbody>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane" id="languages" role="tabpanel">
                                                                <div class="p-20">
                                                                    <h3>Languages</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group has-success">
                                                                                        <label class="control-label">Languages Spoken</label>
                                                                                        <select class="select2 form-control custom-select" multiple="multiple" id="LanguageSpoken" name="LanguageSpoken" style="width: 100%">
                                                                                            <?php
                                                            if ($language->num_rows() > 0) {
                                                                foreach ($language->result() as $row) { ?>
                                                                                                <option value="<?=$row->Id; ?>">
                                                                                                    <?php echo $row->Name; ?>
                                                                                                </option>
                                                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group has-success">
                                                                                        <label class="control-label">Languages Read</label>
                                                                                        <select class="select2 form-control custom-select" multiple="multiple" id="LanguageRead" name="LanguageRead" style="width: 100%">
                                                                                            <?php
                                                            if ($language->num_rows() > 0) {
                                                                foreach ($language->result() as $row) { ?>
                                                                                                <option value="<?=$row->Id; ?>">
                                                                                                    <?php echo $row->Name; ?>
                                                                                                </option>
                                                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group has-success">
                                                                                        <label class="control-label">Languages Written</label>
                                                                                        <select class="select2 form-control custom-select" multiple="multiple" id="LanguageWritten" name="LanguageWritten" style="width: 100%">
                                                                                            <?php
                                                            if ($language->num_rows() > 0) {
                                                                foreach ($language->result() as $row) { ?>
                                                                                                <option value="<?=$row->Id; ?>">
                                                                                                    <?php echo $row->Name; ?>
                                                                                                </option>
                                                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group has-success">
                                                                                        <label class="control-label">Dialect</label>
                                                                                        <select class="select2 form-control custom-select" multiple="multiple" id="Dialect" name="Dialect" style="width: 100%">
                                                                                            <?php
                                                            if ($dialect->num_rows() > 0) {
                                                                foreach ($dialect->result() as $row) { ?>
                                                                                                <option value="<?=$row->Id; ?>">
                                                                                                    <?php echo $row->Name; ?>
                                                                                                </option>
                                                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="education" role="tabpanel">
                                                                <div class="p-20">
                                                                    <h3>Education</h3>
                                                                    <a data-toggle="modal" data-target="#educationmodal" class="btn waves-effect waves-light btn-success">Add</a>
                                                                    <div class="table-responsive m-t-40">
                                                                        <table id="educ" class="table table-bordered table-striped" data-action="">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>School Name</th>
                                                                                    <th>Program</th>
                                                                                    <th>Highest Level</th>
                                                                                    <th>Year Graduated</th>
                                                                                    <th>Last School Year Attended</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            </tbody>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane" id="dependents" role="tabpanel">
                                                                <div class="p-20">
                                                                    <h3>Dependents</h3>
                                                                    <a data-toggle="modal" data-target="#dependentsmodal" class="btn waves-effect waves-light btn-success">Add</a>
                                                                    <div class="table-responsive m-t-40">
                                                                        <table id="depends" class="table table-bordered table-striped" data-action="">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Name</th>
                                                                                    <th>Description</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            </tbody>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-actions">
                                                                <button type="submit" id="sub-btn" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                <button type="button" class="btn btn-inverse">Cancel</button>
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
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="employmentmodal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Employment History</h4>
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>

                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Company Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="CompanyName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Held Position</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="HeldPosition">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Company Address</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="CompanyAddress">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Inclusive Dates</label>
                                        <div class="col-sm-12">

                                            <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                                <input type="date" class="form-control dpd1" id="InclusiveDateFrom">
                                                <span class="input-group-addon">To</span>
                                                <input type="date" class="form-control dpd2" id="InclusiveDateTo">
                                            </div>
                                            <!-- <input type="text" class="form-control" placeholder="MM/YY-MM/YY" id="graduatedate"> -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="button" class="btn btn-info btn-sm" id="addemployment">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="skillmodal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Skill</h4>
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>

                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Skill</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Description</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="Description">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="button" class="btn btn-info btn-sm" id="addskill">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="educationmodal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Education Background</h4>
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>

                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">School Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="SchoolName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Program</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="ProgramCourse">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Highest Level</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="HighestLevel">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Year Graduated</label>
                                        <div class="col-sm-12">

                                            <div class="input-group input-large" data-date-format="mm/dd/yyyy">
                                                <input type="date" class="form-control dpd1" id="YearGraduated">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Year Last Attended</label>
                                        <div class="col-sm-12">

                                            <div class="input-group input-large" data-date-format="mm/dd/yyyy">
                                                <input type="date" class="form-control dpd1" id="YearLastAttended">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="button" class="btn btn-info btn-sm" id="addeducation">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="dependentsmodal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Dependent</h4>
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>

                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="DependentName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Description</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="DependentDescription">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="button" class="btn btn-info btn-sm" id="adddepend">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>