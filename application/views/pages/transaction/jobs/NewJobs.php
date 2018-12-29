<?php 
if (!empty($jobposts)) {
    $attr="";
   foreach ($jobposts as $row) 
    { 
        if ($mode=="view") {
            $attr="disabled readonly";
            
        }

        ?>

        <div class="page-wrapper">
            
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Job Posts</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Transactions</li>
                        <li class="breadcrumb-item active">Jobs</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Job Post Form</h4>
                            </div>
                            <div class="card-body">
                                    
                                        <div class="form-body">
                                        <h3 class="card-title">Job Post Information</h3>
                                        <hr>
                                        <div class="col-md-12">
                                                <div id="notif"></div>
                                        </div>
                                        <div class="row p-t-20">
                                            
                                            <div class="col-md-4">
                                            <?php
                                            $hidden = array(
                                              'id' => $row->Id,
                                            );
                                            ?>
                                            <?php echo form_open_multipart('admin/jobposts/edit','id="jobpost-form"', $hidden); ?>

                                                <div class="form-group">
                                                    <label class="control-label">Job Title</label>
                                                    <input style="background-color: #fff; color: black;" type="text"  <?=$attr?> value="<?=$row->JobTitle;?>" name="JobTitle"  class="form-control" >
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Specialization</label>

                                                    
                                                    <select <?=$attr?> name="Specialization[]" id="speci" class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                        <?php $str="";
                                                            if ($skills->num_rows() > 0) {

                                                                $skillset = json_decode($row->Specialization,true);
                                                                    foreach($skills->result() as $types) {
                                                                        $str = "";
                                                                        foreach($skillset as $key) {
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
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>

                                                    
                                                   <select <?=$attr?> name="Category[]" id="cate" class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                        <?php $str="";
                                                            if ($categories->num_rows() > 0) {

                                                                $categoryset = json_decode($row->Category,true);
                                                                    foreach($categories->result() as $types) {
                                                                        $str = "";
                                                                        foreach($categoryset as $key) {
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

                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Establishment</label>
                                                    <select class="select2 form-control custom-select"  <?=$attr?> name="EstablishmentId" id="estab"  >
                                                        <?php $str="";
                                                            if ($estabs->num_rows() > 0) {
                                                                foreach ($estabs->result() as $types) { 
                                                                    if ($row->EstablishmentId==$types->Id){
                                                                      $str="Selected";
                                                                    }
                                                                    else {
                                                                        $str="";

                                                                    }
                                                                    ?>
                                                                <option  <?=$str?> value="<?=$types->Id?>"><?=$types->CompanyName?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Employment Type</label>
                                                    <select   class="select2 form-control custom-select"  <?=$attr?> name="EmpTypeId" style="background-color: #fff; color: black;">
                                                        <?php $str="";
                                                            if ($emptypes->num_rows() > 0) {
                                                                foreach ($emptypes->result() as $types) { 
                                                                    if ($row->Id==$types->Id){
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
                                                    <label class="control-label">Position Level</label>
                                                    <select  style="background-color: #fff; color: black;" class="select2 form-control custom-select"   <?=$attr?> name="PositionLevelId">
                                                       <?php $str="";
                                                            if ($applev->num_rows() > 0) {
                                                                foreach ($applev->result() as $types) { 
                                                                    if ($row->Id==$types->Id){
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

                                        <div class="row">
                                                <div class="col-12">
                                                    <label class="control-label">Job Description</label>  
                                                    <div <?=$attr?> class="form-group">
                                                        <textarea  style="background-color: #fff; color: black;"  class="textarea_editor form-control"   id="jobdesc" name="JobDescription" rows="12" placeholder=""><?=$row->JobDescription;?></textarea>
                                                    </div>
                                                </div>

                                                

                                                                            
                                                
                                        </div>


                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Salary</label>
                                                    <input  style="background-color: #fff; color: black;" type="text" <?=$attr?>  value="<?=$row->Salary;?>" id="salary" name="Salary" class="form-control" placeholder="Salary">
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Job Image</label>
                                                        <input type="file"  <?=$attr?> name="JobImage" data-default-file="<?php echo base_url().$row->JobImage?>"/>
                                                    </div>
                                                </div>

                                            
                                            <div class="col-md-4">
                                                <div class="form-group">

                                                         <?php 

                                                            $attribute = "";
                                                            $usertype = $this->session->userdata('usertype');
                                                            if ($usertype == 'EMPLOYER') {

                                                                $attribute = "disabled";
                                                            }
                                                            else{
                                                                $attribute = "";
                                                            }                                                            
                                                            ?>
                                                    <label class="control-label">Status</label>
                                                    <select <?=$attribute ?> class="form-control" id="stat" name="IsActive">
                                                        <option value="1">Pending</option>
                                                        <option value="0">Active</option>
                                                        <option value="2">Inactive</option>                                                         

                                          
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        
                                       
                                       
                                    </div> 
                                    <?php
                                    if ($mode=="edit") {
                                        ?>
                                    <div class="form-group">
                                        <button type="submit" id="add-jobposts" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button  href="<?=base_url('manage/do/jobs/view-list');?>" type="button" class="btn btn-danger">Cancel</button>
                                    </div>

                                    <?php
                                    }

                                     ?>

                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->



              
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Admin Pro by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
<?php
   }
}
else { ?>

            <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Job Posts</h3>
                    <h6 class="text-muted">New Job Item</h6>

                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Transactions</li>
                        <li class="breadcrumb-item active">Jobs</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Job Post Form</h4>

                            </div>
                            <div class="card-body">
                                    <div class="form-body">
                                        <h3 class="card-title">Job Post Information</h3>
                                        <hr>
                                        <div class="col-md-12">
                                                <div id="notif"></div>
                                        </div>
                                        <div class="row p-t-20">
                                            
                                            <div class="col-md-4">
                                            <?php echo form_open_multipart('manage/do/jobs/addnewjob','id="jobpost-form"'); ?>

                                                <div class="form-group">
                                                    <label class="control-label">Job Title</label>
                                                    <input type="text" name="JobTitle" class="form-control" placeholder="E.g. Accountant">
                                                    <small class="form-control-feedback">Specify the name of the job item.</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Specialization</label>
                                                    
                                                    <select name="Specialization[]" id="speci" class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                        <?php
                                                            if ($skills->num_rows() > 0) {
                                                                foreach ($skills->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <small class="form-control-feedback">Please select  the skills required.</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    
                                                    <select name="Category[]" id="cate" class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                        <?php
                                                            if ($categories->num_rows() > 0) {
                                                                foreach ($categories->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <small class="form-control-feedback">Please select one or more category.</small>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">

                                                     <?php 

                                                            $attribut = "";
                                                            
                                                            $usertype = $this->session->userdata('usertype');
                                                            if ($usertype == 'EMPLOYER') {

                                                                $attribute = "disabled";
                                                            }
                                                            else{
                                                                $attribute = "";
                                                            }     

                                                            ?>

                                                    <label class="control-label">Establishment</label>
                                                    <select   class="select2 form-control custom-select" name="EstablishmentId" id="EstablishmentId"  <?=$attribute; ?> >


                                                        <?php
                                                         $pplid = $this->session->userdata('peopleid');
                                                            $uid = $this->session->userdata('userid');
                                                            if ($estabs->num_rows() > 0) {
                                                                foreach ($estabs->result() as $row) { 
                                                                    if ($row->Id==$pplid) {
                                                                        $attribute1 = "Selected";
                                                                    }
                                                                    else{
                                                                        $attribute1 = "";
                                                                    }

                                                                    ?>
                                                                <option <?=$attribute1 ?> value="<?=$row->Id; ?>"><?php echo $row->CompanyName; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>

                                                    <small class="form-control-feedback">Name of the employer</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Employment Type</label>
                                                    <select class="select2 form-control custom-select" name="EmpTypeId">
                                                        <?php
                                                            if ($emptypes->num_rows() > 0) {
                                                                foreach ($emptypes->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <small class="form-control-feedback">Select the type of employment.</small>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Position Level</label>
                                                    <select class="select2 form-control custom-select" name="PositionLevelId">
                                                        <?php
                                                            if ($applev->num_rows() > 0) {
                                                                foreach ($applev->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <small class="form-control-feedback">Select the position level.</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-12">
                                                    <label class="control-label">Job Description</label>  
                                                    <div class="form-group">
                                                        <textarea class="textarea_editor form-control" id="jobdesc" name="JobDescription" rows="12" placeholder="Please indicate  the job description and the job qualifications."></textarea>
                                                    </div>
                                                    
                                                          
                                                </div>
                                                
                                        </div>

                                        <div class="row p-t-20">
                                            <div class="col-12">
                                                <label class="control-label">Job Overview</label>  
                                                <div class="form-group">
                                                    <textarea class="textarea_editor form-control"  name="JobOverview" rows="5" placeholder="Please give an insight on what the job item is."></textarea>
                                                </div>
                                                
                                                      
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Salary</label>
                                                    <input type="text" id="salary" name="Salary" class="form-control" placeholder="Salary">
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Job Location</label>
                                                    <input type="text" id="salary" name="JobLocation" class="form-control" placeholder="Job Location">
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Job Image</label>
                                                    <input type="file" name="JobImage"  >
                                                </div>
                                            </div>
                                            

                                            <div class="col-md-3">
                                                <div class="form-group">

                                                         <?php 

                                                            $attribute = "";
                                                            $usertype = $this->session->userdata('usertype');
                                                            if ($usertype == 'EMPLOYER') {

                                                                $attribute = "disabled";
                                                            }
                                                            else{
                                                                $attribute = "";
                                                            }                                                            
                                                            ?>
                                                    <label class="control-label">Status</label>
                                                    <select <?=$attribute ?> class="form-control" id="stat" name="IsActive">
                                                        <option value="1">Pending</option>
                                                        <option value="0">Active</option>
                                                        <option value="2">Inactive</option>                                                         

                                          
                                                        
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                       
                                       
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="add-jobposts" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                         <a href="<?=base_url('manage/do/jobs/view-list');?>" class="btn btn-danger">Cancel</a>                                
                                    </div>

                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->



              
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
            <!--     <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Admin Pro by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->\



        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->

  

<?php    
}
?>
