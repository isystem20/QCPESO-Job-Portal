<div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax text-center fullscreen" data-background="<?php echo base_url(); ?>banners/NEWS.png" data-overlay="0.6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="m-b-20"><strong>NEWS</strong></h1>
                            <h5 class="m-b-40">See how your users experience your website in realtime or view  <br> trends to see any changes in performance over time.</h5>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero end-->

            <!-- Blog-->
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 order-lg-2">

                            <div class="row row-post-thumbnail">
                                <!-- Post-->
                                <article class="post row align-items-center">
                                    <div class="col-md-1">
                                        <div class="post-preview"><a href="#"><img src="assets/images/blog/1.jpg" alt=""></a></div>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="post-wrapper">
                                            <div class="post-header">

                                            <?php
                                        if ($webpost->num_rows() > 0) {
                                            foreach ($webpost->result() as $row ) { ?>
                                             <div class="post-header">
                                            <h2 class="post-title"><a href="#"><?php echo $row->PostTitle; ?></a></h2>
                                            <ul class="post-meta">
                                            <li><?php echo date('D F d, Y H:i A',strtotime($row->CreatedAt)); ?></li>
                                            </ul>
                                            </div>
                                            <div class="post-content">
                                                <div class="card-body">
                                                <p><?=character_limiter($row->PostDescription, 300);?></p>
                                                <p>
                                                
                                            </div>
                                              <?php
                                        
                                            }
                                           
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </article>     
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-1">
                            <div class="sidebar">

                                <!-- Search widget-->
                               
                                <!-- Categories widget-->
                                <aside class="widget widget-categories">
                                    <div class="widget-title">
                                        <h6>Categories</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">Journey <span class="float-right">112</span></a></li>
                                        <li><a href="#">Development <span class="float-right">86</span></a></li>
                                        <li><a href="#">Sport <span class="float-right">10</span></a></li>
                                        <li><a href="#">Photography <span class="float-right">144</span></a></li>
                                        <li><a href="#">Symphony <span class="float-right">18</span></a></li>
                                    </ul>
                                </aside>

                                <!-- Recent entries widget-->
                                <aside class="widget widget-recent-entries-custom">
                                    <div class="widget-title">
                                       <!--  <h6>Recent Posts</h6>
                                    </div>
                                    <ul>
                                        <?php
                                        if ($webpost->num_rows() > 0) {
                                            foreach ($webpost->result() as $row ) { ?>
                                       <div class="wb"><a href="<?=base_url('web/JobDescription/'.$row->Id); ?>"><?=character_limiter($row->PostTitle, 100);?><br>
                                                <span class="post-date"><?=date('D F d, Y H:i A',strtotime($row->CreatedAt));?></span></div>
                                          <?php
                                            }
                                        }
                                        ?>  -->
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog end-->

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
                                            Building A, City Hall Compound<br>
                                            E-mail: isystem20@gmail.com<br>
                                            Phone: +63123453456<br>
                                        </p>
                                        <ul class="social-icons">
                                            <li><a href="https://www.facebook.com/QuezonCityPESO/""><i class="fab fa-facebook-f"></i></a></li>
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
                                        <li><a href="#">Map where your photos were taken and discover local points.</a><span class="post-date">May 8, 2018</span></li>
                                        <li><a href="#">Map where your photos were taken and discover local points.</a><span class="post-date">April 7, 2018</span></li>
                                        <li><a href="#">Map where your photos were taken and discover local points.</a><span class="post-date">September 7, 2018</span></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-md-3">
                                <!-- Twitter widget-->
                                <aside class="widget twitter-feed-widget">
                                    <div class="widget-title">
                                        <h6>Twitter Feed</h6>
                                    </div>
                                    <div class="twitter-feed" data-twitter="345170787868762112" data-number="1"></div>
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
                                    <p>© 2018 Quezon City PESO, All Rights Reserved. Design with love by <a href="#">Sigma</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer end-->
        </div>