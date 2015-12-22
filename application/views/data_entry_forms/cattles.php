<style type="text/css">
    .label{
        color: #333;
    }
</style>
<div ng-controller="CattleCtrl">
    <form novalidate ng-submit="addCattle(data)" method="post" name="newCattleForm">
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 text">
                            <h2>Cattles</h2>
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
                   <input type="text" class="form-control" name="" id="" placeholder="Father Name" ng-model="data.fathername" required>
                
                </div>
                </div>
                <div class="row">
                      <div class="col-lg-2 text-right label">Date of Incident:</div>
                <div class="col-lg-3 "> 
                <p><input type="date" class="form-control" ng-model="data.incidentdate" ></p>
                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">CNIC Number:</div>
                <div class="col-lg-3 "> 
                       <input type="text" class="form-control" name="" id="" placeholder="CNIC Number" ng-model="data.cnicnumber" required>
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
                       <textarea class="form-control" name="" id="" placeholder="Address" ng-model="data.address"></textarea>
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
                <div class="col-lg-2 text-right label">Cattle Type:</div>
                <div class="col-lg-3"> 
                <input type="radio" name="cattletype" value="small" ng-model="data.cattletype"> Small
                <input type="radio" name="cattletype" value="big" ng-model="data.cattletype"> Big

                
                </div>
                </div>

                    <div class="row">
                      <div class="col-lg-2 text-right label">Halqa patwari:</div>
                     <div class="col-lg-3 "> 
                  <input type="radio" name="HalqaPatwari" value="1" ng-model="data.halqapatwari"> Yes
                 <input type="radio" name="HalqaPatwari" value="0" ng-model="data.halqapatwari"> No

                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Rep of MPA:</div>
                <div class="col-lg-3 "> 
                 <input type="radio" name="RepOfMPA" value="1" ng-model="data.repofmpa"> Yes
                 <input type="radio" name="RepOfMPA" value="0" ng-model="data.repofmpa"> No

                </div>
                </div>

                 <div class="row">
                      <div class="col-lg-2 text-right label">District Officer Liverstock:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="DistrictOfficerLiverstock" value="1" ng-model="data.districtofficerlivestock"> Yes
                 <input type="radio" name="DistrictOfficerLiverstock" value="0" ng-model="data.districtofficerlivestock"> No
   
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local School Headmaster:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="headmaster" value="1" ng-model="data.headmaster"> Yes
                 <input type="radio" name="headmaster" value="0" ng-model="data.headmaster"> No

                      
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local Imam Masjid:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="imam" value="1" ng-model="data.imam"> Yes
                <input type="radio" name="imam" value="0" ng-model="data.imam"> No

                      
                </div>
                </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-4">
                <input type="submit" value="Submit" class="btn btn-success" ng-disabled="newCattleForm.$invalid">
                    </div>
                </div>
    </form>
        {{message}}
</div>
<script>
          $( ".datepicker" ).datepicker();
        </script>
        <script type="text/javascript">
            generate('warning', 'this is my message');
        </script>
