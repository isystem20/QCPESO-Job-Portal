<?php 
if (!empty($webposts)) {
    $attr="";
   foreach ($webposts as $row) 
    { 
        if ($mode=="view") {
            $attr="disabled readonly";
            
        }

        ?>
<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Web Posts</h3>
                <h6 class="text-muted">Web Posts Information</h6>

            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Settings</li>
                    <li class="breadcrumb-item active">View Web Posts</li>
                </ol>
            </div>
            <div>
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
            <?php echo form_open_multipart('admin/webposts/edit','id="webpostform"',$hidden); ?>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Company</label>
                            <input type="text" <?=$attr?> name="PostTitle" value="<?=$row->PostTitle;?>" class="form-control" >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Post Description</label>
                            <input type="text" <?=$attr?> name="PostDescription"  value="<?=$row->PostDescription;?>"class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                                            <label class="control-label ">Post Type</label>
                                            <select class="form-control custom-select" <?=$attr?>  name="PostTypeId">
                                                <?php $str="";
                                                    if ($posttypes->num_rows() > 0) {
                                                        foreach ($posttypes->result() as $types) { 
                                                            if ($row->PostTypeId==$types->Id){
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

                                <div class="row p-t-20 ">
                                    <div class="col-md-6 ">
                                        <div class="form-group has-success "">
                            <label class="control-label">Add Tags</label>
                            <div class="tags-default">
                                <input type="text" <?=$attr?> name="Tags" data-role="tagsinput"  value="<?=$row->Tags;?>"/> </div>

                        </div>
                    </div>
                      <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                 <label class="control-label">Add Image</label>
                                <input type="file"  <?=$attr?> name="WebImage" class="dropify" data-default-file="<?php echo base_url().$row->WebImage?>"/>
                            </div>
                        </div>
                      
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Post Content</h3>
                    </div>

                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">

                        
                            <div class="form-group">
                                <textarea class="textarea_editor form-control" <?=$attr?> name="PostContent" rows="15" > <?=$row->PostContent;?></textarea>
                            </div>
                            <?php
                            if ($mode=="edit") {
                                ?>
                            <div class="form-actions">
                              <button type="submit" id="sub-btn" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <a href="<?php echo base_url();?>manage/settings/all-web-post" class="btn btn-inverse">Cancel</a>
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
                            <input type="text" name="CompanyEmail"  value=""class="form-control">
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
                            <select class="form-control custom-select"  name="IndustryType">
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
