<?php 
    $this->load->view('template/header');
?>
<?php 
    $this->load->view('template/reporting_menu');
?>
<div class="container" ng-app="pdmadataentry">

<div ng-controller='DistrictReportingCtrl'>
<div class="row">
  <div class="col-lg-8">
    <div class="row">
      <div class="col-sm-12">
       <h2>District Reporting</h2>
       
      </div>
    </div>

      <div class="row">
        <div class="col-sm-4">
          <input type="text" class="form-control" placeholder="District" ng-model="searchDistrict">
        </div>
      </div>

    <div class='row'>  
    <div class="col-lg-12"> 
      <div class="table-responsive" >
         <table class="table table-bordered">
          <thead>
            <tr >
              <th>Sr No</th>
              <th>House Damage Full</th>
              <th>House Damage Partial</th>
              <th>Cattle Big</th>
              <th>Cattle Small</th>
              <th>Dead</th>
              <th>Injured</th> 
              <th>District</th>
              <th>Date</th>
              <?php
        $is_ad = $this->session->userdata('is_mis');
        if ($is_ad) {

        ?>
              <th width="30%">Action</th>
              <?php
}
?> 
            </tr>
          </thead>
          <tbody>
             <tr ng-repeat="i in filtered = (table_info | filter:{i_district:searchDistrict })">
              <td>{{$index+1}}</td>
              <td>{{i.i_hd_full}}</td>
              <td>{{i.i_hd_partial}}</td>
              <td>{{i.i_c_big}}</td>
              <td>{{i.i_c_small}}</td>
              <td>{{i.i_dead}}</td>
              <td>{{i.i_injured}}</td>
              <td>{{i.i_district}}</td>
              <td>{{i.i_date}}</td>
                <?php
        $is_ad = $this->session->userdata('is_mis');
        if ($is_ad) {

        ?>
              
              <td class="text-center">
              <button class='btn btn-sm btn-info' ng-click='getbyid(i.id,1)'>Edit</button>       
              </td>
               <?php
}
?>
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
    <div class="edit-box" ng-show="showDistrictReportingEditForm===1">
      <form ng-submit="editDistrictReporting(row)" name="editDistrictReportingForm">
      <div class="row">
        <div class="col-sm-4">
          House Damage Full:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_hd_full" required></div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          House Damage Partial:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_hd_partial" required></div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Cattle Big:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_c_big" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Cattle Small:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_c_small" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Dead:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_dead" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          Injured:
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="" ng-model="row.i_injured" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          District:
        </div>
        <div class="col-sm-8">
          <!-- <input type="text" class="form-control" value="" ng-model="row.i_district" required> -->
           <select class="form-control input-sm" name="district" ng-model="row.i_district">
                            <option>Abbottabad</option>
                            <option>Bannu</option>
                             <option>Batagram</option>
                             <option>Buner</option>
                             <option>Charsadda</option>
                             <option>Chitral</option>
                            <option>Dera Ismail Khan</option>
                             <option>Hangu</option>
                             <option>Haripur</option>
                             <option>Karak</option>
                             <option>Kohat</option>
                             <option>Kohistan</option>
                             <option>Lakki Marwat</option>
                             <option>Lower Dir</option>
                             <option>Malakand</option>
                             <option>Mansehra</option>
                             <option>Mardan</option>
                             <option>Nowshera</option>
                             <option>Peshawar</option>
                             <option>Shangla</option>
                             <option>Swabi</option>
                            <option>Swat</option>
                             <option>Tank</option>
                             <option>Tor Ghar</option>
                             <option>Upper Dir</option>
                             <option>Lower Kohistan</option>
                      </select>
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
      <input type="submit" value="Submit" class="btn btn-success" ng-disabled="editDistrictReportingForm.$invalid">
    </form>
    </div>
  </div>
</div>


</div>

</div>


<?php 
    $this->load->view('template/footer');
?>