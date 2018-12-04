<?php 
if (!empty($webposts)) {
   foreach ($webposts as $row) { ?>
<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">View Web Posts</h3>
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
            <?php echo form_open('admin/webposts/add','id="webpostform"'); ?>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Post Title</label>
                            <input type="text" name="title" value="<?=$row->PostTitle;?>" class="form-control" disabled="True">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Post Description</label>
                            <input type="text" name="description"  value="<?=$row->PostDescription;?>"class="form-control" disabled="True">
                        </div>
                    </div>
                </div>

                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group has-success" ">
                                            <label class="control-label ">Post Type</label>
                                            <select class="form-control custom-select"  name="type" >
                                                 <?php $str="";
                                        if ($posttypes->num_rows() > 0) {
                                            foreach ($posttypes->result() as $types) { 
                                                if ($types->Id==$row->PostTypeId){
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

                                    <div class="col-md-6 ">
                                       <div class="form-group has-success ">
                                            <label class="control-label ">Status</label>
                                            <select class="form-control custom-select "
                                            name="status"  value="<?=$row->IsActive;?>">

                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
                                    </div>
                                    </div>
                                </div>

                                <div class="row p-t-20 ">
                                    <div class="col-md-6 ">
                                        <div class="form-group has-success "">
                            <label class="control-label">Add Tags</label>
                            <div class="tags-default">
                                <input type="text" name="tags" data-role="tagsinput"  value="<?=$row->Tags;?>" disabled="True" /> </div>

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
                                <textarea disabled class="textarea_editor form-control" name="textarea" rows="15" > <?=$row->PostContent;?></textarea>
                            </div>
                           <div class="form-actions">
                                <a href="<?php echo base_url();?>manage/settings/all-web-post" class="btn btn-inverse">Cancel</a>
                            </div>
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
            <?php echo form_open('admin/webposts/add','id="webpostform"'); ?>
            <h6 class="text-themecolor">Company Details</h6>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input type="text" name="name" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">Acronym</label>
                            <input type="text" name="acronym"  value=""class="form-control">
                        </div>
                    </div>

                     <div class="col-md-4 ">
                        <div class="form-group has-success ">
                            <label class="control-label ">Establisment Type</label>
                                <select class="form-control custom-select "
                                    name="status"  value="<?=$row->IsActive;?>">

                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                 </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">TIN</label>
                            <input type="text" name="tin" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Permit Issued Date</label>
                            <input type="date" name="permit"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Landline No.</label>
                            <input type="text" name="tin" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Fax No.</label>
                            <input type="text" name="permit"  value=""class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="text" name="permit"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" name="tin" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Website</label>
                            <input type="text" name="permit"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Owner Name</label>
                            <input type="text" name="tin" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Designation</label>
                            <input type="text" name="permit"  value=""class="form-control">
                        </div>
                    </div>
                    
                </div>

                     <h5 class="text-themecolor">Contact Person</h5>
                     <div class="row p-t-20">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" name="name" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Designation</label>
                            <input type="text" name="acronym"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                            <label class="control-label">Landline</label>
                            <input type="text" name="name" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Mobile</label>
                            <input type="text" name="acronym"  value=""class="form-control">
                        </div>
                    </div>

                     </div>

                     <h5 class="text-themecolor">Other Info</h5>
                     <div class="row p-t-20">
                        <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Dole Registration Date Issued</label>
                            <input type="date" name="name" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Dole Registration Expiration</label>
                            <input type="date" name="acronym"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                            <label class="control-label">Poea License Date  Issued</label>
                            <input type="date" name="name" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Poea License Expiration</label>
                            <input type="date" name="acronym"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">WorkingHours</label>
                            <input type="text" name="name" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Benefits</label>
                            <input type="text" name="acronym"  value=""class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">DressCode</label>
                            <input type="text" name="name" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">SpokenLanguage</label>
                            <input type="text" name="acronym"  value=""class="form-control">
                        </div>
                    </div>

                     </div>



                <div class="row">
                    <div class="col-12">
                                <button type="submit" id="sub-btn" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
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
