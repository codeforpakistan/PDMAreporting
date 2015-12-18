<?php 
    $this->load->view('template/header');
?>
<style type="text/css">
    a, a:hover, a:active{
        text-decoration: none;
        }
</style>
<div class="container-fluid" ng-app="pdmadataentry">
<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top hide" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="house-nav"><a href="#Housedamage">House Damage</a></li>
                    <li class="cattle-nav"><a href="#Cattles">Cattles</a></li>
                    <li class="dead-nav"><a href="#Deadinjured">Dead / Injured</a></li>
                </ul>
                 <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url();?>logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
 <!-- category -->
    <div class="dash">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 dash-title">Choose a Category ?</div>
        </div>
        <div class="row dashboard-row">
            <div class="col-lg-3 ">
                <a href="#Housedamage">
                <div class="box b1"><img class="dash-img" src="<?php echo base_url();?>img/house.png" alt=""/><div class="box1">House Damage</div></div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#Cattles">
                <div class="box b2"><img class="dash-img" src="<?php echo base_url();?>img/cattle.png" alt=""/><div class="box2">Cattles</div></div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#Deadinjured">
                <div class="box b3"><img class="dash-img" src="<?php echo base_url();?>img/dead.png" alt=""/><div class="box3">Dead / Injured</div></div>
                </a>
            </div>
            <div class="col-lg-3">            
                    <div class="box b4"><img class="dash-img" src="<?php echo base_url();?>img/others.png" alt=""/><div class="box4">Others</div></div>
            </div>
        </div>
    </div>
    <div class="my-view hide">
        <ng-view></ng-view>
    </div>
</div>

    

<?php 
    $this->load->view('template/footer');
?>