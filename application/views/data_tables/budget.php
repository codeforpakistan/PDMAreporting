<?php 
    $this->load->view('template/header');
?>

<div class="container" ng-app="pdmadataentry">

<div ng-controller='budgetCtrl'>
<div class="row">
  <div class="col-lg-8">
    <div class="row">
        <div class="col-sm-12">
          <h2>Budget</h2>
          <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add New</button>
        </div>
      </div>
    <div class='row'>  
    <div class="col-lg-12"> 
      <div class="table-responsive" >
         <table class="table table-bordered">
          <thead>
            <tr >
              <th>Sr No</th>
              <th>Year</th>
              <th>Amount</th>
              <th>Category</th>
              <th width="30%">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="i in table_info">
              <td>{{$index+1}}</td>
              <td>{{i.b_year}}</td>
              <td>{{i.b_amount}}</td>
              <td>{{i.b_category}}</td>
              <td class="text-center">
              <button class='btn btn-sm btn-info' ng-click='getbyid(i.b_id,1)'>Edit</button>       
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-1 col-lg-offset-9">
            <button type="submit" class="btn btn-success">Generate</button>
        </div>
    </div>
</div>
  </div>
  <div class="col-lg-4">
  {{message_update}}
    <form novalidate ng-show="showBudgetEditForm===1" ng-submit="editBudget(row)" name="editBudgetForm">
      <div class="row">
        <div class="col-sm-4">
          Year:
        </div>
        <div class="col-sm-8">
            <input type="text" class="form-control" value="" ng-model="row.b_year" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Amount:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.b_amount" required>        
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-4">
          Category:
        </div>
        <div class="col-sm-8">
          <select class="form-control" ng-model="row.b_category">
            <option value="{{row.u_category}}" selected="selected" ng-if="row.b_category=='partial'">
              House - Partial
            </option>
            <option value="{{row.u_category}}" selected="selected" ng-if="row.b_category=='full'">
              House - Fully Damage
            </option>
            <option value="{{row.u_category}}" selected="selected" ng-if="row.b_category=='big'">
              Cattle - Big
            </option>
            <option value="{{row.u_category}}" selected="selected" ng-if="row.b_category=='small'">
              Cattle - Small
            </option>
            <option value="{{row.u_category}}" selected="selected" ng-if="row.b_category=='dead'">
              Person - Dead
            </option>
            <option value="{{row.u_category}}" selected="selected" ng-if="row.b_category=='injured'">
              Person - Injured
            </option>
              <option value="partial">House - Partial Damage</option>
              <option value="full"> House - Fully Damage </option>
              <option value="big"> Cattle - Big</option>
              <option value="small"> Cattle - Small</option>
              <option value="dead"> Person - Dead </option>
              <option value="injured"> Person - Injured </option>
          </select>
        </div>
      </div>
    
      <input type="hidden" value="{{row.b_id}}" ng-model="row.u_id">
      <input type="submit" value="Edit" class="btn btn-success" ng-disabled="editBudgetForm.$invalid">
    </form>
  </div>
</div>
			
    <?php $this->load->view('modal/addbudget_modal');?>
    </div>
    
    </div>

   <?php 
    $this->load->view('template/footer');
?>
