

<!-- sample modal content -->
<div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="header-text" class="modal-title">Add New Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <?php
            $hidden = array(
              'itemid' => '',
            );
            ?>
            <?php echo form_open('admin/categories/add','id="add-form"',$hidden); ?>
                <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Name: </label>
                    <div class="col-10">
                        <input type="text" name="name" class="form-control" placeholder="A unique name for this category">                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="message-text" class="col-2 control-label">Description:</label>
                    <div class="col-10">
                        <textarea name="description" class="form-control" placeholder="Short description"></textarea>
                    </div>
                </div>
                <div class="form-group row viewing">
                    <label for="recipient-name" class="col-2 control-label">Created By: </label>
                    <div class="col-10">
                        <input type="text" name="created" class="form-control">
                    </div>
                </div>
                <div class="form-group row viewing">
                    <label for="recipient-name" class="col-2 control-label">Modified By: </label>
                    <div class="col-10">
                        <input type="text" name="modified" class="form-control">
                    </div>
                </div>
                <div class="form-group row viewing">
                    <label for="recipient-name" class="col-2 control-label">Version: </label>
                    <div class="col-10">
                        <input type="text" name="version" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Status: </label>
                    <div class="col-10">
                        <select name="status" class="form-control">
                            <option value="1">Active (Activate now)</option>
                            <option value="2">Inactive (Register but activate later)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" id="add-submit" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>



<div class="modal fade"  id="del-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <?php
            $hidden = array(
              'id' => '',
              'exname' => '',
            );
            ?>
            <?php echo form_open('admin/categories/del','id="del-form"',$hidden); ?>

            <div class="modal-header" style="background-color: #ff6c60;">
                <h4 class="modal-title" id="mySmallModalLabel">Warning!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body"> 
                <center>
                You are about to delete this record. <br><b>Are you sure?</b>                  
                </center>
            </div>

            <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                  <button class="btn btn-danger" id="del-submit" type="submit"> Confirm</button>
            </div>      
             <?php echo form_close(); ?>     
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>





<!-- /.job application -->


<!-- sample modal content -->






<style type="text/css">
    .form-control:read-only {
        background: #ffffff !important;
    }

</style>



<div class="modal fade"  id="approve-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <?php
            $hidden = array(
              'id' => '',
              
            );
            ?>
            <?php echo form_open('admin/jobposts/approve','id="approve-form"',$hidden); ?>

            <div class="modal-header" style="background-color: #ffc04c;">
                <h4 class="modal-title" id="mySmallModalLabel">Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body"> 
                <center>
                You are about to approve this job item. <br><b>Are you sure?</b>                  
                </center>
            </div>

            <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                  <button class="btn btn-warning" id="approve-submit" type="submit"> Confirm</button>
            </div>      
             <?php echo form_close(); ?>     
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

//modules
<div id="modules-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="header-text" class="modal-title">Add New Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <?php
            $hidden = array(
              'itemid' => '',
            );
            ?>
            <?php echo form_open('admin/categories/add','id="modules-form"',$hidden); ?>
                <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Name: </label>
                    <div class="col-10">
                        <input type="text" name="name" class="form-control" placeholder="A unique name for this category">                        
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Url: </label>
                    <div class="col-10">
                        <input type="text" name="url" class="form-control" placeholder="Enter a Url">                        
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Parent: </label>
                    <div class="col-10">
                        <select name="status" class="form-control">
                            <option value="<?php echo $get->$this->$id; ?>"></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>                      
                    </div>
                </div>
                <div class="form-group row">
                    <label for="message-text" class="col-2 control-label">Description:</label>
                    <div class="col-10">
                        <textarea name="description" class="form-control" placeholder="Short description"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Category: </label>
                    <div class="col-10">
                        <select name="status" class="form-control">
                            <option value="">Manage</option>
                            <option value="">Transaction</option>
                            <option value="">Setting</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row viewing">
                    <label for="recipient-name" class="col-2 control-label">Created By: </label>
                    <div class="col-10">
                        <input type="text" name="created" class="form-control">
                    </div>
                </div>
                <div class="form-group row viewing">
                    <label for="recipient-name" class="col-2 control-label">Modified By: </label>
                    <div class="col-10">
                        <input type="text" name="modified" class="form-control">
                    </div>
                </div>
                <div class="form-group row viewing">
                    <label for="recipient-name" class="col-2 control-label">Version: </label>
                    <div class="col-10">
                        <input type="text" name="version" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="recipient-name" class="col-2 control-label">Status: </label>
                    <div class="col-10">
                        <select name="status" class="form-control">
                            <option value="1">Active (Activate now)</option>
                            <option value="2">Inactive (Register but activate later)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" id="modules-submit" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>
