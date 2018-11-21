        <div class="wrapper">
            <section class="module-cover parallax fullscreen text-center" data-background="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/images/module-5.jpg" data-overlay="0.65" data-gradient="">
                <div class="container">
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-6 m-auto border">

                        <div class="row"> 
                            <div class="col-md-6" style="height: 50px; padding: 10px;">
                               <div>
                                   <button type="button" class="btn btn-primary">Facebook</button>
                               </div>
                            </div>

                            <div class="col-md-6" style="height: 50px; padding: 10px;">
                               <div class="g-signin2" data-onsuccess="onSignIn" data-width=""></div>
                            </div>
                        </div>
                        <br>
                    

                            <div class="m-b-20">
                                <h6>Sign into your account</h6> 
                            </div>
                            <div class="m-b-20">
                                <form method="post" id="login-form" action="<?php echo base_url(); ?>web/login/applicant">
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
                                <p><small>Dont have an account yet? <a href="#">Create account</a> <br>
                                        Forgot your username or password? <a href="#">Recover account</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>