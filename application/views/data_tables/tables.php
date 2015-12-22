<?php 
    $this->load->view('template/header');
?>
<?php 
    $this->load->view('template/reporting_menu');
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
      <div class="row">
        <div class="col-sm-3">
          <input type="text" class="form-control" placeholder="CNIC" ng-model="searchCNIC">
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" placeholder="District" ng-model="searchDistrict">
        </div>
      </div> 
      <div class="table-responsive" >
         <table class="table table-bordered">
          <thead>
            <tr >
              <th>Sr No</th>
              <th>Name</th>
              <th>CNIC</th>
              <th>Father Name</th>
              <th>District</th>
              <th>Date of Accident</th>
              <?php 
              if($type=='cattle')
                echo "<th>Cattle Type</th>";
              if($type=='deadinjured')
                echo "<th>Casualty Type</th>";
              if($type=='house')
                echo "<th>Damage Type</th>";
              ?>
              <th>Budget (PKR)</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="i in filtered = (table_info | filter:{cnic:searchCNIC, district:searchDistrict })">
              <td>{{$index + 1}}</td>
              <td>{{i.name}}</td>
              <td>{{i.cnic}}</td>
              <td>{{i.father_name}}</td>
              <td>{{i.district}}</td>
              <td>{{i.date_of_incident}}</td>
              <td>{{i.b_category}}</td>
              <td align="right">{{i.b_amount | currency : '' : 0}}</td>
              <td class="text-center">
              <?php  
                if($type == "house"){
                  echo "<button class='btn btn-sm btn-info' data-toggle='modal' data-target='#myModal' ng-click='getbyid(i.hd_id)'>Details</button>";
                }else if($type == "cattle"){
                  echo "<button class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myModal' ng-click='getbyid(i.ct_id)'>Details</button>";
                }else{
                  echo "<button class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myModal' ng-click='getbyid(i.di_id)'>Details</button>";
                }
              ?>
              </td>
            </tr>
            <tr>
              <td colspan="6" align="right"></td>
              <td align="right" colspan="2">
                <b>Total Budget: <big>{{ filtered | sumFilter | currency : '' : 0 }}</big></b>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

<?php 
    if($type == "cattle")
      $this->load->view('modal/modal_cattle');
    if($type == "house")
      $this->load->view('modal/modal_house');
    if($type == "deadinjured")
      $this->load->view('modal/modal_deadinjured');

?>

   
  </div> 


<?php 
    $this->load->view('template/footer');
?>
