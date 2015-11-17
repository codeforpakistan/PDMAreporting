<?php 
    $this->load->view('template/header');
?>

<div class="container" ng-app="pdmadataentry">

<div ng-controller='UserCtrl'>
<div class='row'>  
    <div class="col-lg-12"> 
      <div class="table-responsive" >
         <table class="table table-bordered">
          <thead>
            <tr >
              <th>Sr No</th>
              <th>Full Name</th>
              <th>User Name</th>
              <th>Email</th>
              <th>Category</th>
              <th width="30%">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="i in table_info">
              <td>{{1}}</td>
              <td>{{i.u_fullname}}</td>
              <td>{{i.u_username}}</td>
              <td>{{i.u_email}}</td>
              <td>{{i.u_category}}</td>
              <td class="text-center">
              <button class='btn btn-sm btn-info' ng-click='getbyid(i.u_id,1)'>Edit</button>       
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-1 col-lg-offset-10">
            <button type="submit" class="btn btn-success">Generate</button>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <form ng-show="showUserEditForm===1" ng-submit="editUserCategory(row)">
      <div class="row">
        <div class="col-sm-2">
          Full Name:
        </div>
        <div class="col-sm-3">
          {{row.u_fullname}}
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          User Name:
        </div>
        <div class="col-sm-4">
          {{row.u_username}}
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          Email:
        </div>
        <div class="col-sm-3">
          {{row.u_email}}
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          Category:
        </div>
        <div class="col-sm-3">
          <select class="form-control" ng-model="row.u_category">
            <option value="{{row.u_category}}" selected="selected">{{row.u_category}}</option>
            <option value="MIS User">MIS User</option>
            <option value="Assistant Director">Assistant Director</option>
            <option value="Data Entry Operator">Data-Entry Operator</option>
          </select>
        </div>
      </div>
    
      <input type="hidden" value="{{row.u_id}}" ng-model="row.u_id">
      <input type="submit" value="Edit" class="btn btn-success">
    </form>
  </div>
</div>
</div>

</div>
<?php 
    $this->load->view('template/footer');
?>