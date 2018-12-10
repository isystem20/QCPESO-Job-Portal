<?php 
if (!empty($modules)) {
   foreach ($modules as $row) {
    ?>
<div class="page-wrapper">

    <div class="container-fluid">

       <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 name="header-text" class="text-themecolor" >Modules</h3>
                    <h6 class="text-muted">This is the Masterlist of all the Modules.</h6>
                
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Manage</li>
                        <li class="breadcrumb-item active">Modules</li>
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
                'id' => $row->Id
            );
            ?>
            <?php echo form_open('manage/modulesmasterlist','id="modulesform"',$hidden); ?>
                <div class="row p-t-20">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" name="names"  value="<?=$row->Name;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Url</label>
                            <input type="text" name="urls"  value="<?=$row->Url;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Parent</label>
                            <input type="text" name="parents"  value="<?=$row->Parent;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input type="text" name="descriptions"  value="<?=$row->Description;?>"class="form-control">
                        </div>
                    </div>

                </div>

            
                           <div class="form-actions">
                              <button type="submit" id="sub-btn" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
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
                    <h3 name="header-text" class="text-themecolor" >Modules</h3>
                    <h6 class="text-muted">This is the Masterlist of all the Modules.</h6>
                
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Manage</li>
                        <li class="breadcrumb-item active">Modules</li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
        </div>
        <div class="card">
            <div class="card-body">
            <?php echo form_open('amanage/modulesmasterlist','id="modulesform"'); ?>
                 <div class="row p-t-20">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" name="names"  value="<?=$row->Name;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Url</label>
                            <input type="text" name="urls"  value="<?=$row->Url;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Parent</label>
                            <input type="text" name=parents"  value="<?=$row->Parent;?>"class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input type="text" name="descriptions"  value="<?=$row->Description;?>"class="form-control">
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
