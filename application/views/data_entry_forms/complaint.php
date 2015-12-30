<style type="text/css">
    .label{
        color: #333;
    }
</style>

<div ng-controller="ComplaintCtrl">
    <form novalidate ng-submit="addComplaint(data)" method="post" name="newComplaintForm">
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 text">
                            <h2>Complaint</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 label text-right"> Name :</div>
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
                <div class="col-lg-2 text-right label">Reason:</div>
                <div class="col-lg-3 ">
                       <textarea class="form-control" name="" id="" placeholder="" ng-model="data.reason"></textarea>
                       </div>
                       </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-4">
                <input type="submit" value="Submit" class="btn btn-success" ng-disabled="newComplaintForm.$invalid">
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