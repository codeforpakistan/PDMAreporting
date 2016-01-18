<?php
    $this->load->view('template/header');
   
?> 
<style type="text/css">
    .label{
        color: #333;
    }
</style>
<div class="container">
    <div ng-controller="DeadInjuredCtrl">
    <form method="post" action="<?php echo base_url();?>deadinjured/update">
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
                <div class="col-lg-3">
                    <select class="form-control input-sm" name="district" ng-model="data.district">
                    <optiion selected="selected"><?php
                    echo $data['di_district'];?></optiion>
                            <option >Abbottabad</option>
                            <option >Bannu</option>
                             <option> Batagram</option>
                             <option> Buner</option>
                             <option> Charsadda</option>
                             <option> Chitral</option>
                            <option> Dera Ismail Khan</option>
                             <option> Hangu</option>
                             <option> Haripur</option>
                             <option> Karak</option>
                             <option> Kohat</option>
                             <option> Kohistan</option>
                             <option> Lakki Marwat</option>
                             <option> Lower Dir</option>
                             <option> Malakand</option>
                             <option> Mansehra</option>
                             <option> Mardan</option>
                             <option> Nowshera</option>
                             <option> Peshawar</option>
                             <option> Shangla</option>
                             <option> Swabi</option>
                            <option> Swat</option>
                             <option> Tank</option>
                             <option> Tor Ghar</option>
                             <option>  Upper Dir</option>
                             <option> Lower Kohistan</option>


                      </select>         
                  </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label"> Address:</div>
                <div class="col-lg-3 ">
                       <textarea class="form-control" name="address" id="" placeholder="Address" ng-model="data.address"><?php echo $data['address'];?></textarea>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Nature Of Clamity:</div>
                <div class="col-lg-3">
                    <select class="form-control input-sm" name="reason" ng-model="data.reason">
                    <optiion selected="selected"><?php
                    echo $data['di_reason'];?></optiion>
                            <option >Flood </option>
                            <option >Flood </option>
                            <option >Earth Quake</option>
                             <option> Thunder Storm</option>
                      </select>         
                  </div>
                       </div>
                <div class="row">
                    <div class="col-sm-2 text-right label">Budget</div>
                    <div class="col-sm-3">
                        <select name="budget" required="required">
                        <?php 
                        foreach ($budget as $b) {
                        ?>
                            <option value="<?php echo $b->b_id?>"
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
                    <div class="col-sm-2 text-right label">
                        Special Compensation <input type="checkbox" name="" id="compensation-checkbox">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="" class="form-control" id="compensation-amount" disabled ng-model="data.special_compensation">
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-2 label text-right"> Date of Report by R.F.S:</div>
                <div class="col-lg-3 "> 
                <p><input name="dateofreport" type="date" value="<?php echo $data['date_of_report_rfs'];?>" class="form-control" ng-model="data.reportdate"></p>
                </div>
                </div>

                 <div class="row">
                 <div class="col-lg-2 text-right label">Date of accident:</div>
                <div class="col-lg-3 "> 
                <p><input name="incidentdate" type="date" value="<?php echo $data['date_of_incident'];?>"class="form-control" ng-model="data.incidentdate"></p>
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
                if($data['med_officer'] == "no")
                echo 'checked';
                ?>

                 > No

                </div>
                </div>

                 <div class="row">
                      <div class="col-lg-2 text-right label">Tehsildar:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="tehsildar" value="yes" 
                <?php
                if($data['tehsildar'] == "yes")
                echo 'checked';
                ?>
                > Yes
                 <input type="radio" name="tehsildar" value="no" 
                 <?php
                if($data['tehsildar'] == "no")
                echo 'checked';
                ?>
                 > No
   
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local School Headmaster:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="headmaster" value="yes"
                <?php
                if($data['headmaster'] == "yes")
                echo 'checked';
                ?>
                 > Yes
                 <input type="radio" name="headmaster" value="no" 
                 <?php
                if($data['headmaster'] == "no")
                echo 'checked';
                ?>
                > No

                      
                </div>
                </div>

                 <div class="row">
                <div class="col-lg-2 text-right label">Counter Signed by DC :</div>
                <div class="col-lg-3 "> 
               <input type="radio" name="dc" value="yes" 
                <?php
                    if($data['dc'] == "yes")
                    echo 'checked';
                    ?>
                > Yes
                <input type="radio" name="dc" value="no" 
                <?php
                    if($data['dc'] == "no")
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
                <input type="hidden" value="<?php echo $data['di_id']?>" name="di_id">
            <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
        </form>
        </div>
</div>

<?php
$this->load->view('template/footer');

?>