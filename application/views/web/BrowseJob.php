            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 order-lg-2">
                                    <div class="row row-post-masonry" style="position: absolute; height: 800px;">
                                <div class="col-md-12 post-item" style="position: absolute; left: 0px; top: 10px;">
                                    <!-- Post-->
                                    <?php
                                        if ($browsejob->num_rows() > 0) {
                                            foreach ($browsejob->result() as $row) { ?>
                                            
                                        <article class="post">
                                            <div class="post-preview"><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/images/blog/1.jpg" alt=""></a></div>
                                            <div class="post-wrapper">
                                                <div class="post-header">
                                                    <h2 class="post-title"><a href="blog-single.html"> <?php echo $row->JobTitle; ?></a></h2>
                                                </div>
                                                <div class="card-body">
                                                    <p><?php echo $row->JobDescription; ?></p>
                                                    <p><a href="#">Read more</a></p>
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
                                    <form action="#" method="POST">
                                        <input class="form-control" type="search" name="searchtext" placeholder="Job Title">
                                        <button class="search-button" type="submit"><span class="fas fa-search"></span></button>
                                    </form>
                                 <div class="form-group">
                                                    <label class="control-label">Specialization</label>
                                                    
                                                    <select name="speci" id="speci" class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                        <?php
                                                            if ($skills->num_rows() > 0) {
                                                                foreach ($skills->result() as $row) { ?>
                                                                <option value="<?=$row->Id; ?>"><?php echo $row->Name; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
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

                                        <!-- <li><a href="#">Jolibee<span class="float-right">100</span></a></li>
                                        <li><a href="#">McDO <span class="float-right">50</span></a></li>
                                        <li><a href="#">Mang Inasal <span class="float-right">40</span></a></li>
                                        <li><a href="#">Healthy Shabu <span class="float-right">30</span></a></li>
                                        <li><a href="#">Kuya J <span class="float-right">18</span></a></li> -->
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
                                            <div class="wi"><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/
/images/widgets/1.jpg" alt=""></a></div>
                                            <div class="wb"><a href="#"><?=$row->JobDescription;?></span></div>
                                        </li>

                                        <?php
                                            }
                                        }
                                        ?>                                          

                                       <!--  <li class="clearfix">
                                            <div class="wi"><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/
/images/widgets/2.jpg" alt=""></a></div>
                                            <div class="wb"><a href="#">Map where your photos were taken and discover local points.</a><span class="post-date">May 8, 2016</span></div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="wi"><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/
/images/widgets/3.jpg" alt=""></a></div>
                                            <div class="wb"><a href="#">Map where your photos were taken and discover local points.</a><span class="post-date">May 8, 2016</span></div>
                                        </li> -->
                                    </ul>
                                </aside>

                                <!-- Twitter widget-->
                                <aside class="widget twitter-feed-widget">
                                    <div class="widget-title">
                                        <h6>Employee</h6>
                                    </div>
                                    <div class="twitter-feed" data-twitter="345170787868762112" data-number="2"></div>
                                </aside>

                                <!-- Tags widget-->
                                <aside class="widget widget-tag-cloud">
                                    <div class="widget-title">
                                        <h6>Tags</h6>
                                    </div>
                                    <div class="tag-cloud"><a href="#">e-commerce</a><a href="#">portfolio</a><a href="#">responsive</a><a href="#">bootstrap</a><a href="#">business</a><a href="#">corporate</a></div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog end-->

            