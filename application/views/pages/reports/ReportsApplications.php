

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
                    <h3 class="text-themecolor">Applications</h3>
                    <h6 class="text-muted">Masterlist of All Applications</h6>
                
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item">Applicants</li>
                        <li class="breadcrumb-item active">Applications</li>
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
               <div class="row p-t-20">
                                <div class="col-md-12">
                                   <form action="<?php echo base_url().'reports/ReportsApplicationsController/ReportsApplications'; ?>" method="post"> 
                                    <div class="row">
                                        
                                         <div class="col-sm-3">
                                            <div class="form-group has-success">
                                                <label class="control-label">ApplicantId</label>
                                                <input type="text" name="applicantid" id="applicantid" class="form-control">

                                            </div>
                                        </div>

                                    
                                        <div class="col-sm-3">
                                            <div class="form-group has-success">
                                                <label class="control-label">JobPostId</label>
                                                <input type="text" name="jobpostid" id="jobpostid" class="form-control">

                                            </div>
                                        </div>

                            
                                    

                                        <div class="col-sm-2">
                                                <div class="form-group has-success">
                                                    <label class="control-label">ApplicationDate:</label>
                                                    <input type="date" class="form-control" value="" name="applicationdate">

                                                </div>
                                            </div>
                                         <div class="col-sm-2">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Modified Date:</label>
                                                    <input type="date" class="form-control" value=">" name="ModifiedAt">

                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group has-success">
                                                                            <label class="control-label ">Status</label>
                                                                            <select class="form-control " name="IsActive">

                                                                                <option value="1">Hired</option>
                                                                                <option value="2">Rejected</option>

                                                                            </select>
                                                </div>                      
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group has-success">
                                        
    
                                        <button type="submit" id="sub-btn" class="btn btn-info">Generate</button>
                                                </form>
                                           </div>
                                        </div>
                                </div>

        <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table id="ReportsTable" class="table table-bordered table-striped" data-action="<?=base_url('admin/'.$class.'/')?>">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Applicant Id</th>
                                                <th>Job Post Id</th>
                                                <th>Application Date</th>
                                                <th>Modified Date</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                        if ($applications->num_rows() > 0) {
                                            foreach ($applications->result() as $row) { ?>
                                            <tr id="row<?=$row->Id; ?>">
                                                <td><?php echo ($row->Id); ?></td>
                                                <td><?php echo ($row->ApplicantId); ?></td>
                                                <td><?php echo ($row->JobPostId); ?></td>
                                                <td><?php echo ($row->ApplicationDate); ?></td>
                                                <td><?php echo $row->ModifiedDate; ?></td>
                                               
                                                
                                
                                                <td>
                                                    <?php 
                                                    if ($row->IsActive == '1') {
                                                        echo '<label class="label label-success">Hired</label>';
                                                    }
                                                    else {
                                                        echo '<span class="label label-light-inverse">Rejected</span>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        
                                        <?php
                                            }
                                        }
                                        ?>
                                    <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Application Id</th>
                                                <th>JobPost Id</th>
                                                <th>Application Date</th>
                                                <th>Modified Date</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                    <tfoot>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Employment Status</th>
                                                <th>Modified At</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
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
            <footer class="footer"> <p>© 2018 Quezon City PESO, All Rights Reserved. Design with love by <a href="#">SIGMA</a></p></footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

