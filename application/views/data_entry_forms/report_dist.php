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
                <div class="col-lg-2 text-right label">District</div>
                 <div class="col-lg-3">
                    <select class="form-control input-sm" name="" ng-model="data.i_district">
                             <option>Abbottabad</option>
                            <option>Bannu</option>
                             <option>Batagram</option>
                             <option>Buner</option>
                             <option>Charsadda</option>
                             <option>Chitral</option>
                            <option>Dera Ismail Khan</option>
                             <option>Hangu</option>
                             <option>Haripur</option>
                             <option>Karak</option>
                             <option>Kohat</option>
                             <option>Kohistan</option>
                             <option>Lakki Marwat</option>
                             <option>Lower Dir</option>
                             <option>Malakand</option>
                             <option>Mansehra</option>
                             <option>Mardan</option>
                             <option>Nowshera</option>
                             <option>Peshawar</option>
                             <option>Shangla</option>
                             <option>Swabi</option>
                            <option>Swat</option>
                             <option>Tank</option>
                             <option>Tor Ghar</option>
                             <option>Upper Dir</option>
                             <option>Lower Kohistan</option>


                      </select>         
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
                <div class="col-lg-2 col-lg-offset-4">
                <input type="submit" value="Submit" class="btn btn-success" ng-disabled="newDistrictReportingForm.$invalid">
                    </div>
                    <div class="col-lg-3">
                    <div class="alert alert-info" ng-show="showalert===1">
            {{message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
                    </div>

                </div>
                </div>                            
                </div>
                </div>

    </form>
         
</div>
