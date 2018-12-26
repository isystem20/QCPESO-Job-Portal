
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Stats box -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/income.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Jobs</h6>
                                        <?php
                                        if($totaljobs->num_rows() > 0)
                                        {
                                            foreach($totaljobs->result() as $row)
                                            {
                                              ?>
                                              <h2 class="m-t-0"><?php echo $this->db->count_all('tbl_establishments_jobposts'); ?></h2></div>
                                              <?php  
                                            }
                                        }
                                        else
                                        {
                                        ?>
                                        <h2 class="m-t-0"> NO DATA FOUND </h2></div>
                                        <?php
                                        }
                                        ?>

                                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/expense.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Employers</h6>
                                        
                                         <?php
                                        if($totalemployers->num_rows() > 0)
                                        {
                                            foreach($totalemployers->result() as $row)
                                            {
                                              ?>
                                              <h2 class="m-t-0"><?php echo $this->db->count_all('tbl_establishments'); ?></h2></div>
                                              <?php  
                                            }
                                        }
                                        else
                                        {
                                        ?>
                                        <h2 class="m-t-0"> NO DATA FOUND </h2></div>
                                        <?php
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/assets.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Total Applicants</h6>
                                        
                                         <?php
                                        if($totalapplicants->num_rows() > 0)
                                        {
                                            foreach($totalapplicants->result() as $row)
                                            {
                                              ?>
                                              <h2 class="m-t-0"><?php echo $this->db->count_all('tbl_applicants'); ?></h2></div>
                                              <?php  
                                            }
                                        }
                                        else
                                        {
                                        ?>
                                        <h2 class="m-t-0"> NO DATA FOUND </h2></div>
                                        <?php
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/staff.png" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Successful Hires</h6>
                                        
                                         <?php
                                        if($successhires->num_rows() > 0)
                                        {
                                            foreach($successhires->result() as $row)
                                            {
                                              ?>
                                              <h2 class="m-t-0"><?php echo $row->countsuccess; ?></h2></div>
                                              <?php  
                                            }
                                        }
                                        else
                                        {
                                        ?>
                                        <h2 class="m-t-0"> NO DATA FOUND </h2></div>
                                        <?php
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales overview chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Applicants Per Year</h3>
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

                                
                                <!-- Charts for monthly Applicants -->
                                <div id="sales-overview2" data-values='<?=json_encode($monthly_applicants); ?>' class="p-relative" style="height:360px;"></div>

                                <div class="stats-bar">
                                    <div class="row text-center">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="p-20">
                                                <h6 class="m-b-0">Total Sales</h6>
                                                <h3 class="m-b-0">$10,345</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="p-20">
                                                <h6 class="m-b-0">This Month</h6>
                                                <h3 class="m-b-0">$7,589</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="p-20">
                                                <h6 class="m-b-0">This Week</h6>
                                                <h3 class="m-b-0">$1,476</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Employers Per Year</h3>
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
                                <div id="ct-sales3-chart" data-values='<?=json_encode($all_year); ?>' class="p-relative" style="height:360px;"></div>
                                <div class="stats-bar">
                                    <div class="row text-center">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="p-20">
                                                <h6 class="m-b-0">Total Sales</h6>
                                                <h3 class="m-b-0">$10,345</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="p-20">
                                                <h6 class="m-b-0">This Month</h6>
                                                <h3 class="m-b-0">$7,589</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="p-20">
                                                <h6 class="m-b-0">This Week</h6>
                                                <h3 class="m-b-0">$1,476</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                           <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Visit Separation</h4>
                                <div id="visitor" style="height: 290px; width: 100%; max-height: 290px; position: relative;" class="c3"><svg width="599" height="290" style="overflow: hidden;"><defs><clipPath id="c3-1545819910249-clip"><rect width="599" height="266"></rect></clipPath><clipPath id="c3-1545819910249-clip-xaxis"><rect x="-31" y="-20" width="661" height="40"></rect></clipPath><clipPath id="c3-1545819910249-clip-yaxis"><rect x="-29" y="-4" width="20" height="290"></rect></clipPath><clipPath id="c3-1545819910249-clip-grid"><rect width="599" height="266"></rect></clipPath><clipPath id="c3-1545819910249-clip-subchart"><rect width="599"></rect></clipPath></defs><g transform="translate(0.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="299.5" y="133" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="599" height="266" style="opacity: 0;"></rect><g clip-path="url(file:///C:/xampp/htdocs/qcpesomis/themes/admin-pro/minimal/index.html#c3-1545819910249-clip)" class="c3-regions" style="visibility: hidden;"></g><g clip-path="url(file:///C:/xampp/htdocs/qcpesomis/themes/admin-pro/minimal/index.html#c3-1545819910249-clip-grid)" class="c3-grid" style="visibility: hidden;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="266" style="visibility: hidden;"></line></g></g><g clip-path="url(file:///C:/xampp/htdocs/qcpesomis/themes/admin-pro/minimal/index.html#c3-1545819910249-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="0.5" y="0" width="599" height="266"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-Other" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Other c3-bars c3-bars-Other" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Desktop" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Desktop c3-bars c3-bars-Desktop" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Tablet" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Tablet c3-bars c3-bars-Tablet" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Mobile" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Mobile c3-bars c3-bars-Mobile" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-Other" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Other c3-lines c3-lines-Other"></g><g class=" c3-shapes c3-shapes-Other c3-areas c3-areas-Other"></g><g class=" c3-selected-circles c3-selected-circles-Other"></g><g class=" c3-shapes c3-shapes-Other c3-circles c3-circles-Other" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Desktop" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Desktop c3-lines c3-lines-Desktop"></g><g class=" c3-shapes c3-shapes-Desktop c3-areas c3-areas-Desktop"></g><g class=" c3-selected-circles c3-selected-circles-Desktop"></g><g class=" c3-shapes c3-shapes-Desktop c3-circles c3-circles-Desktop" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Tablet" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Tablet c3-lines c3-lines-Tablet"></g><g class=" c3-shapes c3-shapes-Tablet c3-areas c3-areas-Tablet"></g><g class=" c3-selected-circles c3-selected-circles-Tablet"></g><g class=" c3-shapes c3-shapes-Tablet c3-circles c3-circles-Tablet" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Mobile" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Mobile c3-lines c3-lines-Mobile"></g><g class=" c3-shapes c3-shapes-Mobile c3-areas c3-areas-Mobile"></g><g class=" c3-selected-circles c3-selected-circles-Mobile"></g><g class=" c3-shapes c3-shapes-Mobile c3-circles c3-circles-Mobile" style="cursor: pointer;"></g></g></g><g class="c3-chart-arcs" transform="translate(299.5,128)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 1;">Visits</text><g class="c3-chart-arc c3-target c3-target-Other"><g class=" c3-shapes c3-shapes-Other c3-arcs c3-arcs-Other"><path class=" c3-shape c3-shape c3-arc c3-arc-Other" transform="" style="fill: rgb(236, 239, 241); cursor: pointer; opacity: 1;" d="M7.445852538815907e-15,-121.6A121.6,121.6 0 1,1 -98.37646651599356,-71.4746866787648L-82.19612662849461,-59.71898163291532A101.6,101.6 0 1,0 6.221205739668554e-15,-101.6Z"></path></g><text dy=".35em" class="" transform="translate(44.164195814663074,86.67711467304444)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Desktop"><g class=" c3-shapes c3-shapes-Desktop c3-arcs c3-arcs-Desktop"><path class=" c3-shape c3-shape c3-arc c3-arc-Desktop" transform="" style="fill: rgb(116, 90, 242); cursor: pointer; opacity: 1;" d="M-98.37646651599356,-71.4746866787648A121.6,121.6 0 0,1 -71.47468667876467,-98.37646651599366L-59.71898163291521,-82.1961266284947A101.6,101.6 0 0,0 -82.19612662849461,-59.71898163291532Z"></path></g><text dy=".35em" class="" transform="translate(-68.78734767382728,-68.78734767382738)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Tablet"><g class=" c3-shapes c3-shapes-Tablet c3-arcs c3-arcs-Tablet"><path class=" c3-shape c3-shape c3-arc c3-arc-Tablet" transform="" style="fill: rgb(38, 198, 218); cursor: pointer; opacity: 1;" d="M-71.47468667876467,-98.37646651599366A121.6,121.6 0 0,1 -37.57646651599352,-115.64847238149069L-31.396126628494585,-96.62734205558762A101.6,101.6 0 0,0 -59.71898163291521,-82.1961266284947Z"></path></g><text dy=".35em" class="" transform="translate(-44.164195814663046,-86.67711467304446)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Mobile"><g class=" c3-shapes c3-shapes-Mobile c3-arcs c3-arcs-Mobile"><path class=" c3-shape c3-shape c3-arc c3-arc-Mobile" transform="" style="fill: rgb(30, 136, 229); cursor: pointer; opacity: 1;" d="M-37.57646651599352,-115.64847238149069A121.6,121.6 0 0,1 8.566493821908749e-14,-121.6L7.157531022252705e-14,-101.6A101.6,101.6 0 0,0 -31.396126628494585,-96.62734205558762Z"></path></g><text dy=".35em" class="" transform="translate(-15.217944759113589,-96.082321773095)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Other" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Other"></g></g><g class="c3-chart-text c3-target c3-target-Desktop" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Desktop"></g></g><g class="c3-chart-text c3-target c3-target-Tablet" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Tablet"></g></g><g class="c3-chart-text c3-target c3-target-Mobile" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Mobile"></g></g></g></g><g clip-path="url(file:///C:/xampp/htdocs/qcpesomis/themes/admin-pro/minimal/index.html#c3-1545819910249-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(file:///C:/xampp/htdocs/qcpesomis/themes/admin-pro/minimal/index.html#c3-1545819910249-clip-xaxis)" transform="translate(0,266)" style="visibility: visible; opacity: 0;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="599" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(300, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H599V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(file:///C:/xampp/htdocs/qcpesomis/themes/admin-pro/minimal/index.html#c3-1545819910249-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 0;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,258)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,231)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">10</tspan></text></g><g class="tick" transform="translate(0,203)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,175)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><g class="tick" transform="translate(0,148)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><g class="tick" transform="translate(0,120)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">50</tspan></text></g><g class="tick" transform="translate(0,93)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">60</tspan></text></g><g class="tick" transform="translate(0,65)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">70</tspan></text></g><g class="tick" transform="translate(0,37)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">80</tspan></text></g><g class="tick" transform="translate(0,10)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">90</tspan></text></g><path class="domain" d="M-6,1H0V266H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(599,0)" style="visibility: hidden; opacity: 0;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,266)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,240)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,213)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,187)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,160)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,134)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,107)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,81)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,54)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,28)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V266H6"></path></g></g><g transform="translate(0.5,290.5)" style="visibility: hidden;"><g clip-path="url(file:///C:/xampp/htdocs/qcpesomis/themes/admin-pro/minimal/index.html#c3-1545819910249-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(file:///C:/xampp/htdocs/qcpesomis/themes/admin-pro/minimal/index.html#c3-1545819910249-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="172.65625" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(file:///C:/xampp/htdocs/qcpesomis/themes/admin-pro/minimal/index.html#c3-1545819910249-clip-xaxis)" style="visibility: hidden; opacity: 0;"><g class="tick" transform="translate(300, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H599V6"></path></g></g><g transform="translate(0,270)"><g class="c3-legend-item c3-legend-item-Other" style="visibility: hidden; cursor: pointer;"><text x="14" y="9" style="pointer-events: none;">Other</text><rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10" style="stroke: rgb(236, 239, 241); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Desktop" style="visibility: hidden; cursor: pointer;"><text x="14" y="9" style="pointer-events: none;">Desktop</text><rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10" style="stroke: rgb(116, 90, 242); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Tablet" style="visibility: hidden; cursor: pointer;"><text x="14" y="9" style="pointer-events: none;">Tablet</text><rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10" style="stroke: rgb(38, 198, 218); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Mobile" style="visibility: hidden; cursor: pointer;"><text x="14" y="9" style="pointer-events: none;">Mobile</text><rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10" style="stroke: rgb(30, 136, 229); pointer-events: none;"></line></g></g><text class="c3-title" x="299.5" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none;"></div></div>
                                <table class="table vm font-14">
                                    <tbody><tr>
                                        <td class="b-0">Mobile</td>
                                        <td class="text-right font-medium b-0">38.5%</td>
                                    </tr>
                                    <tr>
                                        <td>Tablet</td>
                                        <td class="text-right font-medium">30.8%</td>
                                    </tr>
                                    <tr>
                                        <td>Desktop</td>
                                        <td class="text-right font-medium">7.7%</td>
                                    </tr>
                                    <tr>
                                        <td>Other</td>
                                        <td class="text-right font-medium">23.1%</td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Categories</h4>

                                <table class="table browser m-t-30 no-border" >
                                    <tbody>
                                           <th>Name of Categories</th>
                                           <th>Currently Available</th>

                                             <?php
                                        if ($query->num_rows() > 0) {
                                            foreach ($query->result() as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->description; ?></td>
                                                <td><center>
                                                    <?php echo $row->category; ?>  </center>
                                                </td>
                                            </tr>
                                                <?php

                                            }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                <td>0</td>
                                                <td>0</td>
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
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Recently Employed Applicant</h4></div>
                                  
                                </div>
                                <div class="table-responsive m-t-20">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th><b>Job Title</th>
                                                <th><b>Last Name</th>
                                                <th><b>First Name</th>
                                                <th><b>Middle Name</th>
                                                <th><b>Date Accepted</th>
                                            </tr>
                                           
                                                 <?php 
                                            if ($recenthired->num_rows() > 0) {
                                                foreach ($recenthired->result() as $row)  { ?>
                                                    <tr>
                                                        <td><?php echo $row->Jobtitle; ?></td>
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
                                                    <td colspan="4"> NO DATA FOUND</td>
                                                </tr>
                                                <?php
                                             
                                            }
                                             ?>   
                                          
                                            
                                        </thead>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- Activity widget find scss into widget folder-->
                    <!-- ============================================================== -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h4 class="card-title"><span class="lstick"></span>Top Jobs</h4>
                                    <!-- <span class="badge badge-success">9</span> -->
                                    <div class="btn-group ml-auto m-t-10">
                                        <a href="JavaScript:void(0)" class="icon-options-vertical link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-box">
                                <div class="card-body">
                                    <!-- Activity item-->
                                    <div class="activity-item">
                                        <div class="round m-r-20"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/2.jpg" alt="user" width="50" /></div>
                                        <div class="m-t-10">
                                            <h5 class="m-b-0 font-medium">Mark Freeman <span class="text-muted font-14 m-l-10">| &nbsp; 6:30 PM</span></h5>
                                            <h6 class="text-muted">uploaded this file </h6>
                                            <table class="table vm b-0 m-b-0">
                                                <tr>
                                                    <td class="m-r-10 b-0"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/icon/zip.png" alt="user" /></td>
                                                    <td class="b-0">
                                                        <h5 class="m-b-0 font-medium ">Homepage.zip</h5>
                                                        <h6>54 MB</h6></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Activity item-->
                                    <!-- Activity item-->
                                    <div class="activity-item">
                                        <div class="round m-r-20"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/3.jpg" alt="user" width="50" /></div>
                                        <div class="m-t-10">
                                            <h5 class="m-b-5 font-medium">Emma Smith <span class="text-muted font-14 m-l-10">| &nbsp; 6:30 PM</span></h5>
                                            <h6 class="text-muted">joined projectname, and invited <a href="javascript:void(0)">@maxcage, @maxcage, @maxcage, @maxcage, @maxcage,+3</a></h6>
                                            <span class="image-list m-t-20">
                                                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/1.jpg" class="img-circle" alt="user" width="50"></a>
                                                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/2.jpg" class="img-circle" alt="user" width="50"></a>
                                                <a href="javascript:void(0)"><span class="round round-warning">C</span></a>
                                            <a href="javascript:void(0)"><span class="round round-danger">D</span></a>
                                            <a href="javascript:void(0)">+3</a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Activity item-->
                                    <!-- Activity item-->
                                    <div class="activity-item">
                                        <div class="round m-r-20"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/4.jpg" alt="user" width="50" /></div>
                                        <div class="m-t-10">
                                            <h5 class="m-b-0 font-medium">David R. Jones  <span class="text-muted font-14 m-l-10">| &nbsp; 9:30 PM, July 13th</span></h5>
                                            <h6 class="text-muted">uploaded this file </h6>
                                            <span>
                                                <a href="javascript:void(0)" class="m-r-10"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/big/img1.jpg" alt="user" width="60"></a>
                                                <a href="javascript:void(0)" class="m-r-10"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/big/img2.jpg" alt="user" width="60"></a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Activity item-->
                                    <!-- Activity item-->
                                    <div class="activity-item">
                                        <div class="round m-r-20"><img src="<?php echo base_url(); ?>themes/admin-pro/assets/images/users/6.jpg" alt="user" width="50" /></div>
                                        <div class="m-t-10">
                                            <h5 class="m-b-5 font-medium">David R. Jones <span class="text-muted font-14 m-l-10">| &nbsp; 6:30 PM</span></h5>
                                            <h6 class="text-muted">Commented on<a href="javascript:void(0)">Test Project</a></h6>
                                            <p class="m-b-0">It has survived not only five centuries, but also the leap into electrotypesetting, remaining essentially unchanged.</p>
                                        </div>
                                    </div>
                                    <!-- Activity item-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right panel -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
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
            <!-- <footer class="footer"> © 2018 Admin Pro by wrappixel.com </footer> -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>


