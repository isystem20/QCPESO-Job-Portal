

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
                        <h3 class="text-themecolor">Form wizards</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Forms</li>
                            <li class="breadcrumb-item active">Form wizards</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card wizard-content">
                            <div class="card-body">
                                <h4 class="card-title">Step wizard with validation</h4>
                                <h6 class="card-subtitle">You can us the validation like what we did</h6>
                                <form action="#" class="validation-wizard wizard-circle">
                                    <!-- Step 1 -->
                                    <h6>Basic Information</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> First Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlastName2"> Last Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wlastName2" name="lastName"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                                                    <input type="email" class="form-control required" id="wemailAddress2" name="emailAddress"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wphoneNumber2">Phone Number :</label>
                                                    <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                                            </div>
                                        </div>
<<<<<<< HEAD
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Educational Background</h6>
                                    <section>

                                        <table class="table">
                                            <tr>
                                                <td><input type="text" placeholder="School" class="form-control" id="jobTitle1"></td>
                                                <td><input type="text" placeholder="Degree" class="form-control" id="jobTitle1"></td>
                                                <td><input type="text" placeholder="Last Year Attended" class="form-control" id="jobTitle1"></td>
                                                <td><input type="text" placeholder="Award" class="form-control" id="jobTitle1"></td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="" >Remarks</option>
                                                        <option value="Completed">Completed</option>
                                                        <option value="On-Going">On-going</option>
                                                        <option value="Not Completed">Not Completed</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn waves-effect waves-light btn-sm btn-success">Add</button>
                                                </td>

                                            </tr>

                                        </table>

                                        <div class="row">
                                            <div class="col-md-12">
                                                    <table class="table">
                                                        <thead>
                                                            
                                                            <td>School</td>
                                                            <td>Degree</td>
                                                            <td>Year</td>
                                                            <td>Award</td>
                                                            <td>Completed?</td>
                                                            <td></td>
                                                        </thead>
                                                        <tr>
                                                            <td><input type="text" class="form-control" id="jobTitle1"></td>
                                                            <td><input type="text" class="form-control" id="jobTitle1"></td>
                                                            <td><input type="text" class="form-control" id="jobTitle1"></td>
                                                            <td><input type="text" class="form-control" id="jobTitle1"></td>
                                                            <td><input type="text" class="form-control" id="jobTitle1"></td>
                                                            <td><button type="button" class="btn waves-effect waves-light btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                                                        </tr>

                                                    </table>


                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>Work History</h6>
                                    <section>
=======
>>>>>>> 4479a3677985ade3278429eadbf484e83415ff27
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2"> Select City : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="wlocation2" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
<<<<<<< HEAD
                                                    <label for="jobTitle2">Interview Date :</label>
                                                    <input type="date" class="form-control" id="jobTitle2">
                                                </div>
                                                <div class="form-group">
                                                    <label>Requirements :</label>
                                                    <div class="m-b-10">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Employee</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Contract</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Licenses/Certificates</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Behaviour :</label>
                                                    <input type="text" class="form-control" id="behName1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control" id="participants1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comments</label>
                                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">1 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">2 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">3 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">4 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">5 star</span> </label>
                                                    </div>
                                                </div>
=======
                                                    <label for="wdate2">Date of Birth :</label>
                                                    <input type="date" class="form-control" id="wdate2"> </div>
>>>>>>> 4479a3677985ade3278429eadbf484e83415ff27
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Work Experiences</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
<<<<<<< HEAD
                                                    <label for="behName1">Behaviour :</label>
                                                    <input type="text" class="form-control" id="behName1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control" id="participants1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comments</label>
                                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">1 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">2 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">3 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">4 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">5 star</span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </form>
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
            <footer class="footer"> © 2018 Admin Pro by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>



