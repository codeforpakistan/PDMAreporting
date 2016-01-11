<style type="text/css">
    .label{
        color: #333;
    }
</style>
<div ng-controller="DistrictReportingCtrl">
    <form novalidate ng-submit="addDistrictReporting(data)" method="post" name="newDistrictReportingForm">
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 text">
                            <h2> District Reporting</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 label text-right"> House Damage Full:</div>
                <div class="col-lg-3 "> 
                <input type="number" class="form-control" name="" id="" placeholder="House Damage full" ng-model="data.i_hd_full" required>
                </div>
                </div>

                <div class="row">
                        <div class="col-lg-2 label text-right"> House Damage Partial:</div>
                <div class="col-lg-3 "> 
                <input type="number" class="form-control" name="" id="" placeholder="House Damage Partial" ng-model="data.i_hd_partial" required>
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-lg-2 text-right label"> Cattle Big:</div>
                <div class="col-lg-3 "> 
                   <input type="number" class="form-control" name="" id="" placeholder="cattle-big" ng-model="data.i_c_big" required>
                
                </div>
                </div>
                <div class="row">
                      <div class="col-lg-2 text-right label"> Cattle Small:</div>
                <div class="col-lg-3 "> 
                   <input type="number" class="form-control" name="" id="" placeholder="cattle-small" ng-model="data.i_c_small" required>
                
                </div>
                </div>

                <div class="row">
                      <div class="col-lg-2 text-right label"> Dead:</div>
                <div class="col-lg-3 "> 
                   <input type="number" class="form-control" name="" id="" placeholder="dead" ng-model="data.i_dead" required>
                
                </div>
                </div>
                
                <div class="row">
                      <div class="col-lg-2 text-right label"> Injured:</div>
                <div class="col-lg-3 "> 
                   <input type="number" class="form-control" name="" id="" placeholder="injured" ng-model="data.i_injured" required>
                
                </div>
                </div>


                <div class="row">
                      <div class="col-lg-2 text-right label"> District:</div>
                <div class="col-lg-3 "> 
                   <input type="text" class="form-control" name="" id="" placeholder="District" ng-model="data.i_district" required>
                
                </div>
                </div>
                <div class="row">
                      <div class="col-lg-2 text-right label">Date:</div>
                <div class="col-lg-3 "> 
                <p><input type="date" class="form-control" ng-model="data.i_date" required></p>
                
                </div>
                </div>
                <div class="row">
                <br>
                <div class="col-lg-3 col-lg-offset-4">
                <input type="submit" value="Submit" class="btn btn-success" ng-disabled="newDistrictReportingForm.$invalid">
                    </div>
                </div>
                </div>                            
                </div>
                </div>

    </form>
         <div class="alert alert-info" ng-show="showalert===1">
            {{message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
</div>
