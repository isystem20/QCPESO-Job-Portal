<section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 order-lg-2">
                            <!-- Post-->
                            <article class="post">
                              <div class="post-preview"><?=$browsejob[0]['JobImage']?></div>


                                <div class="post-wrapper">
                                    <br>
                                    <div class="post-header">
                                        <h1 class="post-title"><?=$browsejob[0]['JobTitle']  ?> </h1>
                                         <li><?=$browsejob[0]['CreatedAt'];  ?></li>
                                    </div>
                                    <div class="post-content">
                                        <h6>Category: <div class="post-tags"> <?php  foreach ($browsejob[0]['CategList'] as $row) {
                                            echo '<a>'.$row->Name.'</a>';
                                        } ?> </div> </h6>
                                    </div>
                                     <div class="post-content">
                                        <h6>Skill Requirements: <div class="post-tags"> <?php  foreach ($browsejob[0]['SkillReq'] as $row) {
                                            echo '<a>'.$row->Name.'</a>';
                                        } ?> </div> </h6>
                                    </div>
                                    <br>
                                     <div class="post-content">
                                        <h5> JOB DESCRIPTION:</h5>
                                         <?=$browsejob[0]['JobDescription']  ?>
                                    </div>
                                   
                                    <br>
                                     <div class="post-content"><h5>WORK LOCATION:</h5></div>
                                         <?=$browsejob[0]['JobLocation']  ?>
                                       <br><br>
                                    
                                     <div class="post-content"><h5> COMPANY OVERVIEW:</h5></div>
                                     <?=$browsejob[0]['JobOverview']  ?>
                                         <br><br>   
                                     <div class="post-content"><h5> COMPANY PHOTOS:</h5></div>

                                       <br>    
                                     <div class="post-content"><h5> WHY JOIN US? :</h5></div>
                                       <?=$browsejob[0]['WhyJoinUs']  ?>
                                </div>
                            </article>
                             <div class="form-submit col-md-12">
                                            <button class="btn btn-dark" type="submit">Apply Job</button>
                                        </div>
                        </div>
                        <div class="col-lg-4 order-lg-1">
                            <div class="sidebar">

                                <!-- Search widget-->
                               <!--  <aside class="widget widget-search">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Type Search Words">
                                        <button class="search-button" type="submit"><span class="fas fa-search"></span></button>
                                    </form>
                                </aside> -->

                                <!-- Categories widget-->
                                <aside class="widget widget-categories">
                                    <div class="widget-title">
                                        <h6>Company</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">  <?=$browsejob[0]['CompanyName']  ?><span class="float-right">1</span></a></li>
                                    </ul>
                                </aside>

                                <!-- Recent entries widget-->
                              <aside class="widget widget-recent-entries-custom">
                                    <div class="widget-title">
                                        <h6>Recent Jobs</h6>
                                    </div>
                                    <ul>

                                        <?php
                                        if ($browsejob1->num_rows() > 0) {
                                            foreach ($browsejob1->result() as $row ) { ?>
                                        <li class="clearfix">
                                            <div class="wi"><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/images/widgets/1.jpg" alt=""></a></div>
                                            <div class="wb"><a href="#"><?=$row->JobDescription;?></span></div>
                                        </li>

                                        <?php
                                            }
                                        }
                                        ?>           
                                </aside>

                                <!-- Twitter widget-->
                                

                                <!-- Tags widget-->
                               <aside class="widget widget-categories">
                                    <div class="widget-title">
                                        <h6>Position Level</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">  <?=$browsejob[0]['app_position']  ?><span class="float-right">1</span></a></li>
                                    </ul>
                                </aside>
                                <aside class="widget widget-categories">
                                    <div class="widget-title">
                                        <h6>Employment Level</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">  <?=$browsejob[0]['app_level']  ?><span class="float-right">1</span></a></li>
                                    </ul>
                                </aside>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>


          