<?php
   }
}
else { ?>

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
                        <h3 class="text-themecolor">Form wizards</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Forms</li>
                            <li class="breadcrumb-item active">Form wizards</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body wizard-content">
                                <h4 class="card-title">Step wizard</h4>
                                <h6 class="card-subtitle">You can find the <a href="http://www.jquery-steps.com/" target="_blank">offical website</a></h6>
                                <form action="<?=base_url('admin/applicants/add'); ?>" id="applicant-info-form" method="POST" class="tab-wizard wizard-circle">
                                    <!-- Step 1 -->
                                    <h6>Personal Info</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="firstname">First Name :</label>
                                                            <input type="text" class="form-control" name="firstname" value=""> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="middlename">Middle Name :</label>
                                                            <input type="text" class="form-control" name="middlename"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="lastname">Last Name :</label>
                                                            <input type="text" class="form-control" name="lastname"> 
                                                        </div>                                           
                                                    </div>                                                    
                                                </div>

                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="lastName1">Suffix :</label>
                                                    <input type="text" class="form-control" name="suffix"> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="emailAddress1">Birthdate :</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="birthdate" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                                            </div>
                                                        </div> 
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="phoneNumber1">Civil Status:</label>
                                                    <select class="form-control" name="civil">
                                                        <option value="Single" >Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Separated">Separated</option>
                                                        <option value="Widowed">Widowed</option>
                                                    </select>
=======
                                                    <label for="jobTitle2">Company Name :</label>
                                                    <input type="text" class="form-control required" id="jobTitle2">
>>>>>>> 4479a3677985ade3278429eadbf484e83415ff27
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="webUrl3">Company URL :</label>
                                                    <input type="url" class="form-control required" id="webUrl3" name="webUrl3"> </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription3">Short Description :</label>
                                                    <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
<<<<<<< HEAD
                                    <!-- Step 2 -->
                                    <h6>Educational Background</h6>
                                    <section>

                                        <table class="table">
                                            <tr>
                                                <td><input type="text" placeholder="School" class="form-control" id="jobTitle1"></td>
                                                <td><input type="text" placeholder="Degree" class="form-control" id="jobTitle1"></td>
                                                <td><input type="text" placeholder="Last Year Attended" class="form-control" id="jobTitle1"></td>
                                                <td><input type="text" placeholder="Award" class="form-control" id="jobTitle1"></td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="" >Remarks</option>
                                                        <option value="Completed">Completed</option>
                                                        <option value="On-Going">On-going</option>
                                                        <option value="Not Completed">Not Completed</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn waves-effect waves-light btn-sm btn-success">Add</button>
                                                </td>

                                            </tr>

                                        </table>




                                        <div class="row">
                                            <div class="col-md-12">
                                                    <table class="table">
                                                        <thead>
                                                            
                                                            <td>School</td>
                                                            <td>Degree</td>
                                                            <td>Year</td>
                                                            <td>Award</td>
                                                            <td>Completed?</td>
                                                            <td></td>
                                                        </thead>
                                                        <tr>
                                                            <td><input type="text" class="form-control" id="jobTitle1"></td>
                                                            <td><input type="text" class="form-control" id="jobTitle1"></td>
                                                            <td><input type="text" class="form-control" id="jobTitle1"></td>
                                                            <td><input type="text" class="form-control" id="jobTitle1"></td>
                                                            <td><input type="text" class="form-control" id="jobTitle1"></td>
                                                            <td><button type="button" class="btn waves-effect waves-light btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                                                        </tr>

                                                    </table>


                                            </div>
                                        </div>
                                    </section>
                                    <h6>Work History</h6>
=======
                                    <!-- Step 3 -->
                                    <h6>Education</h6>
>>>>>>> 4479a3677985ade3278429eadbf484e83415ff27
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wint1">Interview For :</label>
                                                    <input type="text" class="form-control required" id="wint1"> </div>
                                                <div class="form-group">
                                                    <label for="wintType1">Interview Type :</label>
                                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="Banquet">Normal</option>
                                                        <option value="Fund Raiser">Difficult</option>
                                                        <option value="Dinner Party">Hard</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="wLocation1">Location :</label>
                                                    <select class="custom-select form-control required" id="wLocation1" name="wlocation">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wjobTitle2">Interview Date :</label>
                                                    <input type="date" class="form-control required" id="wjobTitle2">
                                                </div>
                                                <div class="form-group">
                                                    <label>Requirements :</label>
                                                    <div class="m-b-10">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Employee</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Contract</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Licenses</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Behaviour :</label>
                                                    <input type="text" class="form-control required" id="behName1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control required" id="participants1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control required" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comments</label>
                                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">1 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">2 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">3 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">4 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">5 star</span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
<<<<<<< HEAD
                                    <h6>Extras</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Behaviour :</label>
                                                    <input type="text" class="form-control" id="behName1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control" id="participants1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comments</label>
                                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">1 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">2 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">3 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">4 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label ml-0">5 star</span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

=======
>>>>>>> 4479a3677985ade3278429eadbf484e83415ff27
                                </form>
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
       <!--          <div class="right-sidebar">
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
            <footer class="footer"> © 2018 QCPESO </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

