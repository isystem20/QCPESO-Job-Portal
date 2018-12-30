    

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
                    <h3 class="text-themecolor">Job Application</h3>
                    <h6 class="text-muted">Masterlist of All Job Application</h6>
                
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Transactions</li>
                         <li class="breadcrumb-item">Applicants</li>
                        <li class="breadcrumb-item active">Job Application</li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-3">

                        <div class="card">
                            <div class="card-body">

                                 <?php echo form_open('manage/do/applicants/job-applications','id="jobapp-form"'); ?>
                                
                                 <div class="form-group">
                                    <label class="control-label">Applicant Name</label>


                                    <select class="select2 form-control custom-select" name="Applicant" id="Applicant" >
                                        <option>Select Applicant</option>
                                        <?php
                                            if ($applicant->num_rows() > 0) {
                                                foreach ($applicant->result() as $row) { 
                                                    if ($row->Id==$search['Applicant']){
                                                          $str="Selected";
                                                        }
                                                        else {
                                                            $str="";

                                                        }
                                                    ?>
                                                <option <?=$str ?> value="<?=$row->Id; ?>"><?php echo $row->FirstName.' '.$row->LastName; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <small class="form-control-feedback">Type and select applicant Name.</small>
                                </div>

                                 
                                <div class="form-group">
                                    <label class="control-label">Job Title</label>
                                    
                                    <input value="<?php if(!empty($search['searchtext'])){ echo $search['searchtext']; }?>" type="text" name="searchtext" class="form-control" placeholder="Job title">
                                    
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Category</label>
                                    
                                    <select name="Category[]" id="cate" class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                       <?php
                                            
                                                     if ($categories->num_rows() > 0) {
                                                    foreach ($categories->result() as $row) {
                                                           if (in_array($row->Id, $search['Category'])) {
                                                ?>
                                                        <option selected value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                        <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                    <?php
                                                         }                                    
                                                    }
                                                }
                                                ?>
                                    </select>
                                    <small class="form-control-feedback">Please select the category.</small>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Specialization</label>
                                    
                                    <select name="Specialization[]" id="speci" class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                        <?php
                                            
                                                     if ($skills->num_rows() > 0) {
                                                    foreach ($skills->result() as $row) {
                                                           if (in_array($row->Id, $search['Specialization'])) {
                                                ?>
                                                        <option selected value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                        <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                    <?php
                                                         }                                    
                                                    }
                                                }
                                                ?>
                                    </select>
                                    <small class="form-control-feedback">Please select skills required.</small>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Employment Type</label>
                                    <select class="select2 form-control custom-select" name="EmpTypeId">
                                        <?php
                                            if ($emptypes->num_rows() > 0) {
                                                foreach ($emptypes->result() as $row) { 
                                                    if ($row->Id==$search['EmpTypeId']){
                                                          $str="Selected";
                                                        }
                                                        else {
                                                            $str="";

                                                        }
                                                    ?>
                                                <option <?=$str; ?> value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" id="add-jobabb" class="btn btn-success"> <i class="fa fa-check"></i> Search</button>
                                                                   
                                </div>
                
                            </div>
                        </div>
                    </div>
           
                    <div class="col-9">

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-action="<?=base_url('admin/'.$class.'/')?>">
                                        <thead>
                                            <tr>
                                                <th>Job Title</th>
                                                <th>Employer</th>
                                                <th>Salary</th>
                                                
                                                <th>Action</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Job Title</th>
                                                <th>Employer</th>
                                                <th>Salary</th>
                                               
                                                <th>Action</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                        <?php
                                            if (!empty($jobposts)) {
                                                
                                            

                                        if ($jobposts->num_rows() > 0) {
                                            foreach ($jobposts->result() as $row) { ?>
                                            <tr Id="row<?=$row->Id; ?>">
                                                <td><?php echo character_limiter($row->JobTitle, 10); ?></td>
                                                <td><?php $str="";
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
                                                            ?> </td>
                                                <td><?php echo $row->Salary; ?></td>
                                                
                                                <td class="actions">
                                                    
                                                    <button class="read-item-btn btn btn-info waves-effect waves-light btn-sm applyjob" data-toggle="tooltip" data-placement="top" title="" data-original-title="Apply" type="button" data-action="<?=base_url('admin/jobapplication/add'); ?>" data-id="<?php echo $row->Id; ?>" <?php if($row->AppliedJob == 0){ echo '  > Apply '; } else{  echo ' disabled style="background-color: red; border: red;" > Applied ';} ?>  </button>
                                                                                               
                                                </td>
                                                <td><?php 
                                                    if ($row->ajaIsActive == '1') {
                                                        echo '<label class="label badge-warning">Pending</label>';
                                                    }
                                                    elseif ($row->ajaIsActive == '0') {
                                                        echo '<span class="label badge-secondary">Rejected</span>';
                                                    }
                                                    elseif ($row->ajaIsActive == '2') {
                                                        echo '<span class="label badge-info">Hired</span>';
                                                    }
                                                    ?></td>
                                            </tr>
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 Admin Pro by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>



