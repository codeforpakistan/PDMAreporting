<?php 
    $this->load->view('template/header');
?>
<div class="container-fluid">
    <div class="row title-banner">
        <div class="col-lg-2 col-lg-offset-1 text-center"><img class="login-image img-responsive" src="img/KP_Logo.jpg" alt=""/></div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12 heading1">Provisional Disaster Management Authority</div>
            </div>
            <div class="row">
                <div class="col-lg-12 heading2">Relief Reporting System</div>
            </div>
        </div>
        <div class="col-lg-2 text-center"><img class="login-image img-responsive" src="img/PDMA_Logo.jpg" alt=""/></div>
    </div>
    <div class="row edit-area">
        <div class="col-lg-4 col-lg-offset-4">
            <form action="" method="post" role="form" class="text-center">
            
            	<div class="form-group form-main">
                    <input type="text" class="form-control" name="" id="username" placeholder="Username">
                    <br/>
                    <input type="text" class="form-control" name="" id="password" placeholder="Password">
            	</div>
                <div class="form-group form-forget hidden">
                    <br/>
                    <input type="text" class="form-control" name="" id="forgot_email" placeholder="Enter email">
                </div>

                <!--<a href="http://google.com" class="anchor-small">Google </a>-->
                <button type="submit" class="btn btn-success btn-main">Submit</button>
                <button type="submit" class="btn btn-success btn-forget hidden">F-Submit</button>
                <a href="#" class="anchor-small clearfix ">forgot password?</a>
            </form>
        </div>
    </div>
    <div class="row"><img class="login-bottom img-responsive" src="img/login-bottom.png" alt=""/></div>
</div>


<?php 
    $this->load->view('template/footer');
?>