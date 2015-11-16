<?php 
    $this->load->view('template/header');
?>

<div class="container" ng-app="pdmadataentry">
<div class="row" >   
      <div class="col-lg-1 text-right repo"> Report <?php  $type = $this->uri->segment(1)  ?> </div>
      </div> <br/>
  <!-- <div class="row" ng-controller="getTablesCtrl"> -->
  <?php  
  	if($type == "house"){
  		echo "<div class='row' ng-controller='HouseDamageCtrl'>";
  	}else if($type == "cattle"){
  		echo "<div class='row' ng-controller='CattleCtrl'>";
  	}else{
  		echo "<div class='row' ng-controller='DeadInjuredCtrl'>";
  	}
  ?>
    <div class="col-lg-12"> 
      <div class="table-responsive" >
         <table class="table table-bordered">
          <thead>
            <tr >
              <th>Sr No</th>
              <th>Name</th>
              <th>Father Name</th>
              <th>Date of Accident</th>
              <th>Category</th>
              <th>District</th>
              <th>Budget</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="h in table_info">
              <td>{{1}}</td>
              <td>{{h.name}}</td>
              <td>{{h.father_name}}</td>
              <td>{{h.date_of_incident}}</td>
              <td>{{h.b_category}}</td>
              <td>{{h.district}}</td>
              <td>{{h.b_amount}}</td>

            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    <div class="row">
                <div class="col-lg-1 col-lg-offset-10">
            <button type="submit" class="btn btn-success">Generate</button>
                    </div>
                </div>
                 

<?php 
    $this->load->view('template/footer');
?>