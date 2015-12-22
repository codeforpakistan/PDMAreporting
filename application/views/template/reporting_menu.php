<!-- nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">PDMA</a>
            </div>
            <div class="collapse navbar-collapse" id="example-nav-collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="<?php echo base_url();?>house/data">House Damage</a></li>
                    <li class=""><a href="<?php echo base_url();?>cattle/data">Cattles</a></li>
                    <li class=""><a href="<?php echo base_url();?>deadinjured/data">Dead / Injured</a></li>
                    <li class=""><a href="<?php echo base_url();?>budget/data">Budget</a></li>
                    <li class=""><a href="<?php echo base_url();?>user/data">User</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url();?>logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>


<!-- reporting menu -->
<div class="report-box">
  <div class="container-fluid">
    <div class="row">   
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4 report-head"> <h1> Reporting menu </h1></div>
          </div>
          <br>
          <form action="<?php echo base_url();?>report/general" method="post">
            <div class="row">
                <div class="col-lg-1 text-right label2">From:</div>
                  <div class="col-lg-2 "> 
                     <input type="date" class="form-control input-sm" name="datefrom" id="" placeholder="Date">
                  </div>
                  <div class="col-lg-1 text-right label2">To:</div>
                    <div class="col-lg-2 "> 
                     <input type="date" class="form-control input-sm" name="dateto" id="" placeholder="Date">
                   </div>
                  <div class="col-lg-1 text-right label2">District:</div>
                    <div class="col-lg-2 "> 
                     <input type="text" class="form-control input-sm" name="district" id="" placeholder="District">
                    </div>
                  
                  
                  <div class="col-lg-1 text-right label2"> Option:</div>
                  <div class="col-sm-2">
                    <select class="form-control input-sm" name="option">
                            <option value="0"> View Report Here</option>
                            <option value="1"> Export to Excel</option>
                      </select>         
                  </div>
                  
            </div>
            <br>
            <div class="row text-center">
              <div class="col-sm-4">
                <input type="checkbox" name="big"> Cattle - Big
              </div>
               <div class="col-sm-4">
                <input type="checkbox" name="full"> House - Full Damage
              </div>
               <div class="col-sm-4">
                <input type="checkbox" name="injured"> Person - Injured
              </div>
              </div>

              <div class="row text-center">
              <div class="col-sm-4">
                <input type="checkbox" name="small" style="margin-left:10px" > Cattle - Small
              </div>
             
              <div class="col-sm-4">
                <input type="checkbox" name="partial" style="margin-left:15px"> House - Partial Damage
              </div>
              <div class="col-sm-4">
                <input type="checkbox" name="dead" style="margin-right:10px"> Person - Dead
              </div>
             
            </div>
            <div class="row">
              <div class="col-lg-1 text-center col-lg-offset-10">
                <br>

                <button type="submit" class="btn btn-success btn-lg" > Generate Report</button>

              </div>
            </div> 
          </form> 
        </div>
    </div>
  </div>
</div> 
