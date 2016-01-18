
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Budget Form</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
             <form novalidate ng-submit="addBudget(data)" method="post" name="newBudgetForm">

                <div class="row">
                       <div class="col-sm-3 label text-right"> Amount:</div>
                          <div class="col-sm-6 "> 
                          <input type="text" class="form-control" name="" id="" placeholder="Amount" ng-model="data.amount" required>
                          </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-3 label text-right"> Year:</div>
                          <div class="col-sm-6 "> 
                          <input type="text" class="form-control" name="" id="" placeholder="Year" ng-model="data.year" required>
                          </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-3 label text-right"> Category:</div>
                        <div class="col-sm-6">
                            <select class="form-control" ng-model="data.category" required>
                                   <option value="partial">House - Partial Damage</option>
                                  <option value="full"> House - Fully Damage </option>
                                  <option value="big"> Cattle - Big</option>
                                  <option value="small"> Cattle - Small</option>
                                  <option value="dead"> Person - Dead </option>
                                   <option value="injured"> Person - Injured </option>
                              </select>         
                          <input type="submit" value="Submit" class="btn btn-success" ng-disabled="newBudgetForm.$invalid">
                        </div>
                        <div class="col-sm-3">
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
          </div>
        </div>
      </div>
      </div>
      </div>