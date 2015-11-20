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
<div ng-controller="CattleCtrl">
    <form novalidate method="post">
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-sm-2 text">
                            <h2>Cattles</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 label text-right"> Name of Owner:</div>
                <div class="col-lg-3 "> 
                <input type="text" class="form-control" name="name" id="" placeholder="Name" ng-model="data.name" required value="<?php echo $data['name'];?>">
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-lg-2 text-right label">Father Name:</div>
                <div class="col-lg-3 "> 
                   <input type="text" value="<?php echo $data['father_name'];?>" class="form-control" name="fathername" id="" placeholder="Father Name" ng-model="data.fathername" required>
                
                </div>
                </div>
                <div class="row">
                      <div class="col-lg-2 text-right label">Date of Incident:</div>
                <div class="col-lg-3 "> 
                <p><input type="date" value="<?php echo $data['date_of_incident'];?>" class="form-control" name="incidentdate" ng-model="data.incidentdate" required></p>
                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">CNIC Number:</div>
                <div class="col-lg-3 "> 
                       <input type="text" value="<?php echo $data['cnic'];?>" class="form-control" name="cnicnumber" id="" placeholder="CNIC Number" ng-model="data.cnicnumber" required>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">District</div>
                <div class="col-lg-3 "> 
                       <input type="text" value="<?php echo $data['district'];?>" class="form-control" name="District" id="" placeholder="District" ng-model="data.district" required>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label"> Address:</div>
                <div class="col-lg-3 ">
                       <textarea class="form-control" name="address" id="" placeholder="Address" ng-model="data.address">
                           <?php echo $data['address'];?>
                       </textarea>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Reason For Damage:</div>
                <div class="col-lg-3 ">
                       <input type="text" value="<?php echo $data['reason'];?>" class="form-control" name="reason" id="" placeholder="Reason" ng-model="data.reason">
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
                <div class="col-lg-2 text-right label">Cattle Type:</div>
                <div class="col-lg-3"> 
                <input type="radio" name="cattletype" value="small"
                <?php
                if($data['cattle_type'] == "small")
                echo 'checked';
                ?>
                > Small
                <input type="radio" name="cattletype" value="big"
                <?php
                if($data['cattle_type'] == "big")
                echo 'checked';
                ?>
                > Big

                
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
                <div class="col-lg-2 text-right label">Rep of MPA:</div>
                <div class="col-lg-3 "> 
                 <input type="radio" name="repofmpa" value="yes" 
                 <?php
                    if($data['rep_mpa'] == "yes")
                    echo 'checked';
                    ?>
                 > Yes
                 <input type="radio" name="repofmpa" value="no" 
                 <?php
                    if($data['rep_mpa'] == "no")
                    echo 'checked';
                ?>
                 > No

                </div>
                </div>

                 <div class="row">
                      <div class="col-lg-2 text-right label">District Officer Liverstock:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="districtofficerliverstock" value="yes" 
                <?php
                    if($data['officer_livestock'] == "yes")
                    echo 'checked';
                    ?>
                > Yes
                 <input type="radio" name="officerlivestock" value="no" 
                 <?php
                    if($data['officer_livestock'] == "no")
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
                <div class="col-lg-2 text-right label">Local Imam Masjid:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="imam" value="yes" 
                <?php
                    if($data['imam'] == "yes")
                    echo 'checked';
                    ?>
                > Yes
                <input type="radio" name="imam" value="no" 
                <?php
                    if($data['imam'] == "no")
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
                <input type="submit" value="Submit" class="btn btn-success" ng-disabled="newCattleForm.$invalid">
                    </div>
                </div>
    </form>
</div>
<script>
          $( ".datepicker" ).datepicker();
        </script>
<?php
$this->load->view('template/footer');

?>