<?php 
    $this->load->view('template/header');
?>
<div class="left-content">
    <div class="row">
        <div class="col-lg-2 entry-title">Manage User</div>
    </div>
        <form action="" method="post" role="form">
            <div class="row form-row">
                <div class="col-lg-3 col-lg-offset-4">
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control" name="" id="" placeholder="User Name"><br/>
                        <input type="text" class="form-control" name="" id="" placeholder="Password"><br/>
                        <input type="text" class="form-control" name="" id="" placeholder="Priviliges">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-4">
            <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
        </form>
</div>
<div class="right-content">
    <div class="container-fluid wapper-right">
        <button type="submit" class="toggle-side btn btn-main">Submit</button>
</div>
    </div>


<?php 
    $this->load->view('template/footer');
?>