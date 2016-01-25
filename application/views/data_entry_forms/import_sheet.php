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
<div class="row">
    <div class="col-lg-4">
    <form method="post" action="<?php echo base_url();?>import_cattle" enctype="multipart/form-data" >
            <div class="row form-row">
                <div class="col-sm-10 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-10 text" style="margin-left:70px">
                            <p class="text-center">
                                <button class="btn btn-success" id="download-template-cattle">Download Template</button>
                            </p>
                            <h4> Import Cattle Data from Sheet</h4>
                        </div>
                    </div>
                
                <div class="row">
                        <div class="col-md-6 label text-right"> End Row:</div>
                <div class="col-md-6 "> 
                <input type="file" class="form-control" name="userfile" id="" placeholder="" required>
                </div>
                </div>

                <div class="row">
                        <div class="col-md-6 label text-right"> Start Row:</div>
                <div class="col-md-6 "> 
                <input type="number" class="form-control" name="startrow" id="" placeholder="" required>
                </div>
                </div>

                <div class="row">
                        <div class="col-md-6 label text-right"> End Row:</div>
                <div class="col-md-6 "> 
                <input type="number" class="form-control" name="endrow" id="" placeholder="" required>
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-md-6 text-right label"> Relief:</div>
                <div class="col-md-6 "> 
                   <select name="budget" ng-model="data.budget_cattle" required="required" class="form-control" required>
                            <option ng-repeat="b in budget_cattle" value="{{b.b_id}}">
                                {{b.b_year}} - {{b.b_category}} - {{b.b_amount}}   
                            </option>
                        </select>
                </div>
                </div>
              


                
              
                <div class="row">
                <br>
                <div class="col-md-2 col-md-offset-7"style="margin-left:61%">
                <input type="submit" value="Import" class="btn btn-success">
                    </div>
                    <div class="col-md-3">
                    
                    </div>

                </div>
                </div>  
                                          
                </div>
                </div>

    </form></div>
    <div class="col-lg-4"><form method="post" action="<?php echo base_url();?>import_house" enctype="multipart/form-data" >
            <div class="row form-row">
                <div class="col-sm-9 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-12 text" style="margin-left:50px">
                            <p class="text-center">
                                <button class="btn btn-success" id="download-template-house">Download Template</button>
                            </p>
                            <h4> Import House Damage Data from Sheet</h4>
                        </div>
                    </div>
                
                <div class="row">
                        <div class="col-md-5 label text-right"> End Row:</div>
                <div class="col-md-7 "> 
                <input type="file" class="form-control" name="userfile" id="" placeholder="" required>
                </div>
                </div>

                <div class="row">
                        <div class="col-md-5 label text-right"> Start Row:</div>
                <div class="col-md-7 "> 
                <input type="number" class="form-control" name="startrow" id="" placeholder="" required>
                </div>
                </div>

                <div class="row">
                        <div class="col-md-5 label text-right"> End Row:</div>
                <div class="col-md-7"> 
                <input type="number" class="form-control" name="endrow" id="" placeholder="" required>
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-md-5 text-right label"> Relief:</div>
                <div class="col-md-7 "> 
                   <select name="budget" ng-model="data.budget_house" required="required" class="form-control" required>
                            <option ng-repeat="b in budget_house" value="{{b.b_id}}">
                                {{b.b_year}} - {{b.b_category}} - {{b.b_amount}}   
                            </option>
                        </select>
                </div>
                </div>
              


                
              
                <div class="row">
                <br>
                <div class="col-md-2 col-md-offset-7" >
                <input type="submit" value="Import" class="btn btn-success">
                    </div>
                    <div class="col-md-3">
                    
                    </div>

                </div>
                </div>  
                                          
                </div>
                </div>

    </form>
    </div>
    <div class="col-lg-4">
    <form method="post" action="<?php echo base_url();?>import_deadinjured" enctype="multipart/form-data" >
            <div class="row form-row">
                <div class="col-sm-9 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-12 text" style="margin-left:5%">
                            <p class="text-center">
                                <button class="btn btn-success" id="download-template-di">Download Template</button>
                            </p>
                            <hr>
                            <h4> Import Dead/Injured Data from Sheet</h4>
                        </div>
                    </div>
                
                <div class="row">
                        <div class="col-md-5 label text-right"> End Row:</div>
                <div class="col-md-7 "> 
                <input type="file" class="form-control" name="userfile" id="" placeholder="" required>
                </div>
                </div>

                <div class="row">
                        <div class="col-md-5 label text-right"> Start Row:</div>
                <div class="col-md-7 "> 
                <input type="number" class="form-control" name="startrow" id="" placeholder="" required>
                </div>
                </div>

                <div class="row">
                        <div class="col-md-5 label text-right"> End Row:</div>
                <div class="col-md-7 "> 
                <input type="number" class="form-control" name="endrow" id="" placeholder=""  required>
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-md-5 text-right label"> Relief:</div>
                <div class="col-md-7 "> 
                   <select name="budget" ng-model="data.budget_di" required="required" class="form-control" required>
                            <option ng-repeat="b in budget_di" value="{{b.b_id}}">
                                {{b.b_year}} - {{b.b_category}} - {{b.b_amount}}   
                            </option>
                        </select>
                </div>
                </div>
              


                
              
                <div class="row">
                <br>
                <div class="col-md-2 col-md-offset-7">
                <input type="submit" value="Import" class="btn btn-success">
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

    
         
</div>
</div>

<?php 
    $this->load->view('template/footer');
?>
<script type="text/javascript">
    $('#download-template-cattle').click(function(e) {
        e.preventDefault();  //stop the browser from following
        window.location.href = "<?php echo base_url();?>templates/cattle.xlsx";
    });
    $('#download-template-house').click(function(e) {
        e.preventDefault();  //stop the browser from following
        window.location.href = "<?php echo base_url();?>templates/housedamage.xlsx";
    });
    $('#download-template-di').click(function(e) {
        e.preventDefault();  //stop the browser from following
        window.location.href = "<?php echo base_url();?>templates/deadinjured.xlsx";
    });

</script>