

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
                            <h3 class="text-themecolor">Dashboard</h3>
                            <h6 class="text-muted"></h6>
                        
                        </div>
                        <div class="col-md-7 align-self-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Employer</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
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
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/income.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Jobs Created</h6>
                                        <h2 class="m-t-0">
                                             <?php
                                        if ($emptotaljobs->num_rows() > 0) {
                                            foreach ($emptotaljobs->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->ID; ?></td>
                                                
                                            </tr>
                                                <?php

                                            }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                <td>0</td>
                                                
                                                </tr>
                                                <?php
                                            }

                                        
                                        ?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/expense.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Jobs Deployed</h6>
                                        <h2 class="m-t-0">
                                            <?php
                                        if ($empjobsdeployed->num_rows() > 0) {
                                            foreach ($empjobsdeployed->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->ID; ?></td>
                                                
                                            </tr>
                                                <?php

                                            }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                <td>0</td>
                                                
                                                </tr>
                                                <?php
                                            }

                                        
                                        ?>
                                        </h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/assets.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Hired Applicants</h6>
                                        <h2 class="m-t-0">
                                            <?php
                                        if ($emptotalhires->num_rows() > 0) {
                                            foreach ($emptotalhires->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->jobs; ?></td>
                                                
                                            </tr>
                                                <?php

                                            }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                <td>0</td>
                                                
                                                </tr>
                                                <?php
                                            }

                                        
                                        ?>
                                        </h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/staff.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Rejected Applicants</h6>
                                        <h2 class="m-t-0">
                                            <?php
                                        if ($emprejected->num_rows() > 0) {
                                            foreach ($emprejected->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->jobs; ?></td>
                                                
                                            </tr>
                                                <?php

                                            }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                <td>0</td>
                                                
                                                </tr>
                                                <?php
                                            }

                                        
                                        ?>
                                        </h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales overview chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Applicants Per Year (All Jobs)</h3>
                                    </div>
                                    <div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option selected="">January 2017</option>
                                            <option value="1">February 2017</option>
                                            <option value="2">March 2017</option>
                                            <option value="3">April 2017</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="bg-theme stats-bar">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <div class="p-20 active">
                                            <h6 class="text-white">Total Sales</h6>
                                            <h3 class="text-white m-b-0">$10,345</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="p-20">
                                            <h6 class="text-white">This Month</h6>
                                            <h3 class="text-white m-b-0">$7,589</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="p-20">
                                            <h6 class="text-white">This Week</h6>
                                            <h3 class="text-white m-b-0">$1,476</h3>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="card-body">
                                <div id="sales-overview3" data-values='<?=json_encode($emp_all_applicants); ?>'class="p-relative" style="height:360px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- visit charts-->
                    <!-- ============================================================== -->
                    <div class="col-lg-3 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Jobs By Status</h4>
                                <div id="visitors1" data-values='<?=json_encode($empjobsbystatus); ?>' style="height:290px; width:100%;"></div>
                                <table class="table vm font-14">
                                   <?php
                                        if ($empjobstatus->num_rows() > 0) {
                                            foreach ($empjobstatus->result() as $row) { ?>
                                            <tr>
                                                <td class="b-0">Pending Jobs</td>
                                                <td class="text-right font-medium b-0"><?php echo $row->IsActive1; ?></td>
                                            </tr>
                                             <tr>
                                                <td class="b-0">Active Jobs</td>
                                                <td class="text-right font-medium b-0"><?php echo $row->IsActive2; ?></td>
                                            </tr>
                                                <?php

                                            }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                <td>0</td>
                                                
                                                </tr>
                                                <?php
                                            }

                                        
                                        ?>


                                    
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Job Postings</h4></div>
                                    <div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option selected="">January 2017</option>
                                            <option value="1">February 2017</option>
                                            <option value="2">March 2017</option>
                                            <option value="3">April 2017</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive m-t-20">
                                    <table class="table vm no-th-brd no-wrap pro-of-month">
                                        <thead>
                                            <tr>
                                                <th>Job Title</th>
                                                <th>Status</th>
                                                <th>Date Created</th>
                                                <th>All Applications</th>
                                                <th>Hired</th>
                                                <th>Rejected</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        if ($empjobpost->num_rows() > 0) {
                                            foreach ($empjobpost->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->JobTitle; ?></td>
                                                <td>
                                                <?php 
                                                    if ($row->IsActive == '0') {
                                                        
                                                        echo '<span class="label label-light-inverse">Pending</span>';
                                                    }
                                                    else if ($row->IsActive == '1'){
                                                        echo '<label class="label label-success">Posted</label>';
                                                    }
                                                    else{
                                                        echo '<span class="label label-light-inverse">InActive</span>';
                                                    }
                                                   
                                                    ?>
                                                </td>
                                                <td><?php echo $row->CreatedAt; ?></td>
                                                <td><?php echo $row->id1; ?></td>
                                                <td><?php echo $row->id2; ?></td>
                                                <td><?php echo $row->id3; ?></td>
                                            </tr>
                                             
                                                <?php

                                            }
                                            }
                                            else
                                            {
                                                ?>
                                               <tr>
                                                    <td colspan="5"><center> <i>NO DATA FOUND</i></center></td>
                                                </tr>
                                                <?php
                                            }

                                        
                                        ?>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Activity widget find scss into widget folder-->
                    <!-- ============================================================== -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h4 class="card-title"><span class="lstick"></span>Recent Applicants</h4>
                                    <!-- <span class="badge badge-success">9</span> -->
                                   
                                </div>
                            </div>
                            <div class="activity-box">
                                <div class="card-body">
                                    <!-- Activity item-->
                                            <table class="table vm b-0 m-b-0">
                                                <tr>
                                                    <th colspan="2">Job Title</th>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Date Accepted</th>

                                                </tr>
                                                <tr>
                                                    <?php 
                                            if ($emprecentapp->num_rows() > 0) {
                                                foreach ($emprecentapp->result() as $row)  { ?>
                                                    <tr>
                                                        <td colspan="2"><?php echo $row->Jobtitle; ?></td>
                                                        <td><?php echo $row->Lastname; ?></td>
                                                        <td><?php echo $row->Firstname; ?></td>
                                                        <td><?php echo $row->Middlename; ?></td>
                                                        <td><?php echo $row->dateaccepted; ?></td>
                                                        
                                                       
                                                    </tr>
                                                     <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>

                                                <tr>
                                                    <td colspan="5"><center> <i>NO DATA FOUND</i></center></td>
                                                </tr>
                                                <?php
                                             
                                            }
                                             ?>   
                                                    
                                                </tr>
                                            </table>
                                        
                                   
                                    <!-- Activity item-->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
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
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
            <footer class="footer"><p>© 2018 Quezon City PESO, All Rights Reserved. Design with love by <a href="#">SIGMA</a></p></footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>