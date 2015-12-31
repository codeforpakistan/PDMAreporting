<?php 
    $this->load->view('template/header');
?>
<?php 
    $this->load->view('template/reporting_menu');
?>
<div class="container" ng-app="pdmadataentry">

<div ng-controller='ComplaintCtrl'>
<div class="row">
  <div class="col-lg-8">
    <div class="row">
      <div class="col-sm-12">
       <h2>Complaint</h2>
       
      </div>
    </div>
    <div class='row'>  
    <div class="col-lg-12"> 
      <div class="table-responsive" >
         <table class="table table-bordered">
          <thead>
            <tr >
              <th>Sr No</th>
              <th>Full Name</th>
              <th>Father Name</th>
              <th>CNIC Number</th>
              <th>District</th>
              <th>Address</th>
              <th>Description</th>
              <th width="30%">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="i in table_info">
              <td>{{$index+1}}</td>
              <td>{{i.name}}</td>
              <td>{{i.father_name}}</td>
              <td>{{i.cnic}}</td>
              <td>{{i.district}}</td>
              <td>{{i.address}}</td>
              <td>{{i.reason}}</td>
              <td class="text-center">
              <button class='btn btn-sm btn-info' ng-click='getbyid(i.cm_id,1)'>Edit</button>       
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
    <div class="edit-box" ng-show="showComplaintEditForm===1">
      <form ng-submit="editComplaint(row)" name="editComplaintForm">
      <div class="row">
        <div class="col-sm-4">
          Full Name:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.name" required></div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Father Name:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.father_name" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          CNIC Number:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.cnic" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Address:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.address" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          District:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.district" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Description:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.reason" required>
        </div>
      </div>
      
    
      <input type="hidden" value="{{row.cm_id}}" ng-model="row.u_id">
      <input type="submit" value="Submit" class="btn btn-success" ng-disabled="editComplaintForm.$invalid">
    </form>
    </div>
  </div>
</div>


</div>

</div>


<?php 
    $this->load->view('template/footer');
?>