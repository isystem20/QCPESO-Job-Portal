<div class="wrapper">
            <!-- Hero-->

            <section class="module-cover parallax text-center fullscreen" data-background="<?php echo base_url(); ?>banners/NEWS.png" data-overlay="0.6">
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



<section class="module" id="<?php echo $webpost[0]['PostTitle']  ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2">
                <!-- Post-->
                <article class="post">
                    <?php $img = $webpost[0]['WebImage']; ?>
                <center>
                    <div class="post-preview">
                        <a href="#">
                            
                            <img src="
                            <?php 
                            echo base_url(); ?><?=$webpost[0]['WebImage']?>
                            " alt="">

                        </a>
                    </div>
                </center>
                    <div class="post-wrapper">
                        <br>
                        <div class="post-header">
                            <center>
                            <h2 class="post-title head"><?=$webpost[0]['PostTitle']  ?> </h2>
                            <span class="post-date">
                            <ul class="post-meta">
                                <li><?=date('D F d, Y H:i A',strtotime($webpost[0]['CreatedAt']))   ?></li>
                            </ul>
                        </span>
                    </center>
                        </div>
                         <div class="post-content">
                            <h6>News Description</h6>
                            <p style="text-indent: 40px"><?=$webpost[0]['PostDescription']  ?></p>
                        </div>
                       
                       
                        
                         <!-- <div class="post-content"><h5> COMPANY OVERVIEW:</h5></div>
                         <?=$browsejob[0]['JobOverview']  ?>
                             <br><br> -->   

                             
                       
                </article>
                <center>
         
                     <!-- <div class="form-submit col-md-12">
                        <button class="btn btn-dark" type="submit">Apply Job</button>
                    </div> -->
                </center>
            </div>
           
            <div class="col-lg-4 order-lg-1">
                <div class="sidebar">
                    <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h6>Post Type</h6>
                        </div>
                        <ul>
                            <li><?=$webpost[0]['PostTypeId']  ?><span class="float-right"></li>
                        </ul>
                    </aside> 
                     <aside class="widget widget-tag-cloud">
                                    <div class="widget-title">
                                        <h6>Tags</h6>
                                    </div>
                                    <div class="tag-cloud"><a href="#"><?=$webpost[0]['Tags']  ?></a>
                                </aside>
   
                   
           





<style type="text/css">
    .head {
        color: #7f7fff;
    }
</style>

