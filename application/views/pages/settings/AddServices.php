<?php 
if (!empty($services)) {
    $attr="";
   foreach ($services as $row) 
    { 
        if ($mode=="view") {
            $attr="disabled readonly";
            
        }

        ?>
<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Services</h3>
                <h6 class="text-muted">Services Information</h6>

            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Settings</li>
                    <li class="breadcrumb-item active">View Services</li>
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
            <?php echo form_open_multipart('admin/services/edit','id="servicesform"',$hidden); ?>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Services Name</label>
                            <input type="text" <?=$attr?> name="Name" value="<?=$row->Name;?>" class="form-control" >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input type="text" <?=$attr?> name="Description"  value="<?=$row->Description;?>"class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row p-t-20">

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
                                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                 <label class="control-label">Add Image</label>
                                <input type="file"  <?=$attr?> name="Image" class="dropify" data-default-file="<?php echo base_url().$row->Image?>"/>
                            </div>
                        </div>
                      
                    </div>
                                </div>

                         <div class="row p-t-20">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Slug</label>
                                    <input type="text"  <?=$attr?> name="Slug" value="<?=$row->Slug;?>" class="form-control">
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
                                <textarea class="textarea_editor form-control" <?=$attr?> name="Content" rows="15" > <?=$row->Content;?></textarea>
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
                <h3 class="text-themecolor">Services</h3>
                <h6 class="text-muted">Services Information</h6>

            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Settings</li>
                    <li class="breadcrumb-item active">View Services</li>
                </ol>
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <?php echo form_open_multipart('admin/services/add','id="servicesform"'); ?>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Services Name</label>
                            <input type="text" name="Name" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input type="text" name="Description"  value=""class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row p-t-20">
                                    <div class="col-md-6 ">
                                       <div class="form-group">
                                            <label class="control-label ">Status</label>
                                            <select class="form-control custom-select "
                                            name="IsActive">
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
                                    </div>
                                    </div>
                                        <div class="col-md-6">
                                                <div class="card-body">
                                             <label class="control-label">Add Image</label>
                                              <input type="file"  name="WebImage" class="dropify"/>
                                               </div>
                                         </div>
                 </div>
                 <div class="row p-t-20">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Slug</label>
                                    <input type="text" name="Slug" value="" class="form-control">
                                </div>
                    </div>       
                                    
                  </div>     

                <div class="row">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Services Content</h3>
                    </div>

                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">

                        
                            <div class="form-group">
                                <textarea class="textarea_editor form-control" name="Content" rows="15" ></textarea>
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
