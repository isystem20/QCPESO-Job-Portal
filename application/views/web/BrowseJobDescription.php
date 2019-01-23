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



<section class="module" id="<?php echo $browsejob[0]['JobTitle']  ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2">
                <!-- Post-->
                <article class="post">
                    <?php $img = $browsejob[0]['JobImage']; ?>
                <center>
                    <div class="post-preview">
                        <a href="#">
                            
                            <img src="
                            <?php 
                            echo base_url(); ?><?=$browsejob[0]['JobImage']?>
                            " alt="">

                        </a>
                    </div>
                </center>
                    <div class="post-wrapper">
                        <br>
                        <div class="post-header">
                            <center>
                            <h2 class="post-title head"><?=$browsejob[0]['JobTitle']  ?> </h2>
                            <span class="post-date">
                            <ul class="post-meta">
                                <li><?=date('D F d, Y H:i A',strtotime($browsejob[0]['CreatedAt']))   ?></li>
                            </ul>
                        </span>
                    </center>
                        </div>
                       
                        <div class="post-content">
                            <h6>Category </h6> 
                            
                            <?php  foreach ($browsejob[0]['CategList'] as $row) {
                                echo '<label style="text-indent: 40px"><a>'.$row->Name.'</a></label>';
                            } ?> 
                        </div>
                         <div class="post-content">
                            <h6>Required Skills</h6>
                            <?php  foreach ($browsejob[0]['SkillReq'] as $row) {
                                echo '<label style="text-indent: 40px"><a>'.$row->Name.'</a></label>';
                            } ?>
                             
                        </div>
                        
                         <div class="post-content">
                            <h6>Job Description</h6>
                            <p style="text-indent: 40px"><?=$browsejob[0]['JobDescription']  ?></p>
                        </div>
                       
                        <div class="post-content">
                            <h6>Work Location</h6>
                        
                            <p style="text-indent: 40px"><?=$browsejob[0]['JobLocation']  ?></p>
                        </div>
                        
                         <!-- <div class="post-content"><h5> COMPANY OVERVIEW:</h5></div>
                         <?=$browsejob[0]['JobOverview']  ?>
                             <br><br> -->   

                             
                         <div class="post-content">
                            <h6> Why choose our company?</h6>
                        </div>
                           <p  style="text-indent: 40px"><?=$browsejob[0]['estabWhyJoinUs']  ?></p>
                    </div>
                </article>
                <center>
                <?php

                $hidden = 
                // print_r($browsejob[0]['AppliedJob']);
                // print_r($this->session->userdata('userid'));
                // print_r($browsejob[0]->result());
                // print_r($this->session->userdata('userid'));
                // print_r($browsejob[0]  );

                $postdata['ApplicantId'] = $browsejob[0]['currentuser'];
                
                if (empty($this->session->userdata('userid'))) {
                    
                ?>
                <a  href="<?=base_url('admin/login')?>" class="read-item-btn btn btn-circle btn-outline-primary"  data-original-title="Apply" type="button"> Apply </a>

                    <?php

                } 
                else {
            


                if ($browsejob[0]['AppliedJob'] == 0) {
                   // echo "hi";
                ?>
                <button class="read-item-btn btn btn-circle btn-outline-primary applyjo"  data-original-title="Apply" type="button" data-action="<?=base_url('admin/jobapplication/add'); ?>" data-id="<?php echo $browsejob[0]['Id']; ?>" <?php if($browsejob[0]['AppliedJob'] == 0){ echo '  > Apply '; } else{  echo ' disabled style="background-color: red; border: red;" > Applied ';} ?>  </button>
                    <?php

                        }
                        else{
                            echo "<button class='btn  btn-circle ";
                            if ($browsejob[0]['ajaStatus'] == 0) {
                                echo "btn-outline-danger' disabled style='cursor: default;'>
                                    
                                     Job application <br> has been declined
                                ";
                            }
                            elseif ($browsejob[0]['ajaStatus'] == 1) {
                                echo "btn-outline-warning' disabled style='cursor: default;'>
                                
                                    Job application <br> has been sent
                                    ";
                            }
                            elseif ($browsejob[0]['ajaStatus'] == 2) {
                                echo "btn-outline-success' disabled style='cursor: default;'>
                                    
                                    Job application <br> has been processed 
                                    ";
                            }
                            elseif($browsejob[0]['ajaStatus'] == 3){
                                echo "btn-outline-primary' disabled style='cursor: default;'>
                                    <div class='post-content'>
                                        Successful Job Application
                                    </div>";
                            }
                            else{
                                echo "btn-outline-danger' disabled style='cursor: default;'>Error";
                            }
                            echo "</button>";
                        }
                    ?>


                <?php 
                    }
                ?>


                
                

              
                     <!-- <div class="form-submit col-md-12">
                        <button class="btn btn-dark" type="submit">Apply Job</button>
                    </div> -->
                </center>
            </div>
           
            <div class="col-lg-4 order-lg-1">
                <div class="sidebar">
                    <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h6>Company</h6>
                        </div>
                        <ul>
                            <li><?=$browsejob[0]['CompanyName']  ?><span class="float-right"></li>
                        </ul>
                    </aside>    
                    <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h6>Dress Code</h6>
                        </div>
                        <ul>
                            <li><?=$browsejob[0]['dresscode']  ?></a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h6>Employment Type</h6>
                        </div>
                        <ul>
                            <li><a href="#">  <?=$browsejob[0]['apptype']  ?></a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h6>Employment Level:</h6>
                        </div>
                        <ul>
                            <li><a href="#">  <?=$browsejob[0]['applevel']  ?></a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h6>Salary</h6>
                        </div>  
                        <ul>
                            <li><?=$browsejob[0]['Salary']  ?></li>
                        </ul>
                    </aside>
                    <aside class="widget widget-recent-entries-custom">
                        <div class="widget-title">
                            <h6>Recent Jobs</h6>
                        </div>
                        <ul>
                                 <?php
                            if ($Recent->num_rows() > 0) {
                                foreach ($Recent->result() as $row ) { ?>
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
                           <!-- 
                            <li class="clearfix">
                                <div class="wi"><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/images/widgets/1.jpg" alt=""></a></div>
                               <?php  
                               foreach ($browsejob[0]['CompanyName'] as $row) {
                                echo '<a>'.$row->Name.'</a>';
                                } ?>
                            </li> -->
                            </aside>
                        <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h6>Industry</h6>
                        </div>
                        <ul>
                            <li><a href="#">  <?=$browsejob[0]['industryname']  ?></a></li>
                        </ul>
                </aside>

                   <!-- <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h6>Position Level</h6>
                        </div>
                        <ul>
                            <li><a href="#">  <?=$browsejob[0]['app_position']  ?><span class="float-right">1</span></a></li>
                        </ul>
                    </aside> -->
                    <!-- <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h6>Employment Level</h6>
                        </div>
                        <ul>
                            <li><a href="#">  <?=$browsejob[0]['app_level']  ?><span class="float-right">1</span></a></li>
                        </ul>
                    </aside> -->
                    
                </div>
            </div>
        </div>
    </div>
</section>

<div class="col-md-12">
                                    
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



<style type="text/css">
    .head {
        color: #7f7fff;
    }
</style>

          