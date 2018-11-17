
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-profile">
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/profile.png" alt="user" /><span class="hide-menu"><?=$this->session->userdata('firstname'); ?> </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void()">My Profile </a></li>
                                <li><a href="javascript:void()">My Balance</a></li>
                                <li><a href="javascript:void()">Inbox</a></li>
                                <li><a href="javascript:void()">Account Setting</a></li>
                                <li><a href="javascript:void()">Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>manage/" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="nav-small-cap">MANAGE</li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Accounts and Access</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>manage/users-masterlist"> Users </a></li> 
                                <li><a href="<?php echo base_url(); ?>manage/user-groups/"> Groups </a> </li>
                            </ul>
                        </li>
 
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Maintenance</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>manage/maintenance/languages"> Language </a></li> 
                                <li><a href="<?php echo base_url(); ?>manage/maintenance/licenses"> Licenses </a> </li>
                                <li><a href="<?php echo base_url(); ?>manage/maintenance/certificates"> Certificates </a></li>
                                <li><a href="<?php echo base_url(); ?>manage/maintenance/disabilities"> Disabilities </a></li>
                                <li><a href="<?php echo base_url(); ?>manage/maintenance/dresscode"> Dress Code </a></li>
                                <li><a href="<?php echo base_url(); ?>manage/maintenance/preferred-locations"> Preferred Locations </a></li>
                                <li><a href="<?php echo base_url(); ?>manage/maintenance/job-titles"> Job Titles </a></li>
                                <li><a href="<?php echo base_url(); ?>manage/maintenance/applicant-categories"> Categories </a></li>

                                <li><a href="<?php echo base_url(); ?>manage/maintenance/applicant-level"> Applicant Level </a></li>



                                <li><a href="<?php echo base_url(); ?>manage/maintenance/industries"> Industries </a></li>
                                <li><a href="<?php echo base_url(); ?>manage/maintenance/courses-list"> Course List </a></li>

                                <li><a href="<?php echo base_url(); ?>manage/maintenance/employment-types"> Employment Types</a></li>

                                <li><a href="<?php echo base_url(); ?>"> Country List</a></li>

                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Survey and Ratings</span></a></li>

                        <li class="nav-small-cap">TRANSACTIONS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Applicants</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>manage/do/applicants/add" data-i18n="nav.json-form.simple-form">Add Walk-in</a></li>
                                <li><a href="<?php echo base_url(); ?>manage/do/applicants/view-list" data-i18n="nav.json-form.clubs-view">View List</a></li>
                                <li><a href="<?php echo base_url(); ?>manage/do/applicants/job-applications" data-i18n="nav.json-form.customer-form">Job Applications</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Establishment</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>manage/do/establishments/add" data-i18n="nav.json-form.simple-form">Add New</a></li>
                                <li><a href="<?php echo base_url(); ?>manage/do/establishments/view-list" data-i18n="nav.json-form.clubs-view">View List</a></li>
                                <li><a href="<?php echo base_url(); ?>manage/do/establishments/pending-accreditation">Pending Accreditation</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Jobs</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>manage/do/jobs/add" data-i18n="nav.json-form.simple-form">Add New</a></li>
                                <li><a href="<?php echo base_url(); ?>manage/do/jobs/view-list" data-i18n="nav.json-form.clubs-view">View Jobs</a></li>
                                <li><a href="<?php echo base_url(); ?>manage/do/jobs/pending-job-posts">Pending Job Posting</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">REPORTS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Applicants</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Masterlist</a></li>
                                <li><a href="#">Applications</a></li>
                                <li><a href="#">Custom Report</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Establishments</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Masterlist</a></li>
                                <li><a href="#">Posted Jobs</a></li>
                                <li><a href="#">Review and Ratings</a></li>
                                <li><a href="#">Custom Report</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Accounts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Masterlist</a></li>
                                <li><a href="#">Access List</a></li>
                                <li><a href="#">Custom Report</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Activity Logs</span></a></li>

                        <li class="nav-small-cap">SETTINGS</li>

                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Administration</span></a></li>
                      

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Website</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Basic Settings</a></li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Posts</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">All Posts</a></li>
                                        <li><a href="<?php echo base_url(); ?>manage/settings/types">Post Types</a></li>
                                        <li><a href="<?php echo base_url(); ?>manage/settings/tags">Post Tags</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Maintenance</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">System</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Server and Database</a></li>
                                <li><a href="#">Notifications</a></li>
                            </ul>
                        </li>                        
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Change Logs</span></a></li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->



