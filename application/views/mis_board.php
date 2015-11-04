<?php 
    $this->load->view('template/header');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 dash-title">MIS</div>
    </div>
    <div class="row dashboard-row">
        <div class="col-lg-offset-3 col-lg-3">
            <div class="box b5"><img class="mis-img" src="<?php echo base_url();?>img/manage_user.png" alt=""/><div class="box5">Manage Users</div></div>
        </div>
        <div class="col-lg-3">
            <div class="box b6"><img class="mis-img" src="<?php echo base_url();?>img/manage_data.png" alt=""/><div class="box6">Manage Data</div></div>
        </div>
    </div>
</div>


<?php 
    $this->load->view('template/footer');
?>