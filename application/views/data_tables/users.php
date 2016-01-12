<?php 
    $this->load->view('template/header');
?>
<?php 
    $this->load->view('template/reporting_menu');
?>
<div class="container" ng-app="pdmadataentry">

<div ng-controller='UserCtrl'>
<div class="row">
  <div class="col-lg-8">
    <div class="row">
      <div class="col-sm-12">
       <h2>Users</h2>
        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add New User</button>
      </div>
    </div>
    <br>
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
              <th>Group Type</th>
              <th width="30%">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="i in table_info">
              <td>{{$index+1}}</td>
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
        <div class="col-lg-1 col-lg-offset-9">
        </div>
    </div>
</div>
  </div>
  <div class="col-lg-4">
    <div class="edit-box">
      <form ng-show="showUserEditForm===1" ng-submit="editUserCategory(row)">
      <div class="row">
        <div class="col-sm-4">
          Full Name:
        </div>
        <div class="col-sm-8">
          {{row.u_fullname}}
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          User Name:
        </div>
        <div class="col-sm-8">
          {{row.u_username}}
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Email:
        </div>
        <div class="col-sm-8">
          {{row.u_email}}
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Group Type:
        </div>
        <div class="col-sm-8">
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

<?php $this->load->view('modal/adduser_modal');?>
</div>

</div>


<?php 
    $this->load->view('template/footer');
?>