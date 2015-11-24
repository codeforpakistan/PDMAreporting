<?php 
    $this->load->view('template/header');
?>
<?php 
    $this->load->view('template/reporting_menu');
?>
<style type="text/css">
    a, a:hover, a:active{
        text-decoration: none;
        }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 dash-title">Choose a Category ?</div>
    </div>
    <div class="row dashboard-row">
        <div class="col-sm-4">
            <a href="<?php echo base_url();?>house/data">
            <div class="box b1"><img class="dash-img" src="<?php echo base_url();?>img/house.png" alt=""/><div class="box1">House Damage</div></div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="<?php echo base_url();?>cattle/data">
            <div class="box b2"><img class="dash-img" src="<?php echo base_url();?>img/cattle.png" alt=""/><div class="box2">Cattles</div></div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="<?php echo base_url();?>deadinjured/data">
            <div class="box b3"><img class="dash-img" src="<?php echo base_url();?>img/dead.png" alt=""/><div class="box3">Dead / Injured</div></div>
            </a>
        </div>
    </div>
    <div class="row dashboard-row">
        <div class="col-sm-4 col-sm-offset-2">
            <a href="<?php echo base_url();?>user/data">
            <div class="box b1"><img class="dash-img" src="<?php echo base_url();?>img/house.png" alt=""/><div class="box1">Users</div></div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="<?php echo base_url();?>budget/data">
            <div class="box b2"><img class="dash-img" src="<?php echo base_url();?>img/cattle.png" alt=""/><div class="box2">Budget</div></div>
            </a>
        </div>
    </div>
    <ng-view></ng-view>
</div>

    

<?php 
    $this->load->view('template/footer');
?>