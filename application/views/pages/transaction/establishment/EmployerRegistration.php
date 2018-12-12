<?php 
if (!empty($emppost)) {
    $attr="";
   foreach ($emppost as $row) 
    { 
        if ($mode=="view") {
            $attr="disabled readonly";
            
        }

        ?>

    <div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">View Employer</h3>
                <h6 class="text-muted">View</h6>

            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Transaction</li>
                    <li class="breadcrumb-item">Establishment</li>
                    <li class="breadcrumb-item active">View Employer</li>
                </ol>
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>

                <?php
            $hidden = array(
              'id' => $row->Id,
            );
            ?>


        <?php echo form_open_multipart('admin/emppost/edit','id="empform"',$hidden); ?>


             <h5>Company Details</h5>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" <?=$attr?> name="CompanyName" value="<?=$row->CompanyName;?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">Acronym</label>
                            <input type="text" <?=$attr?> name="CompanyNameAcronym"  value="<?=$row->CompanyNameAcronym;?>"class="form-control">
                        </div>
                    </div>

                       <div class="col-md-4 ">
                                        <?php 
                                        $usertype = $this->session->userdata('usertype');
                                        if ($usertype == 'ADMIN') {
                                        ?>
                                    <div class="form-group">
                                        <label class="control-label ">Status</label>
                                            <select class="form-control custom-select " <?=$attr?>
                                            name="IsActive">

                                                <option  value="1">Active</option>
                                                <option  value="2">Inactive</option>
                                             
                                            </select>
                                    </div>


                                        <?php
                                         }
                                        ?>  
                            </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="email" <?=$attr?> name="CompanyAddress" value="<?=$row->CompanyAddress;?>" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" <?=$attr?> name="CompanyEmail"  value="<?=$row->CompanyEmail;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                 <label class="control-label ">Industry Type</label>
                                    <select class="form-control custom-select" <?=$attr?>  name="IndustryType">
                                                <?php $str="";
                                                    if ($industry->num_rows() > 0) {
                                                        foreach ($industry->result() as $types) { 
                                                            if ($row->IndustryType==$types->Id){
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
                        <div class="form-group">
                                 <label class="control-label ">Establishment Type</label>
                                  <select class="form-control custom-select" <?=$attr?>  name="EstablismentType">
                                                <?php $str="";
                                                    if ($industry->num_rows() > 0) {
                                                        foreach ($industry->result() as $types) { 
                                                            if ($row->EstablismentType==$types->Id){
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
                        <div class="form-group">
                            <label class="control-label">TIN</label>
                            <input type="text" <?=$attr?> name="TIN"  value="<?=$row->TIN;?>"class="form-control">
                        </div>
                    </div>

                         


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Permit Issued Date</label>
                            <input type="date" <?=$attr?> name="PermitIssuedDate"  value="<?=$row->PermitIssuedDate;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Landline Number</label>
                            <input type="text" <?=$attr?> name="LandlineNum"  value="<?=$row->LandlineNum;?>"class="form-control">
                        </div>
                    </div>

                     <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Fax Number</label>
                            <input type="text" <?=$attr?> name="FaxNum"  value="<?=$row->FaxNum;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Owner Name</label>
                            <input type="text" <?=$attr?> name="OwnerName"  value="<?=$row->OwnerName;?>"class="form-control">
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Designation</label>
                            <input type="text" <?=$attr?> name="Designation"  value="<?=$row->Designation;?>"class="form-control">
                        </div>
                    </div>

                </div>

                <h5>Contact Person</h5>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" <?=$attr?> name="ContactPerson" value="<?=$row->ContactPerson;?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Designation</label>
                            <input type="text" <?=$attr?> name="ContactPersonDesignation"  value="<?=$row->ContactPersonDesignation;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Landline</label>
                            <input type="text" <?=$attr?> name="ContactPersonLandline" value="<?=$row->ContactPersonLandline;?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Mobile</label>
                            <input type="text" <?=$attr?> name="ContactPersonMobile"  value="<?=$row->ContactPersonMobile;?>"class="form-control">
                        </div>
                    </div>

                </div>

                <h5>Others</h5>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Dole Registration</label>
                            <input type="text" name="DoleRegistration" <?=$attr?> value="<?=$row->DoleRegistration;?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">DateIssued</label>
                            <input type="date" name="DoleRegistrationDateIssued" <?=$attr?> value="<?=$row->DoleRegistrationDateIssued;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Expiration</label>
                            <input type="date" name="DoleRegistrationExpiration" <?=$attr?> value="<?=$row->DoleRegistrationExpiration;?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">PoeaLicenseDateIssued</label>
                            <input type="date" name="PoeaLicenseDateIssued" <?=$attr?> value="<?=$row->PoeaLicenseDateIssued;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">PoeaLicenseExpiration</label>
                            <input type="date" name="PoeaLicenseExpiration" <?=$attr?> value="<?=$row->PoeaLicenseExpiration;?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">WorkingHours</label>
                            <input type="text" name="WorkingHours" <?=$attr?> value="<?=$row->WorkingHours;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Benefits</label>
                            <input type="text" name="Benefits" <?=$attr?> value="<?=$row->Benefits;?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Dress Code</label>
                             <select class="form-control custom-select" <?=$attr?>  name="DressCode">
                                                <?php $str="";
                                                    if ($dresscode->num_rows() > 0) {
                                                        foreach ($dresscode->result() as $types) { 
                                                            if ($row->DressCode==$types->Id){
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
                        <div class="form-group">
                            <label class="control-label">Spoken Language</label>
                             <select class="form-control custom-select" <?=$attr?>  name="SpokenLanguage">
                                                <?php $str="";
                                                    if ($language->num_rows() > 0) {
                                                        foreach ($language->result() as $types) { 
                                                            if ($row->SpokenLanguage==$types->Id){
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

                <?php
                            if ($mode=="edit") {
                                ?>
                            <div class="form-actions">
                              <button type="submit" id="sub-btn" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <a href="<?php echo base_url();?>manage/do/establishments/view-list" class="btn btn-inverse">Cancel</a>
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
    
                    






<?php
   }
}
else { ?>
    <div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Add New Employer</h3>
                <h6 class="text-muted">Employer Registration</h6>

            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Transaction</li>
                    <li class="breadcrumb-item">Establishment</li>
                    <li class="breadcrumb-item active">Add New Employer</li>
                </ol>
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <?php echo form_open_multipart('admin/emppost/add','id="empform"'); ?>
            <h5>Company Details</h5>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" name="CompanyName" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">Acronym</label>
                            <input type="text" name="CompanyNameAcronym"  value=""class="form-control">
                        </div>
                    </div>

                       <div class="col-md-4 ">
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

                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="text" name="CompanyAddress" value="" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" name="CompanyEmail"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                 <label class="control-label ">Industry Type</label>
                                    <select class="form-control custom-select"  name="IndustryType">
                                                  <?php
                                                            if ($industry->num_rows() > 0) {
                                                                foreach ($industry->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                    </select>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                 <label class="control-label ">Establishment Type</label>
                                    <select class="form-control custom-select"  name="EstablismentType">
                                                  <?php
                                                            if ($industry->num_rows() > 0) {
                                                                foreach ($industry->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                    </select>
                        </div>
                    </div>

                     <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">TIN</label>
                            <input type="text" name="TIN"  value=""class="form-control">
                        </div>
                    </div>

                         


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Permit Issued Date</label>
                            <input type="date" name="PermitIssuedDate"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Landline Number</label>
                            <input type="text" name="LandlineNum"  value=""class="form-control">
                        </div>
                    </div>

                     <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Fax Number</label>
                            <input type="text" name="FaxNum"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Owner Name</label>
                            <input type="text" name="OwnerName"  value=""class="form-control">
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Designation</label>
                            <input type="text" name="Designation"  value=""class="form-control">
                        </div>
                    </div>

                </div>

                <h5>Contact Person</h5>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" name="ContactPerson" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Designation</label>
                            <input type="text" name="ContactPersonDesignation"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Landline</label>
                            <input type="text" name="ContactPersonLandline" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Mobile</label>
                            <input type="text" name="ContactPersonMobile"  value=""class="form-control">
                        </div>
                    </div>

                </div>

                <h5>Others</h5>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Dole Registration</label>
                            <input type="text" name="DoleRegistration" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">DateIssued</label>
                            <input type="date" name="DoleRegistrationDateIssued"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Expiration</label>
                            <input type="date" name="DoleRegistrationExpiration" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">PoeaLicenseDateIssued</label>
                            <input type="date" name="PoeaLicenseDateIssued"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">PoeaLicenseExpiration</label>
                            <input type="date" name="PoeaLicenseExpiration" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">WorkingHours</label>
                            <input type="text" name="WorkingHours"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Benefits</label>
                            <input type="text" name="Benefits" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Dress Code</label>
                            <select class="form-control custom-select"  name="DressCode">
                                                  <?php
                                                            if ($dresscode->num_rows() > 0) {
                                                                foreach ($dresscode->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                    </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Spoken Language</label>
                            <select class="form-control custom-select"  name="SpokenLanguage">
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


                </div>
               



                            


                <div class="row">
                    <div class="col-12">
                            <div class="form-actions">
                                <button type="submit" id="sub-btn-emp" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-inverse">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

<?php    
}
?>
