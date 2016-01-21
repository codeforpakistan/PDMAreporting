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
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="house-nav"><a href="<?php echo base_url();?>dataentry/dashboard">Data Entry Forms</a></li>
                 </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url();?>logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
 



<style type="text/css">
    .label{
        color: #333;
    }
</style>
<div ng-controller="ImportSheetCtrl">
    <form method="post" action="<?php echo base_url();?>import_cattle" enctype="multipart/form-data" >
            <div class="row form-row">
                <div class="col-md-4 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-12 text">
                            <h3> Import Cattle Data from Sheet</h3>
                        </div>
                    </div>
                
                <div class="row">
                        <div class="col-md-6 label text-right"> End Row:</div>
                <div class="col-md-6 "> 
                <input type="file" class="form-control" name="userfile" id="" placeholder="" ng-model="data.i_hd_partial" required>
                </div>
                </div>

                <div class="row">
                        <div class="col-md-6 label text-right"> Start Row:</div>
                <div class="col-md-6 "> 
                <input type="number" class="form-control" name="startrow" id="" placeholder="" ng-model="data.i_hd_full" required>
                </div>
                </div>

                <div class="row">
                        <div class="col-md-6 label text-right"> End Row:</div>
                <div class="col-md-6 "> 
                <input type="number" class="form-control" name="endrow" id="" placeholder="" ng-model="data.i_hd_partial" required>
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-md-6 text-right label"> Relief:</div>
                <div class="col-md-6 "> 
                   <select name="budget" ng-model="data.budget" required="required" class="form-control" required>
                            <option ng-repeat="b in budget" value="{{b.b_id}}">
                                {{b.b_year}} - {{b.b_category}} - {{b.b_amount}}   
                            </option>
                        </select>
                </div>
                </div>
              


                
              
                <div class="row">
                <br>
                <div class="col-md-2 col-md-offset-4">
                <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                    <div class="col-md-3">
                    
                    </div>

                </div>
                </div>                            
                </div>
                </div>

    </form>
         
</div>
</div>

<?php 
    $this->load->view('template/footer');
?>