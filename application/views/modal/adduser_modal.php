
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New User Form</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              <form ng-submit="AddUser(data)" method="post" role="form">
           
                  <div class="row">
                       <div class="col-sm-3 label text-right"> Full Name:</div>
                          <div class="col-sm-6 "> 
                          <input type="text" class="form-control" name="" id="" placeholder="Full Name" ng-model="data.fullname">
                          </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-3 label text-right"> User Name:</div>
                          <div class="col-sm-6 "> 
                          <input type="text" class="form-control" name="" id="" placeholder="User Name" ng-model="data.username">
                          </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-3 label text-right"> Password:</div>
                          <div class="col-sm-6 "> 
                          <input type="text" class="form-control" name="" id="" placeholder="Password" ng-model="data.password">
                          </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-3 label text-right"> Email Address:</div>
                          <div class="col-sm-6 "> 
                          <input type="text" class="form-control" name="" id="" placeholder="Email Address" ng-model="data.emailaddress">
                          </div>
                   </div>

                  <div class="row">
                  <div class="col-sm-3 label text-right"> Type of User:</div>
                  <div class="col-sm-6">
                    <select class="form-control">
                           <option>Data Entry Operator</option>
                          <option> AD </option>
                          <option> MIS User</option>
                      </select>         
                  </div>
                  </div>  
                   <div class="row">
                          <div class="col-sm-6 col-lg-offset-4">
                      <button type="submit" class="btn btn-success">Add User</button>
                          </div>
                  </div>  
                 
              </form>
            </div> 
          </div>
        </div>
      </div>
      </div>
      </div>