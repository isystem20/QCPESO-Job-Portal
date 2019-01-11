   <?php
   // print_r($this->session->userdata());

   ?>
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?=base_url('themes/admin-pro/assets/images/background/login-register.jpg'); ?>);">
            <div class="login-box card">
                <div class="card-body">
                    <?php
                    $hidden = array('userid'=>$this->session->userdata('userid'));
                     ?>
                    <?=form_open('activate/processor',' class="form-horizontal form-material" id="activateaccount"',$hidden); ?>
                        <div class="form-group">
                            <div class="col-xs-12 text-center">
                                <div class="user-thumb text-center"> <img alt="thumbnail" class="img-circle" width="100" src="<?=base_url('themes/admin-pro/assets/images/users/1.jpg'); ?>">
                                    <h3>Hi !<?=$this->session->userdata('firstname'); ?></h3>
                                    <p>We have sent a verification code in your email.</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" id="code" type="text" required="" placeholder="6 digit Code">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id="verifybtn" type="submit">Verify</button>
                            </div>
                        </div>
                    </form>
                    <p>No code received? <button id="SendCode" class="btn btn-sm" data-action="<?=base_url('activate/sendcode'); ?>">Resend</button></p>

                </div>
            </div>
        </div>
    </section>
