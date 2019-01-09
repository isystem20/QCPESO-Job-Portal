<div class="wrapper">
            <!-- Hero-->

            <section class="module-cover parallax text-center fullscreen" data-background="<?php echo base_url(); ?>banners/BROWSEJOB1.png" data-overlay="0.6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h1 class="m-b-20"><strong>Browse Job</strong></h1>
                            <h5 class="m-b-40">See how your users experience your website in realtime or view  <br> trends to see any changes in performance over time.</h5>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero end-->


           
<section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 order-lg-2">
                                    <div class="row row-post-masonry" style="position: absolute; height: 800px;">
                                <div class="col-md-12 post-item" style="position: absolute; left: 0px; top: 10px;">
                                    <!-- Post-->
                                    <?php

                                    // print_r($browsejob->result());
                                        if ($browsejob->num_rows() > 0) {
                                        foreach ($browsejob->result() as $row) { ?>     
                                            <article class="post">
                                                
                                            <div class="post-preview">
                                                <a href="#"><img src="
                                                    <?php 
                                                    echo base_url(); ?><?=$row->JobImage?>
                                                    " alt="">
                                                </a></div>
                                            <div class="post-wrapper">
                                                <div class="post-header">
                                                    <h2 class="post-title"><a href="<?=base_url('web/JobDescription/'.$row->Id.'/#'.$row->JobTitle); ?>"> <?php echo $row->JobTitle; ?><br></a></h2>
                                                    <ul class="post-meta">
                                            <li><?php echo date('D F d, Y H:i A',strtotime($row->CreatedAt)); ?></li>
                                            <li><a href="#"><?php echo $row->CompanyName; ?></a>,
                                            <li><a href="#"><?php echo $row->industryname; ?></a></li>
                                        </ul>
                                                </div>
                                            <div class="card-body">
                                                <p><?php echo $row->JobDescription; ?></p>
                                                <p>
            <a href="<?=base_url('web/JobDescription/'.$row->Id.'/#'.$row->JobTitle); ?>"/>Read more</a></p>
                                                </div>
                                            </div>
                                        </article>
                                        <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-1">
                            <div class="sidebar">
                                <!-- Search widget-->
                                <aside class="widget widget-search">
                                    <div class="form-group">
                                    <form action="#" method="POST">
                                        <input class="form-control" type="search" name="searchtext" placeholder="Job Title" value="<?php echo set_value('searchtext', ''); ?>" >
                                        <button class="search-button" type="submit"><span class="fas fa-search"></span></button>
                                        </div>
                                    
                                 <div class="form-group">
                                     <?php
                                    if (!empty($criteria->Categories)) {
                                        print_r($criteria->Categories);
                                     } ; 
                                     ?> 
                                            <label class="control-label">Categories </label>
                                            <select name="Categories[]"  class="select2 m-b-10 select2-multiple" style="width: 100%" multiple=" multiple" dat-placeholder="ategories" "> 
                                                <?php
                                            
                                                     if ($categori->num_rows() > 0) {
                                                    foreach ($categori->result() as $row) {
                                                           if (in_array($row->Id, $criteria['Categories'])) {
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
                                </div>
                                <div class="form-group">
                                                <label class="control-label">Specialization</label>
                                                <select name="Specialization[]" class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                               
                                                 <?php
                                            
                                                     if ($skills->num_rows() > 0) {
                                                    foreach ($skills->result() as $row) {
                                                           if (in_array($row->Id, $criteria['Specialization'])) {
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

                                                <!-- <?php
                                                     if ($skills->num_rows() > 0) {
                                                    foreach ($skills->result() as $row) { ?>
                                                        <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?> -->
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                                <label class="control-label">Employment Level</label>
                                                <select name="EmploymentLevel[]" class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" placeholder="Choose">
                                               

                                                     <?php
                                            
                                                     if ($applevel->num_rows() > 0) {
                                                    foreach ($applevel->result() as $row) {
                                                           if (in_array($row->Id, $criteria['EmploymentLevel'])) {
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
                                               <!--  <?php
                                                    if ($applevel->num_rows() > 0) {
                                                    foreach ($applevel->result() as $row) { ?>
                                                        <option value="<?=$row->Id; ?>"><?php echo $row->Name;?></option>
                                                <?php
                                                    }
                                                }
                                                ?> -->
                                    </select>   
                                </div>
                                </form>
                </aside>

                                <!-- Categories widget-->
                                <aside class="widget widget-categories">
                                    <div class="widget-title">
                                        <h6>Companies</h6>
                                    </div>
                                    <ul>
                                        <?php
                                        if ($estabpost->num_rows() > 0) {
                                            foreach ($estabpost->result() as $row) { ?>
                                        <li><a href="#"><?=$row->CompanyName;?><span class="float-right">10</span></a></li>
                                        <?php
                                            }
                                        }
                                        ?>                                          

                                    </ul>
                                </aside>

                                <!-- Recent entries widget-->
                                <aside class="widget widget-recent-entries-custom">
                                    <div class="widget-title">
                                        <h6>Recent Jobs</h6>
                                    </div>
                                    <ul>

                                        <?php
                                        if ($mostrecentjob->num_rows() > 0) {
                                            foreach ($mostrecentjob->result() as $row ) { ?>
                                        <li class="clearfix">
                                            <div class="wi">
                                                <a href="#"><img src="
                                                    <?php 
                                                    echo base_url(); ?><?=$row->JobImage?>
                                                    " alt="">
                                                </a>
                                            </div>
                                            <div class="wb"><a href="<?=base_url('web/JobDescription/'.$row->Id.'/#'.$row->JobTitle); ?>"><?=$row->JobTitle;?><br>
                                                <span class="post-date"><?=date('D F d, Y H:i A',strtotime($row->CreatedAt));?></span></div>
                                        </li>

                                        <?php
                                            }
                                        }
                                        ?>                                          

                                       <!--  <li class="clearfix">
                                    </ul>
                                </aside>

                                <!-- Twitter widget-->
                                <!-- <aside class="widget twitter-feed-widget">
                                    <div class="widget-title">
                                        <h6>Employee</h6>
                                    </div>
                                    <div class="twitter-feed" data-twitter="345170787868762112" data-number="2"></div>
                                </aside>

                                 Tags widget
                                <aside class="widget widget-tag-cloud">
                                    <div class="widget-title">
                                        <h6>Tags</h6>
                                    </div>
                                    <div class="tag-cloud"><a href="#">e-commerce</a><a href="#">portfolio</a><a href="#">responsive</a><a href="#">boo --><!-- tstrap</a><a href="#">business</a><a href="#">corporate</a></div> -->
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog end-->

            <div class="col-md-12">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#"><span class="fas fa-angle-left"></span></a></li>
                                            <li class="page-item active"><a class="page-link" <a href="<?=base_url('web/JobDescription/'.$row->Id); ?>">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><span class="fas fa-angle-right"></span></a></li>
                                        </ul>
                                    </nav>
                                </div>
            <!-- Footer-->
            <footer class="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <!-- Text widget-->
                                <aside class="widget widget-text">
                                    <div class="widget-title">
                                        <h6>About Us</h6>
                                    </div>
                                    <div class="textwidget">
                                        <p>Quezon City Public Employment Service Office</p>
                                        <p>
                                            Location: 4th Floor, Civic Center <br>
                                            Building A, City Hall Compound <br>
                                            E-mail: isystem20@gmail.com<br>
                                            Phone: +63123453456<br>
                                        </p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-3">
                                <!-- Recent entries widget-->
                                <aside class="widget widget-recent-entries">
                                    <div class="widget-title">
                                        <h6>Recent Posts</h6>
                                    </div>
                                    <ul>
                                         <?php
                                        if ($webpostmodel->num_rows() > 0) {
                                            foreach ($webpostmodel->result() as $row ) { ?>
                                       <div class="wb"><a href="<?=base_url('web/JobDescription/'.$row->Id); ?>"><?=character_limiter($row->PostDescription, 100);?><br>
                                                <span class="post-date"><?=date('D F d, Y H:i A',strtotime($row->CreatedAt));?></span></div>
                                          <?php
                                            }
                                        }
                                        ?>    
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-md-3">
                                <!-- Twitter widget-->
                                <aside class="widget twitter-feed-widget">
                                    <div class="widget-title">
                                        <h6>Twitter Feed</h6>
                                    </div>
                                    <div class="twitter-feed" data-twitter="345170787868762112" data-number="1" id="twitter-1"></div>
                                </aside>
                            </div>
                            <div class="col-md-3">
                                <!-- Recent works-->
                                <aside class="widget widget-recent-works">
                                    <div class="widget-title">
                                        <h6>Portfolio</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#"><img src="assets/images/widgets/1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/widgets/2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/widgets/3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/widgets/7.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/widgets/8.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/widgets/6.jpg" alt=""></a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>© 2018 Quezon City PESO, All Rights Reserved. Design with love by <a href="#">SIGMA</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer end-->
        </div>

            