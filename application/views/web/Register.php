<div class="wrapper" id="maincontent" data-adminpage="<?=base_url('manage'); ?>">
            <section class="module-cover parallax fullscreen text-center" data-background="<?php echo base_url(); ?>banners/LOGIN1.png" data-overlay="0.65" data-gradient="">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 m-auto">
                            <div class="m-b-20">
                                <br><br>
                                <h6>Create a new account</h6>
                            </div>
                            <div class="m-b-20">
                                <form method="post" action="<?php echo base_url(); ?>web/register/applicant" id="applicant-register-form">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="First name" name="firstname">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Last name" name="lastname">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="E-mail" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Confirm password" name="password2">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-block btn-round btn-brand" type="submit" id="applicant-register-btn">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">


                                    <?php
                                      if (!empty($websetting) && !empty($websetting['ENABLE_FACEBOOK_AUTH'])) {
                                        if ($websetting['ENABLE_FACEBOOK_AUTH'] == 'YES') { ?>

                                     <fb:login-button 
                                      scope="public_profile,email"
                                      onlogin="checkLoginState();">
                                    </fb:login-button>   

                                    <?php
                                          }
                                      }
                                    ?>

                                </div>
                                <div class="col-sm-6">


                                    <?php
                                    if (!empty($websetting) && !empty($websetting['ENABLE_GOOGLE_AUTH'])) {
                                        if ($websetting['ENABLE_GOOGLE_AUTH'] == 'YES') { ?>

                                       <div class="g-signin2" data-onsuccess="onSignIn" data-width="100%"></div> 
                                    <?php
                                          }
                                      }
                                    ?>


                                </div>

                            </div>



                            <div class="m-b-20">
                                <p><small>By signing up, you agree to the <a href="#">terms of service</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           
        </div>