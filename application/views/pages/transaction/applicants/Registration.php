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
             <?php echo form_open_multipart('admin/applicant/edit','id="applicant"',$hidden); ?>
                <div class="row p-t-20">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" name="FirstName" value="<?=$row->FirstName;?>"class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Middle Name</label>
                                                    <input type="text" name="MiddleName" value="<?=$row->MiddleName;?>"class="form-control">

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
                                                    <select type="text" name="Suffix" value="<?=$row->Suffix;?>"class="form-control">
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
                                                    <select class="form-control custom-select" value="<?=$row->Gender;?>"name="Gender">
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
                                                        <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <select class="form-control custom-select"name="CivilStatus" value="<?=$row->CivilStatus;?>">
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
                                                        <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <input type="text" name="HouseNum" class="form-control" value="<?=$row->HouseNum;?>" >

                                                </div>
                                            </div>
                                             <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Street Name</label>
                                                    <input type="text" name="StreetName" class="form-control form-control-danger" value="<?=$row->StreetName;?>" >
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
                                                        <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <select class="form-control custom-select" name="ProvinceId"  value="<?=$row->ProvinceId;?>">
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
                                                        <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <input type="text" class="form-control form-control-danger" placeholder="Email" name="EmailAddress"  value="<?=$row->EmailAddress;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Mobile</label>
                                                    <input type="text" name="MobileNum" class="form-control form-control-danger"  value="<?=$row->MobileNum;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Telephone</label>
                                                    <input type="text" name="LandlineNum" class="form-control form-control-danger"  value="<?=$row->LandlineNum;?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-12">
