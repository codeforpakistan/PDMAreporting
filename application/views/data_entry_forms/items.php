<style type="text/css">
    .label{
        color: #333;
    }
</style>
<div ng-controller="ItemsCtrl">
    <form novalidate ng-submit="addItems(data)" method="post" name="newItemsForm">
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 text">
                            <h2>Items</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 label text-right"> Food Items:</div>
                <div class="col-lg-3 "> 
                <input type="number" class="form-control" name="" id="" placeholder="Food Items" ng-model="data.fi" required>
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-lg-2 text-right label"> Non Food Items:</div>
                <div class="col-lg-3 "> 
                   <input type="number" class="form-control" name="" id="" placeholder="Non Food Items" ng-model="data.nfi" required>
                
                </div>
                </div>
                <!--
                <div class="row">
                      <div class="col-lg-2 text-right label"> Compensation:</div>
                <div class="col-lg-3 "> 
                   <input type="number" class="form-control" name="" id="" placeholder="compensation" ng-model="data.compensation" required>
                
                </div>
                </div>
              -->
                <div class="row">
                <div class="col-lg-2 text-right label">District</div>
                 <div class="col-lg-3">
                    <select class="form-control input-sm" name="" ng-model="data.district">
                            <option >Abbottabad</option>
                            <option >Bannu</option>
                             <option> Batagram</option>
                             <option> Buner</option>
                             <option> Charsadda</option>
                             <option> Chitral</option>
                            <option> Dera Ismail Khan</option>
                             <option> Hangu</option>
                             <option> Haripur</option>
                             <option> Karak</option>
                             <option> Kohat</option>
                             <option> Kohistan</option>
                             <option> Lakki Marwat</option>
                             <option> Lower Dir</option>
                             <option> Malakand</option>
                             <option> Mansehra</option>
                             <option> Mardan</option>
                             <option> Nowshera</option>
                             <option> Peshawar</option>
                             <option> Shangla</option>
                             <option> Swabi</option>
                            <option> Swat</option>
                             <option> Tank</option>
                             <option> Tor Ghar</option>
                             <option>  Upper Dir</option>
                             <option> Lower Kohistan</option>


                      </select>         
                  </div>
                </div>
                <div class="row">
                      <div class="col-lg-2 text-right label">Date:</div>
                <div class="col-lg-3 "> 
                <p><input type="date" class="form-control" ng-model="data.date" required></p>
                
                </div>
                </div>
                <div class="row">
                <br>
                <div class="col-lg-2 col-lg-offset-4">
                <input type="submit" value="Submit" class="btn btn-success" ng-disabled="newItemsForm.$invalid">
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
