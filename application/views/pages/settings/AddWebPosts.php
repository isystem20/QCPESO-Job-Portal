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
                            <label class="control-label">Post Title</label>
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
                <h3 class="text-themecolor">Add New Web Posts</h3>
                <h6 class="text-muted">Web Posts Information</h6>

            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Settings</li>
                    <li class="breadcrumb-item active">Add New Web Posts</li>
                </ol>
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <?php echo form_open_multipart('admin/webposts/add','id="webpostform"'); ?>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Post Title</label>
                            <input type="text" name="PostTitle" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Post Description</label>
                            <input type="text" name="PostDescription"  value=""class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                                            <label class="control-label ">Post Type</label>
                                            <select class="form-control custom-select"  name="PostTypeId">
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

                                <div class="row p-t-20 ">
                                    <div class="col-md-6 ">
                                        <div class="form-group has-success "">
                            <label class="control-label">Add Tags</label>
                            <div class="tags-default">
                                <input type="text" name="Tags" data-role="tagsinput"  value="" placeholder="Add New Search Tags" /> </div>

                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="card-body">
                                 <label class="control-label">Add Image</label>
                                <input type="file"  name="WebImage" class="dropify"/>
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
                                <textarea class="textarea_editor form-control" name="PostContent" rows="15" ></textarea>
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