<div class="row">
                <div class="card">
                    <div class="card-body p-b-0">
                        <ul class="nav nav-tabs customtab2" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#employmenthistory" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Employment History</span></a> </li>
                             <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#skills" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Skills</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#disability" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Disability</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#languages" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Languages</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#education" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Education</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#other" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Other Information</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#accountinfo" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Account Information</span></a> </li>
                             <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#dependents" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Dependents</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Remarks</span></a> </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="employmenthistory" role="tabpanel">
                                <div class="p-20">
                                    <h3>Employment History</h3>
                                    

                                </div>
                            </div>
                              <div class="tab-pane" id="skills" role="tabpanel">
                                <div class="p-20">
                                    <h3>Skills</h3>
                                  
                        </div>
                    </div>
                            <div class="tab-pane" id="disability" role="tabpanel">
                                <div class="p-20">
                                    <h3>Disability</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                 <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Disability</label>
                                                    <select  class="form-control custom-select"  name="Disability" value="<?=$row->Disability;?>">
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
                                                        <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <input type="text" name="DisabilityOthers"value="<?=$row->DisabilityOthers;?>"  class="form-control " >
                                                </div>
                                            </div>
                                            </div>
                                        </div>
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
                                                    <select  class="select2 form-control custom-select" multiple="multiple" name="LanguageSpoken[]" style="width: 100%"  value="<?=$row->LanguageSpoken;?>">
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
                                                                            <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <select  class="select2 form-control custom-select" multiple="multiple"  name="LanguageRead[]" style="width: 100%" value="<?=$row->LanguageRead;?>" >
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
                                                                            <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <select  class="select2 form-control custom-select"  multiple="multiple" name="LanguageWritten[]"style="width: 100%"  value="<?=$row->LanguageWritten;?>">
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
                                                                            <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <select  class="select2 form-control custom-select" multiple="multiple"  name="Dialect[]" style="width: 100%"  value="<?=$row->Dialect;?>" >
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
                                                                            <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Is Currently Studying</label>
                                                    <select class="form-control custom-select" name="IsCurrentlyStudying"  value="<?=$row->IsCurrentlyStudying;?>">
                                                      <option <?php if($row->IsCurrentlyStudying=="1"){ echo "Selected";}?> value="Yes">Yes</option>
                                                      <option <?php if($row->IsCurrentlyStudying=="2"){ echo "Selected";}?> value="No">No</option>
                                         
                                                    </select>

                                                </div>
                                            </div>
                                               <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Last School Level</label>
                                                    <input type="text" name="LastSchoolLevel" class="form-control form-control-danger"  value="<?=$row->LastSchoolLevel;?>">
                                                </div>
                                            </div>
                                                 <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Non Student Reason</label>
                                                    <input type="text" name="NonStudentReason"  class="form-control form-control-danger"  value="<?=$row->NonStudentReason;?>">
                                                </div>
                                            </div>
                                             <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Preferred Training Course</label>
                                                    <input type="text" name="PreferredTrainingCourse"  class="form-control form-control-danger"  value="<?=$row->PreferredTrainingCourse;?>">
                                                </div>
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="tab-pane" id="other" role="tabpanel">
                                <div class="p-20">
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
                                                        <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <select  class="select2 form-control custom-select"  style="width: 100%"  value="<?=$row->PreferredJobs;?>" name="PreferredJobs[]" multiple="multiple">
                                                           <?php $str="";
                                                            if ($titles->num_rows() > 0) {

                                                                $jobtitles = json_decode($row->PreferredJobs,true);
                                                                    foreach($titles->result() as $types) {
                                                                        $str = "";
                                                                        foreach($jobtitles as $key) {
                                                                            if($key == $types->Id) {
                                                                                $str = "selected";
                                                                            }
                                                                        }
                                                                        ?>
                                                                            <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
                                                                        <?php
                                                                         
                                                                    }

                                                                }
                                                            
                                                            ?> 
                                                    </select>
                                                </div>
                                            </div>
                                                <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Preferred Locations</label>
                                                    <select  class="select2 form-control custom-select"  name="PreferredWorkLocations[]" style="width: 100%" multiple="multiple"  value="<?=$row->PreferredWorkLocations;?>">
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
                                                                            <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <select class="form-control custom-select" name="IsOFW"  value="<?=$row->IsOFW;?>">
                                                       <option <?php if($row->IsOFW=="1"){ echo "Selected";}?> value="Yes">Yes</option>
                                                      <option <?php if($row->IsOFW=="2"){ echo "Selected";}?> value="No">No</option>
                                                    </select>

                                                </div>
                                            </div>
                                               <div class="col-sm-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Is Kasambahay</label>
                                                    <select class="form-control custom-select" name="IsKasambahay"  value="<?=$row->IsKasambahay;?>">
                                                      <option <?php if($row->IsKasambahay=="1"){ echo "Selected";}?> value="Yes">Yes</option>
                                                      <option <?php if($row->IsKasambahay=="2"){ echo "Selected";}?> value="No">No</option>
                                                    </select>

                                                </div>
                                            </div>
                                             <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                 <label class="control-label">Add Image</label>
                                <input type="file"  <?=$attr?> name="PhotoPath" class="dropify" data-default-file="<?php echo base_url().$row->PhotoPath?>"/>
                            </div>
                        </div>
                      
                    </div>
                                    </div>
                                     

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="accountinfo" role="tabpanel">
                                <div class="p-20">
                                    <h3>Account No. Information</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                               <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">T.I.N. </label>
                                                    <input type="text" name="TIN" class="form-control form-control-danger"  value="<?=$row->TIN;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">S.S.S. No.</label>
                                                    <input type="text" name="SSS" class="form-control form-control-danger"  value="<?=$row->SSS;?>">
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
                                                    <input type="text" name="PAGIBIG" class="form-control form-control-danger"  value="<?=$row->PAGIBIG;?>">
                                                </div>
                                            </div>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="dependents" role="tabpanel">
                                <div class="p-20">
                                    <h3>Dependents</h3>
                                  
                        </div>
                    </div>
                     <div class="tab-pane" id="remarks" role="tabpanel">
                                <div class="p-20">
                                    <h3>Remarks</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                 <div class="col-6">
                                                    <label class="control-label">Remarks</label>  
                                                    <div class="form-group">
                                                        <textarea class="textarea_editor form-control"  name="Remarks" rows="8"><?=$row->Remarks;?></textarea>
                                                    </div>
                                                                            
                                                </div>
                                                <div class="col-md-6 ">
                                        <?php 
                                        $usertype = $this->session->userdata('usertype');
                                        if ($usertype == 'ADMIN') {
                                        ?>
                                            <div class="form-group">
                                            <label class="control-label ">Status</label>
                                            <select class="form-control custom-select "
                                            name="IsActive" <?=$attr?> >

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
             <?php echo form_open_multipart('admin/applicant/add','id="applicant"'); ?>
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
                                                     <select class="form-control custom-select"name="Suffix">
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
                                                    <input type="number" name="Age" class="form-control">

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
                                            <option <?=$str ?> value="<?=$types->Id; ?>"><?php echo $types->Name; ?></option>
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
                                            <option <?=$str ?> value="<?=$types->Id; ?>"><?php echo $types->Name; ?></option>
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
                                                    <input type="text" name="HouseNum" class="form-control" >

                                                </div>
                                            </div>
                                             <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Street Name</label>
                                                    <input type="text" name="StreetName" class="form-control" >
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
                                            <option <?=$str ?> value="<?=$types->Id; ?>"><?php echo $types->Name; ?></option>
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
                                                       <?php $str="";
                                        if ($region->num_rows() > 0) {
                                            foreach ($region->result() as $types) { 
                                                if ($types->Id==$row->ProvinceId){
                                                     $str ="Selected";
                                                }
                                                       
                                                ?>
                                            <option <?=$str ?> value="<?=$types->Id; ?>"><?php echo $types->Name; ?></option>
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
                                                    <input type="text" class="form-control "  name="EmailAddress">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Mobile</label>
                                                    <input type="text" name="MobileNum" class="form-control " >
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
                                 

                <div class="card">
                    <div class="card-body p-b-0">
                        <ul class="nav nav-tabs customtab2" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#employmenthistory" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Employment History</span></a> </li>
                             <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#skills" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Skills</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#disability" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Disability</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#languages" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Languages</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#education" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Education</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#other" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Other Information</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#accountinfo" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Account Information</span></a> </li>
                             <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#dependents" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Dependents</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Remarks</span></a> </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="employmenthistory" role="tabpanel">
                                <div class="p-20">
                                    <h3>Employment History</h3>
                                    

                                </div>
                            </div>
                            <div class="tab-pane" id="skills" role="tabpanel">
                                <div class="p-20">
                                    <h3>Skills</h3>
                                  
                        </div>
                    </div>
                            <div class="tab-pane" id="disability" role="tabpanel">
                                <div class="p-20">
                                    <h3>Disability</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                 <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Disability</label>
                                                   <select  class="form-control custom-select"  name="Disability" value="<?=$row->Disability;?>">
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
                                                        <option <?=$str?> value="<?=$types->Id?>"><?=$types->Name?></option>
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
                                                    <input type="text" name="DisabilityOthers" class="form-control " >
                                                </div>
                                            </div>
                                            </div>
                                        </div>
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
                                                    <select  class="select2 form-control custom-select"  multiple="multiple" name="LanguageSpoken[]" style="width: 100%" >
                                                         <?php
                                                            if ($language->num_rows() > 0) {
                                                                foreach ($language->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
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
                                                    <select  class="select2 form-control custom-select" multiple="multiple" name="LanguageRead[]" style="width: 100%" >
                                                        <?php
                                                            if ($language->num_rows() > 0) {
                                                                foreach ($language->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
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
                                                    <select  class="select2 form-control custom-select"  multiple="multiple"name="LanguageWritten[]"style="width: 100%" >
                                                        <?php
                                                            if ($language->num_rows() > 0) {
                                                                foreach ($language->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
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
                                                    <select  class="select2 form-control custom-select" multiple="multiple" name="Dialect[]" style="width: 100%" >
                                                        <?php
                                                            if ($dialect->num_rows() > 0) {
                                                                foreach ($dialect->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
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
                                                    <input type="text" name="NonStudentReason"  class="form-control ">
                                                </div>
                                            </div>
                                             <div class="col-sm-3 ">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Preferred Training Course</label>
                                                    <input type="text" name="PreferredTrainingCourse"  class="form-control ">
                                                </div>
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="tab-pane" id="other" role="tabpanel">
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
                                            <option <?=$str ?> value="<?=$types->Id; ?>"><?php echo $types->Name; ?></option>
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
                                                    <select  class="select2 form-control custom-select" multiple="multiple"name="PreferredJobs[]" style="width: 100%">
                                                        <?php
                                                            if ($titles->num_rows() > 0) {
                                                                foreach ($titles->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                                <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Preferred Locations</label>
                                                    <select  class="select2 form-control custom-select" multiple="multiple" name="PreferredWorkLocations[]" style="width: 100%">
                                                        <?php
                                                            if ($location->num_rows() > 0) {
                                                                foreach ($location->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
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
                                            <div class="col-md-4">
                                            <div class="card-body">
                                                 <label class="control-label">Add Photo</label>
                                                <input type="file"  name="PhotoPath" class="dropify"/>
                                     </div>
                                </div>    
                                    </div>
                                     

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="accountinfo" role="tabpanel">
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
                    </div>
                    <div class="tab-pane" id="dependents" role="tabpanel">
                                <div class="p-20">
                                    <h3>Dependents</h3>
                                  
                        </div>
                    </div>
                     <div class="tab-pane" id="remarks" role="tabpanel">
                                <div class="p-20">
                                    <h3>Remarks</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                 <div class="col-6">
                                                    <label class="control-label">Remarks</label>  
                                                    <div class="form-group">
                                                        <textarea class="textarea_editor form-control" name="Remarks" rows="8" placeholder="Enter text ..."></textarea>
                                                    </div>
                                                                            
                                                </div>
                                                <div class="col-md-6 ">
                                        <?php 
                                        $usertype = $this->session->userdata('usertype');
                                        if ($usertype == 'ADMIN') {
                                        ?>
                                            <div class="form-group">
                                            <label class="control-label ">Status</label>
                                            <select class="form-control custom-select "
                                            name="IsActive">

                                            <option  value="1">Active</option>
                                            <option  value="2">Inactive</option>
                                         
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
