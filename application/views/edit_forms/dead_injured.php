<?php
    $this->load->view('template/header');
    print_r($data);
    print_r($budget);
?> 
<style type="text/css">
    .label{
        color: #333;
    }
</style>
<div ng-controller="DeadInjuredCtrl">
    <form ng-submit="AddDeadInjured(data)"method="post" role="form" name="newDeadInjuredForm" novalidate>
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 text">
                            <h2>Dead / Injured</h2>
                        </div>
                    </div>
                    
                      
                        <div class="row">
                        <div class="col-lg-2 label text-right"> Name:</div>
                <div class="col-lg-3 "> 
                <input type="text" class="form-control clear-fix" name="name" id="" placeholder="Name" ng-model="data.name" required value="<?php echo $data['name'];?>">
                </div>
                </div>

                     <div class="row">
                      <div class="col-lg-2 text-right label">Father Name:</div>
                <div class="col-lg-3 "> 
                   <input type="text" class="form-control" name="fathername" id="" placeholder="Father Name" ng-model="data.fathername" value="<?php echo $data['father_name'];?>" >
                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Cnic Number:</div>
                <div class="col-lg-3 "> 
                       <input type="text" class="form-control" name="cnicnumber" id="" placeholder="Cnic number" ng-model="data.cnicnumber" value="<?php echo $data['cnic'];?>">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">District</div>
                <div class="col-lg-3 "> 
                       <input type="text" class="form-control" name="district" id="" placeholder="District" ng-model="data.district" required value="<?php echo $data['district'];?>">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label"> Address:</div>
                <div class="col-lg-3 ">
                       <textarea class="form-control" name="address" id="" placeholder="Address" value="<?php echo $data['address'];?>" ng-model="data.address"></textarea>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Reason:</div>
                <div class="col-lg-3 ">
                       <input type="text" class="form-control" name="reason" id="" placeholder="Reason" value="<?php echo $data['reason'];?>"ng-model="data.reason">
                       </div>
                       </div>
                <div class="row">
                    <div class="col-sm-2 text-right label">Budget</div>
                    <div class="col-sm-3">
                        <select name="budget" required="required">
                        <?php 
                        foreach ($budget as $b) {
                        ?>
                            <option
                            <?php 
                            if($data['b_id']==$b->b_id)
                                echo 'selected';
                            ?>
                            ><?php echo $b->b_amount;?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-2 label text-right"> Date of Report by R.F.S:</div>
                <div class="col-lg-3 "> 
                <p><input type="date" value="<?php echo $data['date_of_report_rfs'];?>" class="form-control" ng-model="data.reportdate"></p>
                </div>
                </div>

                 <div class="row">
                 <div class="col-lg-2 text-right label">Date of accident:</div>
                <div class="col-lg-3 "> 
                <p><input type="date" value="<?php echo $data['date_of_incident'];?>"class="form-control" ng-model="data.incidentdate"></p>
                </div>
                </div>

                    <div class="row">
                      <div class="col-lg-2 text-right label">Halqa patwari:</div>
                     <div class="col-lg-3 "> 
                  <input type="radio" name="halqapatwari" value="yes" 
                  <?php
                if($data['patwari'] == "yes")
                echo 'checked';
                ?>
                  > Yes
                 <input type="radio" name="halqapatwari" value="no" 
                <?php
                if($data['patwari'] == "no")
                echo 'checked';
                ?>
                > No
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Medical Officer/MS/DHO:</div>
                <div class="col-lg-3 "> 
                 <input type="radio" name="medicalofficer" value="yes" 
                 <?php
                if($data['med_officer'] == "yes")
                echo 'checked';
                ?>

                 > Yes
                 <input type="radio" name="medicalofficer" value="no" 
                 <?php
                if($data['med_officer'] == "yes")
                echo 'checked';
                ?>

                 > No

                </div>
                </div>

                 <div class="row">
                      <div class="col-lg-2 text-right label">Tehsildar:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="tehsiladar" value="yes" 
                <?php
                if($data[''] == "yes")
                echo 'checked';
                ?>
                > Yes
                 <input type="radio" name="tehsiladar" value="no" 
                 <?php
                if($data['tehsildar'] == "yes")
                echo 'checked';
                ?>
                 > No
   
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local School Headmaster:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="localschoolheadmaster" value="yes"
                <?php
                if($data['Headmaster'] == "yes")
                echo 'checked';
                ?>
                 > Yes
                 <input type="radio" name="localschoolheadmaster" value="no" 
                 <?php
                if($data['Headmaster'] == "yes")
                echo 'checked';
                ?>
                > No

                      
                </div>
                </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-4">
            <button type="submit" class="btn btn-success" ng-disabled="newDeadInjuredForm.$invalid">Add to list</button>
                    </div>
                </div>
        </form>
        </div>

<?php
$this->load->view('template/footer');

?>