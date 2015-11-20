<style type="text/css">
    .label{
        color: #333;
    }
</style>
<div ng-controller="HouseDamageCtrl">
<form ng-submit="AddHouseDamage(data)" method="post" role="form" name="newHouseForm" novalidate>
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-sm-2 text">
                            <h2>House Damage</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 label text-right"> Name of Owner:</div>
                <div class="col-lg-3 "> 
                <input type="text" class="form-control" name="" id="" placeholder="Name" ng-model="data.name" required>
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-lg-2 text-right label">Father Name:</div>
                <div class="col-lg-3 "> 
                   <input type="text" class="form-control" name="" id="" placeholder="Father Name" ng-model="data.fathername">
                
                </div>
                </div>
                <div class="row">
                      <div class="col-lg-2 text-right label">Date of Incident:</div>
                <div class="col-lg-3 "> 
                <p><input type="date" class="form-control" ng-model="data.incidentdate"></p>
                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Cnic Number:</div>
                <div class="col-lg-3 "> 
                       <input type="text" class="form-control" name="" id="" placeholder="CNIC Number" ng-model="data.cnicnumber">
                </div>
                </div>
                
                <div class="row">
                <div class="col-lg-2 text-right label">District</div>
                <div class="col-lg-3 "> 
                       <input type="text" class="form-control" name="" id="" placeholder="District" ng-model="data.district" required>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label"> Address:</div>
                <div class="col-lg-3 ">
                       <input type="text" class="form-control" name="" id="" placeholder="Address" ng-model="data.address">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Reason For Damage:</div>
                <div class="col-lg-3 ">
                       <input type="text" class="form-control" name="" id="" placeholder="Reason" ng-model="data.reason">
                       </div>
                       </div>
                <div class="row">
                    <div class="col-sm-2 text-right label">Budget</div>
                    <div class="col-sm-3">
                        <select name="budget" ng-model="data.budget" required="required">
                            <option ng-repeat="b in budget" value="{{b.b_id}}">
                                {{b.b_amount}}
                            </option>
                        </select>
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">House Damage:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="HouseDamage" value="full" ng-model="data.housedamage"> Fully Damage
                 <input type="radio" name="HouseDamage" value="partial" ng-model="data.housedamage"> Partially Damage

                
                </div>
                </div>

                    <div class="row">
                      <div class="col-lg-2 text-right label">Halqa patwari:</div>
                     <div class="col-lg-3 "> 
                  <input type="radio" name="Halqapatwari" value="yes" ng-model="data.halqapatwari"> Yes
                 <input type="radio" name="Halqapatwari" value="no" ng-model="data.halqapatwari"> No

                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Rep of MPA:</div>
                <div class="col-lg-3 "> 
                 <input type="radio" name="RepOfMPA" value="yes" ng-model="data.repofmpa"> Yes
                 <input type="radio" name="RepOfMPA" value="no" ng-model="data.repofmpa"> No

                </div>
                </div>

                 <div class="row">
                      <div class="col-lg-2 text-right label">Tehsiladar:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="Tehsiladar" value="yes" ng-model="data.tehsildar"> Yes
                 <input type="radio" name="Tehsiladar" value="no" ng-model="data.tehsildar"> No
   
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local School Headmaster:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="LocalSchoolHeadmaster" value="yes" ng-model="data.localschoolheadmaster"> Yes
                 <input type="radio" name="LocalSchoolHeadmaster" value="no" ng-model="data.localschoolheadmaster"> No

                      
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local Imam Masjid:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="LocalImamMasjid" value="yes" ng-model="data.localimammasjid"> Yes
                 <input type="radio" name="LocalImamMasjid" value="no" ng-model="data.localimammasjid"> No

                      
                </div>
                </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-4">
            <button type="submit" class="btn btn-success" ng-disabled="newHouseForm.$invalid">Add to list</button>
                    </div>
                </div>
        </form>
        </div>
        <script>
          $( ".datepicker" ).datepicker();
        </script>
