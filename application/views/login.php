<?php 
    $this->load->view('template/header');
?>
<div class="container-fluid">
    <div class="row title-banner">
        <div class="col-sm-2 col-sm-offset-1 text-center"><img class="login-image" src="<?php echo base_url();?>img/KP_Logo.jpg" alt=""/></div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-12 heading1">Provincial Disaster Management Authority</div>
            </div>
            <div class="row">
                <div class="col-sm-12 heading2">Relief Reporting System</div>
            </div>
        </div>
        <div class="col-sm-2 text-center"><img class="login-image" src="<?php echo base_url();?>img/PDMA_Logo.jpg" alt=""/></div>
    </div>  
    <div class="row edit-area">
        <div class="col-sm-4 col-sm-offset-4">

            <?php 
            if($invalid_credentials):
            ?>
                <p class="alert alert-danger"> <?php echo "Invalid Credentials" ?></p>
            <?php
            endif;
            ?>
            <form action="<?php echo base_url();?>login/authenticate" method="post" role="form" class="text-center">
            
            	<div class="form-group form-main">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    <br/>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <br/>
                    <select name="category" class="form-control" id="category">
                        <option value="Data Entry Operator">Data Entry Operator</option>
                        <option value="Assistant Director">Assistant Director</option>
                        <option value="MIS User">MIS User</option>
                    </select>
            	</div>
                <div class="form-group form-forget hidden">
                    <br/>
                    <input type="text" class="form-control" name="" id="forgot_email" placeholder="Enter email">
                </div>
<div class="clearfix"></div>
                <!--<a href="http://google.com" class="anchor-small">Google </a>-->
                <button type="submit" class="btn btn-success btn-main">Submit</button>
                <button type="submit" class="btn btn-success btn-forget hidden">F-Submit</button>
                <a href="#" class="anchor-small clearfix ">forgot password?</a>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <img class="login-bottom img-responsive hidden-xs" src="<?php echo base_url();?>img/login-bottom.png" alt=""/>
    </div>
</div>


<?php 
    $this->load->view('template/footer');
?>