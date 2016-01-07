<?php 
    $this->load->view('template/header');
?>
<?php 
    $this->load->view('template/reporting_menu');
?>
<div class="container" ng-app="pdmadataentry">

<div ng-controller='ItemsCtrl'>
<div class="row">
  <div class="col-lg-8">
    <div class="row">
      <div class="col-sm-12">
       <h2>Items</h2>
       
      </div>
    </div>
    <div class='row'>  
    <div class="col-lg-12"> 
      <div class="table-responsive" >
         <table class="table table-bordered">
          <thead>
            <tr >
              <th>Sr No</th>
              <th>Food Items</th>
              <th>Non Food Items</th>
              <th>Compemsation</th>
              <th>District</th>
              <th>Date</th>
              <th width="30%">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="i in table_info">
              <td>{{$index+1}}</td>
              <td>{{i.i_fooditems}}</td>
              <td>{{i.i_nfooditems}}</td>
              <td>{{i.i_compensation}}</td>
              <td>{{i.i_district}}</td>
              <td>{{i.i_date}}</td>
              
              <td class="text-center">
              <button class='btn btn-sm btn-info' ng-click='getbyid(i.id,1)'>Edit</button>       
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
    <div class="edit-box" ng-show="showItemsEditForm===1">
      <form ng-submit="editItems(row)" name="editItemsForm">
      <div class="row">
        <div class="col-sm-4">
          Food Items:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_fooditems" required></div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Non Food Items:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_nfooditems" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Compensation:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_compensation" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          District:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_district" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Date:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_date" required>
        </div>
      </div>
      <input type="hidden" value="{{row.id}}" ng-model="row.id">
      <input type="submit" value="Submit" class="btn btn-success" ng-disabled="editItemsForm.$invalid">
    </form>
    </div>
  </div>
</div>


</div>

</div>


<?php 
    $this->load->view('template/footer');
?>