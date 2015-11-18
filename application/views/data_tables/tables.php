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
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="i in table_info">
              <td>{{1}}</td>
              <td>{{i.name}}</td>
              <td>{{i.father_name}}</td>
              <td>{{i.date_of_incident}}</td>
              <td>{{i.b_category}}</td>
              <td>{{i.district}}</td>
              <td>{{i.b_amount}}</td>
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
          </tbody>
        </table>
      </div>
    </div>

<!-- modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cattle</h4>
        </div>
        <div class="modal-body">
        <div class="row">
             <div class="col-lg-12 ">
                <div class="form-group">

                    <div class="row">
                    <div class="col-lg-4 ">Name of Owner: </div>
                    <div class="col-sm-4">{{row.name}}</div>     
                  </div>

                      
                     <div class="row">
                       <div class="col-lg-4 ">Father Name:</div>
                       <div class="col-sm-4">{{row.fathername}}</div>
          </div>

                <div class="row">
                      <div class="col-lg-4 ">Date of Incident:</div>
                      <div class="col-sm-4">{{row.dateofincident}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4">Cnic Number:</div>
                  <div class="col-sm-4">{{row.cnicnumber}}</div>
                </div>

                <div class="row">
                <div class="col-lg-4 "> Address:</div>
                <div class="col-sm-4">{{row.address}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 ">Reason For Damage:</div>
                   <div class="col-sm-4">{{row.reason}}</div>

                </div>

                <div class="row">
                  <div class="col-lg-4">House Damage:</div>
                   <div class="col-sm-4">{{row.housedamage}}</div>
                </div>

        <div class="row">
                      <div class="col-lg-4"> Halqa patwari:</div>
                       <div class="col-sm-4">{{row.halqapatwari}}</div>
        </div>

                <div class="row">
                  <div class="col-lg-4">Rep of MPA:</div>
                  <div class="col-sm-4">{{row.repofmpa}}</div>

                </div>

                 <div class="row">
                      <div class="col-lg-4">District Officer Liverstock:</div>
                      <div class="col-sm-4">{{row.districtofficerlivestock}}</div>



        </div>

                <div class="row">
                  <div class="col-lg-4">Local School Headmaster:</div>
                  <div class="col-sm-4">{{row.headmaster}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 ">Local Imam Masjid:</div>
                  <div class="col-sm-4">{{row.imam}}</div>
                </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
      </div>
      
<!-- ----------------- -->
    <div class="row">
        <div class="col-lg-1 col-lg-offset-10">
            <button type="submit" class="btn btn-success">Generate</button>
        </div>
    </div>
  </div>

    
                 

<?php 
    $this->load->view('template/footer');
?>