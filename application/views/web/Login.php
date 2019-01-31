
        <div class="wrapper" id="maincontent" data-adminpage="<?=base_url('manage'); ?>">
            <section class="module-cover parallax fullscreen text-center" data-background="<?php echo base_url(); ?>banners/LOGIN1.png" data-overlay="0.65" data-gradient="">
                <div class="container">
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-6 m-auto ">

                       <br><br><br><br>

                            <div class="m-b-20">
                                <h6>Sign into your account</h6> 
                            </div>
                            <div class="m-b-20">
                                <?php $hidden = array('Mode'=>'Manual'); ?>
                                <?=form_open('web/login/applicant','id="login-form"',$hidden); ?>
                                <form method="post" id="" action="<?php echo base_url(); ?>">
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="password" type="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-block btn-round btn-brand" id="login-btn" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="m-b-20">
                              <div class="g-signin2" data-onsuccess="onSignIn" data-width="100%" data-height=""></div>
                  <a href="#" class="grey-text text-darken-1" onclick="signOut();"> Logout</a>

                            </div>

<!-- 
                             <div class="row"> 
                            <div class="col-md-6" style="height: 50px; padding: 10px;">
                               <div>
                                   <button type="button" class="btn btn-primary">Facebook</button>
                                    <div class="g-signin2" data-onsuccess="onSignIn" data-width=""></div>

                               </div>
                            </div>

                            <div class="col-md-6" style="height: 50px; padding: 10px;">
                               <div class="g-signin2" data-onsuccess="onSignIn" data-width=""></div>
                            </div>
                        </div>
                        <br>
 -->

                            <div class="m-b-20">
                                <p><small>Dont have an account yet? <a href="<?php echo base_url(); ?>web/register">Create account</a> <br>
                                        Forgot your username or password? <a href="#">Recover account</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>